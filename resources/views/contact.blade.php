@extends('layout.en.layout')
 <!-- Preloader -->
 @section('route')
 <section class="page-title">
            <div class="container">
                <ul class="breadcrumb unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="!#" class="active">contact</a></li>
                </ul>
                <h1 class="mb-0 color-dark-2" ">Contact</h1>
               
                <h3 class="colorful-text" style="font-size: 185px;">  
          contact
                </h3>
            </div>
        </section>
        <section class="mt-100 contact container">
            <div class="row">
                <div class="col-lg-6" style="justify-content: center;display: flex;">
                    <img alt="" src="assets/media/service/2150169152.jpg" style="height: 88%;width: 90%;">
                </div>
                <div class="col-lg-6">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                                    @endforeach
                            </ul>
                                </div>
                            @endif
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="post" action="/contact_us" class=" contact-form" novalidate="novalidate">
                        @csrf
                        <div class="mb-3 form-group">
                            <input class="form-control" name="name" required="" placeholder="Name">
                        </div>
                        <div class="mb-3 form-group">
                            <input class="form-control" name="email" required="" placeholder="Email">
                        </div>
                        <div class="mb-4 form-group">
                            <textarea class="form-control" name="message" rows="6" required="" placeholder="message"></textarea>
                        </div>
                            <button type="submit" class="cus-btn light">Send Message</button>
                        <!-- Alert Message -->
                        <div id="message" class="bg-dark-2 color-white p-4 mt-4 alert-message"></div>
                    </form>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <ul class="links unstyled">
                                <li><a href="mailto:innovate@riydig.agency"><i class="fal fa-envelope"></i> innovate@riydig.agency</a>
                                </li>
                                <li><a href="tel:+201009496843"><i class="fal fa-phone"></i> +20 100 949 6843</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="links unstyled">
                                <li><a href="https://maps.app.goo.gl/E39k18egdH5MBRuF7" target="__blank"><i class="fal fa-map-marker-alt"></i> Nasr City</a></li>
                                <li><a href="https://wa.me/+201040489757?text=hello, i'm coming from RiyDig Agency" target="__blank"><i class="fal fab fa-whatsapp"></i>+20 104 048 9757</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 @endsection
 