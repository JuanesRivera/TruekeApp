<?php
session_start();

require '../controllers/'.$_POST['object'].'.php';
$object = new $_POST['object']();
echo json_encode($object->{$_POST['method']}($_POST['data']));