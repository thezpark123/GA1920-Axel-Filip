<?php
require "db.php";

newPost($_POST);

header("location: /storePost");