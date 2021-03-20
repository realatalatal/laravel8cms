@extends('cms.app')
@section('title', 'Server (Hosting) Services | Noori Wave Admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CMS</a></li>
                    <li class="breadcrumb-item">Services</li>
                    <li class="breadcrumb-item active">Server (Hosting)</li>
                </ol>
            </div>
            <h4 class="page-title">Server (Hosting) Services</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Server (Hosting) Services Form</h4>
                <p class="text-muted font-14">
                    Fill the following form to update the content of the Server (Hosting) Services page.
                </p>
                <form action="{{route('admin.service.server.update', $server)}}" method="post" class="needs-validation"
                    enctype="multipart/form-data" id="myForm">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="title">Main Page Title</label>
                                <input type="text" name="title" placeholder="Hosting & Domain Registration" id="title"
                                    class="form-control" value="{{$server->title}}" required maxlength="190">
                                <div class="invalid-feedback">
                                    Please provide a title for the server page.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('title')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea type="text" name="description" rows="8" placeholder="We provide cheap and fast hosting services through ..." id="description"
                                    class="form-control tiny">{{$server->description}}</textarea>
                                <div class="invalid-feedback">
                                    Please provide a description.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('description')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="excerpt">Excerpt</label>
                                <textarea type="text" name="excerpt" rows="3" placeholder="We provide cheap and fast ..." id="excerpt"
                                    class="form-control">{{$server->excerpt}}</textarea>
                                <div class="invalid-feedback">
                                    Please provide an excerpt.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('excerpt')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="slider_title">Slider Title</label>
                                <input type="text" name="slider_title" placeholder="Best Hosting Services in Asia" id="slider_title"
                                    class="form-control" value="{{$server->slider_title}}" required maxlength="190">
                                <div class="invalid-feedback">
                                    Please provide a slider title for the server page.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('slider_title')}}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="slider_subtitle">Slider SubTitle</label>
                                <input type="text" name="slider_subtitle" placeholder="We currently have ...." id="slider_subtitle"
                                    class="form-control" value="{{$server->slider_subtitle}}" required maxlength="190">
                                <div class="invalid-feedback">
                                    Please provide a slider title for the server page.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('slider_subtitle')}}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="image">Slider Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                                <div class="invalid-feedback">
                                    Please provide an Image.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('image')}}</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label>Current Image</label>
                                <img src="{{asset('storage/images/service/server/' . $server->image)}}" alt="Server (Hosting) Image"
                                    style="width: 100%; border-radius:10px;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="icon">Icon</label>
                                <input type="file" name="icon" id="icon" class="form-control">
                                <div class="invalid-feedback">
                                    Please provide an Icon.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('icon')}}</span>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label>Current Image</label>
                                <img src="{{asset('storage/images/service/server/' . $server->icon)}}" alt="Server (Hosting) Icon"
                                    style="width: 100%; border-radius:10px;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <button class="btn btn-primary" type="submit" onClick="validate()">Save</button>
                        </div>
                    </div>
                </form>
                <!-- end row-->

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
<!-- end row -->
@endsection

@section('scripts')
<script>
    function validate() {
        var element = document.getElementById("myForm");
        element.classList.add("was-validated");
    }

</script>
@endsection
