@extends('cms.index')

@section('title' , 'Index Permission')

@section('main-title' , 'Index Permission')

@section('sub-title' , 'index Permission')

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
                                <input type="text" class="form-control" placeholder="Search By Name"
                                   name='name' @if( request()->name) value={{request()->name}} @endif/>
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
                          <button class="btn btn-success btn-md" type="submit">Filter</button>
                          <a href="{{route('permissions.index')}}"  class="btn btn-danger">End Filter</a>
                          {{-- @can('Create-City') --}}
                    </div>

                         </div>
                </form>
              @can('Create Permission')
              <a href="{{ route('permissions.create') }}" type="submit" class="btn btn-success">Add New Permission</a>
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
                    <th>Permission Name</th>
                    <th>Guard Name</th>
                    {{-- <th>Desc</th> --}}

                    <th>Setting</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($permissions as $permission)
                <tr>
                    <td>{{$permission->id}}</td>
                    <td>{{$permission->name}}</td>
                    <td><span class="badge bg-success">({{$permission->guard_name}})</td>

                    <td>

                    <div class="btn-group">
                        <a href="{{ route('permissions.edit' , $permission->id ) }}" type="button" class="btn btn-info">Edit</a>
                        <button type="button" onclick="performDestroy({{$permission->id}} , this)" class="btn btn-danger">Delete</button>
                        {{-- <a href="{{ route('countries.show' , $Permission->id) }}" type="button" class="btn btn-success">Show</a> --}}
                      </div></td>
                </tr>
                    @endforeach

                </tbody>
              </table>
            </div>

            {{ $permissions->links() }}
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

    confirmDestroy('/cms/admin/permissions/'+id , reference);
  }
  </script>
@endsection
