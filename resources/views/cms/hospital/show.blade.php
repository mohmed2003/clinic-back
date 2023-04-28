@extends('cms.index')

@section('titel','Show Hospital')

@section('main-titel','Hospital')

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
                <div class="card-body ">
                  <div class="form-group col-md-6">
                    <label for="name">Name Hospital</label>
                    <input type="text" class="form-control" disabled id="name" name="name" placeholder="Name" value="{{$hospitals->name}}">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="name_ar">Name Hospital_ar</label>
                    <input type="text" class="form-control" disabled id="name_ar" name="name_ar" placeholder="Name" value="{{$hospitals->name_ar}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label>City Name</label>
                    <input type="text" class="form-control" disabled id="name" name="name" placeholder="Name" value="{{$hospitals->city->name}}">
                  </div>

                  <div class="form-group col-md-6 ">
                    <label for="url">Name of Country</label>
                    <input type="text" class="form-control" disabled  id="url" name="url" placeholder="url" value="{{$hospitals->city->country->name}}">
                  </div>
                  <div class="form-group col-md-6 ">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" disabled  id="url" name="url" placeholder="url" value="{{$hospitals->url}}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{route('hospitals.index')}}" class="btn btn-success">Go back</a>

                </div>
              </form>
            </div>
            </div>
            </div>
</section>
            <!-- /.card -->
@endsection

@section('scripts')
<script>

</script>

@endsection
