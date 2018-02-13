<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\DosageRequest;

use App\Core\Traits\ManagesUploads; 

use Image ; 

use App\Dosage ; 

use App\Medicine ; 

class MedicinesController extends Controller
{

    use ManagesUploads ; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $medicines = Medicine::all(); 

        // $medicines = Medicine::select([''])->get(); 


        // dd($medicines);

        return view('admin.medicines.index');

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function store(DosageRequest $request)
    {   
        if ( $request->hasFile('photo')) { 

            $photo = $request->file('photo');
            
            if ($photo && $photo->isValid()) {  

                $request['photo'] = $photo->store('medicines'); 

            }

            //Make a thumbnail upload it in public directory..
            Image::make($photo)->resize(75,75)->save(public_path('storage/medicines/thumbs/'.$photo->hashName()));
            
            $dosage =  Dosage::create([
                'dosage_volume' => request('dosage_volume') ,
                'form' => request('form'),
                'medicine_id'  => request('medicine_id'),
                
                'price'  => request('price'),
                
                'file_name' => $photo->hashName(), 
                
                'file_mime' =>$photo->getClientMimeType(),
            ]) ;

            return response()->json($dosage);


        }
        else {
            $this->defaultUpload();
            $entry->storeData($request) ; 
        }



        // $this->makethumbNail($photo);

        // Image::make($photo)->resize(75, 75)->save(storage_path('medicines/thumbs/'.$photo->hashName(),60));         



        // return response()->json($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
