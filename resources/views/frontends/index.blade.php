@extends('master.master')

@section('title','Home Page')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light" id="navbar">

    <a class="navbar-brand " href="#">Shopping</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent" class="navbar-text">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link " href="#">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#service">SERVICE</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="#about">ABOUTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#products">PRODUCTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#contact">CONTACTS</a>
          </li>
      </ul>
    </div>
  </nav>
{{-- banner --}}
<section id="banner" >
  <div class="row">
    <div class="col-md-6">
      <h2 class="header-title">What We Do?</h2>
      <p class="header-para text-center">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi id ipsa ullam facere asperiores repellat tenetur, tempora illo velit natus hic corrupti rerum omnis explicabo quidem at sunt maiores nobis pariatur. Quos odio esse vitae temporibus, nam magni, aspernatur minima fuga eius quas molestiae laudantium velit, unde dolorem soluta fugit cumque sed explicabo illum nulla reprehenderit iste dolorum laboriosam consequatur? Modi corrupti esse, in id repudiandae ex voluptas libero consequatur architecto? 
      </p>
      <button class="header-btn">Learn More</button>
    </div>
    <div class="col-md-6 pt-5">
      <img src="{{asset('assets/images/social.jpg')}}" class="banner-img" alt="social-media">
    </div>
  </div>
  {{-- <img src="{{asset('assets/images/wave-2.png')}}" class="wave-img img-fluid" alt="wave"> --}}
</section>
{{-- banner --}}

{{-- service --}}
<section id="service">
  <div class="container-fluid">
    <h2 class="text-center pb-5 mt-4" id="service">Our Service</h2>
    <div class="row">
      
      <div class="col-md-4">
      
      <img src="{{asset('assets/images/digital.jpg')}}" class="service-img" alt="digital">
      <h3>Digital Marketing</h3>
      <p >
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloremque, voluptas blanditiis voluptatibus explicabo eos ullam atque nobis fugiat voluptatum aperiam nam in neque quibusdam eaque assumenda nihil. Ad odio odit modi quo consequuntur.
      </p>
      </div>
      <div class="col-md-4">
      
        <img src="{{asset('assets/images/web-dev.jpg')}}" class="service-img" alt="web">
        <h3>Web Developement</h3>
        <p >
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloremque, voluptas blanditiis voluptatibus explicabo eos ullam atque nobis fugiat voluptatum aperiam nam in neque quibusdam eaque assumenda nihil. Ad odio odit modi quo consequuntur.
        </p>
        </div>
        <div class="col-md-4">
      
          <img src="{{asset('assets/images/android-1.png')}}" class="service-img" alt="android">
          <h3>Android Developement</h3>
          <p >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam doloremque, voluptas blanditiis voluptatibus explicabo eos ullam atque nobis fugiat voluptatum aperiam nam in neque quibusdam eaque assumenda nihil. Ad odio odit modi quo consequuntur.
          </p>
          </div>
    </div>
  </div>

</section>
{{-- service --}}

{{-- app box --}}
  <section id="app-box">
    <h2 class="text-center p-4" id="about">Our App For You</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('assets/images/app.png')}}" class="app-img rounded" alt="">
        </div>

        <div class="col-md-6">
          <div class="app-body">
            <p class="app-para ">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum culpa quam assumenda iste cum incidunt, vitae non necessitatibus aspernatur amet nulla, dolorum tenetur itaque earum doloremque? Deleniti pariatur blanditiis eveniet, corporis ipsa quam cumque ut quod, omnis molestiae animi impedit hic, repudiandae officia eaque. Unde dolores non fuga alias facere, consequatur itaque assumenda, est error tempore eveniet aliquam temporibus quaerat enim sunt odio vitae veniam fugiat autem suscipit velit.
            </p>
            <div class="app-group">
              <button class="app-btn">iOS App</button>
              <button class="app-btn">Android App</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- app box --}}


