
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- header section starts -->

<header class="header">

    <a data-aos="zoom-in-left" data-aos-delay="150" href="#" class="logo"> <i class="fa fa-heart-o"></i> planner </a>

    <nav class="navbar">
       <a data-aos="zoom-in-left" data-aos-delay="300" href="#home">home</a>
       <a data-aos="zoom-in-left" data-aos-delay="450" href="#about">about</a>
       <a data-aos="zoom-in-left" data-aos-delay="600" href="#services">service</a>
       <a data-aos="zoom-in-left" data-aos-delay="900" href="#gallery">gallery</a>
       <a data-aos="zoom-in-left" data-aos-delay="1200" href="#contact">contact</a>
       <a data-aos="zoom-in-left" data-aos-delay="1205" href="login">Login</a>

    </nav>
    
    <div class="icons">
        <div data-aos="zoom-in-left" data-aos-delay="1350" class="fas fa-moon" id="theme-btn"></div>
        <div data-aos="zoom-in-left" data-aos-delay="1500" class="fas fa-bars" id="menu"></div>
    </div>

</header>

<!-- home -->

<section class="home" id="home">

    <div class="content" data-aos="fade-down">
        <h3>your dream wedding <br> as simple as pie</h3>
        <a href="#about" class="btn">Read More</a>
    </div>
 
 </section>

<!-- end -->

<!-- about -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us</h1>
 
    <div class="row">
        
        <div class="content" data-aos="fade-up" data-aos-delay="150">
            <h3>team of passionate people</h3>
            <p>Welcome to <i>Two Rings Wedding Planner</i>, your digital companion in the journey of creating the perfect wedding experience. Founded with a passion for simplifying wedding planning, our online platform is designed to offer personalized recommendations based on your budget.</p>
            
            <a href="about" class="btn">read more</a>
        </div>
        <div class="image" data-aos="fade-down" data-aos-delay="300">
            <img src="images/slide1.jpg" alt="">
        </div>
    </div>
 </section>

 <!-- end -->

 <!-- service -->

 <section class="services" id="services">

    <h1 class="heading">our services</h1>
 
    <div class="box-container">
 
        <div class="box" data-aos="zoom-in" data-aos-delay="150">
          <img src="images/budget.png" alt="">
          <h3>Budget-Friendly Recommendations</h3>
          <p>Input your budget, and our system will curate personalized wedding suggestions that align with your financial plan.</p>
        </div>
 
       <div class="box" data-aos="zoom-in" data-aos-delay="300">
          <img src="images/tick.png" alt="">
          <h3>Task Management</h3>
          <p>Stay organized with our intuitive task management feature. Track and manage every aspect of your wedding checklist efficiently</p>
       </div>
 
       <div class="box" data-aos="zoom-in" data-aos-delay="450">
          <img src="images/inspiration.png" alt="">
          <h3>Design Inspirations</h3>
          <p>Explore our gallery for design inspirations.</p>
       </div>
 
    </div>
 
 </section>
 
<!-- service end-->

<!-- plan section starts  -->



    <!-- gallery=--->

    <section class="gallery" id="gallery">

        <h1 class="heading"> <span>OUR</span> gallery</h1>
    
        <div class="swiper gallery-slider" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/gallery-1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/gallery-2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/gallery-3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/gallery-4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/gallery-5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/gallery-6.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/gallery-7.jpg" alt=""></div>
            </div>
        </div>
    
    </section>

    <!-- end -->

    <!-- review section starts  -->




<!-- end -->


 <!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="" data-aos="zoom">

        <div class="inputBox">
            <input type="text" placeholder="name" data-aos="fade-up">
            <input type="email" placeholder="email" data-aos="fade-up">
        </div>

        <div class="inputBox">
            <input type="number" placeholder="number" data-aos="fade-up">
            <input type="date" data-aos="fade-up">
        </div>


        <textarea name="" placeholder="your message" id="" cols="30" rows="10" data-aos="fade-up"></textarea>
        
        <a href="#" class="btn">send message</a>

    </form>

</section>

<!-- contact section ends -->

<!-- footer -->

  <section class="footer">

    <div class="box-container">

      <div class="box" data-aos="fade-up">
        <h3> <i class="fas fa-user"></i> wedding planner </h3>
        <p>We are a team of experienced wedding planners dedicated to creating unforgettable weddings for our clients.</p>
      </div>

      <div class="box" data-aos="fade-up">
        <h3>Our Services</h3>
          <a href="login"><i class="fas fa-chevron-right"></i> Wedding Planning</a>
          <a href="login"><i class="fas fa-chevron-right"></i> Partial Wedding Planning</a>
          
      </div>

      <div class="box" data-aos="fade-up">
        <h3>Contact Us</h3>
        <a href="#"><i class="fas fa-phone"></i> 012-3456789</a>
        <a href="#"><i class="fas fa-envelope"></i> info@weddingplanner.com</a>
        <a href="#"><i class="fas fa-map"></i>Shah Alam, Selangor.</a>
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

/* home */

