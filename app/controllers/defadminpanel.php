<?php
Class defadminpanel extends Controller{
function index(){
  $data['title'] = "hello admin";
  $reg = $this->model('mainmodel');
  $data['alldefine'] = $reg->getalldefine();
  $reg->deletedefine();
  $this->view("admin/layouts/home",$data);
}
}
