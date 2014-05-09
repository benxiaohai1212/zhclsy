<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML>
 <HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="zh-CN" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
  <TITLE>仲弘春兰书苑</TITLE>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9"/>
	<link href="../style/zhsy.css" rel="stylesheet" type="text/css" />
	<script src="../script/jquery-1.3.2.js" type="text/javascript"></script>
    <link href="../style/nph_gallery_2.15.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
        body {            
			font-family: "宋体",serif;			
			text-align: center;
			/*background-color:white;  */
        }
		div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, fieldset, input, textarea, blockquote {
			margin: 0;
			padding: 0;
		}
		.hidden{display:none;}
		.nph_set_thumb{ margin:0 5px; padding:6px 5% 0;}
		.nph_gallery{ 
			text-align:left; 
			word-wrap:break-word; 
			border:0px solid #2F2F2F; 
			border-top:none;
		}
		.nph_area{ 
			clear:both; 
			margin:auto; 
			width:735px; 
			margin-left:100px;
			text-align:left;
		}
		.nph_set {
			float: left;
			min-height: 1px;
			width: 100%;
		}
		.nph_btn_pphoto {
			display: block;
			height: 100%;
			outline: medium none;
			width: 100%;
		}
		.nph_photo {
			/* margin-left:-100px \9; */
			width:600px \9;
		}
		.nph_hr_solid_half1{	
			display:block; 
			clear:both; 
			overflow:hidden; 
			height:8px; 
			/* border-bottom:1px solid #2F2F2F;  */
		}
		.nph_hr_solid_half2{	
			display:block; 
			clear:both;
			overflow:hidden; 
			height:9px; 
		}
		.nph_photo_prev {
			background: url("../images/bg06.png") repeat scroll 0 0 transparent;
			height: 100%;
			left: 0;
			position: absolute;
			top: 0;
			width: 300px;
		}
		.nph_photo_next {
			background: url("../images/bg06.png") repeat scroll 0 0 transparent;
			height: 100%;
			position: absolute;
			right: 0;
			top: 0;
			width: 300px;
		}
		.nph_photo_view {
			height: 370px;
			overflow: hidden;
			position: relative;
			text-align: center;
			width: 100%;
		}
		.nph_stream, .nph_search {
			height: 550px;
		}
		#gallery .nph_list_stream {
			height: 450px;
			width: 560px;
		}
		#gallery .nph_list_stream li {
			height: 200px;
			width: 187px;
		}
		.nph_btn_pscrl, .nph_btn_nscrl{
			/*background:url(../images/bg05.png) no-repeat;
			padding-left:100px;	 */
		}
		.nph_btn_pscrl, .nph_btn_nscrl{ 
		display:block; 
		width:20px; 
		height:65px; 
		outline:none; 
		cursor:pointer;
		}
		.nph_btn_pscrl, .nph_btn_nscrl{ 
			background:url(../images/bg05.png) no-repeat;
		/*
			background:url(http://img1.cache.netease.com/cnews/img/gallery11/bg05.png) no-repeat;
		*/
		}
		.nph_btn_pscrl{ 
			background-position:0 0;
		}
		.nph_btn_pscrl:hover{ 
			background-position:-21px 0;
		}
		.nph_btn_nscrl{ 
			background-position:-42px 0;
		}
		.nph_btn_nscrl:hover{ 
			background-position:-63px 0;
		}
		.nph_scrl_lt{ 
			float:left; 
			margin-right:-3px; 
			width:3px; 
			height:20px; 
			background:url(../images/bg09.png) no-repeat 0 0;
		}
		.nph_scrl_rt{ 
			float:right; 
			margin-left:-3px; 
			width:3px; 
			height:20px; 
			background:url(../images/bg10.png) no-repeat 0 0;
		}
		.nph_scrl_bd{ 
			float:left; 
			width:100%; 
			min-height:1px;
		}
		.nph_scrl_ct{ 
			position:relative; 
			margin:0 3px; 
			padding-top:4px; 
			height:20px; 
			background:url(../images/bg08.png) repeat-x 0 0;
		}
		.nph_btn_scrl{ position:absolute; display:block; width:36px; outline:none; cursor:default;}
		.nph_btn_scrl .nph_btn_lt{ float:left; margin-right:-10px; width:10px; height:15px;}
		.nph_btn_scrl .nph_btn_rt{ float:right; margin-left:-10px; width:10px; height:15px;}
		.nph_btn_scrl .nph_btn_bd{ float:left; width:100%; min-height:1px;}
		.nph_btn_scrl .nph_btn_bd span{ display:block; height:15px; margin:0 10px;}
		.nph_btn_scrl .nph_btn_ct{ display:block; margin:auto; width:14px; height:15px;}
		.nph_btn_scrl .nph_btn_lt, .nph_btn_scrl .nph_btn_rt, .nph_btn_scrl .nph_btn_bd span, .nph_btn_scrl .nph_btn_ct{ background:url(../images/bg07.png) no-repeat;}
		.nph_btn_scrl .nph_btn_lt{ background-position:0 0;}
		.nph_btn_scrl .nph_btn_rt{ background-position:-26px 0;}
		.nph_btn_scrl .nph_btn_ct{ background-position:-11px 0;}
		.nph_btn_scrl:hover .nph_btn_lt{ background-position:0 -16px;}
		.nph_btn_scrl:hover .nph_btn_rt{ background-position:-26px -16px;}
		.nph_btn_scrl:hover .nph_btn_ct{ background-position:-11px -16px;}
		.nph_btn_scrl .nph_btn_bd span{ background:url(../images/bg07.png) repeat-x 0 -32px;}
		.nph_btn_scrl:hover .nph_btn_bd span{ background-position:0 -48px;}

		 #photoPrev span, #photoNext span{
			display:block;
			width:87px;
			height:87px;
			position:absolute;
			top:50%;
			margin-top:-43px;
			cursor:pointer;
			}
		#photoPrev span{
			left:38px;
			opacity:0;
			visibility:hidden;
			-webkit-transition: opacity 0.3s ease-out;
			-moz-transition: opacity 0.3s ease-out;
			-o-transition: opacity 0.3s ease-out;
			transition: opacity 0.3s ease-out;
			background:url(../images/prev.png) no-repeat; 
			_background:none;
		}
		#photoNext span{
			right:38px;
			opacity:0;
			visibility:hidden;
			-webkit-transition: opacity 0.3s ease-out;
			-moz-transition: opacity 0.3s ease-out;
			-o-transition: opacity 0.3s ease-out;
			transition: opacity 0.3s ease-out;
			background:url(../images/next.png) no-repeat; 
			_background:none;
		}
		#photoPrev:hover span{
			visibility:visible;
			opacity:1;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="../images/prev.png",sizingMethod='crop');
			-webkit-transition: opacity 0.3s ease-in;
			-moz-transition: opacity 0.3s ease-in;
			-o-transition: opacity 0.3s ease-in;
			transition: opacity 0.3s ease-in;
		}
		#photoNext:hover span{
			visibility:visible;
			opacity:1;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="../images/next.png",sizingMethod='crop');
			-webkit-transition: opacity 0.3s ease-in;
			-moz-transition: opacity 0.3s ease-in;
			-o-transition: opacity 0.3s ease-in;
			transition: opacity 0.3s ease-in;
		}
		#photoPrevLoading{
			display:none;
		}
		.nph_cnt {
			margin: 0 3.125%;
		}
		.nph_photo_ctrl{ float:right; overflow:hidden; margin-top:8px;}
		.nph_photo_ctrl ul{ margin-right:-12px;}
		.nph_photo_ctrl li{ display:inline;}
		.nph_photo_ctrl .hidden{ display:none;}
		.nph_photo_ctrl, .nph_photo_ctrl a, .nph_photo_ctrl a:visited{ color:#767676; }
		.nph_photo_ctrl a:hover{ color:red;}
		.nph_photo_ctrl, .nph_photo_ctrl a, .nph_photo_ctrl a:visited{ color:#000000; white-space: nowrap; }

		.nph_stream_view, .nph_search_view {
			overflow: hidden;
			padding-top: 12px;
			width: 100%;
		}
		.nph_pages{ *zoom:1; text-align:center;}
		.nph_pages a, .nph_pages span{ 
			display:inline-block; 
			width:22px; 
			height:22px; 
			line-height:22px; 
			border:1px solid #767676;
		}
		.nph_pages .nph_pages_turn{ 
			width:48px;
		}
		.nph_pages, .nph_pages a, .nph_pages a:visited{ 
			color:#111111;
		}
		.nph_pages a:hover{ 
			color:#ECDEAE; 
			background:#CCCCCC;
		}
		.nph_pages span{ 
			color:#111111; 
			background:#999999;
		}
		.nph_pages .nph_pages_active{ 
			color:#ECDEAE; 
			font-weight:bold;
		}








        #nhp_poparea {
            position:absolute;
            bottom:0;
            _bottom:-1px;
            right:0;
            /*background:#1C1C1D;*/
			background:#000000;
            color:#fff;
            line-height:18px;
            width:150px;
            height:18px;
            padding-top:2px;
            display:none;
            overflow:hidden;
        }
        #nhp_poparea .nhp_pclose {
            float:right;
            background:url(../images/bg17.png) no-repeat 0px 0;
            width:15px;
            height:15px;
            margin-right:2px;
        }
        #nhp_poparea span {
            display:block;
            padding-left:12px;
        }
        .nph_chn {
            padding: 4px 0 4px;
        }
        .nph_crumb {
            line-height: 26px;
        }
        .nph_photo_view .nph_layout_bg{ background:url("../images/bg18.png") repeat 0 0; _background:#000000;/*#1C1C1D;*/}
		
		.aboutMainContent .content {
			width:750px; 
			margin:0px 20px 0px 10px;	
			height:auto;
		}

		.aboutMainContent .content .title {
			text-align:left;
			padding-left:20px;
			margin-left: 150px;
			background:url(../images/title-bg.jpg) repeat-x;
		}
		.aboutHeader {
			background:url(../images/top-bg.jpg) no-repeat;
			height:24px;
		}
		.aboutFooter {
			background:url(../images/bottom-bg.jpg) no-repeat;
			height:18px;
			margin-top:295px;
		}
		span {
			padding:0px;
		}
		.nph_photo_desc p{ 
			color:#000000;
		}

		.header .weibo {
			float:right;
			padding-top:70px;
			padding-right:30px;
			color:red;
		}
    </style>


 </HEAD>
	
 <BODY>
	<div class="container">
	<!-- top部分 -->
	<?php include '../include/top.php'; ?>
	<!-- main部分 -->
		<div class="about" style="height:700px;">
			<div class="aboutHeader">
				<!-- <img src="../images/top-bg.jpg"> -->
			</div>
			<div class="aboutMainContent">
				<div class="content">
					<div class="title" style="padding:5px 10px;width:650px;"> > 历史瞬间</div>
					<div class="aboutContentContent">
						<!--  -->
						<div class="nph_area">
							<img id="photoPrevLoading" src="../images/bg06.png" width="0" height="0" />

							<div class="nph_gallery clearfix" id="gallery">
							<div class="nph_bg">
							<div class="nph_cnt clearfix hidden">	    
								<div class="nph_set_info">
									<div id="setInfo">
										<div class="nph_set_title" style="color:white;">
											<span class="nph_set_cur hidden" id="photoType" style="color:white;">
												（<span id="photoIndex" class="nph_c_lh" style="color:white;"></span>/21）
											</span>
											<span class="nph_set_size" id="streamType" style="color:white;">（共<span class="nph_c_lh" style="color:white;">21</span>张）</span>
										</div>        
									</div>
								</div>
							</div>
							<!-- <span class="nph_hr_solid"></span> -->
							<div id="modePhoto" class="nph_photo">
								<div class="nph_photo_view">
									<div class="nph_cnt" id="photoView"><i></i><img src="../images/bg06.png" id="photo" /></div>
									<div class="nph_photo_prev"><a href="#" hidefocus="true" target="_self" class="nph_btn_pphoto" id="photoPrev"><span></span></a></div>
									<div class="nph_photo_next"><a href="#" hidefocus="true" target="_self" class="nph_btn_nphoto" id="photoNext"><span></span></a></div>
									<div class="nph_photo_loading" id="photoLoading">加载中...</div>
									<div style="width:100%; height:100%;position:absolute; left: 0; top:0;"  id="photoLayout">
										<div class="nph_layout_bg"></div>
										<div class="nph_photo_layout" id="photomiddle" style="display:none;">
											<div class="nph_layout_cnt"> <a href="#close" target="_self" class="nph_layout_close"></a>
												<div class="nph_layout_hd">已经到最后一张了。<a href="#again" target="_self" class="nph_btn_again">重新浏览</a></div>
												<div class="nph_layout_bd">
													<h6>相关图集</h6>
													<ul class="nph_list_relat clearfix">
														   <li>
															<div></div>
															<h5></h5>
														</li>
														<li>
															<div></div>
															<h5></h5>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="nph_cnt">
									<div class="nph_photo_ctrl">
										<ul>
											<li>
											
											<span style="margin-right: -10px;">分享到：</span><span class="wb-article-sharewraper wb-article-sharewraper-sm" id="wb-article-sharewraper-sm" style="*float:none;*margin-right:3px;top:0;*top:-3px;_top:0;*display:inline;"></span>
											<style>
											.ntshare-wrap {display:inline-block;*display:inline;position:relative;top:5px;*padding-right:5px;}
											.ntshare-wrap a {display:inline-block;cursor:pointer;height:22px;width:20px;vertical-align:text-bottom;margin-left:3px;background:url(../images/share-icon.png) no-repeat;}
											.ntshare-wrap .ntshare-sina {background-position:0 -40px;}
											.ntshare-wrap .ntshare-renren {background-position:0 -80px;}
											.ntshare-wrap .ntshare-qzone {background-position:0 0;}
											</style>
							<div class="ntshare-wrap"></div>
							<!-- 分享到sina、renren、qq的js -->
							<script type="text/javascript" src="../script/NeteaseShare.js"></script>
							<script>
							(function(){
								var  _filterHtml = function(str){
									var container = document.createElement('div'),
										filteredStr;
									container.innerHTML = str;
									filteredStr = container.innerText || container.textContent;
									container = null;
									return filteredStr;
								},_param = {
									title: '仲弘春兰书院',
									appkey: '',
									description: _filterHtml('追忆陈毅元帅及其夫人张茜') || '',
									summary: _filterHtml("追忆陈毅元帅及其夫人张茜") || '',
									placeholder: ''
								},_domready = (function(a){function m(a){l=1;while(a=b.shift())a()}var b=[],c,d=!1,e=document,f=e.documentElement,g=f.doScroll,h="DOMContentLoaded",i="addEventListener",j="onreadystatechange",k="readyState",l=/^loade|c/.test(e[k]);return e[i]&&e[i](h,c=function(){e.removeEventListener(h,c,d),m()},d),g&&e.attachEvent(j,c=function(){/^c/.test(e[k])&&(e.detachEvent(j,c),m())}),a=g?function(c){self!=top?l?c():b.push(c):function(){try{f.doScroll("left")}catch(b){return setTimeout(function(){a(c)},50)}c()}()}:function(a){l?a():b.push(a)}})();
								
								_domready(function() {
									if(window._ntshare){
										!_ntshare.fn.isInit && _ntshare.fn.init(_param);
									}
								});
							})();
							</script><style type="text/css">
								 .ntshare-wrap{top:0;}
								 .ntshare-wrap a{height:16px;}
								 .wb-article-sharewraper-sm{*margin-right:11px;height:16px;line-height:16px;}
								 .wb-article-sharewraper-sm .wb-article-sharelink{background-position:0 0;vertical-align:text-bottom;}
								 span {padding-right:-60px;}
								 /* .nph_photo_ctrl, .nph_photo_ctrl a, .nph_photo_ctrl a:visited{ color:#767676; white-space: nowrap; } */
							</style>
							<script language="javascript" type="text/javascript" charset="utf-8">
								(function() {
												var options = {
											source: encodeURIComponent("仲弘春兰书院图片库"),
											title: encodeURIComponent(document.title),
											link: encodeURIComponent(document.location.href + '#仲弘时代'),
											check1stImg:false,
											togImg:true,
											images:function() { return $('#photo').attr('src'); }
										};
									   
										})();
							</script>|</li>                
															<li><a href="#viewOrig" class="nph_icon_orig" id="viewOrig" target="_blank">查看原图</a>|</li>
															<li><a href="#q=1" class="nph_icon_stream" id="viewStream">全部图片</a>|</li>
										</ul>
									</div>
									<div class="nph_photo_desc" id="photoDesc"></div>
								</div>
								<span class="nph_hr_solid_half1"></span>
								<span class="nph_hr_solid_half2"></span>
								<div class="nph_cnt">
									<div class="clearfix">
										<div class="nph_set">
											<div class="nph_set_thumb">
												<div class="nph_photo_thumb clearfix" id="scrl" style="width:550px;">
													<div class="clearfix">
														<div class="nph_scrl">
															<div class="nph_scrl_thumb">
																<div class="nph_scrl_main">
																	<ul class="nph_list_thumb clearfix" id="thumb">
																	</ul>
																</div>
																<div class="nph_scrl_bar clearfix"> <span class="nph_scrl_lt"></span> <span class="nph_scrl_rt"></span>
																	<div class="nph_scrl_bd">
																		<div class="nph_scrl_ct"> <a href="" hidefocus="true" class="nph_btn_scrl" id="bar"> <b class="nph_btn_lt"></b> <b class="nph_btn_rt"></b> <span class="nph_btn_bd"><span><b class="nph_btn_ct"></b></span></span> </a> </div>
																	</div>
																</div>
															</div>
														</div>
														<span class="nph_scrl_prev">
															<a href="" hidefocus="true" class="nph_btn_pscrl" id="scrlPrev"></a>
														</span> 
														<span class="nph_scrl_next">
															<a href="" hidefocus="true" class="nph_btn_nscrl" id="scrlNext"></a>
														</span> 
													</div>
												</div>
											</div>
										</div>	 
									</div>
								</div>
							</div>
							<div id="modeStream" class="nph_stream hidden">
								<div class="nph_cnt">
									<div class="nph_stream_view" id="stream"></div>
								</div>
							</div>
							<div id="modeSearch" class="nph_search hidden">
							</div>
							<textarea class="hidden" id="photoList">
								<li>
									<a href="#p=89D519343R710001" hidefocus="true"><img src="../images/xiao_jia.jpg"
									alt="" /></a>
									<h2></h2>
									<p>陈毅和邓小平两家人合影。左起：陈丹淮、张茜、陈昊苏、陈毅、邓楠、卓琳（站立者）、邓朴方、邓小平、邓林。</p>
									<i title="img">../images/family.jpg</i>
									<i title="timg">../images/xiao_jia.jpg</i>
										</li>
									 <li>
									<a href="#p=89D50RU23R710001" hidefocus="true"><img src="../images/xiao_04.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1929年青年陈毅</p>
									<i title="img">../images/04.jpg</i>
									<i title="timg">../images/xiao_04.jpg</i>
										</li>
									   <li>
									<a href="#p=89D511ID3R710001" hidefocus="true"><img src="../images/xiao_1973.10.14.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1973年10月14日 香山</p>
									<i title="img">../images/1973.10.14.jpg</i>
									<i title="timg">../images/xiao_1973.10.14.jpg</i>
										</li>

									<li>
									<a href="#p=89D94E0C3R710001" hidefocus="true"><img src="../images/xiao_1973.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1973年秋工作中的张茜</p>
									<i title="img">../images/1973.jpg</i>
									<i title="timg">../images/xiao_1973.jpg</i>
										</li>
									<li>
									<a href="#p=89D50UTU3R710001" hidefocus="true"><img src="../images/xiao_kunming.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1964年2月在昆明</p>
									<i title="img">../images/kunming.jpg</i>
									<i title="timg">../images/xiao_kunming.jpg</i>
										</li>
									<li>
									<a href="#p=89D5163H3R710001" hidefocus="true"><img src="../images/img/98x201209211358-1947-11.jpg"
									alt="" /></a>
									<h2></h2>
									<p>西柏坡。左起：聂荣臻、陈毅</p>
									<i title="img">../images/img/900x201209211358-1947-11.jpg</i>
									<i title="timg">../images/img/98x201209211358-1947-11.jpg</i>
										</li>
									<li>
									<a href="#p=89D50TTR3R710001" hidefocus="true"><img src="../images/img/98x201209211357-1949-10-1.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1949年10月1日开国大典</p>
									<i title="img">../images/img/900x201209211357-1949-10-1.jpg</i>
									<i title="timg">../images/img/98x201209211357-1949-10-1.jpg</i>
										</li>
									
									<li>
									<a href="#p=89D51E8G3R710001" hidefocus="true"><img src="../images/xiao_09.jpg"
									alt="" /></a>
									<h2></h2>
									<p>中年陈毅</p>
									<i title="img">../images/09.jpg</i>
									<i title="timg">../images/xiao_09.jpg</i>
										</li>
									
									<li>
									<a href="#p=89D50SV13R710001" hidefocus="true"><img src="../images/img/98x201209211355-1964-2.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1964年2月陪同宋庆龄、周恩来访问锡兰</p>
									<i title="img">../images/img/900x201209211355-1964-2.jpg</i>
									<i title="timg">../images/img/98x201209211355-1964-2.jpg</i>
										</li>
									<li>
									<a href="#p=89D51G7F3R710001" hidefocus="true"><img src="../images/img/98x201209211347-1967.jpg"
									alt=""/></a>
									<h2></h2>
									<p>1967年夏的陈毅</p>
									<i title="img">../images/img/900x201209211347-1967.jpg</i>
									<i title="timg">../images/img/98x201209211347-1967.jpg</i>
										</li>
									<li>
									<a href="#p=89D5185H3R710001" hidefocus="true"><img src="../images/img/98x201209211346-1970.jpg"
									alt=""/></a>
									<h2></h2>
									<p>1970年陈毅、张茜与其子女</p>
									<i title="img">../images/img/900x201209211346-1970.jpg</i>
									<i title="timg">../images/img/98x201209211346-1970.jpg</i>
										</li>
									 <li>
									<a href="#p=89D50VTV3R710001" hidefocus="true"><img src="../images/img/98x201209211344-1971-9.jpg"
									alt=""/></a>
									<h2></h2>
									<p>1971年9月北戴河与聂荣臻</p>
									<i title="img">../images/img/900x201209211344-1971-9.jpg</i>
									<i title="timg">../images/img/98x201209211344-1971-9.jpg</i>
										</li> 
									

									<li>
									<a href="#p=89D5141R3R710001" hidefocus="true"><img src="../images/img/98x201209211400.jpg"
									alt="" /></a>
									<h2></h2>
									<p>周恩来、邓颖超（中间站立者）、陈毅在漓江游船上</p>
									<i title="img">../images/img/900x201209211400.jpg</i>
									<i title="timg">../images/img/98x201209211400.jpg</i>
										</li>

									<li>
									<a href="#p=89D510SR3R710001" hidefocus="true"><img src="../images/img/98x201209211410-1929.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1929年上海与陈修和（左一）、陈孟熙（右一）</p>
									<i title="img">../images/img/900x201209211410-1929.jpg</i>
									<i title="timg">../images/img/98x201209211410-1929.jpg</i>
										</li>

									<li>
									<a href="#p=89D5123J3R710001" hidefocus="true"><img src="../images/img/98x201209211324-1960-5.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1960年5月与周恩来夫妇在广西阳朔。</p>
									<i title="img">../images/img/900x201209211324-1960-5.jpg</i>
									<i title="timg">../images/img/98x201209211324-1960-5.jpg</i>
										</li>

									<li>
									<a href="#p=89D5153K3R710001" hidefocus="true"><img src="../images/img/98x201209211322-1960-12.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1960年12月陈毅及其夫人张茜</p>
									<i title="img">../images/img/900x201209211322-1960-12.jpg</i>
									<i title="timg">../images/img/98x201209211322-1960-12.jpg</i>
										</li>
									<li>
									<a href="#p=89D51B3K3R710891" hidefocus="true"><img src="../images/img/98x201209211404.jpg"
									alt=""/></a>
									<h2></h2>
									<p>与罗瑞卿夫妇合影</p>
									<i title="img">../images/img/900x201209211404.jpg</i>
									<i title="timg">../images/img/98x201209211404.jpg</i>
										</li>

									<li>
									<a href="#p=89D5483K3R710891" hidefocus="true"><img src="../images/img/98x201209211401.jpg"
									alt=""/></a>
									<h2></h2>
									<p>与周恩来合影</p>
									<i title="img">../images/img/900x201209211401.jpg</i>
									<i title="timg">../images/img/98x201209211401.jpg</i>
										</li>

									<li>
									<a href="#p=89D54C5R3R710891" hidefocus="true"><img src="../images/img/98x201209211402.jpg"
									alt=""/></a>
									<h2></h2>
									<p>与项英（左一）合影</p>
									<i title="img">../images/img/900x201209211402.jpg</i>
									<i title="timg">../images/img/98x201209211402.jpg</i>
										</li>

									<li>
									<a href="#p=89D51B573R710001" hidefocus="true"><img src="../images/img/98x201209211051.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1938南昌</p>
									<i title="img">../images/img/900x201209211051.jpg</i>
									<i title="timg">../images/img/98x201209211051.jpg</i>
										</li>

									<li>
									<a href="#p=89D51HL23R710001" hidefocus="true"><img src="../images/img/98x21209211030.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1933年兴国与江西少先队总队长刘玉堂</p>
									<i title="img">../images/img/900x21209211030.jpg</i>
									<i title="timg">../images/img/98x21209211030.jpg</i>
										</li>

									<li>
									<a href="#p=89D5131F3R710001" hidefocus="true"><img src="../images/img/98x201209211348-1966.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1966年北京西山</p>
									<i title="img">../images/img/900x201209211348-1966.jpg</i>
									<i title="timg">../images/img/98x201209211348-1966.jpg</i>
										</li>

									<li>
									<a href="#p=89D517333R710001" hidefocus="true"><img src="../images/img/98x201209211349-1965-9.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1965年9月北京记者招待会</p>
									<i title="img">../images/img/900x201209211349-1965-9.jpg</i>
									<i title="timg">../images/img/98x201209211349-1965-9.jpg</i>
										</li>	
										
									<li>
									<a href="#p=89D517243R710001" hidefocus="true"><img src="../images/img/98x201209211403.jpg"
									alt="" /></a>
									<h2></h2>
									<p>与西哈努克亲王</p>
									<i title="img">../images/img/900x201209211403.jpg</i>
									<i title="timg">../images/img/98x201209211403.jpg</i>
										</li>

									<li>
									<a href="#p=89D5173RTR710001" hidefocus="true"><img src="../images/img/98x201209211327-1955.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1955年亚非会议期间与印度外长梅农</p>
									<i title="img">../images/img/900x201209211327-1955.jpg</i>
									<i title="timg">../images/img/98x201209211327-1955.jpg</i>
										</li>

									<li>
									<a href="#p=89D517333R710101" hidefocus="true"><img src="../images/img/98x201209211326-1956-10.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1956年10月中南海颐年堂。左起：毛泽东、宋庆龄、周恩来、陈毅。</p>
									<i title="img">../images/img/900x201209211326-1956-10.jpg</i>
									<i title="timg">../images/img/98x201209211326-1956-10.jpg</i>
										</li>
									
									<li>
									<a href="#p=89D517333R714501" hidefocus="true"><img src="../images/img/98x201209211353-1964.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1964年访问埃及</p>
									<i title="img">../images/img/900x201209211353-1964.jpg</i>
									<i title="timg">../images/img/98x201209211353-1964.jpg</i>
										</li>
									
									<li>
									<a href="#p=89D517333R711000" hidefocus="true"><img src="../images/img/98x201209240905.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1958年7月，陈毅父母、陈毅和张茜及其子女等在中南海庆云堂家中</p>
									<i title="img">../images/img/900x201209240905.jpg</i>
									<i title="timg">../images/img/98x201209240905.jpg</i>
										</li>
									
									<li>
									<a href="#p=89D517333R867001" hidefocus="true"><img src="../images/img/98x201209240904-1958-7.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1958年7月中南海庆云堂</p>
									<i title="img">../images/img/900x201209240904-1958-7.jpg</i>
									<i title="timg">../images/img/98x201209240904-1958-7.jpg</i>
										</li>
									
									<li>
									<a href="#p=89D7653R867001" hidefocus="true"><img src="../images/img/98x201209240902-1964-2.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1964年2月在成都</p>
									<i title="img">../images/img/900x201209240902-1964-2.jpg</i>
									<i title="timg">../images/img/98x201209240902-1964-2.jpg</i>
										</li>

									<li>
									<a href="#p=8ED517333R867001" hidefocus="true"><img src="../images/img/98x201209240854.jpg"
									alt="" /></a>
									<h2></h2>
									<p>全家合影</p>
									<i title="img">../images/img/900x201209240854.jpg</i>
									<i title="timg">../images/img/98x201209240854.jpg</i>
										</li>

									<li>
									<a href="#p=S9D5A7333R867001" hidefocus="true"><img src="../images/img/98x2012092409011972-3-12.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1972年3月12日在北京前永康家中</p>
									<i title="img">../images/img/900x2012092409011972-3-12.jpg</i>
									<i title="timg">../images/img/98x2012092409011972-3-12.jpg</i>
										</li>

									<li>
									<a href="#p=Q9D537333R767001" hidefocus="true"><img src="../images/img/98x201209240859-1974.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1974年在北京西郊程家花园家中</p>
									<i title="img">../images/img/900x201209240859-1974.jpg</i>
									<i title="timg">../images/img/98x201209240859-1974.jpg</i>
										</li>

									<li>
									<a href="#p=89D5173R3R867001" hidefocus="true"><img src="../images/img/98x201209240906-1954.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1954年在青岛</p>
									<i title="img">../images/img/900x201209240906-1954.jpg</i>
									<i title="timg">../images/img/98x201209240906-1954.jpg</i>
										</li>

									<li>
									<a href="#p=89D5137F3R867001" hidefocus="true"><img src="../images/img/98x201209240909.jpg"
									alt="" /></a>
									<h2></h2>
									<p>1950年秋在上海</p>
									<i title="img">../images/img/900x201209240909.jpg</i>
									<i title="timg">../images/img/98x201209240909.jpg</i>
										</li>
									<li>

									<a href="#p=89D5137F3R867002" hidefocus="true"><img src="../images/img/98x20131031-0001.jpg"
									alt="" /></a>
									<h2></h2>
									<p>晋祠</p>
									<i title="img">../images/img/900x20131031-0001.jpg</i>
									<i title="timg">../images/img/98x20131031-0001.jpg</i>
										</li>
									<li>
									<a href="#p=89D5137F3R867003" hidefocus="true"><img src="../images/img/98x20131031-0002.jpg"
									alt="" /></a>
									<h2></h2>
									<p>铜像</p>
									<i title="img">../images/img/900x20131031-0002.jpg</i>
									<i title="timg">../images/img/98x20131031-0002.jpg</i>
										</li>
									<li>
									<a href="#p=89D5137F3R867004" hidefocus="true"><img src="../images/img/98x20131031-0003.jpg"
									alt="" /></a>
									<h2></h2>
									<p>衡山电影院是新中国时期上海新建的第一家电影院，由时任上海市市长陈毅题写院名。</p>
									<i title="img">../images/img/900x20131031-0003.jpg</i>
									<i title="timg">../images/img/98x20131031-0003.jpg</i>
										</li>
									<li>
									<a href="#p=89D5137F3R867005" hidefocus="true"><img src="../images/img/98x20131031-0004.jpg"
									alt="" /></a>
									<h2></h2>
									<p>衡山电影院说明</p>
									<i title="img">../images/img/900x20131031-0004.jpg</i>
									<i title="timg">../images/img/98x20131031-0004.jpg</i>
										</li>
									<li>
									<a href="#p=89D5137F3R867006" hidefocus="true"><img src="../images/img/98x20131031-0005.jpg"
									alt="" /></a>
									<h2></h2>
									<p>渡江第一船</p>
									<i title="img">../images/img/900x20131031-0005.jpg</i>
									<i title="timg">../images/img/98x20131031-0005.jpg</i>
										</li>
									
									<li>
									<a href="#p=89D967JV3R710001" hidefocus="true"><img src="../images/img/98x201209240857.jpg"
									alt="更多内容" /></a>
									<h2></h2>
									<p>更多内容 >>><a href="../">[详细]</a></p>
									<i title="img">../images/img/900x201209240857.jpg</i>
									<i title="timg">../images/img/98x201209240857.jpg</i>
										</li>
									
								</textarea>
							<div id="galleryTpl" class="hidden">
								<div title="stream">
									<!--
									<ul class="nph_list_stream clearfix">
									<#
									for(var i = 0, len = stream.length; i < len; i++){
									#>
									<li>
									<div><a href="#p=<#=stream[i].id#>"><i></i><img src="<#=stream[i].timg#>" /></a></div>
									<h3><a href="#p=<#=stream[i].id#>" title="<#=stream[i].title#>"><#=stream[i].title.slice(0,26)#></a></h3>
									</li>
									<#
									}
									#>
									</ul>
									<div class="nph_pages clearfix">
									<#
									if(page <= 1){
									#>
									<span class="nph_pages_turn">上一页</span>
									<#
									} else {
									#>
									<a href="#q=<#=page-1#>" class="nph_pages_turn">上一页</a>
									<#
									}
									var before = true, behind = true;
									for(var i = 1, len = total; i <= len; i++){
									if((page <= 5 && i <= 7) || (page > 5 && page <= len - 5 && i > page - 3 && i < page + 3) || (page > len - 5 && i > len - 7) || i == 1 || i == len){
									if(page == i){
									#>
									<span class="nph_pages_active"><#=i#></span>
									<#
									} else {
									#>
									<a href="#q=<#=i#>"><#=i#></a>
									<#
									}
									} else {
									if(before && i < page){
									#>
									……
									<#
									before = false;
									}
									if(behind && i > page){
									#>
									……
									<#
									behind = false;
									}
									}
									}
									if(page >= total){
									#>
									<span class="nph_pages_turn">下一页</span>
									<#
									} else {
									#>
									<a href="#q=<#=page+1#>" class="nph_pages_turn">下一页</a>
									<#
									}
									#>
									</div>
									-->
								</div>
								<div title="search">
									<!--
									<ul class="nph_list_stream clearfix">
									<#
									for(var i = 0, len = stream.length; i < len; i++){
									#>
									<li>
									<div><a href="<#=stream[i].pageurl#>"><i></i><img src="<#=stream[i].imgsrc#>" /></a></div>
									<h3><a href="<#=stream[i].pageurl#>" title="<#=stream[i].title#>"><#=stream[i].title.slice(0, 13)#></a></h3>
									<p><#=stream[i].ptime#></p>
									</li>
									<#
									}
									#>
									</ul>
									<div class="nph_pages clearfix">
									<#
									if(page <= 1){
									#>
									<span class="nph_pages_turn">上一页</span>
									<#
									} else {
									#>
									<a href="#s=<#=q#>&q=<#=page-1#>" class="nph_pages_turn">上一页</a>
									<#
									}
									var before = true, behind = true;
									for(var i = 1, len = total; i <= len; i++){
									if((page <= 5 && i <= 7) || (page > 5 && page <= len - 5 && i > page - 3 && i < page + 3) || (page > len - 5 && i > len - 7) || i == 1 || i == len){
									if(page == i){
									#>
									<span class="nph_pages_active"><#=i#></span>
									<#
									} else {
									#>
									<a href="#s=<#=q#>&q=<#=i#>"><#=i#></a>
									<#
									}
									} else {
									if(before && i < page){
									#>
									……
									<#
									before = false;
									}
									if(behind && i > page){
									#>
									……
									<#
									behind = false;
									}
									}
									}
									if(page >= total){
									#>
									<span class="nph_pages_turn">下一页</span>
									<#
									} else {
									#>
									<a href="#s=<#=q#>&q=<#=page+1#>" class="nph_pages_turn">下一页</a>
									<#
									}
									#>
									</div>
									-->
								</div>
							</div>
							</div>
							</div>
							<div id="galleryRelat">
							<script type="text/javascript" src="../script/ntes_jslib_1.x.js"></script> 
							<script type="text/javascript">//<![CDATA[
							(function($) {
								var replyCount = 239,
									totalCount = 3225,
									totalElem = $("span.tieTotalCount, strong.tieTotalCount");

								(totalElem.length < 3) && (replyCount = totalCount);
								totalElem.attr("innerHTML", totalCount);
								$("span.tieCount, strong.tieCount").attr("innerHTML", replyCount);
								$("#replycounttop, #replycount001, #replycountbottom").attr("innerHTML", replyCount);
							})(NTES);
							//]]></script>
							</div>

							<script type="text/javascript" language="javascript" src="../script/ntes_jslib_ui_0.x.js" charset="utf-8"></script>
							<script type="text/javascript" language="javascript" src="../script/ntes_ui_scroll.js" charset="utf-8"></script>
							<script type="text/javascript" language="javascript" src="../script/nph_gallery_2.13.js" charset="utf-8"></script>
							<script type="text/javascript">
								NTES.ready(function ($) {
									var nphLayoutGG = $('#nphLayoutGG');
									if (nphLayoutGG) {
										nphLayoutGG.addCss({ display: 'block', position: 'absolute', left: 0, top: '10px', width: '280px', height: '210px' });
										$('#photomiddle').addCss({display: 'block', width: '564px', marginLeft: '-282px' });
										$('#photomiddle').appendChild(nphLayoutGG);
										new nph.Gallery({ photoViewMode: 2 });
									} else {
										new nph.Gallery({ photoViewMode: 0 });
								}
								var tieCountNode = NTES.one('#tieArea span.tieTotalCount') || NTES.one('#tieArea span.tieCount');
								if (tieCountNode) {
									$('#tieCount').innerHTML = String.format('(%1)', tieCountNode.innerHTML);
								}
								/*按键提示层*/
								nph.popinit = function(){
									var nhp_poparea = $('#nhp_poparea');
									var getcookie = NTES.cookie.get("nphStorage");
									if(getcookie == 'tips'){
										$("#nhp_poparea").addCss({display:'none'});
									}else{
										if(nhp_poparea){
											$("#nhp_poparea").addCss({display:'block'});
											setTimeout(function(){$("#nhp_poparea").addCss({display:'none'});},10000);
											nhp_poparea.$(".nhp_pclose").addEvent('click',function(ev){
												ev.preventDefault();
												nph.hide(nhp_poparea);
												NTES.cookie.set("nphStorage", "tips" , "1M" );
											});
										}
									}
								}
								nph.popinit();
								});
							</script>
							</div>



						<!--  -->
					</div>
				</div>
			 </div>
			 <div class="aboutFooter">
				<!-- <img src="../images/bottom-bg.jpg"> -->
			</div>
		</div>
		
	<!-- foot部分 -->
		<?php include '../include/footer.php'; ?>
	</div>
 </BODY>
</HTML>
