<header class="header header-intro-clearance header-4 sticky-header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p><a href="mailto:info@cloudray.com" title="Contact Us" class="d-md-none d-sm-block" aria-label="Contact Us" style="font-weight: 500; color: #f44336;">info@cloudray.com</a></p>
                        <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <!-- <li>
                                        <div class="header-dropdown">
                                            <a href="#">USD</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">Eur</a></li>
                                                    <li><a href="#">Usd</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li> -->
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">English</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <!-- <li><a href="#">French</a></li>
                                                    <li><a href="#">Spanish</a></li> -->
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div>
                                    </li>
                                    <!-- <li><a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a></li> -->
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle ">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="/" class="logo">
                            <img src="{{ asset('user-end/images/logo.avif') }}" alt="Logo" width="225" height="25">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                        <a href="mailto:info@cloudray.com" title="Contact Us" class="text-dark d-none d-md-block" aria-label="Contact Us" style="font-weight: 500;">Contact Us:info@cloudray.com</a>
                        <div class="dropdown compare-dropdown">
                             <!-- Right Side Of Navbar -->

                        @guest
                            <a href="#signin-modal" data-toggle="modal" data-display="static" title="Account" aria-label="Account">
                                <div class="icon">
                                    <i class="fa fa-user-o" style="font-size:25px;" aria-hidden="true"></i>
                                </div>
                                <p>Account</p>
                            </a>
                        @else

                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                            <div class="icon">
                                    <i class="fa fa-user-o" style="font-size:25px;" aria-hidden="true"></i>
                                </div>
                                <p>{{ Auth::user()->name }}</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" style="width:135px; font-size:1.3rem; padding:0px;">
                                <ul class="compare-products">
                                    <li class="compare-product"> 
                                        <a class="dropdown-item" href="/profile"> Profile </a>
                                    </li>
                                    <li class="compare-product">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    </li>

                                </ul>
                            </div><!-- End .dropdown-menu -->
                        @endguest


                        </div><!-- End .compare-dropdown -->

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">@if(session('cart')){{ count(session('cart')) }}@else 0 @endif</span>
                                </div>
                                <p>Cart</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" style="width: 280px;">
                                <div class="dropdown-cart-products">
                                    <?php $total = 0; ?>
                                    @if(session('cart'))
                                        @foreach (session('cart') as $id=>$details)
                                            <?php $total += $details['price']*$details['quantity']; ?>
                                            <div class="product">
                                                <div class="product-cart-details">
                                                    <h4 class="product-title">
                                                        <a href="{{ url('detail-product/'.$id) }}">{{ $details['name'] }}</a>
                                                    </h4>

                                                    <span class="cart-product-info">
                                                        <span class="cart-product-qty">{{ $details['quantity'] }}</span>
                                                        x ${{ $details['price'] }}
                                                    </span>
                                                </div><!-- End .product-cart-details -->

                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="{{ asset('ab_admin/product/'.$details['image']) }}" alt="product">
                                                    </a>
                                                </figure>
                                                <button class="btn-remove remove-from-cart" data-id="{{ $id }}"><i class="icon-close"></i></button>
                                            </div><!-- End .product -->
                                        @endforeach
                                    @endif
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">${{ $total }}</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="{{url('/view-cart')}}" class="btn btn-primary">View Cart</a>
                                    <a href="{{url('/checkout')}}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom">
                <div class="container">
                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                            <li class="megamenu-container">
                                    <a href="#" class="sf-with-ul">LASER MACHINE</a>

                                    <div class="megamenu">
                                        <div class="menu-col" style="padding:0px !important">
                                            <div class="demo-list">
                                                <div class="col-md-3">
                                                     <ul class="menu-vertical">
                                                        <li class="item-lead">
                                                        <a href="#" class="sf-with-ul pl-5 w-auto">Laser Engraver Machine</a>
                                                        <div class="megamenu inner-div-megamenu1">
                                                        <div class="menu-col" >
                                                            <div class="demo-list">


                                                                <div class="demo-item" style="flex: 0 0 33%; max-width:33%; text-align:left;">
                                                                    <a href="#">
                                                                        <span class="demo-bg" style="background-image: url(assets/menu_images/111_7cf8ce55-9676-4cd9-9504-6d16b305cb29.jpg); width:220px !important; border:none; padding:25%;" ></span>
                                                                        <span class="demo-title text-center mx-auto">QS Series (Q-Switched)</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->
                                                                <div class="demo-item" style="flex: 0 0 33%; max-width:33%; text-align:left;">
                                                                    <a href="#">
                                                                        <span class="demo-bg" style="background-image: url(assets/menu_images/3e242416da033622b675af17de14b9b5_5b422d66-e375-4ea3-a182-bdda1bb696e0.jpg); width:220px !important; border:none; padding:25%;"></span>
                                                                        <span class="demo-title">MP series (MOPA)</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->
                                                                <div class="demo-item" style="flex: 0 0 33%; max-width:33%; text-align:left;">
                                                                    <a href="#">
                                                                        <span class="demo-bg" style="background-image: url(assets/menu_images/3-2.jpg); width:220px !important;  border:none; padding:25%;"></span>
                                                                        <span class="demo-title">Ar SERIES (2.5D Engraving)</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->
                                                                <div class="demo-item" style="flex: 0 0 33%; max-width:33%; text-align:left;">
                                                                    <a href="#">
                                                                        <span class="demo-bg" style="background-image: url(assets/menu_images/111_7cf8ce55-9676-4cd9-9504-6d16b305cb29.jpg); width:220px !important; border:none; padding:25%;"></span>
                                                                        <span class="demo-title">Ec SERIES (CO2 Laser)</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->
                                                                </div><!-- End .demo-list -->

                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .megamenu --></li>
                                                    <li ><a href="#" class="sf-with-ul pl-5">Laser Engraver Machine Parts</a>
                                                    <div class="megamenu inner-div-megamenu">
                                                        <div class="menu-col" >
                                                            <div class="demo-list">
                                                                <div class="demo-item" style="flex: 0 0 33%; max-width:33%; text-align:left;">
                                                                    <h6>Necessary Tools</h6>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/laserRotary.webp') }}" width="45"> <span style="margin-left:15px; line-height:3;">Laser Rotary</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/Fume-Extraction1.webp') }}" width="45"> <span style="margin-left:15px; line-height:3;">Fume Extraction System</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/Laser-Safety-Goggles-1.webp') }}" width="45"> <span style="margin-left:15px; line-height:3;">Laser Safety Glasses</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/protection.webp') }}" width="45"> <span style="margin-left:15px; line-height:3;">Protective Cover</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/Fiber-Marking1.webp') }}" width="45"> <span style="margin-left:15px; line-height:3;">Working Table</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/2.webp') }}" width="45"> <span style="margin-left:15px; line-height:3;">Metal Sheet Holder</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/laserRotary.webp') }}" width="45"> <span style="margin-left:15px; line-height:3;">Software</span></p>
                                                                </div><!-- End .demo-item -->
                                                                <div class="demo-item" style="flex: 0 0 33%; max-width:33%; text-align:left;">
                                                                    <h6>Customization & Upgrading</h6>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/F-theta-Scan-Lens-1.jpg') }}" width="45"> <span style="margin-left:15px; line-height:3;">F-theta Lens</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/c91289a8f21e51b6b2133e5b9bd46b8c.jpg') }}" width="45"> <span style="margin-left:15px; line-height:3;">JCZ Controller</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/1.jpg') }}" width="45"> <span style="margin-left:15px; line-height:3;">Galvo Head</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/8c59b7f06202cc3d9adb46986e3fd72d.jpg') }}" width="45"> <span style="margin-left:15px; line-height:3;">Laser</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/Fiber-Laser-Path-1.jpg') }}" width="45"> <span style="margin-left:15px; line-height:3;">Laser Path</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/1-500.jpg') }}" width="45"> <span style="margin-left:15px; line-height:3;">Lifting Colume</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/Split_Marking_Housing_Set-1.jpg') }}" width="45"> <span style="margin-left:15px; line-height:3;">Machine Cabinet</span></p>
                                                                </div><!-- End .demo-item -->
                                                                <div class="demo-item" style="flex: 0 0 33%; max-width:33%; text-align:left;">
                                                                    <h6>Materials</h6>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/Laser-Cutting-Files-1.jpg') }}" width="45"> <span style="margin-left:15px; line-height:3;">Laser Marking Materials</span></p>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/0248484a5747708d0a713fd59e4581a6.jpg') }}" width="45"> <span style="margin-left:15px; line-height:3;">Engraving Files</span></p>
                                                                </div><!-- End .demo-item -->
                                                            </div><!-- End .demo-list -->
                                                        </div><!-- End .menu-col -->
                                                    </div><!-- End .megamenu -->
                                                </li>
                                                <li><a href="#" class="sf-with-ul pl-5">Making/Engraver/Cutting Materials</a>
                                                    <div class="megamenu inner-div-megamenu">
                                                        <div class="menu-col" >
                                                            <div class="demo-list">
                                                                <div class="demo-item" style="flex: 0 0 33%; max-width:33%; text-align:left;">
                                                                    <h6>Laser Marking/Engraving Materials</h6>
                                                                    <p class="d-flex"><span style="margin-left:15px; line-height:3;">Material Package</span></p>
                                                                    <p class="d-flex"><span style="margin-left:15px; line-height:3;">Metal</span></p>
                                                                    <p class="d-flex"><span style="margin-left:15px; line-height:3;">Slate</span></p>
                                                                    <p class="d-flex"><span style="margin-left:15px; line-height:3;">Acrylic</span></p>
                                                                    <p class="d-flex"><span style="margin-left:15px; line-height:3;">Wood</span></p>
                                                                </div><!-- End .demo-item -->
                                                                <div class="demo-item" style="flex: 0 0 33%; max-width:33%; text-align:left;">
                                                                    <h6>Laser Cutting Materials</h6>
                                                                    <p class="d-flex"><span style="margin-left:15px; line-height:3;">Cutting Material Package</span></p>
                                                                    <p class="d-flex"><span style="margin-left:15px; line-height:3;">Wood</span></p>
                                                                    <p class="d-flex"><span style="margin-left:15px; line-height:3;">Acrylic</span></p>

                                                                </div><!-- End .demo-item -->

                                                                <div class="demo-item" style="flex: 0 0 33%; max-width:33%; text-align:left;">
                                                                    <h6>Materials</h6>
                                                                    <p class="d-flex"><img src="{{ asset('assets/menu_images/Laser-Cutting-Files-1.jpg') }}" width="45"> <span style="margin-left:15px; line-height:3;">Cloudray Decoration Pattern Cutting Files AI/DWG/DXF</span></p>

                                                                </div><!-- End .demo-item -->
                                                                </div><!-- End .demo-list -->
                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .megamenu -->
                                                    </li>
                                                    <li><a href="#" class="sf-with-ul pl-5">Laser Cutting Machine</a>
                                                        <div class="megamenu inner-div-megamenu">
                                                        <div class="menu-col" >
                                                            <div class="demo-list">
                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                        <span class="demo-bg" style="background-image: url(assets/menu_images/11_178da23a-6b7b-4eae-b33b-8c9b3dcf3b20.jpg);"></span>
                                                                        <span class="demo-title">CR Series</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->
                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                        <span class="demo-bg" style="background-image: url(assets/menu_images/221.jpg);"></span>
                                                                        <span class="demo-title">RUSS Series</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->
                                                                </div><!-- End .demo-list -->

                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .megamenu -->
                                                        </li>

                                                    </ul><!-- End .menu-vertical -->
                                                </div>
                                                <div class="col-md-9"></div>

                                            </div><!-- End .demo-list -->

                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a href="#" class="sf-with-ul">Accessories</a>
                                    <div class="megamenu">
                                        <div class="menu-col" style="padding:0px !important">
                                            <div class="demo-list">
                                                <div class="col-md-3">
                                                     <ul class="menu-vertical">
                                                        <li class="item-lead">
                                                        <a href="#" class="sf-with-ul pl-5 w-auto">Machine</a>
                                                        <div class="megamenu inner-div-megamenu1">
                                                        <div class="menu-col" >
                                                            <div class="demo-list">
                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                       <span class="demo-bg" style="background-image: url(user-end/images/p2_low.png);"></span>
                                                                        <span class="demo-title">Machine store</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->

                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                       <span class="demo-bg" style="background-image: url(user-end/images/p2_low.png);"></span>
                                                                        <span class="demo-title">Machine store</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->

                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                        <span class="demo-bg" style="background-image: url(user-end/images/p2_low.png);"></span>
                                                                        <span class="demo-title">Machine store</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->

                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                       <span class="demo-bg" style="background-image: url(user-end/images/p2_low.png);"></span>
                                                                        <span class="demo-title">Machine store</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->

                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                       <span class="demo-bg" style="background-image: url(user-end/images/p2_low.png);"></span>
                                                                        <span class="demo-title">Machine store</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->

                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                       <span class="demo-bg" style="background-image: url(user-end/images/p2_low.png);"></span>
                                                                        <span class="demo-title">Machine store</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->
                                                                </div><!-- End .demo-list -->

                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .megamenu --></li>
                                                    <li ><a href="#" class="sf-with-ul pl-5">machine</a>
                                                    <div class="megamenu inner-div-megamenu">
                                                        <div class="menu-col" >
                                                            <div class="demo-list">


                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                        <span class="demo-bg" style="background-image: url(user-end/images/p2_low.png);"></span>
                                                                        <span class="demo-title">Machine store</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->

                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                       <span class="demo-bg" style="background-image: url(user-end/images/p2_low.png);"></span>
                                                                        <span class="demo-title">Machine store</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->

                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                       <span class="demo-bg" style="background-image: url(user-end/images/p2_low.png);"></span>
                                                                        <span class="demo-title">Machine store</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->
                                                                </div><!-- End .demo-list -->

                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .megamenu -->
                                                        </li>
                                                        <li><a href="#" class="sf-with-ul pl-5">Making/Engraver/Cutting Materials</a>
                                                    <div class="megamenu inner-div-megamenu">
                                                        <div class="menu-col" >
                                                            <div class="demo-list">


                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                        <span class="demo-bg" style="background-image: url(user-end/images/p2_low.png);"></span>
                                                                        <span class="demo-title">Machine store</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->


                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                        <span class="demo-bg" style="background-image: url(user-end/images/p2_low.png);"></span>
                                                                        <span class="demo-title">Machine store</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->
                                                                </div><!-- End .demo-list -->

                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .megamenu -->
                                                        </li>
                                                        <li><a href="#" class="sf-with-ul pl-5">Laser Cutting Machine</a>
                                                        <div class="megamenu inner-div-megamenu">
                                                        <div class="menu-col" >
                                                            <div class="demo-list">


                                                                <div class="demo-item">
                                                                    <a href="#">
                                                                       <span class="demo-bg" style="background-image: url(user-end/images/p2_low.png);"></span>
                                                                        <span class="demo-title">Machine store</span>
                                                                    </a>
                                                                </div><!-- End .demo-item -->



                                                                </div><!-- End .demo-list -->

                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .megamenu -->
                                                        </li>

                                                    </ul><!-- End .menu-vertical -->
                                                </div>
                                                <div class="col-md-9"></div>

                                            </div><!-- End .demo-list -->

                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->

                                </li>
                                <li style="position: relative; width: 154px;">
                                    <a href="#" class="sf-with-ul">Flash Sale</a>

                                    <ul>
                                        <li><a href="#">Classic</a></li>
                                        <li><a href="#">Listing</a></li>
                                        <li>
                                            <a href="#">Grid</a>
                                            <ul>
                                                <li><a href="#">Grid 2 columns</a></li>
                                                <li><a href="#">Grid 3 columns</a></li>
                                                <li><a href="#">Grid 4 columns</a></li>
                                                <li><a href="#">Grid sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Masonry</a>
                                            <ul>
                                                <li><a href="#">Masonry 2 columns</a></li>
                                                <li><a href="#">Masonry 3 columns</a></li>
                                                <li><a href="#">Masonry 4 columns</a></li>
                                                <li><a href="#">Masonry sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Mask</a>
                                            <ul>
                                                <li><a href="#">Blog mask grid</a></li>
                                                <li><a href="#">Blog mask masonry</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Single Post</a>
                                            <ul>
                                                <li><a href="#">Default with sidebar</a></li>
                                                <li><a href="#">Fullwidth no sidebar</a></li>
                                                <li><a href="#">Fullwidth with sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li style="position: relative; width: 154px;">
                                    <a href="#" class="sf-with-ul">Support</a>

                                    <ul>
                                        <li><a href="#">Facebook Group</a></li>
                                    </ul>
                                </li>
                                <li style="position: relative; width: 154px;">
                                    <a href="#" class="sf-with-ul">Resource</a>
                                    <ul>
                                        <li><a href="#">Download</a></li>
                                        <li><a href="/portfolio">Gallery</a></li>
                                        <li><a href="#">Laser Solution</a></li>
                                        <li><a href="#">FAQ</a></li>
                                    </ul>
                                </li>
                                <li style="position: relative; width: 154px;">
                                    <a href="#" class="sf-with-ul">CloudRay</a>
                                    <ul>
                                        <li><a href="/about">About</a></li>
                                        <li><a href="/contact">Contact Us</a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->


                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header>
