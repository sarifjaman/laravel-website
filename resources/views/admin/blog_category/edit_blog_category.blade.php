@extends('admin.admin_master')
 @section('admin')

 <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Blog Category Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Blog Category Page</li>
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
                      <h3 class="card-title">Add Blog Category Page</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('update.blog.category') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    
                        <input type="hidden" name="id" value="{{ $editblogcategory->id }}">

                      <div class="card-body">  
                        
                        <div class="form-group">
                            <label for="blogcategory">Blog Category</label>
                            <input type="text" name="blog_category" value="{{ $editblogcategory->blog_category }}" class="form-control" placeholder="Enter blog category name" />
                            {{-- @error('portfolio_name') <span class="text-danger">{{ $message }}</span> @enderror --}}
                        </div>
                
                      </div>
                      
                      <!-- /.card-body -->
                
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Store Blog Category Image</button>
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