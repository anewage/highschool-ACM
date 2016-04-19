<!DOCTYPE HTML>

<html>
<head>
    <title>دومین دوره مسابقات برنامه‌نویسی دانش‌آموزی امیرکبیر</title>
    <meta charset="utf-8" />
    <meta name="description" content="دومین دوره مسابقات برنامه‌نویسی دانش‌آموزی امیرکبیر، ۲۶ فروردین ماه ۹۵">
    <meta name="keywords" content="ACM, highschool, highschool programming, programming contest, acm icpc, icpc, highschool ipc ">
    <meta name="author" content="انجمن علمی دانشکده مهندسی کام\یوتر و فناوری اطلاعات">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body class="landing">
<div id="page-wrapper">

    <!-- Header -->
    <header id="header">
        <h1 id="logo"><a href="{{route('home')}}">مسابقات برنامه‌نویسی دانش‌آموزی</a></h1>
        <nav id="nav">
            <ul>
                <li><a href="{{route('about')}}">درباره مسابقات</a></li>
                <li>
                    <a href="{{route('past')}}">دوره‌های گذشته</a>
                    {{--<ul>--}}
                    {{--<li><a href="left-sidebar.html">Left Sidebar</a></li>--}}
                    {{--<li><a href="right-sidebar.html">Right Sidebar</a></li>--}}
                    {{--<li><a href="no-sidebar.html">No Sidebar</a></li>--}}
                    {{--<li>--}}
                    {{--<a href="#">Submenu</a>--}}
                    {{--<ul>--}}
                    {{--<li><a href="#">Option 1</a></li>--}}
                    {{--<ul>--}}
                    {{--<li><a href="#">Option 1</a></li>--}}
                    {{--</ul>--}}
                    {{--<li><a href="#">Option 2</a></li>--}}
                    {{--<li><a href="#">Option 3</a></li>--}}
                    {{--<li><a href="#">Option 4</a></li>--}}
                    {{--</ul>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                </li>
                <li><a href="{{route('contact')}}">ارتباط با ما</a></li>
                <li><a href="https://evand.ir/events/autispc" class="button special">ثبت‌نام</a></li>
            </ul>
        </nav>
    </header>

    <div class="MYCLASS">
        @yield('content')
    </div>

    <!-- Five -->
    <section id="five" class="wrapper style2 special fade">
        <div class="container">
            <header class="major">
                <h2>محل برگزاری</h2>
                <p>دانشکده‌ی مهندسی کامپیوتر و فناوری اطلاعات دانشگاه صنعتی امیرکبیر</p>
                <p>تهران، خیابان حافظ، شماره ۴۲۴، دانشگاه صنعتی امیرکبیر</p>
                <p>جهت کسب اطلاعات بیشتر می‌توانید با شماره تلفن ۰۹۲۱۰۳۴۷۶۲۵ تماس گرفته و یا به دفتر انجمن علمی دانشجویی دانشکده مهندسی کامپیوتر و فناوری اطلاعات دانشگاه صنعتی امیرکبیر مراجعه فرمایید.</p>
            </header>
            <div id="map"></div>
            <script>
                var markers = [];
                function initMap() {
                    var mapDiv = document.getElementById('map');
                    var map = new google.maps.Map(mapDiv, {
                        center: {lat: 35.703896, lng: 51.408277},
                        zoom: 16
                    });
                    var marker = new google.maps.Marker({
                        position: {lat: 35.703896, lng: 51.408277},
                        map: map
                    });
                    markers.push(marker);
                    setMapOnAll(map);
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
                    async defer></script>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="https://twitter.com/ceit_ssc" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://www.facebook.com/ceit.ssc.official" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="https://www.instagram.com/ceit_ssc/" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
            <li><a href="mailto:ceit.ssc@aut.ac.ir" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>انجمن علمی دانشکده مهندسی کامپیوتر و فناوری اطلاعات دانشگاه صنعتی امیرکبیر&copy;</li>
        </ul>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>