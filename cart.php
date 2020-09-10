<?php
require("includes/common.php");
if(!isset($_SESSION['email'])){
   header('location: index.php');
}
$user_id=$_SESSION['user_id'];
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="css/style.css">
     <title>Cart page</title>
</head>
<body>
	<?php require("includes/header.php")?>
	<br><br><br><br>
	<div class="container" style="width:50%">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Item Number</th>
					<th>Item Name</th>
					<th>Price</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php 
    $select_query_5="SELECT items.price AS Price, items.id AS Id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
    $select_query_result_5=mysqli_query($con,$select_query_5) or die(mysqli_error($con));
    $total_rows_fetched_5=mysqli_num_rows($select_query_result_5);
    $sum=0;$id=NULL;
         for($num=1;$num<=$total_rows_fetched_5;$num++)
         {
            $row=mysqli_fetch_array($select_query_result_5);
         	$sum=$sum+$row['Price'];
            $id .=$row['Id'] . ", ";?>
        <tr>
            <td><?php echo $num;?></td>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['Price']?></td>
            <?php echo"<td><a href='cart-remove.php?id=".$row['Id']." 'class='remove_item_link'> Remove</a></td>";?>
        </tr>
        <?php
}?>
        <tr>
            <?php $id = rtrim($id, ", ");?>
            <td></td>
            <?php echo"<td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td>";?>
        </tr>
			</tbody>
		</table>
        <?php 
        for($i=1;$i<=23;$i++){ ?>
            <br>
        <?php } ?>
	</div>
	<?php require("includes/footer.php")?>
</body>
</html>