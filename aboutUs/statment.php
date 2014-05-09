<%@ page language="java" import="java.util.*" pageEncoding="UTF-8"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  	<TITLE>仲弘春兰书苑</TITLE>
  	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=9"/>
	<link href="<%=request.getContextPath() %>/style/zhsy.css" rel="stylesheet" type="text/css" />
	<link href="<%=request.getContextPath() %>/style/css.css" rel="stylesheet" type="text/css" />
 </HEAD>
	
 <BODY>
	<div class="container">
	<!-- top部分 -->
		<jsp:include page="../include/top.jsp"></jsp:include>
	<!-- main部分 -->
		<div class="topImg"></div>		
		<div class="newmain" style="height:450px;">
			<div class="navPath"><a href="index.html">首页</a> > 网站声明</div>
			<div class="mainContent" style="height:400px;">
				<div class="sidebarLeft">
					<div class="aboutSidebarImg">网站声明</div>
				</div>
				<div class="sidebarRight">
					<div class="navTitle"> > 声明内容</div>
					<div class="txtBox" style="text-align:left;">
					<!-- 
						<div class="txtTitle">
							<h1>中国红色旅游网版权与免责声明：</h1>
						</div>
					 -->
						<div class="txtContent" style="text-align:left;">
							<div class="txtpoetry" style="text-align:left;">
								<ul>
									<li >
										1、本网其他来源作品，均转载自其他媒体，转载目的在于传播更多信息，丰富网络文化，此类稿件不代表本网观点。 
									</li>
									<li>
										2、任何单位或个人认为本网站或本网站链接内容可能涉嫌侵犯其合法权益，应该及时向本网站书面反馈，并提供身份证明，权属证明及详细侵权情况证明，本网站在收到上述法律文件后，将会尽快移除被控侵权的内容或链接。
									</li>
									<li>
										3、如因作品内容、版权和其他问题需要与本网联系的，请来信：snake.cyu@163.com
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>				
			</div>			
		</div>
		<div class="footerImg"></div>
	<!-- foot部分 -->
		<jsp:include page="../include/footer.jsp"></jsp:include>
	</div>
 </BODY>
</HTML>
