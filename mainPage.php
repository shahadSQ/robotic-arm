<!DOCTYPE html>
<html>

<head>
  <title>control page</title>
  <link rel="stylesheet" type="text/css" href="arm.css" />
</head>
 
<body id="image">
  <h2 class="header">Welcome to the robot </br> arm control page</h2>
  <form action="" method="post">

    <table>
      <tbody>
        <tr class="data">
          <td>First engine:</td>
          <td><input type="range" min="0" max="180" value="0" class="myslider1" id="sliderRange1" name="save1"
              oninput="document.getElementById('demo1').innerHTML = this.value"></td>
          <td>
            <p>&ensp; Value: <span id="demo1"></span></p>
          </td>
        
          <td>&ensp;&ensp;&ensp;&ensp;Fourth engine:</td>
          <td><input type="range" min="0" max="180" value="0" class="myslider4" id="sliderRange4" name="save4"
              oninput="document.getElementById('demo4').innerHTML = this.value"></td>
          <td>
            <p>&ensp; Value: <span id="demo4"></span></p>
          </td>
        </tr>

        <tr class="data">
          <td>Second engine:</td>
          <td><input type="range" min="0" max="180" value="0" class="myslider2" id="sliderRange2" name="save2"
              oninput="document.getElementById('demo2').innerHTML = this.value"></td>
          <td>
            <p>&ensp; Value: <span id="demo2"></span></p>
          </td>

          <td>&ensp;&ensp;&ensp;&ensp;Fifth engine:</td>
          <td><input type="range" min="0" max="180" value="0" class="myslider5" id="sliderRange5" name="save5"
              oninput="document.getElementById('demo5').innerHTML = this.value"></td>
          <td>
            <p>&ensp; Value: <span id="demo5"></span></p>
          </td>
        
        </tr>

        <tr class="data">
          <td>Third engine:</td>
          <td><input type="range" min="0" max="180" value="0" class="myslider3" id="sliderRange3" name="save3"
              oninput="document.getElementById('demo3').innerHTML = this.value"></td>
          <td>
            <p>&ensp; Value: <span id="demo3"></span></p>
          </td>

          <td>&ensp;&ensp;&ensp;&ensp;Sixth engine:</td>
          <td><input type="range" min="0" max="180" value="0" class="myslider6" id="sliderRange6" name="save6"
              oninput="document.getElementById('demo6').innerHTML = this.value"></td>
          <td>
            <p>&ensp; Value: <span id="demo6"></span></p>
          </td>
        </tr>

      </tbody>
    </table>
    <input type="submit" value="save" name="button1" class="buttonn1" >
  </form>
  
<?php     
if(isset($_POST['button1'])) {
  $conn =new mysqli("localhost", "root", "", "degrees");
  
  $save1 = $_POST['save1'];
  $save2 = $_POST['save2'];
  $save3 = $_POST['save3'];
  $save4 = $_POST['save4'];
  $save5 = $_POST['save5'];
  $save6 = $_POST['save6'];
  
  $insert ="UPDATE tbl_degrees SET FirstEngine=$save1,SecondEngine=$save2,
  ThirdEngine=$save3,FourthEngine=$save4,FifthEngine=$save5,
  SixthEngine=$save6,OnEngine=0,OffEngine=1";
   
  if ($conn->query($insert) === TRUE) {}
     else {
    echo "Error: " . $insert . "<br>" . $conn->error;
  }
    $conn->close();
}
?>
  

  <form action="dataPage.php">
<input  class="buttonn2" type="submit" value="running" />
</form>


</body>
</html>
