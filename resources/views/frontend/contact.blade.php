
@extends('frontend.layouts.master')
@section('title','Lilium Info Tech - Contact')
@section('main_section')
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endpush
        
  <section class="space-ptb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h1>Contact us</h1>
            <p>Drop us a line! We’ll set up a time to chat over the phone or in-person to know more about your business needs. All primary conferences are free of charge.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-lg-around position-relative pt-5">
        <div class="col-lg-4 col-md-5 mb-4">
          <div class="is-sticky" style="top: 80px;">
            <h4 class="mb-4">Let’s talk about what you want to accomplish and how we can make it happen.</h4>
            <h5 class="text-light">This is the beginning of creating the life that you want to live.</h5>
          </div>
        </div>
        <div class="col-lg-7 col-md-7 pr-lg-5">
          <div class="p-4 p-md-5 bg-white shadow">
            <h3>Need assistance? please fill the form</h3>
            <form class="mt-4" method="POST" action="{{route('contact_post')}}">
                @csrf
              <div class="form-group mb-3">
                <input type="text" class="form-control" id="exampleInputName" placeholder="First Name" name="fname">
              </div>
              <div class="form-group mb-3">
                <input type="text" class="form-control" id="exampleInputLname" placeholder="Last Name" name="lname">
              </div>
              <div class="form-group mb-3">
                <input type="text" class="form-control" id="exampleInputEmail" placeholder="Email Address" name="address">
              </div>
              <div class="form-group mb-3">
                <input type="text" class="form-control" id="exampleInputEnquiry" placeholder="Enquiry Type" name="etype">
              </div>
              <div class="form-group mb-4">
                <textarea class="form-control" id="exampleInputEnquiry-Description" placeholder="Enquiry Description" name="edesc" rows="5"></textarea>
              </div>
             
              <div class="form-group mb-0">
                <button type="submit" class="btn btn-primary">Send Massage<i class="fas fa-arrow-right pl-3"></i></button>
              </div>
            </form>
          </div>
        </div>
        <div class="contact-bg-logo">
          <i class="fas fa-comment"></i>
        </div>
      </div>
    </div>
  </section>

  <section class="space-pb">
    <div class="container">
      <div class="row justify-content-lg-around">
        <div class="col-lg-4 col-md-5 mb-4">
          <div class="is-sticky" style="top: 80px;">
            <div class="section-title">
              <h2>Doing business with us is easy</h2>
            </div>
            <a href="#" class="btn btn-light-round btn-round">Get Direction<i class="fas fa-arrow-right pl-3"></i></a>
          </div>
        </div>
        <div class="col-lg-7 col-md-7 pr-lg-5">
          <div class="row">
            <div class="col-sm-6 mb-4 mb-md-5">
              <img class="img-fluid mb-4" src="images/about/map-lacation-img1.png" alt="">
              <h4>Shanghai</h4>
              <h6 class="text-light mb-0">214 West Arnold St. New York, NY 10002</h6>
            </div>
            <div class="col-sm-6 mb-4 mb-md-5">
              <img class="img-fluid mb-4" src="images/about/map-lacation-img2.png" alt="">
              <h4>Frankfurt</h4>
              <h6 class="text-light mb-0">Fairground St. North Bergen, NJ</h6>
            </div>
            <div class="col-sm-6 mb-4 mb-sm-0">
              <img class="img-fluid mb-4" src="images/about/map-lacation-img3.png" alt="">
              <h4>Chicago</h4>
              <h6 class="text-light mb-0">West Indian Summer St. Missoula</h6>
            </div>
            <div class="col-sm-6">
              <img class="img-fluid mb-4" src="images/about/map-lacation-img4.png" alt="">
              <h4>New York</h4>
              <h6 class="text-light mb-0">Virginia Drive Temple Hills</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
                 

@endsection