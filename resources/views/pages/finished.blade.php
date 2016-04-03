@extends('layout')
@section('content')

    <section class="wrapper style1 special fade-up">
        <h1>ثبت‌نام به پایان رسید. لطفا هزینه شرکت در مسابقه را از درگاه پرداخت زیر بپردازید.</h1>
        <span>شماره فاکتور پرداخت</span><p> {!! $paymentID !!}</p>
        <span>شماره خرید</span><p> {!! $record['id'] !!}</p>
        <a href="{!! 'http://www.parsianpal.com/payment/pay_invoice/' . $paymentID !!}" class="button special">اتصال به درگاه پرداخت برای تکمیل پرداخت</a>
        {{--<span>نام تیم</span><p> {!! $record['teamName'] !!} </p>--}}
        {{--<span>نام دبیرستان</span><p>{!! $record['highschool'] !!}</p>--}}
        {{--<span>نام و نام خانوادگی عضو اول تیم</span><p> {!! $record['p1Name'] !!}</p>--}}
        {{--<span>شماره تماس عضو اول تیم</span><p> {!! $record['p1Phone'] !!}</p>--}}
        {{--<span>نام و نام خانوادگی عضو دوم تیم</span><p> {!! $record['p2Name'] !!}</p>--}}
        {{--<span>شماره تماس عضو دوم تیم</span><p> {!! $record['p2Phone'] !!}</p>--}}
        {{--<span>نام و نام خانوادگی عضو سوم تیم</span><p> {!! $record['p3Name'] !!}</p>--}}
        {{--<span>شماره تماس عضو سوم تیم</span><p> {!! $record['p3Phone'] !!}</p>--}}
        {{--<span>نام و نام خانوادگی سرپرست تیم</span><p> {!! $record['coachName'] !!}</p>--}}
        {{--<span>ایمیل سرپرست تیم</span><p> {!! $record['coachMail'] !!}</p>--}}
        {{--<span>شماره تماس سرپرست تیم</span><p> {!! $record['coachPhone'] !!}</p>--}}
        <h3 style="margin-top: 35px">۱۰ اردیبهشت در دانشکده مهندسی کامپیوتر و فناوری اطلاعات دانشگاه امیرکبیر منتظر شما هستیم!</h3>
        <h4>جهت به دست آوردن هرگونه اطلاعات بیشتر می‌توانید به صفحه ارتباط با ما و یا قسمت درباره مسابقات مراجعه کنید.</h4>
        <p>همچنین می‌توانید اطلاعاتی که در پایگاه داده ما ثبت کرده‌اید را در زیر مشاهده کنید:</p>
    </section>
@endsection