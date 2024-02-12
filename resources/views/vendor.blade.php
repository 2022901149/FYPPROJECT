
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Registration</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css link -->
    <link rel="stylesheet" href="">
</head>
<body>
    
    <!-- header section starts -->

<header class="header">

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fa fa-heart-o"></i> planner </a>
      
    <nav class="navbar">
      <a data-aos="zoom-in-left" data-aos-delay="300" href="home">home</a>
      <a data-aos="zoom-in-left" data-aos-delay="450" href="budget">budget calculator</a>
      <a data-aos="zoom-in-left" data-aos-delay="600" href="vendor">vendor registration</a>
      <a data-aos="zoom-in-left" data-aos-delay="900" href="checklist">Wedding Checklist</a>
      <a data-aos="zoom-in-left" data-aos-delay="1200" href="logout">Logout</a>
    </nav>
    
    
    <div class="icons">
        <div data-aos="zoom-in-left" data-aos-delay="1350" class="fas fa-moon" id="theme-btn"></div>
        <div data-aos="zoom-in-left" data-aos-delay="1500" class="fas fa-bars" id="menu"></div>
    </div>

</header>


<!-- about -->
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<section class="about" id="about">
  <br>
    <h1 class="heading"> Vendor Registration</h1>
    <div class="">
      <h1 class="heading" style="font-size: 18px;"> Be part of unforgettable events! Vendor registration is just a click away.</h1>
        <div class="content" data-aos="" data-aos-delay="150">
          <div class="container">
            <div class="mt-5">
              <!-- Display success message -->
                @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
              @endif
          </div>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
            <div class="registration-form">
              <h2>Please provide your information below.</h2>
                <p>&nbsp;</p>
                <form action="{{ route('vendorRegister') }}" method="POST">
                  @csrf
                  <label for="vendorName">Vendor Name:</label>
                  <input type="text" id="vendorName" name="vendorName" placeholder="Enter your name" required>
              
                  <label for="businessName">Business Name:</label>
                  <input type="text" id="businessName" name="businessName" placeholder="e.g., Elegant Events Catering" required>
              
                  <label for="businessType">Business Type:</label>
                  <input type="text" id="businessType" name="businessType" placeholder="e.g., Catering, Photography, Venue Rental" required>
              
                  <label for="services">Services:</label>
                  <select id="services" name="services" required>
                      <option value="" disabled selected>Select your primary service</option>
                      <option value="catering">Catering</option>
                      <option value="photography">Photography</option>
                      <option value="floral">Floral and Decor</option>
                      <option value="entertainment">Entertainment</option>
                      <option value="venue">Venue Rental</option>
                      <option value="planning">Wedding Planning</option>
                      <option value="beauty">Bridal Makeup</option>
                      <option value="cake">Cake and Confectionery</option>
                      <!-- Add or modify options based on your needs -->
                  </select>
                  
                  <label for="serviceDescription">Service Description:</label>
                  <textarea id="serviceDescription" name="serviceDescription" placeholder="Provide a brief description of your services"></textarea>

                  <label for="price">Price:</label>
                  <input type="number" id="price" name="price" placeholder="Enter your pricing" required>
              
                  <label for="phone">Phone Number:</label>
                  <input type="tel" id="phone" name="phone" placeholder="Your contact number" required>
              
                  <label for="address">Business Address:</label>
                  <textarea id="address" name="address" placeholder="Your business address"></textarea>
              
                  <label for="additionalInfo">Additional Information:</label>
                  <textarea id="additionalInfo" name="additionalInfo" placeholder="Provide any additional details or special offers"></textarea>
              
                  <button type="submit">Register</button>
              </form>
              
            </div>
        </div>
    </div>
</section>

 <!-- end -->

 <!-- service -->

 <section class="services" id="services">

    <h1 class="heading"></h1>
 
    
    </div>
 
 </section>
 
<!-- service end-->

<!-- plan section starts  -->



    <!-- gallery=--->

    <section class="gallery" id="gallery">

        
    
    </section>

    <!-- end -->


