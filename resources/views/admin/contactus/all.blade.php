@extends('layouts.admin')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Contact Message</h1>
          <p>Visitor contact message</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item active"><a href="#">All Message</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">All Message</h3>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Manage</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($all as $data)
                  <tr>
                    <td>{{$data->conus_name}}</td>
                    <td>{{$data->conus_email}}</td>
                    <td>{{$data->conus_sub}}</td>
                    <td>{{str_limit($data->conus_mess,40)}}</td>
                    <td>
                      <a href="{{url('admin/contactus/view/'.$data->conus_id)}}"><i class="fa fa-plus-square fa-lg"></i></a>
                      @if(Auth::user()->role_id<='2')
                      <a href="{{url('admin/contactus/softdelete/'.$data->conus_id)}}"><i class="fa fa-trash fa-lg"></i></a>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection
