<?php
// mengkoneksikan ke database
$server = "localhost";
$server_username = "root";
$server_password = "";
$database_name =  "tb_portal_berita";

$conn = new Mysqli($server, $server_username, $server_password, $database_name);
