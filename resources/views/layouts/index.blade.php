<!DOCTYPE html>
<html>
<head>
	<title>Laravel | Job Application</title>
	<link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	@section('css')
    @show 
</head>
<body style="background-color: #fff;">
	@section('header')
	    @include('layouts.header')
		@include('layouts.message')	 			
		@yield("content")
		{{-- @include('layouts.footer') --}}
	@show

	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{asset('js/materialize.min.js')}}"></script>
	<script src="{{ asset('js/sweetalert.min.js') }}"></script>
	@include('sweet::alert');
	<script type="text/javascript">
	(function($){
	  $(function(){

	    $('.button-collapse').sideNav();

	  }); // end of document ready
	})(jQuery); // end of jQuery name space
	</script>
</body>
</html>