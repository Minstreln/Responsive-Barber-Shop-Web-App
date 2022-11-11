<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>@yield('title')</title>
</head>
<body>

    @yield('content')

</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <title>DEV</title>
</head>
<body>
    <div class="container">

    </div>

    <img src="{{asset('images/menu.png')}}" id="menuIcon" alt="">

    <div class="menu-box" id="menuBox">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">portfolio</a></li>
            <li><a href="">services</a></li>
            <li><a href="">about</a></li>
            <li><a href="">contact</a></li>
        </ul>
    </div>


    <script>
        let menuBox = document.getElementById('menuBox');

        let menuIcon = document.getElementById('menuIcon');

        menuIcon.onclick = function(){
            menuBox.classList.toggle("open-menu");

            if(menuBox.classList.contains("open-menu")){
                menuIcon.src = "{{asset('images/close.png')}}";
            }
            else {
                menuIcon.src = "{{asset('images/menu.png')}}";
            }
        }
    </script>
</body>
</html>
</html>