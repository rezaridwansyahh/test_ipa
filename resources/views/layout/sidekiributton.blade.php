<div class="membership" align="center">
    @if (session()->has('event_token'))
		<h4 style="margin-bottom: 10px">WELCOME, </h4>
		<h3>{{ session()->get('event_email') }}</h3>
		<a class="btn btn-info" href="{{ route('/logout-event') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>, 
		<form id="logout-form" action="{{ route('/logout-event') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
	@else
		<img src="/template/images/convention.jpg" class="img-fluid" alt="Convention" />
		<hr>
		<a class="btn btn-primary" href="/convention/login"><span style="color: white">CONVENTION LOGIN</span></a>
    @endif

</div>
