<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-..."
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
    @vite('resources/css/signup.css')
    @vite('resources/css/global.css')

</head>
<body>
    <div class="main-container">
        
        <div class="brand-container">
            <a href="/"><i class="fa-solid fa-arrow-left"></i></a>
            <img src="{{ asset('images/logo-pamana.png') }}" alt="" class="brand-image">
            <h2>Where memories find new home.</h2>
        </div>

        <div class="login-container">
            <div class="form-container">
               <form action="{{ route('signup_and_login.complete') }}" method="POST" class="form">
                    @csrf
                    
                    @if ($errors->any())
                        <div class="error-box">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <h2>Sign Up</h2>

                    <input 
                        type="email" 
                        name="email" 
                        class="input-field" 
                        placeholder="Email" 
                        value="{{ old('email') }}"
                        required
                    >

                    <input 
                        type="password" 
                        name="password" 
                        class="input-field" 
                        placeholder="Password"
                        required
                    >

                    <input 
                        type="password" 
                        name="password_confirmation" 
                        class="input-field" 
                        placeholder="Confirm Password"
                        required
                    >

                    <button type="submit" class="login-button">
                        Sign Up
                    </button>

                    <p>OR</p>

                    <!-- Social buttons (UI only for now) -->
                    <button type="button" class="login-with-buttons-facebook">
                        <i class="fa-brands fa-facebook"></i> 
                        Facebook
                    </button>

                    <button type="button" class="login-with-buttons-google">
                        <i class="fa-brands fa-google"></i>
                        Google
                    </button>

                    {{-- <div class="terms-and-condition-container">
                        By signing up, you agree to Pamana's
                        <a href="/login"> Terms and Service</a> &
                        <a href="/login"> Privacy Policy</a>
                    </div> --}}

                <div class="sign-up-container">
                    Already have an Account?
                    <a href="/login"> Log In</a>
                </div>
            </form>

            </div>
           
        </div>


    </div>
</body>
</html>