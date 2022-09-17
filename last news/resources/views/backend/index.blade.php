<!DOCTYPE html>
<html lang="en">



<body>

    <div class="container">

        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>SonDAKİKA - Admin Panel</title>
            <!-- Favicon-->
            <link rel="icon" type="image/x-icon" href="https://tasarim.phpturkiye.net/assets/img/favicon.ico" />
            <!-- Font Awesome icons (free version)-->
            <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
            <!-- Google fonts-->
            <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
                rel="stylesheet" type="text/css" />
            <!-- Third party plugin CSS-->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
                rel="stylesheet" />
            <!-- Core theme CSS (includes Bootstrap)-->
            <link href="https://tasarim.phpturkiye.net/css/styles.css" rel="stylesheet" />
        </head> <br><br><br><br><br><br>

        <div style="position: relative; right: -75px ;  width: 900px">
            <p>
            <form method="get" action="http://www.google.com/search"> <input type="text" name="q"
                    size="125" maxlength="230" value=""</BR> <input type="submit" value="ARA"</BR> <input
                    type="radio" name="sitesearch" value=""</BR> GOOGLE <input type="radio" name="sitesearch"
                    value="sondakika.com" checked />SITE</br> </form>
            @csrf
            </p>
            </center>
        </div><br>

        <div style="position: relative; right: -220px ;  width: 60px" class="carousel-item active">
            <img style="width:800px ;height: 300px" src="https://tpc.googlesyndication.com/simgad/2984662756242173404"
                alt="First slide">
        </div>


        <body id="page-top">
            <!-- Navigation-->
            <nav class="navbar  navbar-expand-lg  fixed-top "
                style=" background: linear-gradient(-135deg, #212121, #2196F3); height: 120px" id="mainNav">
                <div class="container">
                    <img style="position: relative; left: -67px ;  width: 150px; height: 120px "
                        src="{{ $site_image }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">

                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        @if(Auth::user()->rolId == 1)
                        <ul class="navbar-nav ml-auto my-2 my-lg-0">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:azure"
                                    href="{{ route('index') }}">Anasayfa </a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:azure"
                                    href="{{ route('files') }}">Dosya Yöneticisi</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:azure"
                                    href="{{ route('blogs') }}">Yurt İçi Haberler</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:azure"
                                    href="{{ route('pages') }}">Yurt Dışı Haberler </a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:azure"
                                    href="{{ route('sliders') }}">Reklamlar</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:azure"
                                    href="{{ route('users') }}">Kullanıcılar</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:azure"
                                    href="{{ route('settings') }}">Site Ayarları</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:azure"
                                    href="{{ route('logout') }}">Çıkış Yap</a></li>
                        </ul>
                        @else
                        <ul class="navbar-nav ml-auto my-2 my-lg-0">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:azure"
                                    href="{{ route('blogs') }}">Yurt İçi Haberler</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:azure"
                                    href="{{ route('pages') }}">Yurt Dışı Haberler </a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:azure"
                                    href="{{ route('sliders') }}">Reklamlar</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" style="color:azure"
                                    href="{{ route('logout') }}">Çıkış Yap</a></li>
                        </ul>
                        @endif

                    </div>
                </div>
                <div class="sidebar">
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img style="position: relative; left: -18px ;  width: 60px"
                                src="{{ \Illuminate\Support\Facades\Auth::user()->avatar }}"
                                class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info "><br>

                            <a style="color:azure " href="#" "
                                    class="d-block" >{{ \Illuminate\Support\Facades\Auth::user()->name }} </a>
                            </div>
                        </div>
                </nav>
            
                <div class="carousel-inner">
                    <div style="position: relative; right: -10px ;  width: 60px" class="carousel-item active">
                        <script language="javascript" src="http://ir.sitekodlari.com/gazeteoku1.js"></script><br>
                        <script language="javascript" src="http://ir.sitekodlari.com/dovizkurlari6.js"></script>
                       
                    </div>

                  
                <div style="position: relative; left: 1051.50px ;  width: 100px">
                    <!-- Sayaclar.com Code Start  -->
                   <div align="center"><script language="Javascript" src="http://sa.sayaclar.com/c/s4.php?a=rcrwzqt&s=2a3"></script></div>
                    <!-- Sayaclar.com Code End -->
                    <script language="javascript" src="http://ir.sitekodlari.com/sitediliceviri1.js"></script>
                    <script language="javascript" src="http://ir.sitekodlari.com/tarihvesaat1.js"></script><br><br>
                    <script language="javascript" src="http://ir.sitekodlari.com/namazvakitleri1.js"></script>
                    <div>
                        <iframe src="https://www.illerarasimesafe.com/widget?sonuc-color=f8941d" scrolling="no" frameborder="0"
                        height="130" width="150" allowtransparency="true"></iframe> </div>
            <!-- Masthead-->
                </div>
                
                <div class="carousel-inner">
                    <div style="position: relative; right: -30px ;  width: 60px" class="carousel-item active"><br><br><br><br>
                        <img style="width: 160px ;height: 400px"
                        
                            src="https://s0.2mdn.net/simgad/9440331900493143409" alt="First slide">
                    </div>
            
                    <div class="carousel-inner">
                        <div style="position: relative; left: 1110px ;  width: 60px" class="carousel-item active"><br><br><br><br>
                            <img style="width: 160px ;height: 400px"
                            
                                src="https://s0.2mdn.net/simgad/9440331900493143409" alt="First slide">
                        </div>  <br><br>
                        
          

            
                {{-- <div style=" 
                position: relative; left 
                height: 100px;
                border-width: 15px;
                border-left: 25px solid  	#2196F3;
                border-right: 25px solid  	#212121;"> --}}
                
                
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                    </ol>
                    <div class="carousel-inner" style="position: relative; right: -200px ; width: 1055px;  width:900px ; height: 500px">
                      <div class="carousel-item active" >
                        <img class="d-block w-100" src="https://icdn.ensonhaber.com/resimler/diger/kok/2022/08/24/trabzonspor-kopenhag_2331.jpg" alt="First slide">
                      </div>
                                   @foreach ($blogs as $blog)
                                <div class="carousel-item ">
                                    <img class="d-block w-100" src="{{ $blog->blog_image }}" alt="Second slide">
                                </div>
                                @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> <br>

                    {{-- @foreach ($blogs as $blog)    
                            src="{{ $blog->blog_image }}"
                            @endforeach --}}

                    <marquee direction=left
                        style="color:white; background: linear-gradient(-135deg, #212121, #2196F3); width: 1000px; heigth: 60px;">
                        SonDAKİKA!!!&nbsp; &nbsp; &nbsp;Fransa'da çıkan fırtına, havalimanında kaosa neden oldu &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;SonDAKİKA!!!&nbsp; &nbsp; &nbsp;Trabzon’da tur
                        otobüsü, kırmızıda bekleyen araçların arasına daldı &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SonDAKİKA!!!&nbsp; &nbsp;
                        &nbsp;PKK'lı İBB personeli Yunanistan'a
                        kaçtı &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp;SonDAKİKA!!!&nbsp; &nbsp; &nbsp;Merkez Bankası, faizi ağustosta yüzde 13'e indirdi
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SonDAKİKA!!!&nbsp; &nbsp;
                        &nbsp;Tokat'ta çocukların ateşle oyunu
                        yangın çıkardı &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        SonDAKİKA!!!&nbsp; &nbsp; &nbsp;Gaziantep 1.800 litre kaçak akaryakıt ele geçirildi </marquee>


                    <html>
                    <div>

                        <div class="carousel-inner">
                            <div style="position: relative; right: -10px ;  width: 60px  "
                                class="carousel-item active">
                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                                <a href="https://www.mynet.com/kelime-bul"><img style="width:200px ; height: 500px"
                                        src="https://tpc.googlesyndication.com/simgad/3081903700537818205"
                                        alt="First slide">
                                </a>
                            </div><br><br><br>





                            <head>
                                <meta charset="utf-8" />
                                <meta name="viewport" content="width=device-width, initial-scale=1" />
                                <title>Snippet - GoSNippets</title>
                                <link
                                    href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
                                    rel="stylesheet" />
                                <link
                                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"
                                    rel="stylesheet" />
                                <style></style>
                                <script type="text/javascript" src=""></script>
                                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
                                </script>
                            </head>

                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="utf-8" />
                                <title>Swiper demo</title>
                                <meta name="viewport"
                                    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
                                <!-- Link Swiper's CSS -->
                                <link rel="stylesheet"
                                    href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

                                <!-- Demo styles -->
                                <style>
                                    html,
                                    body {
                                        position: relative;
                                        height: 100%;
                                    }

                                    body {
                                        background: #eee;
                                        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                                        font-size: 14px;
                                        color: #000;
                                        margin: 0;
                                        padding: 0;
                                    }

                                    .swiper {
                                        width: 75%;
                                        height: 75%;
                                    }

                                    .swiper-slide {
                                        text-align: center;
                                        font-size: 18px;
                                        background: #fff;

                                        /* Center slide text vertically */
                                        display: -webkit-box;
                                        display: -ms-flexbox;
                                        display: -webkit-flex;
                                        display: flex;
                                        -webkit-box-pack: center;
                                        -ms-flex-pack: center;
                                        -webkit-justify-content: center;
                                        justify-content: center;
                                        -webkit-box-align: center;
                                        -ms-flex-align: center;
                                        -webkit-align-items: center;
                                        align-items: center;
                                    }

                                    .swiper-slide img {
                                        display: block;
                                        width: 100%;
                                        height: 100%;
                                        object-fit: cover;
                                    }
                                </style>
                            </head>

                            <body>
                                <!-- Swiper -->
                                <h1>Yurt Dışı Haberler</h1><br><br>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($pages as $page)
                                            <div class="swiper-slide">
                                                <div class="card">
                                                    <img width="467" src="{{ $page->page_image }}"
                                                        height="300">
                                                    <div class="card-body">
                                                        <h4 class="card-title">
                                                            {{ $page->page_name }}</h4>
                                                        <p class="card-text">

                                                            {{ $page->page_description }}
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div><br><br>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination"></div>
                                </div>

                                <!-- Swiper JS -->
                                <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

                                <!-- Initialize Swiper -->
                                <script>
                                    var swiper = new Swiper(".mySwiper", {
                                        slidesPerView: 3,
                                        spaceBetween: 30,
                                        slidesPerGroup: 3,
                                        loop: true,
                                        loopFillGroupWithBlank: true,
                                        pagination: {
                                            el: ".swiper-pagination",
                                            clickable: true,
                                        },
                                        navigation: {
                                            nextEl: ".swiper-button-next",
                                            prevEl: ".swiper-button-prev",
                                        },
                                    });
                                </script>
                            </body>

                            </html>


                            <div style="position: relative; right: -1120px ;  width: 60px"
                                class="carousel-item active"><br><br><br><br><br><br><br><br><br><br><br><br>

                                <a href="https://www.yatsan.com/"><img style="width:200px ;height: 450px"
                                        src="https://tpc.googlesyndication.com/simgad/2487631105103566827"
                                        alt="First slide">
                                </a>
                            </div>



                            <head>
                                <meta charset="utf-8" />
                                <meta name="viewport" content="width=device-width, initial-scale=1" />
                                <title>Snippet - GoSNippets</title>
                                <link href="" rel="stylesheet" />
                                <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
                                    rel="stylesheet" />
                                <style>
                                    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

                                    * {
                                        margin: 0;
                                        padding: 0;
                                        box-sizing: border-box;
                                        font-family: 'Poppins', sans-serif;
                                    }

                                    body {
                                        height: 100%;
                                        width: 100%;
                                        text-align: center;
                                        background: #f2f2f2;
                                    }

                                    .wrapper {
                                        display: grid;
                                        margin: 100px 30px auto;
                                        grid-gap: 20px;
                                        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                                    }

                                    @media (max-width: 700px) {
                                        .wrapper {
                                            margin: 200px auto;
                                        }
                                    }

                                    .wrapper .box {

                                        width: 350px;
                                        margin: 0 auto;
                                        position: relative;
                                        perspective: 1000px;
                                    }

                                    .wrapper .box .front-face {

                                        background: linear-gradient(-135deg, #212121, #2196F3);
                                        height: 220px;
                                        width: 100%;
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: center;
                                        box-shadow: 0px 5px 20px 0px rgba(0, 81, 250, 0.1);
                                        transition: all 0.5s ease;
                                    }

                                    .box .front-face .icon {}

                                    .box .front-face .icon i {
                                        font-size: 65px;
                                    }

                                    .box .front-face span,
                                    .box .back-face span {

                                        font-size: 22px;
                                        font-weight: 600;
                                        text-transform: uppercase;
                                    }

                                    .box .front-face .icon i,
                                    .box .front-face span {
                                        background: white;
                                        -webkit-background-clip: text;
                                        -webkit-text-fill-color: transparent;
                                    }

                                    .box .back-face {
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        z-index: 1;
                                        height: 220px;
                                        width: 100%;
                                        padding: 30px;
                                        color: #fff;
                                        opacity: 0;
                                        transform-style: preserve-3d;
                                        backface-visibility: hidden;
                                        background: linear-gradient(-135deg, #2196F3, #212121);
                                        transform: translateY(110px) rotateX(-90deg);
                                        box-shadow: 0px 5px 20px 0px rgba(0, 81, 250, 0.1);
                                        transition: all 0.5s ease;
                                    }

                                    .box .back-face p {

                                        margin-top: 10px;
                                        text-align: justify;
                                    }

                                    .box:hover .back-face {
                                        opacity: 1;
                                        transform: rotateX(0deg);
                                    }

                                    .box:hover .front-face {
                                        opacity: 0;
                                        transform: translateY(-110px) rotateX(90deg);
                                    }
                                </style>


                                <script type="text/javascript" src=""></script>
                                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                                <script type="text/javascript" src=""></script>
                            </head>

                            <body style="text-align: center; " oncontextmenu="return false" class="snippet-body">
                                <div class="wrapper" style="width: 75%; position: relative; right: -12% ;  ">
                                    @foreach ($categories as $category)
                                        <div style="align:center" class="box">
                                            <div class="front-face">
                                                <img style=" height:200px; width: 60px"" class="d-block w-100"
                                                    src="https://www.sondakika.net.tr/s/i/facebook-default-share.png"
                                                    alt="First slide">
                                                <span>{{ $category->category_name }}</span>
                                            </div>
                                            <div class="back-face">
                                                <span>Kategori Oluşturma tarihi</span><br><br>

                                                <h5>{{ $category->created_at }}</h5>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <script type="text/javascript"></script>
                            </body>

                    </html>



                    <html>

                    <head>
                        <meta charset="utf-8" />
                        <meta name="viewport" content="width=device-width, initial-scale=1" />
                        <title>Snippet - GoSNippets</title>
                        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
                            rel="stylesheet" />
                        <link href="" rel="stylesheet" />
                        <style>
                            .my-circle {
                                width: 50px;
                                height: 50px;
                                text-align: center;
                                vertical-align: middle;
                            }
                        </style>
                        <script type="text/javascript" src=""></script>
                        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
                        </script>
                    </head>

                    <body oncontextmenu="return false" class="snippet-body">
                        <!DOCTYPE html>
                        <html lang="pt-br" dir="ltr">

                        <head>
                            <meta charset="utf-8" />
                            <title></title>
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
                                rel="stylesheet"
                                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
                                crossorigin="anonymous" />
                            <link rel="stylesheet"
                                href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
                        </head>

                        <body> <br><br><br><br>
                            <div class="carousel-inner"><br><br><br><br><br><br>





                                <div class="container">
                                    <h1 style="position: relative; right: 175px ;  width: 1500px ; color: #FAFAFA;  background: linear-gradient(-135deg, #2196F3, #212121);;"
                                        class="text-center mt-0"><strong>
                                            <h2 style="position: relative; right: -50px ;  width: "> Haberler </h2>
                                        </strong> </h2>
                                    </h1>
                                    <hr class="divider my-4">
                                    <div class="row">



                                        <div class="container-full mt-3">
                                            <div style="position: relative; right: -10px ;  width: 1250px  "
                                                class="row g-3 mx-0">
                                                @foreach ($blogs as $blog)
                                                    <div class="col-12 col-sm-6 col-lg-4">
                                                        <div
                                                            class="position-relative bg-light border shadow h-100 mt-3">
                                                            <i
                                                                class="position-absolute top-0 end-0 bi bi-star-fill text-warning pe-1 fs-3"></i>

                                                            <td>
                                                                <img width="325" src="{{ $blog->blog_image }}"
                                                                    height="350px" class="card-img-top"
                                                                    alt="Card Image">
                                                            <td>

                                                                <h5 class="p-3">{{ $blog->blog_title }}</h5>
                                                                <p class="card-text mb-4 border-bottom p-3">
                                                            <td>{{ $blog->blog_description }}</td>
                                                            </p>
                                                            <div class="position-absolute bottom-0 end-1 p-3">
                                                                <h>Haber Kaynağı</h>
                                                                <a
                                                                    href="https://www.ensonhaber.com/" target="_blank" >https://www.sondakika.com/</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div><br><br><br><br>


                                            <div style="position: relative; right: 30px ;  width: 60px"
                                                class="carousel-item active"><br><br><br><br><br><br>
                                                <a
                                                    href="https://www.trendyol.com/quantum-gunes-gozlugu-x-b104574-c105?tyutm_source=google&tyutm_medium=cpc&tyutm_campaign=x:dsa_type:sitemap_brandcategory_gl_s_&gclid=Cj0KCQjw0oyYBhDGARIsAMZEuMvLU5oDXFhh3V1_psVdFYc62NqwrkdA33Nxj1EcbLawdvyd4W5FsA8aAukeEALw_wcB&gclsrc=aw.ds">
                                                    <img style="width:200px ; height: 500px"
                                                        src="https://tpc.googlesyndication.com/simgad/1210563769579578399?sqp=4sqPyQQ7QjkqNxABHQAAtEIgASgBMAk4A0DwkwlYAWBfcAKAAQGIAQGdAQAAgD-oAQGwAYCt4gS4AV_FAS2ynT4&rs=AOga4qklMlVR63_JBweVpzjObxTH-Q5_3w"
                                                        alt="First slide"></a>


                                                <div style="position: relative; right: -20px;  width: 100px">
                                                    <br><br><br><br><br><br>
                                                    <script language="javascript" src="http://ir.sitekodlari.com/sansoyunlari1.js"></script>
                                                </div>


                                            </div>



                                            <div class="container">

                                                <h1 style="position: relative; right: 175px ;  width: 1500px ; color: #FAFAFA;  background: linear-gradient(-135deg, #2196F3, #212121);;"
                                                    class="text-center mt-0"><strong>
                                                        <h2 style="position: relative; right: -50px ;  width: ">
                                                            Reklamlar </h2>
                                                    </strong> </h2>
                                                </h1>
                                                <hr class="divider my-4">
                                                <div class="row">


                                                    @foreach ($sliders as $slider)
                                                        <tr>
                                                            <div
                                                                style="position: relative; right: -50px ;  width: 1300px  ">
                                                                <td><img style="width:1000 ;height: 500px"
                                                                        src="{{ $slider->slider_image }}">
                                                                    <h5><br><br><br>
                                                                <td>{{ $slider->slider_name }}</td><br><br><br>
                                                                </h5>
                                                                <div class="position-absolute bottom-0 end-1 p-3">
                                                                    <h>Reklam Kaynağı</h>
                                                                    <a href="#">{{ $slider->slider_url }}</a>
                                                                </div>
                                                            </div>
                                                    @endforeach



                                                    <div style="position: relative; right: 1550px ;  width: 60px"
                                                        class="carousel-item active">
                                                        <img style="width:225px ;height: 450px"
                                                            src="https://tpc.googlesyndication.com/simgad/2487631105103566827"
                                                            alt="First slide">
                                                    </div>



                                                    <!-- Portfolio-->

                                                    <div class="container"><br><br><br><br>
                                                        <h1 style="position: relative; right: 175px ;  width: 1500px ; color: #FAFAFA;  background: linear-gradient(-135deg, #2196F3, #212121);;"
                                                            class="text-center mt-0"><strong>
                                                                <h2
                                                                    style="position: relative; right: -50px ;  width: ">
                                                                    Sponsorlar </h2>
                                                            </strong> </h2>
                                                        </h1>
                                                        <hr class="divider my-4" />
                                                        <div class="row">

                                                            <!DOCTYPE html>
                                                            <html>

                                                            <head>
                                                                <meta charset="utf-8" />
                                                                <meta name="viewport"
                                                                    content="width=device-width, initial-scale=1" />
                                                                <title>Snippet - GoSNippets</title>
                                                                <link
                                                                    href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
                                                                    rel="stylesheet" />
                                                                <link
                                                                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"
                                                                    rel="stylesheet" />
                                                                <style></style>
                                                                <script type="text/javascript" src=""></script>
                                                                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                                                                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
                                                                </script>
                                                            </head>

                                                            <body oncontextmenu="return false" class="snippet-body">
                                                                <section class="pt-5 pb-5">
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            <div class="col-6">

                                                                            </div>
                                                                            <div class="col-6 text-right">
                                                                                <a class="btn btn-primary mb-3 mr-1"
                                                                                    href="#carouselExampleIndicators2"
                                                                                    role="button" data-slide="prev">
                                                                                    <i class="fa fa-arrow-left"></i>
                                                                                </a>
                                                                                <a class="btn btn-primary mb-3"
                                                                                    href="#carouselExampleIndicators2"
                                                                                    role="button" data-slide="next">
                                                                                    <i class="fa fa-arrow-right"></i>
                                                                                </a>
                                                                            </div>
                                                                            <div class="col-12">
                                                                                <div id="carouselExampleIndicators2"
                                                                                    class="carousel slide"
                                                                                    data-ride="carousel">
                                                                                    <div class="carousel-inner">
                                                                                        <div
                                                                                            class="carousel-item active">
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-md-4 mb-3">
                                                                                                    <div
                                                                                                        class="card">
                                                                                                        <img class="img-fluid"
                                                                                                            alt="100%x280"
                                                                                                            src="https://ortanet.net/wp-content/uploads/2022/03/gvesb-380x260.png" />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-md-4 mb-3">
                                                                                                    <div
                                                                                                        class="card">
                                                                                                        <img style="height: 260px; widht:270px"
                                                                                                            class="img-fluid"
                                                                                                            alt="100%x280"
                                                                                                            src="https://www.ehaliyle.com/wp-content/uploads/2018/10/google-ranking-factors.png" />

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-md-4 mb-3">
                                                                                                    <div
                                                                                                        class="card">
                                                                                                        <img style="height: 260px; widht:260px"
                                                                                                            class="img-fluid"
                                                                                                            alt="100%x280"
                                                                                                            src="https://trthaberstatic.cdn.wp.trt.com.tr/mobile/static/images/trt-haber-share-logo.png" />

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="carousel-item">
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-md-4 mb-3">
                                                                                                    <div
                                                                                                        class="card">
                                                                                                        <img style="height: 260px; widht:270px"
                                                                                                            class="img-fluid"
                                                                                                            alt="100%x280"
                                                                                                            src="https://www.yurtgazetesi.com.tr/d/news/189309.jpg" />

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-md-4 mb-3">
                                                                                                    <div
                                                                                                        class="card">
                                                                                                        <img style="height: 260px; widht:270px"
                                                                                                            class="img-fluid"
                                                                                                            alt="100%x280"
                                                                                                            src="https://mir-s3-cdn-cf.behance.net/project_modules/hd/d77a6343106623.57e3765daad26.jpg" />

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-md-4 mb-3">
                                                                                                    <div
                                                                                                        class="card">
                                                                                                        <img style="height: 260px; widht:270px"
                                                                                                            class="img-fluid"
                                                                                                            alt="100%x280"
                                                                                                            src="https://yt3.ggpht.com/ytc/AMLnZu_Nf_uScInJ_lMBgIh34z9eOh2_U8aEz1J9z_0m=s900-c-k-c0x00ffffff-no-rj" />

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="carousel-item">
                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-md-4 mb-3">
                                                                                                    <div
                                                                                                        class="card">
                                                                                                        <img style="height: 260px; widht:270px"
                                                                                                            class="img-fluid"
                                                                                                            alt="100%x280"
                                                                                                            src="https://sggm.saglik.gov.tr/Resim/44650/0/kkkpng.png" />

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-md-4 mb-3">
                                                                                                    <div
                                                                                                        class="card">
                                                                                                        <img style="height: 260px; widht:270px"
                                                                                                            class="img-fluid"
                                                                                                            alt="100%x280"
                                                                                                            src="https://skillman.eu/wp-content/uploads/2018/08/39765_73.-Ondokuz-Mayis-University.jpg" />

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-md-4 mb-3">
                                                                                                    <div
                                                                                                        class="card">
                                                                                                        <img style="height: 260px; widht:270px"
                                                                                                            class="img-fluid"
                                                                                                            alt="100%x280"
                                                                                                            src="http://piraziz.meb.gov.tr/meb_iys_dosyalar/2019_01/07121632_T.C.Milli_EYitim_BakanlYYY_Logo_orta_kullanYm.jpg" />

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                                <script type="text/javascript"></script>
                                                            </body>

                                                            </html>

                                                            <div style="position: relative; right: -18px ;  width: 60px"
                                                                class="carousel-item active">
                                                                <img style="width:225px ;height: 450px"
                                                                    src="https://tpc.googlesyndication.com/simgad/2487631105103566827"
                                                                    alt="First slide">
                                                            </div>



                                                            <!doctype html>
                                                            <html>

                                                            <head>
                                                                <meta charset='utf-8'>
                                                                <meta name='viewport'
                                                                    content='width=device-width, initial-scale=1'>
                                                                <title>Snippet - GoSNippets</title>
                                                                <link
                                                                    href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css'
                                                                    rel='stylesheet'>
                                                                <link
                                                                    href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'
                                                                    rel='stylesheet'>
                                                                <style>
                                                                    .our-team {
                                                                        text-align: center;
                                                                        border-radius: 20px;
                                                                        overflow: hidden;
                                                                        position: relative;
                                                                        transition: all 0.3s ease 0s;
                                                                    }

                                                                    .our-team .pic {
                                                                        background: #f6931e;
                                                                        transition: all 0.3s ease 0s;
                                                                    }

                                                                    .our-team:hover .pic {
                                                                        padding: 10px;
                                                                        border-radius: 10px;
                                                                        transform: scale(0.5) translateY(-30%);
                                                                    }

                                                                    .our-team .pic img {
                                                                        width: 100%;
                                                                        height: auto;
                                                                    }

                                                                    .our-team .team-content {
                                                                        width: 100%;
                                                                        padding: 7px 15px;
                                                                        background: #f6931e;
                                                                        position: absolute;
                                                                        bottom: -30%;
                                                                        right: 0;
                                                                        opacity: 0;
                                                                        transition: all 0.3s ease 0s;
                                                                    }

                                                                    .our-team:hover .team-content {
                                                                        opacity: 1;
                                                                        bottom: -10px;
                                                                    }

                                                                    .our-team .title {
                                                                        font-size: 22px;
                                                                        color: #fff;
                                                                        text-transform: uppercase;
                                                                        letter-spacing: 1px;
                                                                        margin: 0 0 5px 0;
                                                                    }

                                                                    .our-team .post {
                                                                        display: block;
                                                                        font-size: 15px;
                                                                        font-weight: 600;
                                                                        color: #fff;
                                                                        font-style: italic;
                                                                        text-transform: capitalize;
                                                                        margin: 0 0 5px 0;
                                                                    }

                                                                    .our-team .social {
                                                                        padding: 0;
                                                                        margin: 0;
                                                                        list-style: none;
                                                                        transition: all 0.35s ease 0s;
                                                                    }

                                                                    .our-team .social li {
                                                                        display: inline-block;
                                                                        margin: 0 5px 0 0;
                                                                    }

                                                                    .our-team .social li a {
                                                                        display: block;
                                                                        width: 40px;
                                                                        height: 40px;
                                                                        line-height: 40px;
                                                                        border-radius: 15px 0 15px 0;
                                                                        font-size: 20px;
                                                                        color: #fff;
                                                                        overflow: hidden;
                                                                        z-index: 1;
                                                                        position: relative;
                                                                        transition: all 0.35s ease 0s;
                                                                    }

                                                                    .our-team .social li a:before {
                                                                        content: "";
                                                                        width: 100%;
                                                                        height: 100%;
                                                                        background: #e06f06;
                                                                        position: absolute;
                                                                        top: 0;
                                                                        left: -100%;
                                                                        z-index: -1;
                                                                        transition: all 0.3s ease-in-out 0s;
                                                                    }

                                                                    .our-team .social li a:hover:before {
                                                                        left: 0;
                                                                    }

                                                                    @media only screen and (max-width: 990px) {
                                                                        .our-team {
                                                                            margin-bottom: 30px;
                                                                        }
                                                                    }
                                                                </style>
                                                                <script type='text/javascript' src=''></script>
                                                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'>
                                                                </script>
                                                            </head>

                                                            <body oncontextmenu='return false' class='snippet-body'>
                                                                <div class="container" style="padding-top:30px">
                                                                    <div class="row text-center">
                                                                        <h1 class="white">Yönetim Ekibi</h1>
                                                                    </div><br />
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <div class="our-team">
                                                                                <div class="pic">
                                                                                    <img
                                                                                        src="https://img.freepik.com/free-photo/man-smiling-with-arms-crossed_1187-2903.jpg?w=2000">
                                                                                </div>
                                                                                <div class="team-content">
                                                                                    <h3 class="title">Admİn</h3>
                                                                                    <span class="post">Web
                                                                                        Developer</span>
                                                                                    <ul class="social">
                                                                                        <li><a
                                                                                                href="https://www.facebook.com/"><i
                                                                                                    class="fab fa-facebook"></i></a>
                                                                                        </li>
                                                                                        <li><a
                                                                                                href="https://twitter.com/login?lang=tr"><i
                                                                                                    class="fab fa-twitter"></i></a>
                                                                                        </li>
                                                                                        <li><a
                                                                                                href="https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&flowName=GlifWebSignIn&flowEntry=AddSession"><i
                                                                                                    class="fab fa-google-plus"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <div class="our-team">
                                                                                <div class="pic">
                                                                                    <img
                                                                                        src="https://phlearn.com/wp-content/uploads/2018/06/Change-Remove-Backgrounds-Replace-After.jpg">
                                                                                </div>
                                                                                <div class="team-content">
                                                                                    <h3 class="title">Moderatör
                                                                                    </h3>
                                                                                    <span class="post">Web
                                                                                        Designer</span>
                                                                                    <ul class="social">
                                                                                        <li><a
                                                                                                href="https://www.facebook.com/"><i
                                                                                                    class="fab fa-facebook"></i></a>
                                                                                        </li>
                                                                                        <li><a
                                                                                                href="https://twitter.com/login?lang=tr"><i
                                                                                                    class="fab fa-twitter"></i></a>
                                                                                        </li>
                                                                                        <li><a
                                                                                                href="https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&flowName=GlifWebSignIn&flowEntry=AddSession"><i
                                                                                                    class="fab fa-google-plus"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <div class="our-team">
                                                                                <div class="pic">
                                                                                    <img
                                                                                        src="https://media.istockphoto.com/photos/portrait-of-handsome-smiling-young-man-with-crossed-arms-picture-id1200677760?k=20&m=1200677760&s=612x612&w=0&h=JCqytPoHb6bQqU9bq6gsWT2EX1G5chlW5aNK81Kh4Lg=">
                                                                                </div>
                                                                                <div class="team-content">
                                                                                    <h3 class="title">Moderatör
                                                                                        Yardımcısı</h3>
                                                                                    <span class="post">Laravel
                                                                                        Developer</span>
                                                                                    <ul class="social">
                                                                                        <li><a
                                                                                                href="https://www.facebook.com/"><i
                                                                                                    class="fab fa-facebook"></i></a>
                                                                                        </li>
                                                                                        <li><a
                                                                                                href="https://twitter.com/login?lang=tr"><i
                                                                                                    class="fab fa-twitter"></i></a>
                                                                                        </li>
                                                                                        <li><a
                                                                                                href="https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&flowName=GlifWebSignIn&flowEntry=AddSession"><i
                                                                                                    class="fab fa-google-plus"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <script type='text/javascript'></script>
                                                            </body>

                                                            </html>

                                                            <!-- Contact-->
                                                            <section class="page-section" id="contact">
                                                                <div class="container">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-lg-8 text-center">
                                                                            <h2 class="mt-0">
                                                                                Taraftar değil
                                                                                HABERCİYİZ</h2>
                                                                            <hr class="divider my-4" />
                                                                            <p class="text-muted mb-5">
                                                                                Yayınlanmasını
                                                                                istediğiniz haberi veya
                                                                                haberler için bizimle
                                                                                iletişime geçebilirsiniz
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                                                                            <i
                                                                                class="fas fa-phone fa-3x mb-3 text-muted"></i>
                                                                            <div>Telefon:(555) 555 55 55
                                                                                <br>
                                                                                Moderatör Telefon:(555)
                                                                                555 55 55
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-4 mr-auto text-center">
                                                                            <i
                                                                                class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                                                                            <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                                                                            <a class="d-block"
                                                                                href="mailto:contact@yourwebsite.com">sondakika@gmail.com</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>

                                                            <!DOCTYPE html>
                                                            <html>

                                                            <head>
                                                                <meta charset="utf-8" />
                                                                <meta name="viewport"
                                                                    content="width=device-width, initial-scale=1" />
                                                                <title>Snippet - GoSNippets</title>
                                                                <link
                                                                    href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
                                                                    rel="stylesheet" />
                                                                <link
                                                                    href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
                                                                    rel="stylesheet" />
                                                                <style>
                                                                    h1 {
                                                                        margin-top: 40px;
                                                                    }

                                                                    .social-icons {
                                                                        margin-top: 30px;
                                                                    }

                                                                    .btn {
                                                                        padding: 10px 25px 10px 25px;
                                                                        border: none;
                                                                        font-size: 30px;
                                                                    }
                                                                </style>
                                                                <script type="text/javascript" src=""></script>
                                                                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                                                                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
                                                                </script>
                                                            </head>

                                                            <!DOCTYPE html>
                                                            <html>

                                                            <head>
                                                                <meta charset="utf-8" />
                                                                <meta name="viewport"
                                                                    content="width=device-width, initial-scale=1" />
                                                                <title>Snippet - GoSNippets</title>
                                                                <link
                                                                    href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
                                                                    rel="stylesheet" />
                                                                <link href="" rel="stylesheet" />
                                                                <style>
                                                                    * {
                                                                        margin: 0px;
                                                                        padding: 0px;
                                                                        box-sizing: border-box;
                                                                    }

                                                                    body,
                                                                    html {
                                                                        height: 100%;
                                                                        font-family: Montserrat-Regular, sans-serif;
                                                                    }

                                                                    a {
                                                                        font-family: Montserrat-Regular;
                                                                        font-size: 14px;
                                                                        line-height: 1.7;
                                                                        color: #666666;
                                                                        margin: 0px;
                                                                        transition: all 0.4s;
                                                                        -webkit-transition: all 0.4s;
                                                                        -o-transition: all 0.4s;
                                                                        -moz-transition: all 0.4s;
                                                                    }

                                                                    a:focus {
                                                                        outline: none !important;
                                                                    }

                                                                    a:hover {
                                                                        text-decoration: none;
                                                                        color: #57b846;
                                                                    }

                                                                    h1,
                                                                    h2,
                                                                    h3,
                                                                    h4,
                                                                    h5,
                                                                    h6 {
                                                                        margin: 0px;
                                                                    }

                                                                    p {
                                                                        font-family: Montserrat-Regular;
                                                                        font-size: 14px;
                                                                        line-height: 1.7;
                                                                        color: #666666;
                                                                        margin: 0px;
                                                                    }

                                                                    ul,
                                                                    li {
                                                                        margin: 0px;
                                                                        list-style-type: none;
                                                                    }

                                                                    input {
                                                                        outline: none;
                                                                        border: none;
                                                                    }

                                                                    textarea {
                                                                        outline: none;
                                                                        border: none;
                                                                    }

                                                                    textarea:focus,
                                                                    input:focus {
                                                                        border-color: transparent !important;
                                                                    }

                                                                    input:focus::-webkit-input-placeholder {
                                                                        color: transparent;
                                                                    }

                                                                    input:focus:-moz-placeholder {
                                                                        color: transparent;
                                                                    }

                                                                    input:focus::-moz-placeholder {
                                                                        color: transparent;
                                                                    }

                                                                    input:focus:-ms-input-placeholder {
                                                                        color: transparent;
                                                                    }

                                                                    textarea:focus::-webkit-input-placeholder {
                                                                        color: transparent;
                                                                    }

                                                                    textarea:focus:-moz-placeholder {
                                                                        color: transparent;
                                                                    }

                                                                    textarea:focus::-moz-placeholder {
                                                                        color: transparent;
                                                                    }

                                                                    textarea:focus:-ms-input-placeholder {
                                                                        color: transparent;
                                                                    }

                                                                    input::-webkit-input-placeholder {
                                                                        color: #aaaaaa;
                                                                    }

                                                                    input:-moz-placeholder {
                                                                        color: #aaaaaa;
                                                                    }

                                                                    input::-moz-placeholder {
                                                                        color: #aaaaaa;
                                                                    }

                                                                    input:-ms-input-placeholder {
                                                                        color: #aaaaaa;
                                                                    }

                                                                    textarea::-webkit-input-placeholder {
                                                                        color: #aaaaaa;
                                                                    }

                                                                    textarea:-moz-placeholder {
                                                                        color: #aaaaaa;
                                                                    }

                                                                    textarea::-moz-placeholder {
                                                                        color: #aaaaaa;
                                                                    }

                                                                    textarea:-ms-input-placeholder {
                                                                        color: #aaaaaa;
                                                                    }

                                                                    /*---------------------------------------------*/
                                                                    button {
                                                                        outline: none !important;
                                                                        border: none;
                                                                        background: transparent;
                                                                    }

                                                                    button:hover {
                                                                        cursor: pointer;
                                                                    }

                                                                    iframe {
                                                                        border: none !important;
                                                                    }

                                                                    .bg-contact100 {
                                                                        width: 100%;
                                                                        background-repeat: no-repeat;
                                                                        background-position: center center;
                                                                        background-size: cover;
                                                                    }

                                                                    .container-contact100 {
                                                                        width: 100%;
                                                                        min-height: 100vh;
                                                                        display: -webkit-box;
                                                                        display: -webkit-flex;
                                                                        display: -moz-box;
                                                                        display: -ms-flexbox;
                                                                        display: flex;
                                                                        flex-wrap: wrap;
                                                                        justify-content: center;
                                                                        align-items: center;
                                                                        padding: 15px;
                                                                        background: linear-gradient(-135deg, #212121, #2196F3);
                                                                    }

                                                                    .wrap-contact100 {
                                                                        width: 1163px;
                                                                        background: #fff;
                                                                        border-radius: 10px;
                                                                        overflow: hidden;

                                                                        display: -webkit-box;
                                                                        display: -webkit-flex;
                                                                        display: -moz-box;
                                                                        display: -ms-flexbox;
                                                                        display: flex;
                                                                        flex-wrap: wrap;
                                                                        justify-content: space-between;
                                                                        padding: 110px 130px 157px 148px;
                                                                    }

                                                                    /*------------------------------------------------------------------
                                                            [  ]*/
                                                                    .contact100-pic {
                                                                        width: 310px;
                                                                        padding-top: 55px;
                                                                    }

                                                                    .contact100-pic img {
                                                                        max-width: 100%;
                                                                    }

                                                                    .contact100-form {
                                                                        width: 390px;
                                                                    }

                                                                    .contact100-form-title {
                                                                        display: block;
                                                                        font-family: Montserrat-ExtraBold;
                                                                        font-size: 24px;
                                                                        color: #333333;
                                                                        line-height: 1.2;
                                                                        text-align: left;
                                                                        padding-bottom: 36px;
                                                                    }

                                                                    input.input100 {
                                                                        height: 50px;
                                                                        border-radius: 25px;
                                                                        padding: 0 30px 0 50px;
                                                                    }

                                                                    input.input100[name='email'] {
                                                                        padding: 0 30px 0 54px;
                                                                    }

                                                                    textarea.input100 {
                                                                        min-height: 150px;
                                                                        border-radius: 25px;
                                                                        padding: 14px 30px;
                                                                    }

                                                                    .wrap-input100 {
                                                                        position: relative;
                                                                        width: 100%;
                                                                        z-index: 1;
                                                                        margin-bottom: 10px;
                                                                    }

                                                                    .input100 {
                                                                        display: block;
                                                                        width: 100%;
                                                                        background: #e6e6e6;
                                                                        font-family: Montserrat-Bold;
                                                                        font-size: 15px;
                                                                        line-height: 1.5;
                                                                        color: #666666;
                                                                    }

                                                                    .focus-input100 {
                                                                        display: block;
                                                                        position: absolute;
                                                                        border-radius: 25px;
                                                                        bottom: 0;
                                                                        left: 0;
                                                                        z-index: -1;
                                                                        width: 100%;
                                                                        height: 100%;
                                                                        box-shadow: 0px 0px 0px 0px;
                                                                        color: linear-gradient(-135deg, #212121, #2196F3);
                                                                    }

                                                                    .input100:focus+.focus-input100 {
                                                                        -webkit-animation: anim-shadow 0.5s ease-in-out forwards;
                                                                        animation: anim-shadow 0.5s ease-in-out forwards;
                                                                    }

                                                                    @-webkit-keyframes anim-shadow {
                                                                        to {
                                                                            box-shadow: 0px 0px 60px 25px;
                                                                            opacity: 0;
                                                                        }
                                                                    }

                                                                    @keyframes anim-shadow {
                                                                        to {
                                                                            box-shadow: 0px 0px 60px 25px;
                                                                            opacity: 0;
                                                                        }
                                                                    }

                                                                    .symbol-input100 {
                                                                        display: -webkit-box;
                                                                        display: -webkit-flex;
                                                                        display: -moz-box;
                                                                        display: -ms-flexbox;
                                                                        display: flex;
                                                                        align-items: center;
                                                                        position: absolute;
                                                                        border-radius: 25px;
                                                                        bottom: 0;
                                                                        left: 0;
                                                                        width: 100%;
                                                                        height: 100%;
                                                                        padding-left: 30px;
                                                                        pointer-events: none;
                                                                        color: #aaaaaa;
                                                                        font-size: 15px;

                                                                        -webkit-transition: all 0.4s;
                                                                        -o-transition: all 0.4s;
                                                                        -moz-transition: all 0.4s;
                                                                        transition: all 0.4s;
                                                                    }

                                                                    .input100:focus+.focus-input100+.symbol-input100 {
                                                                        color: linear-gradient(-135deg, #212121, #2196F3);
                                                                        padding-left: 22px;
                                                                    }

                                                                    .container-contact100-form-btn {
                                                                        width: 100%;
                                                                        display: -webkit-box;
                                                                        display: -webkit-flex;
                                                                        display: -moz-box;
                                                                        display: -ms-flexbox;
                                                                        display: flex;
                                                                        flex-wrap: wrap;
                                                                        justify-content: center;
                                                                        padding-top: 20px;
                                                                    }

                                                                    .contact100-form-btn {
                                                                        width: 100%;
                                                                        height: 50px;
                                                                        border-radius: 25px;
                                                                        background: linear-gradient(-135deg, #212121, #2196F3);
                                                                        font-family: Montserrat-Bold;
                                                                        font-size: 15px;
                                                                        line-height: 1.5;
                                                                        color: #fff;
                                                                        display: -webkit-box;
                                                                        display: -webkit-flex;
                                                                        display: -moz-box;
                                                                        display: -ms-flexbox;
                                                                        display: flex;
                                                                        justify-content: center;
                                                                        align-items: center;
                                                                        padding: 0 25px;

                                                                        -webkit-transition: all 0.4s;
                                                                        -o-transition: all 0.4s;
                                                                        -moz-transition: all 0.4s;
                                                                        transition: all 0.4s;
                                                                    }

                                                                    .contact100-form-btn:hover {
                                                                        background: #333333;
                                                                    }

                                                                    @media (max-width: 1200px) {
                                                                        .contact100-pic {
                                                                            width: 33.5%;
                                                                        }

                                                                        .contact100-form {
                                                                            width: 44%;
                                                                        }
                                                                    }

                                                                    @media (max-width: 992px) {
                                                                        .wrap-contact100 {
                                                                            padding: 110px 80px 157px 90px;
                                                                        }

                                                                        .contact100-pic {
                                                                            width: 35%;
                                                                        }

                                                                        .contact100-form {
                                                                            width: 55%;
                                                                        }
                                                                    }

                                                                    @media (max-width: 768px) {
                                                                        .wrap-contact100 {
                                                                            padding: 110px 80px 157px 80px;
                                                                        }

                                                                        .contact100-pic {
                                                                            display: none;
                                                                        }

                                                                        .contact100-form {
                                                                            width: 100%;
                                                                        }
                                                                    }

                                                                    @media (max-width: 576px) {
                                                                        .wrap-contact100 {
                                                                            padding: 110px 15px 157px 15px;
                                                                        }
                                                                    }

                                                                    .validate-input {
                                                                        position: relative;
                                                                    }

                                                                    .alert-validate::before {
                                                                        content: attr(data-validate);
                                                                        position: absolute;
                                                                        max-width: 70%;
                                                                        background-color: white;
                                                                        border: 1px solid #c80000;
                                                                        border-radius: 13px;
                                                                        padding: 4px 25px 4px 10px;
                                                                        top: 50%;
                                                                        -webkit-transform: translateY(-50%);
                                                                        -moz-transform: translateY(-50%);
                                                                        -ms-transform: translateY(-50%);
                                                                        -o-transform: translateY(-50%);
                                                                        transform: translateY(-50%);
                                                                        right: 8px;
                                                                        pointer-events: none;

                                                                        font-family: Montserrat-Medium;
                                                                        color: #c80000;
                                                                        font-size: 13px;
                                                                        line-height: 1.4;
                                                                        text-align: left;

                                                                        visibility: hidden;
                                                                        opacity: 0;

                                                                        -webkit-transition: opacity 0.4s;
                                                                        -o-transition: opacity 0.4s;
                                                                        -moz-transition: opacity 0.4s;
                                                                        transition: opacity 0.4s;
                                                                    }

                                                                    .alert-validate::after {
                                                                        content: '\f06a';
                                                                        font-family: FontAwesome;
                                                                        display: block;
                                                                        position: absolute;
                                                                        color: #c80000;
                                                                        font-size: 15px;
                                                                        top: 50%;
                                                                        -webkit-transform: translateY(-50%);
                                                                        -moz-transform: translateY(-50%);
                                                                        -ms-transform: translateY(-50%);
                                                                        -o-transform: translateY(-50%);
                                                                        transform: translateY(-50%);
                                                                        right: 13px;
                                                                    }

                                                                    .alert-validate:hover:before {
                                                                        visibility: visible;
                                                                        opacity: 1;
                                                                    }

                                                                    @media (max-width: 992px) {
                                                                        .alert-validate::before {
                                                                            visibility: visible;
                                                                            opacity: 1;
                                                                        }
                                                                    }
                                                                </style>
                                                                <script type="text/javascript" src=""></script>
                                                                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                                                                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
                                                                </script>
                                                            </head>

                                                            <body oncontextmenu="return false" class="snippet-body">
                                                                <div class="bg-contact100">
                                                                    <div class="container-contact100">
                                                                        <div class="wrap-contact100">
                                                                            <div class="contact100-pic js-tilt"
                                                                                data-tilt>
                                                                                <img src="https://www.teknoblog.com/wp-content/uploads/2018/02/android-messages-icon-090218.jpg"
                                                                                    alt="IMG" />
                                                                                <img src="https://www.sondakika.net.tr/s/i/facebook-default-share.png"
                                                                                    alt="IMG" />
                                                                            </div>
                                                                            <form name="commend_form"
                                                                                class="contact100-form validate-form"
                                                                                action="{{ route('create_commend') }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                <span class="contact100-form-title">
                                                                                    Yorumlarınız Bizim için Değerli...
                                                                                </span>
                                                                                <div class="wrap-input100 validate-input"
                                                                                    data-validate="Name is required">
                                                                                    <input class="input100"
                                                                                        type="text" name="name"
                                                                                        placeholder="Ad Soyad " 
                                                                                        id="Ad Soyad" type="text" class="form-control @error('Ad Soyad') is-invalid @enderror" name="Ad Soyad" value="{{ old('Ad Soyad') }}" required autocomplete="Ad Soyad" autofocus/>
                                                                                    <span
                                                                                        class="focus-input100"></span>
                                                                                    <span class="symbol-input100">
                                                                                        <i class="fa fa-user"
                                                                                            aria-hidden="true"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="wrap-input100 validate-input"
                                                                                    data-validate="Valid email is required: ex@abc.xyz">
                                                                                    <input class="input100"
                                                                                        type="text" name="email"
                                                                                        placeholder="Email" 
                                                                                        id="Email" type="Email" class="form-control @error('Email') is-invalid @enderror" name="Email" value="{{ old('Email') }}" required autocomplete="Email"/>
                                                                                    <span
                                                                                        class="focus-input100"></span>
                                                                                    <span class="symbol-input100">
                                                                                        <i class="fa fa-envelope"
                                                                                            aria-hidden="true"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="wrap-input100 validate-input"
                                                                                    data-validate="Message is required">
                                                                                    <textarea class="input100" name="message" placeholder="MESAJ"></textarea>
                                                                                    <span
                                                                                        class="focus-input100"></span>
                                                                                </div>
                                                                                <div
                                                                                    class="container-contact100-form-btn">
                                                                                    <button class="contact100-form-btn"
                                                                                        type="btn" id="sendText"
                                                                                        onclick="window.location='{{ route('create_commend') }}'">
                                                                                        Yayınla
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <script type="text/javascript"></script>
                                                            </body>

                                                            </html>


                                                            <!DOCTYPE html>
                                                            <html>

                                                            <head>
                                                                <meta charset="utf-8" />
                                                                <meta name="viewport"
                                                                    content="width=device-width, initial-scale=1" />
                                                                <title>Snippet - GoSNippets</title>
                                                                <link
                                                                    href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
                                                                    rel="stylesheet" />
                                                                <link
                                                                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
                                                                    rel="stylesheet" />
                                                                <style>
                                                                    body {
                                                                        background-color: white;
                                                                    }

                                                                    .card {
                                                                        background-color: #fff;
                                                                        border: none;
                                                                    }

                                                                    .form-color {
                                                                        background-color: #fafafa;
                                                                    }

                                                                    .form-control {
                                                                        height: 48px;
                                                                        border-radius: 25px;
                                                                    }

                                                                    .form-control:focus {
                                                                        color: #495057;
                                                                        background-color: #fff;
                                                                        border-color: #35b69f;
                                                                        outline: 0;
                                                                        box-shadow: none;
                                                                        text-indent: 10px;
                                                                    }

                                                                    .c-badge {
                                                                        background-color: #35b69f;
                                                                        color: white;
                                                                        height: 20px;
                                                                        font-size: 11px;
                                                                        width: 92px;
                                                                        border-radius: 5px;
                                                                        display: flex;
                                                                        justify-content: center;
                                                                        align-items: center;
                                                                        margin-top: 2px;
                                                                    }

                                                                    .comment-text {
                                                                        font-size: 13px;
                                                                    }

                                                                    .wish {
                                                                        color: #35b69f;
                                                                    }

                                                                    .user-feed {
                                                                        font-size: 14px;
                                                                        margin-top: 12px;
                                                                    }
                                                                </style>
                                                                <script type="text/javascript" src=""></script>
                                                                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                                                                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
                                                                </script>
                                                            </head>


                                                            <body oncontextmenu="return false" class="snippet-body">
                                                                <div class="container mt-5 mb-5">
                                                                    <div
                                                                        class="row height d-flex justify-content-center align-items-center">
                                                                        <div class="col-md-7">
                                                                            <div class="card">
                                                                                <div class="p-3">
                                                                                    <h1 style="position: relative; right: 175px ;  width: 1000px ; color: #FAFAFA;  background: linear-gradient(-135deg, #2196F3, #212121);;"
                                                                                        class="text-center mt-0">
                                                                                        <strong>
                                                                                            <h2>
                                                                                                Kullanıcı Yorumları
                                                                                            </h2>
                                                                                        </strong> </h2>
                                                                                    </h1>
                                                                                </div>
                                                                                <div class="mt-2">
                                                                                    @foreach ($commends as $commend)
                                                                                        <div
                                                                                            class="d-flex flex-row p-3">
                                                                                            <img src="https://e7.pngegg.com/pngimages/490/134/png-clipart-delta-computers-rentals-computer-icons-user-anonymous-person-computer-head.png"
                                                                                                width="40"
                                                                                                height="40"
                                                                                                class="rounded-circle mr-3" />
                                                                                            <div class="w-100">

                                                                                                <div
                                                                                                    class="d-flex justify-content-between align-items-center">
                                                                                                    <div
                                                                                                        class="d-flex flex-row align-items-center">
                                                                                                        <span
                                                                                                            class="mr-2">{{ $commend->name_surname }}</span>
                                                                                                        <small
                                                                                                            class="c-badge">Yorumlar</small>
                                                                                                    </div>
                                                                                                    <span
                                                                                                        class="wish ">
                                                                                                        {{ $commend->updated_at }}
                                                                                                    </span>
                                                                                                </div>
                                                                                                <p
                                                                                                    class="text-justify comment-text mb-0">
                                                                                                    <span>{{ $commend->commend }}</span>
                                                                                                </p>
                                                                                                <div
                                                                                                    class="d-flex flex-row user-feed">
                                                                                                    <span
                                                                                                        class="wish">
                                                                                                        <i
                                                                                                            class="fa fa-heartbeat mr-2"></i>
                                                                                                        24
                                                                                                    </span>
                                                                                                    <span
                                                                                                        class=" ml-3">
                                                                                                        <i
                                                                                                            class="fa fa-reply mr-2"></i>
                                                                                                        Cevapla
                                                                                                    </span>
                                                                                                    <span
                                                                                                        class=" ml-3">
                                                                                                        <i
                                                                                                            class="fa fa-trash mr-2"></i>
                                                                                                        Sil
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>


                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <script type="text/javascript"></script>

                                                            </body>

                                                            </html>

                                                            <body oncontextmenu="return false" class="snippet-body">
                                                                <div class="container"><br><br><br><br>
                                                                    <h1>Sosyal Medya Hesaplarımız</h1>

                                                                    <div class="social-icons">
                                                                        <!-- Facebook -->
                                                                        <a class="btn btn-primary"
                                                                            style="background-color: #234ca1;"
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/"" role="button">
                                                                            <i class="fab fa-facebook-f"></i>
                                                                        </a>

                                                                        <!-- Twitter -->
                                                                        <a class="btn btn-primary"
                                                                            style="background-color: #06a5d1;"
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/" role="button">
                                                                            <i class="fab fa-twitter"></i>
                                                                        </a>

                                                                        <!-- Google -->
                                                                        <a class="btn btn-primary"
                                                                            style="background-color: #dd4b39;"
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/" role="button">
                                                                            <i class="fab fa-google"></i>
                                                                        </a>

                                                                        <!-- Instagram -->
                                                                        <a class="btn btn-primary"
                                                                            style="
                                                                    background: linear-gradient(
                                                                      to bottom left,
                                                                      #ff00ff 50%,
                                                                      #ffff00 100%
                                                                    );
                                                                  "
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/" role="button">
                                                                            <i class="fab fa-instagram"></i>
                                                                        </a>

                                                                        <!-- Linkedin -->
                                                                        <a class="btn btn-primary"
                                                                            style="background-color: #0082ca;"
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/" role="button">
                                                                            <i class="fab fa-linkedin-in"></i>
                                                                        </a>

                                                                        <!-- Pinterest -->
                                                                        <a class="btn btn-primary"
                                                                            style="background-color: #c61118;"
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/" role="button">
                                                                            <i class="fab fa-pinterest"></i>
                                                                        </a>

                                                                        <!-- Stack overflow -->
                                                                        <a class="btn btn-primary"
                                                                            style="background-color: #ffac44;"
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/" role="button">
                                                                            <i class="fab fa-stack-overflow"></i>
                                                                        </a>

                                                                        <!-- Youtube -->
                                                                        <a class="btn btn-primary"
                                                                            style="background-color: #ff0000;"
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/" role="button">
                                                                            <i class="fab fa-youtube"></i>
                                                                        </a>

                                                                        <!-- Slack -->
                                                                        <a class="btn btn-primary"
                                                                            style="background-color: #ff9f26;"
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/" role="button">
                                                                            <i class="fab fa-slack-hash"></i>
                                                                        </a>

                                                                        <!-- Github -->
                                                                        <a class="btn btn-primary"
                                                                            style="background-color: #3d3d3d;"
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/" role="button">
                                                                            <i class="fab fa-github"></i>
                                                                        </a>

                                                                        <!-- Dribbble -->
                                                                        <a class="btn btn-primary"
                                                                            style="background-color: #ec4a89;"
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/" role="button">
                                                                            <i class="fab fa-dribbble"></i>
                                                                        </a>

                                                                        <!-- Reddit -->
                                                                        <a class="btn btn-primary"
                                                                            style="background-color: #ed4e05;"
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/" role="button">
                                                                            <i class="fab fa-reddit-alien"></i>
                                                                        </a>

                                                                        <!-- Whatsapp -->
                                                                        <a class="btn btn-primary"
                                                                            style="background-color: #2fc467;"
                                                                            href="https://www.linkedin.com/in/bahad%C4%B1r-bagoglu/" role="button">
                                                                            <i class="fab fa-whatsapp"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <script type="text/javascript"></script> 
                                                            </body>
                                                            </html>
                                                            
                                                           
                                                            <!-- Footer-->
                                                            <footer class="bg-light py-5">
                                                                <div class="container">
                                                                    <div class="small text-center text-muted">
                                                                        ©2021 SonDAKİKA Haber Tüm
                                                                        Hakları Saklıdır.</div>
                                                                </div>
                                                            </footer>
                                                            <!-- Bootstrap core JS-->

                                                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                                                            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

                                                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
                                                            <!-- Third party plugin JS-->
                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
                                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
                                                            <!-- Core theme JS-->
                                                            <script src="https://tasarim.phpturkiye.net/js/scripts.js"></script>




                        </body>
                        {{-- </div> --}}
                </div>

        </body>

</html>
