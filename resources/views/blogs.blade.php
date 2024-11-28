@extends('layout.en.layout')
 <!-- Preloader -->
 @section('route')
      <!-- Title Banner -->
      <section class="page-title">
            <div class="container">
                <ul class="breadcrumb unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a class="active" href="!#">Blogs</a></li>
                </ul>
                <h1 class="mb-0 color-dark-2">Latest</h1>
                <h3>Blogs</h3>
            </div>
        </section>


        <section class="blog-1 listing-page mb-48 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
          
            <div class="container">
                <div class="row">
                    <div class="search-bar col-xl-8 offset-xl-2 col-lg-6 offset-lg-3 col-md-8 offset-md-2 text-center">
           
                        <ul class="unstyled points mt-4">
                           
                        </ul>
                    </div>
                </div>
                <div class="row mt-64">

                @foreach ($data as $blog)
                <div class="col-lg-4 mb-4">
                        <a href="/singleBlog/{{$blog->id}}" class="box">
                            <div class="img-box">
                                <img class="br-25 shadow w-100" alt="{{$blog->title_en}}" src="/images/blogs/{{$blog->image_en}}">
                                <!-- <img class="author shadow br-15" alt="" src="assets/media/blogs/listing/author-1.png"> -->
                                <!-- <span class="shadow fs-24 br-15 date bg-white color-primary">12 DEC 2023</span> -->
                            </div>
                            <div class="content mt-48">
                                <h2 class="color-dark-2 fs-31  mb-2">{{ $blog->title_en }}</h2>
                                <p>{!! $blog->quotation_en !!}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
                 

                  
                </div>
                <!-- <div class="text-center">

                    <ul class="unstyled pagination-cus">
                        <li><a href=""><i class="fal fa-angle-left"></i></a></li>
                        <li><a href="" class="link active">01</a></li>
                        <li><a href="" class="link">02</a></li>
                        <li><a href="" class="link">03</a></li>
                        <li><a href=""><i class="fal fa-angle-right"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </section>
              

 @endsection
