<?php
display();
function display(){
	session_start();
	$i=$_SESSION["eid"];
		$conn=mysqli_connect("localhost","Nikita","#nikita123","php2024");
	
	if($conn)
	{
		//echo "Connection established successfully<br>";
		
		$query="select * from employee where eid=$i";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)>0)
		{
			while($data=mysqli_fetch_assoc($result))
			{
				echo "<h1>*****************Employee Feedback information************</h1><br>";
				echo "<br>1.Employee ID:{$data['eid']}";
				echo "<br>2.Employee Name:{$data['first_name']} {$data['last_name']}";
				echo "<br>3.Mobile No:{$data['mobile']}";
				echo "<br>4.email:{$data['email']}";
				echo "<br>5.How Meaningful is your work?:{$data['Q1']}";
				echo "<br>6.How Challenging is your job?{$data['Q2']}";
				echo "<br>7.In a typical week, how often do you feel stressed at work?{$data['Q3']}";
				echo "<br>8.How well are you paid for the job you do?{$data['Q4']}";
				echo "<br>9.How would you describe your overall level of job satisfaction?{$data['Q5']}";
				echo "<br>10.Salary:{$data['Q6']}";
				echo "<br>11.Overall Benefit:{$data['Q7']}";
				echo "<br>12.Senior Leadership:{$data['Q8']}";
				echo "<br>13.Individual Management:{$data['Q9']}";
				echo "<br>14.Physical work environment:{$data['Q10']}";
				echo "<br>15.Training Opportunities:{$data['Q11']}";
				echo "<br>16.Oppoptunities for advancement:{$data['Q12']}";
				echo "<br>17.Do you feel valued at work?{$data['Q13']}";
				echo "<br>18.Does your job cause stress or anxiety?{$data['Q14']}";
				echo "<br>19.Are sufficient efforts being made to solicit colleague opinions and feedback?{$data['Q15']}";
				echo "<br>20.Comments:{$data['comments']}";
				
			}
		}
		else
		{
			echo "records not found";
		}
	}
	else
	{
		echo "Connection error:".mysqli_connect_error();
	}
mysqli_close($conn);}

?>