{{-- product --}}
  <section id="product">
    <div class="container">
      <h2 class="text-center mt-3" id="products">Our Products</h2>
      <div class="row p-3">

        {{-- start card --}}
        <div class="col-md-3">
        <div class="card">
          <img class="card-img-top" height="200px" src="{{asset('assets/images/aa.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-center">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="row">
              <p class="pl-5">MMK 50000</p>
              <p class="ml-auto pr-4">
                <i class="fa-solid fa-cart-arrow-down"></i>
                <span class="badge badge-pill badge-dark">0</span>
              </p>
            </div>
            <div class="text-center">
            <a href="#" class="card-btn"><i class="fa-solid fa-cart-arrow-down"></i> View More</a>
          </div>
          </div>
        </div>
      </div>
        {{-- end card --}}
         {{-- start card --}}
         <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" height="200px" src="{{asset('assets/images/aa.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="row">
                <p class="pl-5">MMK 50000</p>
                <p class="ml-auto pr-4">
                  <i class="fa-solid fa-cart-arrow-down"></i>
                  <span class="badge badge-pill badge-dark">0</span>
                </p>
              </div>
              <div class="text-center">
              <a href="#" class="card-btn"><i class="fa-solid fa-cart-arrow-down"></i> View More</a>
            </div>
            </div>
          </div>
        </div>
          {{-- end card --}}
           {{-- start card --}}
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" height="200px" src="{{asset('assets/images/aa.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="row">
                <p class="pl-5">MMK 50000</p>
                <p class="ml-auto pr-4">
                  <i class="fa-solid fa-cart-arrow-down"></i>
                  <span class="badge badge-pill badge-dark">0</span>
                </p>
              </div>
              <div class="text-center">
              <a href="#" class="card-btn"><i class="fa-solid fa-cart-arrow-down"></i> View More</a>
            </div>
            </div>
          </div>
        </div>
          {{-- end card --}}
           {{-- start card --}}
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" height="200px" src="{{asset('assets/images/aa.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="row">
                <p class="pl-5">MMK 50000</p>
                <p class="ml-auto pr-4">
                  <i class="fa-solid fa-cart-arrow-down"></i>
                  <span class="badge badge-pill badge-dark">0</span>
                </p>
              </div>
              <div class="text-center">
              <a href="#" class="card-btn"><i class="fa-solid fa-cart-arrow-down"></i> View More</a>
            </div>
            </div>
          </div>
        </div>
          {{-- end card --}}
              {{-- start card --}}
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" height="200px" src="{{asset('assets/images/aa.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="row">
                <p class="pl-5">MMK 50000</p>
                <p class="ml-auto pr-4">
                  <i class="fa-solid fa-cart-arrow-down"></i>
                  <span class="badge badge-pill badge-dark">0</span>
                </p>
              </div>
              <div class="text-center">
              <a href="#" class="card-btn"><i class="fa-solid fa-cart-arrow-down"></i> View More</a>
            </div>
            </div>
          </div>
        </div>
          {{-- end card --}}
           {{-- start card --}}
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" height="200px" src="{{asset('assets/images/aa.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="row">
                <p class="pl-5">MMK 50000</p>
                <p class="ml-auto pr-4">
                  <i class="fa-solid fa-cart-arrow-down"></i>
                  <span class="badge badge-pill badge-dark">0</span>
                </p>
              </div>
              <div class="text-center">
              <a href="#" class="card-btn"><i class="fa-solid fa-cart-arrow-down"></i> View More</a>
            </div>
            </div>
          </div>
        </div>
          {{-- end card --}}
            {{-- start card --}}
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" height="200px" src="{{asset('assets/images/aa.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="row">
                <p class="pl-5">MMK 50000</p>
                <p class="ml-auto pr-4">
                  <i class="fa-solid fa-cart-arrow-down"></i>
                  <span class="badge badge-pill badge-dark">0</span>
                </p>
              </div>
              <div class="text-center">
              <a href="#" class="card-btn"><i class="fa-solid fa-cart-arrow-down"></i> View More</a>
            </div>
            </div>
          </div>
        </div>
          {{-- end card --}}
            {{-- start card --}}
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" height="200px" src="{{asset('assets/images/aa.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="row">
                <p class="pl-5">MMK 50000</p>
                <p class="ml-auto pr-4">
                  <i class="fa-solid fa-cart-arrow-down"></i>
                  <span class="badge badge-pill badge-dark">0</span>
                </p>
              </div>
              <div class="text-center">
              <a href="#" class="card-btn"><i class="fa-solid fa-cart-arrow-down"></i> View More</a>
            </div>
            </div>
          </div>
        </div>
          {{-- end card --}}
    </div>
  </section>
{{-- product --}}

{{-- footer --}}
  <section id="footer" class="pt-4">
    <div class="container">
      <h2 class="text-center mb-4">CONTACT US</h2>

        <div class="row">
          <div class="col-md-6">
            <h3 class="pb-3" id="contact">OUR CONTACT</h3>
            <i class="fa-solid fa-location-dot"></i>
            <span>Yangon,Myanmar</span><br><br>
            <i class="fa-solid fa-phone"></i>
            <span>+959770905623</span><br><br>
            <i class="fa-brands fa-viber"></i>
            <span>+959420287947</span><br><br>
            <i class="fa-solid fa-envelope"></i>
            <span>thuyatundev@gmail.com</span><br><br>
            <i class="fa-brands fa-facebook"></i>
            <span>Logic Programming</span><br><br>
            <i class="fa-brands fa-youtube"></i>
            <span>Logic Channel</span>
          </div>

          <div class="col-md-6 text-center">
           <h3 class="pb-3">OUR MAP</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7638.623825891261!2d96.17186662955667!3d16.810875411365576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecc9b38f3a17%3A0x13cfdd11f1d113cd!2z4YCQ4YCs4oCL4YCZ4YC94YCx4YCV4YCc4YCs4YCH4YCs!5e0!3m2!1smy!2smm!4v1659504965795!5m2!1smy!2smm" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
          </div>
        </div>
    </div>
    <div class="foot">
      <i class="fa-solid fa-copyright"></i><span class="foot-para">Design & Developement By Logic Programming</span>
    </div>
  </section>
{{-- footer --}}
  @endsection

  