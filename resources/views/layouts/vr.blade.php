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

    <!-- Bootstrap + Creative Studio main styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/creative-studio.css') }}">

    <script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>

    @livewireStyles
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">



    <!-- start main section -->

    {{ $slot }}

    <!-- end main section -->


    <!-- core  -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap affix -->
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- Creative Studio js -->
    <script src="{{ asset('assets/js/creative-studio.js') }}"></script>
    @livewireScripts

</body>
</html>    