@extends('cms.index')

@section('titel','Create step')

@section('main-titel','step')

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


                  <div class="form-group w-50">
                    <label for="description">Description</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" style="height: 150px"></textarea>
                      </div>
                  </div>

                  <div class="form-group w-50">
                    <label for="description_ar">Description_ar</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="description_ar" name="description_ar" style="height: 150px"></textarea>
                      </div>
                  </div>
                <!-- /.card-body -->

                <input type="text" name="service_id" id="service_id" value="{{$id}}"
                class="form-control form-control-solid" hidden/>

                <div class="card-footer">
                  <button type="button" onclick="performStore()" class="btn btn-primary">Stor</button>
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
  function performStore(){
    let formData=new FormData();
    formData.append('service_id',document.getElementById('service_id').value);
    formData.append('description',document.getElementById('description').value);
    formData.append('description_ar',document.getElementById('description_ar').value);

    store('/cms/admin/steps', formData);
  }
</script>

@endsection
