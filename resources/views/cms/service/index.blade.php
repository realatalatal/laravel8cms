@extends('cms.app')
@section('title', 'Services | Noori Wave Admin')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="javascript: void(0);">CMS</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript: void(0);">Homepage</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Services
                    </li>
                </ol>
            </div>
            <h4 class="page-title">Services</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row mb-2">
    <div class="col-sm-4">
        <a href="{{route('admin.service.create')}}" class="btn btn-danger btn-rounded mb-3"><i class="mdi mdi-plus"></i>
            Add
            Service</a>
    </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">All Services</h4>
                <p class="text-muted font-14 mb-3">You can switch between service types by clicking on the tabs.</p>
                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                    <li class="nav-item">
                        <a href="#main" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0 active">
                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                            <span class="d-none d-md-block">Main</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#it" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                            <span class="d-none d-md-block">IT</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#development" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                            <span class="d-none d-md-block">Development</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#server" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                            <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                            <span class="d-none d-md-block">Server (Hosting)</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane show active" id="main">
                      <div class="row">
                        @forelse($services->where('type', 0) as $service)
                        <div class="col-md-3">
                            <div class="card d-block">
                                <img class="card-img-top" src="{{asset('storage/images/service/' . $service->icon)}}"
                                    alt="Card image cap" style="width: 70%; margin: 0 auto; padding: 10px 0;display:block;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$service->title}}</h5>
                                    <p class="card-text">{{$service->subtitle}}
                                    </p>
                                    <a href="{{route('admin.service.edit', $service)}}"
                                        class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{route('admin.service.destroy', $service)}}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Are you sure you want to delete this Service?');">Delete</button>
                                    </form>
                                </div> <!-- end card-body-->
                            </div>
                        </div>
                        @empty
                        <h4 class="ml-2">No Services Added Yet.</h4>
                        @endforelse
                      </div>
                    </div>
                    <div class="tab-pane" id="it">
                      <div class="row">
                        @forelse($services->where('type', 1) as $service)
                        <div class="col-md-6 col-lg-3">
                            <div class="card d-block">
                                <img class="card-img-top" src="{{asset('storage/images/service/' . $service->icon)}}"
                                    alt="Card image cap" style="width: 70%; margin: 0 auto; padding: 10px 0;display:block;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$service->title}}</h5>
                                    <p class="card-text">{{$service->subtitle}}
                                    </p>
                                    <a href="{{route('admin.service.edit', $service)}}"
                                        class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{route('admin.service.destroy', $service)}}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Are you sure you want to delete this Service?');">Delete</button>
                                    </form>
                                </div> <!-- end card-body-->
                            </div>
                        </div>
                        @empty
                        <h4 class="ml-2">No Services Added Yet.</h4>
                        @endforelse
                      </div>
                    </div>
                    <div class="tab-pane" id="development">
                      <div class="row">
                        @forelse($services->where('type', 2) as $service)
                        <div class="col-md-6 col-lg-3">
                            <div class="card d-block">
                                <img class="card-img-top" src="{{asset('storage/images/service/' . $service->icon)}}"
                                    alt="Card image cap" style="width: 70%; margin: 0 auto; padding: 10px 0;display:block;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$service->title}}</h5>
                                    <p class="card-text">{{$service->subtitle}}
                                    </p>
                                    <a href="{{route('admin.service.edit', $service)}}"
                                        class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{route('admin.service.destroy', $service)}}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Are you sure you want to delete this Service?');">Delete</button>
                                    </form>
                                </div> <!-- end card-body-->
                            </div>
                        </div>
                        @empty
                        <h4 class="ml-2">No Services Added Yet.</h4>
                        @endforelse
                      </div>
                    </div>
                    <div class="tab-pane" id="server">
                      <div class="row">
                        @forelse($services->where('type', 3) as $service)
                        <div class="col-md-6 col-lg-3">
                            <div class="card d-block">
                                <img class="card-img-top" src="{{asset('storage/images/service/' . $service->icon)}}"
                                    alt="Card image cap" style="width: 70%; margin: 0 auto; padding: 10px 0;display:block;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$service->title}}</h5>
                                    <p class="card-text">{{$service->subtitle}}
                                    </p>
                                    <a href="{{route('admin.service.edit', $service)}}"
                                        class="btn btn-sm btn-outline-primary">Edit</a>
                                    <form action="{{route('admin.service.destroy', $service)}}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Are you sure you want to delete this Service?');">Delete</button>
                                    </form>
                                </div> <!-- end card-body-->
                            </div>
                        </div>
                        @empty
                        <h4 class="ml-2">No Services Added Yet.</h4>
                        @endforelse
                      </div>
                    </div>
                </div>
            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection
