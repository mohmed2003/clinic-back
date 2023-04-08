@extends('cms.index')

@section('titel','City')

@section('main-titel','Citye')

@section('sup-titel','Index')

@section('styles')

@endsection

@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <form action="" method="get" style="margin-bottom:2%;">
                    <div class="row">
                        <div class="input-icon col-md-2">
                            <input type="text" class="form-control" placeholder="Search By Name"
                               name='name' @if( request()->name) value={{request()->name}} @endif/>
                              <span>
                                  <i class="flaticon2-search-1 text-muted"></i>
                              </span>
                            </div>

                            <div class="input-icon col-md-2">
                                <input type="text" class="form-control" placeholder="Search By street"
                                   name='street' @if( request()->street) value={{request()->street}} @endif/>
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
                          <a href="{{route('cities.index')}}"  class="btn btn-danger">End Filter</a>
                          {{-- @can('Create-City') --}}
                    </div>

                         </div>
                </form>
                <h3 class="card-title">
                    @can('Create City')
                    <a href="{{route('cities.create')}}" class="btn btn-success">Add new city</a>
                    @endcan
                    @can('Delete City')
                    <a href="truncate-city" class="btn btn-danger">Delete all Cities</a>
                    @endcan
                </h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                      <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Street</th>
                      <th>Country Name</th>
                      @canany(['Edit City', 'Show City', 'Delete City'])
                      <th>Setting</th>
                      @endcanany
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($cities as $city)
                    <tr>
                      <td>{{$city->id}}</td>
                      <td>{{$city->name}}</td>
                      <td>{{$city->street}}</td>
                      <td>{{$city->country->name ?? ""}}</td>
                      @canany(['Create City', 'Show City', 'Delete City'])
                      <td>
                      <div class="btn-group">
                        @can('Edit City')
                        <a  href="{{route('cities.edit',$city->id)}}" class="btn btn-info" >Edit</a>
                        @endcan
                        @can('Delete City')
                        <button type="button" onclick="performDestroy({{$city->id}},this)"  class="btn btn-danger">Delete</button>
                        @endcan
                        @can('Show City')
                        {{-- <a href="{{route('cities.show',$city->id)}}"  class="btn btn-success">Show</a> --}}
                        @endcan
                      </div>
                    </td>
                    @endcanany
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              {{$cities->links()}}
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection

@section('scripts')
<script>
    function performDestroy(id,reference){
        confirmDestroy('/cms/admin/cities/'+id,reference)
    }
 </script>

@endsection
