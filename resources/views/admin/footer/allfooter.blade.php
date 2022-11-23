@extends('admin.admin_master')
 @section('admin')

 <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Show & Update Footer Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Show & Update Footer Page</li>
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
                      <h3 class="card-title">Show & Update Footer Page</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('update.footer') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $allfooter->id }}" />
    
                      <div class="card-body">  
                        
                        <div class="form-group">
                            <label for="blogcategory">Number</label>
                            <input type="text" name="number" value="{{ $allfooter->number }}" class="form-control" placeholder="Enter number" />
                        </div>

                        <div class="form-group">
                            <label for="blogcategory">Email</label>
                            <input type="email" name="email" value="{{ $allfooter->email }}" class="form-control" placeholder="Enter email" />
                        </div>

                        <div class="form-group">
                            <label for="facebook">facebook</label>
                            <input type="text" name="facebook" value="{{ $allfooter->facebook }}" class="form-control" placeholder="Enter Facebook" />
                        </div>

                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" name="twitter" value="{{ $allfooter->twitter }}" class="form-control" placeholder="Enter Twitter" />
                        </div>

                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" name="linkedin"v value="{{ $allfooter->linkedin}}" class="form-control" placeholder="Enter Linkedin"/>
                        </div>

                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="text" name="instagram" value="{{ $allfooter->instagram }}" class="form-control" placeholder="Enter Instagram" />
                        </div>

                        <div class="form-group">
                            <label for="copyright">Copyright</label>
                            <input type="text" name="copyright" value="{{ $allfooter->copyright }}" class="form-control" placeholder="Enter Copyright" />
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" value="{{ $allfooter->address }}" class="form-control" placeholder="Enter Address" />
                        </div>

                        <div class="form-group">
                            <label for="shortdescription">Short Description</label>
                            <textarea name="short_description" class="form-control" rows="5">{{ $allfooter->short_description }}</textarea>
                        </div>
                
                      </div>
                      
                      <!-- /.card-body -->
                
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Footer</button>
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