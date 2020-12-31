<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">        
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           <div class="row">
                <div class="col-md-8 left-bg">
                </div>
                <div class="col-md-4 right-bg">                    
                    <form action="{{ url('/login/') }}" name="login" method="POST">
                        @csrf                        
                        <br>
                        <label>Email: </label>
                        <input type="email" name="email">@if ($errors->has('email'))<p class="error">{{ $errors->first('email') }}</p>@endif
                        <br/>
                        <label>Password: </label>
                        <input type="password" name="password">@if ($errors->has('password'))<p class="error">{{ $errors->first('password') }}</p>@endif
                        <br/>
                        <button type="submit" class="btn btn-xs btn-info pull-right">Login</button>
                        <br>
                        <br>     
                        <a href="{{ route('registration') }}" class="btn btn-xs btn-info pull-right">Registration</a>                   
                    </form>
                    
                </div>
           </div>           
        </div>
    </body>
</html>
