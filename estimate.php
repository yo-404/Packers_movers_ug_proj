<html>

    <body style="background-color:#fcf6eb;">

<!-- <?php include 'header.php' ?> -->

<!-- PHP to check if a user Logged In or not! -->
<?php
if(!isset($_SESSION['username']))
{
	echo "Please Login First";
	exit();
}

?>
<script>
function fun()
{
	var name=document.getElementById("name").value;
	var distance=document.getElementById("distance").value;

	if(!isNaN(name))
	alert("name should only contain alphabets");

	if(isNaN(distance))
	alert("distance should be numeric values");

    if(distance<0)
    alert("distance cannot be less than 1 KMS");
	
	
    if(distance==0)
    alert("distance cannot be ) KMS");
	


}

</script>
<!-- Calculate Cost Page Starts Here-->
<div class="container col-sm-10" style="text-align: center; border: 1px solid black; border-radius: 20px; margin-top: 20px; margin-bottom: 20px;">
	<h3>Cost Estimation</h3><hr>

	<form method="post" action="estimate_backend.php" onsubmit="return itemsSelected()" enctype="multipart/form-data">
		<!-- Living Room Details Starts Here -->
		<fieldset>
			<legend>Living Room</legend>
			<div  style="margin-left:5px;">
				<div class="row" style="margin: 10px;">
					<div class="col-sm-3" id="table" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
						<div class="addon">
							<input readonly id="table-qty" name="table-qty" value="0" class="form-control" style="float: left;">
							<img src="images/table.png" width="30px" height="30px" style="">
						</div>
						<p style="clear:both">Center table</p>
						<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "table"); itemUpdate(this.value);'>
						<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "table"); itemUpdate(this.value);'>
					</div>

					<div class="col-sm-3" id="couch" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
						<div class="addon">
							<input readonly id="couch-qty" name="couch-qty" value="0" class="form-control" style="float: left;">
							<img src="images/couch.png" width="30px" height="30px" style="">
						</div>
						<p style="clear:both">Couch</p>
						<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "couch"); itemUpdate(this.value);'>
						<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "couch"); itemUpdate(this.value);'>
					</div>

					<div class="col-sm-3" id="decorations" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
						<div class="addon">
							<input readonly id="decorations-qty" name="decorations-qty" value="0" class="form-control" style="float: left;">
							<img src="images/decorations.png" width="30px" height="30px" style="">
						</div>
						<p style="clear:both">Decorations</p>
						<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "decorations"); itemUpdate(this.value);'>
						<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "decorations"); itemUpdate(this.value);'>
					</div>

					<div class="col-sm-3" id="tv" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
						<div class="addon">
							<input readonly id="tv-qty" name="tv-qty" value="0" class="form-control" style="float: left;">
							<img src="images/tv.png" width="30px" height="30px" style="">
						</div>
						<p style="clear:both">T.V</p>
						<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "tv"); itemUpdate(this.value);'>
						<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "tv"); itemUpdate(this.value);'>
					</div>

					<div class="col-sm-3" id="vases" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
						<div class="addon">
							<input readonly="" id="vases-qty" name="vases-qty" value="0" class="form-control" style="float: left;">
							<img src="images/vases.png" width="30px" height="30px" style="">
						</div>
						<p style="clear:both">Vases</p>
						<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "vases"); itemUpdate(this.value);'>
						<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "vases"); itemUpdate(this.value);'>
					</div>

					<div class="col-sm-3" id="vacuum" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
						<div class="addon">
							<input readonly="" id="vacuum-qty" name="vacuum-qty" value="0" class="form-control" style="float: left;">
							<img src="images/vacuum.png" width="30px" height="30px" style="">
						</div>
						<p style="clear:both">Vacuum</p>
						<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "vacuum"); itemUpdate(this.value);'>
						<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "vacuum"); itemUpdate(this.value);'>
					</div>
				</div>
			</div>
		</fieldset>
		<!-- Living Room Details Ends Here -->
			<hr>

			<!-- Bedroom Details Starts Here -->
			<fieldset>
				<legend>Bedroom</legend>
				<div id="items_inventory" style="margin-left:5px;">
					<div class="row" style="margin: 10px;">

						<div class="col-sm-3 items" id="double-king-size-bed" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="double-king-size-bed-qty" name="double-king-size-bed-qty" value="0" class="form-control" style="float: left;">
								<img src="images/double-king-size-bed.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">King-size-bed</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "double-king-size-bed"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "double-king-size-bed"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="bathtub" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="bathtub-qty" name="bathtub-qty" value="0" class="form-control" style="float: left;">
								<img src="images/bathtub.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Bathtub</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "bathtub"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "bathtub"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="laundry" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="laundry-qty" name="laundry-qty" value="0" class="form-control" style="float: left;">
								<img src="images/laundry.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Laundry</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "laundry"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "laundry"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="desk" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="desk-qty" name="desk-qty" value="0" class="form-control" style="float: left;">
								<img src="images/desk.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Desk</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "desk"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "desk"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="mirror" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="mirror-qty" name="mirror-qty" value="0" class="form-control" style="float: left;">
								<img src="images/mirror.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Mirror</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "mirror"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "mirror"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="single-khot" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="single-khot-qty" name="single-khot-qty" value="0" class="form-control" style="float: left;">

								<img src="images/single-khot.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Single khot</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "single-khot"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "single-khot"); itemUpdate(this.value);'>
						</div>
					</div>
				</div>
			</fieldset>
			<!-- Bedroom Details Ends Here -->
			
			<hr>

			<!-- Kitchen Details Starts Here -->
			<fieldset>
				<legend>Kitchen</legend>
				<div id="items_inventory" style="margin-left:5px;">
					<div class="row" style="margin: 10px;">

						<div class="col-sm-3 items" id="dishwasher" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="dishwasher-qty" name="dishwasher-qty" value="0" class="form-control" style="float: left;">
								<img src="images/dishwasher.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Dish Washer</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "dishwasher"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "dishwasher"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="mixer" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="mixer-qty" name="mixer-qty" value="0" class="form-control" style="float: left;">

								<img src="images/mixer.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Mixer</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "mixer"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "mixer"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="oven" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="oven-qty" name="oven-qty" value="0" class="form-control" style="float: left;">
								<img src="images/oven.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Oven</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "oven"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "oven"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="refrigerator" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="refrigerator-qty" name="refrigerator-qty" value="0" class="form-control" style="float: left;">
								<img src="images/refrigerator.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Refrigerator</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "refrigerator"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "refrigerator"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="kitchen-unit" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="kitchen-unit-qty" name="kitchen-unit-qty" value="0" class="form-control" style="float: left;">

								<img src="images/kitchen-unit.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Kitchen Unit</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "kitchen-unit"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "kitchen-unit"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="dining-table" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="dining-table-qty" name="dining-table-qty" value="0" class="form-control" style="float: left;">
								<img src="images/dining-table.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Dinning Table</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "dining-table"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "dining-table"); itemUpdate(this.value);'>
						</div>
					</div>
				</div>
			</fieldset>
			<!-- Kitchen Details Ends Here -->
			
			<hr>
			
			<!-- Other item details starts here -->
			<fieldset>
				<legend>Others</legend>
				<div id="items_inventory" style="margin-left:5px;">
					<div class="row" style="margin: 10px;">

						<div class="col-sm-3 items" id="washing-machine" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="washing-machine-qty" name="washing-machine-qty" value="0" class="form-control" style="float: left;">

								<img src="images/washing-machine.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">WashingMachine</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "washing-machine"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "washing-machine"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="elevator" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="elevator-qty" name="elevator-qty" value="0" class="form-control" style="float: left;">

								<img src="images/elevator.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Elevator</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "elevator"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "elevator"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="fan" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="fan-qty" name="fan-qty" value="0" class="form-control" style="float: left;">

								<img src="images/fan.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Fans</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "fan"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "fan"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="printer" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="printer-qty" name="printer-qty" value="0" class="form-control" style="float: left;">

								<img src="images/printer.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Printer</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "printer"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "printer"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="storage" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="storage-qty" name="storage-qty" value="0" class="form-control" style="float: left;">

								<img src="images/storage.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Storage</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "storage"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "storage"); itemUpdate(this.value);'>
						</div>

						<div class="col-sm-3 items" id="work-station" style="border: 1px solid black; border-radius: 10px; max-width: 140px; margin: 15px;" >
							<div class="addon">
								<input readonly="" id="work-station-qty" name="work-station-qty" value="0" class="form-control" style="float: left;">

								<img src="images/work-station.png" width="30px" height="30px" style="">
							</div>
							<p style="clear:both">Work Station</p>
							<input type="button" value="-" class="btn" onclick='changeItemCount(this.value, "work-station"); itemUpdate(this.value);'>
							<input type="button" value="+" class="btn" onclick='changeItemCount(this.value, "work-station"); itemUpdate(this.value);'>
						</div>
					</div>
				</div>
			</fieldset>
			<!-- Other item details ends here -->
			
			<hr>

			<!-- Details about the homes -->
			<fieldset>
				<legend>Home Details</legend>
				<div class="col-sm-12">
					<p>Loading Point</p>
					<div class="row">
						<div class="col-sm-8">
							<p>Floor Number</p>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="from_G" name="from_floor" value="0" />
								<label class="custom-control-label" for="from_G">G</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="from_1" name="from_floor" value="1" />
								<label class="custom-control-label" for="from_1">1</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="from_2" name="from_floor" value="2" />
								<label class="custom-control-label" for="from_2">2</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="from_3" name="from_floor" value="3" />
								<label class="custom-control-label" for="from_3">3</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="from_4" name="from_floor" value="4" />
								<label class="custom-control-label" for="from_4">4</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="from_5" name="from_floor" value="5" />
								<label class="custom-control-label" for="from_5">5</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="from_5+" name="from_floor" value="5+" />
								<label class="custom-control-label" for="from_5+">5+</label>
							</div>
						</div>

						<div class="col-sm-4">
							<p>Elevator ?</p>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="from_yes" name="from_elevator" value="yes" required/>
								<label class="custom-control-label" for="from_yes">Yes</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="from_no" name="from_elevator" value="yes" required/>
								<label class="custom-control-label" for="from_no">No</label>
							</div>
						</div>
					</div>
				</div><br>

				<div class="col-sm-12">
					<p>Unloading Point</p>
					<div class="row">
						<div class="col-sm-8">
							<p>Floor Number</p>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="to_G" name="to_floor" value="0" />
								<label class="custom-control-label" for="to_G">G</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="to_1" name="to_floor" value="1" />
								<label class="custom-control-label" for="to_1">1</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="to_2" name="to_floor" value="2" />
								<label class="custom-control-label" for="to_2">2</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="to_3" name="to_floor" value="3" />
								<label class="custom-control-label" for="to_3">3</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="to_4" name="to_floor" value="4" />
								<label class="custom-control-label" for="to_4">4</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="to_5" name="to_floor" value="5" />
								<label class="custom-control-label" for="to_5">5</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="to_5+" name="to_floor" value="5+" />
								<label class="custom-control-label" for="to_5+">5+</label>
							</div>
						</div>

						<div class="col-sm-4">
							<p>Elevator ?</p>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="to_yes" name="to_elevator" value="yes" required/>
								<label class="custom-control-label" for="to_yes">Yes</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="to_no" name="to_elevator" value="yes" required/>
								<label class="custom-control-label" for="to_no">No</label>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="col-sm-12">
					<div class="row">
						<div class="col">
							<p>Insurance for materials?</p>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="insurance_yes" name="insurance" value="yes" required/>
								<label class="custom-control-label" for="insurance_yes">Yes</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline">
								<input class="custom-control-input" type="radio" id="insurance_no" name="insurance" value="no" required/>
								<label class="custom-control-label" for="insurance_no">No</label>
							</div>
						</div>
					</div>
				</div>
			</fieldset>
			<!-- House Details End Here -->

			<hr>

			<!-- Owner Information Starts -->
			<fieldset>
				<!-- <legend>Owner Details</legend> -->
				<center>
					<div class="col-sm-6">
						<!-- <div class="row">
							<label for="name">Full Name</label><br>
							
							<input class="form-control" type="text-only" name="name" id="name" placeholder="Your name..." required />
						</div>
						<br>
						<div class="row">
							<label for="from-address">From Address</label>
							<textarea class="form-control"  rows="3" type="text" name="from-address" id="from-address" placeholder="Moving from..." required ></textarea>
						</div>
						<br>
						<div class="row">
							<label for="destination">Destination Address</label>
							<textarea class="form-control" rows="3" type="text" name="destination" id="destination" placeholder="Moving to..." required></textarea>
						</div>
						<br> -->
						<div class="row">
							<label for="distance">Approximate distance</label>
							<input class="form-control" type="number" name="distance" id="distance" placeholder="Distance in kms" required/>
						</div>
						<br>
					</div>
				</center>
				<hr>
				<br>
			</fieldset>
			<!-- Owner Information Ends Here -->

			<!-- Calculate Cost Button Starts Here -->
			<div class="row">
				<div class="col-sm-6 input-group">
					
				</div>
				<div class="col-sm-4">
					<button class="btn btn-primary" name="calculated_cost_button" onClick="fun()" >Calculate Cost</button>
				</div>
			</div>
			<!-- Calculate Cost Button Ends here -->

			<br>
		</form>


		<!-- Payment Button Starts Here-->
		<div class="row">
			
		</div>
		<!-- Payment Button Ends here -->

		<br><br>

	</div>
	<!-- Calculate Cost Page Ends Here-->

	
	<script type="text/javascript">
		var items=0;
		function itemUpdate(count)
		{
			if(count == "+")
			{
				items = items + 1;
			}
			else
			{
				items = items-1;
			}
		}

		function itemsSelected() {
			if(items == 0)
			{
				alert("Select atleast one item");
				return false;
			}
			return true;
		}
	</script>
</body>
</html>