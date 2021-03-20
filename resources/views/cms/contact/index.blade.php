@extends('cms.app')
@section('title', 'Contacts | Noori Wave Admin')
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
                    <li class="breadcrumb-item active">
                        Contacts
                    </li>
                </ol>
            </div>
            <h4 class="page-title">Contacts</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Contacts</h4>
            </div>
            <table class="table table-striped table-centered mb-0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($contacts as $contact)
                    <tr>
                        <td class="table-user">
                          {{$contact->name}}
                        </td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->created_at}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->message}}</td>
                        <td class="table-action">
                            <a href="mailto:{{$contact->email}}" class="btn action-icon"> <i class="mdi mdi-reply"></i></a>
                            <form action="{{route('admin.contact.destroy', $contact)}}" method="post" class="d-inline">
                              @method('DELETE')
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-sm btn-outline-danger">
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
