


<html>
  <head>
  	<meta charset="uft-8">
  	<link rel = "stylesheet" href="css.css">
  </head>
	<body>
		
		
	<div class = "box">
		<form name = "frm" action = "cal1.php" method="post">
			<h1>Tip Calculator</h1>
		</br>
			<div class="subtotal">
				<label for = "subtotal">Bill subtotal: $</label>
				<input type = "text" style="width: 90px;" name = "subtotal" 
				value="<?=$_POST ["subtotal"]?>"/>
				
			</div>
			<div class= "tip">
			</br>
				<label for = "tippercentage">Tip percentage: </label>
				
				<input type = "radio" name = "tip" value = "0.1" onClick="this.form.custom.disabled=true" 
				<?=$_POST["tip"] == "0.1" ? "checked='checked'" : "" ?> />10%
				
				<input type = "radio" name = "tip" value = "0.15" onClick="this.form.custom.disabled=true"
				<?=$_POST["tip"] == "0.15" ? "checked='checked'" : "" ?> />15%
				
				<input type = "radio" name = "tip" value = "0.2" onClick="this.form.custom.disabled=true"
				<?=$_POST["tip"] == "0.2" ? "checked='checked'" : "" ?> />20%

				<input type = "radio" name = "tip" value = "cus" onClick="this.form.custom.disabled=false" 
				<?=$_POST["tip"] == "cus" ? "checked='checked'" : "" ?> />custom tip:
				
				<input type = "text" style="width: 30px;" name = "custom" 
				value= "<?=$_POST["tip"] == "cus" ? $_POST["custom"] : "" ?>"
				
				 > %
				
			</div>
		</br>
			<div class="spl">
				<label for = "spl">Do you want to split: </lable>
			</div>

			<div class = "answer">
				<input type = "radio" name = "split" value = "yes" onClick="this.form.number.disabled=false" checked="checked"
				
				<?=$_POST["split"] == "yes" ? "checked='checked'" : "" ?> />Yes with 
				
				<input type = "text" style="width:20px;" name = "number"
				value= "<?=$_POST["split"] == "yes" ? $_POST["number"] : "" ?>"
				
				/> people
				
				</br>
				<input type = "radio" name = "split" value = "no" onClick="this.form.number.disabled=true" 
				<?=$_POST["split"] == "no" ? "checked='checked'" : "" ?> />No
				
			</div>
				
			


			</br>
			
			<div class = "dutton">
				<button type = "submit">Submit</button>
			</div>

		

		
<?php
		$tipAvailable = true;
		$splitAvaliable = true;
		$tip;
		$sub = $_POST['subtotal'];
		$total = 0;

		if($_POST["tip"] == "cus"){
			$tipAvailable = checkAvailable($_POST["custom"]);
			$tip = $_POST["custom"]/100;
		}else $tip = $_POST['tip']; 

	
		if($_POST["split"]=="yes"){
			$splitAvaliable = checkAvailable($_POST["number"]);
		}

		function checkAvailable($arg){
			if(is_numeric($arg) && $arg>0){
			return true;}
			else {
				 return false;}
			}


		 




		if (is_numeric($sub)&& $sub>0 && $tipAvailable && $splitAvaliable){
			
			
			$total = $sub * (1+ $tip);
			$tip = $tip * 100;
			echo '<br />';
			echo '<div class= "lastbox">';
			echo "Tip:" . " " .$tip."%";
			echo '<br /><br />';
			echo "Total:" . " " . $total;
			

			if($_POST["split"] == "yes") 
			
			echo " / Each : " .$total/$_POST["number"];
			echo "</div>";
				
			
		
			
		}
		//else form.action = "cal.php";
		
		

?>
		</form>
	</div>
	</body>
</html>
		