<h1>登入頁面</h1>
<?php
$acc= "abc";
$pw="123";
// if(!empty($_GET)){
//     echo "輸入正確"；
// }

?>

<form action="login-re.php" method="get">
    <div class="acc">
        <label for="acc">帳號：</label>
        <input type="text" name="nameacc" id="idacc">
    </div>
    
    <div class="pw">
        <label for="pw">密碼：</label>
        <input type="password" name="namepw" id="pw">
    </div>
    
    <div>
        <input type="submit" value="login">
    </div>
</form>