
    <!-- City section -->
    <section id="discover">
        <div class=" container text-center">
            <h6 class="section-title mb-5 text-center">
                {{ $title }}
                @auth
                   <a href="{{ route('subcity.add',['city_id'=>$city_id ]) }}" class="btn btn-primary rounded">+ Add Sub City</a>
                   <a herf=""  class="btn btn-danger rounded text-white bg-danger"  onclick="confirm('Are you sure, You want to delete the city') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$city_id}})" style="margin-left:10px; background:#f62b45 !important "> 
                    Delete
                   </a>
                   <a href="{{ route('city.edit',['city_id'=>$city_id ]) }}"   class="btn btn-success rounded text-white "    style="margin-left:10px;"> 
                    Edit
                   </a>

                @endauth

            </h6>
           
            <a href="{{ route('vr',['image'=>$mainImage ]) }}">
                <img src="{{asset('storage/gallery')}}/{{$mainImage}}" class="m-auto" >
            </a>
            
            <div class="m-3 text-center " >
                <p style="font-size: 20px; color: #000">{{ $description }}</p>
            </div>

      

    </section>

        <!-- Discover section -->
        @if ($subcities != '[]' )

            <section id="discover">
                <div class=" containertext-center">
                    <h6 class="section-title mb-5 text-center">Subcities</h6>
                    <div class="row">
                        @foreach ($subcities as $subcity)
                        <div class="col-sm-3">
                            <div class="img-wrapper" style="height: 300px; ">
                                <img src="{{asset('storage/gallery')}}/{{$subcity->main_image_sub}}" style="height: 100%;" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Creative studio Landing page">
                                <div class="overlay">
                                    <div class="overlay-infos">
                                        <h2 style="font-size: 26px;">{{ $subcity->title}}</h2>
                                        <a href="{{ route('subcity',['subcity_id'=>$subcity->id ]) }}" style="font-size: 26px;"><h5>View</h5></a>  
                                    </div>  
                                </div>
                            </div>               
                        </div>
                        @endforeach
                    
                    
                    </div>
                </div>
            </section>

        @endif
        <!-- End of Discover section -->
    <!-- End of city section -->


    