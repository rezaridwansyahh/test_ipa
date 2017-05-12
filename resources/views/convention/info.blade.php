<div class="membership" align="center">
	<h4 style="margin-bottom: 10px">WELCOME, </h4>
    <h3>{{ session()->get('event_email') }}</h3>
    @if (session()->has('event_token'))
    <a class="btn btn-info" href="{{ route('/logout-event') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>, 
    <form id="logout-form" action="{{ route('/logout-event') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
    @endif

</div>