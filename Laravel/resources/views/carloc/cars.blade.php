@extends('base')
@section('main')
    <!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="gallery_taital">Our best offers</h1>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="{{asset('img/img1.png')}}"></div>
                        <h3 class="types_text">Toyota car</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt"><a href="#">Book Now</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="{{asset('img/img2.png')}}"></div>
                        <h3 class="types_text">Toyota car</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt"><a href="#">Book Now</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="{{asset('img/img3.png')}}"></div>
                        <h3 class="types_text">Toyota car</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt"><a href="#">Book Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="{{asset('img/img-1.png')}}"></div>
                        <h3 class="types_text">Toyota car</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt"><a href="#">Book Now</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="{{asset('img/img-2.png')}}"></div>
                        <h3 class="types_text">Toyota car</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt"><a href="#">Book Now</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="{{asset('img/img-3.png')}}"></div>
                        <h3 class="types_text">Toyota car</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt"><a href="#">Book Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- gallery section end -->
@endsection