<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="format-detection" content="telephone=no">
<title>用户登录-安居客</title>
<meta name="baidu-site-verification" content="e8abd676df9f995bc969ac138b1c0f4d">
<meta name="sogou_site_verification" content="7rtgKfBjbl">
<meta name="360-site-verification" content="f7b8b308108b2c1c2de2825948822256">
<meta name="google-site-verification" content="drkSj5A3WGSgkMXwzh6UfezwLEMsEXoQlMHL25oE1kA">
<meta baidu-gxt-verify-token="9e7961d9a5d01603e5c2ae9bccffb9c2">
<meta name="shenma-site-verification" content="da9c53da88979ec98afae25b1ca3e43b">
<!--start-->
<link rel="stylesheet" rev="stylesheet" href="/house/Public/style/login_files/Member_Web_User_Login.css" type="text/css">
<!--end-->
<script async="" src="/house/Public/style/login_files/analytics.js"></script><script type="text/javascript" async="" src="/house/Public/style/login_files/mba.js"></script><script type="text/javascript" async="" src="/house/Public/style/login_files/s.js"></script><script type="text/javascript">var PAGESTART = +new Date(); var PHPVERSION = '2016_39_02';</script>

<script type="text/javascript" src="/house/Public/style/login_files/367495f57838abce4219f3a5d6fa2c1f.js"></script><link type="text/css" rel="stylesheet" href="/house/Public/style/login_files/367495f57838abce4219f3a5d6fa2c1f.css">
<!-- <script type="text/javascript" src="http://include.aifcdn.com/ujs/chat.opener/367495f57838abce4219f3a5d6fa2c1f.js" crossorigin></script> -->
<script type="text/javascript">J.site.init()</script>
<!-- -->

<link rel="icon" href="http://pages.ajkcdn.com/site/img/global/1/favicon.ico" type="image/ico">
<link rel="shortcut icon" href="http://pages.ajkcdn.com/site/img/global/1/favicon.ico">

<script type="text/javascript" src="/house/Public/style/login_files/367495f57838abce4219f3a5d6fa2c1f_002.js" async="" charset="utf-8"></script><link type="text/css" rel="stylesheet" href="/house/Public/style/login_files/367495f57838abce4219f3a5d6fa2c1f_002.css"><script type="text/javascript" src="/house/Public/style/login_files/hm.js" async="" charset="utf-8"></script><script type="text/javascript" src="/house/Public/style/login_files/performance.js" async="" charset="utf-8"></script><div><iframe style="display:none" id="sojtracker0" name="sojtracker0" height="300" width="500"></iframe></div><form action="http://s.anjuke.com/stb?__site=anjuke-npv&amp;" method="post" target="sojtracker0"><input name="p" value="Member_Web_User_LoginPage_tracklog" type="hidden"><input name="h" value="http://user.anjuke.com/my/login" type="hidden"><input name="r" value="http://user.anjuke.com/register/" type="hidden"><input name="site" value="anjuke-npv" type="hidden"><input name="guid" value="EBE8F658-D338-AF39-D02C-403ECCBD47BB" type="hidden"><input name="ssid" value="04102A96-B80C-9B33-13F0-B2A7F540189B" type="hidden"><input name="uid" value="0" type="hidden"><input name="t" value="1475151485270" type="hidden"><input name="ctid" value="14" type="hidden"><input name="luid" value="" type="hidden"><input name="m" value="" type="hidden"><input name="pn" value="Member_Web_User_LoginPage_tracklog" type="hidden"></form></head>
<body data-page="Member_Web_User_LoginPage">
<div id="container">
    <div id="header">
        <div class="user-nav">
    <a class="logo-link" href="http://anjuke.com/"><i class="ajk-icon user-iconfont"></i></a>
    <a style="display: none" href="" class="user-register"><i class="broker-icon user-iconfont"></i><span class="register-txt">经纪人注册</span></a>
</div>    </div>
    <div id="content" style="width: 1349px;">
        <i class="login-top"></i>
