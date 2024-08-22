<header>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logos/logo.png') }}" alt="PropertyUpdates Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/signup-selection') }}">Get Started</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="{{ url('/signup-selection') }}">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <div class="nav-header bg-white shadow-xs border-0">
        <div class="nav-top">
            <a href="index.html" ><span class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xxl logo-text mb-0"> </span><img src="{{ asset('images/logos/logo.png') }}" alt="logo" style="height: 50px; width: 170px;"> </img> </a>
            <a href="#" class="mob-menu ms-auto me-2 chat-active-btn"><i class="feather-message-circle text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
            <!-- <a href="default-video.html" class="mob-menu me-2"><i class="feather-video text-grey-900 font-sm btn-round-md bg-greylight"></i></a> -->
            <a href="#" class="me-2 menu-search-icon mob-menu"><i class="feather-search text-grey-900 font-sm btn-round-md bg-greylight"></i></a>
            <button class="nav-menu me-0 ms-2"></button>
        </div>
        
        <form action="#" class="float-left header-search">
            <div class="form-group mb-0 icon-input">
                <i class="feather-search font-sm text-grey-400"></i>
                <input type="text" placeholder="Start typing to search.." class="bg-grey border-0 lh-32 pt-2 pb-2 ps-5 pe-3 font-xssss fw-500 rounded-xl w350 theme-dark-bg">
            </div>
        </form>
        <li class="nav-item menu-icon ">
             <a class="nav-link" href="{{ url('/about') }}">About Us</a>
        </li>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">


            </ul>
        </div>

        <a href="#" class="p-2 text-center ms-auto menu-icon" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown"><span class="dot-count bg-warning"></span><i class="feather-bell font-xl text-current"></i></a>
        <div class="dropdown-menu dropdown-menu-end p-4 rounded-3 border-0 shadow-lg" aria-labelledby="dropdownMenu3">
            
            <h4 class="fw-700 font-xss mb-4">Notification</h4>
            <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
                <img src="images/user-8.png" alt="user" class="w40 position-absolute left-0">
                <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Hendrix Stamp <span class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 3 min</span></h5>
                <h6 class="text-grey-500 fw-500 font-xssss lh-4">There are many variations of pass..</h6>
            </div>
            <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
                <img src="images/user-4.png" alt="user" class="w40 position-absolute left-0">
                <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Goria Coast <span class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 2 min</span></h5>
                <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
            </div>

            <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
                <img src="images/user-7.png" alt="user" class="w40 position-absolute left-0">
                <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Surfiya Zakir <span class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 1 min</span></h5>
                <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
            </div>
            <div class="card bg-transparent-card w-100 border-0 ps-5">
                <img src="images/user-6.png" alt="user" class="w40 position-absolute left-0">
                <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">Victor Exrixon <span class="text-grey-400 font-xsssss fw-600 float-right mt-1"> 30 sec</span></h5>
                <h6 class="text-grey-500 fw-500 font-xssss lh-4">Mobile Apps UI Designer is require..</h6>
            </div>
        </div>

        <a href="#" class="p-2 text-center ms-3 menu-icon chat-active-btn"><i class="feather-message-square font-xl text-current"></i></a>

        <div class="p-2 text-center ms-3 position-relative dropdown-menu-icon menu-icon cursor-pointer">
            <i class="feather-settings animation-spin d-inline-block font-xl text-current"></i>
            <div class="dropdown-menu-settings switchcolor-wrap">
                <h4 class="fw-700 font-sm mb-4">Settings</h4>
                <h6 class="font-xssss text-grey-500 fw-700 mb-3 d-block">Choose Color Theme</h6>
                <!-- <ul>

                    <li>
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="orange"><i class="ti-check"></i>
                            <span class="circle-color bg-orange" style="background-color: #ff9500;"></span>
                        </label>
                    </li>
                    <li>
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="gray"><i class="ti-check"></i>
                            <span class="circle-color bg-gray" style="background-color: #8e8e93;"></span>
                        </label>
                    </li>

                    <li>
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="brown"><i class="ti-check"></i>
                            <span class="circle-color bg-brown" style="background-color: #D2691E;"></span>
                        </label>
                    </li>
                    <li>
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="darkgreen"><i class="ti-check"></i>
                            <span class="circle-color bg-darkgreen" style="background-color: #228B22;"></span>
                        </label>
                    </li>
                    <li>
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="deeppink"><i class="ti-check"></i>
                            <span class="circle-color bg-deeppink" style="background-color: #FFC0CB;"></span>
                        </label>
                    </li>
                    <li>
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="cadetblue"><i class="ti-check"></i>
                            <span class="circle-color bg-cadetblue" style="background-color: #5f9ea0;"></span>
                        </label>
                    </li>
                    <li>
                        <label class="item-radio item-content">
                            <input type="radio" name="color-radio" value="darkorchid"><i class="ti-check"></i>
                            <span class="circle-color bg-darkorchid" style="background-color: #9932cc;"></span>
                        </label>
                    </li>
                </ul> -->
                
                <!-- <div class="card bg-transparent-card border-0 d-block mt-3">
                    <h4 class="d-inline font-xssss mont-font fw-700">Header Background</h4>
                    <div class="d-inline float-right mt-1">
                        <label class="toggle toggle-menu-color"><input type="checkbox"><span class="toggle-icon"></span></label>
                    </div>
                </div> -->
                <div class="card bg-transparent-card border-0 d-block mt-3">
                    <h4 class="d-inline font-xssss mont-font fw-700">Menu Position</h4>
                    <div class="d-inline float-right mt-1">
                        <label class="toggle toggle-menu"><input type="checkbox"><span class="toggle-icon"></span></label>
                    </div>
                </div>
                <div class="card bg-transparent-card border-0 d-block mt-3">
                    <h4 class="d-inline font-xssss mont-font fw-700">Dark Mode</h4>
                    <div class="d-inline float-right mt-1">
                        <label class="toggle toggle-dark"><input type="checkbox"><span class="toggle-icon"></span></label>
                    </div>
                </div>

                
            </div>
        </div>
        <li class="nav-item menu-icon cursor-pointer">
            <a class="nav-link" href="{{ url('/signup-selection') }}">Get Started</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link " href="{{ url('/login') }}">Login</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link btn btn-primary text-white" href="{{ url('/signup-selection') }}">Sign Up</a>
        </li>
        
        

        <!-- <a href="default-settings.html" class="p-0 ms-3 menu-icon"><img src="images/profile-4.png" alt="user" class="w40 mt--1"></a> -->
        
    </div>
        <!-- navigation top -->
</header>
