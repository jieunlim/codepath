


<html>
  <head>
  	<meta charset="uft-8">
  	<link rel = "stylesheet" href="css.css">
  </head>
	<body>
		
		
	<div class = "box1">
		<form name = "frm" action = "cal1.php" method="post">
			<h1>Tip Calculator</h1>
		</br>
			<div class="subtotal">
				<label for = "subtotal">Bill subtotal: $</label>
				<input type = "text" style="width: 90px;" name = "subtotal"/>
				
			</div>
			<div class= "tip">
			</br>
				<label for = "tippercentage">Tip percentage: </label>
				<input type = "radio" name = "tip" value = "0.1" />10%
				<input type = "radio" name = "tip" value = "0.15" checked="checked"/>15%
				<input type = "radio" name = "tip" value = "0.2" />20%
			</div>

			<div></br></div>
			
			<div class = "dutton">
				<button type = "submit">Submit</button>
			</div>

		

		
		</form>
	</div>
	</body>
</html>
		