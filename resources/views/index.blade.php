@extends('layout.en.layout')
 <!-- Preloader -->
 @section('route')

        <!-- Hero Slider start -->
        <section class="hero-banner-1">
            <div class="content text-center w-100">
     
                <div class="container-fluid">
                <div class="row" >
                    <div class="content">
                        <div class="text-reveal mb-32">
                            <!-- <span class="random-word h-91 color-sec">Web Design:</span> -->
                            <!-- <h1 "><br></h1> -->
                            <div class="dig_into_img">
                                <img src="/assets/media/Dig_into.png" alt="Riy Dig">
                            </div>

                            <div class="hero-h1 lazyloading">
                                
                      
                                <span style="color: #45c45e;" class="random-word h-91 color-primary"></span>
                            </div>
                        </div>
                        <p class="medium-gray mb-32">
                        </p>
                        <a href="/contact" class="cus-btn dark">Let's Dig Deeper</a>
                    </div>
                </div>
          
            </div>
                
            </div>
        </section>
        
<!-- Services Start -->
 <!-- data-sal="flip-down" data-sal-duration="800" data-sal-delay="300" data-sal-easing="ease-in-out" -->
<section class="team-2 about-1 team-section"  style="    position: relative;">
            <div class="heading-1 right">
                <h1 class="color-dark-2 fs-91 fw-7 text-uppercase lh-100 bg-img">Services
                </h1>
            </div>
            <div class="container">

                <div class="clearfix"></div>
                <div class="row mt-100">
                    <div class="col-lg-8 image-wraper ">
                        @foreach ($data as $index => $datas)
                                  <div class="img-box member-{!! $index + 1 !!}" style="{!! $index == 0 ? 'display: block;' : 'display: none;' !!}">
                           

                            <img class="team-img shadow lazyload" src="{{$datas->image_base64}}" alt="">
                            <h2 class="fs-53 mb-0 mt-4 color-dark-2">{{ $datas->title_en }}</h2>
                            <div class="row" style="gap: 1em;">
                                <div class="col-lg-4"> 
                                        <div class="button-wrapper primary">  
                                                    <a href="/service/{{$datas->id}}" class="button" type="button">
                                                        Discover More...
                                                        <span class="button-inner-wrapper">    
                                                        <span class="button-inner"></span>
                                                        </span>
                                                    </a>
                                        </div>

                                      
                                </div> 
                                <div class="col-lg-4">
                                        <div class="button-wrapper secondary">  
                                                    <a href="/services" class="button" type="button">
                                                        All Services
                                                        <span class="button-inner-wrapper">    
                                                        <span class="button-inner"></span>
                                                        </span>
                                                    </a>
                                        </div>
                                </div>
                            </div>
                          
                            
                        </div>
                        @endforeach
                  

                        
                    </div>


                    <div class="col-lg-4">
                        <ul class="unstyled members">

                            @foreach ( $data as $index =>$datas2 )
                                
                          
                            <li class="single member-1 {{ $index == 0 ? 'show' : '' }}" data-count="{{ $index + 1 }}">
                                <div class="content">
                                    
                                      
                                    <h3 class="fs-69 mb-0 lh-100">{{ $datas2->title_en }}</h3>



                                    <p>{{ $datas2->quotation_en }} 
                                    </p>
                                </div>
                            </li>
                            @endforeach
                            


                        </ul>
                    </div>
                </div>
            </div>
        </section>
<!-- Services end -->

        <!-- clients start -->
