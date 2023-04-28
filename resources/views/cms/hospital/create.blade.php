@extends('cms.index')

@section('titel','Create Hospital')

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
                <div class="card-body">

                  <div class="form-group col-md-6 ">
                    <label for="name">Name Hospital</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  </div>

                  <div class="form-group col-md-6 ">
                    <label for="name_ar">Name Hospital_ar</label>
                    <input type="text" class="form-control" id="name_ar" name="name_ar" placeholder="Name">
                  </div>

                  <div class="form-group col-md-6">
                    <label>City Name</label>
                    <select class="form-control select2" id="city_id" name="city_id" style="width: 100%;">
                    @foreach($cities as $city)
                      <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                    </select>
                  </div>

                  <div class="form-group col-md-6 ">
                    <label for="url">URL</label>
                    <input type="url" class="form-control" id="url" name="url" placeholder="url">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" onclick="checkUrl()" class="btn btn-primary">Stor</button>
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
     function checkUrl() {
        // let inputText = document.getElementById("url").value;
        // let urlPattern = /^(http|https|ftp):\/\/([A-Za-z0-9\-]+\.)+[A-Za-z]{2,}(\/\S*)?$/;
        // if (! urlPattern.test(inputText)) {
        //     alert("Input is a valid URL.");
        //     return response()->json(['icon' => 'error' , 'title' =>$validator->getMessageBag()->first() ] , 400);
        // } else {
            let formData=new FormData();
            formData.append('name',document.getElementById('name').value);
            formData.append('name_ar',document.getElementById('name_ar').value);
            formData.append('url',document.getElementById('url').value);
            formData.append('city_id',document.getElementById('city_id').value);
            store('/cms/admin/hospitals/', formData);

                          }
</script>

@endsection
