<?php

class DataController extends BaseController {

	public function postData(){
	  $input = Input::all();
	  //LOG::error(print_r($input)); 
	  $url = $input['url'];
      $mp = new UrlParser();
      $meta = $mp->getMeta($url); // write a model and Call the model class
      return $meta;
	}

	public function postFile(){
	  return true;
	}


}