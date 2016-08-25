<?php

namespace App\Http\Controllers\Advertisements;

use App\Http\Requests\AdCreateRequest;
use App\Models\Advertisements\Advertisements;
use App\Models\Advertisements\AdvertisementType;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;



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

        $type_id = AdvertisementType::pluck('name', 'id');

        return view('admin.advertisements.create', compact('type_id'));
    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request $request
//     * @return \Illuminate\Http\Response
//     */
    public function store(AdCreateRequest $request)
    {
        Advertisements::create($request->all());

        return Redirect::back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $advertisement = Advertisements::findOrFail($id);

        return view('admin.advertisements.show', compact('advertisement'));

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
        $ad = Advertisements::findOrFail($id);

        $type_id = AdvertisementType::pluck('name', 'id');

        return view('admin.advertisements.edit', compact('ad', 'type_id'));
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


        $ad->name = $request->name;

        $ad->type = $request->type;

        $ad->save();

        return Redirect::back();

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
