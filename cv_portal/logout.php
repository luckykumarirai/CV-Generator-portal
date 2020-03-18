<?php
session_start();
unset($_SESSION['un']);
?>
<script>
alert("logout successfully");
</script>
<?php
header('Refresh: 1; URL = sigin.php');
?>
