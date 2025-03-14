<!DOCTYPE html>
<html lang="en">

@include('include.top1')



<body>
	<!-- ================ header section start ================= -->	
	<header class="header_area">
    <div class="header-top">
      <div class="container">
        <div class="d-flex align-items-center">
          <div id="logo">
            <a href="index.html"><img src="./img/home/wadi-ram-camp.jpg" alt="" title="" /></a>
          </div>
          <div class="ml-auto d-none d-md-block d-md-flex">
            <div class="media header-top-info">
              <span class="header-top-info__icon"><i class="fas fa-phone-volume"></i></span>
              <div class="media-body">
                <p>Have any question?</p>
                <p><a href="tel:+12 365 5233">+12 365 5233</a></p>
              </div>
            </div>
            <div class="media header-top-info">
              <span class="header-top-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
                <p>Have any question?</p>
                <p> <a href="">wade-ram@gmail.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="main_menu">
     
    @include('include.navbar1')
        
    </div>
	</header>
	

@yield('content')



  <!-- ================ start footer Area ================= -->
 @include('include.footer1')
  <!-- ================ End footer Area ================= -->


@include('include.bottom1')


</body>
</html>