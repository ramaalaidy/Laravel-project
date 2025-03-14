@extends('layout.homes')

@section('contant1')
<section class="home-banner-area" id="home">
  <div class="container h-100">
    <div class="home-banner">
      <div class="text-center">
        <h4>See What a Difference a stay makes</h4>
        <h1>Luxury <em>is</em> personal</h1>
        <a class="button home-banner-btn" href="#">Book Now</a>
      </div>
    </div>
  </div>
</section>


  @section('contant2')
  <form class="form-search form-search-position">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 gutters-19">
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Enter your keywords.." required>
          </div>
        </div>
        <div class="col-lg-6 gutters-19">
          <div class="row">
            <div class="col-sm">
              <div class="form-group">
                <div class="form-select-custom">
                  <select name="" id="">
                    <option value="" disabled selected>Arrival</option>
                    <option value="8 AM">8 AM</option>
                    <option value="12 PM">12 PM</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm gutters-19">
              <div class="form-group">
                <div class="form-select-custom">
                  <select name="" id="">
                    <option value="" disabled selected>Number of room</option>
                    <option value="8 AM">8 AM</option>
                    <option value="12 PM">12 PM</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
              <select name="" id="">
                <option value="" disabled selected>Departure</option>
                <option value="8 AM">8 AM</option>
                <option value="12 PM">12 PM</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
              <select name="" id="">
                <option value="" disabled selected>Adult</option>
                <option value="8 AM">8 AM</option>
                <option value="12 PM">12 PM</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm gutters-19">
          <div class="form-group">
            <div class="form-select-custom">
              <select name="" id="">
                <option value="" disabled selected>Child</option>
                <option value="8 AM">8 AM</option>
                <option value="12 PM">12 PM</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-4 gutters-19">
          <div class="form-group">
            <button class="button button-form" type="submit">Check Availability</button>
          </div>
        </div>
      </div>
    </div>
  </form>




  @section('contant3')
   
