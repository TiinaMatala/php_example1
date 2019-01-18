<?php include "menu.php"; ?>
<h1>Forms</h1>
<h2>POST-method</h2>
<form class="" action="test1.php" method="post">
  <label for="fn">Firstname</label><br>
  <input type="text" id="fn" name="fname" value=""><br>
  <label for="ln">Lastname</label><br>
  <input type="text" id="ln" name="lname" value=""><br>
  <input type="submit" name="" value="Send">
</form>

<h2>GET-method</h2>
<form class="" action="test2.php" method="get">
  <label for="fn">Firstname</label><br>
  <input type="text" id="fn" name="fname" value=""><br>
  <label for="ln">Lastname</label><br>
  <input type="text" id="ln" name="lname" value=""><br>
  <input type="submit" name="" value="Send">
</form>

<?php include "footer.php"; ?>
