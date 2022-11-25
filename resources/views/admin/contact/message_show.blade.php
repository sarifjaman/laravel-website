@extends('admin.admin_master')
 @section('admin')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Show Message Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active"> Message Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row"><div class="col-sm-12 col-md-12">
                            <div class="col-sm-12 col-md-12">
                                <div id="example1_filter" class="dataTables_filter">
                                    <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                                </div>
                            </div>
                                <div class="row"><div class="col-sm-12">

<table class="table table-stripped table-bordered">
    <tr>
        <th width="30%">Name</th>
        <td>{{ $showmessage->name }}</td>
    </tr>

    <tr>
        <th width="30%">Email</th>
        <td>{{ $showmessage->email }}</td>
    </tr>

    <tr>
        <th width="30%">Subject</th>
        <td>{{ $showmessage->subject }}</td>
    </tr>

    <tr>
        <th width="30%">Phone</th>
        <td>{{ $showmessage->phone }}</td>
    </tr>

    <tr>
        <th width="30%">Description</th>
        <td>{{ $showmessage->description }}</td>
    </tr>
</table>
                
                </div>
            
            </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
            </div>
          </div>
        </div>
    </section>
 </div>
 @endsection