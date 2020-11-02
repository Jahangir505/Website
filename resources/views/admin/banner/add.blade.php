@extends('layouts.admin')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Banner Information</h1>
          <p>.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item active"><a href="#">Banner</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
              <form class="form-horizontal" method="post" action="{{url('admin/banner/insert')}}" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                      <div class="form-group {{$errors->has('title') ? 'has-error':''}}">
                        <label for="inputEmail3" class="col-sm-2 control-label">Banner Title</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="title" value="{{old('title')}}">
                          @if($errors->has('title'))
                            <span class="help-block">
                              <strong>{{$errors->first('title')}}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Banner Subtitle</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"  name="subtitle" value="{{old('subtitle')}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Banner Button</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="button" value="{{old('button')}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Banner URL</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="url" value="{{old('url')}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Upload</label>
                        <div class="col-sm-10">
                          <input type="file" name="pic">
                        </div>
                      </div>
                  </div>
                  <div class="col-md-2"></div>
                </div>
                  <div class="col-md-12 col-md-offset-6">
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-sm btn-success" style="margin:20px auto;" value="UPLOAD">
                    </div>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </main>
@endsection
