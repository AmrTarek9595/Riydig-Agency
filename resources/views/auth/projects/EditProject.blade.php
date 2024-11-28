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
<div>Edit Project
<div class="page-title-subheading">Edit Current  Project</div>
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
<h5 class="card-title">Edit Project</h5>
<form class="" method="POST"  action="/UpdateProject_post/{{$data->id}}" enctype='multipart/form-data'>
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
<input name="project_title" id="exampleTitle_en" placeholder="English Title" type="text" class="form-control" value="{{$data->project_title}}">
</div>

</div>


<div class="position-relative row form-group">
        <label for="exampleTitle_en" class="col-sm-2 col-form-label">Current Type</label>

                <div class="col-sm-10">
                <input name="text" value="{{$data->type}}" disabled>
                </div>
                <label for="exampleTitle_en" class="col-sm-2 col-form-label">New Type</label>
                <div class="col-sm-10">
                <select class="form-control" id="Project_Title" name="type"> 
               
                    <option selected disabled>Select Project Type</option>
                    <option value="Website">Website</option>
                    <option value="Mobile Apps">Mobile Apps</option>
                    <option value="Social Media">Social Media</option>
                    <option value="Identity">Identity</option>
                </select>
                </div>

</div>
<div class="position-relative row form-group">
<label for="quotation_en" class="col-sm-2 col-form-label">Project Description</label>
<div class="col-sm-10">

<input type="text" name="description" id="div_editor1" value="{{$data->description}}">

</div>
</div>


<div class="position-relative row form-group">
<label for="exampleService" class="col-sm-2 col-form-label">Image</label>
<div class="col-sm-10">
<input name="image_name" id="exampleService" type="file" accept=".png,.jpg,.jpeg" class="form-control-file">
<label>Current Image</label>
<img src="/images/projects/{{$data->image_name}}" alt="Image Preview" style="width: 200px;height: 200px;">
<label>New Image</label>
<img id="imagePreview" src="#" alt="Image Preview" style="width: 200px;height: 200px;">

</div>
</div>


<div class="position-relative row form-group">

<div class="col-sm-10">
<button class="mb-2 mr-2 btn-hover-shine btn btn-shadow btn-primary">Primary</button>
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
      if(width<355 && height<530)
{
  alert("Image Height and Width Are So Small Select image with 350x530 At least");
  return document.getElementById('exampleService').value  ="";
}
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
