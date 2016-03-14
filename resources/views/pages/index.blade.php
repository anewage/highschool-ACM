@extends('layout')

@section('content')
        <!-- Banner -->
<section id="banner">
    <div class="content">
        <header>
            <h2>دومین دوره مسابقات ملی برنامه‌نویسی دانش‌آموزی امیرکبیر</h2>
            <p>۲۶ فروردین ماه<br />
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
                        <h2>یک دو سه</h2>
                        <p>زنگ مدرسه</p>
                    </header>
                </div>
                <div class="4u 12u$(medium)">
                    <p>محل نوشتن توضیحات
                        هرچی دل تنگت میخواد بنویس اینجا، مثلاً اینکه دوره‌های گذشته چیکار کردیم.</p>
                </div>
                <div class="4u$ 12u$(medium)">
                    <p>بازم توضیحات.
                        فلان بیسار</p>
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
            <p>یکم بیشتر درباره مسابقه صحبت می‌کنیم.</p>
        </header>
        <p>حالا میگیم که اگه میخوای بیشتر بخونی روی دکمه زیر بزن:</p>
        <ul class="actions">
            <li><a href="#" class="button">اطلاعات بیشتر</a></li>
        </ul>
    </div>
    <a href="#three" class="goto-next scrolly"></a>
</section>

<!-- Three -->
<section id="three" class="spotlight style3 left">
    <span class="image fit main bottom"><img src="images/code.jpg" alt="" /></span>
    <div class="content">
        <header>
            <h2>حالا میگیم دانشگاه امیرکبیر کجاس</h2>
            <p>حتی این‌که انجمنمون کیه و چیکارست و اینا.</p>
        </header>
        <p>باید پر بشه دیگه کلاْ</p>
        <ul class="actions">
            <li><a href="#" class="button">اطلاعات بیشتر</a></li>
        </ul>
    </div>
    <a href="#four" class="goto-next scrolly"></a>
</section>

<!-- Four -->
<section id="four" class="wrapper style1 special fade-up">
    <div class="container">
        <header class="major">
            <h2>حامیان دومین دوره مسابقات</h2>
            <p>لیست موسسات و برندهایی که از دومین دوره مسابقات ملی برنامه‌نویسی دانش‌آموزی امیرکبیر حمایت می‌کنند</p>
        </header>
        <div class="box alt">
            <div class="row uniform">
                <section class="4u 6u(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-area-chart"></span>
                    <h3>Ipsum sed commodo</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u 6u$(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-comment"></span>
                    <h3>Eleifend lorem ornare</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u$ 6u(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-flask"></span>
                    <h3>Cubilia cep lobortis</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u 6u$(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-paper-plane"></span>
                    <h3>Non semper interdum</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u 6u(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-file"></span>
                    <h3>Odio laoreet accumsan</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
                <section class="4u$ 6u$(medium) 12u$(xsmall)">
                    <span class="icon alt major fa-lock"></span>
                    <h3>Massa arcu accumsan</h3>
                    <p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection