@extends('cms.index')

@section('title' , 'Edit Admin')

@section('main-title' , 'Edit Admin')

@section('sub-title' , 'Edit Admin')

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
              <h3 class="card-title">Edit  Admin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class=" p-2">

                <div class="form-group col-md-12 d-flex align-items-center justify-content-center">
                    <img class="img-circle m-auto img-bordered-sm" src="{{asset('storage/images/doctor/'.$doctors->user->image ?? " ")}}" width="200" height="200" alt="User Image">
                </div>

                  <div class="row">

                    <div class="form-group col-md-6">
                      <label for="firstname">First Name of Doctor</label>
                      <input type="text" class="form-control" disabled id="firstname" name="firstname"
                      value="{{$doctors->user->f_name}}" placeholder="Enter First Name of Doctor">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="lastname">Last Name of Doctor</label>
                      <input type="text" class="form-control" disabled id="lastname" name="lastname"
                      value="{{$doctors->user->l_name}}" placeholder="Enter Last Name of Doctor">
                    </div>
                  </div>

                  <div class="row">

                    <div class="form-group col-md-6">
                      <label for="firstname_ar">First Name of Docotor_ar</label>
                      <input type="text" class="form-control" disabled id="firstname_ar" name="firstname_ar" placeholder="Enter First Name of Doctor" value="{{$doctors->user->f_name_ar}}">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="lastname_ar">Last Name of Docotor_ar</label>
                      <input type="text" class="form-control" disabled id="lastname_ar" name="lastname_ar" placeholder="Enter Last Name of Doctor" value="{{$doctors->user->l_name_ar}}">
                    </div>
                  </div>
                  <div class="row">

                    <div class="form-group col-md-6">
                      <label for="email"> Email</label>
                      <input type="email" class="form-control" disabled id="email" name="email"
                      value="{{$doctors->email}}" placeholder="Enter Your Email">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Spachilty Name</label>
                        <select class="form-control select2" disabled id="spachilty_id" name="spachilty_id" style="width: 100%;">
                        @foreach($spachilties as $spachilty)
                          <option value="{{ $spachilty->id }}">{{ $spachilty->name }}</option>
                        @endforeach
                        </select>
                      </div>
                    </div>

                  <div class="row">

                    <div class="form-group col-md-6">
                      <label for="mobile"> Mobile</label>
                      <input type="text" class="form-control" disabled id="mobile" name="mobile"
                      value="{{$doctors->user->mobile}}" placeholder="Enter Your Mobile">
                    </div>

                    <div class="form-group col-md-6">
                      <label for="date"> Date of Birth</label>
                      <input type="date" class="form-control" disabled id="date" name="date"
                      value="{{$doctors->user->date}}" placeholder="Enter Your Date of Birth">
                    </div>
                  </div>

                  <div class="row">

                    <div class="form-group col-md-6">
                        <label for="gender"> Gender</label>
                        <select class="form-control select2" disabled name="gender" style="width: 100%;"
                              id="gender" aria-label=".form-select-sm example">
                              <option selected> {{ $doctors->user->gender }} </option>

                              <option value="male">Male</option>
                             <option value="female">FeMale </option>
                          </select>
                 </div>

                    <div class="form-group col-md-6">
                           <label for="status"> Status</label>
                           <select class="form-control select2" disabled name="status" style="width: 100%;"
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
                        <select class="form-control select2" disabled id="city_id" name="city_id" style="width: 100%;">
                        @foreach($cities as $city)
                          {{-- <option value="{{ $city->id }}">{{ $city->name }}</option> --}}

                          <option @if ($city->id == $doctors->user->city_id) selected @endif value="{{ $city->id }}">
                            {{ $city->name }}</option>
                        @endforeach
                        </select>
                      </div>


                    <div class="form-group col-md-6">
                        <label for="type"> Type</label>
                        <select class="form-control select2" disabled name="type" style="width: 100%;"
                              id="type" aria-label=".form-select-sm example">
                             <option value="male">co-doctor</option>
                             <option value="female">from our stuff </option>
                          </select>
                     </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="description">Description</label>
                        <div class="form-floating">
                            <textarea class="form-control" disabled placeholder="Leave a comment here" id="description" name="description" style="height: 150px">{{$doctors->description}}</textarea>
                          </div>
                      </div>


                    <div class="form-group col-md-6">
                        <label for="description_ar">Description_ar</label>
                        <div class="form-floating">
                            <textarea class="form-control" disabled placeholder="Leave a comment here" id="description_ar" name="description_ar" style="height: 150px">{{$doctors->description_ar}}</textarea>
                          </div>
                      </div>


                    </div>
                   <div class="card-footer">
                    {{-- <button type="button" onclick="performUpdate({{$doctors->id}})" class="btn btn-primary">Store</button> --}}
                    <a href="{{ route('doctors.index') }}" type="submit" class="btn btn-success">Go Back</a>
                  </div>
                </div>

              <!-- /.card-body -->


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

  </script>
@endsection
