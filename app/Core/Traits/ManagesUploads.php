<?php
namespace App\Core\Traits;  
use Image ; 


trait ManagesUploads {


	public function makeThumbnail($photo){
		$thumbs = Image::make($photo)->resize(75,75)->save(storage_path('medicines/thumbs/'.$photo->hashName()));
		return $thumbs ; 
	}





	public function FunctionName($value=''){
		
	}

	







}