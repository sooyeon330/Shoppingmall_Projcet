<?php 
require '../include/con_db.php';

//     $selinfo = 'select * from user where id='$id'';
    $selinfo = "select * from user where id='jiji'";
    $qryinfo = mysql_query($selinfo,$connect);
    
    $name = mysql_result($qryinfo,0,name);
    $mail = mysql_result($qryinfo,0,mail);
    $id = mysql_result($qryinfo,0,id);
    $tel = mysql_result($qryinfo,0,tel);
    $ad = mysql_result($qryinfo,0,ad);
    
    echo $name;
    echo "이름";
    echo "";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Change</title>
    <style>
        *{
            font-family: 'a시월구일1';
        }
        .sub{ 
            width: 30%; height: 50px;
            text-align: center; 
            background-color:#fff4e0; 
        }
        .content{
            padding: 20px;
        }
        table{
            margin: 20px;
        }
        .btn{
            width: 150px;
            height: 50px;
            background-color:#393e46;
            margin: 20px;
            color:white;
            border: 5px solid #393e46;
        }
        .btn:hover{color:#fff4e0;}
    </style>
    <script>
    function chk(){
    	var ok;
    	ok = confirm("정말 취소하시겠습니까?");
    	if(ok){
    		location.href="mypage.php";
    	}else{
    	}
	}
    </script>
</head>

<body>
    <center>
        <h3>내정보 변경</h3>
        <form name=f1 action='change2.php' method='POST'>
            <table border='0' width=50% height=100%>
                <tr>
                    <td class='sub'>이름</td>
                    <td class='content'><?=$name ?></td>
                </tr>
                <tr>
                    <td class='sub'>성별</td>
                    <td class='content'><input type='radio' checked name='gender' value='G'>여
                                        <input type='radio' name='gender' value='M'>남</td>
                </tr>
                <tr>
                    <td class='sub'>ID</td>
                    <td class='content' name='id'><?=$id ?><input type='text' name='id' value=<?=$id ?> ></td>
                </tr>
                <tr>
                    <td class='sub'>PW</td>
                    <td class='content' ><input type='password' name='pw1'></td>
                </tr>
                <tr>
                    <td class='sub'>PW확인</td>
                    <td class='content'><input type='password' name='pw2'></td>
                </tr>
                <tr>
                    <td class='sub'>e-mail</td>
                    <td class='content'><?=$mail ?></td>
                </tr>
                <tr>
                    <td class='sub'>전화번호</td>
                    <td class='content'>
                        <select name='tel1'>
                            <option> 010 <option> 011 <option> 070
                        </select>
                        <input type='tel' name='tel' value='<?=$tel?>'>
                    </td>
                </tr>
                <tr>
                    <td class='sub'>주소</td>
                    <td class='content'><?=$ad?></td>
                </tr>
            </table>
            <input class='btn' type=submit value='변경' onclick="location.href='change2.php'">
            <input class='btn' type=button value='취소' onclick='chk();'>
            <input class='btn' type=button value='탈퇴' onclick="location.href='dropid.php'">
        </form>
    </center>
</body>
</html>