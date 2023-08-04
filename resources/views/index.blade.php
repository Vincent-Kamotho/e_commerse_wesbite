<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ecommerce Website</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link rel="stylesheet" href="{{asset('assets/index/style.css')}}">
    </head>

    <body>

        <section id="header">
            <a href="#"><img src="{{asset('assets/index/img/logo.png')}}" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </section>

        <section id="hero">
            <h4>Trade-in-offer</h4>
            <h2>Super Value Deals</h2>
            <h1>On all Products</h1>
            <p>Save more with coupons & up to 70% off! </p>
            <button>Shop Now</button>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="{{asset('assets/index/img/features/f1.png')}}" alt="">
                <h6>Free Shipping</h6>
            </div>
            <div class="fe-box">
                <img src="{{asset('assets/index/img/features/f2.png')}}" alt="">
                <h6>Online Order</h6>
            </div>
            <div class="fe-box">
                <img src="{{asset('assets/index/img/features/f3.png')}}" alt="">
                <h6>Save Money</h6>
            </div>
            <div class="fe-box">
                <img src="{{asset('assets/index/img/features/f4.png')}}" alt="">
                <h6>Promotions</h6>
            </div>
            <div class="fe-box">
                <img src="{{asset('assets/index/img/features/f5.png')}}" alt="">
                <h6>Happy Sell</h6>
            </div>
            <div class="fe-box">
                <img src="{{asset('assets/index/img/features/f6.png')}}" alt="">
                <h6>Support</h6>
            </div>
        </section>

        <script src="{{asset('assets/index/script.js')}}"></script>
    </body>
</html>