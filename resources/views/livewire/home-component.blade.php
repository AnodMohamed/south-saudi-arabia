        <!-- Page Header -->
    <header class="header">
         <div class="overlay">
                <h6 class="subtitle">What do you Know about the south?</h6>
                <h1 class="title">Visitor Tours</h1>
          
        </div>      
    </header>
        <!-- End Of Page Header -->
    

    <!-- Discover section -->
    <section id="discover">
        <div class=" containertext-center">
            <h6 class="section-title mb-5 text-center">Discover</h6>
            <div class="row">
                @foreach ($cities as $city)
                <div class="col-sm-6">
                    <div class="img-wrapper" style="height: 600px;">
                        <img class="h-100" src="{{asset('storage/gallery')}}/{{$city->main_image}}"  alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h2 style="font-size: 46px;">{{ $city->title}}</h2>
                                <a style="font-size: 46px;" href="{{ route('home.city',['city_id'=>$city->id ]) }}"><h5>View</h5></a>  
                            </div>  
                        </div>
                    </div>               
                </div>
                @endforeach
              
            
            </div>
        </div>
    </section>
    <!-- End of Discover section -->


    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-4">
                    <img src="{{ asset('assets/imgs/about.png') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page" class="w-100 img-thumbnail mb-3">
                </div>
                <div class="col-md-7 col-lg-8">
                    <h6 class="section-title mb-3">About Us</h6>
                    <p>
                        VR Many of us think of science fiction movies.  However, the truth is that nowadays, this technology blends perfectly with our daily lives.  Video games, medicine, education etc. Virtual reality is here to stay.
                    </p>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- End of About Section -->


