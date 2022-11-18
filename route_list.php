<?php 
	require 'header.php';
?>
	
<div class="slider" style="margin:20px 0;">
	<div class="col-md-3"></div>
	<div class="col-md-6" style="border: 1px solid #000; font-size: 20px;">
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col"><?= $lang["transport"]; ?></th>
		      <th scope="col"><?= $lang["action"]; ?></th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  		$query = "select * from `transport`;";
		  		$res = mysqli_query($conn, $query);
		  		$k = 1;
		  		while ($row = mysqli_fetch_assoc($res)) {
		  			echo '
		  				<tr>
					      	<th scope="row">'.$k++.'</th>
					      	<td>'.$lang[$row["type"]].' #'.$row["name"].'</td>
					      	<td>
					      		<a href="ad_route.php?id='.$row["id"].'" style="color: green; margin-right: 10px;"><i class="fa fa-edit"></i></a>
					      	<a href="delete_route.php?id='.$row["id"].'" style="color: red"><i class="fa fa-trash"></i></a>
					      	</td>
					    </tr>
		  			';
		  		}
		  	?>
		  </tbody>
		</table>
	</div>
	<div class="clearfix"></div>
</div>
<?php 
	require 'footer.php';
?>