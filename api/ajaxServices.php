<?php
require_once "../config.php";

$serv=Admin::getServices();

echo json_encode($serv);
