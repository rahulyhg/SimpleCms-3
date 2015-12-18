<!doctype html>
<html lang="<?php echo config('home.web_site.meta_lang');?>">
	<head>
		@include('blog::simpleblog.Common.Public.head')
		@yield('HeadRegion')
	</head>
	<body>
		@section('RootRegion')
			@yield('CommentMenuRegion')
			@section('BrowseRegion')
				@include('blog::simpleblog.Common.Public.body')
			@show
			@include('blog::simpleblog.Common.Public.footer')
		@show
		@yield('FootRegion')
	</body>
</html>
