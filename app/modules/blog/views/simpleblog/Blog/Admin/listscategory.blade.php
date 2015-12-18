@extends('admin.Common.Base.Common')
@section('toolbar')
<div aria-label="Toolbar with button groups" role="toolbar" class="btn-toolbar">
	<div aria-label="First group" role="group" class="btn-group">
		<button class="btn btn-default" type="button">{{ trans('Admin/Common.add') }}</button>
		<button class="btn btn-default" type="button">{{ trans('Admin/Common.delete') }}</button>
		<button class="btn btn-default" type="button">{{ trans('Admin/Common.listorder') }}</button>
	</div>
	<div aria-label="Third group" role="group" class="btn-group">
		<button class="btn btn-default" type="button">{{ trans('Admin/Common.manage') }}</button>
	</div>
</div>
@stop
@section('OperatingTitleRegion'){{ trans('Admin/Common.index_admin') }}@stop
@section('OperatingAreaRegion')
<!-- table
	================================================== --> 
<div class="table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>标题</th>
            <th>分类</th>
            <th>发布者</th>
            <th>发布时间</th>
            <th>评论数</th>
            <th>{{ trans('Admin/Common.manage') }}</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>
			  <button type="button" class="btn btn-primary btn-sm">{{ trans('Admin/Common.edit') }}</button>
			  <button type="button" class="btn btn-primary btn-sm">{{ trans('Admin/Common.delete') }}</button>
			</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>
			  <button type="button" class="btn btn-primary btn-sm">{{ trans('Admin/Common.edit') }}</button>
			  <button type="button" class="btn btn-primary btn-sm">{{ trans('Admin/Common.delete') }}</button>
			</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>
			  <button type="button" class="btn btn-primary btn-sm">{{ trans('Admin/Common.edit') }}</button>
			  <button type="button" class="btn btn-primary btn-sm">{{ trans('Admin/Common.delete') }}</button>
			</td>
          </tr>
        </tbody>
      </table>
    </div>
	<!-- end -->
@stop
