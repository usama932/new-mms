@extends('layouts.customer')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-block-head-sub    text-dark"><h5 class="text-dark"><em class="icon ni ni-chevrons-left"></em>Place an Order</h5></div>
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
                                <div class="accordion-item">
                                    <a href="#" class="accordion-head" data-toggle="collapse" data-target="#faq-q1">
                                        <h6 class="title">Who is your audience: who are your sponsors?</h6>
                                        <span class="accordion-icon"></span>
                                    </a>
                                    <div class="accordion-body collapse show" id="faq-q1" data-parent="#faqs">
                                        <div class="accordion-inner">
                                            <!-- <p>An overview of <strong>DashLite</strong> – is fully clean and premium designed admin template which included beautiful hand-crafted components & elements. <strong>DashLite</strong> completely focusing on <strong>conceptual base apps</strong> or dashboard, as it’s equipped with pre-built screens as well.</p>
                                            <p><strong>DashLite</strong> is powerful <strong>admin dashboard</strong> template that especially build for developers and programmers. <strong>DashLite</strong> comes with all kind of components, necessary elements and pre-build pages including <strong>3 conceptual apps</strong> screen that helps you to create your web apps or application. </p>
                                         -->
                                        </div>
                                    </div>
                                </div><!-- .accordion-item -->
                                <div class="accordion-item">
                                    <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#faq-q2">
                                        <h6 class="title">Why is it necessary to learn these topics in enterprises today?..</h6>
                                        <span class="accordion-icon"></span>
                                    </a>
                                    <div class="accordion-body collapse" id="faq-q2" data-parent="#faqs">
                                        <div class="accordion-inner">
                                            <!-- <p>If your <strong>end product</strong> including the item is going to be free to the end user then a <strong>Regular License</strong> is what you need. An <strong>Extended License</strong> is required if the <strong>end user</strong> must pay to use the <strong>end product</strong>.</p>
                                            <p>You may charge your client for your services to create an end product, even under the <strong>Regular License</strong>. <strong>But you can’t use one of our Standard Licenses on multiple clients or jobs.</strong></p>
                                         -->
                                        </div>
                                    </div>
                                </div><!-- .accordion-item -->
                                <div class="accordion-item">
                                    <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#faq-q3">
                                        <h6 class="title">How is your research program different? Unique elements of..</h6>
                                        <span class="accordion-icon"></span>
                                    </a>
                                    <div class="accordion-body collapse" id="faq-q3" data-parent="#faqs">
                                        <div class="accordion-inner">
                                             <strong>Step 1</strong>
                                            <h6>What do you buy Gold? - Martin Pederson</h6>
                                            <p>Go from no-code to an in-demand junior web developer, at a fraction of the cost of a bootcamp.
                                                Start with the front-end by learning HTML, CSS, and JavaScript. Then, master the back-end
                                                and APIs to round out your full-stack skills.
                                                </p>
                                            <!-- <ul class="list list-sm list-checked">
                                                <li>Answering all questions including technical about the item</li>
                                                <li>Help with defects in the item or included third-party assets</li>
                                                <li>Item updates to ensure ongoing compatibility and to resolve security vulnerabilities</li>
                                                <li>Updates to ensure the item works as described and is protected against major security concerns</li>
                                                <li>Included version updates for all items</li>
                                            </ul>
                                            <h6>What's not included in item support?</h6>
                                            <ul class="list list-sm list-cross">
                                                <li>Installation of the item</li>
                                                <li>Hosting, server environment, or software</li>
                                                <li>Help from authors of included third-party assets</li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div><!-- .accordion-item -->
                                <div class="accordion-item">
                                    <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#faq-q4">
                                        <h6 class="title">What will buyers gain from this platform? How does it prepare ...</h6>
                                        <span class="accordion-icon"></span>
                                    </a>
                                    <div class="accordion-body collapse" id="faq-q4" data-parent="#faqs">
                                        <div class="accordion-inner">
                                            <!-- <p>Item should be downloaded <strong>immediately</strong> after <strong>purchasing</strong>. You will get email with <strong>download link</strong> from Envato once you paid.</p>
                                            <h6>Also you can download your item:</h6> -->
                                            <!-- <ul class="list list-sm">
                                                <li>Hover over your username and click '<strong>Downloads'</strong> from the drop-down menu.</li>
                                                <li>The downloads section displays a list of all the items purchased using your account.</li>
                                                <li>Click the <strong>'Download'</strong> button next to the item and select <strong>‘Main File(s)’</strong> which contains all files, or <strong>‘Licence Certificate and Purchase Code’</strong> for the item licence information only.</li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="accordion-item">
                                    <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#faq-q5">
                                        <h6 class="title">How to contact before purchase?</h6>
                                        <span class="accordion-icon"></span>
                                    </a>
                                    <div class="accordion-body collapse" id="faq-q5" data-parent="#faqs">
                                        <div class="accordion-inner">
                                            <p>If you want to ask questions about our product, or need help using our item you’ve purchased or just want to tell us how much you love our work, that's great!</p>
                                            <p>Contact us via email <a href="mailto:info@softnio.com">info(at)softnio.com</a> or Post your comment (are visible to everyone) on our item page after login into your account.</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div><!-- .accordion -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                    <form action="#">
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
                                </form><!-- .nk-block -->
                </div><!-- .content-page -->
            </div>
        </div>
    </div>
</div>
@endsection
