<?php
 $id = $_GET['id'];
 $json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 $data = json_decode($json,true);
 $details = array('records' => $data);
 $result = $details['records'];
?>
<html> 
    <head>
      <title>  API Exercise 1 </title>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>

  <div class="home_body"><br/><br/>
  <div class="content">
		<h1><b><?php echo $result['name']; ?></b></h1>
		<table border="1px">
			    <tr>
				<th>Price</th>
				<th>Description</th>
				<th>Category</th>
			    </tr>
			<tr>
				<td> <?php echo $result['price']; ?></td>
				<td> <?php echo $result['description']; ?> </td>
				<td> <?php echo $result['category_name'];?> </td>
				<td> <a href="form_update.php?id=<?php echo $id ?>"><h4>Update</h4></a></td>
				<td> <a href="pro_delete.php?id=<?php echo $id ?>"><h4>Delete</h4></a></br></br></td>
			</tr>
	 	</table>
			</div>
		</div>
  </div>
</body>
</html>
