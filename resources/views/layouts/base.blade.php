<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Creative Studio landing page.">
    <meta name="author" content="Devcrud">
    <title>VR | Visitor Tours</title>

    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap + Creative Studio main styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/creative-studio.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css" />

    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />

    @livewireStyles

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-lg navbar-dark" data-spy="affix" data-offset-top="20">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home')}}">Discover</a>
                    </li>
            
                    @auth

                    <div class="buttons text-center">
                        <a href="{{ route('city.add')}}" class="btn btn-primary rounded w-lg btn-lg my-1" >Add city</a>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                        class="btn btn-outline-light rounded w-lg btn-lg my-1" style="border-color: rgb(122, 253, 149); color: rgb(95, 210, 119); font-weight: 800;">Log out</a>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf
          
                        </form>
                    </div>
                  
       
                    @endauth
                
                    
                </ul>
            </div>

            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/imgs/logo.png') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
            </button>
        </div>
    </nav>
    <!-- End Of Page Navigation -->



    <!-- start main section -->

    {{ $slot }}

    <!-- end main section -->

    <section class="has-bg-img py-0">
        <div class="container">
            <div class="footer">
                <div class="footer-lists">
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">VT</h6>
                        </li>
                        <li class="list-body">
                            <p class="mt-3">
                                Copyright © 2022 All rights reserved 
                            </p>                   
                        </li>
                    </ul>
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold"> LINKS</h6>
                        </li>
                        <li class="list-body">
                            <div class="row">
                                <div class="col">
                                    <a href="#home">Home</a>
                                    <a href="#about">About</a>
                                    <a href="#discover">Discover</a>
                                </div>
                                
                            </div>
                        </li>
                    </ul>
       
                </div>
            </div>    
        </div>
    </section>



    <!-- core  -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap affix -->
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- Creative Studio js -->
    {{-------}}
    <script src="{{ asset('assets/js/creative-studio.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>


    @livewireScripts


</body>
</html>
