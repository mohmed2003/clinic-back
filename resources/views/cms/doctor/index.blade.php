@extends('cms.index')

@section('title' , 'Index Doctor')

@section('main-title' , 'Index Doctor')

@section('sub-title' , 'index Doctor')

@section('styles')

@endsection

@section('content')

<section class="content">
    <div class="container-fluid">

      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <form action="" method="get" style="margin-bottom:2%;">
                    <div class="row">
                        {{-- <div class="input-icon col-md-2">
                            <input type="text" class="form-control" placeholder="Search By Name"
                               name='user.f_name' @if( request()->f_name ) value={{request()->f_name}} @endif/>
                              <span>
                                  <i class="flaticon2-search-1 text-muted"></i>
                              </span>
                            </div> --}}

                            <div class="input-icon col-md-2">
                                <input type="text" class="form-control" placeholder="Search By Eamil"
                                   name='email' @if( request()->email) value={{request()->email}} @endif/>
                                  <span>
                                      <i class="flaticon2-search-1 text-muted"></i>
                                  </span>
                                </div>

                            <div class="input-icon col-md-2">
                                <input type="text" class="form-control" placeholder="Search By Type"
                                   name='type' @if( request()->type) value={{request()->type}} @endif/>
                                  <span>
                                      <i class="flaticon2-search-1 text-muted"></i>
                                  </span>
                                </div>
{{--
                                <div class="input-icon col-md-2">
                                    <input type="text" class="form-control" placeholder="Search By Country"
                                       name='code' @if( request()->cities->country->name) value={{request()->cities->country->name}} @endif/>
                                      <span>
                                          <i class="flaticon2-search-1 text-muted"></i>
                                      </span>
                                    </div> --}}


                    <div class="col-md-4">
                          <button class="btn btn-success btn-md" type="submit"> Filter</button>
                          <a href="{{route('doctors.index')}}"  class="btn btn-danger">End Filter</a>
                          {{-- @can('Create-City') --}}
                    </div>

                         </div>
                </form>

                @can('Create Doctor')
                <a href="{{ route('doctors.create') }}" type="submit" class="btn btn-success">Add New Doctor</a>
                @endcan
                @can('Delete Doctor')
                <a href="{{ route('truncate-doctor') }}" type="submit" class="btn btn-danger">Delete all Doctors</a>
                @endcan

              {{-- <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div> --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Full Name</th>
                    <th>email</th>
                    {{-- <th>Gender</th> --}}
                    <th>status</th>
                    <th>Spachilty</th>
                    {{-- <th>city</th> --}}
                    @canany(['Show Doctor', 'Edit Doctor','Delete Doctor'])
                    <th>Setting</th>
                    @endcanany
                  </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $doctor)
                <tr>
                    <td>{{$doctor->id}}</td>
                    <td>
                        <img class="img-circle img-bordered-sm" src="{{ isset($doctor) && isset($doctor->user) && $doctor->user->image ? asset('storage/images/doctor/'.$doctor->user->image) : asset('storage/images/doctor/person.png')}}" width="60" height="60" alt="User Image">
                    </td>
                    {{-- <td>{{$doctor->user->f_name ?? " " .' '. $doctor->user->l_name ?? " " }}</td> --}}
                    <td>{{$doctor->email}}</td>
                    <td>{{$doctor->user->gender ?? ""}}</td>
                    {{-- <td>{{$doctor->user->status ?? ""}}</td> --}}
                    <td>{{$doctor->spachilty->name ?? ""}}</td>
                    {{-- <td>{{$doctor->user->city->name ?? ""}}</td> --}}
                    @canany(['Show Doctor', 'Delete Doctor','Delete Doctor'])

                    <td>

                    <div class="btn-group">
                        @can('Edit Doctor')
                        <a href="{{ route('doctors.edit' , $doctor->id ) }}" type="button" class="btn btn-info">Edit</a>
                        @endcan
                        @can('Delete Doctor')
                        <button type="button" onclick="performDestroy({{$doctor->id}} , this)" class="btn btn-danger">Delete</button>
                        @endcan
                        @can('Show Doctor')
                        <a href="{{ route('doctors.show' , $doctor->id) }}" type="button" class="btn btn-success">Show</a>
                        @endcan
                      </div></td>
                      @endcanany
                </tr>
                    @endforeach

                </tbody>
              </table>
            </div>

            {{ $doctors->links() }}
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </section>
@endsection


@section('scripts')

<script>
  function performDestroy(id , reference){

    confirmDestroy('/cms/doctor/doctors/'+id , reference);
  }
  </script>
@endsection
