<html>
<body>
<h1>Create New User</h1>

<ul>
    <?php
    foreach ($errors->all() as $message) {
        echo "<li>" . $message . "</li>";
    }?>
</ul>

{{ Form::open() }}
<label for="firstname">First Name:</label>
{{ Form::text('firstname', Input::old('firstname')) }}<br>
<label for="lastname">Last Name:</label>
{{ Form::text('lastname', Input::old('lastname')) }}<br>
<label for="username">User Name:</label>
{{ Form::text('username', Input::old('username')) }}<br>
<label for="email">Email:</label>
{{ Form::email('email', Input::old('email')) }}<br>
<label for="password">Password:</label>
{{ Form::password('password') }}<br>
<label for="confirm_password">Confirm Password:</label>
{{ Form::password('confirm_password')}}<br>
<input type="submit" value="Submit" name="submit">
{{ Form::close() }}


</body>
</html>