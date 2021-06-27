<!DOCTYPE html>
<HEAD>
<style type="text/css">
table {
position: fixed; left: 580px; top:250px;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: .9em;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: .9em;
border: 2px solid #DDD;
}

body#img{
  background-image:linear-gradient(to bottom, #e9780f, #47bdf0);
  background-size: 1300px  600px;
}

</style>
</HEAD>
<BODY id="img">

<?php

echo "<p style='color: #000;
 font-size: 40px;
 position: fixed; left: 550px; top:40px;
 text-align: center;
text-shadow: 4px 4px 4px #02213d;
font-family: cursive;'> Results page</p>";

echo "<p style='color:#FFFFFF;
font-size: 22px;
position: fixed; left: 360px; top:150px;
text-align: center;
text-shadow: 4px 4px 4px #02213d;
font-family: cursive;'>
Note During the running state, the state value appears as 1</p>";

$conn = new mysqli("localhost", "root", "", "degrees");
$update ="UPDATE tbl_degrees SET OnEngine=1,OffEngine=0"; 
   
if ($conn->query($update) === TRUE) { 
}
else {
echo "Error: " . $update . "<br>" . $conn->error;
}

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$printData="SELECT FirstEngine,SecondEngine,ThirdEngine,FourthEngine,FifthEngine,
  SixthEngine,OnEngine FROM tbl_degrees";
$result = $conn->query($printData);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<table>";
    echo "<tr><th>First Engine</th><td>" . $row["FirstEngine"]. "</td></tr>"
    ."<tr><th>SecondEngine</th><td>" . $row["SecondEngine"]. "</td></tr>"
    ."<tr><th>ThirdEngine</th><td>" . $row["ThirdEngine"]. "</td></tr>"
    ."<tr><th>FourthEngine</th><td>" . $row["FourthEngine"]. "</td></tr>"
    ."<tr><th>FifthEngine:</th><td>" . $row["FifthEngine"]. "</td></tr>"
    ."<tr><th>SixthEngine</th><td>" . $row["SixthEngine"]. "</td></tr>" ."<br>"
    ."<tr><th>State</th><td>" . $row["OnEngine"]. "</td></tr>" ."<br>";
    echo "</table>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>

</BODY>
</html>