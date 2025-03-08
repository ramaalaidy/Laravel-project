@extends('layout.master4')

@section('title', ' ContactUs')

@section('content')






  <!-- Banner Section -->
  <section class="contact-banner-area" id="contact">
    <div class="container h-100">
      <div class="contact-banner">
        <div class="text-center">
          <h1>Contact Us</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            {{-- <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol> --}}
          </nav>
        </div>
      </div>
    </div>
  </section>
  
  <br><br>

  <!-- form -->
 
	<section class="section-margin">
    <div class="container">
     
      <div class="row">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Aqaba/ordan</h3>
              <p>Santa monica bullevard</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">0780784562</a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">ahmadelian795@gmail.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-9">
          <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
              novalidate="novalidate">
              <div class="col-md-6">
                  <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                  </div>
                  <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                  </div>
                  <div class="form-group">
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <textarea class="form-control different-control" name="message" id="message" rows="5" placeholder="Enter Message"></textarea>
                  </div>
              </div>
              <div class="col-md-12 text-right">
                  <button type="submit" value="submit" class="button-contact"><span>Send Message</span></button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Form Section -->
  <section class="section-margin">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <!-- Contact Info -->
        </div>
        <div class="col-md-8 col-lg-9">
          <form class="row contact_form" action="{{ url('/contact') }}" method="post" id="contactForm" novalidate="novalidate">
            <!-- Form Fields -->
          </form>
        </div>
      </div>
    </div>
  
  </section>



@endsection


