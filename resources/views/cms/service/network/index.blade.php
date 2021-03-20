@extends('cms.app')
@section('title', 'IT Services | Noori Wave Admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CMS</a></li>
                    <li class="breadcrumb-item">Services</li>
                    <li class="breadcrumb-item active">IT</li>
                </ol>
            </div>
            <h4 class="page-title">IT Services</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">IT Services Form</h4>
                <p class="text-muted font-14">
                    Fill the following form to update the content of the IT Services page.
                </p>
                <form action="{{route('admin.service.network.update', $network)}}" method="post" class="needs-validation"
                    enctype="multipart/form-data" id="myForm">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="title">Main Page Title</label>
                                <input type="text" name="title" placeholder="Networking Services" id="title"
                                    class="form-control" value="{{$network->title}}" required maxlength="190">
                                <div class="invalid-feedback">
                                    Please provide a title for the network page.
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
                                <textarea type="text" name="description" rows="8" placeholder="Best of Networking and IT services has been ..." id="description"
                                    class="form-control tiny">{{$network->description}}</textarea>
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
                                <textarea type="text" name="excerpt" rows="3" placeholder="Best of Networking and ..." id="excerpt"
                                    class="form-control">{{$network->excerpt}}</textarea>
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
                                <input type="text" name="slider_title" placeholder="Try Our Networking ..." id="slider_title"
                                    class="form-control" value="{{$network->slider_title}}" required maxlength="190">
                                <div class="invalid-feedback">
                                    Please provide a slider title for the network page.
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
                                <input type="text" name="slider_subtitle" placeholder="For the cheapest and brilliant ..." id="slider_subtitle"
                                    class="form-control" value="{{$network->slider_subtitle}}" required maxlength="190">
                                <div class="invalid-feedback">
                                    Please provide a slider title for the network page.
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
                                <img src="{{asset('storage/images/service/network/' . $network->image)}}" alt="Network Image"
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
                                <img src="{{asset('storage/images/service/network/' . $network->icon)}}" alt="Network Image"
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
