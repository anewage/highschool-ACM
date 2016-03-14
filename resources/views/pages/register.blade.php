@extends('layout')

@section('content')
    <section class="wrapper style1 special fade-up">
        <h2>فرم ثبت نام در دومین دوره مسابقات ملی برنامه‌نویسی دانش‌آموزی امیرکبیر</h2>
        <p style="color: #E44C65">لطفاً تمامی اطلاعات زیر را به دقت تکمیل نموده و در پایان دکمه ثبت‌نام را بزنید</p>
        {{ Form::open(['route' => 'teamReg']) }}

            {{ Form::label('team', 'اطلاعات تیم', ['class' => 'title']) }}
                <span>نام تیم:</span>{{ Form::text('teamName', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'اسم تیم خود را اینجا وارد کنید']) }}<br>
                <span>نام دبیرستان:</span>{{ Form::text('highschool', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'نام دبیرستان خود را اینجا وارد کنید']) }}<br>
            {{ Form::label('MemberNames', 'اطلاعات شرکت‌کنندگان', ['class' => 'title']) }}
                {{ Form::label('mem1Props', 'عضو اول', ['style' => 'margin-top: 30px']) }}<br>
                    <span>نام و نام خانوادگی عضو اول تیم:</span>{{ Form::text('p1Name', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'نام و نام خانوادگی عضو اول تیم']) }}<br>
                    <span>شماره تماس عضو اول تیم:</span>{{ Form::text('p1Phone', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'شماره تلفن عضو اول تیم']) }}<br>
                {{ Form::label('mem2Props', 'عضو دوم', ['style' => 'margin-top: 30px']) }}
                    <span>نام و نام خانوادگی عضو دوم تیم:</span>{{ Form::text('p2Name', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'نام و نام خانوادگی عضو دوم تیم']) }}
                    <span>شماره تماس عضو دوم تیم:</span>{{ Form::text('p2Phone', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'شماره تلفن عضو دوم تیم']) }}
                {{ Form::label('mem2Props', 'عضو سوم', ['style' => 'margin-top: 30px']) }}
                    <span>نام و نام خانوادگی عضو سوم تیم:</span>{{ Form::text('p3Name', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'نام و نام خانوادگی عضو سوم تیم']) }}
                    <span>شماره تماس عضو سوم تیم:</span>{{ Form::text('p3Phone', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'شماره تلفن عضو سوم تیم']) }}
            {{ Form::label('coachInfo', 'اطلاعات سرپرست تیم',['style' => 'margin-top: 30px', 'class' => 'title']) }}
                    <span>نام و نام خانوادگی سرپرست تیم:</span>{{ Form::text('coachName', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'نام و نام خانوادگی سرپرست تیم']) }}
                    <span>ایمیل سرپرست تیم:</span>{{ Form::text('coachMail', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'ایمیل (برای پیگیری‌های بعدی)']) }}
                    <span>شماره تماس سرپرست تیم:</span>{{ Form::text('coachPhone', null, ['class' => '6u 12u$(xsmall)', 'placeholder' => 'شماره تلفت سرپرست تیم']) }}
            {{ Form::submit('ثبت‌نام', ['class' => 'special']) }}
        {{ Form:: close() }}
    </section>
@endsection
