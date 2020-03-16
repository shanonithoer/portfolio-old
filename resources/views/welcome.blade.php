<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .url {
                width: 100%;
                height: 30px;
                border-top: 0;
                border-right: 0;
                border-left: 0;
                outline: none;
                padding: 0 5px 0 5px;
            }

            .shorten {
                margin-top: 15px;
                width: 100px;
                height: 30px;
                background-color: transparent;
                border-radius: 5px;
                border: 1px solid #636b6f;
                outline: none;
                transition: transform 0.3s ease-in-out;
            }

            .shorten:hover {
                transform: scale(1.1);
                cursor:pointer;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Url shortener
                </div>
                <form method="post" action="/insert">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                    <input class="url" type="text" name="url" />
                    <button type="submit" class="shorten">Shorten</button>
                </form>
            </div>
        </div>
    </body>
</html>
