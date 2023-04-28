@extends('cms.index')

@section('titel','sup_title')

@section('styles')

@endsection

@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <form action="" class="d-none" method="get" style="margin-bottom:2%;">
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
                          <a href="{{route('indexSupTitle',$id)}}"  class="btn btn-danger">End Filter</a>
                          {{-- @can('Create-City') --}}
                    </div>

                         </div>
                </form>
                <h3 class="card-title">
                    {{-- @can('Create sup_title') --}}
                    <a href="{{route('createSupTitle',$id)}}" class="btn btn-success">Add new sup_title</a>
                    {{-- @endcan --}}
                    {{-- @can('Delete sup_title') --}}
                    <a href="{{route('indexServices')}}" class="btn btn-success">Go back</a>
                    {{-- <a href="{{route('truncate-sup_title',$id)}}" class="btn btn-danger">Delete all sup_titles</a></h3> --}}
                    {{-- @endcan --}}
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
                      <th>Description</th>
                      {{-- @canany(['Show sup_title', 'Delete sup_title', 'Edit sup_title']) --}}
                      <th>Setting</th>
                      {{-- @endcanany --}}
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($sup_titles as $sup_title)
                    <tr>
                      <td>{{$sup_title->id}}</td>
                      <td>{{$sup_title->title}}</td>
                      <td>{{Str::substr($sup_title->description, 0,30)."..."}}</td>
                      <td>
                    {{-- @canany(['Show sup_title', 'Delete sup_title', 'Edit sup_title']) --}}
                      <div class="btn-group">
                        {{-- @can('Edit sup_title') --}}
                        <a  href="{{route('sup_titles.edit',$sup_title->id)}}" class="btn btn-info" >Edit</a>
                        {{-- @endcan --}}
                        {{-- @can('Delete sup_title') --}}
                        <button type="button" onclick="performDestroy({{$sup_title->id}},this)"  class="btn btn-danger">Delete</button>
                        {{-- @endcan --}}
                        {{-- @can('Show sup_title') --}}
                        <a href="{{route('sup_titles.show',$sup_title->id)}}"  class="btn btn-success">Show</a>
                        {{-- @endcan --}}
                      </div>
                    </td>
                    {{-- @endcanany --}}
                    </tr>
                    @endforeach
                  </tbody>

                </table>

              </div>
              <div class="text-center w-25 pt-5 m-auto">
                {{$sup_titles->links()}}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection


@section('scripts')
<script>
    function performDestroy(id,reference){
        confirmDestroy('/cms/admin/sup_titles/'+id,reference)
    }

 </script>

@endsection
