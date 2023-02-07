<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Document</title>
</head>
<body>

    <form class="boderss" method="post" action="">

        @csrf

        <div class="boders">
            <div class="header">
                <h1>Login</h1>
            </div>
            @if (isset($msg))
            <p class="msg">{{$msg}}</p>
            @endif
            <div class="form-body">
                <div class="body">
                    <input class="inputt" type="text" name="email" placeholder="Enter Email">
                    <p class="help">{{ $errors->first('email') }}</p>
                    <input class="inputt" type="password" name="password" placeholder="Enter Password">
                    <p class="help">{{ $errors->first('email') }}</p>
                    <div class="qmks">
                        <a class="qmk" href="">Forgot Password ?</a>
                    </div>
                </div>
            </div>

            <div class="login-center">
                <input class="input-login" type="submit" value="Login">

                <div class="dangky">
                    <a class="dangkys" href="">Register</a>
                </div>
            </div>

            <div class="fbgg">
                <a href=""><img  class="icon" src="{{asset('uploads/iconfb.png')}}" alt=""></a>
                <a href=""><img  class="icon" src="{{asset('uploads/icongg.png')}}" alt=""></a>
                <a href=""><img  class="icon" src="{{asset('uploads/icontwitter.png')}}" alt=""></a>
            </div>

        </div>

    </form>

</body>
</html>
