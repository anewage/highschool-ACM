@extends('layout')

@section('content')
    <section class="wrapper style1 special fade-up">
        <h2>ثبت‌نام شما با موفقیت انجام شد.</h2>
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
