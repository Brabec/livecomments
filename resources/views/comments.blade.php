<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Live commenting system with Laravel and Pusher</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>

    <style>
        html {
            background: radial-gradient(ellipse at center, #fff 0, #ededfd 100%);
        }

        #app {
            width: 60%;
            margin: 4rem auto;
        }

        .container {
            margin: 0 auto;
            position: relative;
            width: unset;
        }

        .question-wrapper {
            text-align: center;
        }

        .has-shadow {
            box-shadow: 0 4px 8px -2px rgba(0, 0, 0, 0.05) !important;
        }

    </style>
</head>
<body>

<div id="app">

    <div class="container">
        <div class="question-wrapper">
            <img width="200" src="{{ asset('images/adonuxt.png') }}" alt="">
            <h5 class="is-size-2" style="color: #220052;">
                What do you think about <span style="color: #47b784;">Laravel</span>?
            </h5>
            <br>
            <a href="#commentForm" class="button is-medium has-shadow has-text-white" style="background-color: #47b784">Comment</a>
        </div>

        <br><br>
        <comments></comments>
        <new-comment></new-comment>
    </div>
</div>

<script async src="{{mix('js/app.js')}}"></script>
</body>

