<!DOCTYPE HTML>
<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style3.css">
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <style type="text/css">
    .cell{
         
          vertical-align: middle;
          display: inline-block;
          line-height: 40px;
		  padding-right:30px;
    }
	.mid {margin:0 auto;width:720px;border:0;text-align:left;}
    </style>
		<script type="text/javascript">
	var num=1;
	var upid=new Array();
	var lastid=0;
	upid[0]=1;
	function next()
	{
		var check=document.getElementsByName('a'+num);
		if (check[0].checked==false&&check[1].checked==false)
		{
			document.getElementById('hint').value="����ѡ��𰸣�"
			return false;
		}
		document.getElementById("upquestion").style.display ="block";
		upid[lastid]=num;
		lastid++;
		var i="q"+num;
		if (num==1)
		{
			var r=document.getElementsByName('a1');
			if (r[0].checked)
			{
				num++;
			}
			else num=3;
		}
		else if (num==2)
		{
			var r=document.getElementsByName('a2');
			if (r[0].checked)
			{
				num++;
			}
			else num=4;
		}
		else if (num==3)
		{
			var r=document.getElementsByName('a3');
			if (r[0].checked)
			{
				num++;
			}
			else num=5;
		}
		else if (num==4)
		{
			var r=document.getElementsByName('a4');
			if (r[0].checked)
			{
				num++;
			}
			else num=6;
		}
		else if (num==5)
		{
			var r=document.getElementsByName('a5');
			if (r[0].checked)
			{
				num++;
			}
			else num=7;
		}
		else if (num==6)
		{
			var r=document.getElementsByName('a6');
			if (r[0].checked)
			{
				num++;
			}
			else num=8;
		}
		else if (num==7)
		{
			var r=document.getElementsByName('a7');
			if (r[0].checked)
			{
				num++;
			}
			else num=9;
		}
		else if (num==8)
		{
			var r=document.getElementsByName('a8');
			if (r[0].checked)
			{
				num++;
			}
			else num=10;
		}
		var j="q"+num;
		document.getElementById(i).style.display = "none";
		document.getElementById(j).style.display = "block";
		document.getElementById('hint').value="";
		if (num==9||num==10) {document.getElementById("downquestion").style.display = "none";document.getElementById("submit").style.display = "block";}
	}
	function last()
	{
		document.getElementsByName('a'+num)[0].checked=document.getElementsByName('a'+num)[1].checked=false;
		document.getElementById("downquestion").style.display ="block";
		document.getElementById("submit").style.display = "none";
		var i="q"+num;
		num=upid[lastid-1];
		lastid--;
		var j="q"+num;
		document.getElementById(i).style.display = "none";
		document.getElementById(j).style.display = "block";
		document.getElementById('hint').value="";
		if (num==1) document.getElementById("upquestion").style.display = "none";
	}
	function showresult()
	{
		var check=document.getElementsByName('a'+num);
		if (check[0].checked==false&&check[1].checked==false)
		{
			document.getElementById('hint').value="����ѡ��𰸣�"
			return false;
		}
		var result1="";
		var result2="";
		var result3="";
		if (num==9) 
		{
			if (document.getElementsByName('a9')[0].checked) 
			{
				result1+="���ǵ��͵��������ʲ��ã��ڶԷ���������ǿ���ʱ��������׽��źͲ�����";
				result2+="���ʱ���㱾��׼���õĸ���Ҳ��ͳͳ��ʧ������һƬ�հס�";
				result3+="���յ�����ֻ��˳�ű��˵���˼˵���޷�����չʾ�Լ����뷨��";
			}
			if (document.getElementsByName('a9')[1].checked) 
			{
				result1+="�����ŵ��͵Ĺ������ǣ����±���������������ˮƽ��";
				result2+="����һ�����ڹ����ϳ���ʲô�©����ͻ�ǳ��Ĳ�����˼��";
				result3+="���±�����һ��ʧ�󿴲����㣬�����Լ��ʹ˱�ȫ�̷񶨡�";
			}
		}
		else if (num==10) 
		{
			if (document.getElementsByName('a10')[0].checked) 
			{
				result1+="�������ڹ����϶�ô��������Բ���������޷��˷�����ϲ��������ǰ�ĺ��ߺͲ����š�";
				result2+="�����Լ������ú����Լ�����������ȴ�־����Լ�ƾʲôҪ�������š�";
				result3+="����ʹ���Լ��޷��󷽵Ľ��������Ĺ�ͨ�뽻����";
			}
			if (document.getElementsByName('a10')[1].checked) 
			{
				result1+="��һ�㲻����ţ���Ϊ������ʱ���ڹ����Լ������������ֺ͹۵㡣";
				result2+="����ȥ��Ħ���˵���˼����������ô�����������˵��һ�����¡�";
				result3+="�������ܱ�������ĸ��Ժ��뷨��Ҳ�����ܵ����˺ฺܶ���Ӱ�졣";
			}
		}
		document.getElementById("res1").value=result1;
		document.getElementById("res2").value=result2;
		document.getElementById("res3").value=result3;
	}
	</script>
