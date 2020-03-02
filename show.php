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

    <form action="index.php?page=list" method="POST">
	    Search: <input type="text" name="search" placeholder="Search Product Name">
		        <input type="submit" name="submit" value="Search">
    </form>
<center>    
<table border="1px">
    <tr>
        <th>Product</th>
        <th>Category</th>
    </tr>
<?php
foreach($list as $value){
    ?>
    <tr>
        <td><a href="pro_profile.php?id=<?php echo $value['id'];?>"><?php echo $value['name'];?></a></td>
	    <td><?php echo $value['category_name'];?></td>   
    </tr>
<?php
}
?>
</table><br/>
</center>
</div>
</body>
</html>
