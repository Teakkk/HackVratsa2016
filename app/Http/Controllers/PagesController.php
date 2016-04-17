<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Job;
use App\Cv;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function homepage()
    {
        $lastjobs = DB::table('jobs')
            ->join('categories', 'jobs.cat_id', '=', 'categories.id')
            ->select('jobs.title', 'jobs.id', 'jobs.created_at', 'categories.value')->orderBy('created_at', 'desc')
            ->get();
        $categories = DB::table('categories')->skip(1)->take(10)->get();
        return view('home', compact('categories'), compact('lastjobs'));
    }

    public function jobs()
    {
        $jobs = DB::table('jobs')
            ->join('categories', 'jobs.cat_id', '=', 'categories.id')
            ->select('jobs.*', 'categories.value')->orderBy('created_at', 'desc')
            ->get();

        $jobsArr = array();
        $i = 0;
        foreach ($jobs as $job) {
            $jobsArr[$i]['id'] = $job->id;
            $jobsArr[$i]['title'] = $job->title;
            $jobsArr[$i]['category'] = $job->value;
            if ($job->logo == '') {
                $jobsArr[$i]['logo'] = 'logos/nologo.png';
            } else {
                $jobsArr[$i]['logo'] = $job->logo;
            }
            $jobsArr[$i]['description'] = mb_substr($job->description, 0, 100);
            $i++;
        }

        $categories = DB::table('categories')->take(15)->get();
        return view('jobs', compact('categories'), ['jobs' => $jobsArr]);
    }

    public function job($id = 0)
    {
        // update visits
        $jobv = Job::findOrFail($id);
        $jobv->visits += 1;
        $jobv->save();

        $job = DB::table('jobs')
            ->join('categories', 'jobs.cat_id', '=', 'categories.id')
            ->join('job_types', 'jobs.jobtype_id', '=', 'job_types.id')
            ->join('job_terms', 'jobs.jobterm_id', '=', 'job_terms.id')
            ->join('clevels', 'jobs.clevel_id', '=', 'clevels.id')
            ->select('jobs.*', 'categories.value as cat_name', 'job_types.value as jobtype_name'
                , 'job_terms.value as jobterm_name', 'clevels.value as clevel_name')
            ->orderBy('created_at', 'desc')
            ->where('jobs.id', '=', $id)
            ->get();
        //dd($job);exit;
        return view('job', ['job' => $job]);
    }

    public function candidate(Request $request, $id)
    {
        $job_id = $id;
        $cv = Cv::where('user_id', '=', Auth::user()->id)->first();
        $cv_id = $cv->id;
        DB::table('jcandidates')->insert(
            ['job_id' => $job_id, 'cv_id' => $cv_id]
        );
        $request->session()->flash('alert-success', 'Успешно кандидаствахте за тази обява!');
        return redirect('job/'.$id);
    }

    public function jcandidates(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $jcandidates = DB::table('jcandidates')
            ->join('cvs', 'jcandidates.cv_id', '=', 'cvs.id')
            ->select( 'cvs.*')
            ->where('jcandidates.job_id', '=', $id)
            ->get();

        return view('jcandidates', compact('job'), compact('jcandidates'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function faq()
    {
        return view('faq');
    }
}
