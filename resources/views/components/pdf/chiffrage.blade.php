<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'sylfaen';
            src: url("{{public_path('fonts/bpg_glaho_sylfaen.ttf')}}") format('truetype');
        }

        *, html {
            font-family: 'sylfaen', sans-serif;
        }

        * p {
            margin: 0;
        }

        body {
            text-rendering: geometricPrecision;
            font-family: 'sylfaen', sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 50vw;
            height: auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .mt-1 {
            margin-top: 0.2rem;
        }

        .mr-3 {
            margin-right: 0.6rem;
        }

        .end {
            display: flex;
            justify-content: flex-end;
        }

        span {
            display: inline-block;
        }


        .footer-text {
            margin: 0.6rem 0;
        }

        #footer-div {
            position: relative;
            height: 200px;
            margin: auto;
        }

        .bold {
            font-weight: 600;
        }

        .questions {
            background-color: #ffda4a;
            padding: 0.5rem;
        }

        .question-section {
            margin-top: 1rem;
        }

        .question-section:first-child {
            margin-top: 0;
        }

        .question {
            font-weight: bold;
        }

        .answer div {
            margin-top: 0.3rem;
            background-color: #25737D;
            color: whitesmoke;

            width: auto;
            display: inline-block;
            right: inherit;

            padding: 0.2rem 1rem;
            border-radius: 0.2rem;
        }
    </style>
</head>
<body>
{{--{{$answers}}--}}
<div class="container">
    <h1 style="text-align: center;margin: 1rem">Chiffrage immédiat</h1>
    <div style="position:relative;height: 1rem;width: 100%">
        <p style="position: absolute;right: 0;top: 0;margin: 0">
            Date: {{\Carbon\Carbon::today()->toDateString()}}
        </p>
    </div>
    <hr style="border-top:4px solid #ff6e6e;margin: 0.4rem 0">

    <h3 style="margin:1rem 0; font-weight: lighter">Questions & Answers</h3>
    <div class="questions">
        @foreach($answers as $answer)
            <div class="question-section">
                <div class="question">
                    {{$answer['question']['body']}}
                </div>

                <div class="answer">
                    <div>
                        {{$answer['body']}}
                        @if($answer['price'])
                            ({{$answer['price']}} $)
                        @endif
                    </div>
                </div>

                @if($answer['img_path'])
                    <img src="{{public_path($answer['img_path'])}}" alt="" width="160" height="160" style="margin-top: 1rem;">
                @endif
            </div>
        @endforeach
    </div>

    <div style="position:relative;height: 1rem;width: 100%;margin-top: 1rem">
        <p style="position: absolute;right: 10px;top: 0;margin: 0">
            Prix étape1 : {{$total ?? 0}} $
        </p>
    </div>

    <hr style="border: 1px solid black">
    <div id="footer-div">
        @if($user["address"])
            <p class="footer-text">Name: {{ $user["address"] }}</p>
        @endif
        @if($user["city"])
            <p class="footer-text">Mail: {{ $user["city"] }}</p>
        @endif
        @if($user["mail"])
            <p class="footer-text">City: {{ $user["mail"] }}</p>
        @endif
        @if($user["name"])
            <p class="footer-text">Address: {{ $user["name"] }}</p>
        @endif
        @if($user["phoneNumber"])
            <p class="footer-text">Postal code: {{ $user["phoneNumber"] }}</p>
        @endif
        @if($user["postalCode"])
            <p class="footer-text">Phone number: {{ $user["postalCode"] }}</p>
        @endif
    </div>
</div>
</body>
</html>

{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--    <style>--}}
{{--        #root {--}}
{{--            border: 1px solid grey;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div id="root">--}}
{{--    <h1>hello</h1>--}}

{{--    {{$answers}}--}}
{{--    <hr>--}}

{{--    @if($user && is_array($user) && count($user))--}}
{{--        {{$user['name']}}--}}
{{--    @endif--}}
{{--    --}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
