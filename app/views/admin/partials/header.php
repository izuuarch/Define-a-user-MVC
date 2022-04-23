<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="<?= ASSETS ?>js/iconkit.js"></script>
    <link href="<?= ASSETS ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <script src="<?= ASSETS ?>js/jquery-3.2.1.min.js"></script>
    <style>
    .m-r-nav-container {
width: 100%;
height: 60px;
padding: 10px;

gap: 5px;

/* border-radius: 10px; */
background: #fff;

box-shadow: 0px 3px 3px #aaa;
}
.m-r-nav-list,.m-r-nav-list-link{
  display: flex;
justify-content: center;
align-items: center;
width: 100%;
}
.m-r-nav-list-link a{
color: black;
font-family: 'Smooch', cursive;
font-weight: bold;
}
.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  border: none;
  border-radius: 45px;
  /* box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1); */
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
  background-color: #2EE59D;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
  }

/* .button {
  background-color: #2EE59D;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
} */
.form-control,
.form-control:focus {
outline: none;
box-shadow: none;
}

.form-rounded {
border-radius: 40px;
}

.form-control {
font-size: 14px;
border: 1px solid rgba(170, 170, 170, .3);
padding: 10.72px 12.8px;
padding: .67rem .8rem;
}

.form-control-sm,
.input-group-sm>.form-control,
.input-group-sm>.input-group-append>.btn,
.input-group-sm>.input-group-append>.input-group-text,
.input-group-sm>.input-group-prepend>.btn,
.input-group-sm>.input-group-prepend>.input-group-text {
padding: 4px 8px;
padding: .25rem .5rem;
}

.form-control-lg,
.input-group-lg>.form-control,
.input-group-lg>.input-group-append>.btn,
.input-group-lg>.input-group-append>.input-group-text,
.input-group-lg>.input-group-prepend>.btn,
.input-group-lg>.input-group-prepend>.input-group-text {
padding: 13.6px 16px;
padding: .85rem 1rem;
}
.btn {
padding: 11px 17px;
font-size: 13px;
letter-spacing: 0;
}

.btn-xl {
padding: 19px 24px;
}

.btn-lg {
padding: 15px 22px;
}

.btn-md {
padding: 12px 19px;
}

.btn-sm {
padding: 9px 14px;
}

.btn-xs {
padding: 5px 10px;
}
    </style>
</head>
<body>
