<?php 
//session_start();
// header("content-type:text/html; charset=utf-8");
// $link = @mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

// mysqli_select_db($link, "user");
// $commandText = "select * from user_account";
// $result = mysqli_query($link, $commandText);


// while ($row = mysqli_fetch_assoc($result))
// {
//   echo "ID：{$row['account']}<br>";
//   echo "Name：{$row['pass']}<br>";
//   echo "<HR>";
// }
include ("index.php");


echo $_SESSION["account"];
?>