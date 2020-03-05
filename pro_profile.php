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
			<ul>
				<li> <b>Price:  </b><?php echo $result['price']; ?></li>
				<li> <b>Description:  </b><?php echo $result['description']; ?> </li>
				<li> <b>Category:  </b><?php echo $result['category_name'];?> </li>
			</ul>
				<footer>
				<li>	<a href="form_update.php?id=<?php echo $id ?>">Update | </a></li>
				<li>	<a href="pro_delete.php?id=<?php echo $id ?>">Delete</a></br></br></li>

				</footer>
	 	</table>
			</div>
		</div>
  </div>
</body>
</html>
