<?php
include 'proverka.php';
$servername = "localhost";
$username = "root";
$password = "dolcemilk";
$dbname = "Rush0";
$conn = mysqli_connect("localhost", "root", "dolcemilk");

$sql = "CREATE DATABASE rush0";

check($conn, $sql);

mysqli_close($conn);

// create new connection
$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
// Check connection
if (!$conn)
    die("Connection failed: " . mysqli_connect_error());

$sql = "CREATE TABLE users (
id_users INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
login VARCHAR(30) NOT NULL,
email VARCHAR(50),
curtime TIMESTAMP,
password VARCHAR(130) NOT NULL,
groups enum('admin', 'user') DEFAULT 'user' NOT NULL
)";
check($conn, $sql);

//categories
$sql = "CREATE TABLE categories (
id_cat INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR (50)
)";
check($conn, $sql);

//products
$sql = "CREATE TABLE products (
id_prod INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR (50),
image VARCHAR (10000),
descr VARCHAR (500),
categories VARCHAR (500),
price INT (3)
)";
check($conn, $sql);

//cart
$sql = "CREATE TABLE cart (
id_cart INT(6),
name VARCHAR (50),
price VARCHAR (10)
)";
check($conn, $sql);
// add admins
$password = hash('whirlpool', 'dolcemilk');
$sql = "INSERT INTO users(login, email, password, groups) VALUES ('ikarachy', 'ikarachy@student.unit.ua', '$password', 'admin')";
check($conn, $sql);
$sql = "INSERT INTO users(login, email, password, groups) VALUES ('dbohatch', 'dbohatch@student.unit.ua', '$password', 'admin')";
check($conn, $sql);

//add categories
$sql = "INSERT INTO categories(name) VALUES ('macarons')";
check($conn, $sql);
$sql = "INSERT INTO categories(name) VALUES ('cakes')";
check($conn, $sql);

//add products

$sql = "INSERT INTO products(name, image, descr, categories, price) VALUES ('tonka', 'https://redirect.laduree.com/Storage/images/581253cf40bb9_23909_1.png', 'Two almond macaron shells field with tonka bean cream', 'macarons', '3')";
check($conn, $sql);
$sql = "INSERT INTO products(name, image, descr, categories, price) VALUES ('vanilla', 'https://redirect.laduree.com/Storage/images/58124b66003b8_8373_1.png', 'Two almond macaron shells field with vanilla smooth cream', 'macarons', '4')";
check($conn, $sql);
$sql = "INSERT INTO products(name, image, descr, categories, price) VALUES ('lemon', 'https://redirect.laduree.com/Storage/images/581265d14c76e_8365_1.png', 'Two almond macaron shells field with lemon smooth cream', 'macarons', '3')";
check($conn, $sql);
$sql = "INSERT INTO products(name, image, descr, categories, price) VALUES ('ruspbery', 'https://redirect.laduree.com/Storage/imagesSynchro/d6629c4f2bbe210ee824e9868b9faaafc099b490_macaron_framboise_simple.png', 'Two almond macaron shells field with ruspbery jam', 'macarons', '4')";
check($conn, $sql);
$sql = "INSERT INTO products(name, image, descr, categories, price) VALUES ('chocolate cake', 'https://static1.squarespace.com/static/538500e4e4b0fa9e95efc7b9/557b25a4e4b00bd15b3b9780/57e18227725e25ec2e654698/1474396726700/adj_SoGoodChocCake.png?format=500w', 'flavour - chocolate, weight - half kg, shape - round', 'cakes', '10')";
check($conn, $sql);
$sql = "INSERT INTO products(name, image, descr, categories, price) VALUES ('truffle cake', 'https://cdna1.zoeysite.com/Adzpo594RQGDpLcjBynL1z/cache=expiry:31536000/compress/https://s3.amazonaws.com/zcom-media/sites/a0i0L00000QyjfRQAR/media/catalog/product/c/h/chocotruffle-birthday-cake_1.png', 'flavour - truffle, weight - half kg, shape - round', 'cakes', '11')";
check($conn, $sql);
$sql = "INSERT INTO products(name, image, descr, categories, price) VALUES ('coffee cake', 'https://www.love.com.my/files/product_image/5317/1515032840.png', 'flavour - cofee, weight - half kg, shape - round',  'cakes', '17')";
check($conn, $sql);
$sql = "INSERT INTO products(name, image, descr, categories, price) VALUES ('cheesecake', 'https://mikkelsenspastryshop.com/wp-content/uploads/2015/12/CheeseCakeStock-300x229.png', 'flavour - cheesecake, weight - half kg, shape - round', 'cakes', '18')";
check($conn, $sql);

mysqli_close($conn);
?>
























