<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/navbar.css')
    @vite('resources/css/global.css')
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-..."
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />

</head>

<body>
    <header class="navbar">
       <a href="/sell" class="logo-container"><img src="{{ asset('images/logo-pamana.png') }}" alt="" class="logo-image"></a>
 
        <div class="profile-container">
            <a href="/profile">
                <div class="profile-image-container">
                   @if($userIsLoggedIn)
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb">
                    @else
                        <i class="fa-solid fa-circle-user"></i>
                    @endif
                
                </div>
        
            </a>
            <form action="POST" class="form-profile-option">
                <select name="" id="">
                    <option value="My Account">My Account</option>
                    <option value="My Purchases">My Shop</option>
                    <option value="Logout">Logout</option>
                </select>
            </form>
        </div>
              
    </header>
    <main>
        {{$slot}}
    </main>
</body>
</html>