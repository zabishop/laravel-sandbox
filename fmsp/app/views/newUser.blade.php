<html>
<body>
<h1>Create New User</h1>


    {{ Form::open(array('action' => 'UserController@newUser')) }}
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname"><br>
    <label for="firstname">Last Name:</label>
    <input type="text" id="lastname"><br>
    <label for="firstname">User Name:</label>
    <input type="text" id="username"><br>
    <label for="firstname">Email:</label>
    <input type="email" id="email"><br>
    <input type="submit" value="Submit" name="submit">
    {{ Form::close() }}


</body>
</html>