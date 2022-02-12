@extends('layouts.public-layout')

@section('content')


    <div class="hero">

      <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
      <div class="overlay"></div>

      <!-- The HTML5 video element that will create the background video on the header -->
      <img src="{{ asset('dist/public/images/Pet-Puppy-Pedigree-Dog-Animal-French-Bulldog-4243953.jpg')}}" />

      <!-- The header content -->
      <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white content">
            <h1 class="display-3">Food Care Dog Reviews and Ratings</h1>
            <p class="lead mb-0">Expert opinion. Trusted advice. We help you choose the best food for your dog.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="service-card">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <img src="{{ asset('dist/public/images/phonto38.jpg')}}" width="100%" alt="">
              </div>
              <div class="card-footer">
                <h3><a href="{{ route('post-details', 'Best food for french bulldog') }}">Best food for french bulldog</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <img src="{{ asset('dist/public/images/phonto39.jpg')}}" width="100%" alt="">
              </div>
              <div class="card-footer">
                <h3><a href="{{ route('post-details', 'Best puppy food for french bulldog') }}">Best puppy food for french bulldog</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="home-notice">
        <p class="notice-title">Protect Your Dog</p>
        <p class="notice-txt">The Dog Food Advisor offers a FREE Dog Food Recall Alert Service by email.
          <br>
          <a href="https://www.dogfoodadvisor.com/dog-food-recall-alerts/">
            <strong>Click here to sign up now</strong>
          </a>
        </p>
      </section>
    </div>
    
@endsection