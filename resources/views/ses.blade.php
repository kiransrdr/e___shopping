<!DOCTYPE html>
<html>
<body>

<h1>Current Session</h1>
<form action="">
  <input type="text" id="userr" name="userr" value="{{session('user')}}">
  <label for="userr">UserName:</label><br>
  <input type="text" id="emaill" name="email" value="{{session('email')}}">
  <label for="emaill">Email:</label><br>
  <input type="text" id="passwordd" name="pass" value="{{session('phone')}}">
  <label for="passwordd">PASSWORD:</label><br><br>
<a  href="/logout"> NEXT </a>

  
</form>
</body>
</html>