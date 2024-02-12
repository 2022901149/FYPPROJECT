
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Calculator</title>
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
      <a data-aos="zoom-in-left" data-aos-delay="450" href="budget">Budget Calculator</a>
      <a data-aos="zoom-in-left" data-aos-delay="600" href="vendor">Vendor Registration</a>
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

<section class="about" id="about">
  <br>
  <br>
  <br>
  <h1 class="heading"> Budget Calculator</h1>
  
  
  <div class="budget-allocation-container">
    <h1 style="font-size:19px;">Please input your budget</h1>
    <br>
    <form id="budgetForm">
      @csrf
      <div class="input-container">
          <label for="totalBudget">Total Budget (RM):</label>
          <input type="number" id="totalBudget" placeholder="Enter total budget">
          </div>
          <div class="input-container">
          <label for="numGuests">Number of Guests:</label>
          <input type="number" id="numGuests" placeholder="Enter number of guests">
      </div>
        <label>Services:</label>
        <div class="service-checkbox">
            <input type="checkbox" id="venueCheckbox">
            <label for="venueCheckbox">Venue</label>
        </div>

        <div class="service-checkbox">
            <input type="checkbox" id="cateringCheckbox">
            <label for="cateringCheckbox">Catering</label>
        </div>

        <div class="service-checkbox">
            <input type="checkbox" id="photographyCheckbox">
            <label for="photographyCheckbox">Photography</label>
        </div>

        <div class="service-checkbox">
            <input type="checkbox" id="brideAndGroomAttireCheckbox">
            <label for="brideAndGroomAttireCheckbox">Bride and Groom Attire</label>
        </div>

        <div class="service-checkbox">
            <input type="checkbox" id="bridalMakeupCheckbox">
            <label for="bridalMakeupCheckbox">Bridal Makeup</label>
        </div>

        <div class="service-checkbox">
            <input type="checkbox" id="entertainmentCheckbox">
            <label for="entertainmentCheckbox">Music/Entertainment</label>
        </div>

        <div class="service-checkbox">
            <input type="checkbox" id="flowersCheckbox">
            <label for="flowersCheckbox">Flowers</label>
        </div>

        <div class="service-checkbox">
            <input type="checkbox" id="doorGiftsCheckbox">
            <label for="doorGiftsCheckbox">Door Gifts</label>
        </div>

        <div class="service-checkbox">
            <input type="checkbox" id="cakeCheckbox">
            <label for="cakeCheckbox">Cake</label>
        </div>

        <div class="service-checkbox">
            <input type="checkbox" id="decorCheckbox">
            <label for="decorCheckbox">Décor</label>
        </div>

        <button type="button" style="border-radius:15px;" onclick="allocateBudget()">Allocate Budget</button>
    </form>

    <div class="budget-allocations" id="allocations"></div>
      <br>
      
      <h1 class="heading">Recommendations</h1>
      <div id="recommendations">
      <!-- Recommendations will be displayed here -->
      <div class="vendor-cards">
          <!-- Vendor recommendation cards will be added dynamically here -->
      </div>
  </div>
  

</section>

 <!-- end -->

 <!-- service -->

 <section class="services" id="services">

   
 
 </section>
 
<!-- service end-->

<!-- plan section starts  -->



    <!-- gallery=--->

    <section class="gallery" id="gallery">

        
    
    </section>

    <!-- end -->

    <!-- review section starts  -->




