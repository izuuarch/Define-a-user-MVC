<?php
Class Login extends Controller{
function index(){
  $data['title'] = "";
    $this->view("admin/layouts/login",$data);
}
}
