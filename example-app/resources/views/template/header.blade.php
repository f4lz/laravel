<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css"/>
    <link href="resources/css/app.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper bg-light">
        <header class="header bg-info p-3">
            <div class="header__inner d-flex justify-content-between container align-items-center">
                <div class="logo">
                    <img src="" alt="Logo">
                </div>
                <nav class="header__inner-nav nav">
                    <ul class="nav__list d-flex justify-content-between align-items-center">
                        @foreach($items as $item)
                            <li class="ml-5 black"><a class="text-dark line-style-type-none" href="#">{{$item}}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </header>      
    </div>
                            
