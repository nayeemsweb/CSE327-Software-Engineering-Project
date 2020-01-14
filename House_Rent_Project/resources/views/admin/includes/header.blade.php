
<body data-spy="scroll" data-target=".main-nav" data-offset="50">
<!--========================================================
                        Header Start
==========================================================-->
<header id="header">
    <!-- Top Nav -->
    <nav class="top-nav">
        <div class="container">
            <ul class="ml-auto">
                <li><a href="login.html"><i class="fa fa-lock" aria-hidden="true"></i>Login</a></li>
                <li><a href="signup.html"><i class="fa fa-pencil" aria-hidden="true"></i>Sigup</a></li>
                <!-- search form -->
                <li>
                    <form action="#">
                        <input type="text">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li>
            </ul>
        </div><!-- /.container -->
    </nav><!-- /.top-nav -->

    <!-- Main Nav -->
    <nav class="main-nav navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.html">
                <figure>
                    <img src="{{asset('public/frontend/images/logo.png')}}" class="img-fluid" alt="">
                </figure>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dreamlandNavbar" aria-controls="dreamlandNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="dreamlandNavbar">
                <!-- Main menu -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#header">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#property">property</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#agents">agents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">contact</a>
                    </li>
                </ul>
                <!-- contact-nav -->
                <ul class="contact-nav">
                    <li><i class="fa fa-phone" aria-hidden="true"></i><span>+91 254 845 684</span></li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>Bridge Water22, New York City.</li>
                </ul>
            </div><!-- /.collapse -->
        </div><!-- /.container -->
    </nav><!-- /.main-nav -->
</header><!-- /header -->
