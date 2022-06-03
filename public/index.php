<?php

if(!session_id()) session_start();

// memanggil file dalam folder app
require_once '../app/init.php';

// instance, menjalankan kelas App
$app = new App;