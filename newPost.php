<?php
require "db.php";
require "upload.php";

newPost($_POST);


header("Location: /home");

