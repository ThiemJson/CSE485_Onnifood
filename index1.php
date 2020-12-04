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

    <section class="section-plans">
        <div class="row">
            <h2>Start eating healthy today</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Premium</h3>
                        <p class="plan-price">$399 <span>/ month</span></p>
                        <p class="plan-price-meal">That’s only 13.30$ per meal</p>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <ion-icon name="checkmark-sharp" class="small-icon"></ion-icon>1 meal every day
                            </li>
                            <li>
                                <ion-icon name="checkmark-sharp" class="small-icon"></ion-icon>Order 24/7
                            </li>
                            <li>
                                <ion-icon name="checkmark-sharp" class="small-icon"></ion-icon>
                                Access to newest creations
                            </li>
                            <li>
                                <ion-icon name="checkmark-sharp" class="small-icon"></ion-icon>
                                Free delivery
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-full">SIGN UP NOW</a>
                    </div>
                </div>
            </div>

            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Pro</h3>
                        <p class="plan-price">$149 <span>/ month</span></p>
                        <p class="plan-price-meal">That’s only 14.90$ per meal</p>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <ion-icon name="checkmark-sharp" class="small-icon"></ion-icon>1 meal 10 days/month
                            <li>
                                <ion-icon name="checkmark-sharp" class="small-icon"></ion-icon>Order 24/7
                            </li>
                            <li>
                                <ion-icon name="checkmark-sharp" class="small-icon"></ion-icon>
                                Access to newest creations
                            </li>
                            <li>
                                <ion-icon name="checkmark-sharp" class="small-icon"></ion-icon>
                                Free delivery
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-ghost">SIGN UP NOW</a>
                    </div>
                </div>
            </div>

            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Starter</h3>
                        <p class="plan-price">$19 <span>/ meal</span></p>
                        <p class="plan-price-meal">&nbsp;</p>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <ion-icon name="checkmark-sharp" class="small-icon"></ion-icon>1 meal every day
                            </li>
                            <li>
                                <ion-icon name="checkmark-sharp" class="small-icon"></ion-icon>Order from 8 am to 12 pm
                            </li>
                            <li>
                                <ion-icon name="close-sharp" class="small-icon"></ion-icon>
                            </li>

                            <li>
                                <ion-icon name="checkmark-sharp" class="small-icon"></ion-icon>
                                Free delivery
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-ghost">SIGN UP NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer"></footer>
</body>

</html>


<!-- 
Section 6: Sign up and pricing plans
Title: Start eating healthy today

Plan 1: Premium
399$ per month
That’s only 13.30$ per meal
1 meal every day
Order 24/7
Access to newest creations
Free delivery


Plan 2: Pro
149$ per month
That’s only 14.90$ per meal
1 meal 10 days/month
Order 24/7
Access to newest creations
Free delivery


Plan 3: Starter
19$ per meal
1 meal
Order from 8 am to 12 pm
Free delivery

Section 7: Contact form
Title: We're happy to hear from you

Fields to include:
Name
Email
How did you find us?
Newsletter
Drop us a line

Section 8: Footer
Title: None

Navigation:
1. About us
2. Blog
3. Press
4. iOS App
5. Android App

Also include links to facebook, twitter, google+ and Instagram accounts.



 -->