<!-- end -->


 <!-- contact section starts  -->



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

  .about .content form {
      background: var(--white);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      font-size: 1.6rem;
      max-width: 300px;
      margin: 0 auto;
      
      background-color: #fff;
  }

  .about .content form label {
      display: block;
      margin-bottom: 8px;
      color: var(--main-color);
  }

  .about .content form input {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
  }

  .about .content form .services-checkbox {
      margin-bottom: 16px;
  }

  .about .content form .services-checkbox label {
      
      margin-bottom: 8px;
      color: var(--main-color);
      display: flex;
      align-items: center;
  }

  .about .content form .services-checkbox input {
      margin-right: 8px;
  }

  .about .content form button {
      background-color: var(--primary-color);
      color: var(--white);
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
  }

  .about .content form button:hover {
      background-color: #45a049;
  }

  .about .content #results {
      margin-top: 20px;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      background-color: #fff;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
  }
  
  /* end */

  /*budget*/

  .budget-allocation-container h1 {
        color: #EBE9BE; 
        font-size: 15px;
    }

    .budget-allocations {
    border: 2px solid white;
    background-color: #fff;
    padding: 10px;
    margin-top: 20px;
    font-size:15px;
}

  .container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    
  }

form {
    display: flex;
    flex-direction: column;

    background-color: #fff;
    padding: 10px;
    border-radius: 15px;  
    
}

