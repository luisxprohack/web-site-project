<?php
	class Cart extends Product{ 
	    public $cart = array();
	    public function __construct(){ 
	    	parent::__construct(); 
	    	if(isset($_SESSION['cart'])){
	    		$this->cart = $_SESSION['cart'];
	    	}
	    }

	    public function add_item($code, $amount,$photo){
			$search = $this->search_code($code);
			if($search > 0){
				$code = $this->code;
				$category = $this->category;
				$product = $this->product; 
				$price = $this->price;
				$photo = $this->photo;
				$item = array(
					'code' => $code,
					'category' => $category,
					'product' => $product,
					'photo' => $photo,
					'price' => $price,
					'amount' => $amount
				);
				if(!empty($this->cart)){
					foreach ($this->cart as $key){
						if($key['code'] == $code){
							$item['amount'] = $key['amount'] + $item['amount'];
						}
					}
				}
				$item['subtotal'] = $item['price'] * $item['amount'];
				$id = md5($code);
				$_SESSION['cart'][$id] = $item;
				$this->update_cart();
			}
		}

		public function remove_item($code){
			$id = md5($code);
			unset($_SESSION['cart'][$id]);
			$this->update_cart();
			return true;
		}

	    public function get_items(){ 
	    	$html = '';
	    	if(!empty($this->cart)){
	    		foreach ($this->cart as $key){
	    			$code = "'".$key['code']."'";
					$html .= '<div class="product-widget">
									<div class="product-img">
									<img src="'.$key['photo'].'">
										</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">'.$key['product'].'</a></h3>
													<h4 class="product-price"><span class="qty">'.$key['amount'].'</span>'.number_format($key['subtotal'], 2).'</h4>
												</div>
												<button class="delete" onClick="deleteProduct('.$code.');"><i class="fa fa-close"></i></button>
											</div>
										';
				}
	    	}

	    	return $html;
	    }	

	    public function get_items_shipp(){
	    	$html='';
	    	if (!empty($this->cart)) {
	    		foreach ($this->cart as $key) {
	    			$code = "'".$key['code']."'";
	    			$html .= '<div class="order-col">
									<div>'.$key['amount'].'x '.$key['product'].'</div>
									<div>'.number_format($key['subtotal'], 2).'</div>
								</div>';
	    		}
	    	}
	    	return $html;
	    }

	    /*public function get_items_view(){
	    	$html='';
	    	if(){
	    	
	    	}

		}*/


	    public function name_product(){
	    $html = '';
	    	if(!empty($this->cart)){
	    		foreach ($this->cart as $key){
	    			$code = "'".$key['code']."'";
	    			$html .= $key['product'];	
	    		}
			}
			return $html;
	}




	    public function get_total_items(){
	    	$total = 0;
	    	if(!empty($this->cart)){
	    		foreach ($this->cart as $key){
					$total += $key['amount'];
					
				}
	    	}
	    	return $total;
	    }

	    public function get_total_payment(){
	    	$total = 0;
	    	if(!empty($this->cart)){
	    		foreach ($this->cart as $key){
					$total += $key['subtotal'];
				}
	    	}
	    	return number_format($total, 2);
	    }

		public function update_cart(){
			self::__construct();
		}
	}



?>