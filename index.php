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
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());
mysqli_select_db($link, "user");

@$account = $_POST["account"];
@$pass = $_POST["pass"];
$sql = "select pass from user_account WHERE account = '{$account}'";
$arr = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($arr);

if(empty($account) || empty($pass)){
    echo "請登入";
}elseif(!empty($account) && !empty($pass) && $row['pass'] == $_POST["pass"]){
    header("location:lab02.php");
}else {
    echo "帳號密碼錯誤";
}

?>