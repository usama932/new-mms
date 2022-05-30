@extends('layouts.staff')
@section('content')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Add Query</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

              </div>
            </div>
          </div>
        <div class="nk-msg nk-msg-boxed">
            <div class="nk-msg-aside">
                <div class="nk-msg-nav">
                    <!-- .nk-msg-menu -->
                    <div class="search-wrap" data-search="search">
                        <div class="search-content">
                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message">
                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                        </div>
                    </div>


                      <!-- Modal -->
                     <!-- .search-wrap -->
                </div><!-- .nk-msg-nav -->
                <div class="nk-msg-list" data-simplebar>
                    <div class="nk-msg-list" data-simplebar>

                        @foreach ($queries as $query)


                            <div class="nk-msg-item msg_show" data-msg-id="msg{{ $query->id }}">
                                <div class="nk-msg-media user-avatar">
                                    <span>{{ $query->id }}</span>
                                </div>
                                <div class="nk-msg-info">
                                    <div class="nk-msg-from">
                                        <div class="nk-msg-sender">
                                            <div class="name">{{ $query->send_by }}</div>
                                            <div class="lable-tag dot bg-pink"></div>
                                        </div>
                                        <div class="nk-msg-meta">
                                            <div class="attchment"><em class="icon ni ni-clip-h"></em></div>
                                            <div class="date">{{ $query->created_at }}</div>
                                        </div>
                                    </div>
                                    <div class="nk-msg-context">
                                        <div class="nk-msg-text">
                                            <h6 class="title">{{ $query->subject }}.</h6>
                                            <p>{{ $query->message }}</p>
                                        </div>
                                        <div class="nk-msg-lables">
                                            <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>


                </div>
            </div>
            <div class="nk-msg-head">
                <h4 class="title d-none d-lg-block">Queries  </h4>
                <div class="nk-msg-head-meta">
                    <div class="d-none d-lg-block">
                        <ul class="nk-msg-tags">
                            <li><span class="label-tag">
                                <!-- <em class="icon ni ni-flag-fill"></em>  -->
                                <span></span></span></li>
                        </ul>
                    </div>

                </div>

            </div>
            @foreach ($queries as $row=>$query)
            <div id="msg{{ $query->id }}"  style="display: none;" class="nk-msg-body bg-white  hide_msg">
                <div class="nk-msg-head">
                    <h4 class="title d-none d-lg-block">{{ $query->subject }} </h4>
                    <div class="nk-msg-head-meta">
                        <div class="d-none d-lg-block">
                            <ul class="nk-msg-tags">
                                <li><span class="label-tag">
                                    <!-- <em class="icon ni ni-flag-fill"></em>  -->
                                    <span>{{ $query->send_by }}</span></span></li>
                            </ul>
                        </div>

                    </div>
                    <a href="#" class="nk-msg-profile-toggle profile-toggle active"><em class="icon ni ni-arrow-left"></em></a>
                </div><!-- .nk-msg-head -->
                <div class="nk-msg-reply nk-reply" data-simplebar>
                    <div class="nk-msg-head py-4 d-lg-none">
                        <h4 class="title">{{ $query->subject }}</h4>

                    </div>
                    <div class="nk-reply-item">
                        <div class="nk-reply-header">
                            <div class="user-card">
                                <div class="user-avatar sm bg-blue">
                                    <span>{{ $query->id }}</span>
                                </div>
                                <div class="user-name">{{ $query->send_by}}</div>
                            </div>
                            <div class="date-time">{{ $query->created_at}}</div>
                        </div>
                        <div class="nk-reply-body">
                            <div class="nk-reply-entry entry">

                                <p> @if(strlen($query->message) > 100)
                                    {{substr($query->message,0,100)}}
                                    <span class="read-more-show hide_content">More<i class="fa fa-angle-down"></i></span>
                                    <span class="read-more-content"> {{substr($query->message,100,strlen($query->message))}}
                                    <span class="read-more-hide hide_content">Less <i class="fa fa-angle-up"></i></span> </span>
                                    @else
                                    {{$query->message}}
                                    @endif </p> <p>{{ $query->send_by}}</p>
                            </div>
                            <div class="attach-files">

                                <div class="attach-foot">
                                    <h5>Download attachments:</h5>
                                    @if(isset($query->attachments))
                                    <a href="{{route('staff.download',['attachments' => base64_encode($query->attachments)])}}" class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Download  </a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-reply-item -->
                    <div class="nk-reply-item">

                    </div><!-- .nk-reply-item -->

                    <div class="nk-reply-form">
                        <div class="nk-reply-form-header">

                            {{-- <div class="nk-reply-form-title">
                                <div class="title">Reply as:</div>
                                <div class="user-avatar xs bg-purple">
                                    <span>{{ $query->id }}</span>
                                </div>
                            </div> --}}
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="reply-form">
                                <div class="nk-reply-form-editor">

                                    <div class="nk-reply-form-tools">
                                        <ul class="nk-reply-form-actions g-1">
                                            <li class="mr-2"><button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#exampleModal">Reply</button></li>


                                        </ul>

                                    </div><!-- .nk-reply-form-tools -->
                                </div><!-- .nk-reply-form-editor -->
                            </div>

                        </div>
                    </div><!-- .nk-reply-form -->
                </div><!-- .nk-reply -->
                <!-- .nk-msg-profile -->
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Reply </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form method='post' action="{{ route('queries.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <input type="hidden" class="form-control" value={{ $query->subject }} name="subject" id="product-title" autocomplete="off" required>


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
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary "><span>Submit</span></button>
                              </div>

                         </form>
                    </div>

                  </div>
                </div>
              </div>
            @endforeach


        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).on("click",".msg_show",function() {
        let id = $(this).attr('data-msg-id');
        $('.hide_msg').hide();
        $(`#${id}`).show();
    });

</script>

@endsection
