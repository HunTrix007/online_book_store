<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Bookshelf Boutique</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>

    <!--icon pack installation-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!---->
</head>

<body>

    <!--Header start-->
    <header>
        <a href="main.html"><img class="logo"  src="content/logo.png"></a>

        <div class="group">
            <ul class="navi">
                <li><a href="main.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="books.html">Books</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

            <div class="search">
                <span class="icon">
                    <ion-icon name="search-outline" class="searchbtn"></ion-icon>
                    <ion-icon name="close-outline" class="closebtn"></ion-icon>
                    <a href="cart.html"><ion-icon name="cart-outline" class="cartbtn"></ion-icon></a>
                    <ion-icon name="person-outline" class="userbtn" onclick="toggleMenu()"></ion-icon>
                </span>

                <div class="usermenu" id="submenu">
                    <div class="submenu">
                        <div class="userinfo">
                            <h4>Welcome, Guest!</h4>
                        </div>
                        <hr>

                        <div>
                            <a class="cta" href="signin.html">
                                <button class="headbuttons">Sign In</button>
                            </a>
                            <a class="cta" href="signup.html">
                                <button class="headbuttons">Sign Up</button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <ion-icon name="menu-outline" class="menubtn"></ion-icon>
        </div>
        <div class="searchbar">
            <input type="search" placeholder="Search">
        </div>
    </header>

    <!--Header end-->
    <!--body start-->

    <div class="addbookscontainer">
        
            <div class="addbookform">
                <form action="bookadd.php" method="post">
                        <div class="col">
                            <h3 class="title">Add books</h3>
            
                            <div class="inputBox">
                                <span>image(link) :</span>
                                <input type="text" placeholder="c:/" name="b_image">
                            </div>
                            <div class="inputBox">
                                <span>book name :</span>
                                <input type="text" placeholder="author name" name="book_name">
                            </div>
                            <div class="inputBox">
                                <span>author :</span>
                                <input type="text" placeholder="author name" name="author">
                            </div>
                            
                            <div class="inputBox">
                                <span>price :</span>
                                <input type="number" placeholder="100" name="bookprice">
                            </div>
                            
                        </div>
                    <input type="submit" value="Add Book" class="submit-btn">
                </form>
            </div>
    
    </div>

    <!--body end-->
    <!--Footer start-->

    <footer>
        <div class="container">
            <div class="aboutus">
                <h2>About Us</h2>
                <p>Welcome to our Online Bookstore, your destination for an expansive collection of books across various genres. Discover captivating reads, explore new authors, and indulge in the joy of reading. Join our community of book enthusiasts and embark on a literary adventure with us.</p>
                <ul class="social">
                    <li><a href="https://facebook.com" class="facebook"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="https://twitter.com" class="twitter"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="https://instagram.com" class="instagram"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="https://linkedin.com" class="linkedin"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                </ul>
            </div>
            <div class="quicklinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="policy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="help.html">Help</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="myacc">
                <h2>My Account</h2>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                    <li><a href="orderhistory.html">Order History</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>© 2023 The Bookshelf Boutique. All Rights Reserved.</p>
    </div>
    <!--Footer end-->

</body>
</html>