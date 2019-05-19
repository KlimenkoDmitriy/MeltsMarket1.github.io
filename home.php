<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-3 left-sidebar" id="navigation">
						<ul class="products">
							<li>
								<a href="#">
									<i class="col-md-1 fas fa-home fa-2x"></i>
									<span class="col-md-2 productHome">Товары для Дома</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="col-md-1 fas fa-car fa-2x"></i>
									<span class="col-md-2 productCar">Авто Химия</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="col-md-1 fas fa-spray-can fa-2x"></i>
									<span class="col-md-2 productCosmetic">Косметика</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="col-md-1 fas fa-child fa-2x"></i>
									<span class="col-md-2 productChild">Для Детей</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="col-md-1 fas fa-male fa-2x"></i>
									<span class="col-md-1 productMan">Для Мужчин</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="col-md-1 fas fa-female fa-2x "></i>
									<span class="col-md-2 productWomen">Для Женщин</span>
								</a>
							</li>
							
							
						</ul>
					<div class="contacts">
						<h5>Связь с нами</h5>
						(044) 533-22-22 <br> (044) 533-88-88 <br> 0 (800) 333-345
					</div>
					<div class="ourStores">
						<h5>Наши Магазины</h5>
						г. Киев, ул. Петровича 56 <br>
						г. Киев, ул.Гринченка 12/63
						<button id="openMap" type="submit">Открыть Карту</button>
					</div>
				</div>




					<div class="col-md-9 main">



						<h3 class="headerMostSale"><i class="fas fa-cart-arrow-down fa-1x"></i>Самый популярный товар</h3>
						<div id="carouselFirst" class="carousel slide carousel-fade" data-ride="carousel">
							<!-- Слайды карусели -->
							<div class="carousel-inner">
								<!-- Слайд 1 -->
								<div class="carousel-item active">
									<div class="row catalog-mostSale">
										<div class="col-md-1"></div>
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
								<!-- Слайд 2 -->
								<div class="carousel-item">
									<div class="row catalog-mostSale">
										<div class="col-md-1"></div>
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
								<!-- Слайд 3 -->
								<div class="carousel-item">
									<div class="row catalog-mostSale">
										<div class="col-md-1"></div>
										<?php foreach ($goods as $good): ?>
										<div class="col-md-3 mostSale">
										
												<a href= "index.php?page=openProduct&id=<?php echo $good['id']?>">
													<img src="<?php echo $good['productImage'];?>" height= "210" width= "160" />
												</a>
											
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

							<!-- Навигация карусели (следующий или предыдущий слайд) -->
							<!-- Кнопка, переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
							<a class="carousel-control-prev" href="#carouselFirst" role="button" data-slide="prev">
	    						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    						<span class="sr-only">Предыдущий</span>
	  						</a>
	  						<a class="carousel-control-next" href="#carouselFirst" role="button" data-slide="next">
	   							<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    						<span class="sr-only">Следующий</span>
	  						</a>
						</div>



						





						<h3 class="headerMostGood"><i class="fas fa-thumbs-up"></i>Лучший товар по оценке Клиентов</h3>
						<div id="carouselSecond" class="carousel slide carousel-fade" data-ride="carousel">
							<!-- Слайды карусели -->
							<div class="carousel-inner">
								<!-- Слайд 1 -->
								<div class="carousel-item active">
									<div class="row catalog-mostGood">
										<div class="col-md-1"></div>
										<?php  foreach ($goods as $good) : ?>
										<div class="col-md-3 mostGood">
										
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
								<!-- Слайд 2 -->
								<div class="carousel-item">
									<div class="row catalog-mostGood">
										<div class="col-md-1"></div>
										<?php foreach ($goods as $good): ?>
										<div class="col-md-3 mostGood">
										
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
								<!-- Слайд 3 -->
								<div class="carousel-item">
									<div class="row catalog-mostGood">
										<div class="col-md-1"></div>
										<?php foreach ($goods as $good): ?>
										<div class="col-md-3 mostGood">
										
												<a href= "index.php?page=openProduct&id=<?php echo $good['id']?>">
													<img src="<?php echo $good['productImage'];?>" height= "210" width= "160" />
												</a>
											
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

							<!-- Навигация карусели (следующий или предыдущий слайд) -->
							<!-- Кнопка, переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
							<a class="carousel-control-prev" href="#carouselSecond" role="button" data-slide="prev">
	    						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    						<span class="sr-only">Предыдущий</span>
	  						</a>
	  						<a class="carousel-control-next" href="#carouselSecond" role="button" data-slide="next">
	   							<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    						<span class="sr-only">Следующий</span>
	  						</a>
						</div>























						<h3 class="headerLowerPrice"><i class="fas fa-money-bill-wave"></i>Самый дешевый товар</h3>
						<div id="carouselThird" class="carousel slide carousel-fade" data-ride="carousel">
							<!-- Слайды карусели -->
							<div class="carousel-inner">
								<!-- Слайд 1 -->
								<div class="carousel-item active">
									<div class="row catalog-lowerPrice">
										<div class="col-md-1"></div>
										<?php foreach ($goods as $good): ?>
										<div class="col-md-3 lowerPrice">
										
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
								<!-- Слайд 2 -->
								<div class="carousel-item">
									<div class="row catalog-lowerPrice">
										<div class="col-md-1"></div>
										<?php foreach ($goods as $good): ?>
										<div class="col-md-3 lowerPrice">
										
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
								<!-- Слайд 3 -->
								<div class="carousel-item">
									<div class="row catalog-lowerPrice">
										<div class="col-md-1"></div>
										<?php foreach ($goods as $good): ?>
										<div class="col-md-3 lowerPrice">
										
												<a href= "index.php?page=openProduct&id=<?php echo $good['id']?>">
													<img src="<?php echo $good['productImage'];?>" height= "210" width= "160" />
												</a>
											
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

							<!-- Навигация карусели (следующий или предыдущий слайд) -->
							<!-- Кнопка, переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
							<a class="carousel-control-prev" href="#carouselThird" role="button" data-slide="prev">
	    						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    						<span class="sr-only">Предыдущий</span>
	  						</a>
	  						<a class="carousel-control-next" href="#carouselThird" role="button" data-slide="next">
	   							<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    						<span class="sr-only">Следующий</span>
	  						</a>
						</div>



					</div>
				</div>
			</div>
		</div>
	</div>