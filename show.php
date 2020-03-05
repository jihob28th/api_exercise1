<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");
$data = json_decode($json,true);

$search = $_POST['search'];
 
 if(isset($search)){
	$jsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
	$res = json_decode($jsearch,true);

	$list = $res['records'];
	
 }else{
	$list = $data['records'];
 }


?>
<html>
<body>
    <div class="main_body"><br/>
<h1> API Exercise 1 </h1>

	<form action="index.php?loadnav=list" method="POST">
	Search:<input type="text" name="search" placeholder="Search Product Name">
		<button type="submit" name="submit" >Search</button>
	</form>
<center>    
<table border="1px">
    <tr>
        <th>Product</th>
        <th>Category</th>
    </tr>
<?php
foreach($list as $result){
    ?>
    <tr>
        <td> <a href="index.php?loadnav=profile&id=<?php echo $result['id'];?>"> <?php echo $result['name']; ?> </a> </td>
	<td><?php echo $result['category_name'];?></td>   
    </tr>
<?php
}
?>
</table><br/>
</center>
</div>
</body>
</html>
