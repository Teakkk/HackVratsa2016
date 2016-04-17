<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Cv;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class CvsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$exists = DB::table('cvs')->where('user_id', Auth::user()->id)->first();

        //if(!$exists)
        // not there

        $cv = Cv::where('user_id', '=', Auth::user()->id);
        if ($cv->exists()) {
            $mycv = $cv->first();
            return view('mycvs.edit', compact('mycv'));
        }
        return redirect('mycvs/create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cvlanguages = DB::table('cvlanguages')->get();
        $cvlanguagesArr = array(0 => '... Изберете език ...');
        foreach ($cvlanguages as $cvlanguage) {
            $cvlanguagesArr[$cvlanguage->id] = $cvlanguage->value;
        }

        $mstatuses = DB::table('mstatuses')->get();
        $mstatusesArr = array(0 => '... Изберете семейно положение ...');
        foreach ($mstatuses as $mstatus) {
            $mstatusesArr[$mstatus->id] = $mstatus->value;
        }
        return view('mycvs/create', ['cvlanguages' => $cvlanguagesArr, 'mstatuses' => $mstatusesArr]);
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
        $validation = Validator::make($input, Cv::$rules);
        if ($validation->passes()) {
            $cv = new Cv;
            $cv->user_id = Auth::user()->id;
            $cv->firstname = $request->firstname;
            $cv->lastname = $request->lastname;
            $cv->age = $request->age;
            $cv->email = $request->email;

            // CV файл
            if (Input::file()) {
                // to be done...
            }
            $cv->save();

            $request->session()->flash('alert-success', 'Успешно записахте своето CV!');
            return redirect('mycvs');
        }

        return redirect('mycvs/create')
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
        $input = Input::all();
        $validation = Validator::make($input, Cv::$rules);
        if ($validation->passes()) {
            $cv = Cv::find($id);
            $cv->user_id = Auth::user()->id;
            $cv->firstname = $request->firstname;
            $cv->lastname = $request->lastname;
            $cv->age = $request->age;
            $cv->email = $request->email;

            // CV файл
            if (Input::file()) {
                // to be done...
            }
            $cv->save();

            $request->session()->flash('alert-success', 'Успешно редактирахте своето CV!');
            return redirect('mycvs');
        }

        return redirect('mycvs/create')
            ->withErrors($validation)
            ->withInput();
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
