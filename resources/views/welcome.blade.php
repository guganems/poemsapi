<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url"           content="http://poemsapi.ga/" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Guga nems" />
        <meta property="og:description"   content="GUGA DESCR" />
        <meta property="og:image"         content="http://poemsapi.ga/public/svg/heracle.jpg" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="m-b-md">
                    <h1>Use this format to get api response</h1>
                </div>
                <div class="m-b-md">
                    <h2><code>poemsapi.ga/public/api/poem/{id}</code></h2>
                </div>

                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/ka_GE/sdk.js#xfbml=1&version=v3.2';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                <!-- Your share button code -->
                <div class="fb-share-button"
                     data-href="http://poemsapi.ga/"
                     data-layout="button_count">
                </div>

            </div>
        </div>
    </body>
</html>
