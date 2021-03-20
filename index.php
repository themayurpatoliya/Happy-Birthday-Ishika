<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lobster Two' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/06a3c3f0a7.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>

        h2 
        {
            color: #ffffff;
            font-family: 'Lobster Two';
            font-size: 63px;
            text-align: center;
            color: #ffffff;
        }

        .bg-music
        {
            position: absolute;
            top: 64%;
            left: 0;
            right: 0;
            margin: 0 auto;
        }

        .btn
        {
            background-color: transparent;
            color: #ffffff;
            font-size: 78px;
            border: none;
            display: block;
            margin: 0 auto;
            align-items: center;
            margin-top: 2%;
            opacity: .3;
            transition: all linear .2s;
        }

        .btn:hover{
            opacity: 1;
        }

        .fa-pause-circle-o
        {
            display: none;
        }

        .footer 
        {
            position: fixed;
            left: 0;
            bottom: 0%;
            width: 100%;
            background: rgba(40,50,61,.45);
            text-align: center;
        }

        .container
        {
            background: rgba(40,50,61,.45);
        }

        p 
        {
            color: #ffffff;
            text-align: center;
            font-size: 96px;
        }

        #lo
        {
            color: #ffffff;
            font-size: 21px;
        }

        #low
        {
            color: #ffffff;
            text-align: center;
            font-size: 36px;
        }

        #high
        {
            color: #ffffff;
            text-align: center;
            font-size: 36px;
        }

        #seconds
        {
            color: #ee5486;
            text-align: center;
            font-size: 96px;
        }

    </style>
</head>

<body style="margin-top:190px; background-image: url(back.png); background-size: cover;" >

    <div class="container" >

        <div class="Row">

            <div class="col-sm-4 align-self-center">
                <div id="dy">
                    <p id="day">00</p>        
                </div>
                <div><p id="low">DAYS</p></div>
            </div>

            <div class="col-sm-2 align-self-center">
                <div id="hr">
                    <p id="hrs">00</p>        
                </div>
                <div><p id="low">HOURS</p> </div>
            </div>

            <div class="col-sm-3">
                <div id="mi">
                    <p id="minutes">00</p>        
                </div>
                <div> <p id="low">MINUTES</p></div>
            </div>

            <div class="col-sm-3">
                <div id="se">
                    <p id="seconds">00</p>        
                </div>
                <div> <p id="low">SECONDS</p></div>
            </div>

        </div>

    </div>
    
    <div>
        <div class="col-sm-12 align-self-center">
            <hr style="width:77.7%">
            <h2>Every Second Is Special, Happy Birthday Ishika !</h2>
        </div>
    </div>

    <div class="bg-music">
        <audio id="myMusic" src="back.mp3" loop=""></audio>
        <button class="btn">
            <i class="fa fa-play-circle-o"></i>
            <i class="fa fa-pause-circle-o"></i>

        </button>
    </div>

    <script>
 
    var countDownDate = <?php echo strtotime('Mar 27, 2001 01:25:00') ?> * 1000;
    var now = <?php echo time() ?> * 1000;  

    var x = setInterval(function() {

        now = now + 1000;

        var distance = now - countDownDate;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("hrs").innerHTML = hours;

            document.getElementById("day").innerHTML = days ;
            document.getElementById("minutes").innerHTML =  minutes ;
            document.getElementById("seconds").innerHTML =  seconds;
        
    }, 1000);
    </script>

    <script type="text/javascript">
        
        $(document).ready(function(){
            $(".btn .fa-play-circle-o").on('click',function(){
                $(this).hide();
                $(".fa-pause-circle-o").fadeIn();
                $("#myMusic")[0].play();
            });

            $(".btn .fa-pause-circle-o").on('click',function(){
                $(this).hide();
                $(".fa-play-circle-o").fadeIn();
                $("#myMusic")[0].pause();
            });
        });

    </script>

    <div class="footer">
        <span id="lo">Time since Tuesday, 27 March 2001, 04:55:00 ( Ankleshwar Time )</span>
    </div>
</body>

</html>