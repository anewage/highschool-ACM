@extends('layout')

@section('content')
        <!-- Banner -->
<section id="banner">
    <div class="content">
        <header>
            <h2>دومین دوره مسابقات ملی برنامه‌نویسی دانش‌آموزی امیرکبیر</h2>
            <p>۱۷ اردیبهشت ماه ۱۳۹۵<br />
                دانشگاه صنعتی امیرکبیر</p>
        </header>
        <span class="image"><img src="../images/ACMLOGO.jpg" alt="" /></span>
    </div>
    <a href="#one" class="goto-next"></a>
</section>

<!-- One -->
<section id="one" class="spotlight style1 bottom">
    <span class="image fit main"><img src="images/code.jpg" alt="" /></span>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="4u 12u$(medium)">
                    <header>
                        <h2>مسابقات برنامه‌نویسی چیست؟</h2>
                        <p>نسخه دانش‌آموزی</p>
                    </header>
                </div>
                <div class="4u 12u$(medium)">
                    <p>مسابقه برنامه نویسی دانش آموزی از جمله مسابقات برنامه نویسی است که هر سال در نقاط مختلفی از دنیا
                        برگزار میگردد. مخاطب اصلی این مسابقات دانش آموزان مقاطع دبیرستان و راهنمایی میباشد.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <p>انجمن علمی دانشکده مهندسی کامپیوتر و فناوری اطلاعات دانشگاه صنعتی امیرکبیر به عنوان نهاد برگزار کننده
                        رویداد های علمی دانشجویی در دانشگاه در نظر دارد دومین دوره این رویداد را در دانشگاه امیرکبیر برگزار
                        نماید.</p>
                </div>
            </div>
        </div>
    </div>
    <a href="#two" class="goto-next scrolly"></a>
</section>

<!-- Two -->
<section id="two" class="spotlight style2 right">
    <span class="image fit main"><img src="images/tsb.jpg" alt="" /></span>
    <div class="content">
        <header>
            <h2>فکر کنید، حل کنید، بادکنک بگیرید!</h2>
        </header>
        <p>هر تیم شامل ۳ شرکت‌کننده دانش‌آموز و یک نفر نماینده مدرسه و یا پژوهش‌سرای دانش‌آموزی می‌باشد.
            نماینده تیم‌های یک مدرسه یا پژوهش‌سرا می‌تواند مشترک باشد.
            زبان‌های برنامه‌نویسی مسابقه c, c++ ،java و python است.
            هزینه ثبت نام هر نفر ۲۰ هزار تومان و در مجموع برای یک تیم ۶۰ هزارتومان می‌باشد.
            در پایان مسابقات از تیم های برتر و مدرسه برتر تقدیر خواهد شد.
        </p>
        <ul class="actions">
            <li><a href="{{route('about')}}#what_is_acm" class="button">اطلاعات بیشتر</a></li>
        </ul>
    </div>
    <a href="#three" class="goto-next scrolly"></a>
</section>

<!-- Three -->
<section id="three" class="spotlight style3 left">
    <span class="image fit main bottom"><img src="images/code.jpg" alt="" /></span>
    <div class="content">
        <header>
            <h2>برگزار کننده این مسابقات کیست؟</h2>
        </header>
        <p>انجمن‌های علمی به عنوان تنها نهاد علمی-دانشجویی دانشگاه صنعتی امیرکبیر وظیفه برگزاری رویدادهای مختلف علمی را برعهده دارد. این نهاد از دانشجویان دانشگاه تشکیل شده است و تحت نظارت اداره کل انجمن‌های علمی دانشگاه مسابقات و چالش هایی را  برگزار می‌کند.</p>
        <ul class="actions">
            <li><a href="{{route('about')}}#about_ssc" class="button">اطلاعات بیشتر</a></li>
        </ul>
    </div>
    <a href="#four" class="goto-next scrolly"></a>
</section>

<section id="four" class="wrapper style1 special fade-up">
    <div class="container">
        <header class="major">
            <h2>برگزار کنندگان</h2>
            <p>برگزارکنندگان این رویداد</p>
        </header>
        <div class="box alt">
            <div class="row uniform">
                <section class="4u 6u(medium) 12u$(xsmall)">
                    <span><img src="../images/ceitssc.png"></span>
                </section>
                <section class="4u 6u$(medium) 12u$(xsmall)">
                    <span><img src="../images/ceit.png"></span>
                </section>
                {{--<section class="4u$ 6u(medium) 12u$(xsmall)">--}}
                {{--<span class="icon alt major fa-flask"></span>--}}
                {{--<h3>Cubilia cep lobortis</h3>--}}
                {{--<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>--}}
                {{--</section>--}}
                {{--<section class="4u 6u$(medium) 12u$(xsmall)">--}}
                {{--<span class="icon alt major fa-paper-plane"></span>--}}
                {{--<h3>Non semper interdum</h3>--}}
                {{--<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>--}}
                {{--</section>--}}
                {{--<section class="4u 6u(medium) 12u$(xsmall)">--}}
                {{--<span class="icon alt major fa-file"></span>--}}
                {{--<h3>Odio laoreet accumsan</h3>--}}
                {{--<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>--}}
                {{--</section>--}}
                {{--<section class="4u$ 6u$(medium) 12u$(xsmall)">--}}
                {{--<span class="icon alt major fa-lock"></span>--}}
                {{--<h3>Massa arcu accumsan</h3>--}}
                {{--<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>--}}
                {{--</section>--}}
            </div>
        </div>
    </div>
    <a href="#five" class="goto-next scrolly"></a>
</section>

<!-- Four -->
<section id="five" class="wrapper style1 special fade-up">
    <div class="container">
        <header class="major">
            <h2>حامیان دومین دوره مسابقات</h2>
            <p>لیست موسسات و برندهایی که از دومین دوره مسابقات ملی برنامه‌نویسی دانش‌آموزی امیرکبیر حمایت می‌کنند</p>
        </header>
        <div class="box alt">
            <div class="row uniform">
                <section class="4u 6u(medium) 12u$(xsmall)">
                    <span><img src="../images/sponlogo1.png"></span>
                </section>
                <section class="4u 6u$(medium) 12u$(xsmall)">
                    <span><img src="../images/sponlogo2.png"></span>
                </section>
                <section class="4u 6u$(medium) 12u$(xsmall)">
                    <span><img src="../images/sponlogo3.png"></span>
                </section>
                {{--<section class="4u$ 6u(medium) 12u$(xsmall)">--}}
                    {{--<span class="icon alt major fa-flask"></span>--}}
                    {{--<h3>Cubilia cep lobortis</h3>--}}
                    {{--<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>--}}
                {{--</section>--}}
                {{--<section class="4u 6u$(medium) 12u$(xsmall)">--}}
                    {{--<span class="icon alt major fa-paper-plane"></span>--}}
                    {{--<h3>Non semper interdum</h3>--}}
                    {{--<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>--}}
                {{--</section>--}}
                {{--<section class="4u 6u(medium) 12u$(xsmall)">--}}
                    {{--<span class="icon alt major fa-file"></span>--}}
                    {{--<h3>Odio laoreet accumsan</h3>--}}
                    {{--<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>--}}
                {{--</section>--}}
                {{--<section class="4u$ 6u$(medium) 12u$(xsmall)">--}}
                    {{--<span class="icon alt major fa-lock"></span>--}}
                    {{--<h3>Massa arcu accumsan</h3>--}}
                    {{--<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>--}}
                {{--</section>--}}
            </div>
        </div>
    </div>
</section>
@endsection