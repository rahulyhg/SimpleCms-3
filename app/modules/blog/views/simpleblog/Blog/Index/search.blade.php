@extends('blog::simpleblog.Common.Base.Common')
@section('MainBrowseRegion')
<ol class="breadcrumb breadcrumb-lists">
  <li><a href="#">PHP框架</a></li>
  <li><a href="#">Laravel</a></li>
  <li class="active">搜索</li>
</ol>
<div class="list-group">
@forelse ($document as $doc)
	<div class="list-group-item list-group-item-article">

		<h4 class="list-group-item-heading"><a href="{!! URL::route('blog.detail', array('id' => $doc->id))!!}">{{$doc->title}}</a></h4>
		<div class="row list-group-item-mark">
			<div class="col-md-6">
				<ul class="list-inline">
					<li>{{$doc->bymember->nickname}}</li>
					<li><?php echo date('Y-m-d',$doc->create_time);?></li>
					<li>{{$doc->category->title}}</li>
					<li>{{$doc->view}}{{ trans('Home/message.view_count') }}</li>
				</ul>
			</div>
			<div class="col-md-6">
				<ul class="list-inline pull-right">
					<li><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 2</li>
				</ul>
			</div>
		</div>

		<p class="list-group-item-text">{!!$doc->description!!}</p>
	</div>
@empty
<div class="row">
	<div class="col-md-12" style="text-align:center;padding-top:40px;font-size:30px;color:#d6d6d6;">
		暂无内容
	</div>
</div>
@endforelse
</div>
<div class="row">
	<div class="col-md-12" style="text-align:center;">
		<?php echo $document->appends(['searchkeywords' => $searchkeywords])->render(); ?>
	</div>
</div>
@stop

@section('RightBarBrowseRegion')
	@include('blog::simpleblog.Common.Public.rightbar')
@stop
