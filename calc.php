<!DOCTYPE html>
<html>
<head>
	<title>Fee-School Name</title>
</head>
<body>
	<center>
		<div>
	<form method="post" action="print_bill.php">
	<table>
		<th>Student Name</th>
		<th>Reg. No</th>
		<th>Class</th>
		<th>Date</th>
		<th>Deposite by</th>
		<tr>
			<td style="padding: 10px;"><input type="text" name="name" placeholder="Name"></td>
			<td><input type="number" name="reg_num" placeholder="Reg No"></td>
			<td><select name="class"><option selected>--Class--</option>
					<option value="nursery">Nursery</option>
					<option value="lkg">L.K.G.</option>
					<option value="ukg">U.K.G.</option>
					<option value="1">1st</option>
				 	<option value="2">2nd</option>
				 	<option value="3">3rd</option>
				 	<option value="4">4th</option>
				 	<option value="5">5th</option></select></td>
			<td><input type="text" name="date" value="<?php  echo date("d-m-Y"); ?>"></td>
			<td><input type="text" name="depositer" placeholder="Depositer"></td>
		</tr>
		<tr  bgcolor="grey"><td colspan="5">
			<fieldset>
				<legend>Particulars</legend>
				<label>New Admission</label><input type="checkbox" name="admission" value="admission">
				<label>Yearly</label><input type="checkbox" name="yearly" value="yearly">
				<label>Diary</label><input type="checkbox" name="diary" value="diary">
				<label>Tie</label><input type="checkbox" name="tie" value="tie">
				<label>Belt</label><input type="checkbox" name="belt" value="belt"><br>
				<label>Ad form</label><input type="checkbox" name="adform" value="Ad form">
				<label>I card</label><input type="checkbox" name="icard" value="i card">
			</fieldset>
		</td></tr>
		<tr>
		<td colspan="5" >
			<fieldset>
				<legend>Tution fee</legend>
				<label>April </label><input type="checkbox" name="apr" value="apr">
				<label>May </label><input type="checkbox" name="may" value="may">
				<label>June </label><input type="checkbox" name="jun" value="jun">
				<label>July </label><input type="checkbox" name="jul" value="jul">
				<label>Aug </label><input type="checkbox" name="aug" value="aug">
				<label>Sep </label><input type="checkbox" name="sep" value="sep">
				<label>Oct </label><input type="checkbox" name="oct" value="oct">
				<label>Nov </label><input type="checkbox" name="nov" value="nov">
				<br>
					<label>Dec </label><input type="checkbox" name="dec" value="dec">
				<label>Jan </label><input type="checkbox" name="jan" value="jan">
				<label>Feb </label><input type="checkbox" name="feb" value="feb">
				<label>March </label><input type="checkbox" name="mar" value="mar">
			</fieldset>
		</td>
		</tr>
	</table>
<input type="submit" name="print" value="Print Bill">
</form>
</center>
</body>
</html>