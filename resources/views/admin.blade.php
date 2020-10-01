@if(Auth::check())
	<h1>Adminstrator</h1>
@else
	<h1>Not login!</h1>	
@endif