<!DOCTYPE html>
	<html lang="en">
	<head>
		<link href="{{asset('css/app.css')}}" rel="stylesheet">
		<meta name="csrf-token" contents="{{csrf_token() }}">
		<title>{{ config('app.name', 'Student Class')}}</title>

	</head>
     

 <body>
    <div class="container">
 	   @yield('content')
    </div>


<!-- script-->
<script src="{{ asset('js/app.js')}}"></script>


	


	</body>
	</html>