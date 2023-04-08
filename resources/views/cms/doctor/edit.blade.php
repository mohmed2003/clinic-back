@extends('cms.index')

@section('title' , 'Create Doctor')

@section('main-title' , 'Create Doctor')

@section('sub-title' , 'Create Doctor')

@section('styles')

@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create New doctor</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="p-2">

                <div class="row">

                    <div class="form-group col-md-6">
                      <label for="firstname">First Name of Admin</label>
                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name of Admin" value="{{$doctors->user->f_name}}">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="lastname">Last Name of Admin</label>
                      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name of Admin" value="{{$doctors->user->l_name}}">
                    </div>
                  </div>

                  <div class="row">

                    <div class="form-group col-md-6">
                      <label for="email"> Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" value="{{$doctors->email}}">
                    </div>

                  <div class="form-group col-md-6">
                    <label>Spachilty Name</label>
                    <select class="form-control select2" id="spachilty_id" name="spachilty_id" style="width: 100%;">
                    @foreach($spachilties as $spachilty)
                      <option value="{{ $spachilty->id }}">{{ $spachilty->name }}</option>
                    @endforeach
                    </select>
                  </div>
                </div>

                  <div class="row">

                    <div class="form-group col-md-6">
                      <label for="mobile"> Mobile</label>
                      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile" value="{{$doctors->user->mobile}}">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="date"> Date of Birth</label>
                      <input type="date" class="form-control" id="date" name="date" placeholder="Enter Your Date of Birth" value="{{$doctors->user->date}}">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-6">
                        <label for="gender"> Gender</label>
                        <select class="form-select form-select-sm" name="gender" style="width: 100%;"
                              id="gender" aria-label=".form-select-sm example">
                              <option selected> {{ $doctors->user->gender }} </option>
                              <option value="male">Male</option>
                             <option value="female">FeMale </option>
                          </select>
                 </div>

                    <div class="form-group col-md-6">
                           <label for="status"> Status</label>
                           <select class="form-select form-select-sm" name="status" style="width: 100%;"
                                 id="status" aria-label=".form-select-sm example">
                                 <option selected> {{ $doctors->user->status }} </option>
                                 <option value="active">Active </option>
                                <option value="inactive">InActive </option>
                             </select>
                    </div>
                </div>

                <div class="row">

                    <div class="form-group col-md-6">
                        <label>City Name</label>
                        <select class="form-control select2" id="city_id" name="city_id" style="width: 100%;">
                        @foreach($cities as $city)
                          {{-- <option value="{{ $city->id }}">{{ $city->name }}</option> --}}

                          <option @if ($city->id == $doctors->user->city_id) selected @endif value="{{ $city->id }}">
                            {{ $city->name }}</option>
                        @endforeach
                        </select>
                      </div>

                    <div class="form-group col-md-6">
                      <label for="image"> Chosse Image</label>
                      <input type="file" class="form-control" id="image" name="image" placeholder="Choose Image">
                    </div>
                   </div>

                <div class="row">


                     <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description" style="height: 150px">{{$doctors->description}}</textarea>
                      </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="type">Type</label>
                        <select class="form-control select3" id="type" name="type" style="width: 100%;">
                            <option selected> {{ $doctors->type }} </option>
                          <option value="from our stuff">from stuff</option>
                          <option value="co-doctor">co-doctor</option>
                        </select>
                      </div>

                   </div>



              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" onclick="performUpdate({{$doctors->id}})" class="btn btn-primary">Update</button>
                <a href="{{ route('doctors.index') }}" type="submit" class="btn btn-success">Go Back</a>
              </div>

            </form>
          </div>
          <!-- /.card -->
        </div>

      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection

@section('scripts')
<script>
  function performUpdate(id){
      let formData = new FormData();
      formData.append('firstname',document.getElementById('firstname').value);
      formData.append('lastname',document.getElementById('lastname').value);
      formData.append('email',document.getElementById('email').value);
      formData.append('mobile',document.getElementById('mobile').value);
      formData.append('date',document.getElementById('date').value);
      formData.append('gender',document.getElementById('gender').value);
      formData.append('status',document.getElementById('status').value);
      formData.append('type',document.getElementById('type').value);
      formData.append('city_id',document.getElementById('city_id').value);
      formData.append('spachilty_id',document.getElementById('spachilty_id').value);
      formData.append('description',document.getElementById('description').value);
      formData.append('image',document.getElementById('image').files[0]);

      console.log(document.getElementById('type').value);

      storeRoute('/cms/admin/doctors_update/'+id , formData)

  }
  </script>
@endsection
