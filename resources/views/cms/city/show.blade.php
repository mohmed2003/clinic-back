@extends('cms.index')

@section('titel','City Show')

@section('main-titel','City')

@section('sup-titel','Show')

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
                        <label for="country_id">Name Country</label>
                        <input type="text" class="form-control" disabled id="country_id" name="country_id" placeholder="name"value="{{$cities->country->name}}">
                      </div>
                  <div class="form-group">
                    <label for="name">Name City</label>
                    <input type="text" class="form-control" disabled id="name" name="name" placeholder="name"value="{{$cities->name}}">
                  </div>
                  <div class="form-group">
                    <label for="street">Street</label>
                    <input type="text" class="form-control" disabled id="street" name="street" placeholder="street"value="{{$cities->street}}">
                  </div>

              <div class="form-group">
                <label for="name_ar">Name City_ar</label>
                <input type="text" class="form-control" disabled id="name_ar" name="name_ar" placeholder="Name" value="{{$cities->name_ar}}">
              </div>
              <div class="form-group">
                <label for="street_ar">Street_ar</label>
                <input type="text" class="form-control" disabled id="street_ar" name="street_ar" placeholder="street" value="{{$cities->street_ar}}">
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{route('cities.index')}}" class="btn btn-primary">Go Back</a>
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
