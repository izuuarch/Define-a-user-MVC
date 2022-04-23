<?php
Class Createdefine extends Controller{
function index(){
     $reg = $this->model('mainmodel');
     $reg->define();
}
}
