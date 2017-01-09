


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
				<input type = "radio" name = "tip" value = "0.1" onClick="this.form.custom.disabled=true"/>10%
				<input type = "radio" name = "tip" value = "0.15" onClick="this.form.custom.disabled=true" checked="checked"/>15%
				<input type = "radio" name = "tip" value = "0.2" onClick="this.form.custom.disabled=true" />20%
				<input type = "radio" name = "tip" value = "cus" onClick="this.form.custom.disabled=false"/>custom tip: 
				<input type = "text" style="width: 30px;" name = "custom"/> %

			</div>

		</br>
			<div class="spl">
				<label for = "spl">Do you want to split: </lable>
			</div>

			<div class = "answer">
				<input type = "radio" name = "split" value = "yes" onClick="this.form.number.disabled=false" checked="checked"/>Yes with 
	
				<input type = "text" style="width:20px;" name = "number"/> people
				</br>
				<input type = "radio" name = "split" value = "no" onClick="this.form.number.disabled=true" />No
			</div>
				
			


			</br>
			
			<div class = "dutton">
				<button type = "submit">Submit</button>
			</div>

		

		
		</form>
	</div>
	</body>
</html>
		