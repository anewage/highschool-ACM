@extends('layout')
@section('content')

    <section class="wrapper style1 special fade-up">
        <h1>پرداخت شما موفقیت آمیز بود.</h1>
        <h3>شماره خرید:</h3>
        <h3>{!! $OrderID !!}</h3>
        <p>لطفاً با زدن دکمه تکمیل ثبت‌نام که در صفحه دیگری باز است، عملیات ثبت نام خود را نهایی کنید.</p>
    </section>
@endsection