</head>
<body>
<?php 
	if(!isset($_COOKIE["username"]))
	{
		echo 	"<script>
					alert('���ȵ�¼~');
					location.href='judge.php';
				</script>";
	}
?>
<div class="banner page-head">
		<div class="container">
			<div class="header-nav">
							<nav class="navbar navbar-default">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header logo">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<h1>
										<a class="navbar-brand" href="judge.php"><span>In</span><i>Uheart</i></a>
									</h1>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
									<nav class="cl-effect-1">
										<ul class="nav navbar-nav ">
											<li><a class="hvr-overline-from-left button2 active" href="judge.php">��ҳ</a></li>
											<li><a class="hvr-overline-from-left button2" href="testmain.php">����</a></li>
											<li><a class="hvr-overline-from-left button2" href="appoint_select.php">ԤԼ��ѯ</a></li>
											<li><a class="hvr-overline-from-left button2" href="chat.html">������ѯ</a></li>
											<li><a class="hvr-overline-from-left button2" href="http://localhost:5959/?rank=user">����������</a></li>
											<li><a class="hvr-overline-from-left button2" href="chicken_soup.php">����</a></li>
											<li><a class="hvr-overline-from-left button2" href="appoint_condition.php">�ҵ�</a></li>
											<li><a class="hvr-overline-from-left button2" href="logout.php">ע��</a></li>
												<li><?php 
	                                $username=$_COOKIE['username'];
	                          		echo "<div class='right'>��ӭ��¼&nbsp;</div>
		                           	<div class='red'>$username&nbsp;</div>";
	                                 ?></li>
									  </ul>
									</nav>
								</div><!-- /navbar-collapse -->
							</nav>
			</div>
		</div>
