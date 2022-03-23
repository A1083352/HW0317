<html>
    <head>
        <title>資訊確認</title>
    </head>
    <body>
    <?php
    echo ."資訊確認"."<br>";
    $uaccount=$_GET["uaccount"];
    echo ."帳號：".$userid."<br>";
    $upwd=$_GET["upwd"];
    echo ."密碼：".$password."<br>";
    $uemail=$_GET["uemail"];
    echo ."Email：".$email."<br>";
    $utel=$_GET["utel"];
    echo ."電話：".$phone."<br>";
    
?>
    <input type ="button" onclick="javascript:location.href='index.php'" value="登入"></input>
    <input type ="button" onclick="javascript:location.href='signup.php'" value="重新輸入資訊"></input>
    </body>
</html>