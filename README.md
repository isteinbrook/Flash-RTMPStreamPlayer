# Flash-RTMPStreamPlayer

## What is this?
A quick start guide on deploying a streaming service with basic playback. Examples uses unbuntu for steam handler and playback.

## Framworks used in html folder
* https://github.com/videojs/video.js
* https://github.com/zachacole/Simple-Grid

## Setting up a RTMP Stream Handler.
*We are going to use ossrs(https://github.com/ossrs/srs) for our stream handler.*

### Installing OSSRS
*[Installing GIT on linux](https://gist.github.com/derhuerst/1b15ff4652a867391f03)*
1. Go to your linux server and Download SRS:
```
cd ~ && git clone https://github.com/ossrs/srs && cd srs/trunk
```
2. Build SRS:
```
./configure && make
```
3. Run SRS:
```
./objs/srs -c conf/srs.conf
```

### Streaming to your custom server
OBS Stream Settings:
```
Stream Type: Custom Streaming Server

URL: rtmp://<your_server_ip>/app

Stream Key: lets use "live"
```

### Testing your custom server
You can view the live replay by opening a VLC network stream.

media->open network stream

then put in rtmp://<your_server_ip>/app/live in the context box.

*OR*

Use an online rtmp player, for example(https://www.wowza.com/resources/3.6.0/examples/LiveVideoStreaming/FlashRTMPPlayer/player.html).

Server: rtmp://<your_server_ip>/app/

Stream: live

## Web server playback.
*Note: This bit of the guide is available in the html file in the repo, this section makes it easier to implement into your own project with the included html folder having styling already done.*

We are going to use the Video.js(https://github.com/videojs/video.js) framework to replay the RTMP stream over http.
If your not into videojs some alternatives are:
* Strobe - https://github.com/denivip/StrobeMediaPlayback
* JWPlayer - https://github.com/jwplayer/jwplayer
* Flow PLayer - https://github.com/flowplayer/flowplayer

`<head>`
```html
<link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
```
```
<script src="http://vjs.zencdn.net/4.11/video.js"></script>
```

`<body>`
```html
<video id="player" class="video-js vjs-default-skin" controls autoplay preload="auto" width="100%" height="720px" data-setup='{}'> <source src="rtmp://<your_server_ip>/app/streamkey" type='rtmp/mp4'> 
</video>
```
  
**src="rtmp://<your_server_ip>/app/streamkey"** This is the important bit, change this to match the settings you input into obs. In the "Streaming to your custom server" section we used "live" for the streamkey.

## Notes:
With default installtion anyone with the knowledge of your origin server can stream to the server the stream handler is setup on.
