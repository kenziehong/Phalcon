<?php

class ShowController extends Phalcon\Mvc\Controller{
    public function indexAction(){
        // echo __DIR__;

        // $this->view->disable();
        // echo json_encode([1, 2, 3]);

        
        
        $arrinfo = [
            'name'    =>'hong',
            'age'     =>28,
            'address' =>'vungtau'
        ];

        // echo json_encode($arrinfo);
        // exit();

        //header('Content-Type: application/json');
        return json_encode($arrinfo);
                
            
        //$this->view->setVar('info', $arrinfo_json);
    }
    
    public function index2Action(){
        //$this->view->pick("temp/pickview");

    }

    public function index3Action(){
       $name = "nguyen van a";
       //$this->view->setVar("keycontrollerview", $name);

       $arrinfo = [
        'name'    =>'hong',
        'age'     =>28,
        'address' =>'vungtau'
       ];

       $this->view->setVar("keycontrollerview1",$arrinfo);  
       //$this->view->pick("temp/pickview"); 
     
             

    }

    // public function index4Action($type){
    //     if($type == "pickview"){
    //         $this->view->pick("temp/pickview");
    //     }

    // }
    public function index5Action(){
        $name = "nguyen van a";
       $this->view->setVar("keycontrollerview", $name);
       
    }
}