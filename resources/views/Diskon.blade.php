<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/wedding.css">

    <title>Syair Moment</title>
</head>

    <body>
    <nav>
        <ul>
            <li><a href="services">Service</a></li>
            <li><a href="Diskon" class="active">Diskon</a></li>
            <li><a href="Wedding">Pernikahan</a></li>
            <li><a href="Acara">Acara</a></li>
            <li><a href="Fashion">Fashion</a></li>
            <li><a href="Editorial" >Editorial</a></li>
            <!-- Tambahkan tautan lain di sini -->
        </ul>
    </nav>

    <div class="untree_co-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6">
                    <h2 class="section-title text-center mb-3">Diskon untuk Pelanggan Baru</h2>
                    <p>Kami menghargai kepercayaan Anda pada layanan kami. Sebagai tanda terima kasih, kami ingin memberikan Anda diskon 25% untuk layanan pertama. Jadwalkan layanan Anda sekarang dan nikmati manfaatnya!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="images/hero-slider-1.jpg" alt="Image" class="img-fluid"></a>
                        <span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
                        <span>Italy</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Acara ulang tahun</a></h3>
                                <div class="price ml-auto">
                                    <span>5.000.000</span>
                                    <button onclick="addToCart('Fotografi', 300)" class="btn btn-primary btn-block">Tambah ke Keranjang</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid"></a>
                        <span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
                        <span>United States</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Acara pernikahan</a></h3>
                                <div class="price ml-auto">
                                    <span>21.000.000</span>
                                    <button onclick="addToCart('Fotografi', 300)" class="btn btn-primary btn-block">Tambah ke Keranjang</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid"></a>
                        <span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
                        <span>Malaysia</span>
                        </span>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Acara kelulusan</a></h3>
                                <div class="price ml-auto">
                                    <span>7.000.000</span>
                                    <button onclick="addToCart('Fotografi', 300)" class="btn btn-primary btn-block">Tambah ke Keranjang</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="media-1">
                        <a href="#" class="d-block mb-3"><img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid"></a>

                        <span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
                        <span>Switzerland</span>
                        </span>

                        <div class="d-flex align-items-center">
                            <div>
                                <h3><a href="#">Video & Foto Editing</a></h3>
                                <div class="price ml-auto">
                                    <span>3.000.000</span>
                                    <button onclick="addToCart('Fotografi', 300)" class="btn btn-primary btn-block">Tambah ke Keranjang</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



        <div id="cart">
            <h2>Keranjang Belanja</h2>
            <ul id="cart-items">
                <!-- Item keranjang akan ditampilkan di sini -->
            </ul>
            <p>Total: <span id="cart-total">$0</span></p>
            <button onclick="checkout()">Checkout</button>
        </div>

        <script>
            let cartItems = [];
            let cartTotal = 0;

            function addToCart(itemName, price) {
                cartItems.push(itemName);
                cartTotal += price;
                updateCart();
            }

            function updateCart() {
                const cartList = document.getElementById('cart-items');
                cartList.innerHTML = '';
                cartItems.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    cartList.appendChild(li);
                });
                const cartTotalElement = document.getElementById('cart-total');
                cartTotalElement.textContent = '$' + cartTotal;
            }

            function checkout() {
                // Proses checkout
                alert(`Total belanja: $${cartTotal}. Terima kasih telah berbelanja!`);
                cartItems = [];
                cartTotal = 0;
                updateCart();
            }
        </script>
    </section>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/moment.min.js"></script>
  <script src="js/daterangepicker.js"></script>

  <script src="js/typed.js"></script>
  
  <script src="js/custom.js"></script>
    </body>
</html>