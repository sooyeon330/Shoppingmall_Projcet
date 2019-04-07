<?php
echo "
			<meta charset='UTF-8'>
			<head>
				<style>
					body{
						margin-left:230px;
						margin-right:230px;	
						margin-top:100px;
						height:100%
						overflow-y:scroll;
					}
					h1{
						margin-bottom:50px;
					}
					div{
						background-color:#fff4e0;
						width:40%;
						height:60%;
					}
					.btn{
						
						background-color:#393e46;
						color:#fff4e0;
						border:0;
					}
				</style>
			</head>";
echo "<body>
				<center>
					<div>
						<h1>LOGIN</h1>
						<table >
							<tr>
								<td>
									<b>ID </b> <input style='margin-left:5px; margin-bottom:5px;' type='text' size='20'>
								</td>
								<td rowspan='2'>
									<input type='button' style='height:55px;' class='btn' value='LOGIN'>
								</td>
							</tr>
							<tr>
								<td>
									<b>PW</b><input style='margin-left:2px;' type='text' size='20'>
								</td>
							</tr>
							<tr>
								<td colspan='2'>
									<input type='button' style='margin-top:10px;height:30px; width:125px;' class='btn' value='SEARCH ID/PW'>
									<input type='button' style='height:30px; width:125px;' class='btn' value='SIGN UP'>
								</td>
							</tr>
						</table>
					</div>
				</center>
			</body>";
?>