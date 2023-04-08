@extends('cms.index')

@section('titel','Spachilty')

@section('styles')

@endsection

@section('content')
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
                          <button class="btn btn-success btn-md" type="submit"> Filter</button>
                          <a href="{{route('spachilties.index')}}"  class="btn btn-danger">End Filter</a>
                          {{-- @can('Create-City') --}}
                    </div>

                         </div>
                </form>
                <h3 class="card-title">
                    @can('Create Spachilty')
                    <a href="{{route('spachilties.create')}}" class="btn btn-success">Add new Spachilty</a>
                    @endcan
                    @can('Delete Spachilty')
                    <a href="truncate-spachilty" class="btn btn-danger">Delete all Spachilties</a>
                    @endcan
                </h3>
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
                      <th>Name</th>
                      @canany(['Edit Spachilty', 'Delete Spachilty', 'Show Spachilty'])
                      <th>Setting</th>
                      @endcanany
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($spachilties as $spachilty)
                    <tr>
                      <td>{{$spachilty->id}}</td>
                      <td>{{$spachilty->name}}</td>
                      {{-- <td>{{$spachilty->cities_count}}</td> --}}
                      @canany(['Edit Spachilty', 'Delete Spachilty', 'Show Spachilty'])
                      <td>
                      <div class="btn-group">
                        @can('Edit Spachilty')
                        <a  href="{{route('spachilties.edit',$spachilty->id)}}" class="btn btn-info" >Edit</a>
                        @endcan
                        @can('Delete Spachilty')
                        <button type="button" onclick="performDestroy({{$spachilty->id}},this)"  class="btn btn-danger">Delete</button>
                        @endcan
                        @can('Show Spachilty')
                        {{-- <a href="{{route('spachilties.show',$Spachilty->id)}}"  class="btn btn-success">Show</a> --}}
                        @endcan
                      </div>
                    </td>
                    @endcanany
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              {{$spachilties->links()}}
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection

@section('scripts')
<script>
    function performDestroy(id,reference){
        confirmDestroy('/cms/admin/spachilties/'+id,reference)
    }
 </script>

@endsection
