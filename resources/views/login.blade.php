<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h1 align="center">Please Login</h1>
        <div align= "center">
        <form method="post" action="">
            {{ csrf_field() }}
            <div>
             <label>Enter Email</label>
             <input type="email" name="email"/>
            </div></br>
            <div>
             <label>Enter Password</label>
             <input type="password" name="password"/>
            </div></br>
            <div class="form-group">
             <input type="submit" name="login" value="Login" />
            </div>
           </form>
        </div>
    </body>
</html>
