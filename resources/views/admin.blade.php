<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" 
    crossorigin="anonymous" />

    <link href="/css/globals.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    
    <title>Nerfed</title>
</head>
<body>
    <!-- Navbar-->
    <div class="navbar">
        <div class="container flex">
            <h1 class="logo">Nerfed</h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li><a href="/videos">Videos</a></li>
                            <li><a href="/gallery">Gallery</a></li>
                            <li><a href="/user/profile">{{ Auth::user()->name }}</a></li>
                            <li><a href="/logout">Logout</a></li>                            
                        @else
                            <li><a href="/login">Login</a></li>
                            @if (Route::has('register'))
                                <li><a href="/register">Register</a></li>
                            @endif
                        @endif
                    @endif
                </ul>
            </nav>
        </div>
    </div>
    <!--Showcase Area-->
    <section class="showcase">
        <div class="container grid">
            <div class="showcase-text">
                <h1>My Video Editing Blog</h1>
                <p>This is a collection of the work I have done on my 
                    clips playing Fortnite.
                </p>
                    <a href="videos.html" class="btn btn-outline">Watch more videos</a>
            </div>
            <div class="showcase-form card">
                <h2>Send us a message</h2>
                <form>
                    <div class="form-control">
                        <input type="text" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-control">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-control">
                        <textarea placeholder="Your message here..." required></textarea>
                    </div>                    
                    <input type="submit" value="Send" class="btn btn-dark">
                </form>                
            </div>
        </div>
    </section>

    <!-- Features-->
    <section class="features">
        <div class="container">
            <h3 class="features-heading text-center my-1">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Vivamus venenatis velit vitae massa tempor, et ultricies elit luctus. 
                Ut gravida eu nulla a dignissim. Sed sagittis a mi ac volutpat.
            </h3>

            <div class="grid grid-3 text-center my-4">
                <div>
                    <i class="fas fa-server fa-3x"></i>
                    <h3>Something here</h3>
                    <!-- <p class="text-secondary">Title 1</p> -->
                </div>
                <div>
                    <i class="fas fa-camera fa-3x"></i>
                    <h3>Gallery</h3>
                    <!-- <p class="text-secondary">Gallery</p> -->
                </div>
                <div>
                    <i class="fas fa-project-diagram fa-3x"></i>
                    <h3>Something here</h3>
                    <!-- <p class="text-secondary">Title 3</p> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Image and Grid Section -->
    <section class="image">
        <div class="container grid">
            <img src="images/coder-image_800x800.png" alt="">
        <div class="card">
            <h3>Something here</h3>
        </div>
        <div class="card">
            <h3>More stuff here</h3>
        </div>
        </div>
    </section>

    <!-- Graphic Section -->
    <section  class="graph bg-primary my-2 py-2">
        <div class="container grid">
            <div class="text-center">
                <h2 class="lg">Some Graphics here</h2>
                <p class="lead my-1">Some text here, a bit longer to fill the space</p>
                <a href="features.html" class="btn btn-dark">Read More</a>
            </div>
            <img src="images/cloud.png" alt="">
        </div>
    </section>

    <!-- Languages Section -->
    <section class="languages">
        <h2 class="md text-center my-2">
            Supported Languages
        </h2>
        <div class="container flex">
            <div class="card">
                <h4>Node.js</h4>
                <img src="images/logos/node.png" alt="">
            </div>
            <div class="card">
                <h4>C#</h4>
                <img src="images/logos/csharp.png" alt="">
            </div>
            <div class="card">
                <h4>PHP</h4>
                <img src="images/logos/php.png" alt="">
            </div>
            <div class="card">
                <h4>Python</h4>
                <img src="images/logos/python.png" alt="">
            </div>            
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark py-5">
        <div class="container grid grid-3">
            <div>
                <h1>Nerfed</h1>
                <p>Copyright &copy; 2020</p>
            </div>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/videos">Videos</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                </ul>
            </nav>
            <div class="social">
                <a href="#"><i class="fab fa-github fa-2x"></i></a>
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>