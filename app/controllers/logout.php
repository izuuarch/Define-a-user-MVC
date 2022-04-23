<?php
Class Logout extends Controller{
function index(){
  $reg = $this->model('mainmodel');
  $reg->logout();
}
}
