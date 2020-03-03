<?php
	//category
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
  <div class="home_body"><br/><br/><br/><br/>
    <h1> Create Product </h1>
    <form action="pro_create.php" method="POST">
        <input type="text" name="name" placeholder="name"/>
        <input type="text" name="description" placeholder="description"/>
        <input type="text" name="price" placeholder="price"/>
        Category:<select name="category">
		<option value="">--Select Category--</option>
	<?php
      foreach($category as $cview){
    ?>
		<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
    <?php
      }
    ?>
	</select>
        <input type="submit" name="submit" value="submit"/>
    </form>
  </div>
</body>
</html>
