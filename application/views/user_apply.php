<?php
	$this->load->view('_header');
?>

<div class="main-wrap wrapper cf">
	<div id="container" class="gridsystem cf">
		<div class="container-wrap cf">
		<?php
			$this->load->view("_left");
		?>		
			<section class="grid-4 fr">
				<div class="subbanner">
					<img src="/resources/template/images/online.jpg" alt="在线咨询" />
				</div>

				<div class="crumbs">
	            	本页位置：<a href="index.html">首页</a><span>&gt;&gt;</span><a href="online.html">在线咨询</a><span>&gt;&gt;</span>预约开户 
	            </div>

	            <div class="online mod4 mb-15">
	            	<dl>
	            		<dt><strong>投资贵金属，民泰为您保驾护航</strong></dt>
	            		<dd>• 天津贵金属交易所166号会员，专业、正规、实力，账户资金由银行三方存管；</dd>
	            		<dd>• 资深投资顾问与您一对一咨询交流，更好了解相关业务及参与投资的程序；</dd>
	            		<dd>• 明星分析师团队实时解盘，让您充分把握投资黄金、白银的良机。</dd>
	            		<dd>• 贵金属投资有风险，我们将坚守诚信、勤勉、尽责的职业道德，为您答疑解惑；</dd>
	            	</dl>
	            </div>

	            <div class="online online-qq mod4 mb-15">
	            	<dl>
	            		<dt><strong>企业QQ在线</strong></dt>
	            		<dd>
	            			咨询1：<a href="#"><img src="/resources/template/images/icon-qq.png" alt="qq" /></a> 
	            			咨询2：<a href="#"><img src="/resources/template/images/icon-qq.png" alt="qq" /></a>
	            			咨询3：<a href="#"><img src="/resources/template/images/icon-qq.png" alt="qq" /></a> 
	            			咨询4：<a href="#"><img src="/resources/template/images/icon-qq.png" alt="qq" /></a>
	            		</dd>
	            	</dl>
	            </div>

	            <div class="online online-form mod4">
	            	<p>若您不方便使用QQ，请直接拨打免费电话 <span>400-1690-166</span>。</p>
	            	<p>或请留下您的联系方式，并请保持您的手机畅通，我们会在24小时内与您联系。</p>
	            	<table class="form-table mb-15">
						<tbody>
							<tr>
								<th width="14%"><span>*</span>姓名：</th>
								<td width="86%"><input type="text" class="input-txt"></td>
							</tr>
							<tr>
								<th><span>*</span>手机：</th>
								<td><input type="text" class="input-txt"></td>
							</tr>
							<tr>
								<th>性别：</th>
								<td>
									<input type="radio" name="radio" checked="checked" id=""> 先生&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="radio" name="radio" id=""> 女士
								</td>
							</tr>
							<tr>
								<th class="at">咨询内容：</th>
								<td>
									<textarea class="textarea"></textarea>
								</td>
							</tr>
							<tr>
								<th></th>
								<td>
									<input type="button" value="提交信息" class="btn-submit" />
								</td>
							</tr>
						</tbody>
					</table>
	            	<dl>
	            		<dt><strong>服务及隐私条款：</strong></dt>
	            		<dd>
	            			<p>当您在本网站进行用户注册登记、参加网上或公共论坛等各种活动时，在您的同意及确认下，本网站将通过注册表格等形式要求您提供一些个人资料。这些个人资料包括： 如姓名、性别、年龄、出生日期、身份证号码（或护照号码）、电话、通信地址、住址、电子邮件地址、等情况。</p>
							<p>请了解，在未经您同意及确认之前，本网站不会将您为参加本网站之特定活动所提供的资料利用于其它目的。但是当政府机关依照法定程序要求本网站披露个人资料时，本网站将根据执法单位之要求或为公共安全之目的提供个人资料。在此情况下之任何披露，本网站均不承担任何责任</p>
							<p>我们真诚的希望我们能通过此次合作建立长期的合作关系。</p>
							<p>如果您同意我们的服务及隐私条款，请点击提交按钮。</p>
	            		</dd>
	            	</dl>
	            </div>

			</section><!-- /content -->

		</div>	
	</div><!-- //container -->
</div><!-- //main -->

<?php
	$this->load->view('_footer');
?>
