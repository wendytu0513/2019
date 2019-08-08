<body>
    <h1>登入頁面</h1>
    <form action="" method="post">
        <div>帳號：<input type="text" name="account" /></div>
        <div>密碼：<input type="text" name="pass" /></div>
        <input type="submit" name="btnOK" value="登入" />
    </form>
</body>



<?php 
session_start();
$db = new PDO('mysql:host=localhost;dbname=user;charset=utf8', 'root', '');
$account = $_POST["account"];
$pass = $_POST["pass"];
$statement = $db->query("select pass from user_account WHERE account = '{$account}'");


if ( !empty($account) && !empty($pass) && $pass = $statement) {
    //$_SESSION["account"] = $account;
    echo "登入";
    echo `$pass`;
    //header("location:lab02.php");
    while ($row = $statement->fetch())
{
  echo "ID：{$row['pass']}<br>";
}
} else {
    echo "登入失敗";
} 

?>