@extends('cms.index')

@section('titel','Country')

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
                               name='name' @if( request()->name ) value={{request()->name}} @endif/>
                              <span>
                                  <i class="flaticon2-search-1 text-muted"></i>
                              </span>
                            </div>

                            <div class="input-icon col-md-2">
                                <input type="text" class="form-control" placeholder="Search By Code"
                                   name='code' @if( request()->code) value={{request()->code}} @endif/>
                                  <span>
                                      <i class="flaticon2-search-1 text-muted"></i>
                                  </span>
                                </div>



                    <div class="col-md-4">
                          <button class="btn btn-success btn-md" type="submit"> Filter</button>
                          <a href="{{route('countries.index')}}"  class="btn btn-danger">End Filter</a>
                          {{-- @can('Create-City') --}}
                    </div>

                         </div>
                </form>
                <h3 class="card-title">
                    @can('Create Country')
                    <a href="{{route('countries.create')}}" class="btn btn-success">Add new Country</a>
                    @endcan
                    @can('Delete Country')
                    <a href="{{route('truncate-countriy')}}" class="btn btn-danger">Delete all Countries</a>
                    @endcan
                </h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                      <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Number of City</th>
                      <th>Code</th>
                      @canany(['Edit Country', 'Show Country', 'Delete Country'])
                      <th>Setting</th>
                      @endcanany
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($countries as $country)
                    <tr>
                      <td>{{$country->id}}</td>
                      <td>{{$country->name}}</td>
                      <td>{{$country->cities_count}}</td>
                      <td>{{$country->code}}</td>
                      @canany(['Create Country', 'Show Country', 'Delete Country'])
                      <td>
                      <div class="btn-group">
                        @can('Edit Country')
                        <a  href="{{route('countries.edit',$country->id)}}" class="btn btn-info" >Edit</a>
                        @endcan
                        @can('Delete Country')
                        <button type="button" onclick="performDestroy({{$country->id}},this)"  class="btn btn-danger">Delete</button>
                        @endcan
                        @can('Show Country')
                        {{-- <a href="{{route('countries.show',$country->id)}}"  class="btn btn-success">Show</a> --}}
                        @endcan
                      </div>
                    </td>
                    @endcanany
                </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              {{$countries->links()}}
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection


@section('scripts')
<script>
    function performDestroy(id,reference){
        confirmDestroy('/cms/admin/countries/'+id,reference)
    }

 </script>

@endsection
