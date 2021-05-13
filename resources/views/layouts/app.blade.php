<!DOCTYPE html>
<html lang="en">
<head>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Ticket</title>

	<!-- Bootstrap 4.6 css -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	   <!-- Favicons -->
	<meta name="theme-color" content="#563d7c">


	    <style>
	      .bd-placeholder-img {
	        font-size: 1.125rem;
	        text-anchor: middle;
	        -webkit-user-select: none;
	        -moz-user-select: none;
	        -ms-user-select: none;
	        user-select: none;
	      }

	      @media (min-width: 768px) {
	        .bd-placeholder-img-lg {
	          font-size: 3.5rem;
	        }
	      }
	    </style>
	<!-- Bootstrap 4.6 js -->
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script>

</head>
<body>
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
	  <h5 class="my-0 mr-md-auto font-weight-normal">Ticket</h5>
	  <nav class="my-2 my-md-0 mr-md-3">
	    <a class="p-2 text-dark" href="/tickets">Ticket</a>
	    @foreach($queues as $queue)
	    <a class="p-2 text-dark" href="{{route('queues.index', $queue->id)}}">{{$queue->name}}</a>
	    @endforeach
	  </nav>
	</div>
	
	@yield('content')

	<div class="container-fluid">
		<footer class="pt-4 my-md-5 pt-md-5 border-top">
		    <div class="row">
		      <div class="col-12 col-md text-center">
		        <small class="d-block mb-3 text-muted">&copy; 2017-2021, Desarrollado por <a href="https://jonsanchezr.github.io/" target="_blank">Jonathan Sanchez</a></small>
		      </div>
		    </div>
		</footer>
	</div>
</body>
</html>