<?php

$url = 'http://rdapi.herokuapp.com/product/read.php'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$json_data = json_decode($data); // decode the JSON feed

echo $json_data[0]->name;

}

<html>
<head>
<title>API Test</title>
<body>
  <table>
	<tbody>
		<tr>
			<th>Name</th>
			<th>Description</th>
      <th>Price</th>
      <th>Category</th>
		</tr>
		<?php foreach ($json_data as $json_data) : ?>
        <tr>
            <td> <?php echo $json_data->name; ?> </td>
            <td> <?php echo $json_data->description; ?> </td>
            <td> <?php echo $json_data->price; ?> </td>
            <td> <?php echo $json_data->category_name; ?> </td>
        </tr>
		<?php endforeach; ?>
	</tbody>
</table>
</body>
</head>
</html>
