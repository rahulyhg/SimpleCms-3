@extends('blog::simpleblog.Common.Base.Common')
@section('MainBrowseRegion')
<!-- start -->
<div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
      <ol class="carousel-indicators">
        <li class="" data-slide-to="0" data-target="#carousel-example-generic"></li>
        <li data-slide-to="1" data-target="#carousel-example-generic" class="active"></li>
        <li data-slide-to="2" data-target="#carousel-example-generic" class=""></li>
      </ol>
      <div role="listbox" class="carousel-inner">
        <div class="item">
			<div class="jumbotron">
				<h1>35个让人惊讶的 CSS3 动画效果演示!</h1>
				<p>本文收集了35个惊人的 CSS3 动画演示，它们将证明 CSS3 Transform 和 Transition 属性的强大能力。CSS 是网页设计非常重要的一部分，随着越来越多的浏览器对 CSS3 支持的不断完善，设计师和开发者们有了更多的选择。如今，用纯 CSS 就可以实现各种各样很酷的效果，甚至是动画</p>
				<p><a class="btn btn-primary btn-lg" href="detail.html" role="button">阅读</a></p>
			</div>
        </div>
        <div class="item active">
			<div class="jumbotron">
				<h1>35个让人惊讶的 CSS3 动画效果演示!</h1>
				<p>本文收集了35个惊人的 CSS3 动画演示，它们将证明 CSS3 Transform 和 Transition 属性的强大能力。CSS 是网页设计非常重要的一部分，随着越来越多的浏览器对 CSS3 支持的不断完善，设计师和开发者们有了更多的选择。如今，用纯 CSS 就可以实现各种各样很酷的效果，甚至是动画</p>
				<p><a class="btn btn-primary btn-lg" href="detail.html" role="button">阅读</a></p>
			</div>
        </div>
        <div class="item">
			<div class="jumbotron">
				<h1>35个让人惊讶的 CSS3 动画效果演示!</h1>
				<p>本文收集了35个惊人的 CSS3 动画演示，它们将证明 CSS3 Transform 和 Transition 属性的强大能力。CSS 是网页设计非常重要的一部分，随着越来越多的浏览器对 CSS3 支持的不断完善，设计师和开发者们有了更多的选择。如今，用纯 CSS 就可以实现各种各样很酷的效果，甚至是动画</p>
				<p><a class="btn btn-primary btn-lg" href="detail.html" role="button">阅读</a></p>
			</div>
        </div>
      </div>
</div>
<!-- end -->
<div class="panel panel-a">
	<div class="panel-heading">
		<h3 class="panel-title">{{ trans('blog::message.new_document') }}</h3>
	</div>
</div>
<div class="list-group">
@foreach ($lists as $document)
	<div class="list-group-item list-group-item-article">

		<h4 class="list-group-item-heading"><a href="{!! URL::route('blog.detail', array('id' => $document->title))!!}">{{$document->title}}</a></h4>
		<div class="row list-group-item-mark">
			<div class="col-md-6">
				<ul class="list-inline">
					<li>{{$document->byMember->nickname}}</li>
					<li><?php echo date('Y-m-d',$document->create_time);?></li>
					<li>{{$document->category->title}}</li>
					<li>{{$document->view}}{{ trans('blog::message.view_count') }}</li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="list-inline pull-right">
					<li><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 2</li>
				</ul>
			</div>
		</div>

		<p class="list-group-item-text">{!!$document->description!!}</p>
	</div>
@endforeach
</div>
<div class="row">
	<div class="col-md-12" style="text-align:center;">
		<?php echo $lists->render(); ?>
	</div>
</div>
@stop

@section('RightBarBrowseRegion')
	@include('blog::simpleblog.Common.Public.rightbar')
@stop
