@extends('cms.app')
@section('title', 'Change password | Amiri Publications Admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CMS</a></li>
                    <li class="breadcrumb-item active">Change Password</li>
                </ol>
            </div>
            <h4 class="page-title">Change Password</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Change Password Form</h4>
                <p class="text-muted font-14">
                    Fill the following form to change your password.
                </p>
                <form action="{{route('admin.password.change.submit')}}" method="post" class="needs-validation"
                    enctype="multipart/form-data" id="myForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 offset-3">
                          @if(Session::get('passwordChange') == 'fail')
                          <h4 class="text-danger">The password change failed, please try again.</h4>
                          @elseif(Session::get('passwordChange') == 'success')
                          <h4 class="text-success">Your password was changed successfully.</h4>
                          @endif
                        </div>
                        <div class="col-md-6 offset-3">
                            <div class="form-group">
                                <label for="oldPassword">Old Password</label>
                                <input type="password" placeholder="********" name="oldPassword" id="oldPassword"
                                    class="form-control" required>
                                <div class="invalid-feedback">
                                    Please enter your old password.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('oldPassword')}}</span>
                            </div>
                        </div>
                        <div class="col-md-6 offset-3">
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" placeholder="********" name="password" id="password"
                                    class="form-control" required minlength="8">
                                <div class="invalid-feedback">
                                    Please enter a new password.
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('password')}}</span>
                            </div>
                        </div>
                        <div class="col-md-6 offset-3">
                            <div class="form-group">
                                <label for="password_confirmation">Confirm New Password</label>
                                <input type="password" placeholder="********" name="password_confirmation" id="password_confirmation"
                                    class="form-control" required minlength="8">
                                <div class="invalid-feedback">
                                    Please Confirm your password
                                </div>
                                <div class="valid-feedback">
                                    Valid Input.
                                </div>
                                <br />
                                <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-3">
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
