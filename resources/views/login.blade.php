<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link rel="stylesheet" type="text/css" href="{{url('css/login.css')}}">

    {{-- POPPINS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="POST" class="container">
            <div class="login-container">
                <div class="left">
                    <div class="left-alignment">
                        <div class="logo">PETSCREET</div>
                    </div>
                </div>
                <div class="right">
                    <div class="right-alignment">
                        <div class="title">Login to Petscreet!</div>
                        <div class="login-info">
                            <div class="email-container">
                                <label for="email" class="label">Email</label>
                                <input class="login-input" type="email" placeholder="Email">
                            </div>
                            <div class="password-container">
                                <label for="password" class="label">Password</label>
                                <input class="login-input" type="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="button-area">
                            <button class="button">Register</button>
                            <button class="button" type="submit" value="Login">Login</button>
                        </div>
                    </div>
                    
                </div>
            </div> 
        </form>
        
        
    </div>
</body>
</html>