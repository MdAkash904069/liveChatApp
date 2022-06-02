@extends('admin.master.partials')

@section('title', 'Company | Dashboard')

@push('js')


    @if(Session::has('success'))
        <script>toastr.success('{{ session('success') }}');</script>
    @endif


    <script>
      $(document).ready(function(){

          $(document).on('click','.company-dlt-btn',function(){
            var id = $(this).attr('get_id');
            // alert(id);

              swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this company!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                
              })
              .then((willDelete) => {
                if (willDelete) {

                  $.ajax({
                      type:'get',
                      url: 'company/'+id,
                      success: function(response){
                        location.reload();
                        toastr.success('Your company Deleted Successfully');

                      }
                  });

                      
                } else {
                    toastr.info('Your company is Safe!');
                }
              });


        });
        
      });
    </script>

    
@endpush

@section('main_section')





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-right">Company</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Company</li>
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

                    <a href="{{route('company.create')}}" type="button" class="btn btn-success m-2">Add Company</a>

                   

                    <!-- end modal  -->

                    <!-- small box -->
                    <div class="table-responsive shadow shadow-lg rounded p-2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Company Service Name</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Action</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @foreach($company as $key => $company_data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$company_data->company_service}}</td>

                                    @if($company_data->description)
                                        <td>{!! $company_data->description !!}</td>
                                    @else
                                        <td>{!! $company_data->code_description !!}</td>
                                    @endif

                                    <td>

                                        <a href="{{ route('company.edit',$company_data->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                          @csrf
                                          <button type="button" class="btn btn-danger btn-sm company-dlt-btn" get_id="{{$company_data->id}}"><i class="fas fa-trash-alt"></i></button>
                                      </td>
                                </tr>
                                @endforeach

                            </tbody>
                            
                        </table>
                        

                        
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