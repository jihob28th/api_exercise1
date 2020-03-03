<?php
	$id = $_GET['id'];
	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
	$data = json_decode($json,true);
	$details = array('records' => $data);
	$result = $details['records'];

	$jsonCat = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$catData = json_decode($jsonCat,true);
	$category = $catData['records'];
?>
<html> 
    <head>
      <title>  API Exercise 1 </title>
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
	<div class="navhead">
            <div class="navigation">
                        <ul> 
                        <li> <a href="index.php?loadnav=home"> <b>HOME </b></a> </li>
                        <li> <a href="index.php?loadnav=readprod"> SHOW PRODUCT</a> </li>
                        <li> <a href="index.php?loadnav=categories"> CATEGORIES</a> </li>
                        <li> <a href="index.php?loadnav=create"> CREATE  </a> </li>
                        </ul>
                        </div>
					</div>
					
					<div class="home_body"><br/><br/>
					<div class="content">
		<form action="pro_update.php?id=<?php echo $id ?>" method="POST">
			<b>Name:</b><input type="text" name="name" value="<?php echo $result['name'];?>"/><br/><br/>
			<b>Description:</b><textarea name="description"><?php echo $result['description']; ?></textarea><br/><br/>
			<b>Price:</b><input type="number" name="price" value="<?php echo $result['price'];?>"/><br/><br/>
			<b>Category:</b> <select name="category">
				<option value="<?php echo $result['category_id'];?>"><?php echo $result['category_name'];?></option>
			<?php
			foreach($category as $cview){
			?>
				<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
			<?php
			}
			?>
			</select>
			<br/><br/><input type="submit" name="submit" value="Done"/>
		</form>
	</div>
</div>
</html>
