<html>
    <title>Register</title>
    <link rel="stylesheet" type="text/css"   href="{{asset('css/main.css')}}">
<body>
    <div class="reg-panel">

    
<h1>Registration</h1>
<hr>
<form action="/register" method="post">
{{csrf_field()}}
Your Name: <input type="text" name="name">
@if ($errors->has('name'))
<b>{{$errors->first('name')}}</b>
@endif
<br><br>
Your Email: <input type="text" name="email">
@if ($errors->has('email'))
<b>{{$errors->first('email')}}</b>
@endif
<br><br>
<br>

@if ($errors->has('contact'))
<b>{{$errors->first('contact')}}</b>
@endif
Gender: <input type="radio" name="gender" value="male">Male
  <input type="radio"  name="gender" value="female">Female
@if ($errors->has('gender'))
<b>{{$errors->first('gender')}}</b>
@endif
<br><br>
<br>
Your Password: <input type="text" name="password">
@if ($errors->has('password'))
<b>{{$errors->first('password')}}</b>
@endif
<br><br>
Upload Image: <input type="file" name="file" >
@if ($errors->has('file'))
<b>{{$errors->first('file')}}</b>
@endif
<br><br>

<input type="submit" value="Register"> <br> <br><br>
</form>
</div>
</body>

</html>