<div class="wrap">
    <div class="wel-login">
	<p class="wel-login-title">欢迎登录安居客</p>
	<div class="wel-login-content">
		<div class="login-panel">
    	<div class="login-title">
        		<a class="cur-font" href="javascript:void(0);">账号密码登录</a>
        		<i class="title-split"></i>
        		<a href="javascript:void(0);">手机验证码登录</a>

        	</div>

    	<div class="l-pos curr-title"><i class="user-iconfont"></i></div>

    	<!-- 帐号密码登录 -->



        <form id="account-login" class="account-login validate_def" method="post">

                <div class="input-box" style="margin-top:30px;_width:345px;">

                        <i class="user-iconfont"></i>

                        <input class="account-name" placeholder="手机号/邮箱/用户名" maxlength="60" data-validate="require$&lt;i class='user-iconfont'&gt;&lt;/i&gt;请输入手机号/邮箱/用户名" type="text">

                    <p class="" id=""></p></div>

                <!--<p class="error-tip"><i class="user-iconfont">&#xe60f;</i>请输入手机号/邮箱/用户名</p>-->

                <div class="input-box">

                        <i class="user-iconfont"></i>

                       <input class="account-pwd" placeholder="密码" maxlength="32" data-validate="require$&lt;i class='user-iconfont'&gt;&lt;/i&gt;请输入密码" type="password">

                    <p class="" id=""></p></div>

                <!--<p class="error-tip"><i class="user-iconfont">&#xe60f;</i>帐号或密码不正确</p>-->

                <div class="input-box account-img" style="display: none">

                        <i class="user-iconfont"></i>

                        <input id="accountCode" class="code" placeholder="请输入图片字符" type="text">

                        <i class="user-iconfont ok-tip" style="display: none"></i>

                        <img src="/house/Public/style/login_files/captcha.jpg">

                        <i class="user-iconfont refresh"></i>

                        <p id="code-tip" class="check-tip" style="display: none"><i class="user-iconfont"></i>图片字符错误</p>

                    </div>



                <p id="check-tip" class="check-tip" style="display: none"><i class="user-iconfont"></i>帐号或密码不正确</p>

               <div class="account-other">

                        <label><input id="account-remember" checked="checked" value="记住我" type="checkbox">记住我</label>

                        <a target="_blank" href="http://user.anjuke.com/pass?type=forget">忘记密码？</a>

                    </div>

                <input id="accountSubmit" class="submit-btn" value="登   录" type="submit">

                <p id="check-tip-login-more" class="check-tip check-tip-login-more" style="display: none"><i class="user-iconfont"></i>错误次数超过上限，请一小时后再试。</p>

            </form>



        <!-- 手机验证码登录 -->

        <form id="phone-login" class="phone-login validate_def" method="post" style="display: none;">

                <div class="input-box phone-name">

                        <i class="user-iconfont"></i>

                        <input id="phoneNum" maxlength="11" placeholder="请输入手机号" data-validate="require$&lt;i class='user-iconfont'&gt;&lt;/i&gt;请输入手机号$$custom$&lt;i class='user-iconfont'&gt;&lt;/i&gt;请输入正确的手机号$$event$blur|checkPhoneNum" type="text">

                    <p class="" id=""></p></div>

               <!-- <p class="error-tip"><i class="user-iconfont">&#xe60f;</i>请输入手机号</p>-->



               <div class="box-wrap">

                      <div id="img-pcode-box" class="code-box l-box">

                              <div class="input-box account-img">

                                       <i class="user-iconfont"></i>

                                      <input id="imgCode" readonly="readonly" class="code" event="false" maxlength="4" placeholder="请输入图片字符" type="text">

                                      <i class="user-iconfont ok-tip" style="display: none"></i>

                                       <img src="/house/Public/style/login_files/captcha.jpg">

                                      <i class="user-iconfont refresh"></i>

                                   </div>

                              <!--<p class="error-tip"><i class="user-iconfont">&#xe60f;</i>请输入图片字符</p>   require$&lt;i class='user-iconfont'&gt;&#xe60f;&lt;/i&gt;请输入图片字符-->



                              <div id="phone-code" class="input-box account-img" style="display: none">

                                      <i class="user-iconfont"></i>

                                      <input id="phoneCode" class="code" maxlength="6" placeholder="请输入验证码" type="text">

                                       <a href="javascript:void(0);" event="false" class="code-btn disable-btn"><em>59</em>秒后重新发送</a>

                                      <p style="display: none"></p>

                                      <p id="pcode-tip"></p>

                                  </div>

                          </div>

           </div>


           <!--<p class="info-tip"><i class="user-iconfont">&#xe60f;</i>验证码已发送至您手机，请查收！</p>-->

        <input id="phone-submit" class="submit-btn" value="登   录" type="submit">
   </form>
