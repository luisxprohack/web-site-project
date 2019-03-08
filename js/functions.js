function addProduct(code,photo) {
	var amount = document.getElementById(code).value;
	window.location.href = 'index.php?action=add&code='+code+'&amount='+amount+'&photo='+photo;
}

function deleteProduct(code){
	window.location.href = 'index.php?action=remove&code='+code; 
}

/*

function viewProduct(code){
	var watch = document.getElementById(code);
	window.location.href = 'product.php?view=add&code='+code;
}*/