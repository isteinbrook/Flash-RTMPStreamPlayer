# Flash-RTMPStreamPlayer

## What is this?
A quick start guide on deploying a streaming service with basic playback.

## What do I need?
* Linux server for stream handler, this guide uses debian.

* Web server for playback

## What framworks are used in the html files/project?
* https://github.com/ossrs/srs
* https://videojs.com/
* http://simplegrid.io/

## Setting up a RTMP Stream Handler.
*We are going to use ossrs(https://github.com/ossrs/srs) for our stream handler.*

### Installing OSSRS
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

We are going to use the Video.js(https://videojs.com/) framework to replay the RTMP stream over http.

`<head>`
```html
<link href="http://vjs.zencdn.net/4.11/video-js.css" rel="stylesheet">
```
  
`<body>`
```html
<video id="player" class="video-js vjs-default-skin" controls autoplay preload="auto" width="100%" height="720px" data-setup='{}'> <source src="rtmp://<your_server_ip>/app/streamkey" type='rtmp/mp4'> 
</video>
```
  
**src="rtmp://<your_server_ip>/app/streamkey"** This is the important bit, change this to match the settings you input into obs. In the "Streaming to your custom server" section we used "live" for the streamkey.
