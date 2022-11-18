<?php 
	require 'header.php';
?>

<style type="text/css">

.select2-container {
  min-width: 400px;
}

.select2-results__option {
  padding-right: 20px;
  vertical-align: middle;
}
.select2-results__option:before {
  content: "";
  display: inline-block;
  position: relative;
  height: 20px;
  width: 20px;
  border: 2px solid #e9e9e9;
  border-radius: 4px;
  background-color: #fff;
  margin-right: 20px;
  vertical-align: middle;
}
.select2-results__option[aria-selected=true]:before {
  font-family:fontAwesome;
  content: "\f00c";
  color: #fff;
  background-color: #f77750;
  border: 0;
  display: inline-block;
  padding-left: 3px;
}
.select2-container--default .select2-results__option[aria-selected=true] {
  background-color: #fff;
}
.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background-color: #eaeaeb;
  color: #272727;
}
.select2-container--default .select2-selection--multiple {
  margin-bottom: 10px;
}
.select2-container--default.select2-container--open.select2-container--below .select2-selection--multiple {
  border-radius: 4px;
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
  border-color: #f77750;
  border-width: 2px;
}
.select2-container--default .select2-selection--multiple {
  border-width: 2px;
}
.select2-container--open .select2-dropdown--below {
  
  border-radius: 6px;
  box-shadow: 0 0 10px rgba(0,0,0,0.5);

}
.select2-selection .select2-selection--multiple:after {
  content: 'hhghgh';
}
/* select with icons badges single*/
.select-icon .select2-selection__placeholder .badge {
  display: none;
}
.select-icon .placeholder {
/*  display: none; */
}
.select-icon .select2-results__option:before,
.select-icon .select2-results__option[aria-selected=true]:before {
  display: none !important;
  /* content: "" !important; */
}
.select-icon  .select2-search--dropdown {
  display: none;
}
</style>
	
<div class="slider" style="margin:20px 0;">
	<div class="col-md-2"></div>
	<div class="col-md-4">
		<div class="">
			<h3 style="text-align: center;"><?= $lang["ad"]. " ". $land["transport"]; ?></h3>
			<form action="php/ad_transport.php" method="post">
				<div class="row" style="display: flex; margin: 0; justify-content: space-around;">
					<div class="row" style="display: flex; margin: 0">
						<input type="radio" name="type" id="microbus" value="micro_bus" class="form-control" style="width: 18px">
						<label for="microbus" style="margin: 14px 0 0 3px;"><?= $lang["micro_bus"]?></label>
					</div>
					<div class="row" style="display: flex; margin: 0 10px">
						<input type="radio" name="type" id="bus" value="bus" class="form-control" style="width: 18px">
						<label for="bus" style="margin: 14px 0 0 3px;"><?= $lang["bus"]?></label>
					</div>
					<div class="row" style="display: flex; margin: 0">
						<input type="radio" name="type" id="trolleybus" value="trolley_bus" class="form-control" style="width: 18px">
						<label for="trolleybus" style="margin: 14px 0 0 3px;"><?= $lang["trolley_bus"]?></label>
					</div>
				</div>
				<label><?= $lang["number"]; ?></label>
				<input type="text" name="number" placeholder="" class="form-control"><br>
				<label><?= $lang["route"]; ?></label>
				<select class="js-select2" multiple="multiple" name="route[]">
			        <?php 
			        	$query = "select * from `route`";
			        	$res = mysqli_query($conn, $query);
			        	while ($row = mysqli_fetch_assoc($res)) {
			        		echo '
			        			<option value="'.$row["id"].'" data-badge="">'.$row["name"].'</option>
			        		';
			        	}
			        ?>
			     </select><br>
			     <input type="submit" name="ad_transport_btn" class="btn btn-success" value="<?= $lang["ad"]; ?>">
			</form>
		</div>
	</div>
	<div class="col-md-4">
		<h3 style="text-align: center;"><?= $lang["ad"]. " ". $land["palce"]; ?></h3>
		<form action="php/ad_place.php" method="post">
			<br><br><br>
			<input type="text" name="place" class="form-control" placeholder="<?= $lang["place_name"]; ?>"><br>
			<input type="submit" name="ad_transport_btn" class="btn btn-success" value="<?= $lang["ad"]; ?>">
		</form>
	</div>
	<div class="col-md-2"></div>
	<div class="clearfix"></div>
</div>
<script type="text/javascript">
	$(".js-select2").select2({
	      closeOnSelect : false,
	      placeholder : "Placeholder",
	      // allowHtml: true,
	      allowClear: true,
	      tags: true // создает новые опции на лету
	    });
</script>
<?php 
	require 'footer.php';
?>