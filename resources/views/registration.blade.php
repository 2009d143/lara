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
                @if(!empty($successMsg))
                    <div class="alert alert-success"> {{ $successMsg }}</div>
                @endif
                @if(!empty($warningMsg))
                    <div class="alert alert-danger"> {{ $warningMsg }}</div>
                @endif
                    <form action="{{ url('/registration/') }}" name="registration" method="POST">
                        @csrf
                        <br>
                        <label>First Name: </label>
                        <input type="text" name="firstname">
                        <br/>
                        <label>Last Name: </label>
                        <input type="text" name="lastname">
                        <br/>
                        <label>Email: </label>
                        <input type="email" name="email">
                        <br/>
                        <label>Password: </label>
                        <input type="password" name="password">
                        <br/>
                        <br>
                        <button type="submit" class="btn btn-xs btn-info pull-right">Save</button>
                        <a href="{{ route('login') }}" class="btn btn-xs btn-info pull-right">Login</a>
                    </form>
                </div>
           </div>           
        </div>
    </body>
</html>
