<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
	<TITLE>仲弘春兰书苑</TITLE>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9"/>
	<link href="<?php echo $_SERVER['PHP_SEVER']; ?>/style/zhsy.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $_SERVER['PHP_SEVER']; ?>/style/css.css" rel="stylesheet" type="text/css" />
 </HEAD>
	
 <BODY>
	<div class="container">
	<!-- top部分 -->
		<?php include '../include/top.php'; ?>
	<!-- main部分 -->
		<div class="topImg"></div>
		<div class="newmain" style="height:550px;">
			<div class="navPath"> <a href="index.php">最新新闻</a> > 最新动态 </div>
			<div class="mainContent">
				<div class="sidebarLeft">
					<div class="aboutSidebarImg"><a href="index.php">最新动态</a> ></div>
					<div class="aboutSidebarImg"><a href="reviewPastIndex.php">往年回顾 </a></div>
				</div>
				<div class="sidebarRight" style="">
				<div class="navTitle"> > 动态列表</div>
					<div class="txtBox txtl">
						<div class="txtList">
							<table class="authologyTable">
								<tr>
									<td><img src="<?php echo $_SERVER['PHP_SEVER']; ?>/images/dian2.gif"></td>
									<td style="width:80%;"><a href="latest20140416.php">李莎谈“李立三与陈毅的友情”</a></td>
									<td style="width:18%;">2014年4月16日</td>
								</tr>
								<tr>
									<td><img src="<?php echo $_SERVER['PHP_SEVER']; ?>/images/dian2.gif"></td>
									<td style="width:80%;"><a href="latest20140320.php">纪念张茜同志逝世40周年</a></td>
									<td style="width:18%;">2014年3月20日</td>
								</tr>
								<tr>
									<td><img src="<?php echo $_SERVER['PHP_SEVER']; ?>/images/dian2.gif"></td>
									<td style="width:80%;"><a href="latest20140106.php">祭拜陈毅元帅</a></td>
									<td style="width:18%;">2014年1月6日</td>
								</tr>
								<tr>
									<td><img src="<?php echo $_SERVER['PHP_SEVER']; ?>/images/dian2.gif"></td>
									<td style="width:80%;"><a href="latest20140103.php">访问缅甸途中追忆陈毅往事</a></td>
									<td style="width:18%;">2014年1月3日</td>
								</tr>
							</table>	
							
						</div>
					</div>
				</div>
			 </div>
			
		</div>
		<div class="footerImg"></div>
		<!-- foot部分 -->
		<?php include '../include/footer.php'; ?>
	</div>
 </BODY>
</html>
