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
	function next()
	{
		var check=document.getElementsByName('a'+num);
		if (check[0].checked==false&&check[1].checked==false)
		{
			document.getElementById('hint').value="����ѡ��𰸣�"
			return false;
		}
		document.getElementById("upquestion").style.display ="block";
		var i="q"+num;
		if (num==3)
		{
			var r=document.getElementsByName('a3');
			if (r[0].checked)
			{
				num++;
			}
			else num=6;
		}
		else num++;
		var j="q"+num;
		document.getElementById(i).style.display = "none";
		document.getElementById(j).style.display = "block";
		document.getElementById('hint').value="";
		if (num==7||num==5) {document.getElementById("downquestion").style.display = "none";document.getElementById("submit").style.display = "block";}
	}
	function last()
	{
		document.getElementById("downquestion").style.display ="block";
		document.getElementById("submit").style.display = "none";
		var i="q"+num;
		if (num==6) num=3;
		else num--;
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
		if (document.getElementsByName('a1')[0].checked) result1+="�㲻�������������������źܰ�ȫ��";
		if (document.getElementsByName('a1')[1].checked) result1+="����Ҫ��ȫ�У�������ܽ�����";
		if (document.getElementsByName('a2')[0].checked) result1+="����ϲ�����Σ����ӱ��˶��Լ��Ŀ�����";
		if (document.getElementsByName('a2')[1].checked) result1+="ͬʱ��ȽϽ�����ϲ�����ڣ������Ĵ��ڹ¶��С�";
		if (document.getElementsByName('a2')[2].checked) result1+="�������ǿ��������ߣ�ϲ����������顣";
		if (document.getElementsByName('a3')[0].checked) result2+="����������ǿ�󣬵���ʹ��ѹ����ȱ�����ԡ�";
		if (document.getElementsByName('a3')[1].checked) result2+="���������Լ���������������㲻����������";
		if (document.getElementsByName('a4')[0].checked) result2+="��һ���棬������������˽⣬ȴ���±��˿������һ�С�";
		if (document.getElementsByName('a4')[1].checked) result2+="��һ���棬��Է����²�̫���⡣";
		if (document.getElementsByName('a5')[0].checked) result3+="���գ�����ͼ�ӱ�������ʶ�������������������С�";
		if (document.getElementsByName('a5')[1].checked) result3+="�Ӷ�Ը������������Լ�";
		if (document.getElementsByName('a6')[0].checked) result2+="��һ���棬���ܺͱ��˱������ܾ��룬ȴ���Ա���⡣";
		if (document.getElementsByName('a6')[1].checked) result2+="��һ���棬��ϣ�����̸ı��Լ������������Ĳ���졣";
		if (document.getElementsByName('a7')[0].checked) result3+="������������ȱ���˽��Լ���������";
		if (document.getElementsByName('a7')[1].checked) result3+="�����¶�����ã����û�ҵ��Լ��Ĺ�����";
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
<h1><center>Ȥζ�ξ�����</center></h1>
 <div class="grid_3 grid_5">
 <center>
			<div id="q1" style="display:block;" class="mid">
			<p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>1. ��������һ���İ����ּ䣬���ϣ��������</li>
				</ol></FONT></b></p><div class='sels_list'><div class='items'><p class='i_top'></p>
            <p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a1' value='1' cindex='1' qid='3340' nindex='0' ></span><FONT size=4>һƬ����ģ��а߲�ˮ�ݵ�����</FONT></p>
			<p class='i_bot'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a1' value='2' cindex='1' qid='3340' nindex='0' ></span><FONT size=4>һ��ƽ����������̦��ʯ��·</FONT></p></div></div></div>
			<div id="q2" style="display:none;" class="mid">
			<p class='i_bot'></p><div id='qindex_2' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>2. ��С�ĵ��߹���������һ������ǰ��������ļң����ϣ����ļ�</li>
				</ol></FONT></b></p>
			<div class='sels_list'><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a2' value='1' cindex='2' qid='3341' nindex='0' ></span><FONT size=4>�����ڲ�ƺ�ϣ�������Ư��</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a2' value='2' cindex='2' qid='3341' nindex='0' ></span><FONT size=4>��ɭ�ֵı�Ե�����������£������Ǻ���</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a2' value='3' cindex='2' qid='3341' nindex='0' ></span><FONT size=4>��û�����ֵ�����м���������������</FONT></p>
			<p class='i_bot'></p></div></div></div><div id='qindex_3' class='test_contents' ></div></div>
			<div id="q3" style="display:none;" class="mid">
			<p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>3. ���߽���ļң����ϣ��</li>
				</ol></FONT></b></p><div class='sels_list'><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a3' value='1'  cindex='3' qid='3342' nindex='4' ></span><FONT size=4>ӭ����һ�����Ŀ�����ð�����Ļ�¯�Ϳ������ĳ�ɳ��</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a3' value='2'  cindex='3' qid='3342' nindex='6' ></span><FONT size=4>���ڹ����������������ͼҾߣ��ƺ����Ҷ������ҳ�</FONT></p></div>
			<p class='i_bot'></p></div></div>
			<div id="q4" style="display:none;" class="mid">
			<p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>4. ������ɳ���ϣ����ϣ��</li>
				</ol></FONT></b></p><div class='sels_list'><div class='items'>
			<p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a4' value='1' cindex='4' qid='3343' nindex='0' ></span><FONT size=4>��ǰ��һ�������Ĵ������ܺ�����Ŀ�������ķ羰������õ��ɫ���ʻ��ͷ�����ʱ����·�о����������ˣ��������Ӱ������е㺦��</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a4' value='2' cindex='4' qid='3343' nindex='0' ></span><FONT size=4>������ⲻ������ļң�������İ���ĸо�����һֻСè�ܹ�������������Ļ�����</FONT></p></div>
			</div></div>
			<div id="q5" style="display:none;" class="mid">
			<p class='i_bot'></p><div id='qindex_5' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>5. ��ʱ���㷢��</li>
				</ol></FONT></b></p><div class='sels_list'><div class='items'>
			<p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a5' value='1' cindex='5' qid='3344' nindex='1' ></span><FONT size=4>���Ѵ�������Ȼ�Ļ����У�����һƬ������Ĳݵ��ϣ�������ʧ�ˣ����㲢������ȥѰ��</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a5' value='2' cindex='5' qid='3344' nindex='1' ></span><FONT size=4>�Լ��������Լ��Ĵ��ϣ���һ��İ������˵���㣬�������ǿ�����������</FONT></p></div>
			</div></div></div>
			<div id="q6" style="display:none;" class="mid">
			<p class='i_bot'></p><div id='qindex_6' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>6. ��С�ĵ��߽�ȥ�����Ը�����</li>
				</ol></FONT></b></p><div class='sels_list'><div class='items'>
			<p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a6' value='1' cindex='6' qid='3345' nindex='0' ></span><FONT size=4>ӭ����һ��խС������¥��ͨ��¥�ϣ����ѵ�����¥�ݣ�����һ�����������ȣ����Ż谵�ĵƹ⣬��о��е���Ϣ</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a6' value='2' cindex='6' qid='3345' nindex='0' ></span><FONT size=4>��ϣ����Ϣһ�£����Ǿ������Ӷ��ִ�ɨ���ӡ����ҵ���һ�����ӣ�����Ļ���ô��Ҳ�Ĳ�������ֻ��С�ĵ�����</FONT></p></div>
			</div></div></div>
			<div id="q7" style="display:none;" class="mid">
			<p class='i_bot'></p><div id='qindex_7' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>7. ���ƺ���֪��������Ҫ��ʲô��������������Լ������ң��е㲻ȷ�����������ջ�������һ������ǰ</li>
				</ol></FONT></b></p><div class='sels_list'><div class='items'><p class='i_top'></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a7' value='1' cindex='7' qid='3346' nindex='1' ></span><FONT size=4>������������򲻿������ƺ���ס�ˣ����������Ҹ������������</FONT></p>
			<p class='i_bot'></p></div><div class='items'><p class='i_top'></p><p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a7' value='2' cindex='7' qid='3346' nindex='1' ></span><FONT size=4>���¸ҵ��ƿ��ţ�������һ��˫�˴���ռ���˷���󲿷ֿռ䣬���������ȥ��������������˵���ⲻ����ļң����ߴ��˷��䡱�����ͷ�뿪</FONT></p></div>
			<p class='i_bot'></p></div></div></div>
   </center>
</div>

			<div id="change" style="text-align:center; position:absolute; top:425px; height:200px; width:400px; margin-left:35%; left: 63px;">
				<span class="cell">
               <button class="btn-3" style="display: none;" type="buttton"class="test_btn" onClick="last();" id="upquestion"><font size=4><strong>��&nbsp;һ&nbsp;�� </strong></font></button>
			  </span>
				<span class="cell">
				<button class="btn-3" style="display: block;" type="buttton" class="test_btn" onClick="next();" id="downquestion" ><font size=4><strong>��&nbsp;һ&nbsp;�� </strong></font></button>
				</span>
				<span class="cell">
                <button class="btn-3"  style="display:none;" type="buttton" class="test_btn" onClick="showresult();" id="submit" ><font size=4><strong>��&nbsp;&nbsp;&nbsp;�� </strong></font></button>
				</span><br>
</div>
				<center>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>
				    <INPUT type="text" size=36 id='hint' readonly  style="border:none;FONT-FAMILY:΢���ź�;FONT-SIZE:24px;COLOR: #f6b26b">
				    <br>
				    <br>
			       &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<INPUT type="text" size=75 id='res1' readonly  style="border:0;FONT-FAMILY:΢���ź�;FONT-SIZE:24px;COLOR: #f6b26b">
				    <br>
			         &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp; <INPUT type="text" size=90 id='res2' readonly  style="border:0;FONT-FAMILY:΢���ź�;FONT-SIZE:24px;COLOR: #f6b26b">
				    <br>
			       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <INPUT type="text" size=75 id='res3' readonly  style="border:0;FONT-FAMILY:΢���ź�;FONT-SIZE:24px;COLOR: #f6b26b"">
		          </p>
</center>



</body>
</html>
