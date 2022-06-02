@extends('admin.master.partials')

@section('title', 'Service Edit | Dashboard')

@push('js')

    <!-- Summernote -->
    <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
   

<!-- Page specific script -->
    <script>
    $(function () {
        // Summernote
        $('#summernote').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai",
        });
    });


    $(document).ready(function() {
        $("#service_box_check").change(function(){
            if($(this).prop("checked") == true){
                $("#service_code").attr('disabled',false);
                $("#summernote").attr('disabled',true);
                $("#service").hide();
            }else{
                $("#service_code").attr('disabled',true);
                $("#summernote").attr('disabled',false);
                $("#service").show();
            }
        })
       
    });
        
    </script>
    @if(!$service->description) 
    <script>
        $(document).ready(function(){
            $("#service").hide(); 
        });
    </script> 
@endif
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
@push('css')

<!-- summernote -->
<link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
<style>
    .note-editor.note-airframe .note-editing-area .note-editable, .note-editor.note-frame .note-editing-area .note-editable {
    height: 180px;
}
</style>
@endpush

@section('main_section')
    




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-center"><b> Service Edit</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Service Edit</li>
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
                <div class="col-lg-12">
              

                    <!-- modal start -->
                    <div class="card shadow-lg">
                        <div class="card-body">

                           

                            <form method="post" action="{{route('service.update',$service->id)}}" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }}
        
                                <div class="row">
                                    <div class="card-body">

                                        <label for="">SerVices Name</label>
                                        <input required type="text" class="form-control" name="service_name" value="{{$service->service_name}}" placeholder="Service Name">
                                        <br>
                                        
                                        <div id="service">
                                            <label for="">SerVices Details</label>
                                            <textarea name="service" id="summernote">{{$service->description}}</textarea><br>
                                        </div>
                                        
                                          <div class="icheck-primary d-inline">
                                            <input type="checkbox" id="service_box_check" @if($service->code_description) {{'Checked'}}@endif>
                                            <label for="service_box_check" >
                                            </label>
                                          </div>
                                        <label for="">Check this use For code Submit</label><br><br>

                                        <div>
                                            <label for="">Service Details Code</label>
                                            <textarea required id="service_code" @if(!$service->code_description) {{'disabled'}}@endif name="service_code" class="form-control" rows="5" placeholder="HTML,CSS,js Code">{{$service->code_description}}</textarea>

                                        </div>
                                      </div>
                                    
                                    
        
                                </div>
                                <div class="button-group">
                                    <button type="submit" class="btn btn-success m-2">Update Service</button>
                                    <a href="{{route('service.index')}}" type="button" class="btn btn-info m-2">Service View</a>
        
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