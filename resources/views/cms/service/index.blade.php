@extends('cms.index')

@section('titel','Service')

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
                                <input type="text" class="form-control" placeholder="Search By Title"
                                   name='title' @if( request()->title) value={{request()->title}} @endif/>
                                  <span>
                                      <i class="flaticon2-search-1 text-muted"></i>
                                  </span>
                                </div>


                    <div class="col-md-4">
                          <button class="btn btn-success btn-md" type="submit"> Filter</button>
                          <a href="{{route('services.index')}}"  class="btn btn-danger">End Filter</a>
                          {{-- @can('Create-City') --}}
                    </div>

                         </div>
                </form>
                <h3 class="card-title">
                    @can('Create Service')
                    <a href="{{route('services.create')}}" class="btn btn-success">Add new Service</a>
                    @endcan
                    @can('Delete Service')
                    <a href="{{route('truncate-service')}}" class="btn btn-danger">Delete all Services</a></h3>
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
                      <th>Title</th>
                      {{-- <th>Description</th> --}}
                      @canany(['Show Service', 'Delete Service', 'Edit Service'])
                      <th>Sup_Title</th>
                      <th>Sup_Description</th>
                      <th>Step</th>
                      <th>Setting</th>
                      @endcanany
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($services as $service)
                    <tr>
                      <td>{{$service->id}}</td>
                      <td>{{$service->title}}</td>
                      {{-- <td>{{Str::substr($service->description, 0,30)."..."}}</td> --}}
                      <td><a href="{{route('indexSupTitle',['id'=>$service->id])}}"
                        class="btn btn-info">({{$service->sup_titles_count}})
                        sup_title/s</a> </td>
                      <td><a href="{{route('indexSupDescription',['id'=>$service->id])}}"
                        class="btn btn-info">({{$service->sup_descriptions_count}})
                        sup_description/s</a> </td>

                       <td>
                        <a href="{{route('indexStep',['id'=>$service->id])}}"
                        class="btn btn-info">({{$service->steps_count}})
                        step/s</a>
                       </td>

                      <td>
                    @canany(['Show Service', 'Delete Service', 'Edit Service'])
                      <div class="btn-group">
                        @can('Edit Service')
                        <a  href="{{route('services.edit',$service->id)}}" class="btn btn-info" >Edit</a>
                        @endcan
                        @can('Delete Service')
                        <button type="button" onclick="performDestroy({{$service->id}},this)"  class="btn btn-danger">Delete</button>
                        @endcan
                        @can('Show Service')
                        <a href="{{route('services.show',$service->id)}}"  class="btn btn-success">Show</a>
                        @endcan
                      </div>
                    </td>
                    @endcanany
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              {{$services->links()}}
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection


@section('scripts')
<script>
    function performDestroy(id,reference){
        confirmDestroy('/cms/admin/services/'+id,reference)
    }

 </script>

@endsection