.input-container {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.input-container label {
    flex: 0 0 30%; /* Each label takes up 30% of the available space */
}

.input-container input {
    flex: 0 0 70%; /* Each input takes up 70% of the available space */
    padding: 8px;
    box-sizing: border-box; /* Ensure the input fields have the correct box model */
    border: 1px solid #ccc; /* Add border */
    border-radius: 15px;
}

label {
    margin-bottom: 10px; /* Adjust the margin bottom as needed */
    font-size: 16px;
}

input {
    margin-bottom: 10px;
    padding: 8px;
}

button {
    padding: 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

#allocations, #recommendations {
    margin-top: 20px;
}

.service-checkbox {
  display: grid; /* Use grid */
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Create grid with columns of minimum 200px width */
    grid-gap: 10px; /* Add some gap between grid items */
  
  
}

/* Adjust checkbox styling */
.service-checkbox input[type="checkbox"] {
    margin-right: 5px; /* Add some spacing between checkbox and label */
}
/*end budget*/

/*vendor card*/
.vendor-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.vendor-card {
    border: 1px solid #A0AC60;
    background: #A0AC60;
    padding: 10px;
    border-radius: 8px;
    width: 500px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
}

.vendor-card:hover {
    transform: scale(1.05);
}

.vendor-info h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.vendor-info p {
    font-size: 14px;
    margin: 5px 0;
    color:white;
}

.service-container {
    margin-bottom: 20px; /* Adjust the margin as needed */
}

    .no-vendors-card {
        background-color:#dc143c;
        border: #dc143c;
        color: white;
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .no-vendors-message {
        margin: 0;
    }

/*end*/


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


// Start budget allocation
function allocateBudget() {
    // Clear previous allocations
    document.getElementById('allocations').innerHTML = '';
    document.getElementById('recommendations').innerHTML = '';

    // Get total budget and number of guests
    var totalBudgetInput = document.getElementById('totalBudget');
    var numGuestsInput = document.getElementById('numGuests');

    var totalBudget = parseFloat(totalBudgetInput.value);
    var numGuests = parseInt(numGuestsInput.value);

    if (isNaN(totalBudget) || isNaN(numGuests) || totalBudget <= 0 || numGuests <= 0) {
        alert('Please enter valid values for Total Budget and Number of Guests.');
        return;
    }

    // Define services and their corresponding percentages
    var services = {
        venue: 0.40,
        catering: 0.31,
        photography: 0.15,
        brideAndGroomAttire: 0.07,
        bridalMakeup: 0.02,
        entertainment: 0.08,
        flowers: 0.05,
        doorGifts: 0.02,
        cake: 0.02,
        decor: 0.05
    };

    // Set the average cost per person for catering
    var averageCateringCostPerPerson = 30; // You can adjust this based on your specific case

    // Initialize allocations object to store budget for selected services
    var allocations = {};

    // Loop through services to check if they are selected and calculate allocations accordingly
    for (var service in services) {
        var checkboxId = service + 'Checkbox';
        var checkbox = document.getElementById(checkboxId);

        if (checkbox && checkbox.checked) {
            if (service === 'catering') {
                allocations[service] = numGuests * averageCateringCostPerPerson;
            } else {
                allocations[service] = totalBudget * services[service];
            }
        }
    }

    // Display the allocated budget for selected services
    var allocationsElement = document.getElementById('allocations');
    allocationsElement.innerHTML = '<h2>Budget Allocations</h2><ul>';
    for (var service in allocations) {
        allocationsElement.innerHTML += `<li>${service.charAt(0).toUpperCase() + service.slice(1)}: RM ${allocations[service].toFixed(2)}</li>`;
    }
    allocationsElement.innerHTML += '</ul>';

    // Call a function to fetch and display vendor recommendations based on allocated budgets
    displayVendorRecommendations(allocations);
}

// Update the endpoint to point to your Laravel route
var endpoint = 'http://127.0.0.1:8000/vendors';

function displayVendorRecommendations(allocatedBudgets) {
    fetch(endpoint)
        .then(response => response.json())
        .then(vendors => {
            var vendorsAvailable = false; // Flag to track if any vendors are available

            for (var service in allocatedBudgets) {
                if (allocatedBudgets[service] > 0) {
                    var filteredVendors = vendors.filter(vendor => vendor.services === service && vendor.price <= allocatedBudgets[service]);

                    if (filteredVendors.length > 0) {
                        vendorsAvailable = true; // Set flag to true if vendors are available

                        var recommendationsElement = document.createElement('div');
                        recommendationsElement.innerHTML = `<h2 style="font-size: 24px;color:#EBE9BE; padding:10px;">${service.charAt(0).toUpperCase() + service.slice(1)}</h2>`;
                        recommendationsElement.classList.add('vendor-section');

                        var serviceContainer = document.createElement('div');
                        serviceContainer.classList.add('service-container');

                        for (var i = 0; i < filteredVendors.length; i++) {
                            var vendorCard = document.createElement('div');
                            vendorCard.classList.add('vendor-card');

                            vendorCard.innerHTML = `
                                <div class="vendor-info">
                                    <h3>${filteredVendors[i].businessName}</h3>
                                    <p>Price (RM): ${filteredVendors[i].price}</p>
                                    <p>Service Description: ${filteredVendors[i].serviceDescription}</p>
                                    <p>Phone: ${filteredVendors[i].phone}</p>
                                    <p>Address: ${filteredVendors[i].address}</p>
                                    <p>Additional Info: ${filteredVendors[i].additionalInfo}</p>
                                </div>
                            `;

                            serviceContainer.appendChild(vendorCard);
                        }

                        recommendationsElement.appendChild(serviceContainer);
                        document.getElementById('recommendations').appendChild(recommendationsElement);
                    } else {
                        // If no vendors available for the service, display "No Vendors Available" in a red card
                        var noVendorsCard = document.createElement('div');
                        noVendorsCard.classList.add('vendor-card', 'no-vendors-card');

                        noVendorsCard.innerHTML = `
                            <div class="vendor-info">
                                <h3>No Vendors Available For ${service.charAt(0).toUpperCase() + service.slice(1)}</h3>
                            </div>
                        `;

                        document.getElementById('recommendations').appendChild(noVendorsCard);
                    }
                }
            }

            // Append "No Vendors Available" message only if no vendors are available for any service
            if (!vendorsAvailable) {
                var noVendorsCard = document.createElement('div');
                noVendorsCard.classList.add('vendor-card', 'no-vendors-card');

                noVendorsCard.innerHTML = `
                    <div class="vendor-info">
                        <h3>No Vendors Available</h3>
                    </div>
                `;

                document.getElementById('recommendations').appendChild(noVendorsCard);
            }
        })
        .catch(error => {
            console.error('Error fetching vendor data:', error);
            var recommendationsElement = document.getElementById('recommendations');
            recommendationsElement.innerHTML = '<p>Error fetching vendor data</p>';
        });
}



</script>


</body>
</html>