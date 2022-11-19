@extends('admin.admin_master')
 @section('admin')

 <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Portfolio Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Portfolio Page</li>
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
                      <h3 class="card-title">Edit Portfolio Page</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('update.portfolio') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $editportfolio->id }}" />
    
                      <div class="card-body">  
                        
                        <div class="form-group">
                            <label for="portfolio name">Portfolio Name</label>
                            <input type="text" name="portfolio_name" value="{{ $editportfolio->portfolio_name }}" class="form-control" placeholder="Enter portfolio name" />
                            @error('portfolio_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="portfolio title">Portfolio Title</label>
                            <input type="text" name="portfolio_title" value="{{ $editportfolio->portfolio_title }}" class="form-control" placeholder="Enter portfolio title"/>
                            @error('portfolio_title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="portfolio description">Portfolio Description</label>
                            <textarea id="summernote" name="portfolio_description" rows="5" class="form-control">{{ $editportfolio->portfolio_description }}</textarea>
                        </div>
    
                        <div class="form-group">
                          <label for="exampleInputFile">Home Slide</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" name="portfolio_image" class="custom-file-input" multiple="" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Add Portfolio</span>
                            </div>
                          </div>
                        </div>

  
                        <div class="form-group">
                            <div class="image">
                                <img src="{{ (!empty($editportfolio->portfolio_image)) ? $editportfolio->portfolio_image : url('upload/no-image.jpg') }}" id="showImage" style="width: 100px!important" class="elevation-2" alt="User Image">
                              </div>
                        </div>
                
                      </div>
                      
                      <!-- /.card-body -->
                
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Portfolio</button>
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