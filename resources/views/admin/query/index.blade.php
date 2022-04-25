<x-app-layout>
    <div class="nk-content-inner">
        <div class="nk-content-body">
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
                        </div><!-- .search-wrap -->
                    </div><!-- .nk-msg-nav -->
                    <div class="nk-msg-list" data-simplebar>
                        <div class="nk-msg-item" data-msg-id="1" onclick="showDiv('1')">
                            <div class="nk-msg-media user-avatar">
                                <span>AB</span>
                            </div>
                            <div class="nk-msg-info">
                                <div class="nk-msg-from">
                                    <div class="nk-msg-sender">
                                        <div class="name">Abu Bin Ishtiyak</div>
                                        <div class="lable-tag dot bg-pink"></div>
                                    </div>
                                    <div class="nk-msg-meta">
                                        <div class="attchment"><em class="icon ni ni-clip-h"></em></div>
                                        <div class="date">12 Jan</div>
                                    </div>
                                </div>
                                <div class="nk-msg-context">
                                    <div class="nk-msg-text">
                                        <h6 class="title">Unable to select currency when order.</h6>
                                        <p>Hello team, I am facing problem as i can not select currency on buy order page.</p>
                                    </div>
                                    <div class="nk-msg-lables">
                                        <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-msg-item" data-msg-id="2" onclick="showDiv('2')">
                            <div class="nk-msg-media user-avatar">
                                <img src="./images/avatar/b-sm.jpg" alt="">
                            </div>
                            <div class="nk-msg-info">
                                <div class="nk-msg-from">
                                    <div class="nk-msg-sender">
                                        <div class="name">Jackelyn Dugas</div>
                                    </div>
                                    <div class="nk-msg-meta">
                                        <div class="date">15 Jan</div>
                                    </div>
                                </div>
                                <div class="nk-msg-context">
                                    <div class="nk-msg-text">
                                        <h6 class="title">Have not received bitcoin yet.</h6>
                                        <p>Hey! I recently bitcoin from you. But still have not received yet.</p>
                                    </div>
                                    <div class="nk-msg-lables">
                                        <div class="asterisk"><a class="active" href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-msg-item is-unread" data-msg-id="3" onclick="showDiv('3')">
                            <div class="nk-msg-media user-avatar bg-purple">
                                <span>MJ</span>
                            </div>
                            <div class="nk-msg-info">
                                <div class="nk-msg-from">
                                    <div class="nk-msg-sender">
                                        <div class="name">Mayme Johnston</div>
                                    </div>
                                    <div class="nk-msg-meta">
                                        <div class="date">11 Jan</div>
                                    </div>
                                </div>
                                <div class="nk-msg-context">
                                    <div class="nk-msg-text">
                                        <h6 class="title">I can not submit kyc application</h6>
                                        <p>Hello support! I can not upload my documents on kyc application.</p>
                                    </div>
                                    <div class="nk-msg-lables">
                                        <div class="unread"><span class="badge badge-primary">2</span></div>
                                        <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-msg-item" data-msg-id="133" onclick="showDiv('4')">
                            <div class="nk-msg-media user-avatar">
                                <img src="./images/avatar/c-sm.jpg" alt="">
                            </div>
                            <div class="nk-msg-info">
                                <div class="nk-msg-from">
                                    <div class="nk-msg-sender">
                                        <div class="name">Jake Smityh</div>
                                        <div class="lable-tag dot bg-pink"></div>
                                    </div>
                                    <div class="nk-msg-meta">
                                        <div class="date">30 Dec, 2019</div>
                                    </div>
                                </div>
                                <div class="nk-msg-context">
                                    <div class="nk-msg-text">
                                        <h6 class="title">Have not received bitcoin yet.</h6>
                                        <p>Hey! I recently bitcoin from you. But still have not received yet.</p>
                                    </div>
                                    <div class="nk-msg-lables">
                                        <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="nk-msg-item" data-msg-id="12" onclick="showDiv('5')">
                            <div class="nk-msg-media user-avatar">
                                <img src="./images/avatar/d-sm.jpg" alt="">
                            </div>
                            <div class="nk-msg-info">
                                <div class="nk-msg-from">
                                    <div class="nk-msg-sender">
                                        <div class="name">Amanda Moore</div>
                                    </div>
                                    <div class="nk-msg-meta">
                                        <div class="date">28 Dec, 2019</div>
                                    </div>
                                </div>
                                <div class="nk-msg-context">
                                    <div class="nk-msg-text">
                                        <h6 class="title">Wallet needs to verify.</h6>
                                        <p>Hello, I already varified my Wallet but it still showing needs to verify alert.</p>
                                    </div>
                                    <div class="nk-msg-lables">
                                        <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="div1"  style="display: block;" class="nk-msg-body bg-white profile-shown">
                    <div class="nk-msg-head">
                        <h4 class="title d-none d-lg-block">lorem ipsum is a sit amet</h4>
                        <div class="nk-msg-head-meta">
                            <div class="d-none d-lg-block">
                                <ul class="nk-msg-tags">
                                    <li><span class="label-tag">
                                        <!-- <em class="icon ni ni-flag-fill"></em>  -->
                                        <span>lorem ipsum</span></span></li>
                                </ul>
                            </div>
                            <div class="d-lg-none"><a href="#" class="btn btn-icon btn-trigger nk-msg-hide ml-n1"><em class="icon ni ni-arrow-left"></em></a></div>
                            <ul class="nk-msg-actions">
                                <li><a href="#" class="btn btn-dim btn-sm btn-outline-light"><em class="icon ni ni-check"></em><span>Mark as Closed</span></a></li>
                                <!-- <li><span class="badge badge-dim badge-success badge-sm"><em class="icon ni ni-check"></em><span>Closed</span></span></li> -->
                                <li class="d-lg-none"><a href="#" class="btn btn-icon btn-sm btn-white btn-light profile-toggle"><em class="icon ni ni-info-i"></em></a></li>
                                <li class="dropdown">
                                    <a href="#" class="btn btn-icon btn-sm btn-white btn-light dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><em class="icon ni ni-user-add"></em><span>Assign To Member</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-archive"></em><span>Move to Archive</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-done"></em><span>Mark as Close</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="nk-msg-profile-toggle profile-toggle active"><em class="icon ni ni-arrow-left"></em></a>
                    </div><!-- .nk-msg-head -->
                    <div class="nk-msg-reply nk-reply" data-simplebar>
                        <div class="nk-msg-head py-4 d-lg-none">
                            <h4 class="title">Unable to select currency when order</h4>
                            <ul class="nk-msg-tags">
                                <li><span class="label-tag"><em class="icon ni ni-flag-fill"></em> <span>Technical Problem</span></span></li>
                            </ul>
                        </div>
                        <div class="nk-reply-item">
                            <div class="nk-reply-header">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-blue">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-name">Abu Bin Ishtiyak</div>
                                </div>
                                <div class="date-time">14 Jan, 2020</div>
                            </div>
                            <div class="nk-reply-body">
                                <div class="nk-reply-entry entry">
                                    <p>Hello team,</p>
                                    <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                    <p>Thank you <br> Ishityak</p>
                                </div>
                                <div class="attach-files">
                                    <ul class="attach-list">
                                        <li class="attach-item">
                                            <a class="download" href="#"><em class="icon ni ni-img"></em><span>error-show-On-order.jpg</span></a>
                                        </li>
                                        <li class="attach-item">
                                            <a class="download" href="#"><em class="icon ni ni-img"></em><span>full-page-error.jpg</span></a>
                                        </li>
                                    </ul>
                                    <div class="attach-foot">
                                        <span class="attach-info">2 files attached</span>
                                        <a class="attach-download link" href="#"><em class="icon ni ni-download"></em><span>Download All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-reply-item -->
                        <div class="nk-reply-item">
                            <div class="nk-reply-header">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-pink">
                                        <span>ST</span>
                                    </div>
                                    <div class="user-name">Support Team <span>(You)</span></div>
                                </div>
                                <div class="date-time">14 Jan, 2020</div>
                            </div>
                            <div class="nk-reply-body">
                                <div class="nk-reply-entry entry">
                                    <p>Hello Ishtiyak,</p>
                                    <p>We are really sorry to hear that, you have face an unexpected experience. Our team urgently look this matter and get back to you asap. </p>
                                    <p>Thank you very much. </p>
                                </div>

                            </div>
                        </div><!-- .nk-reply-item -->

                        <div class="nk-reply-form">
                            <div class="nk-reply-form-header">
                                <ul class="nav nav-tabs-s2 nav-tabs nav-tabs-sm">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#reply-form">Reply</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#note-form">Private Note</a>
                                    </li>
                                </ul>
                                <div class="nk-reply-form-title">
                                    <div class="title">Reply as:</div>
                                    <div class="user-avatar xs bg-purple">
                                        <span>IH</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="reply-form">
                                    <div class="nk-reply-form-editor">
                                        <div class="nk-reply-form-field">
                                            <textarea class="form-control form-control-simple no-resize" placeholder="Hello"></textarea>
                                        </div>
                                        <div class="nk-reply-form-tools">
                                            <ul class="nk-reply-form-actions g-1">
                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Reply</button></li>
                                                <li>
                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-sm btn-tooltip" data-toggle="dropdown" title="Templates" href="#"><em class="icon ni ni-hash"></em></a>
                                                        <div class="dropdown-menu">
                                                            <ul class="link-list-opt no-bdr link-list-template">
                                                                <li class="opt-head"><span>Quick Insert</span></li>
                                                                <li><a href="#"><span>Thank you message</span></a></li>
                                                                <li><a href="#"><span>Your issues solved</span></a></li>
                                                                <li><a href="#"><span>Thank you message</span></a></li>
                                                                <li class="divider">
                                                                <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Save as Template</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-notes-alt"></em><span>Manage Template</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Insert Emoji" href="#"><em class="icon ni ni-happy"></em></a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Images" href="#"><em class="icon ni ni-img"></em></a>
                                                </li>
                                            </ul>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Another Option</span></a></li>
                                                        <li><a href="#"><span>More Option</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-form-tools -->
                                    </div><!-- .nk-reply-form-editor -->
                                </div>
                                <div class="tab-pane" id="note-form">
                                    <div class="nk-reply-form-editor">
                                        <div class="nk-reply-form-field">
                                            <textarea class="form-control form-control-simple no-resize" placeholder="Type your private note, that only visible to internal team."></textarea>
                                        </div>
                                        <div class="nk-reply-form-tools">
                                            <ul class="nk-reply-form-actions g-1">
                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Add Note</button></li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a>
                                                </li>
                                            </ul>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Another Option</span></a></li>
                                                        <li><a href="#"><span>More Option</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-form-tools -->
                                    </div><!-- .nk-reply-form-editor -->
                                </div>
                            </div>
                        </div><!-- .nk-reply-form -->
                    </div><!-- .nk-reply -->
                    <!-- .nk-msg-profile -->
                </div>
                <div id="div2" style="display: none;" class="nk-msg-body bg-white profile-shown">
                    <div class="nk-msg-head">
                        <h4 class="title d-none d-lg-block">lorem ipsum is a sit amet</h4>
                        <div class="nk-msg-head-meta">
                            <div class="d-none d-lg-block">
                                <ul class="nk-msg-tags">
                                    <li><span class="label-tag">
                                        <!-- <em class="icon ni ni-flag-fill"></em>  -->
                                        <span>lorem ipsum</span></span></li>
                                </ul>
                            </div>
                            <div class="d-lg-none"><a href="#" class="btn btn-icon btn-trigger nk-msg-hide ml-n1"><em class="icon ni ni-arrow-left"></em></a></div>
                            <ul class="nk-msg-actions">
                                <li><a href="#" class="btn btn-dim btn-sm btn-outline-light"><em class="icon ni ni-check"></em><span>Mark as Closed</span></a></li>
                                <!-- <li><span class="badge badge-dim badge-success badge-sm"><em class="icon ni ni-check"></em><span>Closed</span></span></li> -->
                                <li class="d-lg-none"><a href="#" class="btn btn-icon btn-sm btn-white btn-light profile-toggle"><em class="icon ni ni-info-i"></em></a></li>
                                <li class="dropdown">
                                    <a href="#" class="btn btn-icon btn-sm btn-white btn-light dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><em class="icon ni ni-user-add"></em><span>Assign To Member</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-archive"></em><span>Move to Archive</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-done"></em><span>Mark as Close</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="nk-msg-profile-toggle profile-toggle active"><em class="icon ni ni-arrow-left"></em></a>
                    </div><!-- .nk-msg-head -->
                    <div class="nk-msg-reply nk-reply" data-simplebar>
                        <div class="nk-msg-head py-4 d-lg-none">
                            <h4 class="title">Unable to select currency when order</h4>
                            <ul class="nk-msg-tags">
                                <li><span class="label-tag"><em class="icon ni ni-flag-fill"></em> <span>Technical Problem</span></span></li>
                            </ul>
                        </div>
                        <div class="nk-reply-item">
                            <div class="nk-reply-header">
                                <div class="user-card">
                                    <div class="nk-msg-media user-avatar">
                                        <img src="./images/avatar/b-sm.jpg" alt="">
                                    </div>
                                    <div class="user-name">Ishtiyak</div>
                                </div>
                                <div class="date-time">14 Jan, 2020</div>
                            </div>
                            <div class="nk-reply-body">
                                <div class="nk-reply-entry entry">
                                    <p>Hello team,</p>
                                    <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                    <p>Thank you <br> Ishityak</p>
                                </div>
                                <div class="attach-files">
                                    <ul class="attach-list">
                                        <li class="attach-item">
                                            <a class="download" href="#"><em class="icon ni ni-img"></em><span>error-show-On-order.jpg</span></a>
                                        </li>
                                        <li class="attach-item">
                                            <a class="download" href="#"><em class="icon ni ni-img"></em><span>full-page-error.jpg</span></a>
                                        </li>
                                    </ul>
                                    <div class="attach-foot">
                                        <span class="attach-info">2 files attached</span>
                                        <a class="attach-download link" href="#"><em class="icon ni ni-download"></em><span>Download All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-reply-item -->
                        <div class="nk-reply-item">
                            <div class="nk-reply-header">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-pink">
                                        <span>ST</span>
                                    </div>
                                    <div class="user-name">Support Team <span>(You)</span></div>
                                </div>
                                <div class="date-time">14 Jan, 2020</div>
                            </div>
                            <div class="nk-reply-body">
                                <div class="nk-reply-entry entry">
                                    <p>Hello Ishtiyak,</p>
                                    <p>We are really sorry to hear that, you have face an unexpected experience. Our team urgently look this matter and get back to you asap. </p>
                                    <p>Thank you very much. </p>
                                </div>

                            </div>
                        </div><!-- .nk-reply-item -->

                        <div class="nk-reply-form">
                            <div class="nk-reply-form-header">
                                <ul class="nav nav-tabs-s2 nav-tabs nav-tabs-sm">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#reply-form">Reply</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#note-form">Private Note</a>
                                    </li>
                                </ul>
                                <div class="nk-reply-form-title">
                                    <div class="title">Reply as:</div>
                                    <div class="user-avatar xs bg-purple">
                                        <span>IH</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="reply-form">
                                    <div class="nk-reply-form-editor">
                                        <div class="nk-reply-form-field">
                                            <textarea class="form-control form-control-simple no-resize" placeholder="Hello"></textarea>
                                        </div>
                                        <div class="nk-reply-form-tools">
                                            <ul class="nk-reply-form-actions g-1">
                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Reply</button></li>
                                                <li>
                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-sm btn-tooltip" data-toggle="dropdown" title="Templates" href="#"><em class="icon ni ni-hash"></em></a>
                                                        <div class="dropdown-menu">
                                                            <ul class="link-list-opt no-bdr link-list-template">
                                                                <li class="opt-head"><span>Quick Insert</span></li>
                                                                <li><a href="#"><span>Thank you message</span></a></li>
                                                                <li><a href="#"><span>Your issues solved</span></a></li>
                                                                <li><a href="#"><span>Thank you message</span></a></li>
                                                                <li class="divider">
                                                                <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Save as Template</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-notes-alt"></em><span>Manage Template</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Insert Emoji" href="#"><em class="icon ni ni-happy"></em></a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Images" href="#"><em class="icon ni ni-img"></em></a>
                                                </li>
                                            </ul>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Another Option</span></a></li>
                                                        <li><a href="#"><span>More Option</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-form-tools -->
                                    </div><!-- .nk-reply-form-editor -->
                                </div>
                                <div class="tab-pane" id="note-form">
                                    <div class="nk-reply-form-editor">
                                        <div class="nk-reply-form-field">
                                            <textarea class="form-control form-control-simple no-resize" placeholder="Type your private note, that only visible to internal team."></textarea>
                                        </div>
                                        <div class="nk-reply-form-tools">
                                            <ul class="nk-reply-form-actions g-1">
                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Add Note</button></li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a>
                                                </li>
                                            </ul>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Another Option</span></a></li>
                                                        <li><a href="#"><span>More Option</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-form-tools -->
                                    </div><!-- .nk-reply-form-editor -->
                                </div>
                            </div>
                        </div><!-- .nk-reply-form -->
                    </div><!-- .nk-reply -->
                    <!-- .nk-msg-profile -->
                </div>
                <div id="div3" style="display: none;" class="nk-msg-body bg-white profile-shown">
                    <div class="nk-msg-head">
                        <h4 class="title d-none d-lg-block">lorem ipsum is a sit amet</h4>
                        <div class="nk-msg-head-meta">
                            <div class="d-none d-lg-block">
                                <ul class="nk-msg-tags">
                                    <li><span class="label-tag">
                                        <!-- <em class="icon ni ni-flag-fill"></em>  -->
                                        <span>lorem ipsum</span></span></li>
                                </ul>
                            </div>
                            <div class="d-lg-none"><a href="#" class="btn btn-icon btn-trigger nk-msg-hide ml-n1"><em class="icon ni ni-arrow-left"></em></a></div>
                            <ul class="nk-msg-actions">
                                <li><a href="#" class="btn btn-dim btn-sm btn-outline-light"><em class="icon ni ni-check"></em><span>Mark as Closed</span></a></li>
                                <!-- <li><span class="badge badge-dim badge-success badge-sm"><em class="icon ni ni-check"></em><span>Closed</span></span></li> -->
                                <li class="d-lg-none"><a href="#" class="btn btn-icon btn-sm btn-white btn-light profile-toggle"><em class="icon ni ni-info-i"></em></a></li>
                                <li class="dropdown">
                                    <a href="#" class="btn btn-icon btn-sm btn-white btn-light dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><em class="icon ni ni-user-add"></em><span>Assign To Member</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-archive"></em><span>Move to Archive</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-done"></em><span>Mark as Close</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="nk-msg-profile-toggle profile-toggle active"><em class="icon ni ni-arrow-left"></em></a>
                    </div><!-- .nk-msg-head -->
                    <div class="nk-msg-reply nk-reply" data-simplebar>
                        <div class="nk-msg-head py-4 d-lg-none">
                            <h4 class="title">Unable to select currency when order</h4>
                            <ul class="nk-msg-tags">
                                <li><span class="label-tag"><em class="icon ni ni-flag-fill"></em> <span>Technical Problem</span></span></li>
                            </ul>
                        </div>
                        <div class="nk-reply-item">
                            <div class="nk-reply-header">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-blue">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-name">Mayme Johnston</div>
                                </div>
                                <div class="date-time">14 Jan, 2020</div>
                            </div>
                            <div class="nk-reply-body">
                                <div class="nk-reply-entry entry">
                                    <p>Hello team,</p>
                                    <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                    <p>Thank you <br> Ishityak</p>
                                </div>
                                <div class="attach-files">
                                    <ul class="attach-list">
                                        <li class="attach-item">
                                            <a class="download" href="#"><em class="icon ni ni-img"></em><span>error-show-On-order.jpg</span></a>
                                        </li>
                                        <li class="attach-item">
                                            <a class="download" href="#"><em class="icon ni ni-img"></em><span>full-page-error.jpg</span></a>
                                        </li>
                                    </ul>
                                    <div class="attach-foot">
                                        <span class="attach-info">2 files attached</span>
                                        <a class="attach-download link" href="#"><em class="icon ni ni-download"></em><span>Download All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-reply-item -->
                        <div class="nk-reply-item">
                            <div class="nk-reply-header">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-pink">
                                        <span>ST</span>
                                    </div>
                                    <div class="user-name">Support Team <span>(You)</span></div>
                                </div>
                                <div class="date-time">14 Jan, 2020</div>
                            </div>
                            <div class="nk-reply-body">
                                <div class="nk-reply-entry entry">
                                    <p>Hello Ishtiyak,</p>
                                    <p>We are really sorry to hear that, you have face an unexpected experience. Our team urgently look this matter and get back to you asap. </p>
                                    <p>Thank you very much. </p>
                                </div>

                            </div>
                        </div><!-- .nk-reply-item -->

                        <div class="nk-reply-form">
                            <div class="nk-reply-form-header">
                                <ul class="nav nav-tabs-s2 nav-tabs nav-tabs-sm">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#reply-form">Reply</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#note-form">Private Note</a>
                                    </li>
                                </ul>
                                <div class="nk-reply-form-title">
                                    <div class="title">Reply as:</div>
                                    <div class="user-avatar xs bg-purple">
                                        <span>IH</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="reply-form">
                                    <div class="nk-reply-form-editor">
                                        <div class="nk-reply-form-field">
                                            <textarea class="form-control form-control-simple no-resize" placeholder="Hello"></textarea>
                                        </div>
                                        <div class="nk-reply-form-tools">
                                            <ul class="nk-reply-form-actions g-1">
                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Reply</button></li>
                                                <li>
                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-sm btn-tooltip" data-toggle="dropdown" title="Templates" href="#"><em class="icon ni ni-hash"></em></a>
                                                        <div class="dropdown-menu">
                                                            <ul class="link-list-opt no-bdr link-list-template">
                                                                <li class="opt-head"><span>Quick Insert</span></li>
                                                                <li><a href="#"><span>Thank you message</span></a></li>
                                                                <li><a href="#"><span>Your issues solved</span></a></li>
                                                                <li><a href="#"><span>Thank you message</span></a></li>
                                                                <li class="divider">
                                                                <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Save as Template</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-notes-alt"></em><span>Manage Template</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Insert Emoji" href="#"><em class="icon ni ni-happy"></em></a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Images" href="#"><em class="icon ni ni-img"></em></a>
                                                </li>
                                            </ul>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Another Option</span></a></li>
                                                        <li><a href="#"><span>More Option</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-form-tools -->
                                    </div><!-- .nk-reply-form-editor -->
                                </div>
                                <div class="tab-pane" id="note-form">
                                    <div class="nk-reply-form-editor">
                                        <div class="nk-reply-form-field">
                                            <textarea class="form-control form-control-simple no-resize" placeholder="Type your private note, that only visible to internal team."></textarea>
                                        </div>
                                        <div class="nk-reply-form-tools">
                                            <ul class="nk-reply-form-actions g-1">
                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Add Note</button></li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a>
                                                </li>
                                            </ul>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Another Option</span></a></li>
                                                        <li><a href="#"><span>More Option</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-form-tools -->
                                    </div><!-- .nk-reply-form-editor -->
                                </div>
                            </div>
                        </div><!-- .nk-reply-form -->
                    </div><!-- .nk-reply -->

                </div>
                <div id="div4" style="display: none;" class="nk-msg-body bg-white profile-shown">
                    <div class="nk-msg-head">
                        <h4 class="title d-none d-lg-block">lorem ipsum is a sit amet</h4>
                        <div class="nk-msg-head-meta">
                            <div class="d-none d-lg-block">
                                <ul class="nk-msg-tags">
                                    <li><span class="label-tag">
                                        <!-- <em class="icon ni ni-flag-fill"></em>  -->
                                        <span>lorem ipsum</span></span></li>
                                </ul>
                            </div>
                            <div class="d-lg-none"><a href="#" class="btn btn-icon btn-trigger nk-msg-hide ml-n1"><em class="icon ni ni-arrow-left"></em></a></div>
                            <ul class="nk-msg-actions">
                                <li><a href="#" class="btn btn-dim btn-sm btn-outline-light"><em class="icon ni ni-check"></em><span>Mark as Closed</span></a></li>
                                <!-- <li><span class="badge badge-dim badge-success badge-sm"><em class="icon ni ni-check"></em><span>Closed</span></span></li> -->
                                <li class="d-lg-none"><a href="#" class="btn btn-icon btn-sm btn-white btn-light profile-toggle"><em class="icon ni ni-info-i"></em></a></li>
                                <li class="dropdown">
                                    <a href="#" class="btn btn-icon btn-sm btn-white btn-light dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><em class="icon ni ni-user-add"></em><span>Assign To Member</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-archive"></em><span>Move to Archive</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-done"></em><span>Mark as Close</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="nk-msg-profile-toggle profile-toggle active"><em class="icon ni ni-arrow-left"></em></a>
                    </div><!-- .nk-msg-head -->
                    <div class="nk-msg-reply nk-reply" data-simplebar>
                        <div class="nk-msg-head py-4 d-lg-none">
                            <h4 class="title">Unable to select currency when order</h4>
                            <ul class="nk-msg-tags">
                                <li><span class="label-tag"><em class="icon ni ni-flag-fill"></em> <span>Technical Problem</span></span></li>
                            </ul>
                        </div>
                        <div class="nk-reply-item">
                            <div class="nk-reply-header">
                                <div class="user-card">
                                    <div class="nk-msg-media user-avatar">
                                        <img src="./images/avatar/c-sm.jpg" alt="">
                                    </div>
                                    <div class="user-name">Jake Smityh</div>
                                </div>
                                <div class="date-time">14 Jan, 2020</div>
                            </div>
                            <div class="nk-reply-body">
                                <div class="nk-reply-entry entry">
                                    <p>Hello team,</p>
                                    <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                    <p>Thank you <br> Ishityak</p>
                                </div>
                                <div class="attach-files">
                                    <ul class="attach-list">
                                        <li class="attach-item">
                                            <a class="download" href="#"><em class="icon ni ni-img"></em><span>error-show-On-order.jpg</span></a>
                                        </li>
                                        <li class="attach-item">
                                            <a class="download" href="#"><em class="icon ni ni-img"></em><span>full-page-error.jpg</span></a>
                                        </li>
                                    </ul>
                                    <div class="attach-foot">
                                        <span class="attach-info">2 files attached</span>
                                        <a class="attach-download link" href="#"><em class="icon ni ni-download"></em><span>Download All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-reply-item -->
                        <div class="nk-reply-item">
                            <div class="nk-reply-header">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-pink">
                                        <span>ST</span>
                                    </div>
                                    <div class="user-name">Support Team <span>(You)</span></div>
                                </div>
                                <div class="date-time">14 Jan, 2020</div>
                            </div>
                            <div class="nk-reply-body">
                                <div class="nk-reply-entry entry">
                                    <p>Hello Ishtiyak,</p>
                                    <p>We are really sorry to hear that, you have face an unexpected experience. Our team urgently look this matter and get back to you asap. </p>
                                    <p>Thank you very much. </p>
                                </div>

                            </div>
                        </div><!-- .nk-reply-item -->

                        <div class="nk-reply-form">
                            <div class="nk-reply-form-header">
                                <ul class="nav nav-tabs-s2 nav-tabs nav-tabs-sm">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#reply-form">Reply</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#note-form">Private Note</a>
                                    </li>
                                </ul>
                                <div class="nk-reply-form-title">
                                    <div class="title">Reply as:</div>
                                    <div class="user-avatar xs bg-purple">
                                        <span>IH</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="reply-form">
                                    <div class="nk-reply-form-editor">
                                        <div class="nk-reply-form-field">
                                            <textarea class="form-control form-control-simple no-resize" placeholder="Hello"></textarea>
                                        </div>
                                        <div class="nk-reply-form-tools">
                                            <ul class="nk-reply-form-actions g-1">
                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Reply</button></li>
                                                <li>
                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-sm btn-tooltip" data-toggle="dropdown" title="Templates" href="#"><em class="icon ni ni-hash"></em></a>
                                                        <div class="dropdown-menu">
                                                            <ul class="link-list-opt no-bdr link-list-template">
                                                                <li class="opt-head"><span>Quick Insert</span></li>
                                                                <li><a href="#"><span>Thank you message</span></a></li>
                                                                <li><a href="#"><span>Your issues solved</span></a></li>
                                                                <li><a href="#"><span>Thank you message</span></a></li>
                                                                <li class="divider">
                                                                <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Save as Template</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-notes-alt"></em><span>Manage Template</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Insert Emoji" href="#"><em class="icon ni ni-happy"></em></a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Images" href="#"><em class="icon ni ni-img"></em></a>
                                                </li>
                                            </ul>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Another Option</span></a></li>
                                                        <li><a href="#"><span>More Option</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-form-tools -->
                                    </div><!-- .nk-reply-form-editor -->
                                </div>
                                <div class="tab-pane" id="note-form">
                                    <div class="nk-reply-form-editor">
                                        <div class="nk-reply-form-field">
                                            <textarea class="form-control form-control-simple no-resize" placeholder="Type your private note, that only visible to internal team."></textarea>
                                        </div>
                                        <div class="nk-reply-form-tools">
                                            <ul class="nk-reply-form-actions g-1">
                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Add Note</button></li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a>
                                                </li>
                                            </ul>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Another Option</span></a></li>
                                                        <li><a href="#"><span>More Option</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-form-tools -->
                                    </div><!-- .nk-reply-form-editor -->
                                </div>
                            </div>
                        </div><!-- .nk-reply-form -->
                    </div><!-- .nk-reply -->

                </div>
                <div id="div5" style="display: none;" class="nk-msg-body bg-white profile-shown">
                    <div class="nk-msg-head">
                        <h4 class="title d-none d-lg-block">lorem ipsum is a sit amet</h4>
                        <div class="nk-msg-head-meta">
                            <div class="d-none d-lg-block">
                                <ul class="nk-msg-tags">
                                    <li><span class="label-tag">
                                        <!-- <em class="icon ni ni-flag-fill"></em>  -->
                                        <span>lorem ipsum</span></span></li>
                                </ul>
                            </div>
                            <div class="d-lg-none"><a href="#" class="btn btn-icon btn-trigger nk-msg-hide ml-n1"><em class="icon ni ni-arrow-left"></em></a></div>
                            <ul class="nk-msg-actions">
                                <li><a href="#" class="btn btn-dim btn-sm btn-outline-light"><em class="icon ni ni-check"></em><span>Mark as Closed</span></a></li>
                                <!-- <li><span class="badge badge-dim badge-success badge-sm"><em class="icon ni ni-check"></em><span>Closed</span></span></li> -->
                                <li class="d-lg-none"><a href="#" class="btn btn-icon btn-sm btn-white btn-light profile-toggle"><em class="icon ni ni-info-i"></em></a></li>
                                <li class="dropdown">
                                    <a href="#" class="btn btn-icon btn-sm btn-white btn-light dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><em class="icon ni ni-user-add"></em><span>Assign To Member</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-archive"></em><span>Move to Archive</span></a></li>
                                            <li><a href="#"><em class="icon ni ni-done"></em><span>Mark as Close</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="nk-msg-profile-toggle profile-toggle active"><em class="icon ni ni-arrow-left"></em></a>
                    </div><!-- .nk-msg-head -->
                    <div class="nk-msg-reply nk-reply" data-simplebar>
                        <div class="nk-msg-head py-4 d-lg-none">
                            <h4 class="title">Unable to select currency when order</h4>
                            <ul class="nk-msg-tags">
                                <li><span class="label-tag"><em class="icon ni ni-flag-fill"></em> <span>Technical Problem</span></span></li>
                            </ul>
                        </div>
                        <div class="nk-reply-item">
                            <div class="nk-reply-header">
                                <div class="user-card">
                                    <div class="nk-msg-media user-avatar">
                                        <img src="./images/avatar/d-sm.jpg" alt="">
                                    </div>
                                    <div class="user-name">Amanda Moore</div>
                                </div>
                                <div class="date-time">14 Jan, 2020</div>
                            </div>
                            <div class="nk-reply-body">
                                <div class="nk-reply-entry entry">
                                    <p>Hello team,</p>
                                    <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                    <p>Thank you <br> Ishityak</p>
                                </div>
                                <div class="attach-files">
                                    <ul class="attach-list">
                                        <li class="attach-item">
                                            <a class="download" href="#"><em class="icon ni ni-img"></em><span>error-show-On-order.jpg</span></a>
                                        </li>
                                        <li class="attach-item">
                                            <a class="download" href="#"><em class="icon ni ni-img"></em><span>full-page-error.jpg</span></a>
                                        </li>
                                    </ul>
                                    <div class="attach-foot">
                                        <span class="attach-info">2 files attached</span>
                                        <a class="attach-download link" href="#"><em class="icon ni ni-download"></em><span>Download All</span></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .nk-reply-item -->
                        <div class="nk-reply-item">
                            <div class="nk-reply-header">
                                <div class="user-card">
                                    <div class="user-avatar sm bg-pink">
                                        <span>ST</span>
                                    </div>
                                    <div class="user-name">Support Team <span>(You)</span></div>
                                </div>
                                <div class="date-time">14 Jan, 2020</div>
                            </div>
                            <div class="nk-reply-body">
                                <div class="nk-reply-entry entry">
                                    <p>Hello Ishtiyak,</p>
                                    <p>We are really sorry to hear that, you have face an unexpected experience. Our team urgently look this matter and get back to you asap. </p>
                                    <p>Thank you very much. </p>
                                </div>

                            </div>
                        </div><!-- .nk-reply-item -->

                        <div class="nk-reply-form">
                            <div class="nk-reply-form-header">
                                <ul class="nav nav-tabs-s2 nav-tabs nav-tabs-sm">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#reply-form">Reply</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#note-form">Private Note</a>
                                    </li>
                                </ul>
                                <div class="nk-reply-form-title">
                                    <div class="title">Reply as:</div>
                                    <div class="user-avatar xs bg-purple">
                                        <span>IH</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="reply-form">
                                    <div class="nk-reply-form-editor">
                                        <div class="nk-reply-form-field">
                                            <textarea class="form-control form-control-simple no-resize" placeholder="Hello"></textarea>
                                        </div>
                                        <div class="nk-reply-form-tools">
                                            <ul class="nk-reply-form-actions g-1">
                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Reply</button></li>
                                                <li>
                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-sm btn-tooltip" data-toggle="dropdown" title="Templates" href="#"><em class="icon ni ni-hash"></em></a>
                                                        <div class="dropdown-menu">
                                                            <ul class="link-list-opt no-bdr link-list-template">
                                                                <li class="opt-head"><span>Quick Insert</span></li>
                                                                <li><a href="#"><span>Thank you message</span></a></li>
                                                                <li><a href="#"><span>Your issues solved</span></a></li>
                                                                <li><a href="#"><span>Thank you message</span></a></li>
                                                                <li class="divider">
                                                                <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Save as Template</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-notes-alt"></em><span>Manage Template</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Insert Emoji" href="#"><em class="icon ni ni-happy"></em></a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Images" href="#"><em class="icon ni ni-img"></em></a>
                                                </li>
                                            </ul>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Another Option</span></a></li>
                                                        <li><a href="#"><span>More Option</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-form-tools -->
                                    </div><!-- .nk-reply-form-editor -->
                                </div>
                                <div class="tab-pane" id="note-form">
                                    <div class="nk-reply-form-editor">
                                        <div class="nk-reply-form-field">
                                            <textarea class="form-control form-control-simple no-resize" placeholder="Type your private note, that only visible to internal team."></textarea>
                                        </div>
                                        <div class="nk-reply-form-tools">
                                            <ul class="nk-reply-form-actions g-1">
                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Add Note</button></li>
                                                <li>
                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="#"><em class="icon ni ni-clip-v"></em></a>
                                                </li>
                                            </ul>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle btn-trigger btn btn-icon mr-n2" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Another Option</span></a></li>
                                                        <li><a href="#"><span>More Option</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-reply-form-tools -->
                                    </div><!-- .nk-reply-form-editor -->
                                </div>
                            </div>
                        </div><!-- .nk-reply-form -->
                    </div><!-- .nk-reply -->

                                    <div class="aside-wg">
                                        <h6 class="overline-title-alt mb-2">User Information</h6>
                                        <ul class="user-contacts">
                                            <li>
                                                <em class="icon ni ni-mail"></em><span>info@softnio.com</span>
                                            </li>
                                            <li>
                                                <em class="icon ni ni-call"></em><span>+938392939</span>
                                            </li>
                                            <li>
                                                <em class="icon ni ni-map-pin"></em><span>1134 Ridder Park Road <br>San Fransisco, CA 94851</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="aside-wg">
                                        <h6 class="overline-title-alt mb-2">Additional</h6>
                                        <div class="row gx-1 gy-3">
                                            <div class="col-6">
                                                <span class="sub-text">Ref ID: </span>
                                                <span>TID-049583</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Requested:</span>
                                                <span>Abu Bin Ishtiak</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Status:</span>
                                                <span class="lead-text text-success">Open</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Last Reply:</span>
                                                <span>Abu Bin Ishtiak</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aside-wg">
                                        <h6 class="overline-title-alt mb-2">Assigned Account</h6>
                                        <ul class="align-center g-2">
                                            <li>
                                                <div class="user-avatar bg-purple">
                                                    <span>IH</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user-avatar bg-pink">
                                                    <span>ST</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="user-avatar bg-gray">
                                                    <span>SI</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        function showDiv(num) {
    document.getElementById('div1').style.display='none';
    document.getElementById('div2').style.display='none';
    document.getElementById('div3').style.display='none';
    document.getElementById('div4').style.display='none';
    document.getElementById('div5').style.display='none';
    document.getElementById('div'+num).style.display='block'
}
    </script>
    <script src="./assets/js/bundle.js?ver=2.9.1"></script>
    <script src="./assets/js/scripts.js?ver=2.9.1"></script>
    <script src="./assets/js/apps/messages.js?ver=2.9.1"></script>
</x-app-layout>

