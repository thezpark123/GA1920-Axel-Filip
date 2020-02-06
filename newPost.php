<?php
require "db.php";

newPost($_POST);

header("Location: /home");

