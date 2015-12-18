@extends('blog::simpleblog.Common.Base.Common')
@section('MainBrowseRegion')
	<ol class="breadcrumb breadcrumb-lists">
	  <li><a href="#">PHP框架</a></li>
	  <li><a href="#">Laravel</a></li>
	  <li class="active"><a href="{!! URL::route('blog.lists', array('id' => $category->name))!!}">{{$category->title}}</a></li>
	</ol>
	<div class="panel pane-article-detail">
		<div class="panel-body">

			<h4 class="panel-body-head">{{$document->title}}</h4>
			<div class="row panel-body-mark">
				<div class="col-md-6">
					<ul class="list-inline">
						<li>{{$member->nickname}}</li>
						<li><?php echo date('Y-m-d',$document->create_time);?></li>
						<li>{{$category->title}}</li>
						<li>{{$document->view}}{{ trans('Home/message.view_count') }}</li>
					</ul>
				</div>
				<div class="col-md-6">
					<ul class="list-inline pull-right">
						<li><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 2</li>
					</ul>
				</div>
			</div>

			<section class="panel-body-text">
				{!! $article->content  or '暂无内容' !!}
			</section>
		</div>

	</div>
<div class="row">
	<div class="col-md-6 text-left">
		@if ($prev)<a href="{!! URL::route('blog.detail', array('id' => $prev->title))!!}">{{$prev->title}}</a>
		@else 没有了
		@endif
	</div>
	<div class="col-md-6 text-right">
		@if ($next)<a href="{!! URL::route('blog.detail', array('id' => $next->title))!!}">{{$next->title}}</a>
		@else 没有了
		@endif
	</div>
</div>
@stop

@section('RightBarBrowseRegion')
	@include('blog::simpleblog.Common.Public.rightbar')
@stop
