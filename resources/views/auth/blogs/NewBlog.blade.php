@extends('layouts.app')

@section('content')
<div class="app-main__outer">
<div class="app-main__inner">
<div class="app-page-title">
<div class="page-title-wrapper">
<div class="page-title-heading">
<div class="page-title-icon">
<i class="pe-7s-graph text-success"></i>
</div>
<div>Add New Blog
<div class="page-title-subheading">Lunch New Blog</div>
</div>
</div>
 </div>
</div> <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
<li class="nav-item">

</li>

</ul>
<div class="tab-content">

<div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
<div class="main-card mb-3 card">
<div class="card-body">
<h5 class="card-title">New Blog</h5>
<form class="" method="POST"  action="/addBlogs_post" enctype='multipart/form-data'>
@csrf

      @if(Session::has('success'))
                    <div class="alert alert-primary" role="alert">
                    {{ Session::get('success') }}
                    </div>
                    
    @endif

    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                    </div>
    @endif
                    <div class="position-relative row form-group">

                    <label for="exampleTitle_en" class="col-sm-2 col-form-label">English Title</label>


                    <div class="col-sm-10">

                    <input name="title_en" id="exampleTitle_en" placeholder="English Title" type="text" class="form-control">

                    </div>

</div>

<div class="position-relative row form-group">
<label for="quotation_en" class="col-sm-2 col-form-label">English Quotation</label>

<div class="col-sm-10">
<textarea name="quotation_en" id="quotation_en" class="form-control"></textarea>
</div>

</div>

<div class="position-relative row form-group">
<label for="exampleText" class="col-sm-2 col-form-label">Blog Body</label>
<div class="col-sm-10">

<input type="text" name="body_en" id="div_editor1"></input>

</div>
</div>










<div class="position-relative row form-group">
<label  for="exampleService" class="col-sm-2 col-form-label">Image</label>
<div class="col-sm-10">
<input name="file" id="exampleService" type="file" accept=".png,.jpg,.jpeg" class="form-control-file">
<img id="imagePreview" src="#" alt="Image Preview" style="width: 200px;height: 200px;">

</div>
</div>




<div class="position-relative row form-group">

<div class="col-sm-10">
<div class="form-group"> 
  <label for="tagInput">Enter Tags:</label> 
  <input type="text" id="tagInput" class="form-control" placeholder="Type and press Enter or Tab"> 
</div> 
<ul id="tagList" class="list-inline"></ul> <input type="hidden" name="tags" id="tagsInput">
</div>
</div>
    <div class="position-relative row form-group">

    <div class="col-sm-10">
    <button class="mb-2 mr-2 btn-hover-shine btn btn-shadow btn-primary">Add Blog</button>
    </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>


</div>
<script>


document.getElementById('exampleService').addEventListener('change', function(event) {
  const reader = new FileReader();

  reader.onload = function(event) {
    const img = new Image();
    img.onload = function() {
      const width = img.width;
      const height = img.height;
      const sizeInBytes = event.target.result.length; // Improved size calculation

      console.log(`Width: ${width}px, Height: ${height}px, Size: ${sizeInBytes} bytes`);

      // Check size and dimensions based on your requirements
      if (sizeInBytes > 4*1024 * 1024) { // 1 MB threshold
        alert("Image size exceeds 4 MB. Please choose a smaller image.");
      // Prevent image display if size exceeds limit
      return document.getElementById('exampleService').value  ="";
      }

      // Display the image if size is acceptable
      document.getElementById('imagePreview').src = reader.result;
    };

    img.src = event.target.result;
  };

  // Handle errors during file reading (optional but recommended)
  reader.onerror = function(error) {
    console.error("Error reading image:", error);
    alert("An error occurred while reading the image. Please try again.");
  };

  reader.readAsDataURL(event.target.files[0]);
});

</script>

@endsection
