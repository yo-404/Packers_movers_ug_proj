<?php
session_start();
if(isset($_POST['calculated_cost_button']))
{
	if(isset($_POST))
	{
		$bathtub_qty = $_POST['bathtub-qty'] * 500;
		$couch_qty = $_POST['couch-qty'] * 800;
		$decorations_qty = $_POST['decorations-qty'] * 500;
		$desk_qty = $_POST['desk-qty'] * 500;
		$dining_qty = $_POST['dining-table-qty'] * 1000;
		$dishwash_qty = $_POST['dishwasher-qty'] * 600;
		$double_king_size_bed = $_POST['double-king-size-bed-qty'] * 800;
		$elevator_qty = $_POST['elevator-qty'] * 2000;
		$fan_qty = $_POST['fan-qty'] * 250;
		$kitchen_qty = $_POST['kitchen-unit-qty'] * 1500;
		$laundry_qty = $_POST['laundry-qty'] * 500;
		$mirror_qty = $_POST['mirror-qty'] * 600;
		$mixer_qty = $_POST['mixer-qty'] * 300;
		$oven_qty = $_POST['oven-qty'] * 400;
		$printer_qty = $_POST['printer-qty'] * 1000;
		$refrigerator_qty = $_POST['refrigerator-qty'] * 800;
		$single_qty = $_POST['single-khot-qty'] * 500;
		$storage_qty = $_POST['storage-qty'] * 1000;
		$table_qty = $_POST['table-qty'] * 400;
		$tv_qty = $_POST['tv-qty'] * 250;
		$vacuum_qty = $_POST['vacuum-qty'] * 150;
		$vases_qty = $_POST['vases-qty'] * 300;
		$washing_machine_qty = $_POST['washing-machine-qty'] * 500;
		$work_station_qty = $_POST['work-station-qty'] * 900;
		$insurance = 0;
		$floor = 0;

		if($_POST['from_elevator'] === "no")
		{
			$floor = $floor + 200;
		}
		if($_POST['to_elevator'] === "no")
		{
			$floor = $floor + 200;
		}
		
		if($_POST['insurance'] == "yes")
			$insurance = $insurance + 1500;

		$estimated_cost = $insurance + $floor + $work_station_qty + $washing_machine_qty + $vases_qty + $vacuum_qty + $tv_qty + $table_qty + $storage_qty + $single_qty + $refrigerator_qty + $printer_qty + $oven_qty + $mixer_qty + $mirror_qty + $laundry_qty + $kitchen_qty + $fan_qty + $elevator_qty + $double_king_size_bed + $dishwash_qty + $dining_qty + $desk_qty + $decorations_qty + $couch_qty + $bathtub_qty;

		$_SESSION['calculated_cost'] = $estimated_cost;
		$_SESSION['name'] = $_POST['name'];
		header("Location: calculate_costresult.php");
		exit();
		
	}
}
?>