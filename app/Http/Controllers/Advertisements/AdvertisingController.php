<?php

namespace App\Http\Controllers\Advertisements;

use App\Models\Advertisements\Advertisements;
use Carbon\Carbon;
use Request;


use App\Http\Requests;

use App\Http\Controllers\Controller;


class AdvertisingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $advertisements = Advertisements::all();

        return view('admin.advertisements.index', compact('advertisements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertisements.create');
    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request $request
//     * @return \Illuminate\Http\Response
//     */
    public function store(Request $request)
    {

        $input = Request::all();

        $input['created_at'] = Carbon::now();
        $input['updated_at']= Carbon::now();

        Advertisements::create($request->all());



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
        $ad = Advertisements::find($id) ;
        return view('admin.advertisements.edit', compact('ad'));
    }

//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request $request
//     * @param  int $id
//     * @return \Illuminate\Http\Response
//     */
    public function update(Request $request, $id)
    {
        //
        $ad = Advertisements::findOrFail($id);

        $ad->update($request->all());
        $ad['updated_at']=Carbon::now();
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

    public function upload(Request $request){
        $file = $request->file('file');

        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';


        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';


        echo 'File Size: '.$file->getSize();
        echo '<br>';


        //  echo 'File Mime Type: '.$file->getMimeType();

        //Move uploaded file
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
    }

}
