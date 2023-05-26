<?php include 'header.php' ?>

	<?php
		if(isset($_SESSION['calculated_cost']) && $_SESSION['calculated_cost']==0)
		{
			echo 	'<script>
						alert("Cannot Proceed with the payment")
						window.location.href="calculate_cost.php";
					</script>;';

		}
	?>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

	<div class="py-5 bg-secondary">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<aside class="col-md-6  offset-md-3">
						<?php
						if(isset($_SESSION['calculated_cost']))
						{ 
							$advance_payment = intval($_SESSION['calculated_cost']) * 0.3;
							echo '<p><center>Payment form for Rs.'.$advance_payment.'</center></p>';
						}
						?>

						<article class="card">
							<div class="card-body p-5">
								<p> 
									<img style="height: 50px; width: 100px;" src="images/visa.png"> 
									<img style="height: 50px; width: 100px;" src="images/mastercard.jpg"> 
									<img style="height: 50px; width: 100px;" src="images/rupay.jpg">
								</p>

								<form name="payment_form" onsubmit="return checkPaymentForm()" method="post" action="payment_backend.php" autocomplete="off" enctype="multipart/form-data">
									<div class="form-group">
										<label for="username">Full name (on the card)</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-user"></i></span>
											</div>
											<input type="text" class="form-control" id="nameOnCard" name="nameOnCard" placeholder="Name" required>
										</div> <!-- input-group.// -->
									</div> <!-- form-group.// -->

									<div class="form-group">
										<label for="cardNumber">Card number</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-credit-card"></i></span>
											</div>
											<input type="text" class="form-control" id="cardnumber" name="cardnumber" placeholder="16 digit cardnumber" required>
										</div> <!-- input-group.// -->
									</div> <!-- form-group.// -->

									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label><span class="hidden-xs">Expiration</span> </label>
												<div class="form-inline">
													<select class="form-control" id="month" style="width:45%" name="month" required>
														<option>01</option>
														<option>02</option>
														<option>03</option>
														<option>04</option>
														<option>05</option>
														<option>06</option>
														<option>07</option>
														<option>08</option>
														<option>09</option>
														<option>10</option>
														<option>11</option>
														<option>12</option>
													</select>
													<span style="width:10%; text-align: center"> / </span>
													<select class="form-control" id="year" style="width:45%" name="year" required>
														<option>2018</option>
														<option>2019</option>
														<option>2020</option>
														<option>2021</option>
														<option>2022</option>
														<option>2023</option>
														<option>2024</option>
														<option>2025</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label data-toggle="tooltip" title="Last 3 digits behind the card" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
												<input class="form-control" id="cvv" required type="text" name="cvv" required>
											</div> <!-- form-group.// -->
										</div>
									</div> <!-- row.// -->
									<button class=" btn btn-primary btn-block" name="confirm" autocomplete="off"> Confirm  </button>
								</form>
							</div> <!-- card-body.// -->
						</article> <!-- card.// -->
					</aside> <!-- col.// -->
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function checkPaymentForm()
		{
			var number = document.getElementById("cardnumber").value;
			var cvvv = document.getElementById("cvv").value;

			if(number.length != 16)
			{
				alert("Improper Card Number Length");
				return false;
			}
			//else if(!Interger.isInteger(parseInt(number)))
			else if(isNaN(number))
			{
				alert("Wrong CardNumber, Enter only numbers");
				return false;
			}
			//else if(!Integer.isInteger(parseInt(cvv)))
			else if(isNaN(cvvv))
			{
				alert("Wrong CVV");
				return false;
			}
			else if(cvvv.length != 3)
			{
				alert("Improper CVV Length");
				return false;
			}
			else
			{
				return true;
			}
			
		}
	</script>

</body>
</html>