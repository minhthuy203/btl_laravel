
"use strict";!function(a){function b(){new Date-s<u?setTimeout(b,u):(t=!1,w=v.width(),a(document).trigger("coffeeResizeEnd"))}function c(){if(w>992){var b=a(".reservation-form form").innerHeight();a(".reservation-form .imgLiquid").css("height",b)}}function d(){w>976&&a(".blog-item").each(function(){var b=a(this).outerHeight();a(this).find(".blog-img").css("height",b)})}function e(){w>=991&&a(".directionhover").length&&a(".directionhover  a").hoverdir({speed:400,easing:"ease-in-out"})}function f(){var a={zoom:8,scrollwheel:!1,disableDefaultUI:!0,center:new google.maps.LatLng(-34.397,150.644),styles:[{stylers:[{saturation:-100}]},{featureType:"road",elementType:"labels",stylers:[{visibility:"off"}]},{featureType:"road",elementType:"geometry",stylers:[{lightness:100},{visibility:"simplified"}]}]},b=new google.maps.Map(document.getElementById("map-canvas"),a),c="images/map-marker.png",d=new google.maps.LatLng(-34.397,150.644);new google.maps.Marker({position:d,map:b,icon:c})}function g(){F=E.length,a(".cartitems").html(F)}function h(){g(),sessionStorage.setItem("cartQuantity",F),sessionStorage.setItem("cartItems",JSON.stringify(E))}function i(b){if(b){for(var c=!0,d=0;F>d;d++)if(b.id===E[d].id){c=!1,E[d].quantity=E[d].quantity+1;break}c&&(E.push(b),g(),a(".cartitems").html(F)),h()}}function j(a,b){for(var c=0;F>c;c++)if(a===E[c].id){E.splice(c,1);break}b.parents("li").slideToggle().remove(),g(),k(),h(),0===F&&l()}function k(){if(a("#carttotal").length){G=0;for(var b=0;F>b;b++)G+=E[b].price*E[b].quantity;a("#carttotal").html("$ "+G)}}function l(){var b="";if(a("#cartItemsType2").length){for(var c=0;F>c;c++)b+=m(E[c].image,E[c].name,E[c].price,E[c].quantity,E[c].id,2);""===b&&(b='<div class="clearfix"><div class="big-content"><div class="product-cart-wrap"><h5>Sorry, you do not have any product in cart.</h5></div></div></div>'),a("#cartItemsType2").html(b)}}function m(a,b,c,d,e,f){for(var g="",h=1;5>h;h++)g+='<option value="'+h+'"'+(d===h?"selected":"")+">"+h+" product</option>";return 1===f?'<div class="clearfix"><div class="big-content"><div class="product-cart-wrap"><figure><img src="'+a+'" alt="image"></figure>  <h5>'+b+'</h5></div></div><div class="big-content medium-content productQuantity"><select class="form-control" data-id="'+e+'">'+g+'</select></div><div class="big-content small-content"><h5>$ '+c+"</h5></div></div>":'<li class="clearfix"><div class="item-content"><div class="item-image"><img src="'+a+'" alt="image"></div><div class="item-details"><h6>'+b+'</h6><div class="productQuantity"><select class="form-control" data-id="'+e+'">'+g+'</select></div><div></div></div></div><div class="item-price"><span>$ '+c+'</span></div><a href="#" class="removeProduct" data-id="'+e+'"><i class="fa fa-times"></i></a></li>'}function n(){991>=w?a(".toggle-dropdown").on("click",function(b){b.preventDefault(),a(this).next().slideToggle()}):a(".toggle-dropdown").unbind("click")}function o(a){var b=new Date,c=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],d=["January","February","March","April","May","June","July","August","September","October","November","December"],e=b.getFullYear(),f=c[b.getDay()]+"  "+b.getDate()+d[b.getMonth()]+" "+e;a.html(f)}function p(a){a.length&&a.waypoint(function(){q(a)},{offset:"95%"})}function q(a){setTimeout(function(){a.find("h1 span").addClass("animate")},100),setTimeout(function(){a.find("h2").addClass("animated fadeInUp")},600)}function r(){if(a(window).width()>750){var b=a("#midpage-banner4");b.length&&b.waypoint(function(){b.find(".ipad").addClass("animated"),b.find(".cap").addClass("animated")},{offset:"45%"});var c=a(".table-book .section-heading");p(c);var d=a(".service-section .section-heading");p(d);var e=a(".special-menu .section-heading");p(e);var f=a(".online-store .section-heading");p(f);var g=a(".testimonial-sectn .section-heading");p(g);var h=a(".events-slide .section-heading");p(h);var i=a(".contact-sectn .section-heading");p(i);var j=a(".order-types-available");j.length&&j.waypoint(function(){j.find(".order-type-wrapper:nth-of-type(1)").addClass("animated fadeInLeft"),setTimeout(function(){j.find(".order-type-wrapper:nth-of-type(2)").addClass("animated fadeInUp")},300),setTimeout(function(){j.find(".order-type-wrapper:nth-of-type(3)").addClass("animated fadeInRight")},600)},{offset:"65%"});var k=a(".service-details");k.length&&k.waypoint(function(){k.find(".service-wrapper:nth-of-type(1)").addClass("animated bounceInUp"),setTimeout(function(){k.find(".service-wrapper:nth-of-type(2)").addClass("animated bounceInUp")},100),setTimeout(function(){k.find(".service-wrapper:nth-of-type(3)").addClass("animated bounceInUp")},200),setTimeout(function(){k.find(".service-wrapper:nth-of-type(4)").addClass("animated bounceInUp")},300),setTimeout(function(){k.find(".service-wrapper:nth-of-type(5)").addClass("animated bounceInUp")},400),setTimeout(function(){k.find(".service-wrapper:nth-of-type(6)").addClass("animated bounceInUp")},500)},{offset:"45%"});var l=a(".header-body .banner-img-holder");l.length&&l.waypoint(function(){l.find(".cup").addClass("animated fadeInUp"),setTimeout(function(){l.find(".coffee-drop").addClass("poured")},500),setTimeout(function(){l.find(".premium-text").addClass("animated fadeInLeft")},2e3),setTimeout(function(){l.find(".coffee-text").addClass("animated fadeInRight")},2500)},{offset:"50%"});var m=a(".reservation-form");m.length&&m.waypoint(function(){m.addClass("animated slideInUp")},{offset:"70%"});var n=a("ul.categories");n.length&&n.waypoint(function(){n.find("li:nth-of-type(1)").addClass("animated bounceIn"),setTimeout(function(){n.find("li:nth-of-type(2)").addClass("animated bounceIn")},100),setTimeout(function(){n.find("li:nth-of-type(3)").addClass("animated bounceIn")},200),setTimeout(function(){n.find("li:nth-of-type(4)").addClass("animated bounceIn")},300),setTimeout(function(){n.find("li:nth-of-type(5)").addClass("animated bounceIn")},400),setTimeout(function(){n.find("li:nth-of-type(6)").addClass("animated bounceIn")},500)},{offset:"70%"});var o=a(".midpage-banner1 .img-holder");o.length&&o.waypoint(function(){setTimeout(function(){o.find(".cup").addClass("animated fadeInUp")},0),setTimeout(function(){o.find(".milk").addClass("animate")},1e3),setTimeout(function(){o.find(".milk-drop").addClass("appear")},2500)},{offset:"50%"});var q=a(".inner-page .banner");q.length&&q.waypoint(function(){setTimeout(function(){q.find(".banner-text h2 span").addClass("animated fadeInRight")},500),setTimeout(function(){q.find(".banner-img img").addClass("animated fadeInLeft")},1e3)},{offset:"40%"});var r=a(".menu-sectn");r.length&&(r.find(".pricing-table:nth-of-type(2)").waypoint(function(){r.find(".pricing-table:nth-of-type(2)").addClass("animated fadeInLeft")},{offset:"40%"}),r.find(".pricing-table:nth-of-type(3)").waypoint(function(){r.find(".pricing-table:nth-of-type(3)").addClass("animated fadeInRight")},{offset:"40%"}),r.find(".pricing-table:nth-of-type(4)").waypoint(function(){r.find(".pricing-table:nth-of-type(4)").addClass("animated fadeInLeft")},{offset:"40%"}),r.find(".pricing-table:nth-of-type(5)").waypoint(function(){r.find(".pricing-table:nth-of-type(5)").addClass("animated fadeInRight")},{offset:"40%"}))}}var s,t=!1,u=200,v=a(window),w=v.width();v.on("resize",function(){s=new Date,t===!1&&(t=!0,setTimeout(b,u))}),c(),d(),e(),v.on("coffeeResizeEnd",function(){c(),d(),e()}),a(".imgLiquidFill").imgLiquid(),a(".categories  li button").on("click",function(){var b=a(this);b.parents(".categories").find("button").removeClass("selected"),b.addClass("selected")});var x=a(".store-product-list");x.isotope({itemSelector:".grid-item"}),a(".categories  li button").on("click",function(b){b.preventDefault();var c=a(this).attr("data-filter");x.isotope({filter:c})});var y=a(".testimonial-owl");y.length&&y.owlCarousel({itemsCustom:[[0,1],[991,2]],autoPlay:4e3,stopOnHover:!0});var z=a("#event-owl");z.length&&z.owlCarousel({items:5,singleItem:!0,addClassActive:!0,autoPlay:!0,afterMove:function(){z.find(".owl-item .event-timer").countdown("stop"),z.find(".owl-item.active .event-timer").countdown("start")}});var A=a(".pricing-carte");A.length&&A.slimScroll({height:"100%",color:"#dc8068",allowPageScroll:!0}),0!==a("#map-canvas").length&&google.maps.event.addDomListener(window,"load",f);var B=a("#masonry-layout");if(B.length){var C=a(".grid-item"),D={isAnimated:!0,isFitWidth:!0,gutter:".gutter"};C.hide(),B.imagesLoaded(function(){C.fadeIn(),B.masonry(D)}),v.on("coffeeResizeEnd",function(){B.masonry(D)}),B.one("layoutComplete",function(){a("#galleryLoader").hide()})}var E=JSON.parse(sessionStorage.getItem("cartItems"))||[],F=E.length,G=0;if(g(),l(),k(),a(".addToCart").on("click",function(b){b.preventDefault();var c=a(this),d={id:c.data("productid"),name:c.data("productname"),price:c.data("productprice"),image:c.data("productimage"),quantity:1};i(d),c.addClass("cart-added").delay(1e3).queue(function(){a(this).removeClass("cart-added"),a(this).dequeue()})}),a(".buy-btn").on("click",function(){var b=a(this).prev(),c={id:b.data("productid"),name:b.data("productname"),price:b.data("productprice"),image:b.data("productimage"),quantity:1};void 0!==c.id&&void 0!==c.name&&void 0!==c.price&&void 0!==c.image&&i(c)}),a(".productQuantity select").on("change",function(){for(var b=a(this).val(),c=a(this).data("id"),d=0;F>d;d++)if(c===E[d].id){E[d].quantity=b;break}h(),k()}),a(".removeProduct").on("click",function(b){b.preventDefault();var c=a(this).data("id");j(c,a(this))}),a(".submenu").prev().addClass("toggle-dropdown"),n(),a(".datetime").length&&o(a(".datetime")),a("#reservation-form").on("submit",function(b){if(b.preventDefault(),a(this).parsley().isValid()){var c=a(this).serializeArray();a(".ajaxmessage.for-reservation").removeClass("hidden").text("Sending.."),a.ajax({url:"php/reservation.php",type:"POST",async:!0,data:c}).done(function(b){a(".ajaxmessage.for-reservation").html(b),a("#reservation-form").find("input[type=text], input[type=email], textarea").val("")})}}),a("#contactform").on("submit",function(b){if(b.preventDefault(),a(this).parsley().isValid()){var c=a(this).serializeArray();a(".ajaxmessage.for-contactform").removeClass("hidden").text("Sending.."),a.ajax({url:"php/contact.php",type:"POST",async:!0,data:c}).done(function(b){a(".ajaxmessage.for-contactform").html(b),a("#contactform").find("input[type=text], input[type=email], textarea").val("")})}}),a("#orderform").on("submit",function(b){b.preventDefault();var c=JSON.parse(sessionStorage.getItem("cartItems")),d=JSON.stringify(c);if(a("#selectedProducts").val(d),a(this).parsley().isValid()){var e=a(this).serializeArray();a(".ajaxmessage.for-orderform").removeClass("hidden").text("Sending.."),a.ajax({url:"php/order.php",type:"POST",async:!0,data:e}).done(function(b){a(".ajaxmessage.for-orderform").html(b),a("#orderform").find("input[type=text], input[type=email], textarea").val("")})}}),a(".event-timer").length){var H=a(".event-timer");H.each(function(){var b=a(this),c=b.attr("data-date");b.countdown(c,function(a){b.html(a.strftime('<div class="time-circle"><h3>%D</h3><h5>days</h5></div><div class="time-circle"><h3>%H</h3><h5>hours</h5></div><div class="time-circle"><h3>%M</h3><h5>minutes</h5></div><div class="time-circle"><h3>%S</h3><h5>seconds</h5></div>'))})})}a("a.back-to-top").on("click",function(b){a("html, body").stop().animate({scrollTop:a("body").offset().top},1500),b.preventDefault()}),a(".selectbox_itemlist span").on("click",function(){var b,c,d;b=a(this).text(),c=a(this).attr("data-value"),d=a(this).parent().parent(),d.find(".selectbox_toggle").text(b).append('<span class="selectbox__arrow"></span>').attr("data-value",c),d.find(".selectbox__input").val(c)}),a(".selectbox_toggle").on("click",function(b){b.stopPropagation(),a(this).toggleClass("selectbox_toggle__active"),a(".selectbox_toggle").parent().removeClass("open"),a(this).parent().toggleClass("open")}),a(window).on("click",function(){a(".selectbox.open").removeClass("open"),a(".selectbox_toggle__active").removeClass("selectbox_toggle__active")}),r(),a(window).resize(function(){r()}),a(".mfp-image").magnificPopup({type:"image",gallery:{enabled:!0},removalDelay:500,callbacks:{beforeOpen:function(){this.st.image.markup=this.st.image.markup.replace("mfp-figure","mfp-figure mfp-with-anim"),this.st.mainClass="mfp-zoom-in"}}})}(jQuery);