
@extends('frontend.layouts.master')
@section('title','Lilium Info Tech - Portfolio')

@section('main_section')
<br>
    <!--=================================
    Action Box -->
    <section class="pb-5">
      <div class="container">
        <div class=" text-center rounded py-5 px-3">
          <h2 class="text-dark">Portfolio</h2>
          <h6 class="">Fortune 100 companies and established brands trust our enterprise software development.</h6>
        </div>
      </div>
    </section>
    <!--=================================
    Action Box -->

<style>
  .case-study .case-study-img.case-study-lg {
    min-height: 250px;
}
.icon-btn {
    width: 100%;
    border-radius: 15%;
   
}
</style>

    <section class="">
      <div class="container">
          <div class="row">
               
            @foreach ($portfolios as $portfolio)

              <div class="" style="width: 350px; margin-right: 30px;">
                  <div class="items">
                    <a href="">
                      <div class="case-study case-study-style-02">
                      
                        <div class="case-study-img case-study-lg bg-holder" style="background-image: url({{asset('frontend/images/portfolio/'.$portfolio->image)}});">
                        </div>
                        <div class="case-study-info">
                          <a class="case-study-title font-weight-bold text-center" href="#">{{$portfolio->web_title}}</a>
                          <a class="case-study-services text-center" href="#">{{$portfolio->web_type}}</a>
                          <p class="mt-2 text-center">{{$portfolio->web_link}}</p>
                          <div style="margin-left: 10%;margin-right: 10%">
                            <a target="_blank" href="{{$portfolio->web_link}}" class="icon-btn text-center">Visit This Website &nbsp;<i class="fas fa-long-arrow-alt-right"></i></a>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

            @endforeach
        
              
                 
                      
                  
          </div>
      </div>
        
    </section>

    @endsection