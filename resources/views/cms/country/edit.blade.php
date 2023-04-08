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
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$countries->name}}">
                  </div>
                  <div class="form-group">
                    <label for="code">Country Code</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="code" value="{{$countries->code}}">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="button" onclick="performUbdate({{$countries->id}})" class="btn btn-primary">Update</button>
                  <a href="{{route('countries.index')}}" class="btn btn-success">Go Back</a>
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
    formData.append('code',document.getElementById('code').value);
    storeRoute('/cms/admin/countries_update/'+id, formData)
  }
</script>
@endsection
