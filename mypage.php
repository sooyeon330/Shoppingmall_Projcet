<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>MyPage</title>
    <style>
        *{
            font-family: "a시월구일2";
        }
        #title{margin-top:50px;}
        #stat{
            background-color: #fff4e0;
            width: 50%;
            height: 270px;
            border-radius: 10%;
        }
        #tb_info{
            border-spacing: 20px;
        }
        #won{
            text-align: right;
        }
        button{
            width: 150px;
            height: 100px;
            background-color:white;
            margin: 20px;
            color:#393e46;
            border: 5px solid #393e46;
        }
        button:hover{
            border: 5px solid #393e46;
            background-color: #393e46;
            color: lightgoldenrodyellow;
            transition-duration: 0.3s;
        }
    </style>
</head>
<body>
   <center>
    <h3 id='title'>My Page</h3>
    <div id="stat" >
       <table id="tb_info"border="0" width=100% height=100%>
        <tr>
           <td height=20% colspan="2">
               $id 님은 [일반회원] 등급입니다.
            </td>
           </tr>
           <tr>
           <td height=80%>
           		적립금<p>
           		총구매액<p>
            </td>
            <td id='won'>
           		$savings 원<p>
           		$sum 원<p>
            </td>
           </tr>
        </table>
    </div>
       <section>
       <button style='margin-top: 50px;' onclick="location.href='info_change.php'">정보변경</button>
           <button style='margin-top: 50px;'>장바구니</button>
           <button  >주문내역</button>
           <button  >문의내역</button>
       </section>
    </center> 
</body>
</html>