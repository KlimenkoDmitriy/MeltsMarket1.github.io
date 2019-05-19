<div class="container-fluid">
	<div class="container" id="shopBasket">
		<div class="row">
				<?php foreach ($goods as $good): ?>
										<div class="col-md-3 mostSale">
										
												<img src="<?php echo $good['productImage'];?>" height= "210" width= "160" />
											
											<div class="row productName">
												<?php echo $good['productName']; ?>
											</div>
											<div class="row productPrice">
												<div class="col-md-7 price">
													<?php echo $good['productPrice']; ?>
													<i class="fas fa-dollar-sign"></i>
												</div>
												<div class="col-md-4 addTo">
													<div class="row">	
														<div class="col-md-4">
															<a class="fas fa-heart" href="#"></a>
														</div>	
														<div class="col-md-4">
															<a class="fas fa-shopping-cart fa-1x" href="#"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<?php endforeach; ?>
			
		</div>
	</div>
</div>	