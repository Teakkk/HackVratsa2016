<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Job;
use Illuminate\Support\Facades\Input;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('myjobs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // categories
        $categories = Category::all();
        $categoriesArr = array(0 => '... Изберете категория ...');
        foreach ($categories as $category) {
            $categoriesArr[$category->id] = $category->value;
        }

        // jobtypes
        $jobtypes = DB::table('job_types')->get();
        $jobtypesArr = array(0 => '... Изберете вид на заетост ...');
        foreach ($jobtypes as $jobtype) {
            $jobtypesArr[$jobtype->id] = $jobtype->value;
        }

        // jobterms
        $jobterms = DB::table('job_terms')->get();
        $jobtermsArr = array(0 => '... Изберете срок на заетост ...');
        foreach ($jobterms as $jobterm) {
            $jobtermsArr[$jobterm->id] = $jobterm->value;
        }

        // carreer levels
        $clevels = DB::table('clevels')->get();
        $clevelsArr = array(0 => '... Изберете ниво в йерархията ...');
        foreach ($clevels as $clevels) {
            $clevelsArr[$clevels->id] = $clevels->value;
        }
        return view('newjob', ['categories' => $categoriesArr, 'jobtypes' => $jobtypesArr, 'jobterms' => $jobtermsArr, 'clevels' => $clevelsArr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Input::all();
        $validation = Validator::make($input, Job::$rules);

        if ($validation->passes()) {
            $job = new Job;
            $job->user_id = Auth::user()->id;
            $job->title = $request->title;
            $job->description = $request->description;
            $job->cat_id = $request->category;
            $job->jobtype_id = $request->jobtype;
            $job->jobterm_id = $request->jobterm;
            $job->clevel_id = $request->clevel;
            $job->salary_from = $request->salary_from;
            $job->salary_to = $request->salary_to;
            $job->firm_name = $request->firm_name;
            $job->contact_name = $request->contact_name;
            $job->phone = $request->phone;
            $job->email = $request->email;
            $job->address = $request->address;

            // Лого
            if (Input::file()) {
                $file = array_get($input,'logo');
                // SET UPLOAD PATH
                $destinationPath = 'logos';
                // GET THE FILE EXTENSION
                $extension = $file->getClientOriginalExtension();
                // RENAME THE UPLOAD WITH RANDOM NUMBER
                $fileName = rand(11111, 99999) . '.' . $extension;
                // MOVE THE UPLOADED FILES TO THE DESTINATION DIRECTORY
                $upload_success = $file->move($destinationPath, $fileName);

                // добавяне на лого към базата данни
                $job->logo = 'logos/'.$fileName;
            }

            $job->save();

            $request->session()->flash('alert-success', 'Успешно е публикувана нова обява!');
            return redirect('myjobs');
        }

        return redirect('newjob')
            ->withErrors($validation)
            ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
