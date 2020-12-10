<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>BIODATA</h1>
<form action="Biodata.php" method="POST">
<table>

	<tr>
		<td>
			<label>Name</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Name">
		</td>
	</tr>


	<tr>
		<td>
			<label>Present Address</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Presend_Address">
		</td>
	</tr>

	<tr>
		<td>
			<label>Permanent Address</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Permanent_Address">
		</td>
	</tr>

	<tr>
		<td>
			<label>Date of Birth</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Date_Of_Birth">
		</td>

		<td></td>
		<td>
			<label>Religion</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Religion">
		</td>
	</tr>


	<tr>
		<td>
			<label>Civil Status</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Civil_Status">
		</td>

		<td></td>
		<td>
			<label>Age</label>
		</td>
		<td>
			<label>:</label>
			<input type="number" name="Age">
		</td>
	</tr>

	<tr>
		<td>
			<label>Citizenship</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Citizenship">
		</td>

		<td></td>
		<td>
			<label>Weight</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Weight">
		</td>
	</tr>

	<tr>
		<td>
			<label>Place of Birth</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Place_Of_Birth">
		</td>

		<td></td>
		<td>
			<label>Height</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Height">
		</td>
	</tr>

	<tr>
		<td>
			<label>Name of Father</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Name_Of_Father">
		</td>
	</tr>

	<tr>
		<td>
			<label>Name of Mother</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Name_Of_Mother">
		</td>
	</tr>



	<tr>
		<td>
			<label>Address</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Address">
		</td>
	</tr>


	<tr>
		<td>
			<label>Languages or Dialects Spoken</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Languages">
		</td>
	</tr>


	<tr>
		<td>
			<label>Person to be notified In Case of Emergency</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Emergency">
		</td>
	</tr>

</table>
<h2>EDUCATIONAL BACKGROUND</h2>
<table>
	<tr>
		<td>
			<label>Elementary</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Elementary">
		</td>
		<td>
			<label>Year Graduated</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Elementary_Year_Graduated">
		</td>
	</tr>

	<tr>
		<td>
			<label>High School</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="High_School">
		</td>
		<td>
			<label>Year Graduated</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="High_School_Year_Graduated">
		</td>
	</tr>

	<tr>
		<td>
			<label>College</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="College">
		</td>
		<td>
			<label>Year Graduated</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="College_Year_Graduated">
		</td>
	</tr>


	<tr>
		<td>
			<label>Course</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Course">
		</td>
	</tr>
	<tr>
		<td>
			<label>Special Skills</label>
		</td>
		<td>
			<label>:</label>
			<input type="text" name="Special_Skills">
		</td>
	</tr>


	<tr>
		<td>
			<input type="Submit" name="Submit" value="Submit">
		</td>
	</tr>

</table>
</form>
<table style="border-style: solid;border-width: 2px; padding: 8px; margin: 8px; background-color: lightgray;">
<?php 

if(isset($_POST['Submit'])){

	$Name = $_POST ['Name'];
	$Presend_Address = $_POST ['Presend_Address'];
	$Permanent_Address = $_POST ['Permanent_Address'];
	$Date_Of_Birth = $_POST ['Date_Of_Birth'];
	$Civil_Status = $_POST ['Civil_Status'];
	$Citizenship = $_POST ['Citizenship'];
	$Place_Of_Birth = $_POST ['Place_Of_Birth'];
	$Name_Of_Father = $_POST ['Name_Of_Father'];
	$Name_Of_Mother = $_POST ['Name_Of_Mother'];
	$Address = $_POST ['Address'];
	$Languages = $_POST ['Languages'];
	$Emergency = $_POST ['Emergency'];
	$Religion = $_POST ['Religion'];
	$Age = $_POST ['Age'];
	$Weight = $_POST ['Weight'];
	$Height = $_POST ['Height'];
	$Elementary = $_POST ['Elementary'];
	$Elementary_Year_Graduated = $_POST ['Elementary_Year_Graduated'];
	$High_School = $_POST ['High_School'];
	$High_School_Year_Graduated = $_POST ['High_School_Year_Graduated'];
	$College = $_POST ['College'];
	$College_Year_Graduated = $_POST ['College_Year_Graduated'];
	$Course = $_POST ['Course'];
	$Special_Skills = $_POST ['Special_Skills'];

	echo "<tr><td><h1>BIODATA</h1></td></tr>";
	echo "<tr><td>";
	echo "Name :" .$Name;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Presend Address :" .$Presend_Address;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Permanent Address :" .$Permanent_Address;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Date of Birth :" .$Date_Of_Birth;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Civil Status :" .$Civil_Status;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Citizenship :" .$Citizenship;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Place of Birth :" .$Place_Of_Birth;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Name of Father :" .$Name_Of_Father;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Name of Mother :" .$Name_Of_Mother;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Address :" .$Address;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Languages :" .$Languages;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Emergency :" .$Emergency;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Religion :" .$Religion;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Age :" .$Age;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Weight :" .$Weight;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Height :" .$Height;
	echo "</td></tr>";

	echo "<tr style Colspan = '1'><td><h1>EDUCATIONAL BACKGROUND :</h1></td></tr>";
	echo "<tr><td>";
	echo "Elementary :" .$Elementary. "<td>". "Year Graduated :" . $Elementary_Year_Graduated;
	echo "<td/></td></tr>";

	echo "<tr><td>";
	echo "High School :" .$High_School. "<td>". "Year Graduated :" . $High_School_Year_Graduated;
	echo "<td/></td></tr>";

	echo "<tr><td>";
	echo "College :" .$College. "<td>". "Year Graduated :" . $College;
	echo "<td/></td></tr>";

	echo "<tr><td>";
	echo "Course :" .$Course;
	echo "</td></tr>";

	echo "<tr><td>";
	echo "Special Skills :" .$Special_Skills;
	echo "</td></tr>";



}

 ?>
 </table>



</body>
</html>