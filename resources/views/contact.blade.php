<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <link href="/css/globals.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <title>Nerfed</title>
</head>

<body>
    <!-- Navbar -->
    <x-navbar />

    <!--Showcase Area-->
    <section class="showcase">
        <div class="container grid">
            <div class="showcase-text">
                <h1>Contact us</h1>
                <a href="/videos" class="btn btn-outline">Go to videos</a>
                <a href="/gallery" class="btn btn-outline">Go to gallery</a>
            </div>
            <div class="showcase-form card">
                <h2>Send us a message</h2>
                @if(Session::has('message_sent'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('message_sent')}}
                </div>
                @endif
                <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-control">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-control">
                        <textarea name="message" placeholder="Your message here..." required></textarea>
                    </div>
                    <input name="send" type="submit" value="Send" class="btn btn-dark">
                </form>
            </div>
        </div>
    </section>

    <!-- Languages Section -->
    <section class="languages">
        <h2 class="md text-center my-2">
            Supported Languages
        </h2>
        <div class="container flex">
            <!-- <div class="card">
                <h4>Node.js</h4>
                <img src="images/logos/node.png" alt="">
            </div>
            <div class="card">
                <h4>C#</h4>
                <img src="images/logos/csharp.png" alt="">
            </div> -->
            <div class="card">
                <h4>PHP</h4>
                <img src="images/logos/php.png" alt="">
            </div>
            <!-- <div class="card">
                <h4>Python</h4>
                <img src="images/logos/python.png" alt="">
            </div> -->
        </div>
    </section>

    <!-- Footer -->
    <x-footer />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>