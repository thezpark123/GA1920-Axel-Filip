<?php
require "db.php";
updatePost($_POST,$_GET);
header("location: /home");