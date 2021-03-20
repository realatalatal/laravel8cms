@extends('cms.app')
@section('title', 'Add Testimonial | Noori Wave Admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CMS</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.testimonial.index')}}">Testimonials</a></li>
                    <li class="breadcrumb-item active">Add Testimonial</li>
                </ol>
            </div>
            <h4 class="page-title">Add Testimonial</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Testimonial Add Form</h4>
                <p class="text-muted font-14">
                    Fill the following form to add a testimonial.
                </p>
                
                    <form action="{{route('admin.testimonial.store')}}" method="post" class="needs-validation"
                        enctype="multipart/form-data" id="myForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" placeholder="Habib Alokozay"
                                        id="name" class="form-control" value="{{old('name')}}" required maxlength="190">
                                    <div class="invalid-feedback">
                                        Please provide a name!
                                    </div>
                                    <div class="valid-feedback">
                                        Valid Input.
                                    </div>
                                    <br />
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="organization">Organization</label>
                                    <input type="text" name="organization"
                                        placeholder="Afghan Women's Network"
                                        id="organization" class="form-control" value="{{old('organization')}}" required maxlength="190">
                                    <div class="invalid-feedback">
                                        Please provide an organization name!
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
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="position">Position</label>
                                    <input type="text" name="position" placeholder="CEO" id="position"
                                        class="form-control" value="{{old('position')}}" maxlength="190">
                                    <div class="invalid-feedback">
                                        Please provide a position!
                                    </div>
                                    <div class="valid-feedback">
                                        Valid Input.
                                    </div>
                                    <br />
                                    <span class="text-danger">{{$errors->first('position')}}</span>
                                </div>
                            </div>
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
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="link">Saying</label>
                                    <textarea name="saying" id="saying" cols="30" rows="5" class="form-control" placeholder="Nooriwave provides the best IT solutions ...">{{old('saying')}}</textarea>
                                    <div class="invalid-feedback">
                                        Please provide a saying.
                                    </div>
                                    <div class="valid-feedback">
                                        Valid Input.
                                    </div>
                                    <br />
                                    <span class="text-danger">{{$errors->first('saying')}}</span>
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
