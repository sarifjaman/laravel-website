@extends('admin.admin_master')
 @section('admin')
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0">Edit Multi Image Page</h1>
         </div><!-- /.col -->
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
             <li class="breadcrumb-item active">Edit Multi Image</li>
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
                   <form action="{{ route('update.multi.image') }}" method="POST" enctype="multipart/form-data">
                       @csrf
                      <input type="hidden" name="id" value="{{ $editmultiimage->id }}"/>

                     <div class="card-body">                        
   
                       <div class="form-group">
                         <label for="exampleInputFile">Home Slide</label>
                         <div class="input-group">
                           <div class="custom-file">
                             <input type="file" name="multi_image" class="custom-file-input" id="exampleInputFile">
                             <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                           </div>
                           <div class="input-group-append">
                             <span class="input-group-text">Upload</span>
                           </div>
                         </div>
                       </div>

 
                       <div class="form-group">
                           <div class="image">
                               <img src="{{ (!empty($editmultiimage->multi_image)) ? $editmultiimage->multi_image : url('upload/no-image.jpg') }}" id="showImage" style="width: 100px!important" class="elevation-2" alt="User Image">
                             </div>
                       </div>
               
                     </div>
                     
                     <!-- /.card-body -->
               
                     <div class="card-footer">
                       <button type="submit" class="btn btn-primary">Store Multi Image</button>
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
      });
    </script>

     @endsection