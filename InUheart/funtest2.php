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
		if (check[0].checked==false&&check[1].checked==false&&check[2].checked==false)
		{
			document.getElementById('hint').value="����ѡ���!";
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
				num=3;
			}
			else num++;
		}
		else if (num==2)
		{
			var r=document.getElementsByName('a2');
			if (r[1].checked)
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
			else if (r[1].checked)
			{
				num=5;
			}
			else num=6;
		}
		else if (num==4)
		{
			var r=document.getElementsByName('a4');
			if (r[2].checked)
			{
				num=6;
			}
			else num++;
		}
		else if (num==5)
		{
			var r=document.getElementsByName('a5');
			if (r[0].checked)
			{
				num++;
			}
			else if (r[1].checked)
			{
				num=7;
			}
			else num=8;
		}
		else if (num==6)
		{
			var r=document.getElementsByName('a6');
			if (r[1].checked)
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
			else if (r[1].checked)
			{
				num=10;
			}
			else num=9;
		}
		else if (num==8)
		{
			var r=document.getElementsByName('a8');
			if (r[2].checked)
			{
				num=10;
			}
			else num++;
		}
		else if (num==9)
		{
			var r=document.getElementsByName('a9');
			if (r[2].checked)
			{
				num=12;
			}
			else if (r[0].checked)
			{
				num=10;
			}
			else num=11;
		}
		else if (num==10)
		{
			var r=document.getElementsByName('a10');
			if (r[2].checked)
			{
				num=11;
			}
			else num=12;
		}
		else if (num==11)
		{
			var r=document.getElementsByName('a11');
			if (r[2].checked)
			{
				num=14;
			}
			else if (r[0].checked)
			{
				num=13;
			}
			else num=12;
		}
		else if (num==12)
		{
			var r=document.getElementsByName('a12');
			if (r[2].checked)
			{
				num=13;
			}
			else if (r[1].checked)
			{
				num=14;
			}
		}
		else if (num==13)
		{
			var r=document.getElementsByName('a13');
			if (r[0].checked)
			{
				num=14;
			}
			else if (r[1].checked)
			{
				num=15;
			}
		}
		var j="q"+num;
		document.getElementById(i).style.display = "none";
		document.getElementById(j).style.display = "block";
		document.getElementById('hint').value="";
		if (num==14||num==15) {document.getElementById("downquestion").style.display = "none";document.getElementById("submit").style.display = "block";}
	}
	function last()
	{
		document.getElementsByName('a'+num)[0].checked=document.getElementsByName('a'+num)[1].checked=document.getElementsByName('a'+num)[2].checked=false;
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
		if (check[0].checked==false&&check[1].checked==false&&check[2].checked==false)
		{
			document.getElementById('hint').value="����ѡ��𰸣�"
			return false;
		}
		document.getElementById('hint').value="";
		var result1="";
		var result2="";
		var result3="";
		if (num==12)
		{
			result1+="�����������ͬ���ķ���,�����׵ı�ᱻ�������ж��������������뷨";
			result2+="�����������������������ʵ�Ĳп������Ὣ������������ܻᱻ���á�";
			result3+="һ��Ҫѧ�����֣���Щ��ֵ��ͬ�飬��Щ��ֻ���ڱ���Ķ�������Ӷᡣ";
		}
		else if (num==13)
		{
			result1+="�����������̫������������Ϊȱ���ųڶȡ�";
			result2+="��ʱ�ٶ�̫���˲�һ���Ǻ��£��κγɹ�����Ҫ�и����̡�";
			result3+="Ҫ����ֻҪ�㸶�������ڵĺ�ˮ�������ջ��ࡣ";
		}
		else if (num==14) 
		{
			if (document.getElementsByName('a14')[0].checked) 
			{
				result1+="ϲ��̰С����������������ۿۡ�";
				result2+="����ԭ����ʲô���붼Ҫ����Զһ�㡣";
				result3+="С����ֻ������©���ٳ���˭���������������е�ɵ�ӡ�";
			}
			if (document.getElementsByName('a14')[1].checked) 
			{
				result1+="̰Ľ������������������ĺ��ܴ����";
				result2+="Ҫ֪���������ˣ���������ĵ���ب�Ų��䡣";
				result3+="��������Щ����֮����Լ�������Ƚϡ�";
			}
			if (document.getElementsByName('a14')[2].checked) 
			{
				result1+="������ϰ��Ϊ���İ�������߾ͻ���ֺܶ���ᡣ ";
				result2+="����������Դ�ڶ����ҵľ������Σ������Ƕ��Ա���αװ��";
				result3+="���¸߰���̬�ȣ��ٶ��ʵһ���Լ��ɡ�";
			}
		}
		else if (num==15) 
		{
			if (document.getElementsByName('a15')[0].checked) 
			{
				result1+="����������ڼ�����̫�ء�";
				result2+="���ǲ��Ծ������Լ�����ʧ�⣬˵����һ��ʹ�඼�����ҵġ�";
				result3+="��������Ϊ�������㣬ǿ���������������";
			}
			if (document.getElementsByName('a15')[1].checked) 
			{
				result1+="�㲻�����ݣ������Ե���Щ���Խӽ�������Ƣ�����ꡣ";
				result2+="��֮���Խ��ƽ�����Ϊ����ʧȥ������ʧ����������˭��˵������?";
				result3+="����̹Ȼһ�㡣�����׺������������·���ߵø��á� ";
			}
			if (document.getElementsByName('a15')[2].checked) 
			{
				result1+="����������ڲ����ڷܣ�ȱ��ʵ���ж���";
				result2+="���Ǳ�Թ���²���������úõ���һ���Լ��ɡ�";
				result3+="ֻ����ĸ�����������Ҫ�Ͷ�ʱ�䣬�Ż��������������ջ� ";
			}
		}
		document.getElementById("res1").value=result1;
		document.getElementById("res2").value=result2;
		document.getElementById("res3").value=result3;
	}
	function finish()
	{
		if (num==12) 
		{
			document.getElementById("downquestion").style.display = "none";
			document.getElementById("submit").style.display = "block";
		}
		else if (num==13) 
		{
			document.getElementById("downquestion").style.display = "none";
			document.getElementById("submit").style.display = "block";
		}
	}
	function cencel()
	{
		document.getElementById("downquestion").style.display = "block";
		document.getElementById("submit").style.display = "none";
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
<h1><center>�������</center></h1>
 <div class="grid_3 grid_5">
 <center>
			<div id="q1" style="display:block;" class="mid">
			<p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>1. ��ϲ���滭��?</li>
				</ol></FONT></b></p><div class='sels_list'><div class='items'><p class='i_top'></p>
            <p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a1' value='1'  ></span><FONT size=4>ϲ��</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a1' value='2'  ></span><FONT size=4>��ϲ��</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a1' value='3'  ></span><FONT size=4>���ÿɷ�</FONT></p></div></div></div>
			<div id="q2" style="display:none;" class="mid">
			<p class='i_bot'></p><div id='qindex_2' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>2. ���һ��Ů�������ǵĶ���˵�����ۣ��Һú�ϲ����Ŷ���������ʲô�о�?</li></ol></FONT></b></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a2' value='1' ></span><FONT size=4>��Ů����Ҳ̫����</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a2' value='2' ></span><FONT size=4>��Ů�����ÿɰ�</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a2' value='3' ></span><FONT size=4>ûʲô�о�����ô˵������������</FONT></p>
			</div></div>
			<div id="q3" style="display:none;" class="mid">
			<p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>3. ����ϲ���������ֻ滭��Ʒ?</li></ol></FONT> </b></p><div class='sels_list'>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a3' value='1'   ></span><FONT size=4>����</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a3' value='2'   ></span><FONT size=4>�ͻ�</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a3' value='3'   ></span><FONT size=4>����</FONT></p>
			</div></div>
			<div id="q4" style="display:none;" class="mid">
			<p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>4. �㾭����ҹ��?</li></ol></FONT></b></p><div class='sels_list'>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a4' value='1'  ></span><FONT size=4>����</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a4' value='2'  ></span><FONT size=4>ż��</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a4' value='3'  ></span><FONT size=4>�Ӳ�</FONT></p>
			</div></div>
			<div id="q5" style="display:none;" class="mid">
			<div id='qindex_5' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>5. ������Լ��Ǹ���ʳ����? </li></ol></FONT></b></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a5' value='1'  ></span><FONT size=4>�ǵ�</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a5' value='2'  ></span><FONT size=4>����</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a5' value='3'  ></span><FONT size=4>���ÿɷ�</FONT></p>
			</div></div>
			<div id="q6" style="display:none;" class="mid">
			<div id='qindex_6' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>6. ������������������ľ�����?</li></ol></FONT></b></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a6' value='1'  ></span><FONT size=4>��</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a6' value='2'  ></span><FONT size=4>û�У����������</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a6' value='3'  ></span><FONT size=4>û�У�Ҳ����</FONT></p>
			</div></div>
			<div id="q7" style="display:none;" class="mid">
			<div id='qindex_7' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>7. ��ᵽ���ͺ���ӰԺȥ����Ӱ��?</li></ol></FONT></b></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a7' value='1'  ></span><FONT size=4>��</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a7' value='2'  ></span><FONT size=4>����</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a7' value='3'  ></span><FONT size=4>����˵</FONT></p>
			</div></div>
			<div id="q8" style="display:none;" class="mid">
			<div id='qindex_8' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>8. ������Լ�����ѧϰ��? </li></ol></FONT></b></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a8' value='1'  ></span><FONT size=4>���Ǹ�ѧϰ���</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a8' value='2'  ></span><FONT size=4>�Ҳ�����ѧϰ</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a8' value='3'  ></span><FONT size=4>��ֻ����ѧϰ�Ҹ���Ȥ�Ķ���</FONT></p>
			</div></div>
			<div id="q9" style="display:none;" class="mid">
			<div id='qindex_9' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>9. ��ͨ��ϰ��ʹ����ֻ��?</li></ol></FONT></b></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a9' value='1'  ></span><FONT size=4>����</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a9' value='2'  ></span><FONT size=4>����</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a9' value='3'  ></span><FONT size=4>���ҽ���ʹ��</FONT></p>
			</div></div>
			<div id="q10" style="display:none;" class="mid">
			<div id='qindex_10' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>10. ��ԡ����ݡ��������ô��?</li></ol></FONT></b></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a10' value='1'  ></span><FONT size=4>֧��</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a10' value='2'  ></span><FONT size=4>����</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a10' value='3'  ></span><FONT size=4>�����ԣ���Ҳ����ȥ����</FONT></p>
			</div></div>
			<div id="q11" style="display:none;" class="mid">
			<div id='qindex_11' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>11. ͨ�������ֱ����ֵ��������ô��? </li></ol></FONT></b></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a11' value='1'  ></span><FONT size=4>��ͬ����ͳ�Ǯ��������</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a11' value='2'  ></span><FONT size=4>����Ŀ������ǣ�����᲻����ƭ�˵�</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a11' value='3' ></span><FONT size=4>��Ҳ�������ǣ�����϶���ƭ�˵�</FONT></p>
			</div></div>
			<div id="q12" style="display:none;" class="mid">
			<div id='qindex_12' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>12. ��ϲ���Է�������?</li></ol></FONT></b></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a12' value='1' onClick="finish();" ></span><FONT size=4>ϲ��</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a12' value='2' onClick="cencel();" ></span><FONT size=4>��ϲ��</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a12' value='3' onClick="cencel();" ></span><FONT size=4>��ʱϲ����ʱ��ϲ��</FONT></p>
			</div></div>
			<div id="q13" style="display:none;" class="mid">
			<div id='qindex_13' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>13. �㾭��һ���˹����?</li></ol></FONT></b></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a13' value='1' onClick="cencel();" ></span><FONT size=4>����</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a13' value='2' onClick="cencel();" ></span><FONT size=4>ż��</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a13' value='3' onClick="finish();" ></span><FONT size=4>�Ӳ�</FONT></p>
			</div></div>
			<div id="q14" style="display:none;" class="mid">
			<div id='qindex_14' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>14. �㾭������۸�����ķ�����? </li></ol></FONT></b></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a14' value='1'  ></span><FONT size=4>����</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a14' value='2'  ></span><FONT size=4>ż��</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a14' value='3' ></span><FONT size=4>�Ӳ�</FONT></p>
			</div></div>
			<div id="q15" style="display:none;" class="mid">
			<div id='qindex_15' class='test_contents' ><p class='descs fb'><b><ol class="breadcrumb"><li class="active"><FONT size=4>15. ������˳���Ϊ�����������������? </li></ol></FONT></b></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a15' value='1'  ></span><FONT size=4>�һ�ܿ��ĵĽ�������ƺ�</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a15' value='2'  ></span><FONT size=4>�һ�����ľܾ�����ƺ�</FONT></p>
			<p class='i_mid'><span class='sels'>&nbsp <input type='radio' name='a15' value='3' ></span><FONT size=4>��ûʲô�о����ƺ�ֻ��һ������</FONT></p>
			</div></div>
			

			<div id="change" style="text-align:center; position:absolute; top:415px; height:200px; width:400px; margin-left:35%; left: 81px;">
				<span class="cell">
				<button class="btn-3" style="display: none;" type="buttton"class="test_btn" onClick="last();" id="upquestion"><font size=4><strong>��&nbsp;һ&nbsp;�� </strong></font></button>
			  </span>
				<span class="cell">
				<button class="btn-3" style="display: block;" type="buttton" class="test_btn" onClick="next();" id="downquestion" ><font size=4><strong>��&nbsp;һ&nbsp;�� </strong></font></button>
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
				  <INPUT type="text" size=75 id='res1' readonly  style="border:0;FONT-FAMILY:΢���ź�;FONT-SIZE:24px;COLOR:#f6b26b">
				 
 <INPUT type="text" size=90 id='res2' readonly  style="border:0;FONT-FAMILY:΢���ź�;FONT-SIZE:24px;COLOR:#f6b26b">

<INPUT type="text" size=75 id='res3' readonly  style="border:0;FONT-FAMILY:΢���ź�;FONT-SIZE:24px;COLOR: #f6b26b">
</td>
                  </tr>
                </table>
				
				</center>


</body>
</html>