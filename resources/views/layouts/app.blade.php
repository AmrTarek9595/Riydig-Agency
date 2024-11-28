

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>RIYDIG-Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
<meta name="description" content="This is an example dashboard created using build-in elements and components.">
                @vite(['resources/sass/app.scss', 'resources/js/app.js'])
<meta name="msapplication-tap-highlight" content="no">
<link href="/dashboard/main.d810cf0ae7f39f28f336.css" rel="stylesheet">
<link rel="stylesheet" href="/dashboard/richtexteditor/rte_theme_default.css" />
		<script type="text/javascript" src="/dashboard/richtexteditor/rte.js"></script>
        <script type="text/javascript" src='/dashboard/richtexteditor/plugins/all_plugins.js'></script>

</head>
<style>
    
  /*-------------------------
  Layout Styles
-------------------------*/
#preloader {
  position: fixed;
  width: 100%;
  height: 100vh;
  text-align: center;
  background: #F7FFFC;
  z-index: 9999999;
  padding-top: 20%;
}
#preloader .loader {
  font-size: 140px;
  display: inline-block;
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
  color: #BF0A30;
  letter-spacing: 2px;
  position: relative;
  box-sizing: border-box;
}
#preloader .loader::after {
  content: "RIYDIG";
  position: absolute;
  left: 0;
  top: 0;
  color: #263238;
  text-shadow: 0 0 2px #FFF, 0 0 1px #FFF, 0 0 1px #FFF;
  width: 100%;
  height: 100%;
  overflow: hidden;
  box-sizing: border-box;
  animation: animloader 6s linear infinite; 
}

@keyframes animloader {
  0% {
    height: 100%;
  }
  100% {
    height: 0%;
  }
}
</style>
<body>
    <div id="preloader" >
        <span class="loader">RIYDIG</span>
    </div>

        <!-- Your dynamic content goes here -->

<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
<div class="app-header header-shadow">
<div class="app-header__logo">
<div class="logo-src"></div>
<div class="header__pane ml-auto">
<div>
<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
</div>
<div class="app-header__mobile-menu">
<div>
<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
<div class="app-header__menu">
<span>
<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
<span class="btn-icon-wrapper">
<i class="fa fa-ellipsis-v fa-w-6"></i>
</span>
</button>
</span>
</div> <div class="app-header__content">

<div class="app-header-right">

<div class="header-btn-lg pr-0">
<div class="widget-content p-0">
<div class="widget-content-wrapper">

