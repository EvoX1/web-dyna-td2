<?php
namespace controllers;

use Ubiquity\orm\DAO;
use Ubiquity\utils\http\URequest;
use Ubiquity\utils\http\UResponse;
use Ubiquity\utils\http\USession;

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
        
    public function Inscription2(){

    UResponse::header("location" ,"/");


    }
}
