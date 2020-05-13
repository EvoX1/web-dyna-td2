<?php
namespace controllers;
 /**
 * Controller SambleController
 **/
class SambleController extends ControllerBase{

	public function index(){
		$this->loadView("SambleController/index.html");
	}
}
