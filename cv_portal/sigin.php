<?php
if($_SESSION['un'])
{
  ?>
  <script>
    window.open("f1.php",'_self');
  </script>
  <?php
}
else {
include('header.php');
?>
<html>
<body>
<center>
<form method="post" action="sigin.php">
<table border="2"  align="center" bgcolor="orange"style="margin-top:70px;" >
<tr><th colspan="2">Welcome again to this site</th></tr>
<tr><td>Enter username:</td><td><input type="text" name="username"/></td></tr>
<tr><td>Enter Password:</td><td><input type="password" name="password"/></td></tr>
<tr><td colspan="2" align="center" ><input type="submit" name="submit"/></td></tr>
</table>
</from>
</center>
</body>
</html>
<?php
  include('dbcon.php');
  if(isset($_POST['submit']))
  {
    $un=$_POST['username'];
    $pw=$_POST['password'];
    $result=$dbcon->prepare("SELECT count(*) FROM signup WHERE username='$un' AND password='$pw'");
    $result->execute();
    $row=$result->fetchColumn();
    if($row<1)
    {
      ?>
      <script>
        alert('username and password does not match !! Plz try again');
        window.open('sigin.php','_self');
      </script>
      <?php
    }
   else
   {
              $x=0;
              $data1="SELECT * FROM signup WHERE username='$un'";
              foreach($dbcon->query($data1) as $row)
              {
                        $x=$row['username'];
              }
              session_start();
              $_SESSION['un']=$x;
              ?>
              <script>
              alert("login success!!");
              window.open('f1.php','_self');
              </script>
              <?php
   }
  }
}
 ?>
