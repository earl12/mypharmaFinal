<?php namespace App\Core\Repositories ; 

abstract class BaseRepository {	
	/**
	 * The Model Instance
	 */
	protected $model ; 

	
	abstract protected function getbyId($id) ;\


	abstract protected function getAll($model);		
	

	abstract protected function delete() ; 

}