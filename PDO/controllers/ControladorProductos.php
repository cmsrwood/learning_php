<?php
require_once './models/Productos.php';
require_once './config/database.php';

class ProductController {
    private $db;
    private $productModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();

        $this->productModel = new Product($this->db);
    }

    public function index() {
        $productos = $this->productModel->getProducts();
        
        require_once './views/productos.php';
    }
}
?>
