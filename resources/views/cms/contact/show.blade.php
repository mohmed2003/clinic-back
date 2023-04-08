@extends('cms.index')

@section('titel','Create Contact')

@section('main-titel','Contact')

@section('styles')

@endsection

@section('content')

<section class="content w-100">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 h-75">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" disabled id="name" name="name" placeholder="Name" value="{{$contacts->name}}">
                  </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" disabled id="email" name="email" placeholder="Email" value="{{$contacts->email}}">
                    </div>

                  <div class="form-group w-50">
                    <label for="massge">Massge</label>
                    <div class="form-floating">
                        <textarea class="form-control" disabled placeholder="Leave a comment here" id="massge" name="massge" style="height: 150px">{{$contacts->massge}}
                        </textarea>
                      </div>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="{{route('contacts.index')}}" class="btn btn-success">Go back</a>

                </div>
              </form>
            </div>
            </div>
            </div>
</section>
            <!-- /.card -->
@endsection

@section('scripts')
<script>

</script>

@endsection
