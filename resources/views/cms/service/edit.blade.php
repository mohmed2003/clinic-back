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
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$services->title}}">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" style="height: 150px">{{$services->description}}</textarea>
                      </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="title_ar">Title Of Service_ar</label>
                    <input type="text" class="form-control" id="title_ar" name="title_ar" placeholder="Title" value="{{$services->name_ar}}">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="description_ar">Description_ar</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="description_ar" name="description_ar" style="height: 150px">{{$services->description_ar}}</textarea>
                      </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" onclick="performUpdate({{$services->id}})" class="btn btn-primary">Update</button>
                  <a href="{{route('services.index')}}" class="btn btn-success">Go back</a>

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
  function performUpdate(id){
    let formData=new FormData();
    formData.append('title',document.getElementById('title').value);
    formData.append('description',document.getElementById('description').value);
    formData.append('title_ar',document.getElementById('title_ar').value);
    formData.append('description_ar',document.getElementById('description_ar').value);
    storeRoute('/cms/admin/services_update/'+id, formData);
  }
</script>

@endsection
