@extends('admin.master.partials')

@section('title', 'Testimonial Add | Dashboard')

@push('js')
    @if(Session::has('success'))
        <script>toastr.success('{{ session('success') }}');</script>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <script>toastr.error('{{ $error }}');</script>
            @endforeach
        </ul>
    </div>
    @endif
    
@endpush

@section('main_section')
    




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-center"><b> Portfolio Edit</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Portfolio Edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6">
              

                    <!-- modal start -->
                    <div class="card shadow-lg">
                        <div class="card-body">

                           

                            <form method="post" action="{{route('testimonial.store')}}" enctype="multipart/form-data">
                                @csrf
        
                                <div class="row p-3">
        
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" name="name" placeholder="Author Name">
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" name="title" placeholder="Author Title">
                                    </div>
                                    
                                    <div class="form-group col-lg-12">
                                        <textarea name="desc" class="form-control" rows="5" placeholder="Description"></textarea>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    
                                   
        
                                </div>
                                <div class="button-group">
                                    <button type="submit" class="btn btn-success m-2">Add Testimonial</button>
                                    <a href="{{route('testimonial.index')}}" type="button" class="btn btn-info m-2">Testimonial View</a>
        
                                </div>
                                
                            </form>
                        </div>
                    </div>



                    


                </div>
        
            <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
        
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 

  <!-- /.content-wrapper -->
 @endsection