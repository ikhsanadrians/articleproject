<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/index.css">
    <title>AdriansBlog</title>
</head>

<body>
    <div class="center ml-[60px]">
        <div class="nav">
            <div class="innernav">

                <div class="nav-title flex"><img src="images/logoadrians.png" alt="logo"></div>

                <div class="nav-menu">
                    <ul>
                        <li>
                            <div class="Home">
                                <h1 class="text-blue-700"><a href="">Home</a></h1>
                            </div>
                        </li>
                        <li>
                            <div class="About">
                                <h1><a href="">About</a></h1>
                            </div>
                        </li>
                        <li>
                            <div class="Contact">
                                <h1><a href="">Contact</a></h1>
                            </div>
                        </li>
                        <li>
                            <div class="Articles">
                                <h1><a href="">Articles</a></h1>
                            </div>
                        </li>
                    </ul>
                </div>



            </div>

        </div>


        @yield('content')



        <div class="kosong mb-[1200px]"></div>
    </div>


</body>

</html>
