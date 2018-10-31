<!DOCTYPE html>
<html>
<head>
    <!-- Meta Stuff -->
    <meta charset=utf-8 />
    <title>StreamPlayer - Main</title>

    <!-- CSS -->
    <link href="inc/style.css" rel="stylesheet">
    <link href="inc/simple-grid.min.css" rel="stylesheet">
    <link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">

    <!-- RTMP PLAYBACK SCRIPTS -->
    <script src="http://vjs.zencdn.net/4.11/video.js"></script>
    <script type="text/javascript" src="jquery-1.2.6.pack.js"></script>

</head>

<body>
    <!-- HEADER -->
    <div class="header">
        <!-- LOGO -->
        <span class="logo" style="color:orange;">Stream</span><span class="logo">Player</span> //

        <!-- NAV -->
        <span style="float:right;">
        <a id="nav" href="help.html" >Help</a>      
      </span>
    </div>

    <!-- MAIN APP DISPLAY -->
    <div class="appbg">
        <div class="row">

            <div class="col-9">
                <!-- RTMP Handler -->
                <video id="player" class="video-js vjs-default-skin" controls preload="auto" width="100%" height="720px" data-setup='{}'>
                    <source src="rtmp://echo.oath.pw/app/live" type='rtmp/mp4'>
                </video>
            </div>

            <div class="col-3">
                <!-- CHAT Handler -->
                <div style="height: 720px;">
I would recommend using <a href="https://www.rumbletalk.com/">https://www.rumbletalk.com/</a> or using <a href="https://webchat.freenode.net/">https://webchat.freenode.net/</a> irc embeds.
                </div>
            </div>

        </div>
    </div>

    </div>
</body>

</html>