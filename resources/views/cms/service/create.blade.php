@extends('cms.app')
@section('title', 'Add Service | Noori Wave Admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CMS</a></li>
                    <li class="breadcrumb-item">Services</li>
                    <li class="breadcrumb-item active">Add Service</li>
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
                <h4 class="header-title">Service Add Form</h4>
                <p class="text-muted font-14">
                    Fill the following form to add a service.
                </p>
                <form action="{{route('admin.service.store')}}" method="post" class="needs-validation"
                    enctype="multipart/form-data" id="myForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="title">Service Type</label>
                                <select name="type" id="type" class="form-control">
                                  <option value="0" class="form-control">Main Service</option>
                                  <option value="1" class="form-control">IT Service</option>
                                  <option value="2" class="form-control">Development Service</option>
                                  <option value="3" class="form-control">Server Service</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide service type.
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
                                <label for="title">Service Title</label>
                                <input type="text" name="title" placeholder="VOIP Integration" id="title"
                                    class="form-control" value="{{old('title')}}" required maxlength="190">
                                <div class="invalid-feedback">
                                    Please provide a title for the service.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('type')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea type="text" name="description" rows="8" placeholder="We provide VoIP Solutions at a wide ...." id="description"
                                    class="form-control tiny">{{old('description')}}</textarea>
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
                                <textarea type="text" name="excerpt" rows="3" placeholder="We provide VoIP Solutions ..." id="excerpt" class="form-control">{{old('excerpt')}}</textarea>
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
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control" required>
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
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="icon">Icon</label>
                                <input type="file" name="icon" id="icon" class="form-control" required>
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