</div>


		<div class="third-login">
	<p class="login-title">合作帐号登录：</p>
	<div class="login-icon">
		<a href="http://member.anjuke.com/extlogin/?sid=anjuke&amp;url=&amp;pagetype=login&amp;logintype=qq&amp;from=Site_Other"><i class="qq-icon user-iconfont"></i></a>
		<a href="http://member.anjuke.com/extlogin/?sid=anjuke&amp;url=&amp;pagetype=login&amp;logintype=weibo&amp;from=Site_Other"><i class="sina-icon user-iconfont"></i></a>
		<a href="http://member.anjuke.com/extlogin/?sid=anjuke&amp;url=&amp;pagetype=login&amp;logintype=weixin&amp;from=Site_Other"><i class="weixin-icon user-iconfont"></i></a>
	</div>
        <div class="register">
        <p class="login-txt">没有帐号？</p>
        <a href="/house/index.php/Home/Login/register" class="login-operate">立即注册</a>
    </div>
    </div>	</div>
</div></div>
    </div>
    <div style="clear:both;"></div>
    <div id="footer">
        <div style="clear:left;"></div>
<div id="topic" style="text-align:center;padding-top:16px;border-top:1px #E0E0E0 solid; color: #666">
    <span class="link_span"><a href="http://beijing.anjuke.com/help/question/1" rel="nofollow">关于安居客</a></span>|
    <span class="link_span"><a href="http://job.anjuke.com/" rel="nofollow">人才招聘</a></span>|
    <span class="link_span"><a href="http://beijing.anjuke.com/help/question/4" rel="nofollow">联系我们</a></span>|
    <span class="link_span"><a href="http://beijing.anjuke.com/help/question/7" rel="nofollow">用户协议</a></span>|
    <!-- <span class="link_span"><a href="http://beijing.anjuke.com/help" rel="nofollow">使用帮助</a></span>| -->
    <span class="link_span"><a href="http://beijing.anjuke.com/friendlink" rel="nofollow">友情链接</a></span>|
    <span class="link_span"><a href="javascript:void(0);" id="show_map_list">网站地图</a></span>|
    <span class="link_span"><a href="javascript:;" id="show_city_list" rel="nofollow">其它城市</a></span>|
    <span class="link_span"><a href="javascript:void(0);" id="show_house_list">最新房源</a></span>|
    <span class="link_span"><a href="javascript:void(0);" id="show_commm_list">小区大全</a></span>|
    <span class="link_span"><a href="http://beijing.anjuke.com/wenti/">最新问答</a></span>|
    <span class="link_span"><a href="http://www.anjuke.com/calculator/loan" target="_blank">房贷计算器</a></span>|
    <span class="link_span"><a href="http://www.zx110.org/cxs/index.html" target="_blank" rel="nofollow">放心搜</a></span>|
    <span class="link_span"><a href="http://about.anjuke.com/chanpin/?from=home_foot_tgy" target="_blank" rel="nofollow">产品推广</a></span></div>