</div>
<br>
<h1><center>���Ų���</center></h1>
 <div class="grid_3 grid_5">
 <center>
	<div id="q1" style="display:block;" class="mid">
			<p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>1. ������׷��𣬵��Ǻܿ�Ϳ���ƽ��������</li></ol></FONT></b></p><div class='sels_list'><div class='items'><p class='i_top'></p>
            <p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a1' value='1' cindex='1' qid='3340' nindex='0' ></span><FONT size=4>�ǵ�</FONT></p>
			<p class='i_bot'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a1' value='2' cindex='1' qid='3340' nindex='0' ></span><FONT size=4>����</FONT></p></div></div></div>
			<div id="q2" style="display:none;" class="mid">
			<p class='i_bot'></p><div id='qindex_2' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>2. ��ŭ��ʱ���ڲ����ԣ�</li></ol></FONT></b></p>
			<div class='sels_list'><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a2' value='1' cindex='2' qid='3341' nindex='0' ></span><FONT size=4>�ǵ�</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a2' value='2' cindex='2' qid='3341' nindex='0' ></span><FONT size=4>����</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p>
			</div></div></div></div>
			<div id="q3" style="display:none;" class="mid">
			<p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>3. �е�ʱ��ȴ���ֳ��൱�����ͣ�</li></ol></FONT></b></p><div class='sels_list'><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a3' value='1'  cindex='3' qid='3342' nindex='4' ></span><FONT size=4>�ǵ�</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a3' value='2'  cindex='3' qid='3342' nindex='6' ></span><FONT size=4>����</FONT></p></div>
			<p class='i_bot'></p></div></div>
			<div id="q4" style="display:none;" class="mid">
			<p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>4. ���ᷱ�����ĵĹ�����û�취���о���?</li></ol></FONT></b></p><div class='sels_list'><div class='items'>
			<p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a4' value='1' cindex='4' qid='3343' nindex='0' ></span><FONT size=4>�ǵ�</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a4' value='2' cindex='4' qid='3343' nindex='0' ></span><FONT size=4>����</FONT></p></div>
			</div></div>
			<div id="q5" style="display:none;" class="mid">
			<p class='i_bot'></p><div id='qindex_5' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>5. ���Ǻ�ƣ��?</li></ol></FONT></b></p><div class='sels_list'><div class='items'>
			<p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a5' value='1' cindex='5' qid='3344' nindex='1' ></span><FONT size=4>�ǵ�</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a5' value='2' cindex='5' qid='3344' nindex='1' ></span><FONT size=4>����</FONT></p></div>
			</div></div></div>
			<div id="q6" style="display:none;" class="mid">
			<p class='i_bot'></p><div id='qindex_6' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>6. �������Ļ�û�з�������?</li></ol></FONT></b></p><div class='sels_list'><div class='items'>
			<p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a6' value='1' cindex='6' qid='3345' nindex='0' ></span><FONT size=4>�ǵ�</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a6' value='2' cindex='6' qid='3345' nindex='0' ></span><FONT size=4>����</FONT></p></div>
			</div></div></div>
			<div id="q7" style="display:none;" class="mid">
			<p class='i_bot'></p><div id='qindex_7' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>7. ���ó������߼�����ϲ����������Ϸ?</li></ol></FONT></b></p><div class='sels_list'><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a7' value='1' cindex='7' qid='3346' nindex='1' ></span><FONT size=4>�ǵ�</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a7' value='2' cindex='7' qid='3346' nindex='1' ></span><FONT size=4>����</FONT></p></div>
			<p class='i_bot'></p></div></div></div>
			<div id="q8" style="display:none;" class="mid">
			<p class='i_bot'></p><div id='qindex_8' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>8. ���Ǿ����Լ�˵���˻�����˵����ʱ�������ǿ�������?</li></ol></FONT></b></p><div class='sels_list'><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a8' value='1' cindex='8' qid='3346' nindex='1' ></span><FONT size=4>�ǵ�</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a8' value='2' cindex='8' qid='3347' nindex='1' ></span><FONT size=4>����</FONT></p></div>
			<p class='i_bot'></p></div></div></div>
			<div id="q9" style="display:none;" class="mid">
			<p class='i_bot'></p><div id='qindex_9' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>9. ���������Ź��ʣ�����һ����?</li></ol></FONT></b></p><div class='sels_list'><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a9' value='1' cindex='9' qid='3346' nindex='1' ></span><FONT size=4>�ǵ�</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a9' value='2' cindex='9' qid='3348' nindex='1' ></span><FONT size=4>����</FONT></p></div>
			<p class='i_bot'></p></div></div></div>
			<div id="q10" style="display:none;" class="mid">
			<p class='i_bot'></p><div id='qindex_10' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>10. �κ�ʱ�򣬶��ڹ۲���˵�������ϸ΢�ı仯?</li></ol></FONT></b></p><div class='sels_list'><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a10' value='1' cindex='10' qid='3346' nindex='1' ></span><FONT size=4>�ǵ�</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a10' value='2' cindex='10' qid='3348' nindex='1' ></span><FONT size=4>����</FONT></p></div>
			<p class='i_bot'></p></div></div></div>
			

			<div id="change" style="text-align:center; position:absolute; top:389px; height:200px; width:400px; margin-left:35%; left: 39px;" align="center">
				<span class="cell">
             
				<button class="btn-3"style="display:none;" type="buttton"class="test_btn" onClick="last();" id="upquestion"><font size=4><strong>��&nbsp;һ&nbsp;�� </strong></font></button>
			  </span>
				<span class="cell">
				<button class="btn-3"  style="display: block;"type="buttton" class="test_btn" onClick="next();" id="downquestion" ><font size=4><strong>��&nbsp;һ&nbsp;�� </strong></font></button>
				</span>
				<span class="cell">
               <button class="btn-3"  style="display:none;" type="buttton" class="test_btn" onClick="showresult();" id="submit" ><font size=4><strong>��&nbsp;&nbsp;&nbsp;�� </strong></font></button>
				</span><br>
				<INPUT type="text" size=20 id='hint' readonly  style="border:none;FONT-FAMILY:΢���ź�;FONT-SIZE:24px;COLOR: #f6b26b"><br><br>
</div>
				<center>
				&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
				<p>&nbsp;</p>
			
				<table width="200" border="0" style="margin:6% 0 0 30%">
                  <tr>
                    <td>				
				  <INPUT type="text" size=75 id='res1' readonly  style="border:0;FONT-FAMILY:΢���ź�;FONT-SIZE:24px;COLOR: #f6b26b">
<INPUT type="text" size=90 id='res2' readonly  style="border:0;FONT-FAMILY:΢���ź�;FONT-SIZE:24px;COLOR: #f6b26b">
<INPUT type="text" size=75 id='res3' readonly  style="border:0;FONT-FAMILY:΢���ź�;FONT-SIZE:24px;COLOR: #f6b26b">
               </td>
                  </tr>
                </table>
				
				</center>


</body>
</html>
