@extends('admin.admin_master')
 @section('admin')
 <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Change Password Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

         
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Change Password</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('update.password') }}" method="POST">
                    @csrf

                  <div class="card-body">

                    <div class="form-group">
                      <label for="oldpassword">Old Password</label>
                      <input type="password" class="form-control" name="oldpassword"  placeholder="Enter Old Password">
                      @error('oldpassword')
                      <span class="text-danger">
                        {{ $message }}
                      </span>
                     @enderror
                    </div>

                    <div class="form-group">
                        <label for="newpassword">New Password</label>
                        <input type="password" class="form-control" name="newpassword"  placeholder="Enter New Password">
                        @error('newpassword')
                        <span class="text-danger">
                          {{ $message }}
                        </span>
                       @enderror
                      </div>

                      <div class="form-group">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password"  placeholder="Enter Confirm Password">
                        @error('confirm_password')
                        <span class="text-danger">
                          {{ $message }}
                        </span>
                        @enderror
                      </div>
            
                  </div>
                  <!-- /.card-body -->
            
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form>
              </div>

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