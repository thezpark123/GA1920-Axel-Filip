<?php
require "db.php";

uploadFiles();
newPost($_POST);
var_dump($_POST);

