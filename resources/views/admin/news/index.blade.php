<x-app-layout>
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">News</h3>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">


                                        <li class="nk-block-tools-opt">
                                            <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                            <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add News</span></a>
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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Tags</th>
                                    <th>Added_By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($news as $new)
                                <tr>
                                    <td>{{$new->title}}</td>
                                    <td>         @if(strlen($new->description) > 100)
                                        {{substr($new->description,0,100)}}
                                        <span class="read-more-show hide_content">Show More<i class="fa fa-angle-down"></i></span>
                                        <span class="read-more-content"> {{substr($new->description,100,strlen($new->description))}}
                                        <span class="read-more-hide hide_content">Show Less <i class="fa fa-angle-up"></i></span> </span>
                                        @else
                                        {{$new->description}}
                                        @endif</td>
                                    <td>{{$new->tags}}</td>
                                    <td>{{$new->added_by}}</td>
                                    <td>
                                        <form action="{{ route('news.destroy',$new->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!-- .nk-block -->
                <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">New News</h5>
                            <div class="nk-block-des">
                                <p>Add information to add new News.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <form method ="post" action="{{route('news.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="product-title">Title</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control"  name="title" id="product-title"  required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="tags">Tags</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="tags" id="tags" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="category">Description</label>
                                        <div class="form-control-wrap">
                                            <textarea type="message" class="form-control"  name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="tags">Image</label>

                                            <input type="file" name="image" class="form-control" placeholder="image">

                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary"><span>Save</span></button>
                                </div>

                            </div>
                        </form>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
