<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Musikerong Photographer</title>
    <link rel="stylesheet" href="css_project/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="script_project/pace.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
</head>

<body>


    <div id="preloader">
        <div class="p">LOADING</div>
    </div>
    <div class="header">
        <img class="logo" src="picture_project/logo.png">
        <div class="navbar">
            <a class="nav active" href="main.html">Home</a>
            <a class="nav" href="about me.html">About Me</a>
            <a class="nav" href="clients.html">Clients</a>
            <a class="nav" href="travels.html">Travels</a>
            <a class="nav" href="randoms.html">Randoms</a>
           
        </div>
    </div>
    <div class="row">
        <div class="column">
            <img src="picture_project/1.jpg" style="width: 100%">
            <img src="picture_project/2.jpg" style="width: 100%">
            <img src="picture_project/3.jpg" style="width: 100%">
            <img src="picture_project/12.jpg" style="width: 100%">
            <img src="picture_project/15.jpg" style="width: 100%">
            <img src="picture_project/21.jpg" style="width: 100%">
            <img src="picture_project/22.jpg" style="width: 100%">
        </div>
        
        <div class="column">
            <img src="picture_project/4.jpg" style="width: 100%">
            <img src="picture_project/8.jpg" style="width: 100%">
            <img src="picture_project/10.jpg" style="width: 100%">
            <img src="picture_project/11.jpg" style="width: 100%">
            <img src="picture_project/14.JPG" style="width:100%">
            <img src="picture_project/23.jpg" style="width:100%">
        </div>

        <div class="column">
            <img src="picture_project/6.jpg" style="width:100%">
            <img src="picture_project/9.jpg" style="width:100%">
            <img src="picture_project/13.JPG" style="width:100%">
            <img src="picture_project/19.jpg" style="width:100%">
            <img src="picture_project/20.jpg" style="width:100%">
            <img src="picture_project/24.jpg" style="width:100%">
            <img src="picture_project/25.jpg" style="width:100%">
        </div>
        <div class="column">
            <img src="picture_project/17.jpg" style="width:100%">
            <img src="picture_project/7.jpg" style="width:100%">
            <img src="picture_project/16.jpg" style="width:100%">
            <img src="picture_project/18.jpg" style="width:100% ">
            <img src="picture_project/26.jpg" style="width:100%">
            <img src="picture_project/27.jpg" style="width:100%">

        </div>


        <div class="footer">
            <p>	&#169; 2019; Kurl Francis Dedumo | Ralph Martin Dedumo</p>
        </div>


        <script>

            paceOptions = {
                ajax: true,
                document: true,
                eventLag: false
            };

            Pace.on('done', function () {
                $('.p').delay(500).animate({ top: '30%', opacity: '0' }, 3000, $.bez([0.19, 1, 0.22, 1]));


                $('#preloader').delay(1500).animate({ top: '-100%' }, 2000, $.bez([0.19, 1, 0.22, 1]));

                TweenMax.from(".title", 2, {
                    delay: 1.8,
                    y: 10,
                    opacity: 0,
                    ease: Expo.easeInOut
                })
            });

        </script>

</body>

</html>
