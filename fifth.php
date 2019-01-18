<?php include "menu.php"; ?>
<form class="" action="fifth.php" method="post">
  <label for="">Write two numbers</label><br>
  <input type="number" name="a" value="">
  <input type="number" name="b" value="">
  <input type="submit" name="btn" value="Sum">
</form>
<?php
if(isset($_POST['btn'])) {
$result=$_POST['a'] + $_POST['b'];
echo 'the sum is '.$result;
}
 ?>
<?php include "footer.php"; ?>
