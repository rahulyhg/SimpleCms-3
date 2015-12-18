@extends('blog::simpleblog.Common.Base.Common')
@section('MainBrowseRegion')
	<ol class="breadcrumb breadcrumb-lists">
	  <li><a href="{!! URL::route('index') !!}">{{ trans('Home/message.web_index') }}</a></li>
	  <li>留言</li>
	</ol>
	<div class="panel pane-article-detail">
		<div class="panel-body">
			<section class="panel-body-text">
				你的留言我会及时回复的！
			</section>
			<hr>
			<!-- message
				================================================== -->
				<form id="J_messageForm" class="form-horizontal" action="#linkhere" method="post">

					<div class="form-group">
						<label for="title" class="col-sm-2 control-label">标题</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="title" placeholder="标题" name="title">
							<div class="error"></div>
						</div>
					</div>

					<div class="form-group">
						<label for="detail" class="col-sm-2 control-label">正文</label>
						<div class="col-sm-9">
							<textarea style="width:100%;height:200px;visibility:hidden;" class="form-control" rows="3" id="detail" name="detail" placeholder="请您留言…"></textarea>
							<div class="error"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button class="btn btn-default">留言</button>
						</div>
					</div>
				</form>
		</div>

	</div>
@stop

@section('RightBarBrowseRegion')
	@include('blog::simpleblog.Common.Public.rightbar')
@stop
@section('FootRegion')
<link rel="stylesheet" href="{{ asset('public/packages/Kindeditor/themes/simple/simple.css') }}" />
<script charset="utf-8" src="{{ asset('public/packages/Kindeditor/kindeditor-min.js') }}"></script>
<script charset="utf-8" src="{{ asset('public/packages/Kindeditor/lang/zh_CN.js') }}"></script>
<script>
	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('textarea[name="detail"]', {
			allowFileManager : false,
			resizeType : 1,
			items : [
				'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
				'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				'insertunorderedlist', '|', 'emoticons', 'link']
		});
	});
    $().ready(function () {
        $("#J_messageForm").validate({
            rules: {
                title: {
                    required: true,
                    minlength: 10
                },
                detail: {
                    required: true,
                    minlength: 15
                },
            },
            messages: {
                title: {
                    required: "请输入标题",
                    minlength: "您至少要输入10个字符"
                },
                detail: {
                    required: "请输入您的留言内容",
                    minlength: "您至少要输入15个字符"
                },
            },
			errorPlacement: function(error, element) {
				error.appendTo( element.next() );
			},
        });
    });
</script>
@stop
