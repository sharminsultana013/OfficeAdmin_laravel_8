@extends('welcome')
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
            <div class="row my-3">
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
                <div class="col-lg-6">
                    <img class="aboutImg" src="{{asset('frontend/about/3.jpg')}}" alt="">
                </div>
            </div>
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
                <div class="carousel-item mt-5 active ">
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
                </div>
                <div class="carousel-item mt-5">
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
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button> -->
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
    
@endsection