<?php namespace App\Core ;
use Request ; 
abstract class DataEntry {

	/*
	Stores data to the server..
	*
	*/

	// public function __construct(Request $request){
	// 	$this->request = $request ; 
	// }

	abstract protected function storeData($request);
	abstract protected function updateData($request,$id);



}


