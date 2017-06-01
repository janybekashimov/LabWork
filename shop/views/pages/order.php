<h2 align="center">Оформление заказа</h2>



<?php 
	if ($_SESSION['cart'] && !isset($_POST['order'])) {
		
	
 ?>

<form action="index.php?view=order" method="post" id="cart-form">

<table id="mycart" align="center" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		  <th>Товар</th>
			<th>Цена</th>
			<th>Кол-во</th>
			<th>Всего</th>
	  </tr>

	<?php 
		foreach ($_SESSION['cart'] as $id => $quantity): {
			$product = get_product($id); 
		}
	 ?>

	  <tr>
          <td align="center"><?=$product['title']?></td>
    	  <td align="center">$<?=number_format($product['price'], 2);?></td>
    	  <td align="center"><?=$quantity; ?></td>
    	  <td align="center">$<?=number_format($product['price'] * $quantity, 2);?></td>
	  </tr>

		<?php endforeach; ?>

</table>	
	 <p class="total" align="center">Общая сумма заказа: <span class="product-price"><?=number_format($_SESSION['total_price'],2);?>$</span></p>
	 <p align="center">
	 	Ваше Имя: <br>
	 	<input type="text" name="name" style="opacity: 0.8;"><br>
	 	Ваша Фамилия: <br>
	 	<input type="text" name="s_name" style="opacity: 0.8;"><br>	
	 	Адрес: <br>
	 	<input type="text" name="address" style="opacity: 0.8;"><br>	
	 	Почтовый индекс: <br>
	 	<input type="text" name="post_index" style="opacity: 0.8;"><br>
	 	e-mail: <br>
	 	<input type="text" name="email" style="opacity: 0.8;"><br>	
	 </p>
	 <p align="center"><input type="submit" name="order" value="Заказать" style="border-radius: 5px;"/></p>
	
</form>

<?php 
}

$name = $_POST['name'];
$s_name = $_POST['s_name'];
$address = $_POST['address'];
$post_index = $_POST['post_index'];
$email = $_POST['email'];

if ($_SESSION['cart'] && isset($_POST['order'])) {
	foreach ($_POST as $ArrKey => $ArrStr) {
		$ArrKey = $_POST[$ArrKey];
	}
	$date = date('Y-m-d');
	$time = time('H:i:s');

	foreach ($_SESSION['cart'] as $id => $quantity): 
	$product = get_product($id); 
			$query = mysql_query("INSERT INTO orders(name,s_name,address,post_index,email,date,time,product,prod_id,price,qty) VALUES ('$name','$s_name','$address','$post_index','$email','$date','$time','{$product['title']}','{$product['id']}','{$product['price']}','$quantity')");
	endforeach;

	echo '<p align="center">Ваш заказ успешно принят!</p>';
}




 ?>


<!-- else{
	echo '<p align="center">Ваша корзина пуста: </p>';
} -->