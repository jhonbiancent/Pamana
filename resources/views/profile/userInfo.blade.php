
<x-navbar>
    @vite('resources/css/customerProfile.css')
<body class="mainContainer"> 
    <div class="userprofileContainer">

        <div class="side-bar-section">
            <div class="mini-profile-section">
              <div class="mini-profile-picture">
                <i class="fa-solid fa-user"></i>
              </div>
              <h3>{{ $accounts->first_name }}</h3>

            </div>
            <div class="side-bar-link-section">
              <div class="side-bar-link-column">
                <p><i class="fa-solid fa-user"></i>  My Account</p>
                <p><i class="fa-solid fa-user-pen"></i>  Profile</p>
                <p><i class="fa-solid fa-user-shield"></i>  Privacy settings</p>
                <p><i class="fa-solid fa-bell"></i>  Notification settings</p>
                <p><i class="fa-solid fa-bag-shopping"></i>  My Purchase</p>
                <p><i class="fa-solid fa-ticket-simple"></i>  My Vouchers</p>
                <form method="POST" action="{{ route('logout') }}">
                   @csrf
                    <button type="submit" class="btn-logout"><i class="fa-solid fa-right-from-bracket"></i> Log Out</button>
                </form>
              </div>
            </div>

        </div>
       

        <div class="dataContainer">
            <div class="header-container">
                <h2>My Profile</h2>
                <p>Manage and protect your account</p>
            </div>
        <form class="userInformation">
      
              <div class="firstColumnContainer">
                <label for="fname">First name:</label>
                 <label for="lname">Last name:</label>
                 <label for="address">Address:</label>
                 <label for="contact">Contact Number:</label>
                 <label for="birthdate">Birthdate:</label>
                 <label for="sex">Sex:</label>
              </div>

              <div class="secondColumnContainer">
              <input type="text" class="informationContainer" id="first_name" value="{{$accounts->first_name}}"/>
              <input type="text" class="informationContainer"  id="lname" value="{{$accounts->last_name}}"/>
              <input type="text" class="informationContainer"  id="address" value="{{$accounts->address}}"/>
              <input type="text" class="informationContainer" id="contact" value="{{$accounts->contact}}"/>
              <input type="text" class="informationContainer" id="birthdate" value="{{$accounts->birth_date}}"/>
               <div class="section-sex-gender-option">
                  <span class="">
                    <label for="male">Male</label>
                    <input type="radio" id="male" name="fav_language" value="Male">
                  </span>
                  <span class="">
                    <label for="female">Female</label>
                    <input type="radio" id="female" name="fav_language" value="Female">
                  </span>
               <button type="submit" class="saveButton"> Save <i class="fa-solid fa-file-arrow-up"></i></button>
               </div>
              </div>
              <div class="profile-picture-section">
                <div class="userprofilepicture">
                   <i class="fa-solid fa-user"></i> 
                </div>
                <button class="btn-update-image">
                    <i class="fa-solid fa-arrow-up-from-bracket"></i>  Update Image
                </button>
                <p>File size: maximum 1 MB</p>
                <p>File extension: .JPEG, .PNG</p>
              </div>
         
        </form>
        </div>
    </div>
</body>
</x-navbar>
