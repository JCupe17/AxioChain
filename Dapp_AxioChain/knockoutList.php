<?php include '_head.php'; ?>

<div class="list-area bg wrapper">

    <div class="search-area">
        <div class="container">
            <div id="date" class="date"></div>

            <div id="time" class="time"></div>

            <!--<form class="form search">
                <input type="search" name="s" class="control" placeholder="Search a team or a day"/>
                <button type="submit"><img src="img/glass.png" alt=""/></button>
            </form>-->
        </div>
    </div>

    <div class="heading-area">
        <div class="container">
            <div class="content">
                <h1 class="main-title">
                    Bet on your favorite Teams for <br/>the WORLD CUP 2018 with <br/><span class="dark">AxioChain</span>
                    <img src="img/logo-coin.png" alt=""/>
                </h1>
            </div>

            <div class="action">
                <a href="./list.php" class="btn secondary full">
                    <img src="img/arrow-left.png" alt=""/>
                    Back
                </a>
            </div>

            <div class="action">
                <a href="./list.php" class="btn secondary full">
                    <img src="img/refresh.png" alt=""/>
                    Update
                </a>
            </div>
        </div>
    </div>

    <div class="date-area">
        <div class="container">
            <div class="title">
            <span id="txStatus" class="inner">NOTE: You can only bet for a match until 12PM on the day of the Match.</span>
            </div>
        </div>
    </div>

    <div class="content-area items">
        <div class="container">

            <div class="item">
                <div class="inner">
                    <div class="head">
                        <center class="name">
                            <img src="img/ball.png" alt=""/>
                            ROUND OF 16
                        </center>
                    </div>

                    <form class="content">

                        <a href="roundOf16.php" type="submit" class="btn primary full" >BET !</a>

                    </form>
                </div>
            </div>

            <div class="item">
                <div class="inner">
                    <div class="head">
                        <center class="name">
                            <img src="img/ball.png" alt=""/>
                            QUARTER-FINALS
                        </center>
                    </div>

                    <form class="content">

                        <a href="quarterFinals.php" type="submit" class="btn primary full" >BET !</a>

                    </form>
                </div>
            </div>
        
            <div class="item">
                <div class="inner">
                    <div class="head">
                        <center class="name">
                            <img src="img/ball.png" alt=""/>
                            SEMI-FINALS, PLAY-OFF AND FINAL
                        </center>
                    </div>

                    <form class="content">

                        <a href="semiFinals.php" type="submit" class="btn primary full disabled" >BET !</a>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>

<script src="functions.js"></script>
<script>

    setHour("time","date");

</script>

<?php include '_foot.php'; ?>
