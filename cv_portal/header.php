<?php
session_start();
?>
<html>
<head>
<link href="css/front.css" rel="stylesheet">
</head>
<body>
<div class="head">
        <div class="logo">
                <img src="image/resume.png" style="height:70px;width:80px;float:left;"/>
                <h1 align="center" style="margin-top:20px;">WELCOME TO CV BUILDER</h1>
        </div>

<div class="link">
        <?php
        if(isset($_SESSION['un']))
        {
        ?>
                <p style="float:right;">
                  <?php echo $_SESSION['un'];?>
                </p>
                <a href="logout.php" style="float:right;"><button >LogOut</button></a>
                <a href="resume.php" style="float:right;"><button >choose resume</button></button></a>
                <a href="update.php" style="float:right;"><button >Update resume</button></button></a>



       <?php
       }
       else
       {
       ?>
                 <div style="float:right;">
                        <a href="sigin.php" ><button >Sigin</button></a>
                        <a href="signup.php"><button >Signup</button></a>
               </div>

      <?php
        }
       ?>
       <div style="float:left;">
                <a href="index.php"><button>Home</button></a></div>
                <a href="f1.php" ><button>Create resume</button></a>
        </div>
</div>
</div>
</body>
</html>
