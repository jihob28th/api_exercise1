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
<br/>
<br/>
<br/>

<form action="pro_update.php?id=<?php echo $id ?>" method="POST">
	Name:<br/><?php echo $result['name'];?><br/><br/>
	Description:<br/><?php echo $result['description']; ?></textarea><br/><br/>
	Price:<br/><?php echo $result['price']; ?><br/><br/>
	Category:<select name="category">
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
</html>