<div style="clear:left;"></div>
<div id="city_list" style="display:none;">
    <ul>
                    <li><a href="http://shanghai.anjuke.com/">上海房产网</a></li>
                    <li><a href="http://shanghai.anjuke.com/sale/">上海二手房</a></li>
                    <li><a href="http://guangzhou.anjuke.com/">广州房产网</a></li>
                    <li><a href="http://guangzhou.anjuke.com/sale/">广州二手房</a></li>
                    <li><a href="http://shenzhen.anjuke.com/">深圳房产网</a></li>
                    <li><a href="http://shenzhen.anjuke.com/sale/">深圳二手房</a></li>
                    <li><a href="http://beijing.anjuke.com/">北京房产网</a></li>
                    <li><a href="http://beijing.anjuke.com/sale/">北京二手房</a></li>
                    <li><a href="http://chengdu.anjuke.com/">成都房产网</a></li>
                    <li><a href="http://chengdu.anjuke.com/sale/">成都二手房</a></li>
                    <li><a href="http://nanjing.anjuke.com/">南京房产网</a></li>
                    <li><a href="http://nanjing.anjuke.com/sale/">南京二手房</a></li>
                    <li><a href="http://tianjin.anjuke.com/">天津房产网</a></li>
                    <li><a href="http://tianjin.anjuke.com/sale/">天津二手房</a></li>
                    <li><a href="http://hangzhou.anjuke.com/">杭州房产网</a></li>
                    <li><a href="http://hangzhou.anjuke.com/sale/">杭州二手房</a></li>
                    <li><a href="http://suzhou.anjuke.com/">苏州房产网</a></li>
                    <li><a href="http://suzhou.anjuke.com/sale/">苏州二手房</a></li>
                    <li><a href="http://chongqing.anjuke.com/">重庆房产网</a></li>
                    <li><a href="http://chongqing.anjuke.com/sale/">重庆二手房</a></li>
                    <li><a href="http://m.anjuke.com/bj/">北京房地产信息网</a></li>
                    <li><a href="http://m.anjuke.com/bj/">北京房网</a></li>
                    <li><a href="http://m.anjuke.com/cd/">成都房产信息网</a></li>
                    <li><a href="http://m.anjuke.com/cq/">重庆房产信息网</a></li>
                    <li><a href="http://m.anjuke.com/cs/">长沙房地产信息</a></li>
                    <li><a href="http://m.anjuke.com/dl/">大连房产</a></li>
                    <li><a href="http://m.anjuke.com/gz/">广州房产信息网</a></li>
                    <li><a href="http://m.anjuke.com/hai/">海口房产信息</a></li>
                    <li><a href="http://m.anjuke.com/hui/">惠州房产</a></li>
                    <li><a href="http://m.anjuke.com/hz/">杭州房地产信息网</a></li>
                    <li><a href="http://m.anjuke.com/qd/">青岛市房产网</a></li>
                    <li><a href="http://m.anjuke.com/sh/">上海房产交易网站</a></li>
                    <li><a href="http://m.anjuke.com/sjz/">石家庄地产</a></li>
                    <li><a href="http://m.anjuke.com/su/">苏州房产信息网</a></li>
                    <li><a href="http://m.anjuke.com/sy/">三亚房产信息网</a></li>
                    <li><a href="http://m.anjuke.com/sz/">深圳房地产网</a></li>
                    <li><a href="http://m.anjuke.com/tj/">天津房子</a></li>
                    <li><a href="http://m.anjuke.com/wh/">武汉市房地产</a></li>
                    <li><a href="http://m.anjuke.com/xm/">厦门房地产</a></li>
                    <li><a href="http://m.anjuke.com/zh/">珠海市房地产信息网</a></li>
                    <li><a href="http://m.anjuke.com/zh/">珠海买房网</a></li>
                    <li><a href="http://m.anjuke.com/zz/">郑州房子</a></li>
                    <li><a href="http://m.anjuke.com/bj/xinfang/">北京新房</a></li>
                    <li><a href="http://m.anjuke.com/cd/xinfang/">成都楼盘信息</a></li>
                    <li><a href="http://m.anjuke.com/cs/xinfang/">长沙新房</a></li>
                    <li><a href="http://m.anjuke.com/dl/xinfang/">大连在售楼盘</a></li>
                    <li><a href="http://m.anjuke.com/gz/xinfang/">最新广州楼盘</a></li>
                    <li><a href="http://m.anjuke.com/hui/xinfang/">惠州楼盘</a></li>
                    <li><a href="http://m.anjuke.com/zhang/xinfang/">杭州新房</a></li>
                    <li><a href="http://m.anjuke.com/qd/xinfang/">青岛在售楼盘</a></li>
                    <li><a href="http://m.anjuke.com/sh/xinfang/">上海楼盘</a></li>
                    <li><a href="http://m.anjuke.com/sh/xinfang/">上海市新房</a></li>
                    <li><a href="http://m.anjuke.com/su/xinfang/">苏州新房网</a></li>
                    <li><a href="http://m.anjuke.com/su/xinfang/">苏州新楼盘</a></li>
                    <li><a href="http://m.anjuke.com/sy/xinfang/">三亚新房楼盘信息</a></li>
                    <li><a href="http://m.anjuke.com/sz/xinfang/">深圳新房开盘</a></li>
                    <li><a href="http://m.anjuke.com/tj/xinfang/">天津好楼盘</a></li>
                    <li><a href="http://m.anjuke.com/zz/xinfang/">郑州新开楼盘信息</a></li>
                    <li><a href="http://m.anjuke.com/bj/sale/">北京二手房网</a></li>
                    <li><a href="http://m.anjuke.com/cd/sale/">成都二手房出售</a></li>
                    <li><a href="http://m.anjuke.com/cs/sale/">重庆二手房出售</a></li>
                    <li><a href="http://m.anjuke.com/cs/sale/">长沙二手房出售</a></li>
                    <li><a href="http://m.anjuke.com/dl/sale/">大连二手房出售信息</a></li>
                    <li><a href="http://m.anjuke.com/gz/sale/">广州二手房房源</a></li>
                    <li><a href="http://m.anjuke.com/hai/sale/">海口二手房出售</a></li>
                    <li><a href="http://m.anjuke.com/hui/sale/">惠州二手房出售</a></li>
                    <li><a href="http://m.anjuke.com/hz/sale/">杭州市二手房出售</a></li>
                    <li><a href="http://m.anjuke.com/qd/sale/">青岛二手房出售</a></li>
                    <li><a href="http://m.anjuke.com/sh/sale/">上海二手房买卖</a></li>
                    <li><a href="http://m.anjuke.com/sh/sale/">上海二手房转让</a></li>
                    <li><a href="http://m.anjuke.com/sh/sale/">上海房屋出售</a></li>
                    <li><a href="http://m.anjuke.com/sjz/sale/">石家庄二手房</a></li>
                    <li><a href="http://m.anjuke.com/su/sale/">苏州二手房房源</a></li>
                    <li><a href="http://m.anjuke.com/su/sale/">苏州房屋出售</a></li>
                    <li><a href="http://m.anjuke.com/sy/sale/">三亚二手房出售房源</a></li>
                    <li><a href="http://m.anjuke.com/sz/sale/">深圳二手房出售信息</a></li>
                    <li><a href="http://m.anjuke.com/tj/sale/">天津二手房屋</a></li>
                    <li><a href="http://m.anjuke.com/tj/sale/">天津房屋出售信息</a></li>
                    <li><a href="http://m.anjuke.com/tj/sale/">天津市二手房出售</a></li>
                    <li><a href="http://m.anjuke.com/wh/sale/">武汉市二手房源出售</a></li>
                    <li><a href="http://m.anjuke.com/xm/sale/">厦门二手房出售信息</a></li>
                    <li><a href="http://m.anjuke.com/xm/sale/">厦门二手房交易网</a></li>
                    <li><a href="http://m.anjuke.com/zh/sale/">珠海市二手房出售房屋信息</a></li>
                    <li><a href="http://m.anjuke.com/zh/sale/">珠海市房屋出售信息</a></li>
                    <li><a href="http://m.anjuke.com/zz/sale/">郑州二手房出售</a></li>
                    <li><a href="http://m.anjuke.com/zz/sale/">郑州二手房交易网</a></li>
                    <li><a href="http://m.anjuke.com/bj/mapproperty/sale/">北京市地图找房</a></li>
                    <li><a href="http://m.anjuke.com/cs/mapproperty/sale/">长沙地图找房</a></li>
                    <li><a href="http://m.anjuke.com/dl/mapproperty/sale/">大连房价地图</a></li>
                    <li><a href="http://m.anjuke.com/gz/mapproperty/sale/">广州房产地图</a></li>
                    <li><a href="http://m.anjuke.com/hui/mapproperty/sale/">惠州楼盘地图</a></li>
                    <li><a href="http://m.anjuke.com/xm/mapproperty/sale/">厦门地图找房</a></li>
                    <li><a href="http://m.anjuke.com/bj/taofang/quyufang/">北京市新房价格</a></li>
                    <li><a href="http://m.anjuke.com/cs/taofang/quyufang/">长沙市房价走势</a></li>
                    <li><a href="http://m.anjuke.com/dl/taofang/quyufang/">大连 房价走势</a></li>
                    <li><a href="http://m.anjuke.com/hui/taofang/quyufang/">惠州房价走势</a></li>
                    <li><a href="http://m.anjuke.com/sh/taofang/quyufang/">上海房价走势</a></li>
                    <li><a href="http://m.anjuke.com/su/taofang/quyufang/">苏州房价走势</a></li>
                    <li><a href="http://m.anjuke.com/sz/taofang/quyufang/">深圳市的房价</a></li>
                    <li><a href="http://m.anjuke.com/bj/trendency/">北京房价</a></li>
                    <li><a href="http://m.anjuke.com/cq/trendency/">重庆房价</a></li>
                    <li><a href="http://m.anjuke.com/cs/trendency/">长沙市的房价</a></li>
                    <li><a href="http://m.anjuke.com/dl/trendency/">大连房价</a></li>
                    <li><a href="http://m.anjuke.com/gz/trendency/">广州房价走势</a></li>
                    <li><a href="http://m.anjuke.com/hai/trendency/">海口市房价</a></li>
                    <li><a href="http://m.anjuke.com/hz/trendency/">杭州二手房价格</a></li>
                    <li><a href="http://m.anjuke.com/qd/trendency/">青岛市最新房价</a></li>
                    <li><a href="http://m.anjuke.com/sh/trendency/">上海房价</a></li>
                    <li><a href="http://m.anjuke.com/sjz/trendency/">石家庄房屋价格</a></li>
                    <li><a href="http://m.anjuke.com/su/trendency/">苏州房价预测</a></li>
                    <li><a href="http://m.anjuke.com/sy/trendency/">三亚二手房价格走势</a></li>
                    <li><a href="http://m.anjuke.com/sz/trendency/">深圳房价网</a></li>
                    <li><a href="http://m.anjuke.com/tj/trendency/">天津市房价走势图</a></li>
                    <li><a href="http://m.anjuke.com/xm/trendency/">厦门市房价</a></li>
                    <li><a href="http://m.anjuke.com/zh/trendency/">珠海目前房价</a></li>
                    <li><a href="http://m.anjuke.com/zz/trendency/">郑州市楼价</a></li>
                    <li><a href="http://m.anjuke.com/cs/community/">长沙楼价</a></li>
                    <li><a href="http://m.anjuke.com/bj/loupan/haidian/">北京海淀区新房</a></li>
                    <li><a href="http://m.anjuke.com/bj/esf/fang-beijingdudongbi-d358/">北京独栋别墅</a></li>
                    <li><a href="http://m.anjuke.com/bj/esf/fang-beijingbieshu-d357/">北京别墅价格</a></li>
            </ul>
