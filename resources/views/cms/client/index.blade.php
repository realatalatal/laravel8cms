@extends('cms.app')
@section('title', 'Add Clients | Noori Wave Admin')
@section('styles')
<!-- Dropzone css -->
<link href="{{asset('cms/dropzone/dropzone.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">CMS</a></li>
                    <li class="breadcrumb-item active">Clients</li>
                </ol>
            </div>
            <h4 class="page-title">Add Clients</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Images Add Form</h4>
                <p class="text-muted font-14">
                    Drag and drop your client logos in the box or click to select images.
                </p>
                <div class="row">
                    <div class="col-12">
                        <div class="p-2">
                            <form action="{{route('admin.client.store')}}" class="dropzone" method="post"
                                enctype="multipart/form-data">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div><!-- end row -->

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Images</h4>
                <p class="text-muted font-14">

                </p>
                
                    <div class="row">

                        @forelse($clients as $client)
                        <div class="col-md-6 col-lg-3">
                            <div class="card d-block">
                                <img class="card-img-top"
                                    src="{{asset('storage/images/client/' . $client->image)}}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <form action="{{route('admin.client.destroy', $client)}}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Are you sure you want to delete this Client?');">Delete</button>
                                    </form>
                                </div> <!-- end card-body-->
                            </div>
                        </div>
                        @empty
                        <h5 class="ml-2">No Clients Added Yet. Add them to the box above and refresh the page.</h5>
                        @endforelse
                    </div>
                

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
<!-- dropzone js -->
<script src="{{asset('cms/dropzone/dropzone.js')}}"></script>
@endsection
