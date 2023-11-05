<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="theme-color" content="#FFBB44" /> <!-- for android -->
        <title>عنوان سایت</title>

        <link rel="stylesheet" href="lib/bootstrap-5.3.0-alpha3-dist/css/bootstrap.rtl.min.css" />
        <script src="lib/bootstrap-5.3.0-alpha3-dist/popper.min-2.11.7.js"></script>
        <script src="lib/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>

        <!-- <link rel="stylesheet" href="lib/font-awesome/css/all.min.css" /> -->
        <link rel="stylesheet" href="lib/fontawesome-free-6.4.2-web/css/all.min.css" />
        <link rel="stylesheet" href="lib/fonts/fonts.css" />
        <link rel="stylesheet" href="css/style.css" />

    </head>



    <body class="rtl" style="background-color: #595959;">

        <div class="container w-75" dir="rtl">

            <!-- navbar -->
            <div class="row mt-1">

                <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">

                    <div class="container-fluid">

                        <!-- brand -->
                        <a class="navbar-brand" href="#">
                            <!-- Navbar -->
                            <img src="img/brand-gray.png" alt="بازرسی" width="120" height="40">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
  
                        <!-- menus -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">خانه</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        نرم افزارها
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">آمار تحلیل پزشکان</a></li>
                                        <li><a class="dropdown-item" href="#">تایمکس پزشکان</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#">ارجاعات داخلی</a></li>
                                    </ul>
                                </li>
    
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">دانلود ها</a>
                                </li>
  
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">ارتباط با ما</a>
                                </li>
                
                                <li class="nav-item">
                                    <a class="nav-link" href="#">لینک ها</a>
                                </li>
      
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">مدیریت سایت</a>
                                </li>
                                
                            </ul>

                            <!-- search -->
                            <form class="d-flex" role="search">
                                <input class="form-control me-2 h-25 mt-1" style="border-radius: 100px;" type="search" placeholder="کلمه کلیدی" aria-label="Search">
                                <button class="btn btn-sm btn-outline-secondary h-50 mt-1" style="border-radius: 100px;" type="submit"><i class="fa fa-search pt-1" aria-hidden="true"></i></button>
                            </form>

                            <!-- user profile menu -->
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <!-- put login text here if you want -->
                                        <i class="fa fa-user fa-2x m-1" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item text-end" href="#">پروفایل &nbsp;<i class='fas fa-sliders fa-1x'></i></a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-end" href="#">خروج &nbsp;<i class='fas fa-sign-out-alt fa-1x'></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                    

                        </div>
  
                    </div>
  
                </nav>

            </div>


            <!-- content -->
            <div class="row bg-dark-subtle" style="height: 800px;">

                <!-- carousel or slider -->
                <div id="carouselExampleDark" class="carousel carousel-light slide p-0">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="img/carousel/simple/img01.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/carousel/simple/img02.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="img/carousel/simple/img03.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

            </div>

            <!-- footer -->
            <div class="row bg-dark small" style="height: 300px;">

                    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 p-4 m-4 text-light" data-bs-theme="dark">

                        <div class="col mb-3">
                          <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                            <img src="img/brand-gray.png" alt="بازرسی" width="120" height="40">
                          </a>
                          <p class="text-body-secondary">© 2023</p>
                        </div>
                    
                        <div class="col mb-3">
                    
                        </div>
                    
                        <div class="col mb-3">
                          <h5>نرم افزارها</h5>
                          <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">آمار تحلیل پزشکان</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">تایمکس پزشکان</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">ارجاعات داخلی</a></li>
                          </ul>
                        </div>
                    
                        <div class="col mb-3">
                          <h5>لینک ها</h5>
                          <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">تامین اجتماعی</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">اسناد پزشکی فارس</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">قوانین سازمان</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">معرفی بازرسی</a></li>
                          </ul>
                        </div>
                    
                        <div class="col mb-3">
                          <h5>راه های ارتباطی</h5>
                          <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="tel:+987132322018" class="nav-link p-0 text-body-secondary"> <i class="fa fa-phone" aria-hidden="true"></i> 071-32322018</a></li>
                            <li class="nav-item mb-2"><a href="sms:+989176925326?body=sample text for sms" class="nav-link p-0 text-body-secondary"> <i class='fas fa-1x fa-sms' ></i> 09176925326</a></li>
                            <li class="nav-item mb-2"><a href="mailto:info@tamin.ir?subject=subject text &body=sample email body" class="nav-link p-0 text-body-secondary"> <i class='fas fa-1x fa-envelope' ></i> info@tamin.ir</a></li>
                            <li class="nav-item mb-2"><a href="https://t.me/shayanshoja" class="nav-link p-0 text-body-secondary"> <i class='fab fa-1x fa-telegram-plane' ></i> Telegram</a></li>
                            <li class="nav-item mb-2"><a href="https://wa.me/989176925326" class="nav-link p-0 text-body-secondary"> <i class='fab fa-1x fa-whatsapp' ></i> WhatsApp</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary"> <i class="fa fa-question-circle fa-1x" aria-hidden="true"></i> پرسش های متداول</a></li>
                          </ul>
                        </div>
                      </footer>

            </div>

        </div>

    </body>

</html>