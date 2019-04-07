<?php
?>
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
        hr{
            width: 90%;
        }
        #menu{
            text-align: center;
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
    <h3 id='title'>장바구니</h3>
       <hr>
            <table border="0" width=80% height=25px>
                <tr id='menu'><td width=50%>상품명</td><td width=15%>가격</td><td width=15%>개수</td><td width=20%>합계</td></tr>
            </table>
       <hr>
    <div id="stat" >
       <table id="tb_info"border="0" width=100% height=100%>
        
        </table>
    </div>
       <section>
       <button style='margin-top: 50px;' >회원정보</button>
           <button style='margin-top: 50px;'>장바구니</button><p>
           <button  >주문내역</button>
           <button  >문의내역</button>
       </section>
    </center> 
</body>
</html>