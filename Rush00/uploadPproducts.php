<?php 
$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
$sql = "SELECT * FROM products";
$req = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($req, MYSQLI_ASSOC);
foreach($result as $key): ?>
<div style="display: inline-block;">
<h4><?php echo($key['name']) ?></h4></div>
<div style="display: inline-block;"><img src="<?php echo $key['image'] ?>"; alt="Smiley face" height="100" width="100"></div>
<p><?php echo $key['price'] . " " . $key['descr']?></p>
<div style="display: inline-block;"><button>Add to bascket</button></div><br>

<?php endforeach; 
?>
