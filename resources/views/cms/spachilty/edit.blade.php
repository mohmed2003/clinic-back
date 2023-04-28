@extends('cms.index')

@section('titel','Create Spachilty')

@section('main-titel','Spachilty')

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
                    <label for="name">Name Spachilty</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$spachilties->name}}">
                  </div>
                  <div class="form-group">
                    <label for="name_ar">Name Spachilty_ar</label>
                    <input type="text" class="form-control" id="name_ar" name="name_ar" placeholder="Name" value="{{$spachilties->name_ar}}">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="button" onclick="performUbdate({{$spachilties->id}})" class="btn btn-primary">Update</button>
                  <a href="{{route('spachilties.index')}}" class="btn btn-success">Go Back</a>
                </div>
              </form>
            </div>
            </div>
            </div>
</section>
@endsection

@section('scripts')
<script>
  function performUbdate(id){
    let formData=new FormData();
    formData.append('name',document.getElementById('name').value);
    formData.append('name_ar',document.getElementById('name_ar').value);
    storeRoute('/cms/admin/spachilties_update/'+id, formData)
  }
</script>
@endsection
