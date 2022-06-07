<x-guest-layout>
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Register</h4>
                                        <div class="nk-block-des">
                                            <p>Create New MintTrade Account</p>
                                        </div>
                                    </div>
                                </div>
                                <form  method="post" action='{{route('register')}}'>
                                    @csrf
                                    @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach

                                    </div>
                                    @endif
                                    <input type="hidden" name="grade" value="F">
                                    <input type="hidden" name="role_id" value="customer">
                                    <input type="hidden" name="is_active" value="1">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" required name='name' class="form-control form-control-lg" id="name" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="name">Address</label>
                                        <div class="form-control-wrap">
                                            <input type="text" required name='address' class="form-control form-control-lg" id="name" placeholder="Enter your address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="name">Contact #</label>
                                        <div class="form-control-wrap">
                                            <input type="text" required name='contact' class="form-control form-control-lg" id="name" placeholder="Enter your Contact">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <div class="form-control-wrap">
                                            <input type="text" required name='email'class="form-control form-control-lg" id="email" placeholder="Enter your email address or username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-control-wrap">

                                            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your passcode">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Confirm Password</label>
                                        <div class="form-control-wrap">

                                            <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox">
                                            <label class="custom-control-label" for="checkbox">I agree to MintTrade <a href="#">Privacy Policy</a> &amp; <a href="#"> Terms.</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Register</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="{{route('login')}}"><strong>Sign in instead</strong></a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                                <div class="col-lg-6 order-lg-last">
                                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terms & Condition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Help</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <div class="nk-block-content text-center text-lg-left">
                                        <p class="text-soft">&copy; 2022 MintTrade. All Rights Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
</x-guest-layout>
