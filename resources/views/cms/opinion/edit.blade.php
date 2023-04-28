@extends('cms.index')

@section('titel','Create Opinion')

@section('main-titel','Opinion')

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
                  <div class="form-group col-6">
                    <label for="name">Name Opinion</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$opinions->name}}">
                  </div>

                  <div class="form-group col-6">
                    <label for="description">Description</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" style="height: 150px">{{$opinions->description}}
                        </textarea>
                      </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="name_ar">Name Opinion_ar</label>
                    <input type="text" class="form-control" id="name_ar" name="name_ar" placeholder="Name" value="{{$opinions->name_ar}}">
                  </div>

                  <div class="form-group col-6">
                    <label for="description_ar">Description_ar</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="description_ar" name="description_ar" style="height: 150px">{{$opinions->description_ar}}</textarea>
                      </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" onclick="performStore({{$opinions->id}})" class="btn btn-primary">Update</button>
                  <a href="{{route('opinions.index')}}" class="btn btn-success">Go back</a>

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
  function performStore(id){
    let formData=new FormData();
    formData.append('name',document.getElementById('name').value);
    formData.append('description',document.getElementById('description').value);
    formData.append('name_ar',document.getElementById('name_ar').value);
    formData.append('description_ar',document.getElementById('description_ar').value);
    storeRoute('/cms/admin/opinions_update/'+id, formData);
  }
</script>

@endsection
