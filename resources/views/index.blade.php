<!DOCTYPE html>
<html>
    <head>
        <title>Welcome come to Neo Zone</title>

        

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
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">🐦 {{$title}}</div>
                <br>
                <label>{{$copyright}}</label>
                <br><br><br>
                 <a href="{{$url}}" class="button button-tiny">Go</a>
            </div>
        </div>
    </body>
</html>
