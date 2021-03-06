<?php if(!defined("ZHPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!-- 头部 -->
<header id="header" class="pc_header">
	<div class="wrapper fix header_header">
		<h1>
            <a href="/other/">
                <!--<img src="http://www.his.com/template/v1/common/images/logo_01.gif" width="96" height="38" alt="">-->
                <?php if(B2BLOGIN){?>
				<img src="http://www.his.com/template/v1/common/images/logo_03.gif" width="96" height="38" alt="">
                <?php }else{?>
				<img src="http://www.his.com/template/v1/common/images/logo_01.gif" width="96" height="38" alt="">
                <?php }?>
            </a>
        </h1>
		<!-- 支店选择 -->
		<div class="select_shop">
			<a class="btn_01" href="/other">其他站</a>
			<i class="arrow"></i>
			<div class="select_shop_detail">
				<div class="select_shop_arrow"></div>
				<ul class="select_shop_list">
                    <li><a href="/">中国</a></li>
                    <li><a href="/beijing">北京站</a></li>
                    <li><a href="/shanghai">上海站</a></li>
                    <li class="on"><a href="/other">其他站</a></li>
				</ul>
				
			</div>
		</div>
		<!-- //支店选择 -->
		<!-- 搜索 -->
		<div class="search_area">
			<form action="/other/index.php" method="get" id="headersearch">
                <input type="hidden" name="a" value="Index"/>
                <input type="hidden" name="m" value="coloudsearch"/>
                <input type="hidden" name="c" value="Search"/>
				<div class="search_border fix">
					<input type="text" name="keyword" id="">
					<a class="search_btn" href="javascript:void(0);" onclick="btn_search('headersearch')"></a>
				</div>
				<div class="search_spread">
					<div class="search_histroy">
						<span class="title">
							您的搜索历史
						</span>
						<div class="search_histroy_content">
                            <?php if(!empty($searchkeword)){?>
							<ul>
                                <?php $zh["list"]["keywords"]["total"]=0;if(isset($searchkeword) && !empty($searchkeword)):$_id_keywords=0;$_index_keywords=0;$lastkeywords=min(1000,count($searchkeword));
$zh["list"]["keywords"]["first"]=true;
$zh["list"]["keywords"]["last"]=false;
$_total_keywords=ceil($lastkeywords/1);$zh["list"]["keywords"]["total"]=$_total_keywords;
$_data_keywords = array_slice($searchkeword,0,$lastkeywords);
if(count($_data_keywords)==0):echo "";
else:
foreach($_data_keywords as $key=>$keywords):
if(($_id_keywords)%1==0):$_id_keywords++;else:$_id_keywords++;continue;endif;
$zh["list"]["keywords"]["index"]=++$_index_keywords;
if($_index_keywords>=$_total_keywords):$zh["list"]["keywords"]["last"]=true;endif;?>

								<li><a href="<?php echo getSearchKeyUrl($keywords);?>"><?php echo $keywords;?></a></li>
                                <?php $zh["list"]["keywords"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
							</ul>
							<a class="clear_recorder" href="#">清除搜索记录</a>
                            <?php  }else{ ?>
                            暂无搜索记录
                            <?php }?>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- //搜索 -->
		<div class="header_right">
			
		</div>
	</div>
	<nav id="nav" <?php if(B2BLOGIN){?>class="agent_logined"<?php }?>>
		<div class="wrapper">
			<ul class="fix banner">
                <li><a href="/other/">首页</a></li>
                <li><a href="/other/lines/riben-1-0-0-0-0-0-0-0">日本旅游</a></li>
                <li><a href="/other/lines/qitaguoji-2-0-0-0-0-0-0-0">其他国际旅游</a></li>
                <li><a href="/lines/all-3-0-0-0-0-0-0-156">自由行</a></li>
                <li><a href="/other/lines/all-3-0-0-0-0-0-0-157">当地游</a></li>
                <li ><a href="/other/jrpass.html">日本铁路周游券</a></li>
			</ul>
            
			<ul class="fix angent_login_area">
                <?php if(B2BLOGIN){?>                
				<li class="logined"><span>您好，<?php echo $_SESSION["b2busername"];?></span><div class="exit_area"><a href="/index.php?a=Index&c=B2b&m=logout">退出</a></div></li>
                <?php }else{?>
				<li class="login"><a href="/other/index.php?a=Index&c=B2b&m=login">代理商登录</a></li>
                <?php }?>
			</ul>
            
		</div>
	</nav>

</header>
<!-- //头部 -->
<!-- 移动端头部 -->
<header class="mobile_header">
	<h1>
        <a href="/other/" alt="h.i.s">
            <?php if(B2BLOGIN){?>
			<img src="http://www.his.com/template/v1/common/images/logo_03.gif" alt="">
            <?php }else{?>
			<img src="http://www.his.com/template/v1/common/images/logo_01.gif" alt="">
            <?php }?>
        </a>
    </h1>

	<div class="m_select_shop">
		<span class="m_ss_ttl">其他站</span>
		<div class="m_ss_content">
			<div class="arrow-up"></div>
			<div class="m_ss_content_s">
				<ul>
					<li><a href="/">中国</a></li>
					<li><a href="/shanghai">上海站</a></li>
					<li><a href="/beijing">北京站</a></li>
					<li class="on"><a href="/other">其他站</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="m_search_area">
		<form action="index.php" method="get" id="spheadersearch">
                <input type="hidden" name="a" value="Index"/>
                <input type="hidden" name="m" value="coloudsearch"/>
                <input type="hidden" name="c" value="Search"/>
				<input type="text" name="keyword" id=""/>
			<a href="javascript:void(0);" class="m_search_button" onclick="btn_search('spheadersearch')"></a>
		</form>
	</div>
		
	<div class="m_menu_area">
		<a class="m_menu_btn" href="javascript:void(0);">menu</a>
		<div class="m_menu_content close">
			<div class="m_menu_ttl">
				<span class="m_menu_logo"><img src="http://www.his.com/template/v1/common/images/mobile/logo_01.png" alt=""></span>
				
				<a href="javascript:void(0);" class="menu_close"></a>
			</div>
			<div class="m_menu_detail">
				<nav class="page_nage">
					<ul>
                        <?php if(B2BLOGIN){?>
						<li class="a_logined"><span>您好，<?php echo $_SESSION["b2busername"];?></span><a href="/index.php?a=Index&c=B2b&m=logout">退出</a></li>
                        <?php }else{?>
						<li class="a_login"><a href="/other/index.php?a=Index&c=B2b&m=login">代理商登录</a></li>
                        <?php }?>
						<li><a href="/other/">首页</a></li>
						<li><a href="/other/lines/riben-1-0-0-0-0-0-0-0">日本旅游</a></li>
						<li><a href="/other/lines/all-3-0-0-0-0-0-0-157">当地游</a></li>
						<li><a href="/other/jrpass.html">日本铁路周游券</a></li>
					</ul>
				</nav>
				<nav class="contact_nav">
					<ul>

						
					</ul>
				</nav>
			</div>

		</div>
	</div>
</header>
<!-- //移动端头部 -->