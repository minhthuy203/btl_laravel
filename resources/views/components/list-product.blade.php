<h2>{{$title}}</h2>
<div class="store-product-list row">
    @foreach($products as $p)
    <div class="store-product-wrapper grid-item type1">
        <div class=store-product>
            <div class="imgLiquidFill imgLiquid item-image"> <img
                    src="{{url('public/uploads')}}/{{$p->image}}" alt="product item"> </div>
            <div class=product-detail>
                <div class=product-rate>${{$p->price}}</div>
                <h3><a href="{{ route('productDetail', ['slug' => Str::slug($p->name), 'product' => $p->id]) }}">{{$p->name}}</a></h3>
                <p>1 pack 250 gm</p>
            </div>
            <div class="clearfix add-buy"> <a href="{{route('cart.addToCart',$p->id)}}"
                    data-productname="Café Bombón" data-productprice=22
                    data-productimage="{{url('public/client')}}/images/blog-list/blog-img2.jpg">Add to Cart</a> <a
                    href=# class=buy-btn>Buy now</a> </div>
        </div>
    </div>
    @endforeach
</div>