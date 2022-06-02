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
    }</style>
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
                            <img class="logo-dark logo-img" src="./images/GMRGold_Logos.png"  alt="logo-dark">
                            <!-- <img class="logo-small logo-img logo-img-small" src="./images/logo-small.png" srcset="./images/logo-small2x.png 2x" alt="logo-small"> -->
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
                                    <a href="{{route('dashboard')}}" class="nk-menu-link" >
                                        <span class="nk-menu-icon"><em  style="color: #DBAE58;" class="icon ni ni-dashboard-fill "></em></span>
                                        <span style="color: #DBAE58;" class="nk-menu-text ">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('staff_orders.index') }} " class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-bag-fill text-black"></em></span>
                                        <span class="nk-menu-text text-black">Orders</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('staff_products.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-package-fill text-black"></em></span>
                                        <span class="nk-menu-text text-black">Products</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('staff_customers.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill text-black"></em></span>
                                        <span class="nk-menu-text text-black">Customers</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{route('staff_queries.index')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-chat-fill text-black"></em></span>
                                        <span class="nk-menu-text text-black">Mail Box</span>
                                    </a>
                                </li>


                            </ul><!-- .nk-menu -->
                            <hr>
                            <span class=" nk-menu-item">Accounts</span>
                            <ul class="nk-menu">
                            <li class="nk-menu-item">
                                <a href="{{ route('staff_faqs.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-server-fill"></em></span>
                                    <span class="nk-menu-text">Manage Faqs</span>
                                </a>
                            </li>


                        </ul>
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
                                                    <em class="icon ni ni-user-alt  "></em>
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
                                                    <li><a href="{{route('staff_profiles.index')}}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                      </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">

                                                    <li>
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
    <!-- app-root @e -->
    <!-- select region modal -->
    <!-- <script>
        alert("Dear user:please use this contact details to reach us out: Email:msromi7@gmail.com Whatapps- +923126900269")
       </script> -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
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

