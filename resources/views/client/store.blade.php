<!DOCTYPE html>
<html class=no-js>

<head>
    <meta charset=utf-8>
    <title>Welcome to Coffee and You | Store page</title>
    <meta name=description content="">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href=favicon.ico>
    <link rel=apple-touch-icon href=apple-touch-icon.png>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel=stylesheet href=styles/vendor.css>
    <link rel=stylesheet href=styles/main.css>
    <script src=scripts/vendor/modernizr.js></script>

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
                            href=index.html class=header-logo>Coffee and You <img src=images/small-logo.png alt=""> </a>
                        <div class="collapse navbar-collapse" id=coffeeNavbarPrimary>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href=index.html>Home</a></li>
                                <li><a href=menu.html>Menu</a></li>
                                <li><a href=blog-list.html>blog</a></li>
                                <li> <a>gallery</a>
                                    <ul class=submenu>
                                        <li> <a href=#>Fluid</a>
                                            <ul class=submenu>
                                                <li><a href=masonry-layout.html>masonary</a></li>
                                                <li><a href=galleryIsotope.html>isotope</a></li>
                                            </ul>
                                        </li>
                                        <li> <a href=#>Static</a>
                                            <ul class=submenu>
                                                <li><a href=gallery.html>3 column gallery page</a></li>
                                                <li><a href=singlepage-gallery.html>single page gallery</a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class=active><a href=store.html>store</a></li>
                                <li><a href=contactus.html>Contact</a></li>
                                <li><a href=shopcart.html>Cart <i class="fa fa-shopping-cart"><span
                                                class=cartitems>0</span></i></a></li>
                                <li class=button-order-now> <a href=shopcart.html>Order Now</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="banner clearfix">
                <div class=banner-img> <img src=images/cup.png alt=image> </div>
                <div class=banner-text>
                    <h2>Our special & exclusive <span>product</span></h2>
                </div>
            </div>
        </div>
        <div class=social-icons> <a href=#><span class=icon-facebook></span></a> <a href=#><span
                    class=icon-twitter></span></a> <a href=#><span class=icon-googleplus></span></a> <a href=#><span
                    class=icon-dribble></span></a> </div>
    </header>
    <section class=productPage>
        <div class=container>
            <ul class="categories row">
                <li><button data-filter=* class=selected>All</button></li>
                <li><button data-filter=.type1>Coffee</button></li>
                <li><button data-filter=.type2>Beans</button></li>
                <li><button data-filter=.type3>Organic</button></li>
                <li><button data-filter=.type4>Type 4</button></li>
                <li><button data-filter=.type5>Type 5</button></li>
            </ul>
            <div class="store-product-list row">
                <div class="store-product-wrapper grid-item type1">
                    <div class=store-product>
                        <div class="imgLiquidFill imgLiquid item-image"> <img src=images/blog-list/blog-img2.jpg
                                alt="product item"> </div>
                        <div class=product-detail>
                            <div class=product-rate>$22</div>
                            <h3>Café Bombón</h3>
                            <p>1 pack 250 gm</p>
                        </div>
                        <div class="clearfix add-buy"> <a href=# class="add-cart addToCart" data-productid=1
                                data-productname="Café Bombón" data-productprice=22
                                data-productimage=images/blog-list/blog-img2.jpg>Add to Cart</a> <a href=shopcart.html
                                class=buy-btn>Buy now</a> </div>
                    </div>
                </div>
                <div class="store-product-wrapper grid-item type3">
                    <div class=store-product>
                        <div class="imgLiquidFill imgLiquid item-image"> <img src=images/book-table-img.jpg
                                alt="product item"> </div>
                        <div class=product-detail>
                            <div class=product-rate>$29</div>
                            <h3>Irish coffee</h3>
                            <p>1 pack 250 gm</p>
                        </div>
                        <div class="clearfix add-buy"> <a href=# class="add-cart addToCart" data-productid=2
                                data-productname="Irish coffee" data-productprice=29
                                data-productimage=images/book-table-img.jpg>Add to Cart</a> <a href=shopcart.html
                                class=buy-btn>Buy now</a> </div>
                    </div>
                </div>
                <div class="store-product-wrapper grid-item type3">
                    <div class=store-product>
                        <div class="imgLiquidFill imgLiquid item-image"> <img src=images/order-type2.png
                                alt="product item"> </div>
                        <div class=product-detail>
                            <div class=product-rate>$39</div>
                            <h3>Frappuccino</h3>
                            <p>1 pack 250 gm</p>
                        </div>
                        <div class="clearfix add-buy"> <a href=# class="add-cart addToCart" data-productid=3
                                data-productname=Frappuccino data-productprice=39
                                data-productimage=images/order-type2.png>Add to Cart</a> <a href=shopcart.html
                                class=buy-btn>Buy now</a> </div>
                    </div>
                </div>
                <div class="store-product-wrapper grid-item type4 type3">
                    <div class=store-product>
                        <div class="imgLiquidFill imgLiquid item-image"> <img src=images/store/store-product.jpg
                                alt="product item"> </div>
                        <div class=product-detail>
                            <div class=product-rate>$20</div>
                            <h3>Eiskaffee</h3>
                            <p>1 pack 250 gm</p>
                        </div>
                        <div class="clearfix add-buy"> <a href=# class="add-cart addToCart" data-productid=4
                                data-productname=Eiskaffee data-productprice=20
                                data-productimage=images/store/store-product.jpg>Add to Cart</a> <a href=shopcart.html
                                class=buy-btn>Buy now</a> </div>
                    </div>
                </div>
                <div class="store-product-wrapper grid-item type3">
                    <div class=store-product>
                        <div class="imgLiquidFill imgLiquid item-image"> <img src=images/blog-list/blog-img1.jpg
                                alt="product item"> </div>
                        <div class=product-detail>
                            <div class=product-rate>$19</div>
                            <h3>Iced Coffee</h3>
                            <p>1 pack 250 gm</p>
                        </div>
                        <div class="clearfix add-buy"> <a href=# class="add-cart addToCart" data-productid=5
                                data-productname="Iced Coffee" data-productprice=19
                                data-productimage=images/blog-list/blog-img1.jpg>Add to Cart</a> <a href=shopcart.html
                                class=buy-btn>Buy now</a> </div>
                    </div>
                </div>
                <div class="store-product-wrapper grid-item type2">
                    <div class=store-product>
                        <div class="imgLiquidFill imgLiquid item-image"> <img src=images/blog-list/blog-img3.jpg
                                alt="product item"> </div>
                        <div class=product-detail>
                            <div class=product-rate>$79</div>
                            <h3>Cortado</h3>
                            <p>1 pack 250 gm</p>
                        </div>
                        <div class="clearfix add-buy"> <a href=# class="add-cart addToCart" data-productid=6
                                data-productname=Cortado data-productprice=79
                                data-productimage=images/blog-list/blog-img3.jpg>Add to Cart</a> <a href=shopcart.html
                                class=buy-btn>Buy now</a> </div>
                    </div>
                </div>
                <div class="store-product-wrapper grid-item type2">
                    <div class=store-product>
                        <div class="imgLiquidFill imgLiquid item-image"> <img src=images/blog-list/blog-img4.jpg
                                alt="product item"> </div>
                        <div class=product-detail>
                            <div class=product-rate>$49</div>
                            <h3>Mochasippi</h3>
                            <p>1 pack 250 gm</p>
                        </div>
                        <div class="clearfix add-buy"> <a href=# class="add-cart addToCart" data-productid=7
                                data-productname=Mochasippi data-productprice=49
                                data-productimage=images/blog-list/blog-img4.jpg>Add to Cart</a> <a href=shopcart.html
                                class=buy-btn>Buy now</a> </div>
                    </div>
                </div>
                <div class="store-product-wrapper grid-item type5 type1">
                    <div class=store-product>
                        <div class="imgLiquidFill imgLiquid item-image"> <img src=images/blog-dtl/coffeebeans.jpg
                                alt="product item"> </div>
                        <div class=product-detail>
                            <div class=product-rate>$39</div>
                            <h3>Vienna Coffee</h3>
                            <p>1 pack 250 gm</p>
                        </div>
                        <div class="clearfix add-buy"> <a href=# class="add-cart addToCart" data-productid=8
                                data-productname="Vienna Coffee" data-productprice=39
                                data-productimage=images/blog-dtl/coffeebeans.jpg>Add to Cart</a> <a href=shopcart.html
                                class=buy-btn>Buy now</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class=upper>
            <div class=container>
                <h2>Let's visit our</h2>
                <h3>Shop Today</h3>
                <div> <img src=images/logo.png alt=""> </div> <a href=store.html class=order-btn>Order your coffee now
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
    <script src=scripts/vendor.js></script>
    <script src=scripts/plugins.js></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src=scripts/main.js></script>