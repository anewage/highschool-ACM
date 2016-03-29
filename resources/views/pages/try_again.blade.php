@extends('layout')

@section('content')
    <section class="wrapper style1 special fade-up">
        <h2>متاسفانه پرداخت شما به مشکل برخورده است.</h2>
        <p>لطفاْ‌ابتدا با استفاده از درگاه پرداخت زیر هزینه ثبت‌نام را پرداخت کنید و سپس پایان ثبت‌نام را بزنید.</p>
        <a href="{!! 'http://www.parsianpal.com/payment/pay_invoice/' . $data['payment_id'] !!}" class="button special">اتصال به درگاه پرداخت برای تکمیل پرداخت</a>
        <h3> </h3>
        <span>نام تیم</span><p> {!! $data['teamName'] !!} </p>
        <span>نام دبیرستان</span><p>{!! $data['highschool'] !!}</p>
        <span>نام و نام خانوادگی سرپرست تیم</span><p> {!! $data['coachName'] !!}</p>
        <span>شماره فاکتور پرداخت</span><p> {!! $data['payment_id'] !!}</p>
        {{Form::open(['route' => 'store', 'target' => '_blank'])}}
        @foreach($data as $key => $value)
            {!! Form::hidden($key, $value) !!}
        @endforeach
        {{Form::submit('تکمیل ثبت‌نام',['class' => 'special'])}}
        {{Form::close()}}
        {{--<span>ایمیل سرپرست تیم</span><p> {!! $record['coachMail'] !!}</p>--}}
        {{--<span>شماره تماس سرپرست تیم</span><p> {!! $record['coachPhone'] !!}</p>--}}

    </section>
@endsection
