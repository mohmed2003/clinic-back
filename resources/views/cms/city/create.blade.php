@extends('cms.index')

@section('titel','City Create')

@section('main-titel','Citye')

@section('sup-titel','Create')

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
                        <label for="country_id">Name Country</label>
                        <select class="form-control select2" style="width: 100%;"id="country_id" name="country_id">

                            @foreach ($countries as $country )
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach

                        </select>
                      </div>

                  <div class="form-group">
                    <label for="name">Name City</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="street">Street</label>
                    <input type="text" class="form-control" id="street" name="street" placeholder="street">
                  </div>


              <div class="form-group">
                <label for="name_ar">Name City_ar</label>
                <input type="text" class="form-control" id="name_ar" name="name_ar" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="street_ar">Street_ar</label>
                <input type="text" class="form-control" id="street_ar" name="street_ar" placeholder="street">
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" onclick="performStore()" class="btn btn-primary">Stor</button>
                  <a href="{{route('cities.index')}}" class="btn btn-success">Go back</a>

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
    formData.append('name',document.getElementById('name').value);
    formData.append('country_id',document.getElementById('country_id').value);
    formData.append('street',document.getElementById('street').value);
    formData.append('name_ar',document.getElementById('name_ar').value);
    formData.append('street_ar',document.getElementById('street_ar').value);
    store('/cms/admin/cities', formData);
  }
</script>

@endsection
