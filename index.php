<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CardBook</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="aos-master/dist/aos.css">
</head>
<body>
    <div id="header">
        <div class="container">
            <nav data-aos="menu-area" data-aos-anchor-placement="bottom-top">
                <h1 class="logo"><span>Card</span>Book.</h1>
                <ul>
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="header-text">
                <h1>Hi, Welcome To<br>CardBook.</h1>
                <p class="first">Data/Airtime For All NetWorks,</p>
                <p>WAEC Scratch Cards,</p>
                <p>NECO Result Tokens and Many More.</p>
                <p class="last">All Sold Here in an Easy Accessible Form.</p>
                <button onclick="window.location.href='#products'">Purchase Now</button>
            </div>
        </div>
    </div>

    <div id="about">
        <div class="container">
            <h1 class="sub-title">About Us</h1>
            <div class="about-list">
                <div onclick="window.location.href='#sec'">
                    <i class="fas fa-signal"></i>
                    <h2>Data & Airtime</h2>
                    <p>We vend data and Airtime for all Networks in Nigeria on this Site.</p>
                </div>
                <div onclick="window.location.href='#products'">
                    <i class="fa-regular fa-credit-card"></i>
                    <h2>Result Tokens</h2>
                    <p>NECO & WAEC Result Token also available on this Site.</p>
                </div>
                <div onclick="window.location.href='#sec'">
                    <i class="fas fa-lightbulb"></i>
                    <h2>Electric Bills</h2>
                    <p>This Site Provides an Opportunity for Customers to pay Electric Bill Conveniently.</p>
                </div>
                <div onclick="window.location.href='#products'">
                    <i class="fas fa-television"></i>
                    <h2>TV Subscription</h2>
                    <p>We also Provide Oppurtinity for Customers to Subscribe Multi-Choice Conveniently.</p>
                </div>
            </div>
            <div class="establishment">
                <p class="established">CardBook was Established in Nigeria in 2023. Due to the Level of Stress and Chaotic Process 
                of the Purchasing of Students WAEC & NECO Scratch Card, Data/Airtime Purchase Online, Jamb 
                E-Pin, this Organization was Established and it turned out to go all well.</p>
                <p class="service">At CardBook, There is no such thing as Discrimination as it can lead to Severe Downfall. 
                Therefore, the Organization provides a well integrated site for reliable and secure vending of 
                recharge cards and data for all Networks, WAEC and NECO Scratch Cards, Electricity Bills
                (Specifically PHED, Abuja, Benin, Enugu, Ibadan, Jos, Kaduna, Kano, Eko, Ikeja and Yola), 
                MultiChoice Subscription(DSTV and GOTV) and JAMB E-Pins for UTME Registration.</p>
                <p class="care">Usage is uncomplicated as all Members of the Service / Customer Care are always available. 
                Pls, Our Services are utmostly secured as any of your Bank Details Inputed in the Site are 
                Very Much Safe. For more info <a href="#contact">Contact Us.</a></p>
            </div>
        </div>
    </div>
    
    <div id="products">
        <div class="container">
            <h1 class="sub-title">Products</h1>
            <div class="product-list">
                <div class="product">
                    <img src="images/Waec Pic.jpg" style="width: 23rem;">
                    <h1>WAEC Result Token</h1>
                    <button>Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/Neco Logo.jpg" style="width: 23rem; height: 14rem;">
                    <h1>NECO Result Token</h1>
                    <button>Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/GOTV_and_dstv-transformed.png" style="width: 23rem; height: 14rem;">
                    <h1>MultiChoice</h1>
                    <button onclick="window.location.href='/GOTV and DSTV stuff/paymentcheckoutforgotv.php'" style="margin-left: 130px;">Subscribe</button>
                </div>
                <div id="sec" class="product">
                    <img src="images/Jamb Logo.png" style="width: 20rem; padding-top: 90px;">
                    <h1 style="padding-left: 80px; text-align: left;">JAMB E-Pin</h1>
                    <button style="margin-left: 100px;">Buy Now</button>
                </div>
                <div class="product">
                    <img src="images/NEPA.webp" style="width: 22rem; padding-top: 120px;">
                    <h1>Electric Bills</h1>
                    <button style="margin-left: 140px;">Renew</button>
                </div>
                <div class="product">
                    <img src="images/Network Logo.jpg" style="width: 23rem; padding-top: 140px;">
                    <h1>Data / Airtime</h1>
                    <button style="margin-left: 130px;">Buy Now</button>
                </div>
            </div>
        </div>
    </div>

    <div id="contact">
        <div class="container">
            <div class="row">
               <div class="contact-left">
                <h1 class="sub-title" style="font-size: 50px;">Contact Us</h1>
                <p><i class="fas fa-paper-plane"></i> wobogoodnessg@gmail.com</p>
                <p><i class="fas fa-phone"></i> +234-908-372-9531</p>
                <div class="social-icons">
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRwRdtlHvCPlCwsbBPHpTxqcsmMfzcFZFTpgCWzZPPPBcMGTVRhNdjVScXcxNNdNqXgsHLSG"><i class="fas fa-envelope"></i></i></a>
                    <a href=""><i class="fab fa-whatsapp"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </div>
               </div> 
               <div class="contact-right">
                <form action="mailto:wobogoodnessg@gmail.com">
                    <input type="text" name="Name" placeholder="Name" required>
                    <input type="email" name="Email" placeholder="Email" required>
                    <textarea name="Message" rows="6" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>
                <span id="msg"></span>
               </div> 
            </div>
        </div>
        <div class="copyright" style="margin-top: 50px;">
            <p>Cardbook © 2023. Made by Exclusive Production.</p>
        </div>
    </div>

    <script src="aos-master/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>