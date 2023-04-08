@extends('cms.index')

@section('title' , 'Index Admin')

@section('main-title' , 'Index Admin')

@section('sub-title' , 'index Admin')

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

                                {{-- <div class="input-icon col-md-2">
                                    <input type="text" class="form-control" placeholder="Search By Country"
                                       name='code' @if( request()->cities->country->name) value={{request()->cities->country->name}} @endif/>
                                      <span>
                                          <i class="flaticon2-search-1 text-muted"></i>
                                      </span>
                                    </div> --}}


                    <div class="col-md-4">
                          <button class="btn btn-success btn-md" type="submit"> Filter</button>
                          <a href="{{route('admins.index')}}"  class="btn btn-danger">End Filter</a>
                          {{-- @can('Create-City') --}}
                    </div>

                         </div>
                </form>
              @canany(['Create Admin','Delete Admin'])
                @can('Create Admin')
                <a href="{{ route('admins.create') }}" type="submit" class="btn btn-success">Add New Admin</a>
                @endcan
                @can('Delete Admin')
                <a href="truncate-admin" class="btn btn-danger">Delete all Admins</a>
                @endcan
              @endcanany
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
                    <th>Gender</th>
                    <th>status</th>
                    <th>city</th>
                    @canany(['Delete Admin', 'Edit Admin', 'Show Admin'])
                    <th>Setting</th>
                    @endcanany
                  </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                <tr>
                    <td>{{$admin->id}}</td>
                    <td>
                      <img class="img-circle img-bordered-sm" src="{{asset('storage/images/admin/'.$admin->user->image ?? " ")}}" width="60" height="60" alt="User Image">
                   </td>
                    <td>{{$admin->user->f_name .' '. $admin->user->l_name  }}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{$admin->user->gender ?? ""}}</td>
                    <td>{{$admin->user->status ?? ""}}</td>
                    <td>{{$admin->user->city->name ?? ""}}</td>
                    @canany(['Delete Admin', 'Create Admin', 'Show Admin'])

                    <td>

                    <div class="btn-group">
                        @can('Edit Admin')
                        <a href="{{ route('admins.edit' , $admin->id ) }}" type="button" class="btn btn-info">Edit</a>
                        @endcan
                        @can('Delete Admin')
                        <button type="button" onclick="performDestroy({{$admin->id}} , this)" class="btn btn-danger">Delete</button>
                        @endcan
                        @can('Show Admin')
                        {{-- <a href="{{ route('cities.show' , $Admin->id) }}" type="button" class="btn btn-success">Show</a> --}}
                        @endcan
                      </div></td>
                      @endcanany

                </tr>
                    @endforeach

                </tbody>
              </table>
            </div>

            {{ $admins->links() }}
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

    confirmDestroy('/cms/admin/admins/'+id , reference);
  }
  </script>
@endsection
