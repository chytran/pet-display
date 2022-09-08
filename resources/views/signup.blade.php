<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Stylesheet --}}
    <link rel="stylesheet" href="{{url('css/signup.css')}}">
    <title>Signup</title>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="left">
                <div class="left-alignment">
                    <div class="logo">PETSCREET</div>
                </div>
                
            </div>
            <div class="right">
                <div class="right-alignment">
                    <form method="POST">
                        {{$errors}}
                        @csrf
                        <div class="title">Login to Petscreet!</div>
                        <div class="login-info">
                            <div class="name-container email-container">
                                <label for="name" class="label">Name</label>
                                <input class="login-input" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="email-container">
                                <label for="email" class="label">Email</label>
                                <input class="login-input" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="password-container">
                                <label for="password" class="label">Password</label>
                                <input class="login-input" type="password" name="password" placeholder="Password">
                            </div>
                            <div class="password-container">
                                <label for="passwordConfirm" class="label">Confirm Password</label>
                                <input class="login-input" type="password" name="passwordConfirm" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="button-area">
                            <a class="button" href="{{url('login')}}">Login</a>
                            <input class="button" type="submit" value="Signup">
                        </div>
                    </form>
                    
                </div>
                
            </div>
        </div>
        
    </div>
</body>
</html>