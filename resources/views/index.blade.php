
@extends('welcome')

@section('content')

  <!-- banner -->
  <section id="banner">
    <!-- caarousel -->
    <div id="carouselExampleCaptionsOne" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators" style="margin-bottom: 50px;">
        <button type="button" data-bs-target="#carouselExampleCaptionsOne" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptionsOne" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptionsOne" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div> 
      <div class="carousel-inner" style="height: 100vh;">
        <div class="carousel-item active" style="height: 100%;">
          <img src="{{asset('frontend/slider/6.jpg')}}" class="d-block w-100" alt="..." style="height: 100%;">
          <!-- <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div> -->
        </div>
        <div class="carousel-item" style="height: 100%;">
          <img src="{{asset('frontend/slider/7.jpg')}}" class="d-block w-100" alt="..." style="height: 100%;">
          <!-- <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div> -->
        </div>
        <div class="carousel-item" style="height: 100%;">
          <img src="{{asset('frontend/slider/8.jpg')}}" class="d-block w-100" alt="..." style="height: 100%;">
          <!-- <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div> -->
        </div>
      </div>
      <button class="carousel-control-prev" style="margin-bottom: 0px;" type="button"
        data-bs-target="#carouselExampleCaptionsOne" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" style="margin-bottom: 0px;" type="button"
        data-bs-target="#carouselExampleCaptionsOne" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- end carousel -->
  </section>
  <!-- end banner -->

  <!-- About -->
  <section id="about" style="padding: 1% 5%;">
    <h1 class="aboutTitle text-center my-5"><span>A</span>bout <span>U</span>s</h1>
    <div class="container my-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="aboutText">
            <h1>Lorem Ipsum Dolor</h1>
            <p class="my-4 mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum voluptates nesciunt
              saepe aut autem id architecto numquam iusto non deleniti vitae, nihil exercitationem dolores cum. Dolor ab
              sapiente recusandae possimus? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum voluptates
              nesciunt saepe aut autem id architecto numquam iusto non deleniti vitae, nihil exercitationem dolores cum.
              Dolor ab sapiente recusandae possimus?</p>

            <a href="{{route('about')}}">
              <button type="button" class="aboutBtn btn mb-5" style="border: 1px solid rgb(33, 6, 189)">Learn
                More</button>
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <img class="aboutImg" src="{{asset('frontend/slider/9.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- end about -->

  <!-- Our Products -->
  <section id="products" class="my-5" style="padding: 0 5%;">
    <h1 class="aboutTitle text-center my-5"><span>O</span>ur <span>P</span>roducts</h1>
    <div class="container product">
      <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
        <div class="col">
          <div class="card h-100 p-3">
            <img src="{{asset('frontend/products/1.jpg')}}" width="100%" height="320vh" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <button class="btn productBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">View
                Details</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 p-3">
            <img src="{{asset('frontend/products/2.jpg')}}" width="100%" height="320vh" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title" style="font-family: 'Lora', serif;">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <button class="btn productBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">View
                Details</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 p-3">
            <img src="{{asset('frontend/products/3.jpg')}}" width="100%" height="320vh" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <button class="btn productBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">View
                Details</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 p-3">
            <img src="{{asset('frontend/products/4.jpg')}}" width="100%" height="320vh" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <button class="btn productBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">View
                Details</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 p-3">
            <img src="{{asset('frontend/products/5.jpg')}}" width="100%" height="320vh" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <button class="btn productBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">View
                Details</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 p-3">
            <img src="{{asset('frontend/products/6.jpg')}}" width="100%" height="320vh" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
              <button class="btn productBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">View
                Details</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Services -->
  <section id="services" class="my-5" style="padding: 1% 5%;">
    <h1 class="aboutTitle text-center my-5"><span>O</span>ur <span>S</span>ervices</h1>
    <div class="service p-3">
      <div class="row row-cols-1 row-cols-md-2 g-3">
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('frontend/service/1.jpg')}}" class="card-img-top serviceImg" alt="">
            <div class="serviceTextDiv">
              <p class="serviceTitle">Service Name</p>
              <p class="serviceText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti saepe maiores at
                reprehenderit placeat quibusdam quisquam exercitationem ipsum dolorum molestiae.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('frontend/service/2.png')}}" class="card-img-top serviceImg" alt="...">
            <div class="serviceTextDiv">
              <p class="serviceTitle">Service Name</p>
              <p class="serviceText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti saepe maiores at
                reprehenderit placeat quibusdam quisquam exercitationem ipsum dolorum molestiae.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('frontend/service/3.jpg')}}" class="card-img-top serviceImg" alt="">
            <div class="serviceTextDiv">
              <p class="serviceTitle">Service Name</p>
              <p class="serviceText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti saepe maiores at
                reprehenderit placeat quibusdam quisquam exercitationem ipsum dolorum molestiae.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{asset('frontend/service/4.jpg')}}" class="card-img-top serviceImg" alt="">
            <div class="serviceTextDiv">
              <p class="serviceTitle">Service Name</p>
              <p class="serviceText">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti saepe maiores at
                reprehenderit placeat quibusdam quisquam exercitationem ipsum dolorum molestiae.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end our services -->

  <!-- Gallery -->
  <section id="gallery" class="my-5" style="padding: 1% 5%;">
    <h1 class="aboutTitle text-center my-5"><span>G</span>ellary</h1>
    <div class="container gallery">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <a href="{{asset('frontend/gallery/1.webp')}}" target="blank">
            <img src="{{asset('frontend/gallery/1.webp')}}" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a>

          <a href="{{asset('frontend/gallery/2.webp')}}" target="blank">
            <img src="{{asset('frontend/gallery/2.webp')}}" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <a href="{{asset('frontend/gallery/3.webp')}}" target="blank">
            <img src="{{asset('frontend/gallery/3.webp')}}" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a>

          <a href="{{asset('frontend/gallery/1.webp')}}" target="blank">
            <img src="{{asset('frontend/gallery/1.webp')}}" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <a href="{{asset('frontend/gallery/5.webp')}}" target="blank">
            <img src="{{asset('frontend/gallery/5.webp')}}" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a>

          <a href="{{asset('frontend/gallery/5.webp')}}" target="blank">
            <img src="{{asset('frontend/gallery/4.webp')}}" class="w-100 shadow-1-strong rounded mb-4 gellaryImg" alt="..." />
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end gallery -->

  <!-- Clients -->
  <section id="client" class="my-5" style="padding: 1% 5%;">
    <h1 class="aboutTitle text-center p-1 mb-5"><span>O</span>ur <span>C</span>lients</h1>
    <!-- <h1 class="text-center" >sharmin sultana</h1> -->
    <div class="container client">
      <section class="client-logos slider ">
        <div class="slide"><img src="{{asset('frontend/clients/1.webp')}}">
        </div>
        <div class="slide"><img src="{{asset('frontend/clients/2.webp')}}"></div>
        <div class="slide"><img src="{{asset('frontend/clients/3.webp')}}"></div>
        <div class="slide"><img src="{{asset('frontend/clients/4.webp/')}}">
      </div>
        <div class="slide"><img src="{{asset('frontend/clients/5.webp')}}"></div>
        <div class="slide"><img src="{{asset('frontend/clients/6.webp')}}"></div>
        <div class="slide"><img src="{{asset('frontend/clients/7.webp')}}">
        </div>
      </section>
    </div>
  </section>
  <!-- end clients -->

  <!-- contact us -->
  <section id="contact" class="my-5">
    <h1 class="aboutTitle text-center p-5"><span>C</span>ontact <span>U</span>s</h1>
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
                    <input type="email" class="form-control" id="floatingInput" placeholder="Email Address">
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
                    <input type="subject" class="form-control" id="floatingInput" placeholder="Subject">
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
                    <input type="message" class="form-control" id="floatingInput" placeholder="Your Message">
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

  <!-- modal -->
  <!-- Modal -->
  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modalBody">
        <div class="modal-header">
          <h5 class="modal-title " id="exampleModalLabel">Card title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <img src="{{asset('frontend/products/6.jpg')}}" width="100%" height="320vh" class="card-img-top" alt="">
          <p class="modalText">This is a wider card with supporting text below as a natural lead-in to additional
            content. This content is a little bit longer. This is a wider card with supporting text below as a natural
            lead-in to additional
            content. This content is a little bit longer. This is a wider card with supporting text below as a natural
            lead-in to additional
            content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>

@endsection