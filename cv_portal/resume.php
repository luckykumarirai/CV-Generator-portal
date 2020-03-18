<?php
session_start();
if($_SESSION['un'])
{
include("header.php");
?>
<h2 align="center"  color="red">These are the format avialable for your resume</h2>
<center>
<div class="row">
  <div class="column">
    <img src="image/rf1.png"  style="width:70%"><br>
    <a href="rf2.php"><button style="background-color:black;width:70%;color:white;">create resume</button></a>
  </div>
  <div class="column">
    <img src="image/rf2.png"  style="width:70%">
    <br><a href="rf1.php"><button style="background-color:black;width:70%;color:white;">create resume</button></a>
  </div>
  <div class="column">
    <img src="image/rf6.jpg"  style="width:70%">
    <a href="rf3.php"><button style="background-color:black;width:70%;color:white;">create resume</button></a>
   </div>
</div>
<div class="row">
  <div class="column">
    <img src="image/rf4.jpg"  style="width:70%">
    <a href="rf2.php"><button style="background-color:black;width:70%;color:white;">create resume</button></a>
    </div>
  <div class="column">
    <img src="image/rf5.png"  style="width:70%">
    <a href="rf2.php"><button style="background-color:black;width:70%;color:white;">create resume</button></a>
  </div>
  <div class="column">
    <img src="image/rf3.jpg"  style="width:70%">
    <a href="rf2.php"><button style="background-color:black;width:70%;color:white;">create resume</button></a>
      </div>
</div>
<div class="row">
  <div class="column">
    <img src="image/rf7.jpg"  style="width:70%"><br />
    <a href="rf4.php"><button style="background-color:black;width:70%;color:white;">create resume</button></a>
    </div>
  <div class="column">
    <img src="image/rf8.jpg"  style="width:70%">
    <a href="rf1.php"><button style="background-color:black;width:70%;color:white;">create resume</button></a>
  </div>
</div>
</center>
</body>
</html>
<?php
}
else
{
  ?>
  <script>
    window.open("sigin.php",'_self');
  </script>
  <?php
}
?>
