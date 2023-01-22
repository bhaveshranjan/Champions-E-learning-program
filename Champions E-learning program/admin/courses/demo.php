<?php
if (isset($_POST['name'])) {
  print_name($_POST['name']);
}
else {
  print_form();
}

function print_name($name) {
  echo 'Your name is: '. htmlentities($name);
}

function print_form() {
  echo '
    <form name="form1" method="post" action="">
    <p><label><input type="text" name="name" id="textfield"></label></p>
    <p><label><input type="submit" name="button" id="button" value="Submit"></label></p>
    </form>
  ';
}
?>