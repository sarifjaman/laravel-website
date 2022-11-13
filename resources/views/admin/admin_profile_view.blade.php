@extends('admin.admin_master')
 @section('admin')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ asset('backend/img/user4-128x128.jpg') }}" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{ $admininfo->name }}</h3>

              {{-- <p class="text-muted text-center">Software Engineer</p> --}}

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Name:</b> <p class="float-right">{{ $admininfo->name }}</p>
                </li>
                <li class="list-group-item">
                  <b>User Email:</b> <p class="float-right">{{ $admininfo->email }}</p>
                </li>
                <li class="list-group-item">
                  <b>Username:</b> <p class="float-right">{{ $admininfo->username }}</p>
                </li>
              </ul>

              <a href="{{ route('admin.editprofile') }}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <!-- /.card -->
        </div>
        <!-- /.col -->

        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
  </section>

 @endsection 