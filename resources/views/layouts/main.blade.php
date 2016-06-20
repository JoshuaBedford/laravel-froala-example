@include('includes/_header')

	<body>
		<div class="fixed-nav-bar">
			<ul>
				<li><a href="{{ url('/articles') }}">Home</a></li>
				<li><a href="{{ url('/articles/create') }}">Create</a></li>
				<li><a href="{{ url('https://github.com/JoshuaBedford/laravel-froala-example') }}">Github</a></li>
			</ul>
		</div>
	    <div class="container">
			@yield('content')
		</div>

		<script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
		@include('includes/_froala-js')

		@yield('scripts')
	</body>
</html>