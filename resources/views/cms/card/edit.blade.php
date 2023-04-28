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
                        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" style="height: 150px">{{$sup_descriptions->description}}</textarea>
                      </div>
                  </div>

                  <div class="form-group w-50">
                    <label for="description_ar">Description_ar</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="description_ar" name="description_ar" style="height: 150px">{{$sup_descriptions->description_ar}}</textarea>
                      </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" onclick="performUpdate({{$sup_descriptions->id}})" class="btn btn-primary">Update</button>
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
  function performUpdate(id){
    let formData=new FormData();
    // formData.append('image',document.getElementById('image').files[0]);
    formData.append('description',document.getElementById('description').value);
    formData.append('description_ar',document.getElementById('description_ar').value);
    storeRoute('/cms/admin/sup_descriptions_update/'+id, formData);
  }
</script>

@endsection
