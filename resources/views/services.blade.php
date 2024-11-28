@extends('layout.en.layout')
 <!-- Preloader -->
 @section('route')
      <!-- Title Banner -->
      <section class="page-title">
            <div class="container">
                <ul class="breadcrumb unstyled">
                    <li><a href="/">Home</a></li>
                    <li class="active"><a href="/services">Services</a></li>
                </ul>
                <h1 class="mb-0 color-dark-2">Services</h1>
               
                <h3 class="colorful-text">  
                   Services
                </h3>
            </div>
        </section>
        <!-- title Banner end -->
       
                <!-- Services start -->
                <section class="services-3 mt-100 container sal-animate" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="500" data-sal-easing="ease-in-out">
                    <div class="row">
      


           
                        <!-- Bottom to top-->
                       
 


                  
                        
                        <!-- end Bottom to top-->
 

 
    <div class="row">    
  

              @foreach ($data as $index => $datas)
              <div class="col-lg-6 mb-48 boxx sal-animate" data-sal="slide-down" data-sal-duration="200" data-sal-delay="500" data-sal-easing="ease-in-out">

                            <a href="/service/{{$datas->id}}" class="box">
                                <img src="/images/{{$datas->image_name}}" alt="">
                                <h2 class="fs-40 color-dark-2"> {{ $datas->title_en }}</h2>

                            </a>
              </div> 
                @endforeach
                     
    </div>
</section>
              

 @endsection
 <style lang="scss">


                    .box{
                        display: flex !important;
                        flex-direction: row;
                        gap: 2em;
                       
                    }
                    .box img{
                            width: 300px !important;
                            height:350px;
                            border-top-left-radius: 20px;
                            border-bottom-left-radius: 20px;
                        }
                        .boxx{
                            background-color:transparent,  right;
                                background-size: 200%;
                                transition: all 0.5s ease-in-out !important;
                        }
                        .boxx:hover{
                            background-position: left;
                            box-shadow: -9px 3px 19px 4px #888888;
                            border-top-left-radius: 20px;
                            border-bottom-left-radius: 20px;
                            padding-left: 0px !important;
                            border-radius: 30px;
                        }
                       
                </style>
    
