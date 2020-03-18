<?php
session_start();
if($_SESSION['un'])
{
include("header.php");
?>

<body >
<center>

  <h3>If you are already completed the form no nedd to fill again</h3>
<form method="post" action="f1.php" style="margin-top:20px;">
<table border="1" bgcolor="powderblue" style="width:60%;">
<tr><th colspan="3">Personal information</th></tr >
<tr><td align="center">Linkedln:-</td><td colspan="2" align="center"><input type="text" name="ll" /></td></tr>
<tr><td align="center">Github:-</td><td colspan="2" align="center"><input type="text" name="gl" /></td></tr>
<tr><td align="center">Blood Group:-</td><td colspan="2" align="center">
<select name="bg">
<option>A+</option>
<option>B+</option>
<option>B-</option>
<option>AB+</option>
<option>AB-</option>
<option>O+</option>
<option>O-</option>
</select></td></tr>
<tr><td rowspan="4" align="center">Address</td></tr>
<tr><td align="center">Enter pincode:</td><td align="center"><input type="text" name="pincode" placeholder="enter your pin code" /></td></tr>
<tr><td align="center">Enter district name:</td><td align="center"><input type="text" name="dist" placeholder="enter your district name" /></td></tr>
<tr><td align="center">Enter state name:</td><td align="center"><input type="text" name="state"  placeholder="enter your state name" /></td></tr>
</table>
<table border="1" bgcolor="powderblue" style="width:60%;">
<tr><th colspan="3" align="center">Education details</th></tr >
<tr><td rowspan="5" align="center">College information</td></tr>
<tr><td align="center">Enter college name:-</td><td align="center"><input type="text" name="cname" placeholder="enter  college name" /></td></tr>
<tr><td align="center">Enter degree name:-</td><td align="center"><input type="text" name="cdegree" placeholder="enter  degree name" /></td></tr>
<tr><td align="center">Enter branch name:-</td><td align="center"><input type="text" name="cbranch"  placeholder="enter branch name" /></td></tr>
<tr><td align="center">Enter marks:-</td><td align="center"><input type="number" name="cmarks"  placeholder="enter CGPA" /></td></tr>
<tr><td rowspan="4" align="center">12'th' details</td></tr>
<tr><td align="center">Enter school name:-</td><td align="center"><input type="text" name="sname" placeholder="enter school name" /></td></tr>
<tr><td align="center">Enter board name:-</td><td align="center"><input type="text" name="sboard"  placeholder="enter board name" /></td></tr>
<tr><td align="center">Enter marks:-</td><td align="center"><input type="number" name="smarks"  placeholder="enter marks" /></td></tr>
<tr><td rowspan="4" align="center">10'th details</td></tr>
<tr><td align="center">Enter school name:-</td><td align="center"><input type="text" name="jname" placeholder="enter  school name" /></td></tr>
<tr><td align="center">Enter board name:-</td><td align="center"><input type="text" name="jboard" placeholder="enter board name" /></td></tr>
<tr><td align="center">Enter marks:-</td><td align="center"><input type="number" name="jmarks"  placeholder="enter marks" /></td></tr>
</table>
<table border="1" bgcolor="powderblue" style="width:60%;">
<tr><th colspan="3" align="center">Work Experiance and Training</th></tr >
<tr><td rowspan="6" align="center">WE1</td></tr>
<tr><td align="center">Work  title:-</td><td align="center"><input type="text" name="w_t1"  placeholder="enter  name" /></td></tr>
<tr><td align="center">Name company/organistion:-</td><td align="center"><input type="text" name="w_n1"  placeholder="enter  company/organisation name" /></td></tr>
<tr><td align="center">Start date:-</td><td align="center"><input type="date" name="s_date1" placeholder="enter  starting  date" /></td></tr>
<tr><td align="center">End date:-</td><td align="center"><input type="date" name="l_date1" placeholder="enter  finishing date" /></td></tr>
<tr><td align="center">About work:-</td><td align="center"><input type="text" name="w_about1" placeholder="descrption"/></td></tr>
<tr><td rowspan="6" align="center">WE1</td></tr>
<tr><td align="center">Work  title:-</td><td align="center"><input type="text" name="w_t2"  placeholder="enter  name" /></td></tr>
<tr><td align="center">Name company/organistion:-</td><td align="center"><input type="text" name="w_n2"  placeholder="enter  company/organisation name" /></td></tr>
<tr><td align="center">Start date:-</td><td align="center"><input type="date" name="s_date2" placeholder="enter  starting  date" /></td></tr>
<tr><td align="center">End date:-</td><td align="center"><input type="date" name="l_date2" placeholder="enter  finishing date" /></td></tr>
<tr><td align="center">About work:-</td><td align="center"><input type="text" name="w_about2" placeholder="descrption"/></td></tr>
</table>
<table border="1" bgcolor="powderblue" style="width:60%;">
<tr><th colspan="3" align="center">Projects</th></tr >
<tr><td rowspan="5" align="center">P1</td></tr>
<tr><td align="center">Project  title:-</td><td align="center"><input type="text" name="p_n1"  placeholder="enter  project title" /></td></tr>
<tr><td align="center">Start date:-</td><td align="center"><input type="date" name="s_datep1" placeholder="enter  starting  date" /></td></tr>
<tr><td align="center">End date:-</td><td align="center"><input type="date" name="l_datep1" placeholder="enter  finishing date" /></td></tr>
<tr><td align="center">About project:-</td><td align="center"><input type="text" name="p_about1" placeholder="descrption"/></td></tr>
<tr><td rowspan="5" align="center">P2</td></tr>
<tr><td align="center">Project  title:-</td><td align="center"><input type="text" name="p_n2"  placeholder="enter  project title" /></td></tr>
<tr><td align="center">Start date:-</td><td align="center"><input type="date" name="s_datep2" placeholder="enter  starting  date" /></td></tr>
<tr><td align="center">End date:-</td><td align="center"><input type="date" name="l_datep2" placeholder="enter  finishing date" /></td></tr>
<tr><td align="center">About project:-</td><td align="center"><input type="text" name="p_about2" placeholder="descrption"/></td></tr>
</table>
<table border="1" bgcolor="powderblue" style="width:60%;">
<tr><th colspan="3" align="center">Ability</th></tr >
<tr><td align="center">skill name</td><td><input style="width:100%;" type="text" name="skills" /></td></tr>
<tr><td colspan="4" align="center"><input type="submit" name="submit" value="save & next"/></td></tr>
</table>
</form>
</center>
</body>
</html>
<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
  $linkedln=$_POST['ll'];
  $github=$_POST['gl'];
  $bg=$_POST['bg'];
  $pincode=$_POST['pincode'];
  $district=$_POST['dist'];
  $state=$_POST['state'];
  $un=$_SESSION['un'];
  $q1=$dbcon->query("INSERT INTO pers_info(linkedln,github,bg,pincode,district,state,username)VALUES('$linkedln','$github','$bg','$pincode','$district','$state','$un')");
  $cname=$_POST['cname'];
  $cdegree=$_POST['cdegree'];
  $cbranch=$_POST['cbranch'];
  $cmarks=$_POST['cmarks'];
  $s_name1=$_POST['sname'];
  $s_board1=$_POST['sboard'];
  $s_marks1=$_POST['smarks'];
  $s_name2=$_POST['jname'];
  $s_board2=$_POST['jboard'];
  $s_marks2=$_POST['jmarks'];
  $q2=$dbcon->query("INSERT INTO education(cname,cdegree,cmarks,branch,sname1,board_name1,marks1,sname2,board_name2,marks2,username)VALUES('$cname','$cdegree','$cmarks','$cbranch','$s_name1','$s_board1','$s_marks1','$s_name2','$s_board2','$s_marks2','$un')");
  $w_t1=$_POST['w_t1'];
  $w_n1=$_POST['w_n1'];
  $s_date1=$_POST['s_date1'];
  $l_date1=$_POST['l_date1'];
  $about1=$_POST['w_about1'];
  $w_t2=$_POST['w_t2'];
  $w_n2=$_POST['w_n2'];
  $s_date2=$_POST['s_date2'];
  $l_date2=$_POST['l_date2'];
  $about2=$_POST['w_about2'];
  $q3=$dbcon->query("INSERT INTO work_exp(w_title1,w_name1,s_date1,l_date1,w_about1,w_title2,w_name2,s_date2,l_date2,w_about2,username) VALUES ('$w_t1','$w_n1','$s_date1','$l_date1','$about1','$w_t2','$w_n2','$s_date1','$l_date2','$about2','$un')");
  $p_n1=$_POST['p_n1'];
  $s_datep1=$_POST['s_datep1'];
  $l_datep1=$_POST['l_datep1'];
  $aboutp1=$_POST['p_about1'];
  $p_n2=$_POST['p_n2'];
  $s_datep2=$_POST['s_datep2'];
  $l_datep2=$_POST['l_datep2'];
  $aboutp2=$_POST['p_about2'];
  $q4=$dbcon->query("INSERT INTO project(p_name1,s_datep1,l_datep1,p_about1,p_name2,s_datep2,l_datep2,p_about2,username) VALUES ('$p_n1','$s_datep1','$l_datep1','$aboutp1','$p_n2','$s_datep1','$l_datep2','$aboutp2','$un')");
  $skill=$_POST['skills'];
  $q5=$dbcon->query("INSERT INTO skills(skill,username) VALUES('$skill','$un')");
  if($q1==true && $q2==true && q3==true && q4==true && q5==true)
  {
    ?>
    <script>
    window.alert("data inserted successfully!!");
    window.open('resume.php','_self');
    </script>
   <?php
  }
  else
  {
    ?>
    <script>
    window.alert("Opps something wrong!!");
    window.open('f1.php','_self');
    </script>
   <?php
  }
}
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
