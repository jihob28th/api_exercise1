<?php
 $id = $_GET['id'];
 $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 $data = json_decode($json,true);
 $details = array('records' => $data);
 $result = $details['records'];
?>
<html>
			<h1><b><?php echo $result['name']; ?></b></h1>
<table border=1>
		<p> <b>Price:  </b><?php echo $result['price']; ?></p>
		<p>	<b>Description:  </b><?php echo $result['description']; ?> </p>
		<p>	<b>Category:  </b><?php echo $result['category_name'];?> </p>
</table>
		<footer>
			<a href="index.php?page=update&id=<?php echo $id ?>">Update</a>
			<a href="pro_delete.php?id=<?php echo $id ?>">Delete</a></br></br>

			<a href="index.php?loadnav=readprod"><== Back</a>
		</footer>
	</div>
  </div>
</html>
