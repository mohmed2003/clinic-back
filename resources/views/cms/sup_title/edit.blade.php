@extends('cms.index')

@section('titel','Create sup_title')

@section('main-titel','sup_title')

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
                    <label for="title">Title Of sup_title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$sup_titles->title}}">
                  </div>

                  <div class="form-group w-50">
                    <label for="description">Description</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" style="height: 150px">{{$sup_titles->description}}</textarea>
                      </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" onclick="performUpdate({{$sup_titles->id}})" class="btn btn-primary">Update</button>
                  <a href="{{route('sup_titles.index')}}" class="btn btn-success">Go back</a>

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
    storeRoute('/cms/admin/sup_titles_update/'+id, formData);
  }
</script>

@endsection