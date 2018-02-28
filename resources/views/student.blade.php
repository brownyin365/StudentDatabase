@extends('layouts.app')
@section('title', 'about')
@section('content')

<div>
	<a href="{{(url('/student'))}}"></a>
</div>
<h1>Students Information</h1>

<div class="table-responsive">
  <table class="table table-striped">
    		<thead>
    			<th>Name</th>
                <th>Email</th>
                <th>Class</th>
                <th>Index Number</th>
            </thead>
    <tbody>
    	     @foreach($users as $user)
        <tr>
	        <td>{{$user ->name}}</td>
            <td>{{$user ->email}}</td>
            <td>{{$user ->class}}</td>
            <td>{{$user ->number}}</td>
	    </tr>
           @endforeach
    </tbody>
  </table>
    	
</div>
@endsection
