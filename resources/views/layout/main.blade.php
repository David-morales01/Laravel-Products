<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David</title>
    <style>
         .error{
            color: red
        }
       
    </style>
    <link rel="stylesheet" href="/dist/styles/style.css">
    <script src="https://kit.fontawesome.com/96a8e20c9c.js" crossorigin="anonymous"></script>
</head>

<body>

    @include('layout.partial.sidebar')
    
    <main class="main">

        <div class="main__header">
            <button class="icon-menu"><i class="class= fas fa-bars "></i></button>
        </div>

        <div class="main__body "> 
            
            @yield('main')
        </div>

        <div class="main__footer ">
            footer
        </div>
    </main>
    <script src="/dist/script/main.js">
       
    </script>
</body>

</html>
