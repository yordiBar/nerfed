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
    <!-- Navbar-->
    <x-navbar />

    <!-- Head -->
    <section class="gallery-head bg-primary py-3">
        <div class="container grid">
            <div>
                <h1 class="xl">Gallery</h1>
                <p class="lead">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quam animi sapiente nam alias ullam fugit inventore
                    provident repudiandae cumque beatae.
                </p>
            </div>
            <img src="images/docs.png" alt="">
        </div>
    </section>

    <!-- Gallery Main -->
    <section class="gallery-main my-4">
        <div class="container grid">
            <div class="card bg-light p-3">
                <h3 class="my-2">Essentials</h3>
                <nav>
                    <ul>
                        <li><a class="#" href="#">Introduction</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">History</a></li>
                    </ul>
                </nav>
                <h3 class="my-2">Deployment</h3>
                <nav>
                    <ul>
                        <li><a href="#">List Item 1</a></li>
                        <li><a href="#">List Item 2</a></li>
                        <li><a href="#">List Item 3</a></li>
                    </ul>
                </nav>
            </div>
            <div class="card">
                <h2>Introduction</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quam animi sapiente nam alias ullam fugit inventore
                    provident repudiandae cumque beatae.
                </p>

                <div class="alert alert-success">
                    <i class="fas fa-info"></i> Lorem, ipsum
                    dolor sit amet consectetur adipisicing elit.
                    Accusantium, iste!
                </div>

                <h3>Lorem, ipsum dolor.</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quam dicta similique ratione dolore assumenda provident.
                </p>
                <a href="" class="btn btn-primary">Do something here...</a>

                <h3>Requirements</h3>
                <ul>
                    <li>Windows, Mac OSX, Linux</li>
                    <li>Editing Software</li>
                </ul>

                <h3>Installation</h3>
                <p>Mac (Homebrew)</p>
                <pre><code>$ brew install Filmora</code></pre>
                <p>NPM</p>
                <pre><code>$ npm install Filmora</code></pre>
                <p>Yarn</p>
                <pre><code>$ yarn install Filmora</code></pre>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer />
</body>

</html>