<!-- data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out" -->
        <section class="reviews-1 review-section" >
            <div class="heading-1 left">
            <h1 class="color-dark-2 fs-91 fw-7 text-uppercase lh-100 bg-img">Clients
            </h1>
            </div>
            <div class="container" style="    margin-top: 100px;max-width: 100%;text-align: center;">
             <h4 class="glitter-text  text-center">Our Team Worked with these Valued Clients</h4> 
                <!-- <h2 class="our-team-clients">Our Team Worked with these Valued Clients</h2> -->
                <!-- <div class="logo-slider">
                    <div class="row logo-slide-track">
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/1_Trivium.png" alt="Trivium" />
                    </div> 
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/2_inm.png" alt="inm" />
                    </div> 
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/3_INMA.png" alt="INMA" />
                    </div> 
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/4_Trend_Aqar.png" alt="Trend Aqar" />
                    </div> 
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/5_Makan.png" alt="Makan" />
                    </div> 
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/6_Genena_Mall.png" alt="Genena Mall" />
                    </div>
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/7_Landor.png" alt="Landor" />
                    </div> 
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/8_Las.png" alt="Las Vegan" />
                    </div> 
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/9_Chilis.png" alt="Chilis" />
                    </div> 
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/10_Tseppas.png" alt="Tseppas" />
                    </div> 
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/11_President.png" alt="President" />
                    </div> 
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/12_BMW.png" alt="BMW" />
                    </div> 
                    <div class="col-2 slide">
                        <img src="/assets/media/CL/13_Land.png" alt="Land Rover" />
                    </div>     
                </div>
                <div class="logo-slide-track">
                   
                
                    <div class="slide">
                        <img src="/assets/media/CL/14_JAG.png" alt="JAGUAR" />
                    </div> 
                    <div class="slide">
                        <img src="/assets/media/CL/15_Ford.png" alt="Ford" />
                    </div> 
                    <div class="slide">
                        <img src="/assets/media/CL/16_Levon.png" alt="Levon" />
                    </div> 
                    <div class="slide">
                        <img src="/assets/media/CL/17_Beko.png" alt="Beko" />
                    </div> 
                    <div class="slide">
                        <img src="/assets/media/CL/18_Atlantic.png" alt="Atlantic" />
                    </div>     <div class="slide">
                        <img src="/assets/media/CL/19_Spotify.png" alt="Spotify" />
                    </div> 
                    <div class="slide">
                        <img src="/assets/media/CL/20_Etisalat.png" alt="Etisalat" />
                    </div> 
                    <div class="slide">
                        <img src="/assets/media/CL/21_Oredo.png" alt="Oredo" />
                    </div> 
                    <div class="slide">
                        <img src="/assets/media/CL/22_EU.png" alt="EU" />
                    </div> 
                    <div class="slide">
                        <img src="/assets/media/CL/23_Governrate.png" alt="Governrate" />
                    </div> 
                    <div class="slide">
                        <img src="/assets/media/CL/24_Genena.png" alt="Genena" />
                    </div>
                    <div class="slide">
                        <img src="/assets/media/CL/25_Plan.png" alt="Plan" />
                    </div> 
                    <div class="slide">
                        <img src="/assets/media/CL/26_Verfifed_Agency_Hexagonal.png" alt="Verfifed Agency Hexagonal"/>
                    </div> -
                    


                </div> -->
                <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">

        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

<div class="container overflow-hidden">
    <div class="row gy-1 client_logo">
        <div class="col-12 col-md-12 align-self-center text-center ">
        <img src="/assets/media/CL/clients.PNG" alt="JAGUAR" class="lazyload"/>
        </div>
        <!-- <div class="col-3 col-md-2 align-self-center text-center ">
        <img src="/assets/media/CL/14_JAG.png" alt="JAGUAR" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/15_Ford.png" alt="Ford" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/16_Levon.png" alt="Levon" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/17_Beko.png" alt="Beko" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/18_Atlantic.png" alt="Atlantic" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/19_Spotify.png" alt="Spotify" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/20_Etisalat.png" alt="Etisalat" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/21_Oredo.png" alt="Oredo" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/22_EU.png" alt="EU" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/23_Governrate.png" alt="Governrate" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/24_Genena.png" alt="Genena" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/25_Plan.png" alt="Plan" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/26_Verfifed_Agency_Hexagonal.png" alt="Verfifed Agency Hexagonal" class="lazyload"/>
        </div> -->
        
        <!-- Second LOGOS -->
        <!-- <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/1_Trivium.png" alt="Trivium" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/2_inm.png" alt="inm" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/3_INMA.png" alt="INMA" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/4_Trend_Aqar.png" alt="Trend Aqar" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/5_Makan.png" alt="Makan" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/6_Genena_Mall.png" alt="Genena Mall" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/7_Landor.png" alt="Landor" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/8_Las.png" alt="Las Vegan" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/9_Chilis.png" alt="Chilis" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/10_Tseppas.png" alt="Tseppas" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/11_President.png" alt="President" class="lazyload"/>
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/12_BMW.png" alt="BMW" class="lazyload" />
        </div>
        <div class="col-3 col-md-2 align-self-center text-center">
        <img src="/assets/media/CL/13_Land.png" alt="Land Rover" class="lazyload"/>
        </div> -->

        </div>
    </div>


                        </div>
          
        </section>
        <!-- clients end -->  




