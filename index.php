<?php

include('libs/phpqrcode/qrlib.php'); 



if(isset($_POST['submit']) ) {
	$tempDir = 'temp/'; 
	
	$file= uniqid();
	$text =$_POST['text'];

	qrcode::png("upi://pay?pn=NileshAnand&pa=Q222461166@ybl&am=$text",$tempDir.''.$file.'.png', QR_ECLEVEL_L, 5);
	
}
?>

	



<!DOCTYPE html>
<html lang="en">
<head>
  <title>QR-CODE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
   
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
					
  <center>
      
      <div class="w3-container w3-teal">
          <h3>DAWA DAWAI PHARMA</h3>

<h4><i>Scan This QR code For Payment</i></h4>

</div>
      
	
</br>
</br>
 <!-- <input type="text" name="name" placeholder="Enter Your name"> <br><br> -->

    <input type="number" min="0.00" max="100000.00" step="0.01" name="text" placeholder="Enter Amount" />
    
	<!--<input type="number" name="text" placeholder="Enter Amount"> <br><br>-->
	<input type="submit" name="submit">

	</center>

				</form>
  </div>
</div>
<div class="container">
	
<?php

    $str='You are Paying Rs-'.$text;

    echo "<p style='color:red;'>" .$str . "</p>";
             //echo $str.$text;


			if(!isset($file)){
				$file = "Neel";
			}
?>
			
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="temp/'. @$file.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-default submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $file; ?>.png ">Download QR Code</a>
				</center>
</div>


</body>
</html>

</br>
</br>

<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container w3-teal">
  <h2>Powered By </br> <b>Mobikraft Tech PVT LTD </b></h2>
</div>




<div class="w3-container w3-teal">
  <p>Support:- 8809-7777-98</p>
</div>

</body>
</html> 



			
			
			
			
	