{{-- @extends('welcome')
@section('content')

<style>
    body{
    overflow-x: hidden;
    background-image: linear-gradient(to bottom right,  rgb(247, 107, 205), rgb(243, 243, 137));
    }

.aboutPageTitle{
    z-index: 1;
    margin-top: 20%;
    font-size: 4em;
    font-weight: bold;
    font-family: 'Lora', serif;
    color: white;
    text-shadow: 2px 2px 5px #1f2274;
}

.aboutPageText{
    text-align: justify;
    padding: 5%;
}

.aboutPageText h1{
    font-size: 2em;
    font-weight: bold;
    font-family: 'Lora', serif;
}

#about{
    background-color: white;
    margin-top: 18%;
}


</style>



    
@endsection --}}

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Unitech Label</title>
        <link rel="icon" type="image/x-icon" href="{{asset('frontend/logo/viewport2.png')}}">
        <!-- bootstrap css cdn -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- second carousel jquery -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <!-- css -->
        <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/overview.css')}}">
        <style>
            body{
            overflow-x: hidden;
            background-image: linear-gradient(to bottom right,  rgb(247, 107, 205), rgb(243, 243, 137));
            }
        
        .aboutPageTitle{
            z-index: 1;
            margin-top: 20%;
            font-size: 4em;
            font-weight: bold;
            font-family: 'Lora', serif;
            color: white;
            text-shadow: 2px 2px 5px #1f2274;
        }
        
        .aboutPageText{
            text-align: justify;
            padding: 5%;
        }
        
        .aboutPageText h1{
            font-size: 2em;
            font-weight: bold;
            font-family: 'Lora', serif;
        }
        
        #about{
            background-color: white;
            margin-top: 18%;
        }
        
        
        </style>

      </head>

