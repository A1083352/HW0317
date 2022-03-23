<html>
    <head>
        <title>資訊確認</title>
    </head>
    <body>
    <?php
    echo"<b>資訊確認</b>";
    $uaccount=$_GET["uaccount"];
    echo"<b>帳號：$userid</b>";
    $upwd=$_GET["upwd"];
    echo "<b>密碼：$password</b>";
    $uemail=$_GET["uemail"];
    echo "<b>郵件：$uemail</b>";
    $utel=$_GET["utel"];
    echo"<b>電話：$utel</b>;
    
?>
    <input type ="button" onclick="javascript:location.href='index.php'" value="登入"></input>
    <input type ="button" onclick="javascript:location.href='signup.php'" value="重新輸入資訊"></input>
    </body>
</html>