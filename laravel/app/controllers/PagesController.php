<?php
class PagesController extends BaseController{
	
	public function index(){
		$name = 'New test';
		return View::make('hello')->with('name', $name);
	}
}