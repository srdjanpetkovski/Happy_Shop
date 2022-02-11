<?php include 'partials/header.php' ?>

    <!-- header slider -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4 animate__animated animate__zoomIn">Big beats on the go</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4 animate_animated animate__zoomIn">See imagination on display</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slide3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="display-4 animate_animated animate__zoomIn">Life without limits</h2>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <!-- popular -->
    <section class="popular container py-5">
        <h2 class="text-center">What's popular</h2>
        <article class="owl-carousel owl-theme">
            <a class="item border d-block" href="single.php">
                <div>
                    <img src="img/pop1.jpg" alt="">
                </div>
                <h5>Product 1</h5>
            </a>
            <a class="item border d-block" href="single.php">
                <div>
                    <img src="img/pop2.jpg" alt="">
                </div>
                <h5>Product 2</h5>
            </a>
            <a class="item border d-block" href="single.php">
                <div>
                    <img src="img/pop3.jpg" alt="">
                </div>
                <h5>Product 3</h5>
            </a>
            <a class="item border d-block" href="single.php">
                <div>
                    <img src="img/pop4.jpg" alt="">
                </div>
                <h5>Product 4</h5>
            </a>
            <a class="item border d-block" href="single.php">
                <div>
                    <img src="img/pop5.jpg" alt="">
                </div>
                <h5>Product 5</h5>
            </a>
            <a class="item border d-block" href="single.php">
                <div>
                    <img src="img/pop6.jpg" alt="">
                </div>
                <h5>Product 6</h5>
            </a>
        </article>
    </section>

    <!-- new products -->
    <section class="newProducts container py-5">
        <h2 class="text-center">New products</h2>
        <article class="row mt-4">
            <div class="col-md-12 text-center">
                <ul class="nav">
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href=""><i class="fas fa-mobile-alt">&nbsp;&nbsp;</i>Mobile &amp; Tablet</a>
                        <a class="nav-link" href=""><i class="fas fa-desktop">&nbsp;&nbsp;</i>Computer</a>
                        <a class="nav-link" href=""><i class="fas fa-laptop">&nbsp;&nbsp;</i>Laptop</a>
                        <a class="nav-link" href=""><i class="fas fa-mouse-pointer">&nbsp;&nbsp;</i>Mouse</a>
                        <a class="nav-link" href=""><i class="fas fa-clock">&nbsp;&nbsp;</i>Smart watches</a>
                        <a class="nav-link" href=""><i class="fas fa-headphones-alt">&nbsp;&nbsp;</i>Accesories</a>
                    </li>
                </ul>
            </div>
        </article>
        <article class="row mt-5">
            <div class="owl-carousel owl-theme">
                <a class="item border d-block" href="single.php">
                    <div>
                        <img src="img/tablets.jpg" alt="">
                    </div>
                    <div class="text border">
                        <h5>Product 1</h5>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                            <span>100</span>
                            <span>80</span>
                        </div>
                    </div>
                </a>
                <a class="item border d-block" href="single.php">
                    <div>
                        <img src="img/camera.jpg" alt="">
                    </div>
                    <div class="text border">
                        <h5>Product 2</h5>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                            <span>120</span>
                            <span>100</span>
                        </div>
                    </div>
                </a>
                <a class="item border d-block" href="single.php">
                    <div>
                        <img src="img/phones.jpg" alt="">
                    </div>
                    <div class="text border">
                        <h5>Product 3</h5>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                            <span>200</span>
                            <span>180</span>
                        </div>
                    </div>
                </a>
                <a class="item border d-block" href="single.php">
                    <div>
                        <img src="img/tablet-samsung.jpg" alt="">
                    </div>
                    <div class="text border">
                        <h5>Product 4</h5>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="price">
                            <span>160</span>
                            <span>140</span>
                        </div>
                    </div>
                </a>
            </div>
        </article>
    </section>

<?php include 'partials/footer.php' ?>