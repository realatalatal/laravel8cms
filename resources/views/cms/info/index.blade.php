@extends('cms.app')
@section('title', 'Website Info | NooriWave Admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CMS</a></li>
                    <li class="breadcrumb-item active">Website Info</li>
                </ol>
            </div>
            <h4 class="page-title">Website Info</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Website Info Form</h4>
                <p class="text-muted font-14">
                    Fill the following form to update the general info on the website.
                </p>
                <form action="{{route('admin.info.update', $info)}}" method="post" class="needs-validation"
                    enctype="multipart/form-data" id="myForm">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" placeholder="info@nooriwave.af" id="email"
                                    class="form-control" value="{{$info->email}}" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone" placeholder="+92 787 278 393" id="phone"
                                    class="form-control" value="{{$info->phone}}" required>
                                <div class="invalid-feedback">
                                    Please provide a phone number.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('phone')}}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="phone2">Phone Number 2</label>
                                <input type="text" name="phone2" placeholder="+92 787 278 393" id="phone2"
                                    class="form-control" value="{{$info->phone2}}" required>
                                <div class="invalid-feedback">
                                    Please provide a phone2 number.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('phone2')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="facebook">Facebook Page Link</label>
                                <input type="url" name="facebook" placeholder="http://www.facebook.com/nooriwave" id="facebook"
                                    class="form-control" value="{{$info->facebook}}" required>
                                <div class="invalid-feedback">
                                    Please provide a Facebook link.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('facebook')}}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="twitter">Twitter Link</label>
                                <input type="url" name="twitter" placeholder="http://www.twitter.com/nooriwave" id="twitter"
                                    class="form-control" value="{{$info->twitter}}" required>
                                <div class="invalid-feedback">
                                    Please provide a Twitter link.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('twitter')}}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="instagram">Instagram Link</label>
                                <input type="url" name="instagram" placeholder="http://www.instagram.com/nooriwave" id="instagram"
                                    class="form-control" value="{{$info->instagram}}" required>
                                <div class="invalid-feedback">
                                    Please provide a Twitter link.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('instagram')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="address">Address</label>
                                <input type="text" name="address" placeholder="Pole Surkh, kabul" id="address"
                                    class="form-control" value="{{$info->address}}" required>
                                <div class="invalid-feedback">
                                    Please provide an Address.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('address')}}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="footer">Footer Text</label>
                                <input type="text" name="footer" placeholder="Build responsive, mobile-first projects on the web with the world's most popular front-end component library." id="footer" class="form-control" value="{{$info->footer}}" required>
                                <div class="invalid-feedback">
                                    Please provide an Footer Text.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('footer')}}</span>
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
