<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> a </title>
    <style type="text/css">
        @font-face {
            font-family: ipag;
            font-style: normal;
            font-weight: normal;
            src: url('{{ storage_path('fonts/ipag.ttf') }}') format('truetype');
        }
        @font-face {
            font-family: ipag;
            font-style: bold;
            font-weight: bold;
            src: url('{{ storage_path('fonts/ipag.ttf') }}') format('truetype');
            }
        body {
            font-family: ipag !important;
        }
        </style>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
    <header> 
        <h1 class="company-name"> 
            ABC株式会社 
        </h1> 
        　<h2 class="transport-company"> 
        　　<p style="border-bottom: solid 2px #555"> 
                {{ $data1['textbox1'] ?? ''}} </p>
        　</h2> 
    </header> 
        <body> 
           <div class="directions"> 配送指示書</div>
            <ul > 
                <li class="item">（引取日）</li> 
                <li class="right-line"> {{ $data1['textbox2'] }}</li> 
            </ul> 
            <ul > 
                <li class="item">（集荷地）</li> 
                <li class="right-box">{{ $data1['textbox3'] }} </li> 
            </ul> 
            <ul > 
                <li class="item">（集荷地）</li> 
                <li class="right-box">{{ $data1['textbox3'] }} </li> 
            </ul>
        
        </body>
</html>