<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('/images/FavIcondl.png')}}"  width="100% " height="100%" >
    <!-- Page Title  -->
    <title>Precious Metals</title>
    <!-- StyleSheets  -->
    <!-- <link rel="stylesheet" href="./asssts/css/custom.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('/assets/css/dashlite.css?ver=2.9.1')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/dashlite.css?ver=2.9.1')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('/assets/css/theme.css?ver=2.9.1')}}">
</head>
<style type="text/css">
    .read-more-show{
      cursor:pointer;
      color: #ed8323;
    }
    .read-more-hide{
      cursor:pointer;
      color: #ed8323;
    }

    .hide_content{
      display: none;
    }
</style>
<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="{{ route('dashboard') }}" class="logo-link nk-sidebar-logo">
                            <!-- <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo"> -->
                            <img class="logo-dark logo-img" src="{{asset('/images/GMRGold_Logos.png')}}"  alt="logo-dark">
                            <!-- <img class="logo-small logo-img logo-img-small" src="{{asset('/images/logo-small.png')}}" srcset="{{asset('./images/logo-small2x.png 2x')}}" alt="logo-small"> -->
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em style="color: #488A99;" class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="/dashboard" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('trade.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-view-panel-fill"></em></span>
                                        <span class="nk-menu-text">Make a Trade</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{route('suggest')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                                        <span class="nk-menu-text">Suggested Products</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('market_price')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-package-fill"></em></span>
                                        <span class="nk-menu-text">Market Prices</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('purchase_history')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Purchase History</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{route('customer_news.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-server-fill"></em></span>
                                        <span class="nk-menu-text">News</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{route('customer_queries.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                                        <span class="nk-menu-text">Mail Box</span>
                                    </a>
                                </li>

                                </li>

                            </ul>
                            <hr>
                            <span class=" nk-menu-item">Accounts</span>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="{{ route('fund.wallet') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-bag-fill"></em></span>
                                        <span class="nk-menu-text">Funding My Wallet</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('customer_faqs.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-view-list-fill"></em></span>
                                        <span class="nk-menu-text">FAQ's</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('link.account') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                                        <span class="nk-menu-text">Submit Your Portfolio</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('consultant') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-list-thumb-alt"></em></span>
                                        <span class="nk-menu-text">Request Consultation</span>
                                    </a>
                                </li>
                            <hr>
                            <li class="nk-menu-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <div class="">
                                        <a href="{{ "route('logout')" }}" class="nk-menu-link" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                            <span class="nk-menu-text">
                                            {{ __('Log Out') }}
                                        </span>
                                        </a>

                                    </div>
                                    </form>
                            </li>



                        </ul>
                        <hr>

                            <a href="https://www.gmrgold.com/" class="ml-3" >
                            <button class="btn btn-info " style="width:90%; justify-content:center" >Shop Now</button></a>


                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>

            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="#" class="logo-link">

                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-search ml-3 ml-xl-0">
                                <em class="icon ni ni-search"></em>
                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">

                                    <!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                            <div class="user-toggle ">
                                                <div  class="user-avatar sm  " style="background-color:#DBAE58">
                                                    <img src="{{asset(Auth::user()->profile_image)}}" alt="">
                                                </div>
                                                <div class="user-info d-none d-xl-block  ">
                                                    <div  style="color: #DBAE58;"   class="user-status user-status-active ">{{Auth::user()->name}}</div>

                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" >
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar" style="background-color: #DBAE58;" >
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info" >
                                                        <span class="lead-text" >{{Auth::user()->name}}</span>
                                                        <span class="sub-text">{{Auth::user()->email}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{route('customer_profiles.index')}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                </ul>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">

                                                    <li>
                                                        <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <x-dropdown-link :href="route('logout')"
                                                                onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                            {{ __('Log Out') }}
                                                        </x-dropdown-link>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">

                            @yield('content')

                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->

                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    {{-- modal  --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Call For Price</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="card text-white ">
                    <div class="card-inner ">
                       <div class="d-flex ">
                          <div class="user-avatar bg-lighter p-5 border-dark">
                             <em class="icon ni ni-call"></em>
                          </div>
                          <div  class="pl-4 py-2">
                             <p class=" text-dark">Call us direct at</p>
                             <h5 class=" text-dark">+45 52 67 29 31</h5>
                          </div>
                       </div>
                    </div>
                 </div>
            </div>

          </div>
        </div>
      </div>
    {{-- end modal --}}
    <!-- app-root @e -->
    <!-- select region modal -->
    <!-- <script>
        alert("Dear user:please use this contact details to reach us out: Email:msromi7@gmail.com Whatapps- +923126900269")
       </script> -->
    <!-- .modal -->
    <!-- JavaScript -->
    <script src="{{asset('/assets/js/bundle.js?ver=2.9.1')}}"></script>

    <script src="{{asset('/assets/js/scripts.js?ver=2.9.1')}}"></script>
    <script src="{{asset('/assets/js/charts/chart-ecommerce.js?ver=2.9.1')}}"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
            $('.read-more-content').addClass('hide_content')
            $('.read-more-show, .read-more-hide').removeClass('hide_content')

            // Set up the toggle effect:
            $('.read-more-show').on('click', function(e) {
              $(this).next('.read-more-content').removeClass('hide_content');
              $(this).addClass('hide_content');
              e.preventDefault();
            });

            // Changes contributed by @diego-rzg
            $('.read-more-hide').on('click', function(e) {
              var p = $(this).parent('.read-more-content');
              p.addClass('hide_content');
              p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
              e.preventDefault();
            });
</script>
</body>

</html>

