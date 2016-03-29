@extends('layout')
@section('content')

    <section class="wrapper style1 special fade-up">
        <script language="javascript">
            window.location.href = "{!! 'http://www.parsianpal.com/payment/pay_invoice/' . $paymentID !!}"
        </script>
        <h1>در حال انتقال به صفحه پرداخت...</h1>
        <h2>شماره فاکتور:</h2>
        <p>{{$paymentID}}</p>
    </section>
@endsection