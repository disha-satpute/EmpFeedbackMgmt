<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form submission</title>
</head>
<style>
    * {
        font-family: sans-serif;
    }

    .image img {
        margin: 150px 620px;
        height: 210px;

    }

    .image h1 {
        margin: -150px 600px;
        font-size: 50px;
        width: 23%;
    }

    .sl span {
        position: absolute;
        left: 610px;
        top: 434px;
    }
	 

    .sl h3 {
        position: absolute;
        left: 480px;
        top: 450px;
        padding: 27px 20px;

        width: 35%;
        height: 4%;
        background: #f2f2f2;
        border-radius: 25px;
        box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.2);
    }
	.sl a{
		margin-left:610px;
		position: relative;
		top:163px;
	}

</style>

<body>
	
<div class="image">
	<img src="img/Thankyou.png" alt="">
	<h1>Thank You</h1>
	<div class="sl">
		<span>Your submission has been received.</span><br>
		<a href="display.php" id="clickMeLink">Click here to View Your Response</a>
	</div>	
</div>
	
  <?php

	$conn=mysqli_connect("localhost","Nikita","#nikita123","php2024");
	if($conn)
	{
		//echo "Connection established successfully";
		$id=$_POST['empid'];
		$designation=$_POST['designation'];
        $fname=$_POST['fnm'];
        $lname=$_POST['lnm'];
        $email=$_POST['email'];
        $mono=$_POST['mono'];
        $Q1=$_POST['r1'];
        $Q2=$_POST['r2'];
        $Q3=$_POST['r3'];
        $Q4=$_POST['r4'];
        $Q5=$_POST['r5'];
        $Q6=$_POST['r6'];
        $Q7=$_POST['r7'];
        $Q8=$_POST['r8'];
        $Q9=$_POST['r9'];
        $Q10=$_POST['r10'];
        $Q11=$_POST['r11'];
        $Q12=$_POST['r12'];
        $Q13=$_POST['r13'];
        $Q14=$_POST['r14'];
        $Q15=$_POST['r15'];
        $Q16=$_POST['r16'];
		$query="INSERT INTO employee VALUES('$id','$designation','$fname','$lname','$mono','$email','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$Q11','$Q12','$Q13','$Q14','$Q15','$Q16')";
		
		
		if(mysqli_query($conn,$query))
		{
			//echo "records submitted"; 
		}
		//else
		{
			//echo "records not submitted";
		}
	}
	else
	{
		//echo "Connection not established".mysqli_connect_error();
	}
		mysqli_close($conn);
	
	echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
	session_start();
	$_SESSION["eid"]=$id;

?>
	
</body>
</html>