@extends('cms.index')

@section('titel','sup_descriptions')

@section('styles')

@endsection

@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                <h3 class="card-title">

                    {{-- @can('Create sup_descriptions') --}}
                    <a href="{{route('createSupDescription',$id)}}" class="btn btn-success">Add new sup_descriptions</a>
                    {{-- @endcan --}}
                    {{-- @can('Delete sup_descriptions') --}}
                    <a href="{{route('indexServices')}}" class="btn btn-success">Go back</a>

                    {{-- <a href="{{route('truncate-sup_description')}}" class="btn btn-danger">Delete all sup_descriptionss</a></h3> --}}
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
                      {{-- <th>Title</th> --}}
                      <th>Description</th>
                      {{-- @canany(['Show sup_descriptions', 'Delete sup_descriptions', 'Edit sup_descriptions']) --}}
                      <th>Setting</th>
                      {{-- @endcanany --}}
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($sup_descriptions as $sup_description)
                    <tr>
                      <td>{{$sup_description->id}}</td>
                      {{-- <td>{{$sup_descriptions->title}}</td> --}}
                      <td>{{Str::substr($sup_description->description, 0,30)."..."}}</td>
                      <td>
                    {{-- @canany(['Show sup_descriptions', 'Delete sup_descriptions', 'Edit sup_descriptions']) --}}
                      <div class="btn-group">
                        {{-- @can('Edit sup_descriptions') --}}
                        <a  href="{{route('sup_descriptions.edit',$sup_description->id)}}" class="btn btn-info" >Edit</a>
                        {{-- @endcan --}}
                        {{-- @can('Delete sup_descriptions') --}}
                        <button type="button" onclick="performDestroy({{$sup_description->id}},this)"  class="btn btn-danger">Delete</button>
                        {{-- @endcan --}}
                        {{-- @can('Show sup_descriptions') --}}
                        <a href="{{route('sup_descriptions.show',$sup_description->id)}}"  class="btn btn-success">Show</a>
                        {{-- @endcan --}}
                      </div>
                    </td>
                    {{-- @endcanany --}}
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{-- <div class="card-footer">
                  </div> --}}
              </div>

              {{$sup_descriptions->links()}}
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection


@section('scripts')
<script>
    function performDestroy(id,reference){
        confirmDestroy('/cms/admin/sup_descriptions/'+id,reference)
    }

 </script>

@endsection
