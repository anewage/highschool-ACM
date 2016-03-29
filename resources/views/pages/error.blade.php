@extends('layout')

@section('content')
    <section class="wrapper style1 special fade-up">
        <h1>متاسفانه مشکلی در ثبت نام شما پیش آمد.</h1>
        <h3>لطفاً دوباره ثبت نام کنید.</h3>
        <a href="{!! route('reg') !!}" class="button special">شروع مجدد ثبت نام</a>
    </section>
@endsection
