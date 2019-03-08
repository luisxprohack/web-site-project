<?php


	include_once('conexionProduct.php');

	class Product extends Model{
		public $code;
    public $category;
		public $product;
		public $description;
		public $price;
    public $photo;

		public function __construct(){ 
      parent::__construct(); 
    } 

		public function get_products(){ 
      $sql = $this->db->query("SELECT * FROM productos");  
      $html = '';
      foreach ($sql->fetch_all(MYSQLI_ASSOC) as $key){
        $code = "'".$key['producto_codigo']."'";
        $photo="'".$key['producto_foto']."'";
        $html .= '<div class="product">
                  <div class="product-img">
                        <img src="'.$key['producto_foto'].'">
                        <div class="product-label">
                          <span class="new">NEW</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">'.$key['producto_categoria'].'</p>
                        <h3 class="product-name"><a href="#">'.$key['producto_nombre'].'</a></h3>
                        <h4 class="product-price">'.$key['producto_precio'].'</h4>
                        <div class="product-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                          <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                          <button class="quick-view"><a href="product.php"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button></a>
                        </div>
                      </div>
                      <div class="add-to-cart">
                      <button class="add-to-cart-btn" id="'.$key['producto_codigo'].'" value="1" onClick="addProduct('.$code.','.$photo.');"><i class="fa fa-shopping-cart"></i>Agregar</button>
                      </div>
                    </div>';
      }
      return $html;
   	}



 		public function search_code($code){
 			$sql = $this->db->query("SELECT * FROM productos WHERE producto_codigo = '$code'"); 
      $product = $sql->fetch_all(MYSQLI_ASSOC); 
      $status = 0;
      foreach ($product as $key){
    		$this->code = $key['producto_codigo'];
        $this->category = $key['producto_categoria'];
    		$this->product = $key['producto_nombre'];
    		$this->description = $key['producto_descripcion'];
    		$this->price = $key['producto_precio'];
        $this->photo = $key['producto_foto'];
    		$status++;
    	}
    	return $status;
 		}
	}
?>