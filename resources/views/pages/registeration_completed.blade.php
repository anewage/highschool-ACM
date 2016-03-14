@extends('layout')

@section('content')
    <section class="wrapper style1 special fade-up">
        <h2>ثبت‌نام شما با موفقیت انجام شد.</h2>
        <p>{!! $record['teamName'] !!}</p>
    </section>
@endsection
