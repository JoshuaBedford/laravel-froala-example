<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 125px;
            }
            .subtitle {
                font-size: 32px;
            }
            .fixed-nav-bar {
                z-index: 9999;
                width: 100%;
                height: 50px;
                color: #000;
                overflow: hidden;
            }
            .fixed-nav-bar ul{
                list-style-type: none;
                margin: 0 auto;
                padding: 0;
                overflow: hidden;
            }
            .fixed-nav-bar li{
                float: left;
            }
            .fixed-nav-bar li a{
                display: block;
                color: #000;
                font-weight: 300;
                font-size: 20px;
                padding-left: 1em;
                padding-top: 1em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel</div>
                <div class="subtitle">Examples</div>
                <div class="fixed-nav-bar">
                    <ul>
                        <li><a href="{{ url('/froala') }}">Froala Example</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