<!-- footer -->

  <section class="footer">

    <div class="box-container">

      <div class="box" data-aos="fade-up">
        <h3> <i class="fas fa-user"></i> wedding planner </h3>
        <p>We are a team of experienced wedding planners dedicated to creating unforgettable weddings for our clients.</p>
      </div>

      <div class="box" data-aos="fade-up">
        <h3>Our Services</h3>
          <a href="#"><i class="fas fa-chevron-right"></i> Full Wedding Planning</a>
          <a href="#"><i class="fas fa-chevron-right"></i> Partial Wedding Planning</a>
          
      </div>

      <div class="box" data-aos="fade-up">
        <h3>Contact Us</h3>
        <a href="#"><i class="fas fa-phone"></i> 123456789</a>
        <a href="#"><i class="fas fa-envelope"></i> info@weddingplanner.com</a>
        <a href="#"><i class="fas fa-map"></i> </a>
      </div>

    
    </div>

    <div class="credit"></div>

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");

:root{
   --main-color:#EBE9BE;
   --primary-color: #A0AC60;
   --white:#fff;
   --bg: #4C5933;
   --light-black:#333;
   --box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   transition: .2s linear;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
   scroll-behavior: smooth;
   scroll-padding-top: 6rem;
}

html::-webkit-scrollbar{
   width: .8rem;
}

html::-webkit-scrollbar-track{
   background-color: var(--white);
}

html::-webkit-scrollbar-thumb{
   background-color: var(--primary-color);
   border-radius: 5rem;
}

body{
   background: var(--bg); 
}

body.active{
  --primary-color:#fff;
  --light-black:#eee;
  --white:#333;
  --bg:#222;
  --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.4);
}

section{
   padding: 3rem 9%;
}

.heading{
   text-align: center;
   color:var(--primary-color);
   text-transform: uppercase;
   margin-bottom: 4rem;
   font-size: 4rem;
   margin-top: 2rem;
}

.btn {
    display: inline-block;
    margin-top: 1rem;
    padding: .8rem 2.8rem;
    border-radius: 5rem;
    border-top-left-radius: 0;
    border: 0.2rem solid var(--main-color);
    cursor: pointer;
    color: var(--main-color);
    font-size: 1.7rem;
    overflow: hidden;
    z-index: 0;
    position: relative;
  }
  
  .btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: var(--main-color);
    z-index: -1;
    -webkit-transition: .2s linear;
    transition: .2s linear;
    clip-path: circle(0% at 0% 5%);
  }
  
  .btn:hover::before {
     clip-path: circle(100%);
  }
  
  .btn:hover {
    color: var(--white);
  }

/* header */

.header{
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 2rem 9%;
  background: var(--white);
  box-shadow: var(--box-shadow);
}

.header .logo{
   font-size: 2.2rem;
   font-weight: bolder;
   color:var(--primary-color);
}

.header .logo i{
   color:var(--main-color);
   padding-right: .5rem;
}

.header .navbar a{
   font-size: 1.7rem;
   margin-left: 2rem;
   color:var(--primary-color);
  padding-block: 1.6rem;
  position: relative; 
}

.header .navbar a:hover{
   color: var(--main-color);
}

.header .navbar a::before {
   content: "";
   position: absolute;
   height: .3rem;
   border-block: 1px solid var(--main-color);
   bottom: .5rem;
   width: 100%;
   transform: scaleX(0);
   transform-origin: center;
   transition: 0.5s ease;
 }

 .header .navbar a:is(:hover, :focus)::before { 
   transform: scaleX(1); 
 }

.header .icons div{
   height:4.5rem;
   width:4.5rem;
   line-height:4.5rem;
   font-size: 2rem;
   border-radius: .5rem;
   margin-left: .5rem;
   cursor: pointer;
   color:var(--primary-color);
   background: var(--main-color);
   text-align: center;
}
.header .icons div:hover{
   color: var(--main-color);
   background: var(--primary-color);
}

#menu{
   display: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-toggle {
  display: block;
  padding: 10px 15px;
  
  cursor: pointer;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #fff;
  min-width: 100%;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
  padding: 10px;
}

.dropdown-menu a {
  display: block;
  padding: 5px 10px;
  color: #333;
  text-decoration: none;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

/* home */

.home{
    min-height: 100vh;
    display: flex;
    align-items: center;
   justify-content: center;
    background:url(images/slide2.jpg) no-repeat;
    background-size: cover;
    background-position: center;
}

.home .content{
  text-align: center;
}

.home .content h3 {
    font-size: 6rem;
    text-transform: uppercase;
    font-weight: normal;
    color:#fff;
    padding-bottom: 3.5rem;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
}

 /* end */

 .about .row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 2rem;
  }
  
  .about .row .image {
    flex: 1 1 40rem;
  }
  
  .about .row .image img {
    width: 100%;
    border-radius: 30px;
  }
  
  .about .row .content {
    flex: 1 1 40rem;
  }
  
  .about .row .content h3 {
    font-size: 3.5rem;
    color: var(--main-color);
  }
  
  .about .row .content p {
    font-size: 1.6rem;
    color: var(--light-black);
    padding: 2rem 0;
    line-height: 2;
    color:white;
  }

  /*form*/
  .registration-form {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  max-width: 100%;
}

