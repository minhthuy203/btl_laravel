<!DOCTYPE html>
<html class=no-js>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SYWQGYTGTE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-SYWQGYTGTE');
    </script>
    <meta charset=utf-8>
    <title>Welcome to Coffee and You | Homepage</title>
    <meta name=description content="">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href=favicon.ico>
    <link rel=apple-touch-icon href="{{url('public/client')}}/apple-touch-icon.png">
    <!-- Place favicon.ico and apple-touch-icon.png" in the root directory -->
    <link rel=stylesheet href="{{url('public/client')}}/styles/vendor.css">
    <link rel=stylesheet href="{{url('public/client')}}/styles/main.css">
    <script src="{{url('public/client')}}/scripts/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />

<body class=home-page>
    <!--[if lt IE 10]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
    <header>
        <div class=header-body>
            <nav class="navbar navbar-default">
                <div class=container-fluid>
                    <div class=row>
                        <div class=brand> <a href=index.html>
                                <p>SINCE 1939</p> <img src="{{url('public/client')}}/images/logo.png" alt="Brand Logo" class=logo>
                            </a> </div>
                        <div class=navbar-header> <button type=button class="navbar-toggle collapsed"
                                data-toggle=collapse data-target=#coffeeNavbarPrimary aria-expanded=false> <span
                                    class=sr-only>Toggle navigation</span> <span class=icon-bar></span> <span
                                    class=icon-bar></span> <span class=icon-bar></span> </button> </div> <a
                            href=index.html class=header-logo>Coffee and You <img src="{{url('public/client')}}/images/small-logo.png" alt=""> </a>
                        <div class="collapse navbar-collapse" id=coffeeNavbarPrimary>
                            <ul class="nav navbar-nav navbar-right">
                                <li class=active><a href="{{route('home.index')}}">Home</a></li>
                                <li><a href=menu.html>Menu</a></li>
                                <li><a href=blog-list.html>blog</a></li>
                                <li> <a href=gallery.html>gallery</a></li>
                                <li><a href=store.html>store</a></li>
                                <li><a href=contactus.html>Contact</a></li>
                                <li><a href="{{route('cart.cart')}}">Cart <i class="fa fa-shopping-cart"><span
                                                >{{$cart->totalQuantity}}</span></i></a></li>
                                <li class=button-order-now> <a href=shopcart.html>Order Now</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class=banner>
                <div class=container>
                    <div class=social-icons> 
                        <a href=#>
                            <span class=icon-facebook></span>
                        </a> 
                        <a href=#>
                            <span class=icon-twitter></span>
                        </a> 
                        <a href=#>
                            <span class=icon-googleplus></span>
                        </a> 
                        <a
                            href=#><span class=icon-dribble></span>
                        </a> 
                    </div>
                    <div class=banner-image>
                        <p>SINCE 1939</p>
                        <div class=banner-img-holder>
                            <!-- <img src=""{{url('public/client')}}/images/banner/banner01.png"" alt="Banner Images">	 --> <img class=logo-cup
                                src="{{url('public/client')}}/images/banner/logo-cup.png" alt="Banner Images"> <img class=logo
                                src="{{url('public/client')}}/images/banner/logo.png" alt="Banner Images"> <img class=cup src="{{url('public/client')}}/images/banner/cup.png"
                                alt="Banner Images"> <img class=premium-text src="{{url('public/client')}}/images/banner/txt2.png"
                                alt="Banner Images"> <img class=coffee-text src="{{url('public/client')}}/images/banner/txt1.png"
                                alt="Banner Images">
                            <div class=coffee-drop> <img src="{{url('public/client')}}/images/banner/coffee-drop3.png" alt="Banner Images"> </div>
                        </div>
                    </div> <a href=menu.html class=button-menu>Menu</a>
                </div>
            </div>
        </div>
    </header>
    <section class=special-menu>
        <div class=container>
            <div>
                <div class=section-number><span>01</span></div>
                <div class=section-heading>
                    <h1><span>Our Special</span></h1>
                    <h2>Menu</h2>
                </div>
            </div>
            <div class=pricing-table>
                <div class=pricing-detail>
                    <figure>
                        <div class=image> <img src="{{url('public/client')}}/images/coffee-cup.png" alt=""> </div>
                        <figcaption>
                            <h3>Good Morning</h3>
                            <p>Lorem ipsum Qui mollit sit elit Ut.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="pricing-carte clearfix scrollbar" id=style-1>
                    <div class=cuisine-wrapper>
                        <div class="cuisine clearfix">
                            <div class=card-left>
                                <div class=cuisine-name>01 / Cappucino</div>
                                <div class=cuisine-detail>Lorem ipsum Culpa in ut aute dolor minim irure elit pariatur
                                    mollit dolor</div>
                            </div>
                            <div class=card-right>
                                <div class=cuisine-price>$12.99</div>
                                <div class=cuisine-heart><i class="fa fa-heart"></i>10</div>
                            </div>
                        </div>
                    </div>
                    <div class=cuisine-wrapper>
                        <div class="cuisine clearfix">
                            <div class=card-left>
                                <div class=cuisine-name>01 / Irish Coffee </div>
                                <div class=cuisine-detail>Lorem ipsum Culpa in ut aute dolor minim irure elit pariatur
                                    mollit dolor</div>
                            </div>
                            <div class=card-right>
                                <div class=cuisine-price>$12.99</div>
                                <div class=cuisine-heart><i class="fa fa-heart"></i>10</div>
                            </div>
                        </div>
                    </div>
                    <div class=cuisine-wrapper>
                        <div class="cuisine clearfix">
                            <div class=card-left>
                                <div class=cuisine-name>01 / Brandy Coffee</div>
                                <div class=cuisine-detail>Lorem ipsum Culpa in ut aute dolor minim irure elit pariatur
                                    mollit dolor</div>
                            </div>
                            <div class=card-right>
                                <div class=cuisine-price>$12.99</div>
                                <div class=cuisine-heart><i class="fa fa-heart"></i>10</div>
                            </div>
                        </div>
                    </div>
                    <div class=cuisine-wrapper>
                        <div class="cuisine clearfix">
                            <div class=card-left>
                                <div class=cuisine-name>01 / Cafe Mendoza</div>
                                <div class=cuisine-detail>Lorem ipsum Culpa in ut aute dolor minim irure elit pariatur
                                    mollit dolor</div>
                            </div>
                            <div class=card-right>
                                <div class=cuisine-price>$12.99</div>
                                <div class=cuisine-heart><i class="fa fa-heart"></i>10</div>
                            </div>
                        </div>
                    </div>
                    <div class=cuisine-wrapper>
                        <div class="cuisine clearfix">
                            <div class=card-left>
                                <div class=cuisine-name>01 / Keoke Coffee</div>
                                <div class=cuisine-detail>Lorem ipsum Culpa in ut aute dolor minim irure elit pariatur
                                    mollit dolor</div>
                            </div>
                            <div class=card-right>
                                <div class=cuisine-price>$12.99</div>
                                <div class=cuisine-heart><i class="fa fa-heart"></i>10</div>
                            </div>
                        </div>
                    </div>
                    <div class=cuisine-wrapper>
                        <div class="cuisine clearfix">
                            <div class=card-left>
                                <div class=cuisine-name>01 / English Coffee</div>
                                <div class=cuisine-detail>Lorem ipsum Culpa in ut aute dolor minim irure elit pariatur
                                    mollit dolor</div>
                            </div>
                            <div class=card-right>
                                <div class=cuisine-price>$12.99</div>
                                <div class=cuisine-heart><i class="fa fa-heart"></i>10</div>
                            </div>
                        </div>
                    </div>
                    <div class=cuisine-wrapper>
                        <div class="cuisine clearfix">
                            <div class=card-left>
                                <div class=cuisine-name>01 / Calypso Coffee </div>
                                <div class=cuisine-detail>Lorem ipsum Culpa in ut aute dolor minim irure elit pariatur
                                    mollit dolor</div>
                            </div>
                            <div class=card-right>
                                <div class=cuisine-price>$12.99</div>
                                <div class=cuisine-heart><i class="fa fa-heart"></i>10</div>
                            </div>
                        </div>
                    </div>
                    <div class=cuisine-wrapper>
                        <div class="cuisine clearfix">
                            <div class=card-left>
                                <div class=cuisine-name>01 / Jamaican Coffee</div>
                                <div class=cuisine-detail>Lorem ipsum Culpa in ut aute dolor minim irure elit pariatur
                                    mollit dolor</div>
                            </div>
                            <div class=card-right>
                                <div class=cuisine-price>$12.99</div>
                                <div class=cuisine-heart><i class="fa fa-heart"></i>10</div>
                            </div>
                        </div>
                    </div>
                    <div class=cuisine-wrapper>
                        <div class="cuisine clearfix">
                            <div class=card-left>
                                <div class=cuisine-name>01 / Shin Shin Coffee</div>
                                <div class=cuisine-detail>Lorem ipsum Culpa in ut aute dolor minim irure elit pariatur
                                    mollit dolor</div>
                            </div>
                            <div class=card-right>
                                <div class=cuisine-price>$12.99</div>
                                <div class=cuisine-heart><i class="fa fa-heart"></i>10</div>
                            </div>
                        </div>
                    </div>
                    <div class=cuisine-wrapper>
                        <div class="cuisine clearfix">
                            <div class=card-left>
                                <div class=cuisine-name>01 / Baileys Irish Cream Coffee</div>
                                <div class=cuisine-detail>Lorem ipsum Culpa in ut aute dolor minim irure elit pariatur
                                    mollit dolor</div>
                            </div>
                            <div class=card-right>
                                <div class=cuisine-price>$12.99</div>
                                <div class=cuisine-heart><i class="fa fa-heart"></i>10</div>
                            </div>
                        </div>
                    </div>
                    <div class=cuisine-wrapper>
                        <div class="cuisine clearfix">
                            <div class=card-left>
                                <div class=cuisine-name>01 / Monk's Coffee</div>
                                <div class=cuisine-detail>Lorem ipsum Culpa in ut aute dolor minim irure elit pariatur
                                    mollit dolor</div>
                            </div>
                            <div class=card-right>
                                <div class=cuisine-price>$12.99</div>
                                <div class=cuisine-heart><i class="fa fa-heart"></i>10</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-types-available row">
                <div class=row>
                    <div class=order-type-wrapper>
                        <div class="order-type type-one">
                            <figure class=clearfix>
                                <div class=img-holder> <img src="{{url('public/client')}}/images/order-type1.png" alt=""> </div>
                                <figcaption>
                                    <h3><span>Strong</span> afternoon</h3> <a class="button-primary btn" href=#>Order
                                        Now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=order-type-wrapper>
                        <div class="order-type type-two">
                            <figure>
                                <div class=img-holder> <img src="{{url('public/client')}}/images/order-type2.png" alt=""> </div>
                                <figcaption>
                                    <h3><span>Cookie</span> & more</h3> <a class="button-primary btn" href=#>Order
                                        Now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class=order-type-wrapper>
                        <div class="order-type type-three">
                            <figure>
                                <div class=img-holder> <img src="{{url('public/client')}}/images/order-type3.png" alt=""> </div>
                                <figcaption>
                                    <h3><span>Special</span> flavors</h3> <a class="button-primary btn" href=#>Order
                                        Now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book-order row">
                <div class=book-details>
                    <h3>Book your coffee now</h3>
                    <h5>Call NOW @ our toll free number</h5>
                </div>
                <div class=order-number>
                    <h2>+0987654321</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="midpage-banner1 banner-section">
        <div class=container>
            <div class=img-holder> <img class=milk-cup src="{{url('public/client')}}/images/milk-pour-cup.png" alt=""> <img class=cup
                    src="{{url('public/client')}}/images/pour-cup.png" alt="">
                <div class=milk> <img src="{{url('public/client')}}/images/milk-pour2.png" alt=""> </div> <img class=milk-drop
                    src="{{url('public/client')}}/images/milk-drops.png" alt="">
            </div> 
            <!-- <img src=""{{url('public/client')}}/images/milk-pour-cup.png"" alt=""> -->
            <div class=banner1-details>
                <h3>We are "Coffee and You"</h3>
                <h3>A premium coffee shop</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aliquid aliquam asperiores, saepe
                    alias dignissimos consectetur ea cum sint tenetur magnam. Illo quasi neque cupiditate beatae optio
                    eos iusto, architecto!</p> <a href=# class=button-type-three>Know More</a>
            </div>
        </div>
    </section>
    <section class=service-section>
        <div class=container>
            <div>
                <div class=section-number><span>03</span></div>
                <div class=section-heading>
                    <h1><span>Our Special</span></h1>
                    <h2>Services</h2>
                </div>
            </div>
            <div class=row> <img src="{{url('public/client')}}/images/service-img.jpg" class=service-side-img alt="">
                <div class=service-details>
                    <h3>Coffee and You</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt voluptatum iusto aspernatur. Odio
                        dignissimos facere ducimus id quo amet similique suscipit, asperiores eveniet quis vero beatae
                        nobis veritatis ab ipsum!</p>
                    <div class=row>
                        <div class=service-wrapper> <a href="" class=service-item><span>Service 01</span></a> </div>
                        <div class=service-wrapper> <a href="" class=service-item><span>Service 02</span></a> </div>
                        <div class=service-wrapper> <a href="" class=service-item><span>Service 03</span></a> </div>
                        <div class=service-wrapper> <a href="" class=service-item><span>Service 04</span></a> </div>
                        <div class=service-wrapper> <a href="" class=service-item><span>Service 05</span></a> </div>
                        <div class=service-wrapper> <a href="" class=service-item><span>Service 06</span></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="midpage-banner2 banner-section">
        <div class=container>
            <h3>A morning without <span>Coffee </span> is like sleep</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nam, voluptatibus amet eius. Aperiam
                voluptate hic fugiat repudiandae, aliquid culpa error doloribus necessitatibus quod, iste quas est sint
                corporis ipsa!</p> <a href="" class=button-type-three>Know More</a>
        </div>
    </section>
    <section class=table-book>
        <div class=container>
            <div>
                <div class=section-number><span>05</span></div>
                <div class=section-heading>
                    <h1><span>Book your</span></h1>
                    <h2>Table</h2>
                </div>
            </div>
            <div class="reservation-form clearfix">
                <div class="imgLiquidFill imgLiquid"> <img src="{{url('public/client')}}/images/book-table-img.jpg" alt=""> </div>
                <form id=reservation-form class=clearfix data-parsley-validate>
                    <h3>Online <span>Reservation Form</span></h3>
                    <div class=row>
                        <div class="form-group reservation-for"> <label for=reservationFor>Table for</label>
                            <div class=selectbox> </div>
                            <div class=selectbox>
                                <div class=selectbox_toggle> All items <span class=selectbox__arrow></span> </div>
                                <div class=selectbox_itemlist> <span class=selectbox__item data-value="2 person">2
                                        person</span> <span class=selectbox__item data-value="4 person">4 person</span>
                                    <span class=selectbox__item data-value="6 person">6 person</span>
                                </div> <input type=text id=reservationFor name=person class=selectbox__input>
                            </div>
                        </div>
                        <div class="form-group occassion"> <label for=occassion>Occassion</label>
                            <div class=selectbox>
                                <div class=selectbox_toggle> All items <span class=selectbox__arrow></span> </div>
                                <div class=selectbox_itemlist> <span class=selectbox__item
                                        data-value=Birthday>Birthday</span> <span class=selectbox__item
                                        data-value=Anniversary>Anniversary</span> <span class=selectbox__item
                                        data-value=Holiday>Holiday</span> </div> <input type=text id=occassion
                                    name=occassion class=selectbox__input>
                            </div>
                        </div>
                    </div>
                    <div class=row>
                        <div class="form-group name-sectn"> <label for=name>Your Name</label> <input type=text
                                class=form-control name=name id=name placeholder=Name required> </div>
                        <div class="form-group mail-sectn"> <label for=inputEmail>Your Email ID</label> <input
                                type=email class=form-control name=inputEmail id=inputEmail placeholder=Email required>
                        </div>
                    </div>
                    <div class=form-group> <label for=contactMessage>Leave a message</label>
                        <div> <textarea name=contactMessage class=form-control id=contactMessage
                                placeholder="Write your text" required></textarea> </div>
                    </div> <button type=submit class=button-type-three>Order Now</button>
                    <div class="ajaxmessage for-reservation hidden"></div>
                </form>
            </div>
        </div>
    </section>
    <section class="banner-section midpage-banner3">
        <div class=container>
            <div class=row>
                <figure class=offer-detail> <img src="{{url('public/client')}}/images/percent-off.png" alt="offer image">
                    <figcaption>
                        <p>On all flavors</p>
                        <h3>Friday Special</h3>
                        <p>Offer valid only on Fridays from 1st July to 30th August 2015</p>
                    </figcaption>
                </figure>
                <div class=coupon-code>
                    <div class=code-wrapper> <a class="coupon button-primary type2" href=#> <img src="{{url('public/client')}}/images/qr-code.jpg""
                                alt="qr code"> <span>FS21321sdfsdfer1</span> </a> </div>
                    <!-- <img src=""{{url('public/client')}}/images/coupon.jpg"" alt="coupon image"> -->
                </div>
            </div>
        </div>
    </section>
    <section class=online-store>
        <div class=container>
            <div>
                <div class=section-number><span>06</span></div>
                <div class=section-heading>
                    <h1><span>Our Online</span></h1>
                    <h2>Store</h2>
                </div>
            </div>
            <ul class="categories row">
                <li><button data-filter=* class=selected>All</button></li>
                <li><button data-filter=.type1>Coffee</button></li>
                <li><button data-filter=.type2>Beans</button></li>
                <li><button data-filter=.type3>Organic</button></li>
                <li><button data-filter=.type4>Type 4</button></li>
                <li><button data-filter=.type5>Type 5</button></li>
            </ul>
            <x-list-product :products="$product" title="san pham hien co" />
        </div>
    </section>
    <section class=testimonial-sectn>
        <div class=container>
            <div>
                <div class=section-number><span>07</span></div>
                <div class="section-heading with-gray">
                    <h1><span>Our Happy</span></h1>
                    <h2>Visitors</h2>
                </div>
            </div>
            <div class="row testimonial">
                <ul class="clearfix testimonial-owl">
                    <li class="testimonial-item item clearfix">
                        <div class="imgLiquidFill imgLiquid"> <img src="{{url('public/client')}}/images/testimonial/member1.jpg" alt=""> </div>
                        <div class=name-text>
                            <h3>William</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, commodi labore
                                veritatis quasi fugiat, officiis eligendi architecto molestias non soluta qui voluptate
                                ex quam velit laboriosam esse fuga sequi. Tenetur.</p>
                        </div>
                    </li>
                    <li class="testimonial-item item clearfix">
                        <div class="imgLiquidFill imgLiquid"> <img src="{{url('public/client')}}/images/testimonial/member02.jpg" alt=image> </div>
                        <div class=name-text>
                            <h3>maria</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, commodi labore
                                veritatis quasi fugiat, officiis eligendi architecto molestias non soluta qui voluptate
                                ex quam velit laboriosam esse fuga sequi. Tenetur.</p>
                        </div>
                    </li>
                    <li class="testimonial-item item clearfix">
                        <div class="imgLiquidFill imgLiquid"> <img src="{{url('public/client')}}/images/testimonial/memeber03.jpg" alt=image>
                        </div>
                        <div class=name-text>
                            <h3>jhon</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, commodi labore
                                veritatis quasi fugiat, officiis eligendi architecto molestias non soluta qui voluptate
                                ex quam velit laboriosam esse fuga sequi. Tenetur.</p>
                        </div>
                    </li>
                    <li class="testimonial-item item clearfix">
                        <div class="imgLiquidFill imgLiquid"> <img src="{{url('public/client')}}/images/testimonial/member04.jpg" alt=image> </div>
                        <div class=name-text>
                            <h3>david</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, commodi labore
                                veritatis quasi fugiat, officiis eligendi architecto molestias non soluta qui voluptate
                                ex quam velit laboriosam esse fuga sequi. Tenetur.</p>
                        </div>
                    </li>
                    <li class="testimonial-item item clearfix">
                        <div class="imgLiquidFill imgLiquid"> <img src="{{url('public/client')}}/images/testimonial/member05.jpg" alt=image> </div>
                        <div class=name-text>
                            <h3>maria</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, commodi labore
                                veritatis quasi fugiat, officiis eligendi architecto molestias non soluta qui voluptate
                                ex quam velit laboriosam esse fuga sequi. Tenetur.</p>
                        </div>
                    </li>
                    <li class="testimonial-item item clearfix">
                        <div class="imgLiquidFill imgLiquid"> <img src="{{url('public/client')}}/images/testimonial/member06.jpg" alt=image> </div>
                        <div class=name-text>
                            <h3>luiz</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, commodi labore
                                veritatis quasi fugiat, officiis eligendi architecto molestias non soluta qui voluptate
                                ex quam velit laboriosam esse fuga sequi. Tenetur.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <figure class="testimonial-text clearfix"> <img src="{{url('public/client')}}/images/testi-img.png" alt="">
                <figcaption>
                    <h3>Our happy coffee lover and their awesome comments</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt porro aliquid laborum omnis labore
                        sit, pariatur neque veritatis quaerat tempore mollitia, tempora placeat. Recusandae ullam
                        assumenda ipsa, eum laboriosam eius.</p>
                </figcaption>
            </figure>
        </div>
    </section>
    <section class=events-slide>
        <div class=container>
            <div>
                <div class=section-number><span>08</span></div>
                <div class=section-heading>
                    <h1><span>View our</span></h1>
                    <h2>Events</h2>
                </div>
            </div>
            <div class=event-container id=event-owl>
                <div class="event-single clearfix"> <img class=star-mark src="{{url('public/client')}}/images/star-fav.png" alt="">
                    <div class="imgLiquidFill imgLiquid event-img"> <img src="{{url('public/client')}}/images/event-img.jpg" alt=""> </div>
                    <div class=event-desc>
                        <h3>Event name goes here</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus sed, qui quam ipsa nobis,
                            dolore assumenda culpa earum esse accusantium quas quidem iusto in aut reiciendis,
                            provident, deserunt iste perferendis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum aliquam exercitationem
                            repellat, harum minima, tenetur esse! Aut neque ex, expedita fugiat, alias animi consequatur
                            culpa dignissimos laboriosam non. Eum, deleniti.</p>
                        <div class=event-timer data-date=2016/10/31>
                            <div class=time-circle>
                                <h3>25</h3>
                                <h5>days</h5>
                            </div>
                            <div class=time-circle>
                                <h3>18</h3>
                                <h5>hours</h5>
                            </div>
                            <div class=time-circle>
                                <h3>59</h3>
                                <h5>minutes</h5>
                            </div>
                            <div class=time-circle>
                                <h3>44</h3>
                                <h5>seconds</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event-single clearfix"> <img class=star-mark src="{{url('public/client')}}/images/star-fav.png" alt="">
                    <div class="imgLiquidFill imgLiquid event-img"> <img src="{{url('public/client')}}/images/event-img.jpg" alt=""> </div>
                    <div class=event-desc>
                        <h3>Event name goes here 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus sed, qui quam ipsa nobis,
                            dolore assumenda culpa earum esse accusantium quas quidem iusto in aut reiciendis,
                            provident, deserunt iste perferendis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum aliquam exercitationem
                            repellat, harum minima, tenetur esse! Aut neque ex, expedita fugiat, alias animi consequatur
                            culpa dignissimos laboriosam non. Eum, deleniti.</p>
                        <div class=event-timer data-date=2016/11/30>
                            <div class=time-circle>
                                <h3>25</h3>
                                <h5>days</h5>
                            </div>
                            <div class=time-circle>
                                <h3>18</h3>
                                <h5>hours</h5>
                            </div>
                            <div class=time-circle>
                                <h3>59</h3>
                                <h5>minutes</h5>
                            </div>
                            <div class=time-circle>
                                <h3>44</h3>
                                <h5>seconds</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event-single clearfix"> <img class=star-mark src="{{url('public/client')}}/images/star-fav.png" alt="">
                    <div class="imgLiquidFill imgLiquid event-img"> <img src="{{url('public/client')}}/images/event-img.jpg" alt=""> </div>
                    <div class=event-desc>
                        <h3>Event name goes here 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus sed, qui quam ipsa nobis,
                            dolore assumenda culpa earum esse accusantium quas quidem iusto in aut reiciendis,
                            provident, deserunt iste perferendis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum aliquam exercitationem
                            repellat, harum minima, tenetur esse! Aut neque ex, expedita fugiat, alias animi consequatur
                            culpa dignissimos laboriosam non. Eum, deleniti.</p>
                        <div class=event-timer data-date=2016/11/1>
                            <div class=time-circle>
                                <h3>25</h3>
                                <h5>days</h5>
                            </div>
                            <div class=time-circle>
                                <h3>18</h3>
                                <h5>hours</h5>
                            </div>
                            <div class=time-circle>
                                <h3>59</h3>
                                <h5>minutes</h5>
                            </div>
                            <div class=time-circle>
                                <h3>44</h3>
                                <h5>seconds</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event-single clearfix"> <img class=star-mark src="{{url('public/client')}}/images/star-fav.png" alt="">
                    <div class="imgLiquidFill imgLiquid event-img"> <img src="{{url('public/client')}}/images/event-img.jpg" alt=""> </div>
                    <div class=event-desc>
                        <h3>Event name goes here 5</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus sed, qui quam ipsa nobis,
                            dolore assumenda culpa earum esse accusantium quas quidem iusto in aut reiciendis,
                            provident, deserunt iste perferendis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum aliquam exercitationem
                            repellat, harum minima, tenetur esse! Aut neque ex, expedita fugiat, alias animi consequatur
                            culpa dignissimos laboriosam non. Eum, deleniti.</p>
                        <div class=event-timer data-date=2016/10/30>
                            <div class=time-circle>
                                <h3>25</h3>
                                <h5>days</h5>
                            </div>
                            <div class=time-circle>
                                <h3>18</h3>
                                <h5>hours</h5>
                            </div>
                            <div class=time-circle>
                                <h3>59</h3>
                                <h5>minutes</h5>
                            </div>
                            <div class=time-circle>
                                <h3>44</h3>
                                <h5>seconds</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event-single clearfix"> <img class=star-mark src="{{url('public/client')}}/images/star-fav.png" alt="">
                    <div class="imgLiquidFill imgLiquid event-img"> <img src="{{url('public/client')}}/images/event-img.jpg" alt=""> </div>
                    <div class=event-desc>
                        <h3>Event name goes here</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus sed, qui quam ipsa nobis,
                            dolore assumenda culpa earum esse accusantium quas quidem iusto in aut reiciendis,
                            provident, deserunt iste perferendis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum aliquam exercitationem
                            repellat, harum minima, tenetur esse! Aut neque ex, expedita fugiat, alias animi consequatur
                            culpa dignissimos laboriosam non. Eum, deleniti.</p>
                        <div class=event-timer data-date=2016/10/29>
                            <div class=time-circle>
                                <h3>25</h3>
                                <h5>days</h5>
                            </div>
                            <div class=time-circle>
                                <h3>18</h3>
                                <h5>hours</h5>
                            </div>
                            <div class=time-circle>
                                <h3>59</h3>
                                <h5>minutes</h5>
                            </div>
                            <div class=time-circle>
                                <h3>44</h3>
                                <h5>seconds</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event-single clearfix"> <img class=star-mark src="{{url('public/client')}}/images/star-fav.png" alt="">
                    <div class="imgLiquidFill imgLiquid event-img"> <img src="{{url('public/client')}}/images/event-img.jpg" alt=""> </div>
                    <div class=event-desc>
                        <h3>Event name goes here</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus sed, qui quam ipsa nobis,
                            dolore assumenda culpa earum esse accusantium quas quidem iusto in aut reiciendis,
                            provident, deserunt iste perferendis.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum aliquam exercitationem
                            repellat, harum minima, tenetur esse! Aut neque ex, expedita fugiat, alias animi consequatur
                            culpa dignissimos laboriosam non. Eum, deleniti.</p>
                        <div class=event-timer data-date=2016/10/28>
                            <div class=time-circle>
                                <h3>25</h3>
                                <h5>days</h5>
                            </div>
                            <div class=time-circle>
                                <h3>18</h3>
                                <h5>hours</h5>
                            </div>
                            <div class=time-circle>
                                <h3>59</h3>
                                <h5>minutes</h5>
                            </div>
                            <div class=time-circle>
                                <h3>44</h3>
                                <h5>seconds</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="midpage-banner4 banner-section" id=midpage-banner4>
        <div class="container clearfix">
            <div class=banner4-img-holder> <img src="{{url('public/client')}}/images/homepage/ipad.png" height=473 width=581 class=ipad alt="">
                <img src="{{url('public/client')}}/images/homepage/cap.png" height=206 width=240 class=cap alt="">
            </div>
            <div class=banner4-details>
                <h3>Our shop</h3>
                <h3>at your fingertips</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aliquid aliquam asperiores, saepe
                    alias dignissimos consectetur ea cum sint tenetur magnam. Illo quasi neque cupiditate beatae optio
                    eos iusto, architecto!</p> <a href=# class="button-type-three download"><span>Download
                        now</span></a>
            </div>
        </div>
    </section>
    <section class=contact-sectn>
        <div class=container>
            <div>
                <div class=section-number><span>09</span></div>
                <div class=section-heading>
                    <h1><span>Contact</span></h1>
                    <h2>With us</h2>
                </div>
            </div>
        </div>
        <div class=contact-us>
            <div class=add>
                <div class=add-inner-wrapper>
                    <h2> <img src="{{url('public/client')}}/images/contact-img.png" alt=""> <span>Coffee and you</span> </h2>
                    <h3><span>44</span> Park Street</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div id=map-canvas1 >
                <iframe style="width:759.6px; height:700px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.658663641744!2d105.78131221451449!3d21.046339485988884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3b4220c2bd%3A0x1c9e359e2a4f618c!2sB%C3%A1ch%20Khoa%20Aptech!5e0!3m2!1svi!2s!4v1661452378322!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <footer>
        <div class=upper>
            <div class=container>
                <h2>Let's visit our</h2>
                <h3>Shop Today</h3>
                <div> <img src="{{url('public/client')}}/images/logo.png" alt=""> </div> <a href=store.html class=order-btn>Order your coffee now
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
            <div class=container> <a href=# class=back-to-top><i class="fa-solid fa-angle-up"></i></a> <small>&copy; 2016
                    0efforttheme. Trademarks and brands are the property of their respective owners.</small> </div>
        </div>
    </footer>
</body>
<script src="{{url('public/client')}}/scripts/vendor.js"></script>
<script src="{{url('public/client')}}/scripts/plugins.js"></script>
<script src="{{url('public/client')}}/scripts/map.js"></script>
<script src="{{url('public/client')}}/scripts/main.js"></script>