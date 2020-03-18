<?php
session_start();
if($_SESSION['un'])
{
?>
<head>
  <link rel="stylesheet" href="css/r4format.css">
</head>
<script>
function myFunction() {
  window.print();
}
</script>
</head>
<body >
<center>
  <button onclick="myFunction()">Print this page</button>

<div class="main">
<div class="leftdiv">
  <div style="height:150px;background-color:blue">
    <h2 >Personal info</h2>
  </div>
  <div style="height:75px;">
    <h2 >Skills</h2>
  </div>
  <div style="height:200px;">
    <h2 >Work experience</h2 >
  </div>
  <div style="height:200px;">
    <h2 >Ptrojects</h2 >
  </div>
  <div style="height:100px;">
    <h2 >Education</h2>
  </div>
</div>

<div class="rightdiv">

      <?php
      include('dbcon.php');
    $un=$_SESSION['un'];
    $data1="SELECT * FROM signup,pers_info,education,work_exp,project,skills WHERE signup.username='$un' AND signup.username=pers_info.username AND signup.username=work_exp.username AND signup.username=education.username AND signup.username=project.username AND signup.username=skills.username";
    foreach($dbcon->query($data1) as $row)
    {
              ?>
              <div  style="height:150px;">
              <h2 align="left" style="margin-left: 5px;"><?php echo $row['fname']." ".$row['lname']."<br />"; ?> </h2><br />
              <p align="left" style="margin-left: 5px;"><?php echo $row['district'].",".$row['state'].','.$row['pincode']."<br />"; ?> </p>
              <p align="left" style="margin-left: 5px;;"><?php echo $row['contact']."<br />"; ?> </p>
              <p align="left" style="margin-left: 5px;"><?php echo $row['email']."<br />"; ?> </p>
              <p align="left" style="margin-left: 5px;"><?php echo $row['linkedln']."<br />"; ?> </p>
              <p align="left" style="margin-left: 5px;"><?php echo $row['github']."<br />"; ?> </p>

            </div>
              <div style="height:75px;"><hr/>
                <p align="left" style="margin-left: 5px;"><?php echo $row['skill']."<br />"; ?> </p><br />


              </div>
              <div style="height:200px;"><hr/>
                <p align="left" style="margin-left: 5px;"><?php echo "Work title:-". $row['w_title1']."<br />"."Name of organisation/company:-".$row['w_name1']."<br />"."Period:-"."  "."start date:-".$row['s_date1']."  "."end date:-".$row['l_date1']."<br />"."Details:-".$row['w_about1']; ?> </p><br /><br />
                <p align="left" style="margin-left: 5px;"><?php echo "Work title:-". $row['w_title2']."<br />"."Name of organisation/company:-".$row['w_name2']."<br />"."Period:-"."  "."start date:-".$row['s_date2']."  "."end date:-".$row['l_date2']."<br />"."Details:-".$row['w_about2']; ?> </p><br />
              </div>
              <div style="height:200px;"><hr/>
                <p align="left" style="margin-left: 5px;"><?php echo "Name of project:-".$row['p_name1']."<br />"."Period:-"."  "."start date:-".$row['s_datep1']."  "."end date:-".$row['l_datep1']."<br />"."Details:-".$row['p_about1']; ?> </p><br /><br />
                <p align="left" style="margin-left: 5px;"><?php echo "Name of project:-".$row['p_name2']."<br />"."Period:-"."  "."start date:-".$row['s_datep2']."  "."end date:-".$row['l_datep2']."<br />"."Details:-".$row['p_about2']; ?> </p><br />
              </div>
              <div style="height:100px;"><hr/>

                <p align="left" style="margin-left: 5px;"><?php echo "College name:-".$row['cname']."<br />"."Degree:-".$row['cdegree']."<br />"."Branch name:-".$row['branch']."<br />"."CGPA:".$row['cmarks']; ?> </p><br />
                <p align="left" style="margin-left: 5px;"><?php echo  " Class12'th detals" ."<br />"."School name:-".$row['sname1']."<br />"."marks:-".$row['marks1']; ?> </p><br />
                <p align="left" style="margin-left: 5px;"><?php echo " Class10'th detals" ."<br />". "School name:-".$row['sname1']."<br />"."marks:-".$row['marks2']; ?> </p><br />

              </div>
              <?php
    }
    ?>
</div>
</div>
</center>
<?php
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
