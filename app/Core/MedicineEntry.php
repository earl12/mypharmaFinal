<?php namespace App\Core ; 
use Image; 
use App\Dosage ; 
use App\MedicinesPhoto ;
use App\Core\DataEntry ;  
use Auth ;
use Illuminate\Http\File ;
use Illuminate\Http\Request;
use Flash ; 
use Storage ; 


class MedicineEntry extends DataEntry {

	public function storeData($request){		
		$model = Dosage::create([
			'dosage_volume' => request('dosage_name') ,
			'form' => request('form'),
			'medicine_id'  => request('medicine_id'),
			'price'  => request('price'),
			'file_name' => $photo->hashName(), 
			'file_mime' =>$photo->getClientMimeType(),
		]) ;

		$model->save() ; 
	}		

  // $img->resize(75,75) ; 
            // $img->save(storage_path('app/'.$image_dir)); 


            // dd($image) ;  => "medicines/Zmu4YqnTkETyZsWkguPL4ruH0Enl3BEbMoLvFGUb.jpeg"
            // dd($path) ; => "E:\xampp\htdocs\it-project\storage\app/medicines/29huJ8MtzfzW2zT3CG5ymCFLQNy6WjeZBYJI4Kct.jpeg"


            // $image = Image::make('medicine/images/'.$file_name)
            // ->resize(75,75)
            // ->save('medicine/images/thumbs/'.$file_name,50);




            // $thumbnail  = Image::make(storage_path->resize(75,75)
            //  ->save(storage_path()); 


            //  $dosage->save() ;

            // }
            // else {
            //  return redirect()->back()->withInput() ;
            // }




        // if (!file_exists('medicine/images') && !file_exists('medicine/images/thumbs')){ 
        //  mkdir('medicine/images',0777, true) ; 
        //  mkdir('medicine/images/thumbs',0777, true) ; 
        // }






// $image = Image::make($photo)->resize(75,null,function($constraint){ 
		// 			$constraint->aspectRatio() ; 
		// 		 })->encode('jpg',75) ; 

		// $image_location = $photo->store('medicines') ; 

		// Storage::put('medicines/thumbs/'.$photo->hashName(),60);




	protected function updateData($request , $id) {

	}


}