</div>
<div id="comm_list" style="display:none;">
    <ul>
                <li><a href="http://m.anjuke.com/bj/xiaoqu/" target="_blank">手机版小区大全</a></li>
        <li><a href="http://www.anjuke.com/beijing/cm/" target="_blank">二手房小区大全</a></li>
        <li><a href="http://www.anjuke.com/beijing/cm-zu/" target="_blank">租房小区大全</a></li>
            </ul>
</div>
<div id="map_list" style="display:none">
    <ul>
                <li><a href="http://m.anjuke.com/bj/sitemap/" target="_blank">手机版二手房地图</a></li>
                        <li><a href="http://m.anjuke.com/bj/xinfang/sitemap/" target="_blank">手机版新房地图</a></li>
        
                     <li><a href="http://beijing.anjuke.com/sitemap/" target="_blank">二手房地图</a></li>
                         <li><a href="http://bj.fang.anjuke.com/fangsitemap/" target="_blank">新房地图</a></li>
            </ul>
</div>

<div id="house_list" style="display:none">
    <ul>
                <li><a href="http://beijing.anjuke.com/fang/" target="_blank">二手房</a></li>
                
        <li><a href="http://bj.fang.anjuke.com/fang/" target="_blank">新房</a></li>

                        <li><a href="http://bj.zu.anjuke.com/fang/" target="_blank">租房</a></li>
                        <li><a href="http://bj.xzl.anjuke.com/fang_zu/" target="_blank">写字楼出租</a></li>
        <li><a href="http://bj.xzl.anjuke.com/fang_shou/" target="_blank">写字楼出售</a></li>
                         <li><a href="http://bj.sp.anjuke.com/fang_zu/" target="_blank">商铺出租</a></li>
        <li><a href="http://bj.sp.anjuke.com/fang_shou/" target="_blank">商铺出售</a></li>
        
                 <li><a href="http://m.anjuke.com/bj/propsitemap/esf/" target="_blank">手机版二手房</a></li>
        <li><a href="http://m.anjuke.com/bj/propsitemap/zf/" target="_blank">手机版租房</a></li>
            </ul>
