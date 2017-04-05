 <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<form method="POST" action="/auth/login">
    {!! csrf_field() !!}
<table width="538" height="183" border="0" align="center">
      <tr>
        <td><div class="form-group">
  <label class="col-md-6 control-label">Correo</label>  
  <div class="col-md-6 inputGroupContainer">
  </div>
</div>
   </td>
        <td><div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input type="email" name="email" value="{{ old('email') }}">
    </div></td>
      </tr>
      
        <td> <div class="form-group">
  <label class="col-md-6 control-label">Contraseña</label>  
  <div class="col-md-6 inputGroupContainer">
  
  </div>
</div></td>
        <td><div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
	<input type="password" name="password" id="password">
    </div></td>
      </tr>
      <tr>
        <td> <div class="input-group" align="center">
 
   <input type="checkbox" name="remember"> Remember Me
    </div>
    </div></td>
        
      </tr>
      <tr>
        <td colspan="2">
         <div align="center">
         <button type="submit">Iniciar Sesion</button>
    </div></td>
      </tr>
    </table> 
   
</form>