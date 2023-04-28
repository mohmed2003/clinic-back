@extends('cms.index')

@section('titel','Create sup_description')

@section('main-titel','sup_description')

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
                    {{-- <div class="form-group col-md-6">
                        <label for="image"> Chosse Image</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="Choose Image">
                      </div> --}}

                  <div class="form-group w-50">
                    <label for="description">Description</label>
                    <div class="form-floating">
                        <textarea class="form-control" disabled placeholder="Leave a comment here" id="description" name="description" style="height: 150px">{{$sup_descriptions->description}}</textarea>
                      </div>
                  </div>


                  <div class="form-group w-50">
                    <label for="description_ar">Description_ar</label>
                    <div class="form-floating">
                        <textarea class="form-control" disabled placeholder="Leave a comment here" id="description_ar" name="description_ar" style="height: 150px">{{$sup_descriptions->description_ar}}</textarea>
                      </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{route('indexSupDescription' ,$id)}}" class="btn btn-success">Go back</a>

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
