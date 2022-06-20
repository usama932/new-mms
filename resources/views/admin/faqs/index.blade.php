<x-app-layout>
<style>
    #myModal .modal-dialog {
    -webkit-transform: translate(0,-50%);
    -o-transform: translate(0,-50%);
    transform: translate(0,-50%);
    top: 2%;
    margin: 0 auto;
}
    </style>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Faqs</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">

                                        <li class="nk-block-tools-opt">
                                            <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Faqs</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="card card-preview">
                    <div class="card-inner">
                        <div class="table-responsive">
                        <table class="datatable-init table"  data-auto-responsive="false">
                            <thead>
                                <tr>
                                    <th>Sr. #</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Status</th>
                                    <th>Added_By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($faqs as $faq)
                                <tr>
                                    <td>{{$faq->id}}</td>
                                    <td>
                                        @if(strlen($faq->question) > 100)
                                        {{substr($faq->question,0,100)}}
                                        <span class="read-more-show hide_content">Show More<i class="fa fa-angle-down"></i></span>
                                        <span class="read-more-content"> {{substr($faq->question,100,strlen($faq->question))}}
                                        <span class="read-more-hide hide_content">Show Less <i class="fa fa-angle-up"></i></span> </span>
                                        @else
                                        {{$faq->question}}
                                        @endif
                                        </td>
                                    <td>
                                        @if(strlen($faq->answer) > 100)
                                        {{substr($faq->answer,0,100)}}
                                        <span class="read-more-show hide_content">Show More<i class="fa fa-angle-down"></i></span>
                                        <span class="read-more-content"> {{substr($faq->answer,100,strlen($faq->answer))}}
                                        <span class="read-more-hide hide_content">Show Less <i class="fa fa-angle-up"></i></span> </span>
                                        @else
                                        {{$faq->answer}}
                                        @endif
                                        </td>
                                    <td>{{$faq->status}}</td>
                                    <td>{{$faq->added_by}}</td>
                                    <td>
                                        <span aria-hidden="true"    >
                                            <a href="#myModal{{$faq->id}}" id="#myModal " data-toggle="modal"> <button type="button" class="btn btn-secondary btn-xs">Edit</button></a>
                                            <form action="{{ route('faqs.destroy',$faq->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                            </form>
                                        </span>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
</div>
                    </div>
                </div><!-- .nk-block -->
                <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">New Faqs</h5>
                            <div class="nk-block-des">
                                <p>Add  new Faqs.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <form method ="post" action="{{route('faqs.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="category">Question</label>
                                        <div class="form-control-wrap">
                                            <textarea type="message" class="form-control"  name="question"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="category">Answer</label>
                                        <div class="form-control-wrap">
                                            <textarea type="message" class="form-control"  name="answer"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary"><span>Save</span></button>
                                </div>

                            </div>
                        </form>
                    </div><!-- .nk-block -->
                </div>

                {{-- //Edit Modal --}}
                @foreach ($faqs as $faq)
                <div class="modal fade" id="myModal{{$faq->id}}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Faqs</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method ="post" action="{{route('faqs.update',$faq->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="category">Question</label>
                                                <div class="form-control-wrap">
                                                    <textarea type="message" class="form-control" value="{{ $faq->question }}" placeholder="{{ $faq->question }}"  name="question">{{ $faq->question }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="category">Answer</label>
                                                <div class="form-control-wrap">
                                                    <textarea type="message" class="form-control" value="{{ $faq->answer }}" placeholder="{{  $faq->answer }}"  name="answer">{{ $faq->answer }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>

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

</x-app-layout>
