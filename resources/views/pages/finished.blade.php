@extends('layout')
@section('content')

    <section class="wrapper style1 special fade-up">
        <h1>ثبت‌نام با موفقیت به پایان رسید!</h1>
        <h3>۱۰ اردیبهشت در دانشکده مهندسی کامپیوتر و فناوری اطلاعات دانشگاه امیرکبیر منتظر شما هستیم!</h3>
        <h4>جهت به دست آوردن هرگونه اطلاعات بیشتر می‌توانید به صفحه ارتباط با ما و یا قسمت درباره مسابقات مراجعه کنید.</h4>
        <p>همچنین می‌توانید اطلاعاتی که در پایگاه داده ما ثبت کرده‌اید را در زیر مشاهده کنید:</p>
        <span>نام تیم</span><p> {!! $record['teamName'] !!} </p>
        <span>نام دبیرستان</span><p>{!! $record['highschool'] !!}</p>
        <span>نام و نام خانوادگی عضو اول تیم</span><p> {!! $record['p1Name'] !!}</p>
        <span>شماره تماس عضو اول تیم</span><p> {!! $record['p1Phone'] !!}</p>
        <span>نام و نام خانوادگی عضو دوم تیم</span><p> {!! $record['p2Name'] !!}</p>
        <span>شماره تماس عضو دوم تیم</span><p> {!! $record['p2Phone'] !!}</p>
        <span>نام و نام خانوادگی عضو سوم تیم</span><p> {!! $record['p3Name'] !!}</p>
        <span>شماره تماس عضو سوم تیم</span><p> {!! $record['p3Phone'] !!}</p>
        <span>نام و نام خانوادگی سرپرست تیم</span><p> {!! $record['coachName'] !!}</p>
        <span>ایمیل سرپرست تیم</span><p> {!! $record['coachMail'] !!}</p>
        <span>شماره تماس سرپرست تیم</span><p> {!! $record['coachPhone'] !!}</p>
        <span>شماره خرید</span><p> {!! $record['id'] !!}</p>
        <span>شماره فاکتور پرداخت</span><p> {!! $record['payment_id'] !!}</p>
    </section>
@endsection