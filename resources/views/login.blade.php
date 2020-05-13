<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <style type="text/css">
            <style>
            .container {
            height: 200px;
            position: relative;
            border: 3px solid green;
            }

            .vertical-center {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            }
        </style>

    </head>
    <body>
        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
             <div align="center">
                <strong>{{ $message }}</strong>
             </div>
            </div>
            @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
            <ul>

             @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach

            </ul>
            </div>
        @endif
        <div class="container vertical-center container-fluid">
            <div class="row">
                <div class="offset-md-6 col-md-4">
                    <h2>Login</h2>
                    <hr>

                <form method="POST" action="{{ url('/login/authenticate') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div align="center" class="form-group">
                            <input type="submit" class="btn btn-primary" name="login" value="Login" />
                        </div>
                    </form>

                </div>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>
