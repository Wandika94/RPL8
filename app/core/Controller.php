<?php 

class Controller{
	// menghubungkan ke folder views
	public function view($view, $data=[])
	{
		require_once '../app/views/'. $view . '.php';
	}

	// menghubungkan ke folder models
	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';
		return new $model;
	}
}