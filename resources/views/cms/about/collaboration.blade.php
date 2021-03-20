@extends('cms.app')
@section('title', 'Collaboration | About Us | Noori Wave Admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CMS</a></li>
                    <li class="breadcrumb-item">About Us</li>
                    <li class="breadcrumb-item active">Collaboration</li>

                </ol>
            </div>
            <h4 class="page-title">Collaboration</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Collaboration Form</h4>
                <p class="text-muted font-14">
                    Fill the following form to update the content of the Collaboration Section.
                </p>
                <form action="{{route('admin.about.collaboration.update', $collaboration)}}" method="post" class="needs-validation" enctype="multipart/form-data" id="myForm">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" placeholder="Collaboration" id="title"
                                    class="form-control" value="{{$collaboration->title}}" required maxlength="190">
                                <div class="invalid-feedback">
                                    Please provide a title for the Collaboration Section.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('title')}}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="image">Icon</label>
                                <input type="file" name="image" id="image" class="form-control">
                                <div class="invalid-feedback">
                                    Please provide an Icon.
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
                                <label>Current Icon</label>
                                <img src="{{asset('storage/images/about/' . $collaboration->image)}}" alt="About Image"
                                    style="width: 100%; border-radius:10px;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea type="text" name="description" rows="8" placeholder="Noori Wave ICT is a fast-growing collaboration that strives to provide its clients ..." id="description"
                                    class="form-control tiny">{{$collaboration->description}}</textarea>
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