<div class="widget-content-left  ml-3 header-user-info">
<div class="widget-heading">     <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('view-login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('view-register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>


                    <!doctype html>
 </div>

</div>

</div>
</div>
</div>


</div>
</div>
</div> 




<div class="app-main">
<div class="app-sidebar sidebar-shadow">
<div class="app-header__logo">
<div class="logo-src"></div>
<div class="header__pane ml-auto">
<div>
<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
</div>
<div class="app-header__mobile-menu">
<div>
<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
<div class="app-header__menu">
<span>
<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
<span class="btn-icon-wrapper">
<i class="fa fa-ellipsis-v fa-w-6"></i>
</span>
</button>
</span>
</div> <div class="scrollbar-sidebar">
<div class="app-sidebar__inner">
<ul class="vertical-nav-menu">
<li class="app-sidebar__heading">Menu</li>
<li class="mm-active" class="{{ Request::is(['mainPage']) ? 'mm-active' : '' }}">
<a href="#">
<i class="metismenu-icon pe-7s-rocket"></i>Dashboards
<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
</a>
<ul>
<li>
<a href="/mainPage"  class="{{ Request::is('mainPage') ? 'mm-active' : '' }}">
<i class="metismenu-icon"></i>Home
</a>
</li>



</ul>
</li>


<li class="app-sidebar__heading">Services</li>

<ul>

	<li>
	<a href="/addServices"  class="{{ Request::is('addServices') ? 'mm-active' : '' }}">
	<i class="metismenu-icon"></i>Add Services
	</a>
	</li>
    <li>
	<a href="/DisplayServices"  class="{{ Request::is('DisplayServices') ? 'mm-active' : '' }}">
	<i class="metismenu-icon"></i>Display Services
	</a>
	</li>

	
	</ul>
  <li class="app-sidebar__heading">Contact US</li>

<ul>



	<li>
	<a href="/contactUSAdmin" class="{{ Request::is('contactUSAdmin') ? 'mm-active' : '' }}">
	<i class="metismenu-icon">
	</i>Leads From Conatct US
	</a>
	</li>
	
	</ul>
  <li class="app-sidebar__heading">Blogs</li>

<ul>



	<li>
	<a href="/addBlogs" class="{{ Request::is('addBlogs') ? 'mm-active' : '' }}">
	<i class="metismenu-icon">
	</i>Add Blog
	</a>
	</li>
	
  <li>
	<a href="/DisplayBlogs" class="{{ Request::is('DisplayBlogs') ? 'mm-active' : '' }}">
	<i class="metismenu-icon">
	</i>Display Blogs
	</a>
	</li>
	</ul>

  <li class="app-sidebar__heading">Projects</li>

<ul>



	<li>
	<a href="/AddNewProject" class="{{ Request::is('AddNewProject') ? 'mm-active' : '' }}">
	<i class="metismenu-icon">
	</i>Add Project
	</a>
	</li>
	
  <li>
	<a href="/DisplayProjects" class="{{ Request::is('DisplayProjects') ? 'mm-active' : '' }}">
	<i class="metismenu-icon">
	</i>Display Project
	</a>
	</li>
	</ul>

</ul>
</div>
</div>
</div>



@yield('content')


</div>
</div>


<div class="app-drawer-wrapper">
<div class="drawer-nav-btn">
<button type="button" class="hamburger hamburger--elastic is-active">
<span class="hamburger-box"><span class="hamburger-inner"></span></span>
</button>
</div>
<div class="drawer-content-wrapper">
<div class="scrollbar-container">
<h3 class="drawer-heading">Servers Status</h3>
<div class="drawer-section">
<div class="row">
<div class="col">
<div class="progress-box">
<h4>Server Load 1</h4>
<div class="circle-progress circle-progress-gradient-xl mx-auto">
<small></small>
</div>
</div>
</div>
<div class="col">
<div class="progress-box">
<h4>Server Load 2</h4>
<div class="circle-progress circle-progress-success-xl mx-auto">
<small></small>
</div>
</div>
</div>
<div class="col">
<div class="progress-box">
<h4>Server Load 3</h4>
<div class="circle-progress circle-progress-danger-xl mx-auto">
<small></small>
</div>
</div>
</div>
</div>
<div class="divider"></div>
<div class="mt-3">
<h5 class="text-center card-title">Live Statistics</h5>
<div id="sparkline-carousel-3"></div>
<div class="row">
<div class="col">
<div class="widget-chart p-0">
<div class="widget-chart-content">
<div class="widget-numbers text-warning fsize-3">43</div>
<div class="widget-subheading pt-1">Packages</div>
</div>
</div>
</div>
<div class="col">
<div class="widget-chart p-0">
<div class="widget-chart-content">
<div class="widget-numbers text-danger fsize-3">65</div>
<div class="widget-subheading pt-1">Dropped</div>
</div>
</div>
</div>
<div class="col">
<div class="widget-chart p-0">
<div class="widget-chart-content">
<div class="widget-numbers text-success fsize-3">18</div>
<div class="widget-subheading pt-1">Invalid</div>
</div>
</div>
</div>
</div>
<div class="divider"></div>
<div class="text-center mt-2 d-block">
<button class="mr-2 border-0 btn-transition btn btn-outline-danger">Escalate Issue</button>
<button class="border-0 btn-transition btn btn-outline-success">Support Center</button>
</div>
</div>
</div>
<h3 class="drawer-heading">File Transfers</h3>
<div class="drawer-section p-0">
<div class="files-box">
<ul class="list-group list-group-flush">
<li class="pt-2 pb-2 pr-2 list-group-item">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left opacity-6 fsize-2 mr-3 text-primary center-elem">
<i class="fa fa-file-alt"></i>
</div>
<div class="widget-content-left">
<div class="widget-heading font-weight-normal">TPSReport.docx</div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="btn-icon btn-icon-only btn btn-link btn-sm">
<i class="fa fa-cloud-download-alt"></i>
</button>
</div>
</div>
</div>
</li>
<li class="pt-2 pb-2 pr-2 list-group-item">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left opacity-6 fsize-2 mr-3 text-warning center-elem">
<i class="fa fa-file-archive"></i>
</div>
<div class="widget-content-left">
<div class="widget-heading font-weight-normal">Latest_photos.zip</div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="btn-icon btn-icon-only btn btn-link btn-sm">
<i class="fa fa-cloud-download-alt"></i>
</button>
</div>
</div>
</div>
</li>
<li class="pt-2 pb-2 pr-2 list-group-item">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left opacity-6 fsize-2 mr-3 text-danger center-elem">
<i class="fa fa-file-pdf"></i>
</div>
<div class="widget-content-left">
<div class="widget-heading font-weight-normal">Annual Revenue.pdf</div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="btn-icon btn-icon-only btn btn-link btn-sm">
<i class="fa fa-cloud-download-alt"></i>
</button>
</div>
</div>
</div>
</li>
<li class="pt-2 pb-2 pr-2 list-group-item">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left opacity-6 fsize-2 mr-3 text-success center-elem">
<i class="fa fa-file-excel"></i>
</div>
<div class="widget-content-left">
<div class="widget-heading font-weight-normal">Analytics_GrowthReport.xls</div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="btn-icon btn-icon-only btn btn-link btn-sm">
<i class="fa fa-cloud-download-alt"></i>
</button>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
<h3 class="drawer-heading">Tasks in Progress</h3>
<div class="drawer-section p-0">
<div class="todo-box">
<ul class="todo-list-wrapper list-group list-group-flush">
<li class="list-group-item">
<div class="todo-indicator bg-warning"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox1266" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox1266">&nbsp;</label>
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Wash the car
<div class="badge badge-danger ml-2">Rejected</div>
</div>
<div class="widget-subheading"><i>Written by Bob</i></div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="border-0 btn-transition btn btn-outline-success">
<i class="fa fa-check"></i>
</button>
<button class="border-0 btn-transition btn btn-outline-danger">
<i class="fa fa-trash-alt"></i>
</button>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-focus"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox1666" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox1666">&nbsp;</label>
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Task with hover dropdown menu</div>
<div class="widget-subheading">
<div>By Johnny
<div class="badge badge-pill badge-info ml-2">NEW</div>
</div>
</div>
</div>
<div class="widget-content-right widget-content-actions">
<div class="d-inline-block dropdown">
<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
<i class="fa fa-ellipsis-h"></i>
</button>
<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
<h6 tabindex="-1" class="dropdown-header">Header</h6>
<button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
<button type="button" tabindex="0" class="dropdown-item">Another Action</button>
<div tabindex="-1" class="dropdown-divider"></div>
<button type="button" tabindex="0" class="dropdown-item">Another Action</button>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-primary"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox4777" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox4777">&nbsp;</label>
</div>
</div>
<div class="widget-content-left flex2">
<div class="widget-heading">Badge on the right task</div>
<div class="widget-subheading">This task has show on hover actions!</div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="border-0 btn-transition btn btn-outline-success">
<i class="fa fa-check"></i>
</button>
</div>
<div class="widget-content-right ml-3">
<div class="badge badge-pill badge-success">Latest Task</div>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-info"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox2444" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox2444">&nbsp;</label>
</div>
</div>
<div class="widget-content-left mr-3">
<div class="widget-content-left">
<img width="42" class="rounded" src="/dashboard/assets/images/avatars/1.jpg" alt="">
</div>
</div>
<div class="widget-content-left">
<div class="widget-heading">Go grocery shopping</div>
<div class="widget-subheading">A short description ...</div>
</div>
<div class="widget-content-right widget-content-actions">
<button class="border-0 btn-transition btn btn-sm btn-outline-success">
<i class="fa fa-check"></i>
</button>
<button class="border-0 btn-transition btn btn-sm btn-outline-danger">
<i class="fa fa-trash-alt"></i>
</button>
</div>
</div>
</div>
</li>
<li class="list-group-item">
<div class="todo-indicator bg-success"></div>
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-2">
<div class="custom-checkbox custom-control">
<input type="checkbox" id="exampleCustomCheckbox3222" class="custom-control-input">
<label class="custom-control-label" for="exampleCustomCheckbox3222">&nbsp;</label>
</div>
</div>
<div class="widget-content-left flex2">
<div class="widget-heading">Development Task</div>
<div class="widget-subheading">Finish React ToDo List App</div>
</div>
<div class="widget-content-right">
<div class="badge badge-warning mr-2">69</div>
</div>
<div class="widget-content-right">
<button class="border-0 btn-transition btn btn-outline-success">
<i class="fa fa-check"></i>
</button>
<button class="border-0 btn-transition btn btn-outline-danger">
<i class="fa fa-trash-alt"></i>
</button>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
<h3 class="drawer-heading">Urgent Notifications</h3>
<div class="drawer-section">
<div class="notifications-box">
<div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
<div class="vertical-timeline-item dot-danger vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">All Hands Meeting</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-warning vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<p>Yet another one, at <span class="text-success">15:00 PM</span></p>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-success vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">Build the production release
<div class="badge badge-danger ml-2">NEW</div>
</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-primary vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">Something not important
<div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="/dashboard/assets/images/avatars/1.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="/dashboard/assets/images/avatars/2.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="/dashboard/assets/images/avatars/3.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="/dashboard/assets/images/avatars/4.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="/dashboard/assets/images/avatars/5.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="/dashboard/assets/images/avatars/6.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="/dashboard/assets/images/avatars/7.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm">
<div class="avatar-icon">
<img src="/dashboard/assets/images/avatars/8.jpg" alt="">
</div>
</div>
<div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
<div class="avatar-icon"><i>+</i></div>
</div>
</div>
</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-info vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon bounce-in"></span>
<div class="vertical-timeline-element-content bounce-in">
<h4 class="timeline-title">This dot has an info state</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
<div class="vertical-timeline-item dot-dark vertical-timeline-element">
<div>
<span class="vertical-timeline-element-icon is-hidden"></span>
<div class="vertical-timeline-element-content is-hidden">
<h4 class="timeline-title">This dot has a dark state</h4>
<span class="vertical-timeline-element-date"></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn">

</div>
<script src="/assets/js/vendor/jquery-3.6.3.min.js"></script>



<script type="text/javascript" src="/dashboard/assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
<script>
			var editor1 = new RichTextEditor("#div_editor1");

			

			// function btnInsertHTMLCode_1() {
			// 	editor1.insertHTML("Time is" + new Date().toLocaleTimeString())
			// 	editor1.collapse(false);
			// 	editor1.focus();
			// }
			// function btnInsertHTMLCode_2() {
			// 	editor1.selectDoc(false);//collapse to document end
			// 	editor1.insertHTML("<p>Insert a new paragraph " + new Date().toLocaleTimeString() + "</p>")
			// 	editor1.collapse(false);
			// 	editor1.focus();
			// }

		</script>
<script>
    
(function (window, document, $, undefined) {
  "use strict";
  var Init = {
    i: function (e) {
      Init.s();
      Init.methods();
    },
    s: function (e) {
      (this._window = $(window)),
        (this._document = $(document)),
        (this._body = $("body")),
        (this._html = $("html"));
    },
    methods: function (e) {
      Init.w();
     
      Init.preloader();
     
      
    },
    w: function (e) {
      this._window.on("load", Init.l).on("scroll", Init.res);
    },
  
    preloader: function () {
      setTimeout(function () { $('#preloader').fadeOut('slow') }, 2000);
      console.log("ssss")
    },

  }
  Init.i();
})(window, document, jQuery);

</script>

<script>
 $(document).ready(function() { let tagsArray = []; 
  
  $('#tagInput').on('keypress', function(event) { if (event.key === 'Enter') { event.preventDefault(); 
    
    addTag(); 
  } 
}); 
$('#tagInput').on('blur', function() { addTag(); }); 
function addTag() { 
  let tagText = $('#tagInput').val().trim(); 
  if (tagText !== '' && !tagsArray.includes(tagText)) 
  { tagsArray.push(tagText); 
    $('#tagList').append('<li class="list-inline-item badge badge-primary mr-2">' + tagText + ' <span class="badge badge-light ml-1 remove-tag" style="cursor:pointer;">&times;</span></li>'); 
    $('#tagInput').val(''); 
      updateTagsInput(); 
    } } 
    function updateTagsInput() 
    { 
      $('#tagsInput').val(tagsArray.join(',')); 
    } 
        $(document).on('click', '.remove-tag', 
        function() {
           let tagText = $(this).parent().text().slice(0, -1).trim(); 
          // Remove the trailing × 
          tagsArray = tagsArray.filter(tag => tag !== tagText); $(this).parent().remove(); updateTagsInput(); }); 
        });
</script>


<script>
  
$(document).ready(function() {
    let tagsArray_edit = $('#tagsInput_edit').val().split(','); 
    $('#tagInput_edit').on('keypress', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            addTag();
        }
    });
    $('#tagInput_edit').on('blur', function() {
        addTag();
    });

    function addTag() {
        let tagText_edit = $('#tagInput_edit').val().trim();
        if (tagText_edit !== '' && !tagsArray_edit.includes(tagText_edit)) {
            tagsArray_edit.push(tagText_edit);
            $('#tagList_edit').append('<li class="list-inline-item badge badge-primary mr-2">' + tagText_edit + ' <span class="badge badge-light ml-1 remove-tag" style="cursor:pointer;">&times;</span></li>');
            $('#tagInput_edit').val(''); 
            updateTagsInput();
        }
    }

    function updateTagsInput() {
        $('#tagsInput_edit').val(tagsArray_edit.join(',')); 
    }

 
    $(document).on('click', '.remove-tag', function() {
    let tagText_edit = $(this).parent().text().slice(0, -1).trim(); 
    console.log('Removing tag:', tagText_edit);
    tagsArray_edit = tagsArray_edit.filter(tag => tag !== tagText_edit);

    // Clear the tag list
    $('#tagList_edit').empty();

    // Re-render the tag list
    tagsArray_edit.forEach(tag => {
        $('#tagList_edit').append('<li class="list-inline-item badge badge-primary mr-2">' + tag + ' <span class="badge badge-light ml-1 remove-tag" style="cursor:pointer;">&times;</span></li>');
    });

    updateTagsInput();
});




});
</script>
</body>
</html>