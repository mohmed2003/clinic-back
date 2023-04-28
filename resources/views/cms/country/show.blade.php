@extends('cms.index')

@section('titel','Create Country')

@section('main-titel','Country')

@section('styles')

@endsection

@section('content')

<section class="content w-100">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 h-75">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name Country</label>
                    <input type="text" class="form-control" disabled id="name" name="name" placeholder="name"value="{{$countries->name}}">
                  </div>
                  <div class="form-group">
                    <label for="name_ar">Name Country_ar</label>
                    <input type="text" class="form-control" disabled id="name_ar" name="name_ar" placeholder="Name" value="{{$countries->name_ar}}">
                  </div>
                  <div class="form-group">
                    <label for="code">Country Code</label>
                    <input type="text" class="form-control" disabled id="code" name="code" placeholder="code"value="{{$countries->code}}">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{route('countries.index')}}" class="btn btn-primary">Go Back</a>
                </div>
              </form>
            </div>
            </div>
            </div>
</section>
            <!-- /.card -->
@endsection

@section('scripts')

@endsection
