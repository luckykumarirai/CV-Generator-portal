<?php
session_start();
if($_SESSION['un'])
{
include("header.php");
?>
<?php
include('dbcon.php');
$un=$_SESSION['un'];
$data1="SELECT * FROM signup,pers_info,education,work_exp,project,skills WHERE signup.username='$un' AND signup.username=pers_info.username AND signup.username=work_exp.username AND signup.username=education.username AND signup.username=project.username AND signup.username=skills.username";
foreach($dbcon->query($data1) as $row)
{
?>
<body>
<center>
  <h3>If you want to upadte yout details change  details given below!!..</h3>
<form method="post" action="update.php" style="margin-top:20px;">
<table border="1" bgcolor="powderblue" style="width:60%;">
<tr><th colspan="3">Personal information</th></tr >
<tr><td align="center">Linkedln:-</td><td colspan="2" align="center"><input type="text" name="ll" value="<?php echo $row['linkedln']?>" /></td></tr>
<tr><td align="center">Github:-</td><td colspan="2" align="center"><input type="text" name="gl"  value="<?php echo $row['github']?>"/></td></tr>
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
<tr><td align="center">Enter pincode:</td><td align="center"><input type="text" name="pincode" value="<?php echo $row['pincode']?>" /></td></tr>
<tr><td align="center">Enter district name:</td><td align="center"><input type="text" name="dist" value="<?php echo $row['district']?>"/></td></tr>
<tr><td align="center">Enter state name:</td><td align="center"><input type="text" name="state"  value="<?php echo $row['state']?>" /></td></tr>
</table>
<table border="1" bgcolor="powderblue" style="width:60%;">
<tr><th colspan="3" align="center">Education details</th></tr >
<tr><td rowspan="5" align="center">College information</td></tr>
<tr><td align="center">Enter college name:-</td><td align="center"><input type="text" name="cname" value="<?php echo $row['cname']?>" /></td></tr>
<tr><td align="center">Enter degree name:-</td><td align="center"><input type="text" name="cdegree"value="<?php echo $row['cdegree']?>" /></td></tr>
<tr><td align="center">Enter branch name:-</td><td align="center"><input type="text" name="cbranch"  value="<?php echo $row['branch']?>" /></td></tr>
<tr><td align="center">Enter marks:-</td><td align="center"><input type="number" name="cmarks" value="<?php echo $row['cmarks']?>" /></td></tr>
<tr><td rowspan="4" align="center">12'th' details</td></tr>
<tr><td align="center">Enter school name:-</td><td align="center"><input type="text" name="sname" value="<?php echo $row['sname1']?>" /></td></tr>
<tr><td align="center">Enter board name:-</td><td align="center"><input type="text" name="sboard"  value="<?php echo $row['board_name1']?>" /></td></tr>
<tr><td align="center">Enter marks:-</td><td align="center"><input type="number" name="smarks"  value="<?php echo $row['marks1']?>"/></td></tr>
<tr><td rowspan="4" align="center">10'th details</td></tr>
<tr><td align="center">Enter school name:-</td><td align="center"><input type="text" name="jname" value="<?php echo $row['sname2']?>" /></td></tr>
<tr><td align="center">Enter board name:-</td><td align="center"><input type="text" name="jboard" value="<?php echo $row['board_name2']?>" /></td></tr>
<tr><td align="center">Enter marks:-</td><td align="center"><input type="number" name="jmarks"  value="<?php echo $row['marks2']?>" /></td></tr>
</table>
<table border="1" bgcolor="powderblue" style="width:60%;">
<tr><th colspan="3" align="center">Work Experiance and Training</th></tr >
<tr><td rowspan="6" align="center">WE1</td></tr>
<tr><td align="center">Work  title:-</td><td align="center"><input type="text" name="w_t1"  value="<?php echo $row['w_title1']?>" /></td></tr>
<tr><td align="center">Name company/organistion:-</td><td align="center"><input type="text" name="w_n1" value="<?php echo $row['w_name1']?>" /></td></tr>
<tr><td align="center">Start date:-</td><td align="center"><input type="date" name="s_date1" value="<?php echo $row['s_date1']?>" /></td></tr>
<tr><td align="center">End date:-</td><td align="center"><input type="date" name="l_date1" value="<?php echo $row['l_date1']?>" /></td></tr>
<tr><td align="center">About work:-</td><td align="center"><input type="text" name="w_about1" value="<?php echo $row['w_about1']?>"/></td></tr>
<tr><td rowspan="6" align="center">WE1</td></tr>
<tr><td align="center">Work  title:-</td><td align="center"><input type="text" name="w_t2" value="<?php echo $row['w_title2']?>" /></td></tr>
<tr><td align="center">Name company/organistion:-</td><td align="center"><input type="text" name="w_n2"  value="<?php echo $row['w_name2']?>" /></td></tr>
<tr><td align="center">Start date:-</td><td align="center"><input type="date" name="s_date2" value="<?php echo $row['s_date2']?>" /></td></tr>
<tr><td align="center">End date:-</td><td align="center"><input type="date" name="l_date2" value="<?php echo $row['l_date2']?>" /></td></tr>
<tr><td align="center">About work:-</td><td align="center"><input type="text" name="w_about2" value="<?php echo $row['w_about2']?>"/></td></tr>
</table>
<table border="1" bgcolor="powderblue" style="width:60%;">
<tr><th colspan="3" align="center">Projects</th></tr >
<tr><td rowspan="5" align="center">P1</td></tr>
<tr><td align="center">Project  title:-</td><td align="center"><input type="text" name="p_n1" value="<?php echo $row['p_name1']?>" /></td></tr>
<tr><td align="center">Start date:-</td><td align="center"><input type="date" name="s_datep1" value="<?php echo $row['s_datep1']?>" /></td></tr>
<tr><td align="center">End date:-</td><td align="center"><input type="date" name="l_datep1" value="<?php echo $row['l_datep1']?>" /></td></tr>
<tr><td align="center">About project:-</td><td align="center"><input type="text" name="p_about1" value="<?php echo $row['p_about1']?>"/></td></tr>
<tr><td rowspan="5" align="center">P2</td></tr>
<tr><td align="center">Project  title:-</td><td align="center"><input type="text" name="p_n2"  value="<?php echo $row['p_name2']?>" /></td></tr>
<tr><td align="center">Start date:-</td><td align="center"><input type="date" name="s_datep2" value="<?php echo $row['$s_datep2']?>" /></td></tr>
<tr><td align="center">End date:-</td><td align="center"><input type="date" name="l_datep2" value="<?php echo $row['l_datep2']?>" /></td></tr>
<tr><td align="center">About project:-</td><td align="center"><input type="text" name="p_about2" value="<?php echo $row['p_about2']?>"/></td></tr>
</table>
<table border="1" bgcolor="powderblue" style="width:60%;">
<tr><th colspan="3" align="center">Ability</th></tr >
<tr><td align="center">skill name</td><td><input style="width:100%;" type="text" name="skills"  value="<?php echo $row['skill']?>"/></td></tr>
<tr><td colspan="4" align="center"><input type="submit" name="submit" value="save & next"/></td></tr>
</table>
</form>
</center>
</body>
</html>
<?php
}
if(isset($_POST['submit']))
{
  $linkedln=$_POST['ll'];
  $github=$_POST['gl'];
  $bg=$_POST['bg'];
  $pincode=$_POST['pincode'];
  $district=$_POST['dist'];
  $state=$_POST['state'];
  $un=$_SESSION['un'];
  $q1=$dbcon->query("UPDATE pers_info SET linkedln='$linkedln',github='$github',bg='$bg',pincode='$pincode',district='$district',state='$state'  WHERE username='$un'");
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
  $q2=$dbcon->query("UPDATE  education SET  cname='$cname',cdegree='$cdegree',cmarks='$cmarks',branch='$cbranch',sname1='$s_name1',board_name1='$s_board1',marks1='$s_marks1',sname2='$s_name2',board_name2='$s_board2',marks2='$s_marks2' WHERE username='$un' ");
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
  $q3=$dbcon->query("UPDATE  work_exp SET w_title1='$w_t1',w_name1='$w_n1',s_date1='$s_date1',l_date1='$l_date1',w_about1='$about1',w_title2='$w_t2',w_name2='$w_n2',s_date2='$s_date1',l_date2='$l_date2',w_about2='$about2' WHERE username='$un'");
  $p_n1=$_POST['p_n1'];
  $s_datep1=$_POST['s_datep1'];
  $l_datep1=$_POST['l_datep1'];
  $aboutp1=$_POST['p_about1'];
  $p_n2=$_POST['p_n2'];
  $s_datep2=$_POST['s_datep2'];
  $l_datep2=$_POST['l_datep2'];
  $aboutp2=$_POST['p_about2'];
  $q4=$dbcon->query("UPDATE project SET p_name1='$p_n1',s_datep1='$s_datep1',l_datep1='$l_datep1',p_about1='$aboutp1',p_name2='$p_n2',s_datep2='$s_datep1',l_datep2='$l_datep2',p_about='$aboutp2' WHERE username='$un'");
  $skill=$_POST['skills'];
  $q5=$dbcon->query("UPDATE skills SET skill='$skill' WHERE username='$un'");
  if($q1==true && $q2==true && q3==true && q4==true && q5==true)
  {
    ?>
    <script>
    window.alert("data update successfully!!");
    window.open('resume.php','_self');
    </script>
   <?php
  }
  else
  {
    ?>
    <script>
    window.alert("Opps something wrong!!");
    window.open('update.php','_self');
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
