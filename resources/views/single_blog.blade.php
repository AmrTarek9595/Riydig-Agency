@extends('layout.en.layout')
 <!-- Preloader -->
 @section('route')
     
    <section class="page-title">
            <div class="container">
                <ul class="breadcrumb unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="!#">Blogs</a></li>
                    <li><a class="active" href=!#">{{ $data->title_en }}</a></li>
                </ul>
                <h1 class="mb-0 color-dark-2">{{ $data->title_en }}</h1>
                <h3>Detail</h3>
            </div>
    </section>

    <section class="blog-detail mb-48 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">

            <div class="container">
            
                <div class="row mt-64">
                    <div class="col-lg-4 pe-0">
                        <img src="/images/blogs/{{$data->image_en}}" alt="{{$data->title_en}}" style="border-radius: 70px;    max-height: 360px;">
                    </div>
                    <div class="col-lg-8">
                        <h1 class="fs-69" alt="{{$data->title_en}}" tag="{{$data->title_en}}" >{{ $data->title_en }}</h1>
                        <div class="author-block">
                            <!-- <span class="shadow fs-24 br-15 date bg-white color-primary">12 DEC 2023</span> -->
                            <img class="author shadow br-15" alt="" src="assets/media/blogs/listing/author-1.png">

                        </div>
                        <p class="mt-100" alt="{{$data->title_en}}">{!! $data->quotation_en !!}</p>
                    </div>
                </div>
                <h2 class="fs-40 text-center color-dark" alt="{{$data->title_en}}" tag="{{$data->title_en}}"><span class="fs-40">"</span>{{ $data->title_en }}<span class="fs-40">"</span></h2>
                <div class="row" style="justify-content:center">
                <div class="col-8">
                <p>{!! $data->body_en !!}</p>

                </div>
                <ul>
                    @foreach ($keyword as $keyw)
                        
                    
                    <li style="display:none;">
                        <a href="https://riydig.agency" rel="tag" >{{$keyw->keyword }}</a>
                    </li>
                    @endforeach
                </ul>
                </div>
         
            </div>
        </section>
 @endsection

    
