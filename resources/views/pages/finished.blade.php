@extends('layout')
@section('content')

    <section class="wrapper style1 special fade-up">
        <h2>ثبت‌نام شما با موفقیت به اتمام رسید</h2>
        <header class ="major">
            <h3>لطفاً هزینه شرکت در مسابقه را از سایت ایوند به نام سرپرست تیم پرداخت کنید.</h3>
            <div id="evand"></div><script type="text/javascript">var evand=evand||{};evand.eventSlug='autispc',function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=("https:"==document.location.protocol?"https://":"http://")+"static.evand.ir/embed/script.js";var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)}();</script>
        </header>
        {{--{{ Form::open(['name' => 'regform', 'route' => 'store']) }}--}}
        {{--<span>شماره ثبت‌نام:</span>{{ Form::text('id', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'شماره ثبت‌نام خود را وارد کنید']) }}--}}
        {{--<span>شماره سریال حواله کارت به کارت:</span>{{ Form::text('paymentID', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'شماره سریال حواله کارت به کارت را وارد کنید']) }}--}}
        {{--{{ Form::submit('ثبت‌نام', ['class' => 'special']) }}--}}
        {{--{{ Form::close() }}--}}
        {{--<h3 style="margin-top: 35px">۱۰ اردیبهشت در دانشکده مهندسی کامپیوتر و فناوری اطلاعات دانشگاه امیرکبیر منتظر شما هستیم!</h3>--}}
        {{--<h4>جهت به دست آوردن هرگونه اطلاعات بیشتر می‌توانید به صفحه ارتباط با ما و یا قسمت درباره مسابقات مراجعه کنید.</h4>--}}
        {{--<h5>در صورت بروز هرگونه مشکل و یا درخواست اطلاعات بیشتر با شماره ۰۹۲۱۰۳۴۷۶۲۵ تماس حاصل نمایید</h5>--}}
    </section>
@endsection