<?php
session_start();
if(isset($_SESSION['un']))
{
?>
<head>
<link rel="stylesheet" href="css/r3format.css">
<script>
function myFunction() {
  window.print();
}
</script>
</head>
<body>
<center>
  <button onclick="myFunction()">Print this page</button>
  <div class="main" style="background-color:lightgray;">
    <?php
    include('dbcon.php');
  $un=$_SESSION['un'];
  $data1="SELECT * FROM signup,pers_info,education,work_exp,project,skills WHERE signup.username='$un' AND signup.username=pers_info.username AND signup.username=work_exp.username AND signup.username=education.username AND signup.username=project.username AND signup.username=skills.username";
  foreach($dbcon->query($data1) as $row)
  {
            ?>
            <div style="height:150px;background-color:gray;">
              <div style="width:20%;height:150px;float:left;">
                <img src="image/l.jpg" alt="image" style="width:90%;"/>
              </div>
            <div style="width:79%;float:right;height:150px;">
            <h2 align="left" style="margin-left: 20px;"><?php echo $row['fname']." ".$row['lname']."<br />"; ?> </h2><br />
            <p align="left" style="margin-left: 20px;"><?php echo $row['district'].",".$row['state'].','.$row['pincode']."<br />"; ?> </p>
            <p align="left" style="margin-left: 20px;;"><?php echo $row['contact']."<br />"; ?> </p>
            <p align="left" style="margin-left: 20px;"><?php echo $row['email']."<br />"; ?> </p>
            <p align="left" style="margin-left: 20px;"><?php echo $row['linkedln']."<br />"; ?> </p>
            <p align="left" style="margin-left: 20px;"><?php echo $row['github']."<br />"; ?> </p>
        </div>
    </div><hr/>
    <div style="height:250px;" >
  <h2 style="float:left;color:orange;">EDUCATION</h2><br  /></br>
  <p align="left" style="margin-left: 150px;"><?php echo "College name:-".$row['cname']."<br />"."Degree:-".$row['cdegree']."<br />"."Branch name:-".$row['branch']."<br />"."CGPA:".$row['cmarks']; ?> </p><br />
  <p align="left" style="margin-left: 150px;"><?php echo  " Class12'th detals" ."<br />"."School name:-".$row['sname1']."<br />"."marks:-".$row['marks1']; ?> </p><br />
  <p align="left" style="margin-left: 150px;"><?php echo " Class10'th detals" ."<br />". "School name:-".$row['sname1']."<br />"."marks:-".$row['marks2']; ?> </p>

    </div><hr />
    <div style="height:80px;">
      <h2 style="float:left;color:orange;">EXPERTISE</h2><br  /><br />
      <p align="left" style="margin-left: 150px;"><?php echo $row['skill']."<br />"; ?> </p>
    </div><hr />
    <div style="height:220px;">
      <h2 style="float:left;color:orange;">WORK EXPERIENCE</h2><br /><br />
      <p align="left" style="margin-left: 150px;"><?php echo "Work title:-". $row['w_title1']."<br />"."Name of organisation/company:-".$row['w_name1']."<br />"."Period:-"."  "."start date:-".$row['s_date1']."  "."end date:-".$row['l_date1']."<br />"."Details:-".$row['w_about1']; ?> </p><br />
      <p align="left" style="margin-left: 150px;"><?php echo "Work title:-". $row['w_title2']."<br />"."Name of organisation/company:-".$row['w_name2']."<br />"."Period:-"."  "."start date:-".$row['s_date2']."  "."end date:-".$row['l_date2']."<br />"."Details:-".$row['w_about2']; ?> </p>
    </div><hr />
    <div>
      <h2 style="float:left;color:orange;">PROJECTS</h2><br /><br />
      <p align="left" style="margin-left: 150px;"><?php echo "Name of project:-".$row['p_name1']."<br />"."Period:-"."  "."start date:-".$row['s_datep1']."  "."end date:-".$row['l_datep1']."<br />"."Details:-".$row['p_about1']; ?> </p>
      <p align="left" style="margin-left:150px;"><?php echo "Name of project:-".$row['p_name2']."<br />"."Period:-"."  "."start date:-".$row['s_datep2']."  "."end date:-".$row['l_datep2']."<br />"."Details:-".$row['p_about2']; ?> </p>
    </div>
  </div>
  </center>
</body>
</html>
<?php
}
}
else
{
  ?>
  <script>
    window.open("sigin.php");
  </script>

  <?php
}
?>
