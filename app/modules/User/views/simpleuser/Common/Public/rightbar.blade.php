<!-- 求关注
    =================================================== -->
<div class="panel panel-a">
	<div class="panel-heading">
		<h3 class="panel-title">{{ trans('blog::message.channel_follow') }}</h3>
	</div>
</div>
<ul class="list-group">
	<li class="list-group-item list-group-item-a active">{{ $follow['content'] }}</li>
</ul>

<!-- 近期评论
    =================================================== -->
<div class="panel panel-a">
	<div class="panel-heading">
		<h3 class="panel-title">{{ trans('blog::message.new_comment') }}</h3>
	</div>
</div>
<div class="list-group">
	<li class="list-group-item list-group-item-a"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="{!! URL::route($photo['url']) !!}"> {{ $comment['title'] }}</a></li>
</div>

<!-- 随机文章
    =================================================== -->
<div class="panel panel-a">
	<div class="panel-heading">
		<h3 class="panel-title">随机文章</h3>
	</div>
</div>
<div class="list-group">
@foreach ($randlists as $rand)
	<li class="list-group-item list-group-item-a"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="{!! URL::route('blog.detail', array('id' => $rand->title))!!}"> {{ $rand->title }}</a></li>
@endforeach
</div>



<!-- 图片八卦
    =================================================== -->
<div class="panel panel-a">
	<div class="panel-heading">
		<h3 class="panel-title">{{ trans('blog::message.channel_picture') }}</h3>
	</div>
</div>
<ul class="list-unstyled">
	<li>
		<a href="{!! URL::route($photo['url']) !!}" class="thumbnail thumbnail-a">
			<img src="{{$photo['img']}}" alt="img/pic.png">
			<div class="caption">
				<p>{{$photo['title']}}</p>
			</div>
		</a>
	</li>
	<li>
		<a href="{!! URL::route($photo['url']) !!}" class="thumbnail thumbnail-a">
			<img src="{{$photo['img']}}" alt="img/pic.png">
			<div class="caption">
				<p>{{$photo['title']}}</p>
			</div>
		</a>
	</li>
	<li>
		<a href="{!! URL::route($photo['url']) !!}" class="thumbnail thumbnail-a">
			<img src="{{$photo['img']}}" alt="img/pic.png">
			<div class="caption">
				<p>{{$photo['title']}}</p>
			</div>
		</a>
	</li>
	<li>
		<a href="{!! URL::route($photo['url']) !!}" class="thumbnail thumbnail-a">
			<img src="{{$photo['img']}}" alt="img/pic.png">
			<div class="caption">
				<p>{{$photo['title']}}</p>
			</div>
		</a>
	</li>
</ul>
