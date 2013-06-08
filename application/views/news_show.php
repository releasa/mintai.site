<?php
	$this->load->view('_header');
?>
<div class="main-wrap wrapper cf">
	<div id="container" class="gridsystem cf">
		<div class="container-wrap cf">

			<section class="grid-1 fl">
				<div class="topmenu">
					<dl>
						<dt>媒体报道</dt>
						<dd class="active"><a href="#">媒体报道</a></dd>
					</dl>
				</div>
				<div class="sidebar-menu">
					<ul>
						<li class="ksdh1"><a href="#">预约开户</a></li>
						<li class="ksdh2"><a href="#">在线咨询</a></li>
						<li class="ksdh3"><a href="#">注册模拟账户</a></li>
						<li class="ksdh4"><a href="#">软件下载</a></li>
						<li class="ksdh5"><a href="#">培训预约表</a></li>
					</ul>
			    </div>
			</section><!-- /sidebar -->
				
			<section class="grid-4 fr">
				<div class="subbanner">
					<img src="/resources/template/images/online.jpg" alt="在线咨询" />
				</div>

				<div class="crumbs">
	            	本页位置：<a href="index.html">首页</a><span>&gt;&gt;</span><a href="news.html">媒体报道</a><span>&gt;&gt;</span>媒体报道 
	            </div>

	            <div class="details-wrap">
					<div class="details-title">
					<h1><?php echo $article['title'];?></h1>
						<p><span>发布时间：<?php echo $article['post_time'];?></span><span>来源：<?php echo $article['source'];?></span></p>
					</div>
					<div class="details-content">
						<?php echo $article['content'];?>
										</div>

					<div class="pages">
						<p>上一篇：<a href="#">伯南克讲话令金市纠结 黄金ETF仍在继续减仓</a></p>
						<p>下一篇：<a href="#">日股大跌引发投资者寻求避险 金价大涨1.8%</a></p>
					</div>
			    </div>

			</section><!-- /content -->

		</div>	
	</div><!-- //container -->
</div><!-- //main -->
<?php
	$this->load->view('_footer');
?>


