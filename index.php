<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Melts Market</title>
	
    
	
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<body>
	<header>
		<div class="container-fluid head">
			<div class="container">
				<div class="row">
				<a class="col-md-1 " id="logo" href="/"></a>
				<div class="col-md-2"></div>
				<form class="col-md-4" id="headerSearch">
					<input type="search" id="searchLine" placeholder="Найти Товар"> 
			     	<button  id="searchButton" type="submit"><i class="fas fa-search"></i>
				  	</button>
				</form>
				<div class="col-md-1"></div>
				<div class="col-md-4" id="account">
		 			<a class="col-md-1" id="profile" href="#"><i class="far fa-user fa-4x"></i></a>
		 			<a class="col-md-1" id="actualProduct" href="#"><i class="far fa-heart fa-4x"></i></a>
		 			<a class="col-md-1" id="shopBacket" href="index.php?page=shopBasket"><i class="fas fa-shopping-cart fa-4x"></i></a>
			 	</div>
			 	</div>
			</div>
		</div>
	</header>



<div id="content">
	<?php

		$goods = [
			[
				'id' => 1,
				'productImage' => 'img/400Gala.jpg',
				'productName' => 'Стиральный порошок GALA ручная стирка',
				'productSize' => '400 Грамм',
				'productPrice' => '18.00'
			],
			[
				'id' => 2,
				'productImage' => 'img/400Gala.jpg',
				'productName' => 'Стиральный порошок TIDE ручная стирка',
				'productSize' => '400 Грамм',
				'productPrice' => '23.00'
			],
			[
				'id' => 3,
				'productImage' => 'img/400Gala.jpg',
				'productName' => 'Стиральный порошок GALA автомат',
				'productSize' => '400 Грамм',
				'productPrice' => '25.00'
			],
			/*[	
				'id' => 4,
				'productImage' => 'img/TIDE.jpg',
				'productName' => 'Стиральный порошок TIDe автомат',
				'productSize' => '400 Грамм',
				'productPrice' => '32.00'
			],
			[	
				'id' => 5,
				'productImage' => 'img/TIDE.jpg',
				'productName' => 'Стиральный порошок TIDe автомат',
				'productSize' => '400 Грамм',
				'productPrice' => '32.00'
			],
			[	
				'id' => 6,
				'productImage' => 'img/TIDE.jpg',
				'productName' => 'Стиральный порошок TIDe автомат',
				'productSize' => '400 Грамм',
				'productPrice' => '32.00'
			]*/
		];
		/*foreach ($goods as $key => $good) {
			echo $good['productImage'] . '<br>';
			echo $good['productName'] . '<br>';
			echo $good['productSize'] . '<br>';
			echo $good['productPrice'] . '<br>';

		}*/
		
		$page = $_GET['page'];
		if(!isset($page)) {
			require('home.php');
		} elseif ($page == 'shopBasket'){
			require('pages/shopBasket.php');
		} elseif ($page='product') {
			$id = $_GET['id'];
			$good = [];
			foreach ($goods as $product) {
				if ($product['id'] == $id){
					$good = $product;
					break;
				}
			}
			require('pages/openProduct.php');
		}


	?>
</div>	
	



	<footer>
		<div class="container-fluid">
			<div class="container">
				<div class="row footer" >
					<div class="col-md-4">
						<h5>Помощь</h5>
						<div class="info">Доставка и оплата</div>
						<div class="info">Вопросы и ответы</div>
						<div class="info">Отследить товар</div>
					</div>
					<div class="col-md-4">
						<h5>Информация о Компании</h5>
						<div class="info">О нас</div>
						<div class="info">Условия использования сайта</div>
						<div class="info">Контакты</div>
					</div>
					<div class="col-md-4">
						<h5>Партнерам</h5>
						<div class="info">Продавать на Melts Market</div>
						<div class="info">Сотрудничество с нами</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7"></div>
					<div class="col-md-5 MeltsMarket ">&copy Интернет-магазин "Melts Market" 2019</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>