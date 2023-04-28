@extends('cms.index')

@section('titel','step')

@section('styles')

@endsection

@section('content')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">

                <h3 class="card-title">
                    {{-- @can('Create step') --}}
                    <a href="{{route('createStep',$id)}}" class="btn btn-success">Add new step</a>
                    {{-- @endcan --}}
                    {{-- @can('Delete step') --}}
                    <a href="{{route('indexServices')}}" class="btn btn-success">Go back</a>

                    {{-- <a href="{{route('truncate-step')}}" class="btn btn-danger">Delete all steps</a></h3> --}}
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
                      {{-- @canany(['Show step', 'Delete step', 'Edit step']) --}}
                      <th>Setting</th>
                      {{-- @endcanany --}}
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($steps as $step)
                    <tr>
                      <td>{{$step->id}}</td>
                      {{-- <td>{{$step->title}}</td> --}}
                      <td>{{Str::substr($step->sentence, 0,30)."..."}}</td>
                      <td>
                    {{-- @canany(['Show step', 'Delete step', 'Edit step']) --}}
                      <div class="btn-group">
                        {{-- @can('Edit step') --}}
                        <a  href="{{route('steps.edit',$step->id)}}" class="btn btn-info" >Edit</a>
                        {{-- @endcan --}}
                        {{-- @can('Delete step') --}}
                        <button type="button" onclick="performDestroy({{$step->id}},this)"  class="btn btn-danger">Delete</button>
                        {{-- @endcan --}}
                        {{-- @can('Show step') --}}
                        <a href="{{route('steps.show',$step->id)}}"  class="btn btn-success">Show</a>
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
              {{$steps->links()}}
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection


@section('scripts')
<script>
    function performDestroy(id,reference){
        confirmDestroy('/cms/admin/steps/'+id,reference)
    }

 </script>

@endsection
