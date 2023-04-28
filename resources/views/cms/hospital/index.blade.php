@extends('cms.index')

@section('titel','Opinion')

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
                          <a href="{{route('hospitals.index')}}"  class="btn btn-danger">End Filter</a>
                          {{-- @can('Create-City') --}}
                    </div>

                         </div>
                </form>
                <h3 class="card-title">
                    @can('Create Hospital')
                    <a href="{{route('hospitals.create')}}" class="btn btn-success">Add new Hospital</a>
                    @endcan
                    @can('Delete Hospital')
                    <a href="truncate-hospital" class="btn btn-danger">Delete all Hospitals</a>
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
                      <th>City Name</th>
                      <th>Country Name</th>
                      <th>URL</th>
                      @canany(['Show Hospital','Delete Hospital','Edit Hospital'])
                      <th>Setting</th>
                      @endcanany
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($hospitals as $hospital)
                    <tr>
                      <td>{{$hospital->id}}</td>
                      <td>{{$hospital->name}}</td>
                      <td>{{$hospital->city->name ?? ""}}</td>
                      <td>{{$hospital->city->country->name ?? ""}}</td>
                      <td>{{Str::substr($hospital->url, 0,15)."..."}}</td>
                      @canany(['Show Hospital','Delete Hospital','Edit Hospital'])
                      <td>
                      <div class="btn-group">
                        @can('Edit Hospital')
                        <a  href="{{route('hospitals.edit',$hospital->id)}}" class="btn btn-info" >Edit</a>
                        @endcan
                        @can('Delete Hospital')
                        <button type="button" onclick="performDestroy({{$hospital->id}},this)"  class="btn btn-danger">Delete</button>
                        @endcan
                        @can('Show Hospital')
                        <a href="{{route('hospitals.show',$hospital->id)}}"  class="btn btn-success">Show</a>
                        @endcan
                      </div>
                    </td>
                    @endcanany

                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              {{$hospitals->links()}}
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection


@section('scripts')
<script>
    function performDestroy(id,reference){
        confirmDestroy('/cms/admin/hospitals/'+id,reference)
    }

 </script>

@endsection
