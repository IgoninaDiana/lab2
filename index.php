<?php 
include('connect.php');
$query = "SELECT * FROM info";
if($result = mysqli_query($mysqli, $query)){
    while($row = mysqli_fetch_array($result)){
       echo("<p>"."<h1>".$row["content"]."</h1>"."</p>");
       echo("<p>".$row["h1"]."</p>");
    }
}

   
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>

</body>

</html>