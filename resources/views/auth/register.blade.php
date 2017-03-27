<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="/auth/register">
{!! csrf_field() !!}

<div>
	Name
	<input type="text" name="name" value="{{ old('name')}}">
</div>

<div>
	Email
	<input type="email" name="email" value="{{ old('email')}}">
</div>

<div>
	Password
	<input type="password" name="password" >
</div>

<div>
	Confirm Password
	<input type="password" name="password_confirmation" >
</div>

<div>
	<button type="submit"> Register </button>
</div>
	
</form>

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>