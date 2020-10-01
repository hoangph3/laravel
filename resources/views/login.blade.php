<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="{{asset('/css/index.css')}}">
    </head>
    <body>
        <header>
            <img src="{{asset('/css/logo.png')}}" width="100px" height="100px"><br/>
            <h1>Sign in to VCS</h1>
        </header>
        <form method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
		<div id="loginbox">
            <label id="username">
                <p>Username</p>
                <input required="true" type="text" name="username">
            </label>
            <label id="password">
                <p>Password</p>
                <input required="true" type="password" name="password">
            </label>
            <input type="submit" value="Sign in">
        </div>  
		</form>
    </body>
</html>