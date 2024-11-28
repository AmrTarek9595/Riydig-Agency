@extends('layout.en.layout')
 <!-- Preloader -->
 @section('route')
   
        <section class="page-title">
            <div class="container">
                <ul class="breadcrumb unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="!#" class="active">Portfolio</a></li>
                </ul>
                <h1 class="mb-0 color-dark-2">Portfolio</h1>
                <style>
                    
             </style>
             <h3 class="colorful-text" style="font-size: 150px;">  
                 portfolio

                </h3>
             
            </div>
        </section>
        <!-- title Banner end -->
        <!-- portfolio start -->
        <section class="portoflio-3 container">
            <div class="isotope-wrapper">
                <div class="isotope-toolbar text-center mb-100">
                    <label>
                        <button class="isotope-toolbar-btn" data-type="*" name="isotope-filter">
                            <span>All Categories</span>
                        </button>
                    </label> 
                    @foreach ($data1 as $data)
                            <label>  
                                
                        @if (str_contains($data, ' '))
                        <button class="isotope-toolbar-btn" data-type="{{ str_replace(' ', '_', $data)  }}" name="isotope-filter">
                            <span>{{ $data }}</span>
                        </button>
                        @else
                        <button class="isotope-toolbar-btn" data-type="{{$data}}" name="isotope-filter">
                            <span>{{ $data }}</span>
                        </button>
                        @endif
                    </label>
                    @endforeach
                
<!-- 
                   
                    <label>
                        <button class="isotope-toolbar-btn" data-type="Website" name="isotope-filter">
                            <span>Websites</span>
                        </button>
                    </label>
                    <label>
                        <button class="isotope-toolbar-btn" data-type="design" name="isotope-filter">
                            <span>Design</span>
                        </button>
                    </label> -->
                </div>
                <div class="isotope-box">


                    @foreach ($data1 as $distinict_data )

                    @if (str_contains($distinict_data, ' '))
                            <div class="isotope-item image-wraper w-100" data-type="{{str_replace(' ', '_', $distinict_data)}}">

                    @foreach ($data2 as $all_data )
                    @if($all_data->type ==$distinict_data)
                        <div class="img-box">
                            <img src="/images/projects/{{$all_data->image_name}}" alt="" class="br-25 soft-shadow w-100">
                            <div class="overlay">
                                <span>{{$distinict_data}}</span>
                                <div class="center">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#portfolioModal_{{$all_data->id}}"><i class="fal fa-eye"></i></button>
                                    <p>{{ $all_data->project_title }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach

            
                    </div>
                    @else
                    <div class="isotope-item image-wraper w-100" data-type="{{ $distinict_data }}">
                    @foreach ($data2 as $all_data )
                    @if($all_data->type ==$distinict_data)
                        <div class="img-box">
                            <img src="/images/projects/{{$all_data->image_name}}" alt="" class="br-25 soft-shadow w-100">
                            <div class="overlay">
                                <span>{{$distinict_data}}</span>
                                <div class="center">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#portfolioModal_{{$all_data->id}}"><i class="fal fa-eye"></i></button>
                                    <p>{{ $all_data->project_title }}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    </div>
                    @endif
                    @endforeach
    

            



                </div>
            </div>
        </section>
        <!-- Portfolio Detail Modal-->


        @foreach ($data2 as $return_data )
                 <div class="modal fade" id="portfolioModal_{{$return_data->id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img alt="" src="/images/projects/{{$return_data->image_name}}" class="w-100 shadow br-25">
                            </div>
                            <div class="col-lg-8">
                                <p>{{ $return_data->type }}</p>
                                <h1 class="fs-69 color-dark-2">{{ $return_data->project_title }}</h1>
                                <p class="ps-5">{!! $return_data->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="modal fade" id="portfolioModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <img alt="" src="assets/media/portfolio/image-13.png" class="w-100 shadow br-25">
                            </div>
                            <div class="col-lg-8">
                                <p>Digital</p>
                                <h1 class="fs-69 color-dark-2">INVERTED TOWER</h1>
                                <p class="ps-5">Inverted Tower is a stunning architectural project that challenged
                                    conventional notions of building design. The tower was designed to be a visual
                                    masterpiece that captures the imagination of viewers while offering unparalleled
                                    functionality. The tower features an inverted structure, with the lower levels wider
                                    than the upper levels, giving it a distinct look that stands out from any other
                                    building in its vicinity. <br><br>The project involved a comprehensive approach to design,
                                    incorporating cutting-edge technology and innovative construction techniques to
                                    bring the tower to life. The result is a truly awe-inspiring building that has
                                    become an iconic symbol of the city.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
@endsection