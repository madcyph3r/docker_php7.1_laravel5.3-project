<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Todo App</title>
</head>
<body>
    <div><span>my app skeleton</span></div>

    <div class="content">
	@if (Session::has('message'))
	    <div class="flash alert-info">
		<p>{{ Session::get('message') }}</p>
	    </div>
	@endif

	@if ($errors->any())
	    <div class='flash alert-danger'>
		@foreach ( $errors->all() as $error )
		    <p>{{ $error }}</p>
		@endforeach
	    </div>
	@endif

	@yield('content')
    </div>

</body>
</html>