form {
  display: grid;
  gap: 15px;
  font-size: 16px;
}

label {
  font-weight: bold;
}

input,
select,
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button {
  background-color: #EBE9BE;
  color: black;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #A0AC60;
  color:#fff;
}

.success-message {
    border: 2px solid #198754;
    background-color: #198754;
    padding: 10px;
    border-radius: 5px;
    font-size: 18px;
    color:#fff;
}

/*end form*/

  /* end */






  /* end */


/* team */


 /* end */


/* footer */

.footer{
   background: var(--white);
 }

 .footer .box-container {
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
   gap: 1.5rem;
 }

 .footer .box-container .box {
  padding: 1rem 0;
}

 .footer .box-container .box h3 {
   font-size: 2.2rem;
   color: var(--primary-color);
   padding: 1rem 0;
 }
 
 .footer .box-container .box p {
   font-size: 1.5rem;
   color: var(--main-color);
   padding: 1rem 0;
   line-height: 2;
 }
 
 .footer .box-container .box a {
   display: block;
   font-size: 1.4rem;
   color: var(--main-color);
   padding: 1rem 0;
 }
 
 .footer .box-container .box a i {
   padding-right: .5rem;
   color: var(--primary-color);
 }
 
 .footer .box-container .box a:hover {
   color: var(--primary-color);
 }
 
 .footer .credit {
   margin-top: 2.5rem;
   padding: 1rem;
   padding-top: 2rem;
   border-top: 0.1rem solid #cecece;
   text-align: center;
   color: var(--main-color);
   font-size: 2rem;
 }
 
 .footer .credit span {
   color: var(--primary-color);
 }

/* end */

/* media query */

@media (max-width:991px){

   html{
      font-size: 55%;
   }
 
   .header{
     padding: 2rem 5rem;
   }

   section {
      padding: 3rem;
    }
 
}

@media (max-width: 768px) {

   #menu {
     display: inline-block;
   }
   .header .navbar {
     position: absolute;
     top: 99%;
     left: 0;
     right: 0;
     background: var(--bg);
     clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
   }
   
   .header .navbar.active {
     clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
   }

   .header .navbar a{
      display: flex;
        background:var(--white);
        border-radius: .5rem;
        padding:1.3rem;
        margin:1.3rem;
        font-size: 2rem;
        justify-content: center;
   }

   .home .content h3{
      font-size: 4rem;
  }

  .dropdown {
    display: block;
  }

  .dropdown-menu {
    display: none;
    position: static;
    background-color: transparent;
    box-shadow: none;
  }

  .dropdown:hover .dropdown-menu {
    display: block;
  }
}

@media (max-width:450px){

   html{
       font-size: 50%;
   }
}

 
    </style>
  </footer>
  
  



<!-- end -->



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
                let navbar = document.querySelector('.header .navbar');
            let menuBtn = document.querySelector('#menu');

            menuBtn.onclick = () =>{
            menuBtn.classList.toggle('fa-times');
            navbar.classList.toggle('active');
            };

            window.onscroll = () =>{
            menuBtn.classList.remove('fa-times');
            navbar.classList.remove('active');
            };

            let themeBtn = document.querySelector('#theme-btn');

            themeBtn.onclick = () =>{
                themeBtn.classList.toggle('fa-sun');

                if(themeBtn.classList.contains('fa-sun')){
                    document.body.classList.add('active');
                }else{
                    document.body.classList.remove('active');
                }

            };

            var swiper = new Swiper(".gallery-slider", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                rotate: 20,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
                },
                loop:true,
                autoplay:{
                delay: 3000,
                disableOnInteraction:false,
                }
            });

            var swiper = new Swiper(".review-slider", {
                loop:true,
                grabCursor: true,
                spaceBetween: 20,
                centeredSlides: true,
                autoplay: {
                    delay: 5500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
            });


            AOS.init({
            duration:800,
            delay:400
            });

</script>

</body>
</html>