<?php
namespace controllers;

use models\Inscription;
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
    
    public function do(){
        $do_var = new Inscription();
        $do_var->setemail($_POST["email"]);
        $do_var->setNom($_POST["Nom_ou_pseudo"]);
        DAO::insert($do_var);
      
    if(DAO::insert($do_var)){
            echo "ok";
            UResponse::header("location" ,"/SambleController"); 
        }
        else{
            echo "not good";
        }
           }
}
