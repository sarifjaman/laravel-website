@extends('admin.admin_master')
 @section('admin')
     
 <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Home Slider Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Home Slider</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
    
             
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit Profile</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('update.slider') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    
                      <div class="card-body">

                        <input type="hidden" name="id" value="{{ $homeslide->id }}" />
    
                        <div class="form-group">
                          <label for="name">Title</label>
                          <input type="title" class="form-control" name="title" value="{{ $homeslide->title }}" placeholder="Enter name">
                        </div>
    
                        <div class="form-group">
                            <label for="short_title">Short title</label>
                            <input type="text" class="form-control" name="short_title" value="{{ $homeslide->short_title }}" placeholder="Enter username">
                        </div>
    
                        <div class="form-group">
                          <label for="exampleInputFile">Home Slide</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" name="home_slide" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                            <label for="video_url">video URL</label>
                            <input type="text" class="form-control" name="video_url" value="{{ $homeslide->video_url }}" placeholder="Enter username"> 
                        </div>
   {{-- {{ $homeslide->home_slide }} --}}
                        <div class="form-group">
                            <div class="image">
                                <img src="{{ (!empty($homeslide->home_slide)) ? $homeslide->home_slide : url('upload/no-image.jpg') }}" id="showImage" style="width: 100px!important" class="elevation-2" alt="User Image">
                              </div>
                        </div>
                
                      </div>
                      
                      <!-- /.card-body -->
                
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Slider</button>
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

      <script type="text/javascript">
     //Image change Start
     $(document).ready(function(){
        $('#exampleInputFile').change(function(e){
            var reader = new FileReader();

            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }

            reader.readAsDataURL(e.target.files['0']);
        });
    });
    //Image Change End
    </script>
    

 @endsection