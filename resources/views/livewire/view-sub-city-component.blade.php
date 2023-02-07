
    <!-- City section -->
    <section id="discover">
        <div class=" container text-center">
            <h6 class="section-title mb-5 text-center">
                {{ $title }}

                
                @auth
                 
                   <a href="{{ route('subcity.image.add',['subcity_id'=>$subcity_id ]) }}" class="btn btn-primary rounded">+ Add an Image </a>
                    
                   <a herf=""  class="btn btn-danger rounded text-white bg-danger"  onclick="confirm('Are you sure, You want to delete the subcity') || event.stopImmediatePropagation()"  wire:click.prevent="delete({{$subcity_id}})" style="margin-left:10px; background:#f62b45 !important "> 
                    Delete
                   </a>
 

                @endauth
                 


            </h6>
           
        
            <a href="{{ route('vr',['image'=>$mainImageSubcity ]) }}">
                <img src="{{asset('storage/gallery')}}/{{$mainImageSubcity}}" class="m-auto" >
            </a>
            

       
            @if ($images != '[]' )
                <div id="carouselExampleControlsNoTouching" class="carousel slide my-5" data-bs-touch="false" data-bs-interval="false">
                    <div class="carousel-inner" data-bs-interval="1000">
                        @foreach ($images as $image)
                            <div class="carousel-item   @if($loop->first) active @endif">
                                <img src="{{asset('storage/gallery')}}/{{$image->image}}"  class="d-block w-100" style="height: 500px">
                                <div class="carousel-caption d-none d-md-block bg-secondary">
                                    <p>{{ $image->description }}</p>
                                    @auth
                                    <a herf=""  class="btn btn-danger rounded text-white bg-danger"  onclick="confirm('Are you sure, You want to delete the city') || event.stopImmediatePropagation()"  wire:click.prevent="deleteimage({{$image->id}})" style="margin-left:10px; background:#f62b45 !important "> 
                                        Delete Image
                                    </a> 
                                    @endauth
                                    <a href="{{ route('vr',['image'=>$image->image ]) }}" class="btn  rounded text-white  btn-info">
                                        VR
                                    </a>
                                </div>
                        </div>
                        @endforeach
                    
                
                    </div>
                    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden ">Previous</span>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @endif
           


    </section>

 
    <!-- End of city section -->


    