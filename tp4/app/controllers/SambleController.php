<?php
namespace controllers;
 /**
 * Controller SambleController
 **/
class SambleController extends ControllerBase{

	public function index(){
		$this->loadView("SambleController/index.html");
	}
    public function Inscription(){

        $this->loadView("SambleController/Inscription.html");

    }
}
