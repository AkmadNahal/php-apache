<?php

require 'vendor/autoload.php';
use Medoo\Medoo;

$db = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'pegawai',
    'server' => 'db',
    'username' => 'root',
    'password' => 'pwroot',
]);

$data = $db->select(
    "tabel_pegawai", 
    [
        "nama", 
        "usia",
        "kelamin"
    ], [
        "id[=]" => $_GET['id']
    ]);

echo 'Saya ' . $data[0]['nama'] . ', usia ' . $data[0]['usia']
?>