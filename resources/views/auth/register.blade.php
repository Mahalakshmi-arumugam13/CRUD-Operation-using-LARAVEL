
<html>
    <head>
        <title>Login Page - JVLcode</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">

@if ($errors->any())
    <ul>
        {!! implode('',$errors->all('<li>:message</li>')) !!}
    </ul>
@endif

<div class="col-md-4 offset-md-4 bg-primary mt-4" >

    <h2>Register</h2>
<form method="POST" action="/store">
    <div class="form-group">
    <label for="">Name <input type="text" class="form-control" name="name"> </label>
    </div>

    <div class="form-group">
    <label for="">Email <input type="text" class="form-control" name="email"> </label>
    </div>

    <div class="form-group">
    <label for="">Password <input type="password" class="form-control" name="password"> </label>
    </div>

    <div class="form-group">
    <label for="">Confirm Password <input type="password" class="form-control" name="password_confirmation"> </label>
    </div>


    <input type="submit" value="Register">
    <a href="login" class="btn btn-warning">Go to Login</a>
    @csrf
</form>
            </div>
        </div>
        </div>
    </body>
    </html>
