@extends('cms.index')

@section('title' , 'Index Contact')

@section('main-title' , 'Index Contact')

@section('sub-title' , 'index Contact')

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
                                <input type="text" class="form-control" placeholder="Search By Eamil"
                                   name='email' @if( request()->name) value={{request()->email}} @endif/>
                                  <span>
                                      <i class="flaticon2-search-1 text-muted"></i>
                                  </span>
                                </div>




                    <div class="col-md-4">
                          <button class="btn btn-success btn-md" type="submit"> Filter</button>
                          <a href="{{route('contacts.index')}}"  class="btn btn-danger">End Filter</a>
                          {{-- @can('Create-City') --}}
                    </div>

                         </div>
                </form>
                <h3 class="card-title">

                    @can('Delete Contact')
                    <a href="{{route('truncate-contact')}}" class="btn btn-danger">Delete all Massges</a></h3>
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
                      <th>Name</th>
                      <th>Email</th>
                      <th>Massge</th>
                      @canany(['Show Contact', 'Delete Contact'])
                      <th>Setting</th>
                      @endcanany
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($contacts as $contact)
                    <tr>
                      <td>{{$contact->id}}</td>
                      <td>{{$contact->name}}</td>
                      <td>{{$contact->email}}</td>
                      <td>{{Str::substr($contact->massge, 0,30)."..."}}</td>
                      <td>
                    @canany(['Show Contact', 'Delete Contact'])
                      <div class="btn-group">
                        @can('Delete Contact')
                        <button type="button" onclick="performDestroy({{$contact->id}},this)"  class="btn btn-danger">Delete</button>
                        @endcan
                        @can('Show Contact')
                        <a href="{{route('contacts.show',$contact->id)}}"  class="btn btn-success">Show</a>
                        @endcan
                      </div>
                    </td>
                    @endcanany
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              {{-- {{$opinions->links()}} --}}
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
@endsection


@section('scripts')
<script>
    function performDestroy(id,reference){
        confirmDestroy('/cms/admin/contacts/'+id,reference)
    }

 </script>

@endsection
