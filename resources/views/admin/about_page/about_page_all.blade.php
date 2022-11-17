@extends('admin.admin_master')
 @section('admin')


 <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit About Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">About Page</li>
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
                      <h3 class="card-title">Edit About Page</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('update.about') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    
                      <div class="card-body">

                        <input type="hidden" name="id" value="{{ $aboutpage->id }}" />
    
                        <div class="form-group">
                          <label for="name">Title</label>
                          <input type="title" class="form-control" name="title" value="{{ $aboutpage->title }}" placeholder="Enter name">
                        </div>
    
                        <div class="form-group">
                            <label for="short_title">Short title</label>
                            <input type="text" class="form-control" name="short_title" value="{{ $aboutpage->short_title }}" placeholder="Enter username">
                        </div>

                        <div class="form-group">
                          <label for="short_description">Short Description</label>
                          <textarea rows="5" name="short_description" class="form-control">{{ $aboutpage->short_description }}</textarea>
                        </div>

                        <div class="form-group des" style="position: relative">
                          <label for="long_description">Long Description</label>
                         <textarea name="long_description" id="summernote" rows="5" class="form-control">{{ $aboutpage->long_description }}</textarea>
                        </div>
    
                        <div class="form-group">
                          <label for="exampleInputFile">Home Slide</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" name="about_image" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                            </div>
                          </div>
                        </div>

  
                        <div class="form-group">
                            <div class="image">
                                <img src="{{ (!empty($aboutpage->about_image)) ? $aboutpage->about_image : url('upload/no-image.jpg') }}" id="showImage" style="width: 100px!important" class="elevation-2" alt="User Image">
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

        
    //Summernote (textarea) Start
    $('#summernote').summernote({
    placeholder: 'Hello Bootstrap 4',
    tabsize: 2,
    height: 300
  });
    //Summernote (textarea) End
    });
    //Image Change End

    </script>
    

 @endsection