<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <title>Food order</title>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</head>

<body>
    <header class="header">
        <nav>
            <div class="row">
                <img src="images/logo-white.png" alt="Onnifood" class="logo">
                <ul class="main-nav">
                    <li><a href="#">Food delivery</a></li>
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Our cities</a></li>
                    <li><a href="#">Sign up</a></li>
                </ul>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1>Goodbye junk food.</h1>
            <h1>Hello super healthy meals.</h1>
            <a href="#" class="btn btn-full">I'm hungry</a>
            <a href="" class="btn btn-ghost">Show me more</a>
        </div>
    </header>
    <section class="section-features">
        <div class="row">
            <h2>Get food fast &mdash; not fast food</h2>
            <p class="long-copy">
                Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!
            </p>
        </div>
        <div class="row">
            <div class="col span-1-of-4 box">
                <ion-icon name="infinite-outline" class="icon-big"></ion-icon>
                <h3>Up to 365 days/year</h3>
                <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <ion-icon name="stopwatch-outline" class="icon-big"></ion-icon>
                <h3>Ready in 20 minutes</h3>
                <p>You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <ion-icon name="nutrition-outline" class="icon-big"></ion-icon>
                <h3>100% organic</h3>
                <p>All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <ion-icon name="cart-outline" class="icon-big"></ion-icon>
                <h3>Order anything</h3>
                <p>We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                </p>
            </div>
        </div>
    </section>

    <section class="section-meals">
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="images/1.jpg" alt="Korean bibimbap with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="images/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="images/3.jpg" alt="Chicken breast steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="images/4.jpg" alt="Autumn pumpkin soup">
                </figure>
            </li>
        </ul>
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="images/5.jpg" alt="Paleo beef steak with vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="images/6.jpg" alt="Healthy baguette with egg and vegetables">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="images/7.jpg" alt="Burger with cheddar and bacon">
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="images/8.jpg" alt="Granola with cherries and strawberries">
                </figure>
            </li>
        </ul>
    </section>

    <section class="section-steps">
        <div class="row">
            <h2> How it works &mdash; Simple as 1, 2, 3</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-2 steps-box">
                <img src="images/app-iPhone.png" alt="App Iphone" class="app-iphone">
            </div>
            <div class="col span-1-of-2 steps-box">
                <div class="work-step">
                    <div>1</div>
                    <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                </div>
                <div class="work-step">
                    <div>2</div>
                    <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                </div>
                <div class="work-step">
                    <div>3</div>
                    <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                </div>
                <a href="#" class="btn-app"><img src="images/download-app-android.png" alt="download-app-android"></a>
                <a href="#" class="btn-app"><img src="images/download-app.svg" alt="download-app-iphone"></a>
            </div>
        </div>
    </section>

    <section class="section-cities">
        <div class="row">
            <h2>We're currently in these cities</h2>
        </div>
        <div class="row list-of-cities">
            <div class="col span-1-of-4 cities-box">
                <img src="images/lisbon-3.jpg" alt="cities-images" class="cities-img">
                <h3>Lisbon</h3>
                <div class="">
                    <ion-icon name="person-circle-outline" class="section-cities-icon"></ion-icon>
                    <p>1600+ happy eaters</p>
                </div>
                <div>
                    <ion-icon name="star" class="section-cities-icon clearfix"></ion-icon>
                    <p>60+ top chefs</p>
                </div>
                <div>
                    <ion-icon name="logo-twitter" class="section-cities-icon"></ion-icon>
                    <p class="tweet-cities">@omnifood_lx</p>
                </div>
            </div>
            <div class="col span-1-of-4 cities-box">
                <img src="images/san-francisco.jpg" alt="cities-images" class="cities-img">
                <h3>San Francisco</h3>
                <div class="">
                    <ion-icon name="person-circle-outline" class="section-cities-icon"></ion-icon>
                    <p>3700+ happy eaters</p>
                </div>
                <div>
                    <ion-icon name="star" class="section-cities-icon clearfix"></ion-icon>
                    <p>160+ top chefs</p>
                </div>
                <div>
                    <ion-icon name="logo-twitter" class="section-cities-icon"></ion-icon>
                    <p class="tweet-cities">@omnifood_sf</p>
                </div>
            </div>
            <div class="col span-1-of-4 cities-box">
                <img src="images/berlin.jpg" alt="cities-images" class="cities-img">
                <h3>Berlin</h3>
                <div class="">
                    <ion-icon name="person-circle-outline" class="section-cities-icon"></ion-icon>
                    <p>2300+ happy eaters</p>
                </div>
                <div>
                    <ion-icon name="star" class="section-cities-icon clearfix"></ion-icon>
                    <p>110+ top chefs</p>
                </div>
                <div>
                    <ion-icon name="logo-twitter" class="section-cities-icon"></ion-icon>
                    <p class="tweet-cities">@omnifood_berlin</p>
                </div>
            </div>
            <div class="col span-1-of-4 cities-box">
                <img src="images/london.jpg" alt="cities-images" class="cities-img">
                <h3>London</h3>
                <div class="">
                    <ion-icon name="person-circle-outline" class="section-cities-icon"></ion-icon>
                    <p>1200+ happy eaters</p>
                </div>
                <div>
                    <ion-icon name="star" class="section-cities-icon clearfix"></ion-icon>
                    <p>50+ top chefs</p>
                </div>
                <div>
                    <ion-icon name="logo-twitter" class="section-cities-icon"></ion-icon>
                    <p class="tweet-cities">@omnifood_london</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonials">
        <div class="row">
            <h2>Our customers can't live without us</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3 customer-quotes-box">
                <blockquote class="long-copy">Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!</blockquote>
                <cite><img src="images/customer-1.jpg" alt="">Alberto Ducan</cite>
            </div>
            <div class="col span-1-of-3 customer-quotes-box">
                <blockquote class="long-copy">Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!</blockquote>

                <cite><img src="images/customer-1.jpg" alt="">Alberto Ducan</cite>
            </div>
            <div class="col span-1-of-3 customer-quotes-box">
                <blockquote class="long-copy">Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!</blockquote>

                <cite><img src="images/customer-1.jpg" alt="">Alberto Ducan</cite>
            </div>
        </div>
    </section>
    <footer class="footer"></footer>
</body>

</html>


<!-- 

Section 4: Cities
Title: We're currently in these cities

Lisbon
1600+ happy eaters
60+ top chefs
@omnifood_lx

San Francisco
3700+ happy eaters
160+ top chefs
@omnifood_sf

Berlin
2300+ happy eaters
110+ top chefs
@omnifood_berlin

London
1200+ happy eaters
50+ top chefs
@omnifood_london




Section 5: Customer testimonials
Title: Our customers can't live without us

Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
(Alberto Duncan)

Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
(Joana Silva)

I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
(Milton Chapman)


 -->