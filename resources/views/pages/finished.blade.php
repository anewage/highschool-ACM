@extends('layout')
@section('content')

    <section class="wrapper style1 special fade-up">
        <h2>ثبت‌نام شما با موفقیت به اتمام رسید</h2>
        <p>
            به‌منظور تکمیل ثبت‌نام خود لطفاً ۶۰ هزارتومان هزینه شرکت در مسابقه را به شماره کارت زیر واریز کرده و شماره سریال حواله را به همراه نام تیم به شماره ۰۹۲۱۰۳۴۷۶۲۵ پیامک نمایید.
            </p>
        <p><strong>
                نام تیم شما:
            </strong><br>
            {{ $record['teamName'] }}</p>
        <p><strong>
                شماره کارت:
            </strong><br>
            ۵۰۲۹-۳۸۱۰-۱۶۶۹-۲۳۸۶ به نام آقای سپهر صبور
        </p>
        {{--{{ Form::open(['name' => 'regform', 'route' => 'store']) }}--}}
        {{--<span>شماره ثبت‌نام:</span>{{ Form::text('id', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'شماره ثبت‌نام خود را وارد کنید']) }}--}}
        {{--<span>شماره سریال حواله کارت به کارت:</span>{{ Form::text('paymentID', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'شماره سریال حواله کارت به کارت را وارد کنید']) }}--}}
        {{--{{ Form::submit('ثبت‌نام', ['class' => 'special']) }}--}}
        {{--{{ Form::close() }}--}}
        <h3 style="margin-top: 35px">۱۰ اردیبهشت در دانشکده مهندسی کامپیوتر و فناوری اطلاعات دانشگاه امیرکبیر منتظر شما هستیم!</h3>
        <h4>جهت به دست آوردن هرگونه اطلاعات بیشتر می‌توانید به صفحه ارتباط با ما و یا قسمت درباره مسابقات مراجعه کنید.</h4>
        <h5>در صورت بروز هرگونه مشکل و یا درخواست اطلاعات بیشتر با شماره ۰۹۲۱۰۳۴۷۶۲۵ تماس حاصل نمایید</h5>
    </section>
@endsection