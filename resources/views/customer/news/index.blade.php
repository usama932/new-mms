@extends('layouts.customer')
@section('content')
    <div class="container-fluid">
       <div class="nk-content-inner">
          <div class="nk-content-body">
             <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                   <div class="nk-block-head-content">
                      <h3 class="nk-block-title page-title">Recent News</h3>
                   </div>
                   <!-- .nk-block-head-content -->
                   <div class="nk-block-head-content">
                      <div class="toggle-wrap nk-block-tools-toggle">
                         <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                         <div class="toggle-expand-content" data-content="pageMenu">
                         </div>
                      </div>
                   </div>
                   <!-- .nk-block-head-content -->
                </div>
                <!-- .nk-block-between -->
             </div>
             <!-- .nk-block-head -->
             <div class="nk-block">
                <div class="nk-tb-list is-separate mb-3">
                   <div class="row ">
                      <div class="col-12 d-flex">
                        @foreach($recent_news as $recent_news)
                         <div class="col-3">

                            <div class="card">
                               <img src="{{asset($recent_news->image)}}" class="card-img-top rounded w-50% h-20% py-3 px-3" alt="">
                               <div class="card-inner">
                                  <h6 class="card-title">{{$recent_news->title}}
                                  </h6>
                                  <p class="card-text">
                                    @if(strlen($recent_news->description) > 100)
                                    {{substr($recent_news->description,0,100)}}
                                    <span class="read-more-show hide_content">Show More<i class="fa fa-angle-down"></i></span>
                                    <span class="read-more-content"> {{substr($recent_news->description,100,strlen($recent_news->description))}}
                                    <span class="read-more-hide hide_content">Show Less <i class="fa fa-angle-up"></i></span> </span>
                                    @else
                                    {{$recent_news->description}}
                                    @endif

                                </p>

                               </div>
                            </div>
                         </div>
                        @endforeach

                      </div>
                   </div>
                </div>
                <!-- .nk-tb-list -->
                <div class="nk-block-between">
                   <div class="nk-block-head-content">
                      <h5 class="nk-block-title page-title m-1">All News</h5>
                   </div>
                </div>
             </div>
             <!-- .row -->
             @foreach($all_news as $all_news)
             <div class="card">
                <div class="d-flex">
                   <div class="card m-2">
                      <img src="{{asset($all_news->image)}}" class="rounded w-50% h-20% py-3 px-3" alt="">
                   </div>
                   <div class="col-10 m-2">
                      <b>
                         <p>{{$all_news->title}}</p>
                      </b>

                      <p>
                        @if(strlen($all_news->description) > 100)
                        {{substr($all_news->description,0,100)}}
                        <span class="read-more-show hide_content">Show More<i class="fa fa-angle-down"></i></span>
                        <span class="read-more-content"> {{substr($all_news->description,100,strlen($all_news->description))}}
                        <span class="read-more-hide hide_content">Show Less <i class="fa fa-angle-up"></i></span> </span>
                        @else
                        {{$all_news->description}}
                        @endif
                      </p>
                   </div>
                </div>
             </div>
             @endforeach
          </div>
          {{-- <div class="nk-block nk-block-lg">
             <div class="nk-block-head">
                <div class="nk-block-between g-3">
                   <div class="nk-block-head-content">
                      <h3 class="nk-block-title page-title p-2">Explored</h3>
                   </div>
                </div>
             </div>
             <!-- .nk-block-head -->
             <div class="slider-init row" data-slick='{"slidesToShow": 4, "centerMode": false, "slidesToScroll": 1, "infinite":false, "responsive":[ {"breakpoint": 1540,"settings":{"slidesToShow": 3}},{"breakpoint": 992,"settings":{"slidesToShow": 2}}, {"breakpoint": 576,"settings":{"slidesToShow": 1}} ]}'>
                <div class="col-3">
                   <div class="card">
                      <img src="./images/aaa.PNG" class="card-img-top" alt="">
                      <div class="card-inner">
                         <h6 class="card-title">GMRgold's Precious Metals
                            Week in Review
                         </h6>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         <a href="#" class="btn btn-primary">Explored</a>
                      </div>
                   </div>
                </div>
                <!-- .col -->
                <div class="col-3">
                   <div class="card">
                      <img src="./images/aaa.PNG" class="card-img-top" alt="">
                      <div class="card-inner">
                         <h6 class="card-title">GMRgold's Precious Metals
                            Week in Review
                         </h6>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         <a href="#" class="btn btn-primary">Explored</a>
                      </div>
                   </div>
                </div>
                <!-- .col -->
                <div class="col-3">
                   <div class="card">
                      <img src="./images/aaa.PNG" class="card-img-top" alt="">
                      <div class="card-inner">
                         <h6 class="card-title">GMRgold's Precious Metals
                            Week in Review
                         </h6>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         <a href="#" class="btn btn-primary">Explored</a>
                      </div>
                   </div>
                </div>
                <!-- .col -->
                <div class="col-3">
                   <div class="card">
                      <img src="./images/aaa.PNG" class="card-img-top" alt="">
                      <div class="card-inner">
                         <h6 class="card-title">GMRgold's Precious Metals
                            Week in Review
                         </h6>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         <a href="#" class="btn btn-primary">Explored</a>
                      </div>
                   </div>
                </div>
                <!-- .col -->
                <div class="col-3">
                   <div class="card">
                      <img src="./images/aaa.PNG" class="card-img-top" alt="">
                      <div class="card-inner">
                         <h6 class="card-title">GMRgold's Precious Metals
                            Week in Review
                         </h6>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         <a href="#" class="btn btn-primary">Explored</a>
                      </div>
                   </div>
                </div>
                <!-- .col -->
                <div class="col-3">
                   <div class="card">
                      <img src="./images/aaa.PNG" class="card-img-top" alt="">
                      <div class="card-inner">
                         <h6 class="card-title">GMRgold's Precious Metals
                            Week in Review
                         </h6>
                         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         <a href="#" class="btn btn-primary">Explored</a>
                      </div>
                   </div>
                </div>
                <!-- .col -->
             </div>
          </div> --}}
       </div>

    </div>

@endsection