</div>

<div id="map_list" style="display:none">
    <ul>
        <li><a href="http://m.anjuke.com/bj/sitemap/" target="_blank">手机版二手房地图</a></li>
        <li><a href="http://m.anjuke.com/bj/xinfang/sitemap/" target="_blank">手机版新房地图</a></li>
        <li><a href="http://beijing.anjuke.com/sitemap/" target="_blank">二手房地图</a></li>
        <li><a href="http://bj.fang.anjuke.com/fangsitemap/" target="_blank">新房地图</a></li>
                    <li><a href="http://beijing.anjuke.com/sitemap/" target="_blank">新房楼盘大全</a></li>
            </ul>
</div>

<div id="house_list" style="display:none">
    <ul>
        <li><a href="http://beijing.anjuke.com/fang/" target="_blank">二手房</a></li>
        <li><a href="http://bj.fang.anjuke.com/fang/" target="_blank">新房</a></li>
        <li><a href="http://bj.zu.anjuke.com/fang/" target="_blank">租房</a></li>
        <li><a href="http://bj.xzl.anjuke.com/fang_zu/" target="_blank">写字楼出租</a></li>
        <li><a href="http://bj.xzl.anjuke.com/fang_shou/" target="_blank">写字楼出售</a></li>
        <li><a href="http://bj.sp.anjuke.com/fang_zu/" target="_blank">商铺出租</a></li>
        <li><a href="http://bj.sp.anjuke.com/fang_shou/" target="_blank">商铺出售</a></li>
        <li><a href="http://m.anjuke.com/bj/propsitemap/esf/" target="_blank">手机版二手房</a></li>
        <li><a href="http://m.anjuke.com/bj/propsitemap/zf/" target="_blank">手机版租房</a></li>
    </ul>
