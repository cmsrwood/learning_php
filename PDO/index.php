<?php
require_once './controllers/ControladorProductos.php';

$controller = new ProductController();
$controller->index();
?>
