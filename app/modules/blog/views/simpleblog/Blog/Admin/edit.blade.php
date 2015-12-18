@extends('admin.Common.Base.Common')
@section('toolbar')
<div aria-label="Toolbar with button groups" role="toolbar" class="btn-toolbar">
	<div aria-label="First group" role="group" class="btn-group">
		<button class="btn btn-default" type="button">{{ trans('Admin/Common.add') }}</button>
		<button class="btn btn-default" type="button">{{ trans('Admin/Common.delete') }}</button>
		<button class="btn btn-default" type="button">{{ trans('Admin/Common.listorder') }}</button>
	</div>
</div>
@stop
@section('OperatingTitleRegion'){{ trans('Admin/Common.edit') }}@stop
@section('OperatingAreaRegion')
<!-- edit
	================================================== -->    
	<form id="askForm" class="form-horizontal" action="#linkhere" method="post">

		<div class="form-group">
			<label for="categoryid" class="col-sm-2 control-label">类别</label>
			<div class="col-sm-9">
				<select name="categoryid" class="form-control">
					<option value='-1'>{{ trans('Admin/Common.select') }}</option>
					<volist name="category" id="vo">
						<option value='{$vo.id}'>{$vo.title}</option>
					</volist>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="title" class="col-sm-2 control-label">标题</label>
			<div class="col-sm-9">
				<input type="text" class="form-control" id="title" placeholder="标题" name="title">
			</div>
		</div>

		<div class="form-group">
			<label for="detail" class="col-sm-2 control-label">正文</label>
			<div class="col-sm-9">
				<textarea class="form-control" rows="3" name="detail"></textarea>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button class="btn btn-default">{{ trans('Admin/Common.save') }}</button>
			</div>
		</div>
	</form> 
@stop