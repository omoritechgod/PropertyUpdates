@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')

        <!-- main content -->
        <div class="main-content right-chat-active">

        
        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left pe-0 ms-0 me-0" style="max-width: 100%;">
                <div class="row">
                    <div class="col-xl-6  chat-left scroll-bar">
                        <div class="card shadow-xss w-100 d-block d-flex border-0 p-4 mb-3">
                            <div class="card-body d-flex align-items-center p-0">
                                <h2 class="fw-700 mb-0 mt-0 font-md text-grey-900">Properties</h2>
                                <div class="search-form-2 ms-auto">
                                    <i class="ti-search font-xss"></i>
                                    <input type="text" class="form-control text-grey-500 mb-0 bg-greylight theme-dark-bg border-0" placeholder="Search here.">
                                </div>
                                <a href="#" class="btn-round-md ms-2 bg-greylight theme-dark-bg rounded-3"><i class="feather-filter font-xss text-grey-500"></i></a>
                            </div>
                        </div>
                        <div class="row ps-2 pe-2">
                            <div class="col-lg-6 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                <div class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1">
                                    <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1" style="background-color: #D2691E;" >Featured</span>
                                    <div class="card-image w-100 mb-3">
                                        <a href="#" class="position-relative d-block"><img src="images/h-1.jpg" alt="image" class="w-100"></a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <i class="feather-bookmark font-md text-grey-500 position-absolute right-0 me-3"></i>
                                        <h4 class="fw-700 font-xss mt-0 lh-28 mb-0"><a href="#" class="text-dark text-grey-900">Montana Hotel</a></h4>
                                        <h6 class="font-xsssss text-grey-500 fw-600 mt-0 mb-2"> 323 Geldenfe Ave Park, Flodia City</h6>
                                        <div class="star d-block w-100 text-left mt-0">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star-disable.png" alt="star" class="w15 me-1 float-left me-2">
                                        </div>
                                        <div class="clearfix"></div>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-ruler-pencil text-grey-500 me-1"></i> 200 sq</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-rss-alt text-grey-500 me-1"></i> WiFi</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500"><i class="btn-round-sm bg-greylight ti-credit-card text-grey-500 me-1"></i> Card</h5>
                                        <div class="clearfix"></div>
                                        <span class="font-lg fw-700 mt-0 pe-3 ls-2 lh-32 d-inline-block text-success float-left"><span class="font-xsssss">$</span> 320 <span class="font-xsssss text-grey-500">/ mo</span> </span>
                                        <a href="#" class="position-absolute bottom-15 mb-2 right-15"><i class="btn-round-sm bg-primary-gradiant text-white font-sm feather-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                <div class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1">
                                    <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1" style="background-color: #D2691E;" >Featured</span>
                                    <div class="card-image w-100 mb-3">
                                        <a href="#" class="position-relative d-block"><img src="images/h-2.jpg" alt="image" class="w-100"></a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <i class="feather-bookmark font-md text-grey-500 position-absolute right-0 me-3"></i>
                                        <h4 class="fw-700 font-xss mt-0 lh-28 mb-0"><a href="#" class="text-dark text-grey-900">Himalayan Wind Horse</a></h4>
                                        <h6 class="font-xsssss text-grey-500 fw-600 mt-0 mb-2"> 323 Geldenfe Ave Park, Flodia City</h6>
                                        <div class="star d-block w-100 text-left mt-0">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star-disable.png" alt="star" class="w15 me-1 float-left me-2">
                                        </div>
                                        <div class="clearfix"></div>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-ruler-pencil text-grey-500 me-1"></i> 200 sq</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-rss-alt text-grey-500 me-1"></i> WiFi</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500"><i class="btn-round-sm bg-greylight ti-credit-card text-grey-500 me-1"></i> Card</h5>
                                        <div class="clearfix"></div>
                                        <span class="font-lg fw-700 mt-0 pe-3 ls-2 lh-32 d-inline-block text-success float-left"><span class="font-xsssss">$</span> 450 <span class="font-xsssss text-grey-500">/ mo</span> </span>
                                        <a href="#" class="position-absolute bottom-15 mb-2 right-15"><i class="btn-round-sm bg-primary-gradiant text-white font-sm feather-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                <div class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1">
                                    <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1" style="background-color: #D2691E;" >Featured</span>
                                    <div class="card-image w-100 mb-3">
                                        <a href="#" class="position-relative d-block"><img src="images/h-3.jpg" alt="image" class="w-100"></a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <i class="feather-bookmark font-md text-grey-500 position-absolute right-0 me-3"></i>
                                        <h4 class="fw-700 font-xss mt-0 lh-28 mb-0"><a href="#" class="text-dark text-grey-900">Hotel Sonar Bangla</a></h4>
                                        <h6 class="font-xsssss text-grey-500 fw-600 mt-0 mb-2"> 323 Geldenfe Ave Park, Flodia City</h6>
                                        <div class="star d-block w-100 text-left mt-0">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star-disable.png" alt="star" class="w15 me-1 float-left me-2">
                                        </div>
                                        <div class="clearfix"></div>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-ruler-pencil text-grey-500 me-1"></i> 200 sq</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-rss-alt text-grey-500 me-1"></i> WiFi</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500"><i class="btn-round-sm bg-greylight ti-credit-card text-grey-500 me-1"></i> Card</h5>
                                        <div class="clearfix"></div>
                                        <span class="font-lg fw-700 mt-0 pe-3 ls-2 lh-32 d-inline-block text-success float-left"><span class="font-xsssss">$</span> 50 <span class="font-xsssss text-grey-500">/ mo</span> </span>
                                        <a href="#" class="position-absolute bottom-15 mb-2 right-15"><i class="btn-round-sm bg-primary-gradiant text-white font-sm feather-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                <div class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1">
                                    <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1" style="background-color: #D2691E;" >Featured</span>
                                    <div class="card-image w-100 mb-3">
                                        <a href="#" class="position-relative d-block"><img src="images/h-4.jpg" alt="image" class="w-100"></a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <i class="feather-bookmark font-md text-grey-500 position-absolute right-0 me-3"></i>
                                        <h4 class="fw-700 font-xss mt-0 lh-28 mb-0"><a href="#" class="text-dark text-grey-900">House Pool Party</a></h4>
                                        <h6 class="font-xsssss text-grey-500 fw-600 mt-0 mb-2"> 323 Geldenfe Ave Park, Flodia City</h6>
                                        <div class="star d-block w-100 text-left mt-0">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star-disable.png" alt="star" class="w15 me-1 float-left me-2">
                                        </div>
                                        <div class="clearfix"></div>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-ruler-pencil text-grey-500 me-1"></i> 200 sq</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-rss-alt text-grey-500 me-1"></i> WiFi</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500"><i class="btn-round-sm bg-greylight ti-credit-card text-grey-500 me-1"></i> Card</h5>
                                        <div class="clearfix"></div>
                                        <span class="font-lg fw-700 mt-0 pe-3 ls-2 lh-32 d-inline-block text-success float-left"><span class="font-xsssss">$</span> 60 <span class="font-xsssss text-grey-500">/ mo</span> </span>
                                        <a href="#" class="position-absolute bottom-15 mb-2 right-15"><i class="btn-round-sm bg-primary-gradiant text-white font-sm feather-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                <div class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1" >
                                    <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1" style="background-color: #D2691E;" >Featured</span>
                                    <div class="card-image w-100 mb-3">
                                        <a href="#" class="position-relative d-block"><img src="images/h-5.jpg" alt="image" class="w-100"></a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <i class="feather-bookmark font-md text-grey-500 position-absolute right-0 me-3"></i>
                                        <h4 class="fw-700 font-xss mt-0 lh-28 mb-0"><a href="#" class="text-dark text-grey-900">Silver Star Boutique</a></h4>
                                        <h6 class="font-xsssss text-grey-500 fw-600 mt-0 mb-2"> 323 Geldenfe Ave Park, Flodia City</h6>
                                        <div class="star d-block w-100 text-left mt-0">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star-disable.png" alt="star" class="w15 me-1 float-left me-2">
                                        </div>
                                        <div class="clearfix"></div>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-ruler-pencil text-grey-500 me-1"></i> 200 sq</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-rss-alt text-grey-500 me-1"></i> WiFi</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500"><i class="btn-round-sm bg-greylight ti-credit-card text-grey-500 me-1"></i> Card</h5>
                                        <div class="clearfix"></div>
                                        <span class="font-lg fw-700 mt-0 pe-3 ls-2 lh-32 d-inline-block text-success float-left"><span class="font-xsssss">$</span> 760 <span class="font-xsssss text-grey-500">/ mo</span> </span>
                                        <a href="#" class="position-absolute bottom-15 mb-2 right-15"><i class="btn-round-sm bg-primary-gradiant text-white font-sm feather-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 mb-3 pe-2 ps-2">
                                <div class="card w-100 p-0 hover-card shadow-xss border-0 rounded-3 overflow-hidden me-1">
                                    <span class="font-xsssss fw-700 ps-3 pe-3 lh-32 text-uppercase rounded-3 ls-2 bg-primary-gradiant d-inline-block text-white position-absolute mt-3 ms-3 z-index-1" style="background-color: #D2691E;"   >Featured</span>
                                    <div class="card-image w-100 mb-3">
                                        <a href="#" class="position-relative d-block"><img src="images/h-6.jpg" alt="image" class="w-100"></a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <i class="feather-bookmark font-md text-grey-500 position-absolute right-0 me-3"></i>
                                        <h4 class="fw-700 font-xss mt-0 lh-28 mb-0"><a href="#" class="text-dark text-grey-900">Crown Retreat Hotel</a></h4>
                                        <h6 class="font-xsssss text-grey-500 fw-600 mt-0 mb-2"> 323 Geldenfe Ave Park, Flodia City</h6>
                                        <div class="star d-block w-100 text-left mt-0">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star.png" alt="star" class="w15 me-1 float-left">
                                            <img src="images/star-disable.png" alt="star" class="w15 me-1 float-left me-2">
                                        </div>
                                        <div class="clearfix"></div>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-ruler-pencil text-grey-500 me-1"></i> 200 sq</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500 me-2"><i class="btn-round-sm bg-greylight ti-rss-alt text-grey-500 me-1"></i> WiFi</h5>
                                        <h5 class="mt-3 d-inline-block font-xssss fw-600 text-grey-500"><i class="btn-round-sm bg-greylight ti-credit-card text-grey-500 me-1"></i> Card</h5>
                                        <div class="clearfix"></div>
                                        <span class="font-lg fw-700 mt-0 pe-3 ls-2 lh-32 d-inline-block text-success float-left"><span class="font-xsssss">$</span> 840 <span class="font-xsssss text-grey-500">/ mo</span> </span>
                                        <a href="#" class="position-absolute bottom-15 mb-2 right-15"><i class="btn-round-sm bg-primary-gradiant text-white font-sm feather-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>   
                    <div class="col-xl-6 d-none d-xl-block ps-0 chat-left">
                        <div class="card w-100 border-0 shadow-none rounded-3 border-0 mb-4 overflow-hidden ">
                            <div id="map" class="rounded-3 chat-left"></div>
                            <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew&amp;callback=mapinitialize" type="text/javascript"></script>
                            <script type="text/javascript">

                                

                            
                            var icons = { parking: { icon: 'images/map-marker.png' } };


                            // REPLACE WITH DATA FROM API
                            //TITLE | POSITION - LAT , LNG | ICON | TITLE | CONTENT
                            var airports = [
                                { 
                                    position: { 
                                        lat: 53.3588026, 
                                        lng: -2.274919 }, 
                                    icon: 'parking',    
                                    content: '<div id="content"><div id="siteNotice"></div><h5 id="firstHeading" class="firstHeading"><b>Right here Right Now - Improv Comedy</b> </h5></div>'
                                },
                                { 
                                    position: { 
                                        lat: 53.8679434, 
                                        lng: -1.6637193 }, 
                                    icon: 'parking',    
                                    content: '<div id="content"><div id="siteNotice"></div><h5 id="firstHeading" class="firstHeading"><b>Open Mic-Stand up Comedy and Poetry</b></h5></div>'
                                },
                                { 
                                    position: { 
                                        lat: 54.661781, 
                                        lng: -6.2184331 }, 
                                    icon: 'parking',    
                                    content: '<div id="content"><div id="siteNotice"></div><h5 id="firstHeading" class="firstHeading"><b>Mohd Suhels Guide to the Galaxy</b></h5></div>'
                                },
                                { 
                                    position: { 
                                        lat: 55.950785, 
                                        lng: -3.3636419 }, 
                                    icon: 'parking',    
                                    content: '<div id="content"><div id="siteNotice"></div><h5 id="firstHeading" class="firstHeading"><b>Charlotte De Witte India Tour- Goa</b></h5></div>'
                                },
                                { 
                                    position: { 
                                        lat: 51.3985498, 
                                        lng: -3.3416461 }, 
                                    icon: 'parking',    
                                    content: '<div id="content"><div id="siteNotice"></div><h5 id="firstHeading" class="firstHeading"><b>A Stand-up Comedy Show by Rahul Dua </b></h5></div>'
                                },
                                { 
                                    position: { 
                                        lat: 51.4700223, 
                                        lng: -0.4542955 }, 
                                    icon: 'parking',    
                                    content: '<div id="content"><div id="siteNotice"></div><h5 id="firstHeading" class="firstHeading"><b>Sunburn Holi Weekend 2021 ft Vini Vici- Goa </b></h5></div>'}
                            ];

                            function initMap() {
                                
                                var uk = { 
                                    lat: 53.990221, 
                                    lng: -3.911132 
                                };
                                
                                var map = new google.maps.Map( document.getElementById('map'), {
                                    zoom: 6,
                                    center: uk, 
                                    disableDefaultUI: true,
                                    styles: [{"featureType":"all","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"},{"color":"#cee9de"},{"saturation":"2"},{"weight":"0.80"}]},{"featureType":"poi.attraction","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#f5d6d6"}]},{"featureType":"road.highway","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"hue":"#ff0000"},{"visibility":"on"}]},{"featureType":"road.highway.controlled_access","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway.controlled_access","elementType":"labels.icon","stylers":[{"visibility":"on"},{"hue":"#0064ff"},{"gamma":"1.44"},{"lightness":"-3"},{"weight":"1.69"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"visibility":"simplified"},{"weight":"0.31"},{"gamma":"1.43"},{"lightness":"-5"},{"saturation":"-22"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"transit.station.airport","elementType":"all","stylers":[{"visibility":"simplified"},{"hue":"#ff0045"}]},{"featureType":"transit.station.bus","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#00d1ff"}]},{"featureType":"transit.station.bus","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.station.rail","elementType":"all","stylers":[{"visibility":"simplified"},{"hue":"#00cbff"}]},{"featureType":"transit.station.rail","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"weight":"1.61"},{"color":"#cde2e5"},{"visibility":"on"}]}]
                                });
                                        
                                var InfoWindows = new google.maps.InfoWindow({});
                                
                                airports.forEach(function(airport) {    
                                    var marker = new google.maps.Marker({
                                        position: { lat: airport.position.lat, lng: airport.position.lng },
                                        map: map,
                                        icon: icons[airport.icon].icon,
                                        title: airport.title
                                    });
                                    marker.addListener('mouseover', function() {
                                        InfoWindows.open(map, this);
                                        InfoWindows.setContent(airport.content);
                                    });
                                });
                            }

                            initMap();




                            </script>
                        </div>
                    </div>               

                </div>
            </div>
                
        </div>            
    </div>
    <!-- main content -->
    <div class="col-md-3">
        @include('partials.sidebar')
    </div>


    <!-- @include('partials.footer') -->
@endsection
