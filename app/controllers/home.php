<?php
Class Home extends Controller{
function index(){
    // $mainmodel = $this->loadmodel("mainmodel");
    // show($mainmodel);
    $reg = $this->model('mainmodel');
    $data['getdefs'] = $reg->getalldefine();
  $this->view("home",$data);
}
}
