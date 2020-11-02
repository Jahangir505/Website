@extends('layouts.admin')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> All Page Content</h1>
          <p>.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i> Home</li>
          <li class="breadcrumb-item active"><a href="#">Content</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
              <h3 class="tile-title">All Page Content</h3>
            <div class="table-responsive">
              @if(Session('softdel_success'))
                <script>
                  swal({
                    title: "Success!",
                    text: "Successfully delete banner information!",
                    icon: "success",
                    timer:3000,
                  });
                </script>
              @endif
              @if(Session('softdel_error'))
              <script>
                swal({
                  title: "Opps!",
                  text: "Please try again!",
                  icon: "error",
                  timer:5000,
                });
              </script>
              @endif
              <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Photo</th>
                    <th>Time</th>
                    <th>Manage</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($all as $data)
                  <tr>
                    <td>{{$data->cateName->pc_category_name}}</td>
                    <td>{{$data->pagecon_title}}</td>
                    <td>{{str_limit($data->pagecon_subtitle,50)}}</td>
                    <td>
                        @if($data->pagecon_image!='')
                        <img height="50" src="{{asset('uploads/'.$data->pagecon_image)}}"/>
                        @else
                          <img height="50" src="{{asset('uploads')}}/avatar.png"/>
                        @endif
                    </td>
                    <td>{{$data->created_at}}</td>
                    <td>
                      <a href="{{url('admin/contactus/view/'.$data->pagecon_id)}}"><i class="fa fa-pencil-square"></i></a>

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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form method="post" action="{{url('admin/banner/softdelete')}}">
        @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirm Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Are you sure want to delete?
            <input type="hidden" value="" name="modal_id" id="modal_id"/>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Yes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
