<?php
$json = file_get_contents("http://rdapi.herokuapp.com/product/read.php");

$data = json_decode($json,true);
$list = $data['records'];


?>
<html>
<body>
    <div class="main_body"><br/>
<h1> Category list </h1>
<center>
<table border=1px>
    <tr>
        <th>Category ID</th>
        <th>Category Name</th>
    </tr>
<?php
foreach($list as $value){
?>
    <tr>
        <td><?php echo $value['category_id'];?></td>
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
