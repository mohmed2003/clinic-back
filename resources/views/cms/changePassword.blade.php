@extends('cms.index')

@section('title' , 'changePasswoed')

@section('main-title' , 'Change-Passwoed')

@section('sub-title' , 'changePasswoed')

@section('styles')

@endsection

@section('content')

<div class="w-100 d-flex align-items-center justify-content-center">
<form class="p-2 w-75">
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="text" class="form-control" id="password" name="password" aria-describedby="emailHelp">
      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
    </div>
    <br>    <div class="mb-3">
      <label for="new_password" class="form-label">New Password</label>
      <input type="password" class="form-control" id="new_password" name="new_password">
    </div>
    <div class="mb-3">
        <label for="new_password_confirmation" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
      </div>
    {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
    <button type="button" onclick="performUpdatePassword({{auth('admin')->id()}})" class="btn btn-primary">Submit</button>
  </form>
</div>


@endsection

@section('scripts')
<script>
    function performUpdatePassword(id){
      let formData=new FormData();
      // formData.append('image',document.getElementById('image').files[0]);
      formData.append('password',document.getElementById('password').value);
      formData.append('new_password',document.getElementById('new_password').value);
      formData.append('new_password_confirmation',document.getElementById('new_password_confirmation').value);
      storeRoute('/cms/admin/changePassword/'+id, formData);
    }
</script>
@endsection
