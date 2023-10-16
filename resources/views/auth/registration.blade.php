<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="align">
    <div class="grid">
        <form action="{{route('register-user')}}" method="post" class="form login">
            <div class="img">
                <img src="images/onway_logo.png" alt="Onway Logo">
            </div>
            <hr>
            @if(session()->has('success'))
                <div class="alert alert-success">{{session()->get('success')}}</div>
            @endif
            @if(session()->has('fail'))
                <div class="alert alert-danger">{{session()->get('fail')}}</div>
            @endif
            @csrf
            <div class="form__field">
                <label for="name">
                    <svg class="icon">
                        <use xlink:href="#bi bi-person-fill"></use>
                    </svg>
                </label>
                <input type="text" id="login__username" class="form__input" placeholder="Enter Name" name="name" value="{{old('name')}}">
                {{-- <span class="text-danger">@error('name') {{$message}} @enderror</span> --}}
            </div>
            <div class="form__field">
                <label for="email">
                    <svg class="icon">
                        <use xlink:href="#bi bi-envelope-fill"></use>
                    </svg>
                </label>
                <input type="text" id="login__password" class="form__input" placeholder="Enter Email" name="email" value="{{old('email')}}">
                {{-- <span class="text-danger">@error('email') {{$message}} @enderror</span> --}}
            </div>
            <div class="form__field">
                <label for="password">
                    <svg class="icon">
                        <use xlink:href="#bi bi-lock-fill"></use>
                    </svg>
                </label>
                <input type="password" id="login__password" class="form__input" placeholder="Enter Password" name="password" value="">
                {{-- <span class="text-danger">@error('password') {{$message}} @enderror</span> --}}
            </div>
            <div class="form__field">
                <input class="form-control" type="submit" value="Register"></input>
            </div>
        </form>  
        <p class="text--center">Already a member? <a href="/">Sign in here</a><svg class="icon">
        <use xlink:href="#icon-arrow-right"></use>
        </svg></p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" class="icons">
        {{-- USER ICON  --}}
        <symbol id="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
        </symbol>
        {{-- EMAIL ICON  --}}
        <symbol id="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
        </symbol>
        {{-- PASSWORD ICON  --}}
        <symbol id="bi bi-lock-fill" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
        </symbol>
        {{-- ARROW ICON  --}}
        <symbol id="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
        </symbol>
    </svg>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>