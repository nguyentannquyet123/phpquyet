@extends('face1/template/template')
@section('tittle')
Trang chủ
@endsection
@section('body')
    <style>
        body {
        padding: 0;
        margin: 0;
        background-color: #1a1d24;

    }
        .slider-page {
            width: 100%;
            height: auto;
            clear: both;

        }

        .slider-page li {
            float: left;
            list-style: none;
            width: 25%;
            overflow: hidden;

        }

        .slider-page .slider {
            width: 100%;
        }

        .slider-page img {
            width: 100%;
            height: 556px;


            transition: all 0.2s;
        }

        .slider-page img:hover {
            transform: scale(1.1);


        }

    </style>
    <div class="slider-page">
        <li class="slide">
            <img src="{{ asset('../public/images/slider1.png') }}" alt="">
        </li>
        <li class="slide">
            <img src="{{ asset('../public/images/slider1.png') }}" alt="">
        </li>
        <li class="slide">
            <img src="{{ asset('../public/images/slider1.png') }}" alt="">
        </li>
        <li class="slide">
            <img src="{{ asset('../public/images/slider1.png') }}" alt="">
        </li>
    </div>
    <style>
        .show-product {
            text-align: center;
        }

        .category-product li {
            display: inline-block;
        }

        section {
            clear: both;
            width: 100%;

            height: auto;
            padding: 50px 0px;

        }

        .show-product h4 {
            font-size: 44px;
            font-family: jost;
            color: white;
        }

        .category-product li {
            font-size: 20px;
            padding: 10px 20px;
        }

        .category-product li a {
            text-decoration: none;
            color: #ffffff;
            transition: all 0.5s;
        }

        .category-product li a:hover {
            color: #c27b43;
        }

        .show-product {
            clear: both;
            width: 100%;
            height: auto;
            margin-top: 50px;
        }

        .get-product {
            width: calc(20% - 30px);
            margin-left: 15px;
            margin-right: 15px;
            float: left;
            margin-top: 20px;

        }

        .product-info {
            transition: all 2s;
            overflow: hidden;
            border: 1px solid white;

            position: relative;
        }

        .product-info img {
            overflow: hidden;
            width: 100%;
            transition: all 0.5s;
        

        }

        .product-info img:hover {
            transform: scale(1.1);
        }

        .product-name span {
            color: white;
            display: block;
            letter-spacing: 0.16px;
            font-family: jost;
        }

        .product-category {
            clear: both;
            width: 100%;

            height: auto;
            padding: 80px 0px;
        }

        .introduce-category h5 {
            font-size: 44px;
            font-family: jost;
            color: white;
            margin-bottom: 20px
        }

        .introduce-category span {
            display: block;
            color: #bdab98;
            font-size: 18px;
            font-family: jost;

        }

        .show-category {
            padding: 50px 0px;
            margin-top: 50px;
            width: 96%;
            height: auto;
            margin-left: 2%;
            border: 10px solid #22242a;
        }

        .info-category {
            width: 15%;
            display: inline-block;
        }

        .info-category span {
            margin-top: 20px;
            font-family: jost;
        }

        .info-category span:hover {
            color: #c27b43;
        }

        .info-category img:hover {
            transform: scale(1.1);
        }

        .news-product {
            width: 96%;
            height: auto;
            margin-left: 2%;

        }

        .endow-product img {
            width: 35%;
            height: 880px;
            float: left;
            margin-top: 40px;
            margin-right: 1.5%;
            position: relative;

        }


        .deals-product {
            width: 30%;
            margin-left: 1.5%;
            color: white;
            position: absolute;
            transform: translateY(340px);

        }

        .deals-time span {
            display: inline-block;
            padding: 15px 14px;
            background-color: white;
            color: #2c2c2c;

            text-align: center;
            font-size: 45px;
            margin-left: 1%;
            opacity: 0.9;
            margin-top: 25px;
            margin-bottom: 70px;
        }

        .deals-time label {
            line-height: 0px;
            font-size: 12px;
            display: block;
            text-transform:
                lowercase;
        }

        .deals-product h5 {
            font-size: 18px;
            font-family: jost;
            letter-spacing: 3.6px;
            font-weight: 200;
        }

        .savvy {
            font-size: 50px;
            line-height: 50px;
            font-family: jost;
        }

        .deals-product a {
            padding: 15px 50px;
            border: 1px solid white;
            text-decoration: none;
            color: white;
            font-weight: 400;
            font-size: 18px;
        }

        .buy-product {}

        .deals1-product {
            width: 44%;
            position: relative;
            float: left;
            color: white;
            transform: translateY(80px);

        }

        .deals1-info {
            margin-top: 50px;
            text-align: center;
            margin-left: 20px;
            position: absolute;
            padding: 0px 40px;
        }

        .deals1-info h5 {
            font-family: jost;
            font-size: 30px;
            font-weight: 300;

        }

        .deals1-info span {
            text-align: left;
            color: #bdab98;

        }

        .deals1-info a {
            display: inline-block;
            margin-top: 40px;
            text-decoration: none;
            padding: 15px 30px;
            border: 1px solid white;
            color: white;
            text-align: left;

        }

        .sale-product {
            position: relative;
            width: 31.5%;
            float: left;

        }

        .sale-info {
            color: white;
            position: absolute;
            margin-left: 20%;
            transform: translateY(-300px);
        }

        .sale-product img {
            width: 100%;
            height: 475px;
            padding: 0px 1%;
        }

        .sale-info h5 {
            font-size: 18px;
            font-family: jost;
            font-weight: 300;
            letter-spacing: 3.6px;
        }

        .sale-info span {
            font-size: 50px;
            font-weight: 300;
            line-height: 25px;
        }

        .sale-info a {
            color: white;
            padding: 15px 20px;
            display: block;
            text-decoration: none;
            border: 1px solid white;
            margin-top: 40px;
        }

        .show-product-category {
            width: 96%;
            margin-left: 2%;
            height: auto;
            clear: both;
            color: white;
            padding: 50px 0px;
        }

        .show-product-category h5 {
            font-size: 44px;
            font-family: jost;
            text-align: left;
        }

        .show-product-category .info-arrivals {
            width: 33%;
            display: inline-block;
            text-align: left;

        }

        .images-arrivals img {
            width: 100%;
            height: 151px;
            border: 1px solid white;
        }

        .info-arrivals span {
            display: block;
            margin-top: 5px;
        }

        .images-arrivals div span {

            float: right;
        }



        .show-arrivals {
            margin-top: 20px;
        }

        .show-arrivals span {
            padding: 2px 5px;
        }

        .show-arrivals span i {
            margin-left: 5px;
        }

        .show-arrivals div {
            display: inline-block;
        }

        .brands {
            clear: both;
            width: 96%;
            height: auto;
        }

        .product-name {
            margin-top: 20px;
        }

        .product-name span {
            float: left;
        }

        .product-evaluate {

            text-align: left;
        }

        .product-price {
            clear: both;

            padding-top: 10px;
        }

        .product-price span {
            color: #c27b43;
        }

        .product-price span i {
            color: white;
        }

        .product-price1 {

            font-size: 18px;



        }
        .acction-with-product{
        transform: translateY(50px);
        transition: all 0.7s;
        position: absolute;
      
    width: 100%;
    }
    .product-info:hover .acction-with-product{
        transform: translateY(-70px);
        
    }
    .acction-with-product i:hover  {

     
        background-color: #c27b43;
    }
    .acction-with-product i {
       
        font-size: 17px;
        padding: 15px 15px;
        color: white;
        background-color:#bdab98;
        margin: 5px 5px;
    }
    </style>
    <section>
        <div class="show-product">
            <h4>You want it? We got it.</h4>
            <div class="category-product">
                <li><a href="">LIQUOR</a></li>
                <li><a href="">BEER</a></li>
                <li><a href="">WINE</a></li>
                <li><a href="">EXTRAS</a></li>
            </div>

            <div class="show-product">
                <div class="get-product">
                    <div class="product-info">
                        
                        <img src="https://hn.arrowpress.net/lusion/wp-content/uploads/2020/10/prd-liquor81-345x465.png"
                            alt="">
                            <div class="acction-with-product">
                                <i  class="fas fa-shopping-cart"></i>    
                                <i  class="fas fa-search-plus"></i>  
                                <i class="far fa-heart"></i>
                            </div> 
                        </div>
             
                    <div class="product-name">
                        <span>Camus Cognac Borderies XO</span>
                        <div class="product-price">
                            <span class="product-evaluate"> <i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                            </span>
                            <span class="product-price1" style="float: right;">$500.00</span>
                        </div>
                    </div>
                </div>


            </div>
            <div class="product-category">
                <div class="introduce-category">
                    <h5>Liqueur & Spirits</h5>
                    <span>In addition to the 2 large categories of Wine and Whiskey, you will quickly discover the</span>
                    <span>world of other drinks in this category with just one click.</span>
                    <div class="show-category">
                        <div class="info-category">
                            <img src="{{ asset('../public/images/1.png') }}" alt="">
                            <span>Vodka</span>
                        </div>
                        <div class="info-category">
                            <img src="{{ asset('../public/images/2.png') }}" alt="">
                            <span>Cognac</span>
                        </div>
                        <div class="info-category">
                            <img src="{{ asset('../public/images/3.png') }}" alt="">
                            <span>Grappa</span>
                        </div>
                        <div class="info-category">
                            <img src="{{ asset('../public/images/4.png') }}" alt="">
                            <span>Scotch</span>
                        </div>
                        <div class="info-category">
                            <img src="{{ asset('../public/images/5.png') }}" alt="">
                            <span>Tequila</span>
                        </div>
                        <div class="info-category">
                            <img src="{{ asset('../public/images/6.png') }}" alt="">
                            <span>Rum</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news-product">
                <div class="endow-product">
                    <img src="{{ asset('../public/images/05.png') }}" alt="">
                    <div class="deals-product">
                        <h5>DEALS OF THE MONTH</h5>
                        <span class="savvy">Savvy Savings</span>
                        <div class="deals-time">
                            <span>00 <label>days</label></span>
                            <span>00 <label>hours</label></span>
                            <span>00 <label>mins</label></span>
                            <span>00 <label>secs</label></span>
                        </div>
                        <a href="">Shop now</a>
                    </div>


                </div>

                <div class="buy-product">
                    <div class="deals1-product">
                        <div class="deals1-info">
                            <h5>15 Whisky Cocktails You'll Fall For</h5>
                            <span>We partnered with talented Ontario bartenders to create this autumn-inspired whisky
                                cocktail collection.</span>
                            <a href="">Get the recipes</a>
                        </div>
                    </div>
                    <img style=" width: 62%;height: 450px;" src="{{ asset('../public/images/01.png') }}" alt="">
                    <div class="sale-product">
                        <img src="{{ asset('../public/images/02.png') }}" alt="">
                        <div class="sale-info">
                            <h5>LOCALLY MADE</h5>
                            <span>Sale Now</span>
                            <a href="">Shop now</a>
                        </div>
                    </div>

                    <div class="sale-product">
                        <img src="{{ asset('../public/images/03.png') }}" alt="">
                        <div class="sale-info">
                            <h5>NEW ARRIVALS</h5>
                            <span>Vintages</span>
                            <a href="">Shop now</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="show-product-category">

                <div class="info-arrivals">
                    <h5>New Arrivals</h5>
                    <div class="show-arrivals">
                        <div class="images-arrivals">
                            <img src="{{ asset('../public/images/product1.png') }}" alt="">

                        </div>
                        <div>
                            <span>Belasco Llma Cognac</span>
                            <span style="color: #c27b43;font-size: 20px;display: inline;">$500</span>
                            <span><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i></span>
                        </div>
                    </div>
                    <div class="show-arrivals">
                        <div class="images-arrivals">
                            <img src="{{ asset('../public/images/product1.png') }}" alt="">

                        </div>
                        <div>
                            <span>Belasco Llma Cognac</span>
                            <span style="color: #c27b43;font-size: 20px;display: inline;">$500</span>
                            <span><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i></span>
                        </div>
                    </div>
                    <div class="show-arrivals">
                        <div class="images-arrivals">
                            <img src="{{ asset('../public/images/product1.png') }}" alt="">

                        </div>
                        <div>
                            <span>Belasco Llma Cognac</span>
                            <span style="color: #c27b43;font-size: 20px;display: inline;">$500</span>
                            <span><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i></span>
                        </div>
                    </div>
                    <div class="show-arrivals">
                        <div class="images-arrivals">
                            <img src="{{ asset('../public/images/product1.png') }}" alt="">

                        </div>
                        <div>
                            <span>Belasco Llma Cognac</span>
                            <span style="color: #c27b43;font-size: 20px;display: inline;">$500</span>
                            <span><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i></span>
                        </div>
                    </div>

                </div>
                <div class="info-arrivals">
                    <h5>New Arrivals</h5>
                    <div class="show-arrivals">
                        <div class="images-arrivals">
                            <img src="{{ asset('../public/images/product1.png') }}" alt="">

                        </div>
                        <div>
                            <span>Belasco Llma Cognac</span>
                            <span style="color: #c27b43;font-size: 20px;display: inline;">$500</span>
                            <span><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i></span>
                        </div>
                    </div>
                    <div class="show-arrivals">
                        <div class="images-arrivals">
                            <img src="{{ asset('../public/images/product1.png') }}" alt="">

                        </div>
                        <div>
                            <span>Belasco Llma Cognac</span>
                            <span style="color: #c27b43;font-size: 20px;display: inline;">$500</span>
                            <span><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i></span>
                        </div>
                    </div>
                    <div class="show-arrivals">
                        <div class="images-arrivals">
                            <img src="{{ asset('../public/images/product1.png') }}" alt="">

                        </div>
                        <div>
                            <span>Belasco Llma Cognac</span>
                            <span style="color: #c27b43;font-size: 20px;display: inline;">$500</span>
                            <span><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i></span>
                        </div>
                    </div>
                    <div class="show-arrivals">
                        <div class="images-arrivals">
                            <img src="{{ asset('../public/images/product1.png') }}" alt="">

                        </div>
                        <div>
                            <span>Belasco Llma Cognac</span>
                            <span style="color: #c27b43;font-size: 20px;display: inline;">$500</span>
                            <span><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i></span>
                        </div>
                    </div>

                </div>
                <div class="info-arrivals">
                    <h5>New Arrivals</h5>
                    <div class="show-arrivals">
                        <div class="images-arrivals">
                            <img src="{{ asset('../public/images/product1.png') }}" alt="">

                        </div>
                        <div>
                            <span>Belasco Llma Cognac</span>
                            <span style="color: #c27b43;font-size: 20px;display: inline;">$500</span>
                            <span><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i></span>
                        </div>
                    </div>
                    <div class="show-arrivals">
                        <div class="images-arrivals">
                            <img src="{{ asset('../public/images/product1.png') }}" alt="">

                        </div>
                        <div>
                            <span>Belasco Llma Cognac</span>
                            <span style="color: #c27b43;font-size: 20px;display: inline;">$500</span>
                            <span><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i></span>
                        </div>
                    </div>
                    <div class="show-arrivals">
                        <div class="images-arrivals">
                            <img src="{{ asset('../public/images/product1.png') }}" alt="">

                        </div>
                        <div>
                            <span>Belasco Llma Cognac</span>
                            <span style="color: #c27b43;font-size: 20px;display: inline;">$500</span>
                            <span><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i></span>
                        </div>
                    </div>
                    <div class="show-arrivals">
                        <div class="images-arrivals">
                            <img src="{{ asset('../public/images/product1.png') }}" alt="">

                        </div>
                        <div>
                            <span>Belasco Llma Cognac</span>
                            <span style="color: #c27b43;font-size: 20px;display: inline;">$500</span>
                            <span><i class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i><i class="far fa-star"></i><i
                                    class="far fa-star"></i></span>
                        </div>
                    </div>

                </div>



            </div>
        </div>

        </div>

        <div class="brands">
            <h5>Featured Brands</h5>
        </div>
        </div>
    </section>



@endsection
