<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Haikunator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: 'Lato', sans-serif;
                font-weight: 700;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            button
            {
                border: none;
                background: transparent;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    {{ $haiku }}
                </div>

                <div class="links">
                    <button role="clipboard-copy" data-clipboard-text="{{ $haiku }}"><img src="/img/clippy.svg" alt="" width="30px"></button>
                </div>
            </div>
        </div>

        <script src="/js/app.js"></script>
        <script src="/js/clipboard.min.js"></script>

        <script>
            new Clipboard('[role="clipboard-copy"]');
        </script>
    </body>
</html>
