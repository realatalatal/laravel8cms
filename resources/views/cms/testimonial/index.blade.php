@extends('cms.app')
@section('title', 'Testimonials | Noori Wave Admin')
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
                        Testimonials
                    </li>
                </ol>
            </div>
            <h4 class="page-title">Testimonials</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row mb-2">
    <div class="col-sm-4">
        <a href="{{route('admin.testimonial.create')}}" class="btn btn-danger btn-rounded mb-3"><i class="mdi mdi-plus"></i> Add
            Testimonial</a>
    </div>
</div>
<div class="row">
    @forelse($testimonials as $testimonial)
    <div class="col-md-6 col-lg-3">
        <div class="card d-block">
            <img class="card-img-top" src="{{asset('storage/images/testimonial/' . $testimonial->image)}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$testimonial->name}}</h5>
                </p>
                <a href="{{route('admin.testimonial.edit', $testimonial)}}" class="btn btn-sm btn-outline-primary">Edit</a>
                <form action="{{route('admin.testimonial.destroy', $testimonial)}}" method="post" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure you want to delete this Testimonial?');">Delete</button>
                </form>
            </div> <!-- end card-body-->
        </div>
    </div>
    @empty
    <h4 class="ml-2">No Testimonials Added Yet.</h4>
    @endforelse
</div>
@endsection
