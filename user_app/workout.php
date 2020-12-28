<?php
require_once 'header.php';
?>
<div class="page-content header-clear-small" style="background-color: #f0f0f0;">
    <div class="content">
        <img src="images/contoso.png" class="mx-5">
        <div class="text-center">
            <p class="text-muted mb-3" style="font-size:16px">is proud to sponsor your workout</p>
            <a href="conv-rate" class="btn btn-s mb-3 rounded-xl text-uppercase font-900 shadow-s bg-white text-dark">
                <i class="fa fa-info"></i> Updated Conversion Rate
            </a>
        </div>
        <div class="container container-fluid mt-3">
            <div class="row mb-0">
                <div class="w-100 text-center">
                    <h1 class="mb-0 text-muted" style="font-size:40px"><i class="fa fa-rupee-sign fa-sm"></i>0</h1>
                    <p class="mb-0" style="font-size:12px">IMPACT</p>
                </div>
                <div class="w-50 text-center">
                    <i class="fa fa-walking fa-2x"></i>
                    <h1 class="mb-0 text-muted" style="font-size:40px">0.00</h1>
                    <p class="mb-0" style="font-size:12px">DISTANCE</p>
                </div>
                <div class="w-50 text-center">
                    <i class="fa fa-fire fa-2x"></i>
                    <h1 class="mb-0 text-muted" style="font-size:40px">0.0</h1>
                    <p class="mb-0" style="font-size:12px">CALORIES</p>
                </div>
                <div id='time' class="w-100 text-center">
                    <i class="fa fa-stopwatch fa-2x"></i>
                    <h1 class="mb-0 text-muted" style="font-size:40px">0:10</h1>
                    <p class="mb-0" style="font-size:12px">MIN SEC</p>
                </div>
            </div>
        </div>
        <div class="mt-3 text-center">
            <a href="#" class="mb-3 icon rounded-l icon-xl bg-white text-dark">
                <i class="fa fa-microphone"></i>
            </a>
            <p>Voice Commands: ON</p>
        </div>
        <span class="p-3 d-flex fixed-bottom" style="background-color: #f0f0f0;">
            <a href="" class="btn btn-m btn-center-l bg-white text-dark border-dark text-uppercase font-900 text-uppercase rounded-xl shadow-xl mx-1">
                <i class="fa fa-pause"></i> PAUSE</a>
            <a href="index" class="btn btn-m btn-center-l bg-highlight text-uppercase font-900 text-uppercase rounded-xl shadow-xl mx-1">
                <i class="fa fa-check"></i> FINISH</a>
        </span>
    </div>
    <?php
    require_once 'js-links.php';
    ?>



    <!DOCTYPE html>
    <html>

    <head>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <style>
            p {
                text-align: center;
                font-size: 60px;
                margin-top: 0px;
            }
        </style>
    </head>

    <body>
        <p id="demo"></p>

        <button id="pause" class="btn btn-primary">Push</button>
        <button id="start" class="btn btn-primary">Finish</button>

        <script>
            sec = 0;
            days = 0;
            pause_status = false;
            // Update the count down every 1 second
            var x = setInterval(function() {

                $("#start").on("click", function() {
                    pause_status = false;
                });

                if (pause_status == false) {
                    days = days + 1;
                }


                document.getElementById("demo").innerHTML = days + "d";
                $("#pause").on("click", function() {
                    pause_status = true;
                });
                if (pause_status == true) {
                    $("$pause").html('hui');
                }

            }, 1000);
        </script>
    </body>

    </html>