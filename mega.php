<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproductor M3U8 con Banner de Fotos</title>
    <style>
        /* Estilos para el banner de fotos */
        .banner-container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .banner-images {
            display: flex;
            width: 100%;
            animation: slide 28s infinite;
        }

        .banner-container img {
            width: 100%;
            border-radius: 10px;
        }

        @keyframes slide {
            0% { transform: translateX(0%); }
            33% { transform: translateX(-100%); }
            66% { transform: translateX(-200%); }
            100% { transform: translateX(0%); }
        }

        /* Opcional: estilizar el reproductor de audio */
        audio {
            display: block;
            margin: 0 auto;
            margin-bottom: 20px;
            width: 100%;
            max-width: 600px;
        }

        h1, p {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Mega 98.3</h1>

    <!-- Reproductor de audio -->
    <audio id="audio" controls></audio>

    <!-- Banner de fotos -->
    <div class="banner-container">
        <div class="banner-images">
            <img src="convenio.jpg" alt="Foto 1">
            <img src="convenio1.jpg" alt="Foto 2">
            <img src="cotizacion.jpg" alt="Foto 3">
        </div>
    </div>

    <p>@SOFT Informática de Avanzada (2024) .</p>

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
        } else if (audio.canPlayType('application/vnd.apple.mpegurl')) {
            audio.src = 'https://mega.stweb.tv/mega983/live/playlist.m3u8';
            audio.addEventListener('canplay', function () {
                audio.play();
            });
        }
    </script>
</body>
</html>