<section class="welcome">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mb-4 mb-lg-0">
            <div class="row no-gutters welcome-images">
              <div class="col-sm-7">
                <div class="card">
                  <img class="" src="img/home/welcomeBanner1.png" alt="Card image cap">
                </div>
              </div>
              <div class="col-sm-5">
                <div class="card">
                  <img class="" src="img/home/welcomeBanner2.png" alt="Card image cap">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="card">
                  <img class="" src="img/home/welcomeBanner3.png" alt="Card image cap">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="welcome-content">
              <h2 class="mb-4"><span class="d-block">Welcome</span> to our residence</h2>
              <p>Beginning blessed second a creepeth. Darkness wherein fish years good air whose after seed appear midst evenin, appear void give third bearing divide one so blessed moved firmament gathered </p>
              <p>Beginning blessed second a creepeth. Darkness wherein fish years good air whose after seed appear midst evenin, appear void give third bearing divide one so blessed</p>
              <a class="button button--active home-banner-btn mt-4" href="#">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>




  @section('contant4')
    
  <!-- ================ Explore section start ================= -->
  <section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-80px">
        <div class="section-intro__style">
          <img src="img/home/bed-icon.png" alt="">
        </div>
        <h2>Explore Our Rooms</h2>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="img/home/explore1.png" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">$150.00 <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="#">Classic Bed Room</a></h4>
              <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
              <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="img/home/explore2.png" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">$170.00 <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="#">Premium Room</a></h4>
              <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
              <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-explore">
            <div class="card-explore__img">
              <img class="card-img" src="img/home/explore3.png" alt="">
            </div>
            <div class="card-body">
              <h3 class="card-explore__price">$190.00 <sub>/ Per Night</sub></h3>
              <h4 class="card-explore__title"><a href="#">Family Room</a></h4>
              <p>Beginning fourth dominion creeping god was. Beginning, which fly yieldi dry beast moved blessed </p>
              <a class="card-explore__link" href="#">Book Now <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  
  @section('contant5')

  <section class="video-area">
    <div class="container">
      <div class="row justify-content-center align-items-center flex-column text-center">
        <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=vParh5wE-tM">
          <span></span>
        </a>
        <h3>Seaplace</h3>
        <p>View four has said does men saw find dear shy talent</p>
      </div>
    </div>  
  </section>


   
  @section('contant6')
    <!-- ================ special section start ================= -->
    <section class="section-padding bg-porcelain">
      <div class="container">
        <div class="section-intro text-center pb-80px">
          <div class="section-intro__style">
            <img src="img/home/bed-icon.png" alt="">
          </div>
          <h2>Special Facilities</h2>
        </div>
        <div class="special-img mb-30px">
          <img class="img-fluid" src="img/home/special.png" alt="">
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-special">
              <div class="media align-items-center mb-1">
                <span class="card-special__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                  <h4 class="card-special__title">Conference Room</h4>
                </div>
              </div>
              <div class="card-body">
                <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-special">
              <div class="media align-items-center mb-1">
                <span class="card-special__icon"><i class="ti-bell"></i></span>
                <div class="media-body">
                  <h4 class="card-special__title">Swimming Pool</h4>
                </div>
              </div>
              <div class="card-body">
                <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-special">
              <div class="media align-items-center mb-1">
                <span class="card-special__icon"><i class="ti-car"></i></span>
                <div class="media-body">
                  <h4 class="card-special__title">Sports Culb</h4>
                </div>
              </div>
              <div class="card-body">
                <p>Built purse maids cease her ham new seven among and. Pulled coming wooded tended it answer remain</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



  
  @section('contant7')

    
 <!-- ================ carousel section start ================= -->
 <section class="section-margin">
  <div class="container">
    <div class="section-intro text-center pb-20px">
      <div class="section-intro__style">
        <img src="img/home/bed-icon.png" alt="">
      </div>
      <h2>Our Guest Love Us</h2>
    </div>
    <div class="owl-carousel owl-theme testi-carousel">
      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial1.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>Robert Mack</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial2.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>David Alone</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial3.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>Adam Pallin</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial1.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>Robert Mack</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial2.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>David Alone</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
        <div class="media">
          <div class="testi-carousel__img">
            <img src="img/home/testimonial3.png" alt="">
          </div>
          <div class="media-body">
            <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
            <div class="testi-carousel__intro">
              <h3>Adam Pallin</h3>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
      </div>

      <div class="testi-carousel__item">
          <div class="media">
            <div class="testi-carousel__img">
              <img src="img/home/testimonial1.png" alt="">
            </div>
            <div class="media-body">
              <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
              <div class="testi-carousel__intro">
                <h3>Robert Mack</h3>
                <p>CEO & Founder</p>
              </div>
            </div>
          </div>
        </div>

        <div class="testi-carousel__item">
          <div class="media">
            <div class="testi-carousel__img">
              <img src="img/home/testimonial2.png" alt="">
            </div>
            <div class="media-body">
              <p>Incidunt deleniti blanditiis quas aperiam recusandae consillo ullam quibusdam cum libero illo repell endus!</p>
              <div class="testi-carousel__intro">
                <h3>David Alone</h3>
                <p>CEO & Founder</p>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
  
  
  @section('contant8') 
  <section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-80px">
        <div class="section-intro__style">
          <img src="img/home/bed-icon.png" alt="">
        </div>
        <h2>News & Events</h2>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
          <div class="card card-news">
            <div class="card-news__img">
              <img class="card-img" src="img/home/explore1.png" alt="">
            </div>
            <div class="card-body">
              <h4 class="card-news__title"><a href="#">Hotel companies tipped the scales</a></h4>
              <ul class="card-news__info">
                <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov, 2018</a></li>
                <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> 03 Comments</a></li>
              </ul>
              <p>Not thoughts all exercise blessing Indulgence way everything joy alteration boisterous the attachment party we years to order</p>
              <a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
          <div class="card card-news">
            <div class="card-news__img">
              <img class="card-img" src="img/home/explore2.png" alt="">
            </div>
            <div class="card-body">
              <h4 class="card-news__title"><a href="#">Try your hand inaugural industry crossword</a></h4>
              <ul class="card-news__info">
                <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov, 2018</a></li>
                <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> 03 Comments</a></li>
              </ul>
              <p>Not thoughts all exercise blessing Indulgence way everything joy alteration boisterous the attachment party we years to order</p>
              <a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
          <div class="card card-news">
            <div class="card-news__img">
              <img class="card-img" src="img/home/explore3.png" alt="">
            </div>
            <div class="card-body">
              <h4 class="card-news__title"><a href="#">Hoteliers resolve to invest in guests</a></h4>
              <ul class="card-news__info">
                <li><a href="#"><span class="news-icon"><i class="ti-notepad"></i></span> 20th Nov, 2018</a></li>
                <li><a href="#"><span class="news-icon"><i class="ti-comment"></i></span> 03 Comments</a></li>
              </ul>
              <p>Not thoughts all exercise blessing Indulgence way everything joy alteration boisterous the attachment party we years to order</p>
              <a class="card-news__link" href="#">Read More <i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>










