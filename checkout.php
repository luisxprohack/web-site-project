<?php

require_once 'head.php';
?>



		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li >Shipping</li>
							<li class="active">Payment</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
	<!--payment-->
			<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Tu metodo de Pago</h3>
								</div>
							<div class="form-group">
								<input class="input-payment" type="text" name="name-payment" placeholder="Name" maxlength="50" >
							</div>
							<div class="form-group">
								<input class="input-payment" type="text" name="card-number" placeholder="Card Number" maxlength="16">
							</div>
							<label>Expiration Date</label>
							<div class="form-group">
								<input class="input-expirate" type="text" name="card-number" placeholder="MM" maxlength="2">
								<input class="input-expirate" type="text" name="card-number" placeholder="YY" maxlength="2">
							</div>
							<label>CVV</label>
							<div class="form-group">
								<input class="input-expirate" type="text" name="name-payment" placeholder="Name" maxlength="3">
							</div>
						</div>
					</div>
				</div>
			</div>

<?php
require_once 'footer.php';
?>							
