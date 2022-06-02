
@extends('frontend.layouts.master')
@section('title','Lilium Info Tech - Blog')
@section('main_section')



<section class="header-inner bg-overlay-black-50" style="background-image: url('{{asset('frontend/images/header-inner/04.jpg')}}');">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12">
          <div class="header-inner-title text-center">
            <h1 class="text-white font-weight-normal mb-0">From a small startup to a leading global agency in 10 Years.</h1>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="mt-5">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="blog-detail">
              <div class="blog-post mb-4 mb-md-5">
                <div class="blog-post-image">
                  <img class="img-fluid" src="{{asset('frontend/images/blog/01.jpg')}}" alt="">
                </div>
                <div class="blog-post-content">
                  <div class="blog-post-info">
                    <div class="blog-post-author">
                      <a href="#" class="btn btn-light-round btn-round text-primary">Marketing</a>
                    </div>
                    <div class="blog-post-date">
                      <a href="#">February 4, 2020</a>
                    </div>
                  </div>
                  <div class="blog-post-details">
                    <h5 class="blog-post-title">
                      From a small startup to a leading global agency in 10 Years.
                    </h5>
                    <p class="mb-4">Imagine that a few more steps ahead there is a place where the path splits, where is goes off to the left and off to the right. Pause here for a few moments and have a think. Here, there are two different pathways, two possibilities, two ways that you could choose to go.</p>
                    <p class="mb-md-5 mb-4">You carry on doing the same things, living the same way and dealing with this thing in the same way as you have been doing. If you were choose the path to the right, the right path, there are new possibilities, achievement, freedom of mind, positive and progressive implications. Think about that as you stand at this place where the path splits. You want to make a decision and commit to one of these paths. Before you make that decision, we are going to see what each path holds for your future.</p>
                    <div class="d-sm-flex bg-light border-radius p-4 p-md-5 mb-md-5 mb-4">
                      <i class="fas fa-quote-left pr-4 fa-6x text-primary"></i>
                      <p class="mb-0 text-dark">Politics can be attributed to his perseverance to overcome his personal liabilities, and his desire to constantly become better. Next time you really want to achieve something, take time to focus on your own personal journal. What is your temptation that is standing in your wayv to greatness.</p>
                    </div>
                    <ul class="list list-unstyled">
                      <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Use a past defeat as a motivator. Remind yourself you have nowhere to go except</span></li>
                      <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Give yourself the power of responsibility. </span></li>
                      <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Remind yourself the only thing stopping you is yourself.</span></li>
                      <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>Make a list of your achievements toward your long-term</span></li>
                      <li class="d-flex"><i class="fas fa-check pr-2 pt-1 text-primary"></i><span>goal and remind yourself that intentions don’t count, only action’s.</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="blog-post mb-4 mb-md-5">
                <div class="blog-post-image position-relative">
                  <img class="img-fluid" src="{{asset('frontend/images/blog/02.jpg')}}" alt="">
                  <a class="icon-btn icon-btn-lg icon-btn-all-center btn-animation popup-youtube" href="https://www.youtube.com/watch?v=LgvseYYhqU0"><i class="fas fa-play fa-1x"></i>
                  </a>
                </div>
                <div class="blog-post-content">
                  <div class="blog-post-details">
                    <h5 class="blog-post-title">
                      How google’s BERT algorithm affects your website traffic
                    </h5>
                    <p class="mb-4">Making a decision to do something – this is the first step. We all know that nothing moves until someone makes a decision. The first action is always in making the decision to proceed. This is a fundamental step, which most people overlook.</p>
                    
                  </div>
                </div>
              </div>
              
              
            
            </div>
          </div>
        </div>
      </div>
    </section>

        
  

 
                 

@endsection