<!-- data-sal="flip-down" data-sal-duration="800" data-sal-delay="300" data-sal-easing="ease-in-out" -->
 <!-- data-sal="flip-down" data-sal-duration="800" data-sal-delay="300" data-sal-easing="ease-in-out" -->
        <!-- About start -->
        <section class="about-1"  style="margin-top:15px">
            <div class="heading-1 right" >
                <h1 class="color-dark-2 fs-91 fw-7 text-uppercase mb-0 lh-100 bg-img">About us
                </h1>   
            </div>
            <div class="container">
                
                <div class="clearfix"></div>
                <div class="row mt-48">
                    <div class="col-lg-6">
                        <img src="assets/media/about/2150976030.jpg" alt="" style="height:80%">
                    </div>
                    <div class="col-lg-6">
                        <p class="fs-53 color-dark-2 ls-0">Ideology</p>
                        <p class="ps-3">We are a marketing powerhouse, fostering valued partnerships across Egypt, Saudi Arabia, and the United Arab Emirates.<br>
                        
                        </p>

                        <p class="ps-3">  Driven by innovation, we unite regional insights with a global outlook to craft strategies that resonate with diverse audiences and drive measurable impact.</p>
                        <div class="steps mt-100">
                            <div class="title fs-155 fw-7 text-uppercase">Steps</div>
                            <div class="row mb-5" data-sal="slide-up" data-sal-duration="2000" data-sal-delay="100" data-sal-easing="ease-in-out">
                                <div class="col-lg-3 col-sm-2 counting">
                                    <strong class="fs-53 color-dark-2 text-uppercase lh-100 position-relative z-2">01</strong>
                                </div>
                                <div class="col-lg-9 col-sm-10">
                                    <p><strong class="color-dark-2">Discover:</strong> We dig deep into the essence of your brand, <br>revealing unique strengths that set you apart.
                                    </p>
                                </div>
                            </div>
                            <div class="row mb-5" data-sal="slide-down" data-sal-duration="2000" data-sal-delay="100" data-sal-easing="ease-in-out">
                                <div class="col-lg-3 col-sm-2 counting">
                                    <strong class="fs-53 color-dark-2 text-uppercase lh-100 position-relative z-2">02</strong>
                                </div>
                                <div class="col-lg-9 col-sm-10">
                                    <p><strong class="color-dark-2">Create:</strong> Build Brands’ authentic voice and bespoke strategies,<br> fueled by insights and creative minds.
                                    </p>
                                </div>
                            </div>
                            <div class="row mb-5" data-sal="slide-up" data-sal-duration="2000" data-sal-delay="100" data-sal-easing="ease-in-out">
                                <div class="col-lg-3 col-sm-2 counting">
                                    <strong class="fs-53 color-dark-2 text-uppercase lh-100 position-relative z-2">03</strong>
                                </div>
                                <div class="col-lg-9 col-sm-10">
                                    <p><strong class="color-dark-2">Launch:</strong> implement strategy with precision, ensuring a smooth and impactful entry into the market.
                                    </p>
                                </div>
                            </div>
                            <div class="row" data-sal="slide-down" data-sal-duration="2000" data-sal-delay="100" data-sal-easing="ease-in-out">
                                <div class="col-lg-3 col-sm-2 counting">
                                    <strong class="fs-53 color-dark-2 text-uppercase lh-100 position-relative z-2">04</strong>
                                </div>
                                <div class="col-lg-9 col-sm-10">
                                    <p><strong class="color-dark-2">Evolve:</strong>  Continuously optimize for results, ensuring your brand stands out in a dynamic market.

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 
        



        <!-- Project start -->
        <section class="reviews-1 review-section" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
            <div class="heading-1 left">
                <h1 class="color-dark-2 fs-91 fw-7 text-uppercase lh-100 bg-img">Projects
                </h1>
            </div>
            <div class="container" s>
                <h2 class="vertitle-title">GLOBAL</h2>
                <div class="row mt-64">
                    <div class="col-lg-10 offset-lg-2">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="row">
                                <div class="row">
                                    <div class="col-lg-12  col-sm-6">
                                        <div class="box client-1 show shadow cus-margin mb-5" data-count="1">
                                        <a href="/portfolio"><img src="/images/projects_index/All_Projects.jpg"></a>
                                        </div>
                                    </div>
                                </div>
                                    
                                </div>

                                <div class="content">
                                    <div class="client-1 show">
                                        <p></p>
                                    </div>
                                 
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row mb-4">

                                @foreach ($data1 as $index=>$data)
                                         <div class="col-lg-6 col-sm-6">
                                        <div class="box client-2 shadow" data-count="{{$index+1}}">
                                        @if (str_contains($data, ' '))
                              
                                        @if(str_replace(' ', '_', $data) =='Social_Media')
                                        <a href="portfolio?type={{str_replace(' ', '_', $data) }}">    
                                        <img src="/images/projects_index/social.png">
                                        </a> 
                                        @elseif(str_replace(' ', '_', $data) =='Mobile_Apps')
                                        <a href="portfolio?type={{str_replace(' ', '_', $data) }}">    
                                        <img src="/images/projects_index/App.png">
                                        </a>
                                        @endif
                                        <!-- <a href="portfolio?type={{str_replace(' ', '_', $data) }}">{{$data}}</a> -->
                    
                                    
                                        @else
                                        @if($data =='Identity')
                                        <a href="portfolio?type={{$data}}">    
                                        <img src="/images/projects_index/Id.png">
                                        </a>
                                        @elseif($data =='Website')
                                        <a href="portfolio?type={{$data}}">    
                                        <img src="/images/projects_index/web.png">
                                        </a>
                                        @endif
                                        @endif
                                      
                                        </div>
                                    </div>
                                @endforeach
                               
                                    <!-- <div class="col-lg-6 col-sm-6">
                                        <div class="box client-3 shadow" data-count="3">
                                        <a href="/portfolio?type=Mobile_Apps">Mobile Application</a>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="box client-4 shadow" data-count="4">
                                         <a>Media Buying</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="box client-5 shadow" data-count="5">
                                            <a>SEO/SEM</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="col-lg-2 col-sm-6">
                                        <div class="box client-1 shadow cus-margin" data-count="6">
                                        <a>OOH</a>
                                        </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- project end -->     
        <section class="blog-1 mb-100 mt-64 sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100" data-sal-easing="ease-in-out">
            <div class="heading-1 right">
                <h1 class="color-dark-2 fs-91 fw-7 text-uppercase lh-100 mb-0">News</h1>
            </div>
            <div class="container">
                <div class="clearfix"></div>
                <div class="row mt-100">
                    @foreach ($data3 as $data )
                    <div class="col-lg-4">
                        <a href="/singleBlog/{{$data->id}}" class="box">
                            <div class="img-box">
                                <img class="br-25 shadow w-100" alt="" src="/images/blogs/{{$data->image_en}}">
                               
                                
                            </div>
                            <div class="content mt-64">
                                <h2 class="color-dark-2 fs-31  mb-2">{{ $data->title_en }}</h2>
                                <p>{{$data->quotation_en}}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
              
      
                </div>
            </div>
        </section>
        @endsection

