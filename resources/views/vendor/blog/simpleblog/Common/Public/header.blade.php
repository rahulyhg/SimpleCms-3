<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="navbar navbar-default headroom animated">
	<div class="container">
		<!-- 显示网站logo -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				<span class="sr-only">切换导航</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{!! URL::route('index') !!}">{{ trans('Home/message.web_name') }}</a>
		</div>

		<!-- 导航内容 -->
		<div class="collapse navbar-collapse navbar-left" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="{!! URL::route('page.detail', array('id'=>$about->name)) !!}">关于 <span class="sr-only">(current)</span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">文章 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="lists.html">前端技术</a></li>
						<li><a href="lists.html">后端开发</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="lists.html">Bootstrap</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="lists.html">Laravel</a></li>
						@foreach ($Categories as $category)
						<li><a href="{!! URL::route('blog.lists', array('id' => $category->name))!!}">{{$category->title}}</a></li>
						@endforeach
					</ul>
				</li>
			</ul>
			<form class="navbar-form navbar-left" id="J_ajaxForm_search" role="search" action="{!! URL::route('blog.search')!!}" method="post">
				<div class="form-group">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="{{ $searchkeywords or trans('Home/message.msg_search') }}" name="searchkeywords">
						<span class="input-group-btn">
							<button type="button" id="J_ajaxSubmit_search" class="btn btn-default">{{ trans('Home/message.btn_search') }}</button>
						</span>
					</div><!-- /input-group -->
				</div>
			</form>
		</div>
		@if (Auth::check() == false)
		<p class="navbar-text navbar-right"><a class="navbar-link" href="{!! URL::route('ucenter.login') !!}">{{ trans('Ucenter/login.btn_login') }}</a> | <a class="navbar-link" href="{!! URL::route('ucenter.register') !!}">{{ trans('Ucenter/register.btn_register') }}</a></p>
		@else
		<p class="navbar-text navbar-right"><a class="navbar-link" href="{!! URL::route('ucenter.index') !!}">{{ trans('Ucenter/center.title_center') }}</a> | <a class="navbar-link" href="{!! URL::route('ucenter.loginout') !!}">{{ trans('Ucenter/center.btn_loginout') }}</a></p>
		@endif
	</div>
</nav>
<div class="container container-menu">
	<ul class="nav nav-tabs">
		<li role="presentation"><a href="{!! URL::route('index') !!}">{{ trans('Home/message.web_index') }}</a></li>
		<li role="presentation" class="active"><a href="#">网页设计</a></li>
		<li role="presentation"><a href="lists.html">Javascript</a></li>
		<li role="presentation"><a href="lists.html">Jquery</a></li>
		<li role="presentation"><a href="lists.html">HTML5</a></li>
		<li role="presentation"><a href="lists.html">CSS3</a></li>
		<li role="presentation" class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				PHP框架 <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a href="lists.html">Thinkphp</a></li>
				<li><a href="lists.html">Laravel</a></li>
			</ul>
		</li>
	</ul>
</div>
