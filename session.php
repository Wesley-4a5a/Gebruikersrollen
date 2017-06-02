<?php

include '../phpbasics/databaseClass.php';

if(!ISSET($_SESSION['login'])){
  $_SESSION['login'] = false;
}
if(!ISSET($_SESSION['role'])){
  $_SESSION['role'] = 'Gast';
}
if(ISSET($_POST['unset'])){
session_unset();
  $_SESSION['login'] = false;
  $_SESSION['role'] = 'Gast';
}

if(ISSET($_POST['submit']))
  {
    $sql = "SELECT * FROM `login`";
    $hond = new dbHandler('localhost', 'gebruikersrollen', 'root', '');
    $res = $hond->readData($sql);
    foreach($res as $row){
      if($_SESSION['login'] == false && $row['username'] == $_POST['username'] && $row['password'] == $_POST['password']){
        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['username'];
?>
        <script>
          document.getElementById('loginform').innerHTML = 'Welkom '+ <?php $_SESSION['username'] ?>;

        </script>
<?php
        $_SESSION['role'] = $row['role'];
      }
    }
  }

  if($_SESSION['login'] == false){
    echo "<form action='' method='POST' id='loginform'><input type='text' name='username' placeholder='Username'/><input type='text' name='password' placeholder='Password'/><input type='submit' name='submit' value='sybnit' /></form>";
  }
  else{
    echo '<form action="" method="POST" id="loginform"><input type="submit" name="unset" value="Log out" /></form>';
  }


?>
