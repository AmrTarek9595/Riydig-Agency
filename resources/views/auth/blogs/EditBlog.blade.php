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
                    <div>Edit Blog
                        <div class="page-title-subheading">Edit Current Blog</div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item"></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Blog</h5>
                        <form method="POST" action="/updateBlog_post/{{$data->id}}" enctype="multipart/form-data">
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
                                <label for="exampleTitle_en" class="col-sm-2 col-form-label">Blog Title</label>
                                <div class="col-sm-10">
                                    <input name="title_en" id="exampleTitle_en" placeholder="English Title" type="text" class="form-control" value="{{$data->title_en}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleTitle_en" class="col-sm-2 col-form-label">Blog Quotation</label>
                                <div class="col-sm-10">
                                    <textarea name="quotation_en" id="exampleTitle_en" placeholder="English Title" type="text" class="form-control">{{$data->quotation_en}}</textarea>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="quotation_en" class="col-sm-2 col-form-label">Blog Body</label>
                                <div class="col-sm-10">
                                    <input type="text" name="body_en" id="div_editor1" value="{{$data->body_en}}">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleService" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <input name="image_name" id="exampleService" type="file" accept=".png,.jpg,.jpeg" class="form-control-file">
                                    <label>Current Image</label>
                                    <img src="/images/blogs/{{$data->image_en}}" alt="Image Preview" style="width: 200px;height: 200px;">
                                    <label>New Image</label>
                                    <img id="imagePreview" src="#" alt="Image Preview" style="width: 200px;height: 200px;">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tagInput_edit">Update Tags:</label>
                                <input type="text" id="tagInput_edit" class="form-control" placeholder="Type and press Enter or Tab">
                            </div>

                            <ul id="tagList_edit" class="list-inline">
                                @foreach($data1 as $tag)
                                    <li class="list-inline-item badge badge-primary mr-2">
                                        {{ $tag }}
                                        <span class="badge badge-light ml-1 remove-tag" style="cursor:pointer;">&times;</span>
                                    </li>
                                @endforeach
                            </ul>
                            <input type="hidden" name="tags" id="tagsInput_edit" value="{{ implode(',', $data1->toArray()) }}">

                            <div class="position-relative row form-group">
                                <div class="col-sm-10">
                                    <button type="submit" class="mb-2 mr-2 btn-hover-shine btn btn-shadow btn-primary">Update Blog</button>
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
            const sizeInBytes = event.target.result.length;

            console.log(`Width: ${width}px, Height: ${height}px, Size: ${sizeInBytes} bytes`);
            if(width < 355 && height < 530) {
                alert("Image Height and Width Are So Small. Select image with 350x530 at least.");
                document.getElementById('exampleService').value = "";
                return;
            }
            if (sizeInBytes > 4 * 1024 * 1024) {
                alert("Image size exceeds 4 MB. Please choose a smaller image.");
                document.getElementById('exampleService').value = "";
                return;
            }
            document.getElementById('imagePreview').src = reader.result;
        };
        img.src = event.target.result;
    };
    reader.onerror = function(error) {
        console.error("Error reading image:", error);
        alert("An error occurred while reading the image. Please try again.");
    };
    reader.readAsDataURL(event.target.files[0]);
});

</script>
@endsection
