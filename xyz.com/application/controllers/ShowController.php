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
    
}