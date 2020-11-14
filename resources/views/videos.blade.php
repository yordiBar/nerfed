<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/globals.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Nerfed</title>
</head>

<body>
    <!-- Navbar-->
    <x-navbar />

    <!-- Head -->
    <section class="videos-head bg-primary py-3">
        <div class="container grid">
            <div>
                <h1 class="xl">Videos</h1>
                <p class="lead">
                    This is a collection of my YouTube videos.
                    Videos and montages made using several different programmes and techniques.
                </p>
            </div>
        </div>
    </section>

    <!-- Videos-main -->
    <section class="videos-main my-2">
        <div class="container">
            <h4>Latest videos...</h4>
        </div>
        <div class="container vid vid-3">
            <div class="card flex">
                <iframe class="latestVideoEmbed" vnum='0' cid="UC4EIFBatBM5pdB1tiRm1QPA" width="250" height="180" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card flex">
                <iframe class="latestVideoEmbed" vnum='1' cid="UC4EIFBatBM5pdB1tiRm1QPA" width="250" height="180" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card flex">
                <iframe class="latestVideoEmbed" vnum='3' cid="UC4EIFBatBM5pdB1tiRm1QPA" width="250" height="180" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="container vid vid-3">
            <div class="card flex">
                <iframe class="latestVideoEmbed" vnum='4' cid="UC4EIFBatBM5pdB1tiRm1QPA" width="250" height="180" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card flex">
                <iframe class="latestVideoEmbed" vnum='5' cid="UC4EIFBatBM5pdB1tiRm1QPA" width="250" height="180" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="card flex">
                <iframe class="latestVideoEmbed" vnum='6' cid="UC4EIFBatBM5pdB1tiRm1QPA" width="250" height="180" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="container yt">
            <h4>For more videos please checkout my
                <a href="https://www.youtube.com/channel/UC4EIFBatBM5pdB1tiRm1QPA/featured" target="_blank">
                    YouTube</a> channel... >>> <a href="https://www.youtube.com/channel/UC4EIFBatBM5pdB1tiRm1QPA/featured" target="_blank">
                    <i class="fab fa-youtube fa-2x"></i></a></h4>
        </div>

    </section>

    <!-- Sub Head -->
    <section class="videos-sub-head bg-light py-3">
        <div class="container grid">
            <div>
                <h1 class="md">Video Editor</h1>
                <p>
                    Training and practicing in the field of video and sound editing.
                    Checkout my YouTube channel!
                    <a href="https://www.youtube.com/channel/UC4EIFBatBM5pdB1tiRm1QPA/featured" target="_blank">
                        <i class="fab fa-youtube fa-2x"></i></a>
                </p>
            </div>
            <img src="images/server2.png" alt="">
        </div>
    </section>


    <!-- Footer -->
    <x-footer />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");

        function loadVideo(iframe) {
            $.getJSON(reqURL + iframe.getAttribute('cid'),
                function(data) {
                    var videoNumber = (iframe.getAttribute('vnum') ? Number(iframe.getAttribute('vnum')) : 0);
                    console.log(videoNumber);
                    var link = data.items[videoNumber].link;
                    id = link.substr(link.indexOf("=") + 1);
                    iframe.setAttribute("src", "https://youtube.com/embed/" + id + "?controls=0&autoplay=1");
                }
            );
        }
        var iframes = document.getElementsByClassName('latestVideoEmbed');
        for (var i = 0, len = iframes.length; i < len; i++) {
            loadVideo(iframes[i]);
        }
    </script>
</body>

</html>