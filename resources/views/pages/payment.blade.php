@extends('layout')

@section('content')
    <section class="wrapper style1 special fade-up">
        <h2>چند قدم تا تکمیل ثبت نام مانده...</h2>
        <p>برای تکمیل ثبت‌نام خود،‌لطفاْ‌هزینه شرکت در مسابقه را از طریق درگاه پرداخت زیر پرداخت نموده و شماره فاکتور را در زیر وارد کنید:</p>
        {{Form::open(['route' => 'payment', 'target' => '_blank' ])}}
        {{Form::hidden('api', '23842-bpuyg-26230-78367-s8f43ae28gk2vi708883265480')}}
        {{Form::hidden('price','300000')}}
        {{Form::hidden('callback', 'https://highschool.icpc.aut.ac.ir/payment_done?id='.$record['id'] )}}
        {{Form::hidden('description', 'AUT High School Programming Contest payment' )}}
        @foreach($record as $key => $value)
            {!! Form::hidden($key, $value) !!}
        @endforeach
        {{Form::submit('اتصال به درگاه پرداخت',['class' => 'special'])}}
        {{Form::close()}}


        {{Form::open(['route' => 'store'])}}
        @foreach($record as $key => $value)
            {!! Form::hidden($key, $value) !!}
        @endforeach
        {{Form::hidden('api', '23842-bpuyg-26230-78367-s8f43ae28gk2vi708883265480')}}
        {{Form::hidden('price','300000')}}
        <span>شماره فاکتور:</span>{{ Form::text('payment_id', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'شماره فاکتور پرداخت']) }}
        {{Form::submit('تکمیل ثبت‌نام',['class' => 'special'])}}
        {{Form::close()}}
        <h3><strong>تذکر مهم: در پنجره جدیدی که باز می‌شود لطفاْ‌ شماره فاکتور را یادداشت نموده و پس از پرداخت هزینه آن‌را در زیر وارد کنید:</strong></h3>
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

    </section>
@endsection
