<?php
session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Goods Management</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
	<form id="form" method="post" action="add_goods.php">
		<div id="actions"><p>Добавить товар</p></div>
		<label>Название товара:
		<input type="text" name="name" placeholder="Название товара" value=""/></label><br />
		<label>Стоимость товара: 
		<input type="text" name="price" placeholder="Стоимость товара" value=""/></label><br />
		<label>Категория товара: 
		<input type="text" name="category" placeholder="Категория товара" value=""/></label><br />
		<label>Описание товара: <br />
		<textarea type="text" name="description" cols="60" rows="10" placeholder="Описание товара" value=""></textarea></label><br />
		<input id="submit" type="submit" value="Добавить"/>
	</form>
		
	<form id="form" method="post" action="delete_goods.php">
		<div id="actions"><p>Удалить товар</p></div>
		<label>ID товара:
		<input type="text" name="ID" placeholder="ID товара" value=""/></label><br />
		<input id="submit" type="submit" value="Удалить"/>
	</form>

	<form id="form" method="post" action="modify_goods.php">
		<div id="actions"><p>Изменить товар</p></div>
		<label>ID товара:
		<input type="text" name="id_prod" placeholder="ID товара" value=""/></label><br />
		<label>Новое название товара:
		<input type="text" name="name" placeholder="Название товара" value=""/></label><br />
		<label>Новая стоимость товара: 
		<input type="text" name="price" placeholder="Стоимость товара" value=""/></label><br />
		<label>Новая категория товара: 
		<input type="text" name="category" placeholder="Категория товара" value=""/></label><br />
		<label>Новое описание товара: <br />
		<textarea type="text" name="description" cols="60" rows="10" placeholder="Описание товара" value=""></textarea></label><br />
		<input id="submit" type="submit" value="Изменить"/>
	</form>

	<div id="clear"></div>
		<div id="footer">
			<p>Copyright &copy; lollipop.com 2018 All Rights Reserved<br />
			Design by <a href="https://profile.intra.42.fr/users/dbohatch">Daria Bohatchuk</a> &amp; <a href="https://profile.intra.42.fr/users/ikarachy">Iryna Karachynetska</a></p>
	</div>
</body>
</html>