<body>

    <!-- navbar -->
    <section id="menubar" class="">
        <nav class="navbar navbar-expand-lg fixed-top shadow p-1 mb-5 bg-body" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('/')}}" style="padding-left: 3em; ">
                    <img src="{{asset('frontend/logo/logo.png')}}" style="width:90px; height:50px;" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon bg-dark" style="color: black;"></span> -->
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line" style="margin-bottom: 0;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 30%;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active menuItem" aria-current="page" href="{{route('/')}}">Go Back to
                                Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active menuItem" aria-current="page" href="#slider">Message</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active menuItem" aria-current="page" href="{{route('overview')}}">Company
                                Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  menuItem" aria-current="page" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle menuItem" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Our Profiles
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item menuItem"
                                        href="https://drive.google.com/u/0/uc?id=1t6AmQA-YZKk9RbE8ACfwP_-K-92mFWub&export=download">Unitech
                                        Label</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item menuItem"
                                        href="https://drive.google.com/u/0/uc?id=15uD5bFOU2gyV5F-UCVDdZQNIp3T88IWn&export=download">Unitek
                                        Trims</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- end navbar -->

    <!-- about banner -->
    <section id="aboutBanner" style="z-index: 0;">
        <div class="aboutPageBanner">
            <div class="row">
                <div class="col-lg-12 aboutPageImage">
                    <h1 class="aboutPageTitle text-center ">Learn More About Us...</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" style="padding: 1% 5%; z-index: 1; ">
        <div class="container my-5">
            

          @foreach($abouts as $about)


            <div class="row my-3">
                <div class="col-lg-6">
                    <div class="aboutPageText">
                        <h1>{{$about->title}}</h1>
                        <p class="my-4 mb-5">{{$about->description}}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="aboutImg" src="{{asset($about->image)}}" alt="">
                </div>
            </div>

            @endforeach
  
  
            <br>
            <div class="row my-3">
                <div class="col-lg-6">
                    <img class="aboutImg" src="{{asset('frontend/about/4.jpg')}}" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="aboutPageText">
                        <h1>Lorem Ipsum Dolor</h1>
                        <p class="my-4 mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum voluptates
                            nesciunt saepe aut autem id architecto numquam iusto non deleniti vitae, nihil
                            exercitationem dolores cum. Dolor ab sapiente recusandae possimus? Lorem ipsum, dolor sit
                            amet consectetur adipisicing elit. Rerum voluptates nesciunt saepe aut autem id architecto
                            numquam iusto non deleniti vitae, nihil exercitationem dolores cum. Dolor ab sapiente
                            recusandae possimus?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end about -->

    <!-- speech -->
    <!-- caurosel -->
    <section id="slider" class="container">
        <h1 class="contactTitle text-center p-5">Our Message</h1>
        <div id="carouselExampleControls " class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner ">

                {{-- messageToClients --}}

                @foreach($messageToClients as $messageToClient)

                    <div class="carousel-item  mt-5 {{$loop->iteration == 1 ? 'active' : ''}}">
                        <div class="row speechBg d-flex align-items-center ">
                            <div class="col-lg-12 p-5 sliders d-flex justify-content-center">
                                <div class="sliderItem d-flex flex-column  align-items-center">
                                    <img class="pb-4 pt-3 clientimage d-block w-10" src="{{asset($messageToClient->image)}}" alt="">
                                    <p class="clientName">{{$messageToClient->name}}, <small>{{$messageToClient->designition}}</small></p>
                                    <p class="text-center p-2 clientSpeech">{{$messageToClient->message}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

                {{-- <div class="carousel-item mt-5 active ">
                    <div class="row speechBg d-flex align-items-center ">
                        <div class="col-lg-12 p-5 sliders d-flex justify-content-center">
                            <div class="sliderItem d-flex flex-column  align-items-center">
                                <img class="pb-4 pt-3 clientimage d-block w-10" src="{{asset('frontend/people/1.jpg')}}" alt="">
                                <p class="clientName">Name of The Person, <small>Designation</small></p>
                                <p class="text-center p-2 clientSpeech">the best headphone in the world for people who
                                    just want to
                                    waste time in front. the best headphone in the world for people who just want to
                                    waste time in front.
                                    the best headphone in the world for people who just want to waste time in front.
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="carousel-item mt-5">
                    <div class="row speechBg d-flex align-items-center">
                        <div class="col-lg-12 p-5 sliders d-flex justify-content-center">
                            <div class="sliderItem d-flex flex-column  align-items-center">
                                <img class="pb-4 pt-3 clientimage d-block w-10" src="{{asset('frontend/people/1.jpg')}}" alt="">
                                <p class="clientName">Name of The Person, <small>Designation</small></p>
                                <p class="text-center p-2 clientSpeech">the best headphone in the world for people who
                                    just want to
                                    waste time in front. the best headphone in the world for people who just want to
                                    waste time in front.
                                    the best headphone in the world for people who just want to waste time in front.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mt-5">
                    <div class="row speechBg d-flex align-items-center ">
                        <div class="col-lg-12 p-5 sliders d-flex justify-content-center">
                            <div class="sliderItem d-flex flex-column  align-items-center">
                                <img class="pb-4 pt-3 clientimage d-block w-10" src="{{asset('frontend/people/1.jpg')}}" alt="">
                                <p class="clientName">Name of The Person, <small>Designation</small></p>
                                <p class="text-center p-2 clientSpeech">the best headphone in the world for people who
                                    just want to
                                    waste time in front. the best headphone in the world for people who just want to
                                    waste time in front.
                                    the best headphone in the world for people who just want to waste time in front.
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            
        </div>
    </section>
    <!-- end speech -->

    <!-- contact us -->
    <section id="contact" class="my-5" style="position: relative;">
        <h1 class="contactTitle text-center p-5">Contact Us</h1>
        <div class="container contact p-3">
            <!--Section: Contact v.2-->
            <section class="mb-4">
                <!--Section description-->

                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="name" class="form-control" id="floatingInput" placeholder="Name">
                                        <label class="contactText" for="floatingInput">Name</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput" placeholder="Email">
                                        <label class="contactText" for="floatingInput">Email address</label>
                                    </div>
                                </div>
                                <!--Grid column-->
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="subject" class="form-control" id="floatingInput"
                                            placeholder="Subject">
                                        <label class="contactText" for="floatingInput">Subject</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="message" class="form-control" id="floatingInput"
                                            placeholder="Your Message">
                                        <label class="contactText" for="floatingInput">Your Message</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid row-->
                            <div class="text-md-left">
                                <a class="btn contactBtn" type="submit">Send</a>
                            </div>
                    </div>
                    </form>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li class="contactList"><i class="fas fa-map-marker-alt fa-2x contactIcon"></i>
                                <p>Shimultola, Ashulia, Dhaka, Bangladesh</p>
                            </li>
                            <li class="contactList"><i class="fas fa-phone mt-4 fa-2x contactIcon"></i>
                                <p>+ 01 234 567 89</p>
                            </li>
                            <li class="contactList"><i class="fas fa-envelope mt-4 fa-2x contactIcon"></i>
                                <p>abc@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
            </section>
            <!--Section: Contact v.2-->
        </div>
    </section>
    <!-- end contact us -->

    <!-- footer -->
    <section id="footer"
        style="background-image: linear-gradient(to bottom, #2E3192, #040636); color: white; overflow-x: hidden;">
        <p class="text-center footerText">© 2022 Unitech Label & Tag. All rights reserved. </p>
    </section>
    <!-- end footer -->

    <!-- js -->
    <script src="script.js"></script>
    <!-- bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- second carousel js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
</body>

</html>