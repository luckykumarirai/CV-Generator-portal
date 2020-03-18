<?php
include('header.php');
?>
<body>
<center>
<form method="post" action="signup.php">
<table border="2"  align="center" bgcolor="orange" style="margin-top:70px;">
<tr><th colspan="2">Welcome again to this site</th></tr>
<tr><td align="center">Enter userid:</td><td><input type="text" name="username"/></td></tr>
<tr><td align="center">Enter Password:</td><td><input type="password" name="password"/></td></tr>
<tr><td align="center">First name:</td><td><input type="text" name="fname"/></td></tr>
<tr><td align="center">Last name:</td><td><input type="text" name="lname"/></td></tr>
<tr><td align="center">Enter email:</td><td><input type="email" name="email"/></td></tr>
<tr><td align="center">contact:</td><td><input type="number" name="contact"/></td></tr>
<tr><td align="center"> Gender:</td><td><input type="radio" name="gender" value="male"/>male<input type="radio" name="gender" value="female"/>female</td></tr>
<tr><td colspan="2" align="center" ><input type="submit" name="submit"/></td></tr>
</table>
</center>
</body>
</html>
<?php
include('dbcon.php');
  if(isset($_POST['submit']))
  {
    $un=$_POST['username'];
    $pw=$_POST['password'];
    $fn=$_POST['fname'];
    $ln=$_POST['lname'];
    $email=$_POST['email'];
    $gn=$_POST['gender'];
    $mn=$_POST['contact'];
    $result=$dbcon->prepare("SELECT count(*) FROM signup WHERE username='$un'");
    $result->execute();
    $row=$result->fetchColumn();
    if($row>0)
    {
        ?>
          <script>
          window.alert("username already exists!!");
          window.open('signup.php','_self');
          </script>
         <?php
    }
    else
    {
    $un1=$dbcon->query("INSERT INTO signup(username, password, fname, lname, email, contact,gn)VALUES('$un','$pw','$fn','$ln','$email','$mn','$gn')");
        if($un1==true)
        {
          ?>
          <script>
          window.alert("data inserted successfully!!");
          window.open('sigin.php','_self');
          </script>
         <?php
        }
        else
        {
          ?>
          <script>
          window.alert("Opps something wrong!!");
          window.open('signup.php','_self');
          </script>
         <?php
        }
    }
}
?>
