
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-11">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <img id="image" src="images/logo.svg" alt="Royal Van der Leun">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="userInput">
                <label for="email"> <b>Username</b></label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter Email">
            </div>
            <div class="userInput">
                <label for="password"><b>Password</b></label>
                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="Enter Password">
            </div>

            <div class="items-center justify-end mt-4">
                
                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
                <div>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </div>

                {{-- <div id="flex">
                    <button type="submit">Login</button>
                </div> --}}
        </form>
    </div>
</body>
</html>