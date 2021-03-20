@extends('cms.app')
@section('title', 'Edit Slider | Noori Wave Admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CMS</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Homepage</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.slider.index')}}">Sliders</a></li>
                    <li class="breadcrumb-item active">Edit Slider</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Slider</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Slider Edit Form</h4>
                <p class="text-muted font-14">
                    Fill the following form to edit the slider.
                </p>

                <form action="{{route('admin.slider.update', $slider)}}" method="post" class="needs-validation"
                    enctype="multipart/form-data" id="myForm">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" placeholder="Professional IT Solutions ..."
                                    id="title" class="form-control" value="{{$slider->title}}" required
                                    minlength="5" maxlength="190">
                                <div class="invalid-feedback">
                                    Please provide a title!
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('title')}}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="subtitle">Subtitle</label>
                                <input type="text" name="subtitle"
                                    placeholder="We provide IT solutions ...." id="subtitle"
                                    class="form-control" value="{{$slider->subtitle}}" required maxlength="190">
                                <div class="invalid-feedback">
                                    Please provide a subtitle!
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('subtitle')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="button">Button</label>
                                <input type="text" name="button" placeholder="Buy" id="button"
                                    class="form-control" value="{{$slider->button}}" maxlength="190">
                                <div class="invalid-feedback">
                                    Please provide a Button Text!
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('button')}}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="link">Link</label>
                                <input type="url" name="link" placeholder="https://nooriwave.com/services/4" id="link" class="form-control" value="{{$slider->link}}">
                                <div class="invalid-feedback">
                                    Please provide a valid URL!
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('link')}}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                                <div class="invalid-feedback">
                                    Please provide an Image!
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('image')}}</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-3">
                                <label>Current Image</label>
                                <img src="{{asset('storage/images/slider/' . $slider->image)}}" alt="Slider Image"
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
