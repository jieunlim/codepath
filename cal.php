


<html>
  <head>
  	<meta charset="uft-8">
  	<link rel = "stylesheet" href="css.css">
  </head>
	<body>
		
		
	<div class = "box">
		<form name = "frm" action = "cal.php" method="post">
			<h1>Tip Calculator</h1>
		</br>
			<div class="subtotal">
				<label for = "subtotal">Bill subtotal: $</label>
				<input type = "text" style="width: 90px;" name = "subtotal" value="<?=$_POST ["subtotal"]?>"/>
				
			</div>
			<div class= "tip">
			</br>
				<label for = "tippercentage">Tip percentage: </label>
				<input type = "radio" name = "tip" value = "0.1" 
				<?=$_POST["tip"] == "0.1" ? "checked='checked'" : "" ?> />10%
				<input type = "radio" name = "tip" value = "0.15" 
				<?=$_POST["tip"] == "0.15" ? "checked='checked'" : "" ?> />15%
				<input type = "radio" name = "tip" value = "0.2" 
				<?=$_POST["tip"] == "0.2" ? "checked='checked'" : "" ?> />20%
			</div>

			<div></br></div>
			
			<div class = "dutton">
				<button type = "submit">Submit</button>
			</div>

		

		
<?php
		
		$tip = $_POST['tip']; 
		$sub = $_POST['subtotal'];
		$total = 0;

		if (is_numeric($sub)&&$sub>0){
			if (isset($_POST['tip'])) {
				$total = $sub * (1+ $tip);
				$tip = $tip*100;


				echo '<br />';
				echo '<div class= "lastbox">';
			
				echo "Tip:" . " " .$tip."%";
				echo '<br /><br />';
				echo "Total:" . " " . $total;
				echo "</div>";

				
			}
		
			else {print "Please check tip";}

		
		}
		
		

?>
		</form>
	</div>
	</body>
</html>
		