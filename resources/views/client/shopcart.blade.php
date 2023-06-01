<!DOCTYPE html>
<html class=no-js>

<head>
    <meta charset=utf-8>
    <title>Welcome to Coffee and You | Shop cart page</title>
    <meta name=description content="">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href=favicon.ico>
    <link rel=apple-touch-icon href="{{url('public/client')}}/apple-touch-icon.png">
    <!-- Place favicon.ico and apple-touch-icon.png" in the root directory -->
    <link rel=stylesheet href="{{url('public/client')}}/styles/vendor.css">
    <link rel=stylesheet href="{{url('public/client')}}/styles/main.css">
    <script src="{{url('public/client')}}/scripts/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />


<body class="menu-page inner-page">
    <!--[if lt IE 10]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <header>
        <div class=container>
            <nav class="navbar navbar-default">
                <div class=container-fluid>
                    <div class=row>
                        <div class=navbar-header> <button type=button class="navbar-toggle collapsed"
                                data-toggle=collapse data-target=#coffeeNavbarPrimary aria-expanded=false> <span
                                    class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span
                                    class=icon-bar></span> <span class=icon-bar></span> </button> </div> <a
                            href=index.html class=header-logo>Coffee and You <img
                                src="{{url('public/client')}}/images/small-logo.png" alt=""> </a>
                        <div class="collapse navbar-collapse" id=coffeeNavbarPrimary>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{route('home.index')}}">Home</a></li>
                                <li><a href=menu.html>Menu</a></li>
                                <li><a href=blog-list.html>blog</a></li>
                                <li> <a href=gallery.html>gallery</a></li>
                                <li class=active><a href=store.html>store</a></li>
                                <li><a href=contactus.html>Contact</a></li>
                                <li><a href="{{route('cart.cart')}}">Cart <i
                                            class="fa fa-shopping-cart"><span>{{$cart->totalQuantity}}</span></i></a>
                                </li>
                                <li class=button-order-now> <a href=shopcart.html>Order Now</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="banner clearfix">
                <div class=banner-img> <img src="{{url('public/client')}}/images/cup.png" alt=image> </div>
                <div class=banner-text>
                    <h2>Our special & exclusive <span>product</span></h2>
                </div>
            </div>
        </div>
        <div class=social-icons> <a href=#><span class=icon-facebook></span></a> <a href=#><span
                    class=icon-twitter></span></a> <a href=#><span class=icon-googleplus></span></a> <a href=#><span
                    class=icon-dribble></span></a> </div>
    </header>
    <section class=cartpage>
        <div class=container>
            <div class="cartHeader clearfix">
                <h1 class=logo> <a href=index.html> <img src="{{url('public/client')}}/images/logo.png" alt=image> </a>
                </h1>
                <div class=orderId>
                    <div>
                        <p class=datetime></p>
                    </div>
                </div>
            </div>
            <div class=cartBody>
                <div class="heading clearfix">
                    <h5>confirm your order</h5>
                    <p>you have selected <span class="red cartitems"></span> product</p>
                </div>
                <ul>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>stt</th>
                                <th>name</th>
                                <th>image</th>
                                <th>price</th>
                                <th>quantity</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart->items as $item)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$item['name']}}</td>
                                <td>
                                    <img src="{{url('public/uploads')}}/{{$item['image']}}" width=100 alt="">
                                </td>
                                <td>{{$item['quantity'] * $item['price']}}</td>
                                <td>
                                    <form action="{{route('cart.update',$item['id'])}}" method="get" role="form">
                                        <input type="number" class="form-control" name="quantity " value="{{$item['quantity']}}">
                                       
                                       <button type="submit" class="btn btn-default">update</button>
                                       
                                    </form>
                                </td>
                                <td>
                                    <a href="{{route('cart.remove',$item['id'])}}" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </ul>
                <div class=cart-meta>
                    <div class=clearfix>
                        <div class=item-content>
                            <div>
                                <h4>your total order value is</h4>
                                <p> After added all tax</p>
                            </div>
                        </div>
                        <div class=item-price> <span id=carttotal>$44</span> </div>
                    </div>
                </div>
                <div class=mail-cart>
                    <h3><span>your</span> details</h3>
                    <form data-parsley-validate class="formcontact row" id=orderform>
                        <div class=form-group> <input type=text class=form-control name=name placeholder=Name required
                                data-parsley-required-message="Please insert Name"> </div>
                        <div class=form-group> <input type=text class=form-control name=phone placeholder="Phone "
                                required data-parsley-required-message="Please insert Phone No"> </div>
                        <div class=form-group> <input type=email class=form-control name=email placeholder=Email
                                required data-parsley-required-message="Please insert Email"> </div>
                        <div class=form-group> <input type=text class=form-control name=address placeholder=Address
                                required data-parsley-required-message="Please insert address"> </div> <input
                            type=hidden name=products id=selectedProducts> <button type=submit id=send>order
                            now</button>
                        <div class=checkbox> <label> <input type=checkbox>Confirm and Proceed </label> </div>
                        <div class="ajaxmessage for-orderform hidden container"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class=upper>
            <div class=container>
                <h2>Let's visit our</h2>
                <h3>Shop Today</h3>
                <div> <img src="{{url('public/client')}}/images/logo.png" alt=""> </div> <a href=store.html
                    class=order-btn>Order your coffee now
                    !</a>
                <div class=footer-nav-wrapper>
                    <ul class="footer-nav clearfix">
                        <li><a href=index.html>Home</a></li>
                        <li><a href=menu.html>Menu</a></li>
                        <li><a href=gallery.html>Gallery</a></li>
                        <li><a href=shopcart.html>Cart</a></li>
                        <li><a href=contactus.html>Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=lower>
            <div class=container> <a href=# class=back-to-top><i class="fa fa-angle-up"></i></a> <small>&copy; 2015
                    0efforttheme. Trademarks and brands are the property of their respective owners.</small> </div>
        </div>
    </footer>
    <script src="{{url('public/client')}}/scripts/vendor.js"></script>
    <script src="{{url('public/client')}}/scripts/plugins.js"></script>
    <script src="{{url('public/client')}}/scripts/map.js"></script>
    <script src="{{url('public/client')}}/scripts/main.js"></script>