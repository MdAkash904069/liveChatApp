@extends('admin.master.partials')

@section('title', 'Contact | Dashboard')


@section('main_section')





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-right">Messeage</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Messeage</li>
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


                   

                    <!-- end modal  -->

                    <!-- small box -->
                    <div class="table-responsive shadow shadow-lg rounded p-2">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th>Time</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Messeage</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @foreach($contact as $key => $contactData)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>
                                      <?php
                                      $date = date('d M Y, h:i:s A', strtotime($contactData->created_at));
                                      echo $date;
                                        ?>
                                      </td>
                                    <td>{{ $contactData->name }}</td>
                                    <td>{{ $contactData->email }}</td>
                                    <td>{{ $contactData->etype }}</td>
                                    <td>{{ $contactData->etype }}</td>
                                    
                                    
                                    
                                    
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