<style lang="scss">
    .reviews-1 .box a{
        font-size:2.5em;color:#262626;font-weight: 750;
    }
    


.button-wrapper {
  filter: drop-shadow(0 8px 8px var(--shadow-color));
}
.button-wrapper.primary {
  --shadow-color: rgb(36 25 95 / .8);
}
.button-wrapper.secondary {
    --shadow-color: rgb(36 25 95 / .8);
}

.button {
  position: relative;
  padding: 12px 40px;
  min-width: 12em;
  /* clip-path: polygon(14px 0, calc(100% - 14px) 0, 100% 50%, calc(100% - 14px) 100%, 14px 100%, 0 50%); */
  text-align: center;
  font-family: ""Givonic"", san-serif;
  color: black;
  transition-property: transform;
  transition-duration: 0.4s;
  transition-timing-function: cubic-bezier(0.55, 1, 0.15, 1);
  border-radius: 20px;
}
.button-wrapper.primary .button {
  /* background-image: linear-gradient(to bottom, #29224d, #776cc9); */
  background-image: linear-gradient(to bottom, #f7fffc, #cccccc);
}
.button-wrapper.primary .button:hover {
    background-image: linear-gradient(to bottom, #6916ad, #5b99c2);
}
.button-wrapper.secondary .button {
    /* background-image: linear-gradient(to bottom, #6916ad, #5b99c2); */
    background-image: linear-gradient(to bottom, #f7fffc, #cccccc);
}
.button-wrapper.secondary .button:hover {
    background-image: linear-gradient(to bottom, #6916ad, #5b99c2);
}
.button:active {
  transform: scale(0.94);
}

.button-inner-wrapper {
  /* position: absolute;
  z-index: -1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  filter: blur(2px); */
}

.button-inner {
  /* content: "";
  position: absolute;
  z-index: -1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  clip-path: polygon(14px 4px, calc(100% - 14px) 4px, calc(100% - 1px) 50%, calc(100% - 14px) calc(100% - 4px), 14px calc(100% - 4px), 1px 50%); */
  background: white;
    color: black;
    backdrop-filter: blur(2.5px);
    margin-top: 12%;
    box-shadow: 41px 71px 33px rgba(0, 0, 0, 0.01), 23px 40px 28px rgba(0, 0, 0, 0.05), 10px 18px 20px rgba(0, 0, 0, 0.09), 3px 4px 11px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);

}
.button-wrapper.primary .button-inner {
  background-image: linear-gradient(to bottom, #080616, #3e3861);
}
.button-wrapper.secondary .button-inner {
  background-image: linear-gradient(to right, #67666e, #0f0d21);
}

</style>
    

    