.home{
    min-height: 100vh;
    display: flex;
    align-items: center;
   justify-content: center;
    background:url(images/wallpaper.jpg) no-repeat;
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
    border-radius: 25px;
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

  /* end */

  /* service */
 
 .services .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:2rem;
 }
 
 .services .box-container .box{
    text-align: center;
    padding: 4rem;
    background-color: var(--white);
    box-shadow: var(--box-shadow);
    border-radius: 5rem;
 }
 
 .services .box-container .box img{
    margin: 1rem 0;
    height: 15rem;
    transition: 500ms ease;
 }

 .services .box-container .box:hover img{
    transform: scale(-1) rotate(180deg);
 }
 
 .services .box-container .box h3{
    font-size: 2rem;
    padding:1rem 0;
    color:var(--primary-color);
 }
 
 .services .box-container .box p{
    font-size: 1.5rem;
    color:var(--light-black);
    line-height: 2;
 }

 /* end */

/* pricing */

 .plan .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 6rem;
}

.plan .box-container .box{
    background:var(--white);
    width:30rem;
    height: 38rem;
    text-align: center;
    box-shadow: var(--box-shadow);
    position: relative;
}

.plan .box-container .box:hover{
    transform: scale(1.05);
}

.plan .box-container .box .title{
    font-size: 2.5rem;
    background:var(--main-color);
    clip-path: polygon(0 0, 100% 0, 100% 70%, 50% 100%, 0 70%);
    color: var(--white);
    padding:1rem 0;
}

.plan .box-container .box .price{
    font-size: 4rem;
    color:var(--light-black);
    padding-top:1rem;
}

.plan .box-container .box .price span{
    font-size: 2.5rem;
}

.plan .box-container .box .month{
    font-size: 1.4rem;
    color:var(--light-black);
}

.plan .box-container .box ul{
    margin:2rem 6rem;
    list-style: none;
}

.plan .box-container .box ul li{
    text-align: left;
    padding:.5rem;
    font-size: 1.5rem;
    color:var(--light-black);
}

.plan .box-container .box ul li i{
    color: var(--white);
    padding: .5rem;
    margin-right: 1rem;
    background: var(--main-color);
    border-radius: 50%;
}

.plan .box-container .box ul li i.fa-times{
   padding: .5rem .7rem;
}

.plan .box-container .box .btn {
    position: absolute;
    bottom: -2rem;
    right: 2rem;
    background: var(--white);
  }

  /* end */

  /* gallery */

  .gallery .gallery-slider .swiper-slide{
    overflow: hidden;
    border-radius: .5rem;
    height: 50rem;
    width:35rem;
}

.gallery .gallery-slider .swiper-slide img{
    height:100%;
    width:100%;
    object-fit: cover;
}

  /* end */

  /* review */

.review .review-slider{
   box-shadow: var(--box-shadow);
}

.review .review-slider .slide{
   background: var(--white);
    border-radius: .5rem;
    text-align: center;
    padding: 3rem;
}

.review .review-slider .slide img{
    height: 10rem;
    width: 10rem;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: .5rem;
}

.review .review-slider .slide h3{
    font-size: 2.5rem;
    color:var(--primary-color);
}

.review .review-slider .slide p{
    font-size: 1.6rem;
    color:var(--primary-color);
    line-height: 1.7;
    padding: 1rem 0;
}

.review .review-slider .slide .stars{
    padding: 1rem 0;
    padding-bottom: 1.5rem;
}

.review .review-slider .slide .stars i{
    font-size: 2rem;
    color:var(--main-color);
}

.swiper-pagination-bullet-active{
    background: var(--main-color);
}

/* end */

/* team */

.team .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
 }
 
 .team .box-container .box{
    border-radius: .5rem;
    background: var(--white);
    padding:2rem;
    text-align: center;
    box-shadow: var(--box-shadow);
 }
 
 .team .box-container .box img{
    border-radius: 50%;
    height: 15rem;
    width: 15rem;
    object-fit: cover;
    margin-bottom: 1rem;
 }
 
 .team .box-container .box h3{
    font-size: 2rem;
    color:var(--primary-color);
 }
 
 .team .box-container .box p{
    font-size: 1.5rem;
    color:var(--main-color);
 }
 
 .team .box-container .box .share{
    margin-top: .5rem;
 }
 
 .team .box-container .box .share a{
    height: 4rem;
    width: 4rem;
    line-height: 4rem;
    font-size: 1.7rem;
    background: var(--primary-color);
    border-radius: .5rem;
    color:var(--white);
    margin: .5rem 0;
 }
 
 .team .box-container .box .share a:hover{
    background: var(--main-color);
 }

 /* end */

 .contact form{
   text-align: center;
}

 .contact form .inputBox{
   display: flex;
   flex-wrap: wrap;
   justify-content: space-between;
}

.contact form textarea,
.contact form .inputBox input,
.contact form .inputBox select{
   width: 100%;
   padding:1rem;
   font-size: 1.6rem;
   color: var(--primary-color);
   margin:.7rem 0;
   background: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
}

.contact form textarea{
   height: 20rem;
   resize: none;
}

.contact form .inputBox input,
.contact form .inputBox select{
   width: 49%;
}


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