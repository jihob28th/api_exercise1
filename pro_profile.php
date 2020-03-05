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
		<table border=1>
				<p> <b>Price:  </b><?php echo $result['price']; ?></p>
				<p> <b>Description:  </b><?php echo $result['description']; ?> </p>
				<p> <b>Category:  </b><?php echo $result['category_name'];?> </p>
		</table>
				<footer>
					<a href="form_update.php?id=<?php echo $id ?>">Update | </a>
					<a href="pro_delete.php?id=<?php echo $id ?>">Delete</a></br></br>

					<a href="index.php?loadnav=list"><== Back</a>
				</footer>
			</div>
		</div>
  </div>
</body>
</html>
