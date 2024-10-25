<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega 98.3</title>
</head>
<body>
    <h1>MEGA 98.3 - @SOFT
    <audio id="audio" controls></audio>

    <script src="hls.js@latest"></script>
    <script>
        if (Hls.isSupported()) {
            var audio = document.getElementById('audio');
            var hls = new Hls();
            var m3u8Url = 'https://mega.stweb.tv/mega983/live/playlist.m3u8';
            hls.loadSource(m3u8Url);
            hls.attachMedia(audio);
            hls.on(Hls.Events.MANIFEST_PARSED, function () {
                audio.play();
            });
        }
        else if (audio.canPlayType('application/vnd.apple.mpegurl')) {
            audio.src = 'https://mega.stweb.tv/mega983/live/playlist.m3u8';
            audio.addEventListener('canplay', function () {
                audio.play();
            });
        }
    </script>
</body>
</html>
