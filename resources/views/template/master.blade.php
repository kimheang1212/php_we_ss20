<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{margin: 0; padding: 0; box-sizing: border-box;}
        body{
            font-family: sans-serif;
            font-size: 14px;
            letter-spacing: 1px;
            line-height: 20px;
            padding: 20px;
        }
        #wrapper{
            background-color: #c2bfbf;
            border: 1px solid grey;
            padding: 10px;
        }
        #header{
            height: 120px;
            background-color: #f2c9c9;
        }
        #nav{
            height: 40px;
            background-color: #515151;
            border-top: 2px solid white;
            border-bottom: 2px solid white;
        }
        #nav ul li{
            display: inline;
            margin-left: 20px;
            
        }
        #nav ul li a{
            color: yellow;
            line-height: 40px;
        }
        #content{
            min-height: 350px;
            background: #e2e2e2;
            padding: 30px;
        }
        #footer{
            background-color: #515151;
            border-top: 2px solid white;
            border-bottom: 2px solid white;
        }
    </style>
    <title>@yield("myTitleBlock")</title>
</head>
<body>
    <div id="wrapper">
        <div id="header">@yield("myHeaderBlock")</div>
        <div id="nav">@yield("myNavBlock")
            <ul>
                <li><a href="{{ route('myindex') }}">Go Home</a></li>
                <li><a href="{{ url('/page1/9/8') }}">Goto page 1</a></li>
                <li><a href="{{ url('/page2/10/7') }}">Goto page 2</a></li>
                <li><a href="{{ url('/page3/90/80') }}">Goto page 3</a></li>
            </ul>
        </div>
        <div id="content">@yield("myContentBlock")</div>
        <div id="footer">@yield("myFooterBlock")</div>
    </div>
</body>
</html>