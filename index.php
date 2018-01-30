<?php
session_start();
include 'function.php';

$mas=getCsvFile();
//var_dump ($mas);
//die();

include 'view/index.view.php';
