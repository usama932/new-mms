@extends('layouts.customer')
@section('content')
 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-block-head-sub    text-dark"><h5 class="text-dark">Faqs</h5></div>
                            <div class="nk-content-body col-12 " style="background-color: white">
                                <div class="content-page  ">
                                    <div >
                                        <div  class="nk-block-head-content d-flex " style="justify-content:space-between ;padding-block: 25px;">
                                            <div class="nk-block-head-sub    text-dark"><strong class="text-strat">FAQs</strong></div>
                                            <div class="nk-block-head-sub    text-dark"><p class="text-end">View all</p></div>
                                            <!-- <h2 class="nk-block-title fw-normal">Frequently Asked Questions</h2> -->
                                            <!-- <div class="nk-block-des">
                                                <p class="lead">Got a question? Can't find the answer you're looking for? Don't worry, drop us a line on our <a href="#">contact page</a>.</p>
                                            </div> -->
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="card">
                                            <div id="faqs" class="accordion">
                                                @foreach ($faqs as $faq)
                                                <div class="accordion-item">
                                                    <a href="#" class="accordion-head" data-toggle="collapse" data-target="#faq-q1{{ $faq->id }}">
                                                        <h6 class="title">{{ $faq->question }}?</h6>
                                                        <span class="accordion-icon"></span>
                                                    </a>
                                                    <div class="accordion-body collapse show" id="faq-q1{{ $faq->id }}" data-parent="#faqs">
                                                        <div class="accordion-inner">

                                                            <p>{{ $faq->answer }} </p>

                                                        </div>
                                                    </div>
                                                </div><!-- .accordion-item -->
                                                @endforeach



                                            </div><!-- .accordion -->
                                        </div><!-- .card -->
                                    </div><!-- .nk-block -->
                                    {{-- <form action="#">
                                                    <div class="row g-5 pt-5">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name-1">First  Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="full-name-1" placeholder="First  Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name-1">Last Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="full-name-1" placeholder="Last  Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email-address-1">Email</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="email-address-1" placeholder="Email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email-address-1">Message</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="email-address-1" placeholder="Email">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="cf-default-textarea">Additional notes</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea class="form-control form-control-sm" id="cf-default-textarea" ></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div  class="col-lg-12 text-center" >
                                                            <div class="form-group " >
                                                                <button type="submit" style="background-color: #394048; color: white; " class="btn btn-xl  float-center">Send message</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form><!-- .nk-block --> --}}
                                </div><!-- .content-page -->
                            </div>
                        </div>
                    </div>
                </div>
@endsection