</div>
<div class="bottom_div" style="color: #666">
    <div class="bottom_span">
        <a href="http://kfzx.anjuke.com/" target="_blank">客户服务中心</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <!-- 邮箱：<a href="mailto:service@58ganji.com" target="_blank" rel="nofollow"><img src="http://pages.ajkcdn.com/site/img/foot/email.gif"></a>&nbsp;&nbsp;&nbsp;&nbsp; -->
        邮箱：<a href="mailto:service@58ganji.com" target="_blank" rel="nofollow">service@58ganji.com</a>&nbsp;&nbsp;&nbsp;
        Copyright © 2007-2016 www.anjuke.com  All Rights Reserved <a href="http://www.miibeian.gov.cn/" rel="nofollow">ICP号：沪&nbsp;B2-20090008</a>
    </div>
        </div>
<div style="clear:left; ">
    <div style="height:50px;"></div>
</div>
<style type="text/css">
<!--
.bottom_div a:link{text-decoration: none; color:#666}
.bottom_div a:visited{text-decoration:none; color:#666}
.bottom_div a:hover{text-decoration:underline; color:#666}
.bottom_div a:active{text-decoration:none; color:#666}
-->
</style>

    </div>
</div>
<!-- 侧边栏 -->
<div class="sidebar" style="right: 0px;">
    <div class="sidebar-mod sidebar-nav">
        <a href="http://www.anjuke.com/propsale/" rel="nofollow" class="sid-nav" data-soj="right_sidebar" target="_blank">
            <span class="iconfont iconfont22"></span>
            <p>卖房</p>
            <em class="nav-arrow"></em>
            <div class="sidebar-nav-hover">房东卖房</div>
        </a>
        <a href="http://kfzx.anjuke.com/" rel="nofollow" class="sid-nav" data-soj="right_sidebar" target="_blank">
            <span class="iconfont"></span>
            <p>帮助</p>
            <em class="nav-arrow"></em>
            <div class="sidebar-nav-hover">使用帮助</div>
        </a>
        <a href="https://www.wenjuan.com/s/NbqIZr" id="sid_survey" class="sid-nav" rel="nofollow" target="_blank">
            <span class="iconfont"></span>
            <p>调研</p>
            <em class="nav-arrow"></em>
            <div class="sidebar-nav-hover">用户调研</div>
        </a>
        <a href="javascript:void(0);" class="sid-nav">
            <span class="iconfont"></span>
            <p>下载</p>
            <em class="nav-arrow nav-sao"></em>
            <div class="sidebar-nav-hover sidebar-sao">下载安居客APP</div>
        </a>
    </div>
</div>
<div class="sidebar-mod sidebar-top" style="display: none;">
    <a href="javascript:void(0);" class="sid-nav">
        <span class="iconfont"></span>
        <em class="nav-arrow"></em>
        <div class="sidebar-nav-hover">返回顶部</div>
    </a>
</div>

<script type="text/javascript" src="/house/Public/style/login_files/jquery-underscore.js"></script><script type="text/javascript" src="/house/Public/style/login_files/prototype_gather_packed.js"></script>
<script type="text/javascript" src="/house/Public/style/login_files/Member_Web_User_Login.js"></script>
<script type="text/javascript">

    var base_url = 'http://member.anjuke.com';

J.ready(function(){
    var FooterCityList = J.globalFooter.FooterCityList('show_city_list', 'city_list');
    J.globalFooter.FooterCityList('show_commm_list', 'comm_list');
     J.globalFooter.FooterCityList('show_map_list','map_list');
     J.globalFooter.FooterCityList('show_house_list','house_list');
});

jQuery(function(){
    new ajk.pc.sideBar();
})
</script><script type="text/javascript">
    (function(){
        function sendSoj(){

            var fixReferer = '',
                curReferer = document.referrer,
                site = 'anjuke',
                CustomParams = '{}',
                st =  new J.logger.Tracker();
            st.setSite(site);
            st.setPage("Member_Web_User_LoginPage");
            st.setPageName("Member_Web_User_LoginPage");
            st.setReferrer(curReferer ? curReferer : fixReferer);
            st.setNGuid("aQQ_ajkguid");
            st.setNUid("ajk_member_id");
            st.setCustomParam(CustomParams);
            try{
                st.track();
            }catch(err){
                J.logger.log('sendSojError',err);
            }
        }
        sendSoj();
    }());
    // 58 统计 不要cp、sc参数
    (function(){

        try{
            var fixReferer = '',
                curReferer = document.referrer,
                site = 'anjuke',
                st = new SiteTracker();
                st.setSite(site);
                st.setPage("Member_Web_User_LoginPage");
                st.setPageName("Member_Web_User_LoginPage");
                st.setReferer(curReferer ? curReferer : fixReferer);
                st.buildParams();
            var _trackUrl = st.getParams();
                delete _trackUrl.sc;
                delete _trackUrl.cp;
            window._trackURL = JSON.stringify(_trackUrl);

            function loadTrackjs(){
                 var s = document.createElement('script');
                 s.type = 'text/javascript';
                 s.async = true;
                 s.src = 'http://tracklog.58.com/referrer_anjuke_pc.js?_=' + Math.random();
                 var b = document.body;
                 s.onload = function () {
                    st.setSite(site+'-npv');
                    st.setPage("Member_Web_User_LoginPage"+"_tracklog");
                    st.setPageName("Member_Web_User_LoginPage"+"_tracklog");
                    st.track();
                 }
                 s.onerror = function () {
                     st.setSite(site+'-npv');
                     st.setPage("Member_Web_User_LoginPage"+"_tracklog_error");
                     st.setPageName("Member_Web_User_LoginPage"+"_tracklog_error");
                     st.track();
                 }
                 b.appendChild(s);
            }
            setTimeout(function(){loadTrackjs()},0);
        }catch(e){
        }
    })();
</script>
<!-- START: 性能测试监控 -->
<script>
    J.ready(function(){
        var v = 1456202590,
            src = "http://pages.aifcdn.com/prism/performance.js?v="+v;
        J.load(src, function(){
            window.perfConfig = {
                pageName : 'Member_Web_User_LoginPage',
                siteName : 'ershoufang'
            };
        })
    });
</script>
<!-- END: 性能测试监控 -->

<script type="text/javascript">
(function(param){
       var c = {query:[], args:param||{}};
       c.query.push(["_setAccount","8"]);//固定参数
       (window.__zpSMConfig = window.__zpSMConfig||[]).push(c);
       var zp = document.createElement("script"); zp.type = "text/javascript"; zp.async = true;
       zp.src = ("https:" == document.location.protocol ? "https:" : "http:") + "//cdn.zampda.net/s.js";
       var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(zp, s);
}) (window.__zp_tag_params);
</script>

<script type="text/javascript">
    var _mvq = window._mvq || []; 
    window._mvq = _mvq;
    _mvq.push(['$setAccount', 'm-184379-0']);
    _mvq.push(['$setGeneral', '', '','','']);
    _mvq.push(['$logConversion']);
    (function() {
        var mvl = document.createElement('script');
        mvl.type = 'text/javascript'; mvl.async = true;
        mvl.src = 'https://material-ssl.mediav.com/bjjs/mba.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(mvl, s); 
    })();   
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66151813-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>



<script type="text/javascript" async="" src="/house/Public/style/login_files/referrer_anjuke_pc.js"></script></body></html>