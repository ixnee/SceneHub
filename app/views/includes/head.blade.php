{{--

 Author:					Lisa Balogh
 Revision Date:		May 7, 2014
 File Name:				head.blade.php
 Description:			Contains the html for the head section

--}}

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="">

<title>Scene Hub @yield('title')</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/slate/bootstrap.min.css" rel="stylesheet">
<link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/functions.js') }}"></script>
<link href="{{ URL::asset('formvalidation-master/dist/css/formValidation.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ URL::asset('formvalidation-master/dist/js/formValidation.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('formvalidation-master/src/js/framework/bootstrap.js') }}"></script>

</head>