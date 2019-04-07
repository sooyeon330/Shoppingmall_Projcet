<?php
ob_start();
session_start();
echo "��$_SESSION[id] 님이 로그인중입니다.<p>";
require '../include/con_db.php';

$id=$_POST["id"];
$pw1=$_POST["pw1"];
$pw2=$_POST["pw2"];
$name=$_POST["name"];
$mail=$_POST["mail"];
$gen=$_POST["gender"];
$tel=$_POST["tel"];
$adress=$_POST["ad"];

// //    echo "$time";
// if($time==60) setcookie("id","$id",time() * 60);
// else if($time==30) setcookie("id","$id",time() * 60 * 30);

if(($pw1 != $pw2)or $pw2 ==null) echo "<script>alert(\"비밀번호가 다릅니다.\");history.go(-1);</script>";
else{
    echo "id: $id";
    $sql = "update member set id='$id', pw='$pw2', name='$name',gen='$gen', tel='$tel', mail='$mail' ,ad='$adress' where id='$id'";
    
    $reslut = mysql_query($sql);
    
    
    if($result){
    echo "변경되었습니다. <p>";
    echo "<input type='button' value='메인으로' onclick="."location.href='main.html'>";
    }else{
        echo "실패";
    }
    
    mysql_close($connect);
}
?>