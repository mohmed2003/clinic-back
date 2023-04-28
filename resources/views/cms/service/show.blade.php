@extends('cms.index')

@section('titel','Create Service')

@section('main-titel','Service')

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
                  <div class="form-group col-md-6">
                    <label for="title">Title Of Service</label>
                    <input type="text" class="form-control" disabled id="title" name="title" placeholder="Title" value="{{$services->title}}">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <div class="form-floating">
                        <textarea class="form-control" disabled placeholder="Leave a comment here" id="description" name="description" style="height: 150px">{{$services->description}}</textarea>
                      </div>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="title_ar">Title Of Service_ar</label>
                    <input type="text" class="form-control" id="title_ar" disabled name="title_ar" placeholder="Title" value="{{$services->name_ar}}">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="description_ar">Description_ar</label>
                    <div class="form-floating">
                        <textarea class="form-control" disabled placeholder="Leave a comment here" id="description_ar" name="description_ar" style="height: 150px">{{$services->description_ar}}</textarea>
                      </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{route('indexStep',$id)}}" class="btn btn-success">Go back</a>
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
