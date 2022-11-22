@extends('admin.admin_master')
 @section('admin')

 <style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #b70000;
        font-weight: 700px;
    } 
</style>

 <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Blog Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Blog Page</li>
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
                      <h3 class="card-title">Edit Blog Page</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('update.blog') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    
                        <input type="hidden" name="id" value="{{ $blogs->id }} ">

                      <div class="card-body">  
                        
                        <div class="form-group">
                            <label for="blotitle">Blog Title</label>
                            <input type="text" name="blog_title" value="{{ $blogs->blog_title }}" class="form-control" placeholder="Enter blog title name" />
                            @error('blog_title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Blog Category</label>
                            <select name="blog_category_id" class="form-control" aria-label="Default select example">
                                <option selected>Open this select menu</option>

                                @foreach($categories as $cat)
                                  <option value="{{ $cat->id }}" {{ $cat->id == $blogs->blog_category_id ? 'selected' : '' }}>{{ $cat->blog_category }}</option>
                                @endforeach

                              </select>
                        </div>

                        <div class="form-group">
                            <label for="blogtag">Blog Tag</label><br>
                            <input type="text" name="blog_tags" value="{{ $blogs->blog_tags }}" class="form-control" data-role="tagsinput">
                        </div>

                        
                        <div class="form-group">
                            <label for="blogdescription">Blog Description</label>

                            <textarea rows="5" id="summernote" name="blog_description" class="form-control">{{ $blogs->blog_description }}</textarea>
                          </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Blog Image</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" name="blog_image" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                              </div>
                            </div>
                          </div>
   
    
                          <div class="form-group">
                              <div class="image">
                                  <img src="{{ (!empty($blogs->blog_image)) ? $blogs->blog_image : url('upload/no-image.jpg') }}" id="showImage" style="width: 100px!important" class="elevation-2" alt="User Image">
                                </div>
                          </div>
                
                      </div>
                      
                      <!-- /.card-body -->
                
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add Blog</button>
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
   </script>
    


 @endsection