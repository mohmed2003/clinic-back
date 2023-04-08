@extends('cms.index')
@section('title','Home Page')

@section('styles')
<style>
    a{
        color: black;
        font-weight: bold
    }

    a:hover{
        text-decoration: none;
    }
</style>

@endsection

@section('content')

<div class="container-fluid">
    <div class="row">


        <!-- col -->
        @php
        use App\Models\Doctor;
        $count = Doctor::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('doctors.index')}}" class="info-box-icon bg-danger elevation-1"><i class=" fas fa-user-md"></i></a>

              <div class="info-box-content">
                <a href="{{route('doctors.index')}}" class="info-box-text">Number of Doctors </a>
                <a href="{{route('doctors.index')}}" class="info-box-number">{{$count}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- col -->
          @php
        use App\Models\Admin;
        $count = Admin::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('admins.index')}}" class="info-box-icon bg-success elevation-1"><i class="fas fa-user"></i></i></a>

              <div class="info-box-content">
                <a href="{{route('admins.index')}}" class="info-box-text">Number of Admins </a>
                <a href="{{route('admins.index')}}" class="info-box-number">{{$count}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- col -->
          @php
        use App\Models\City;
        $serCount = City::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('cities.index')}}" class="info-box-icon bg-warning elevation-1"><i class=" fas fa-building"></i></i></a>

              <div class="info-box-content">
                <a href="{{route('cities.index')}}" class="info-box-text"> Number of Cities</a>
                <a href="{{route('cities.index')}}" class="info-box-number">{{$serCount}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- col -->
          @php
        use App\Models\Country;
        $sparCount = Country::count('id');
        @endphp

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <a href="{{route('countries.index')}}" class="info-box-icon bg-blue elevation-1"><i class=" fas fa-globe-europe"></i></i></a>

              <div class="info-box-content">
                <a href="{{route('countries.index')}}" class="info-box-text"> Number of Countries</a>
                <a href="{{route('countries.index')}}" class="info-box-number">{{$sparCount}}</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          @php
          use App\Models\Opinion;
          $serCount = Opinion::count('id');
          @endphp

            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <a href="{{route('opinions.index')}}" class="info-box-icon bg-warning elevation-1"><i class=" fas fa-comment"></i></i></a>

                <div class="info-box-content">
                  <a href="{{route('opinions.index')}}" class="info-box-text"> Number of Opinions</a>
                  <a href="{{route('opinions.index')}}" class="info-box-number">{{$serCount}}</a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->



          @php
          use App\Models\Spachilty;
          $serCount = Spachilty::count('id');
          @endphp

            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box mb-3">
                <a href="{{route('spachilties.index')}}" class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-tag"></i></a>

                <div class="info-box-content">
                  <a href="{{route('spachilties.index')}}" class="info-box-text"> Number of Spachilties</a>
                  <a href="{{route('spachilties.index')}}" class="info-box-number">{{$serCount}}</a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
    </div>
</div>

@endsection

@section('scripts')

@endsection
