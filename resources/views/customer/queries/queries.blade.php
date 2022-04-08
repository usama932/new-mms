@extends('layouts.customer')
@section('content')

<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
       <div class="nk-block-between">
          <div class="nk-block-head-content">
             <h3 class="nk-block-title page-title">Queries</h3>
          </div>
          <!-- .nk-block-head-content -->
          <div class="nk-block-head-content">
             <div class="toggle-wrap nk-block-tools-toggle">
                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                <div class="toggle-expand-content" data-content="pageMenu">
                   <ul class="nk-block-tools g-3">

                      <li class="nk-block-tools-opt">


                      </li>
                   </ul>
                </div>
             </div>
          </div>
          <!-- .nk-block-head-content -->
       </div>
       <!-- .nk-block-between -->
    </div>
    <!-- .nk-block-head -->
    <!-- .nk-block -->
    <div class="nk-msg-aside">
        <div class="nk-msg-nav">
            <ul class="nk-msg-menu">
                <li class="nk-msg-menu-item active">
                <a href="#" data-target="addProduct" class="toggle  ">Create Query</a>
                </li>
            </ul><!-- .nk-msg-menu -->
           <!-- .search-wrap -->
        </div><!-- .nk-msg-nav -->
        <div class="nk-msg-list" data-simplebar>
            @foreach($queries as $query)
                <div class="nk-msg-item current" data-msg-id="1">
                    <div class="nk-msg-media user-avatar">
                        <span>{{ $query->id }}</span>
                    </div>
                    <a href="#" data-target="addProduct{{$query->id}}" class="toggle btn  d-none d-md-inline-flex">
                    <div class="nk-msg-info">
                        <div class="nk-msg-from">
                            <div class="nk-msg-sender">
                                <div class="name">{{ $query->user->name }}</div>
                            </div>
                            <div class="nk-msg-meta">

                                <div class="date">{{ $query->created_at }}</div>
                            </div>
                        </div>
                        <div class="nk-msg-context">
                            <div class="nk-msg-text">
                                <h6 class="title">{{ $query->subject }}.</h6>
                            </div>
                        </div>
                    </div>
                </a>
                </div>

            @endforeach<!-- .nk-msg-item -->
           <!-- .nk-msg-item -->
        </div><!-- .nk-msg-list -->
    </div>
    <!-- .card-preview -->
    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
       <div class="nk-block-head">
          <div class="nk-block-head-content">
             <h5 class="nk-block-title">Add Query</h5>
             <div class="nk-block-des">
                <p>Ask Query and find information.</p>
             </div>
          </div>
       </div>
       <!-- .nk-block-head -->
       <div class="nk-block">
          <div class="row g-3">
             <div class="col-12">
                <form method='post' action="{{ route('customer_queries.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="product-title">Subject</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control"  name="subject" id="product-title" autocomplete="off" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="category">Query</label>
                                <div class="form-control-wrap">
                                    <textarea type="message" class="form-control"  name="message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="tags">attachment</label>
                                <div class="dz-message">
                                    <input type="file" name="attachments" class="form-control" placeholder="image">
                                </div>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-primary "><span>Submit</span></button>
                 </form>

             </div>

          </div>
       </div>
       <!-- .nk-block -->
    </div>
    @foreach($queries as $query)
    <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct{{$query->id}}" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>

    <div>
    @endforeach
 </div>
@endsection
