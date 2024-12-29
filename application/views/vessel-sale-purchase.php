<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/46863e3ec7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/styles/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Document</title> -->


    <link rel="stylesheet" href="../assets/styles/style.css">

    <style>
        .lists li{
            background-color: #EFEFEF;
            margin: 2px 0px ;
            height: auto;
            border: none;
        }
        .list-text{
            text-decoration: none;
            color: black;
            display: flex; 
            justify-content: space-between; /* Pushes the arrow to the right */
            align-items: center; /* Aligns text and arrow vertically */
            padding: 10px 7px; /* Adds some padding for better spacing */
            font-size: 16px;
            font-weight: 500;
            transition: 0.3s ease-in-out;
        }
        .link-list li:hover{
            transition: 0.3s ease-in-out;
        }
        .list-text:hover{
            color: white;
        }
        .link-list li:hover{
            background-color: #1FB5C7;
        }
        .arrow {
        margin-left: auto; /* Ensures the arrow stays on the right */
        font-weight: bold; /* Makes the arrow stand out */
        }
        @media(max-width:768px)
        {
            .offshore-list{
                width: 100%;
            }
            .offshore-vessel{
                width: 100%;
            }
        }
        @media(max-width:576px)
        {
            .offshore-list{
                width: 100%;
            }
            .offshore-vessel{
                width: 100%;
            }
        }
        .offshore-vessel img{
            width: 100%;
            height: auto;
        }
        .offshore-list{
            width: 40%;
        }
        .offshore-vessel{
            width: 60%;
        }
        .offshore-vessel{
            text-align: justify;
        }
        .ship-icon{
            line-height: 30px;
            font-weight:600;
            font-size: 20px;
        }
        .ship-icon i{
            color: #0052A9;
            font-weight: bold;
        }
        .user-list ul{
            margin: 0px 30px;
            li{
                font-weight: 600;
                font-size: 20px;
            }
        }
        .user-list li{
            border: none;
        }
        .user-list span{
            color: #0052A9;
            font-weight: 600;
        }
        .animate-card {
    opacity: 0;
    transform: translateX(100px); /* Slide in from the right by default */
    transition: all 0.8s ease-in-out;
}

.animate-card[data-direction="left"] {
    transform: translateX(-100px); /* Slide in from the left */
}

/* Active state (visible and on-screen) */
.animate-card.active {
    opacity: 1;
    transform: translateX(0); /* Reset transform */
}
    </style>

   <div class="container-fluid">
    <div class="row">
        <div class="row mt-5 px-5">
            <div class="col-12 col-md-6 offshore-list animate-card" data-direction="left">
                <ul style="list-style-type: none;" class="lists link-list">
                    <li><a  class="list-text" href="<?php echo base_url('ghm/offshore_vessel');?>">OFFSHORE VESSEL CHARTERING SERVICES<span class="arrow">>></span></a></li>
                    <li><a  class="list-text" href="<?php echo base_url('ghm/tanker_chartering');?>">TANKER CHARTERING & BROKING<span class="arrow">>></span></a></li>
                    <li><a  class="list-text" href="<?php echo base_url('ghm/dry_cargo');?>">DRY CARGO CHARTERING & BROKING<span class="arrow">>></span></a></li>
                    <li><a style="line-height: 18px;" class="list-text" href="<?php echo base_url('ghm/marine_survey');?>">MARINE SURVEY & TECHNICAL CONSULTANCY SERVICES<span class="arrow">>></span></a></li>
                    <li><a  class="list-text" href="<?php echo base_url('ghm/vessel_technical');?>">VESSEL TECHNICAL MANAGEMENT<span class="arrow">>></span></a></li>
                    <li style="background-color: #1FB5C7;"><a style="color:white" class="list-text" href="<?php echo base_url('ghm/vessel_sale_purchase');?>">VESSEL S&P AND DEMOLITION<span class="arrow">>></span></a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0 offshore-vessel animate-card" data-direction="right">
                <div class="offshore-vessel-section">
                    <!-- <div> -->
                        <img src="../assets/images/6.jpg" alt="">
                    <!-- </div> -->
                    <div class="offshore-vessel-text">
                        <h2>VESSEL S&P AND DEMOLITION SERVICES</h2>
                            <div class="line"></div>
                            <p>Our team represents cash buyers and ship breaking yards in key locations such as Alang, Chittagong, Gadani, UAE and Turkey. We offer one stop services with best market rates. Our team is able to buy vessel on "As is where is" as well as delivery to scrap yard basis. We can offer towage services for vessels going to demolition on market competitive rates with good and well maintained towing tugs. Our team is expert in arranging demolition of all types of vessels (main fleet and offshore vessels). irrespective of their type and sizes. We have built an international network enabling us to provide our customers the best possible services and deals. With support from our clients, we aim to become a reliable service provider in this segment.</p>
                            <!-- <ul style="list-style-type: none;">
                                <div class="ship-icon"><span><i class="fa-solid fa-ship"></i></span> <span>Crew boats and Utility vessels</span></div>
                                <div class="ship-icon"><span><i class="fa-solid fa-ship"></i></span> <span>Offshore support vessels</span></div>
                                <div class="ship-icon"><span><i class="fa-solid fa-ship"></i></span> <span>Tug & Barges</span></div>
                                <div class="ship-icon"><span><i class="fa-solid fa-ship"></i></span> <span>Multicats</span></div>
                                <div class="ship-icon"><span><i class="fa-solid fa-ship"></i></span> <span>Anchor handling Supply vessels</span></div>
                                <div class="ship-icon"><span><i class="fa-solid fa-ship"></i></span> <span>Diving support Vessels</span></div>
                                <div class="ship-icon"><span><i class="fa-solid fa-ship"></i></span> <span>Platform Supply Vessels</span></div>
                                <div class="ship-icon"><span><i class="fa-solid fa-ship"></i></span> <span>Accommodation vessels</span></div>
                                <div class="ship-icon"><span><i class="fa-solid fa-ship"></i></span> <span>Other types of offshore vessel</span></div>
                            </ul> -->
                            <p class="ship-icon">Purchasing demolition vessels all over the world</p>
                            <p>We purchase demolition vessels at competitive rates from our customers, based all over the world. We provide tailor made services catering to all the needs of a demolition project including towage arrangements, permissions / approvals at ship breaking ports. We are able to arrange green recycling for our clients complying with Hong Kong International Convention for the Safe and Environmentally Sound Recycling of Ships, 2009 and European convention</p>
                            <p>Some of our key clients are as follows:</p>
                            <p class="ship-icon">Assets Owners:</p>
                            <!-- <div class="user-list d-flex mb-5"> -->
                                <ul style="list-style-type: none;" class="user-list">
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Triton Trading GmbH, Switzerland</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Japan Pata Trading Co.,Ltd</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Marine Engineering Diving Services FZC</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Six Construct, UAE</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Humaid Badir Shipping, UAE</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Elite Way Marine Services</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Hussain Sheth & Sons Pvt Ltd.</li>
                                    <!-- <li><span><i class="fa-solid fa-angles-right"></i></span>MOGC</li> -->
                                </ul>
                                <p class="ship-icon">Some of Key Yards around the world as follows:</p>
                                <ul style="list-style-type: none;" class="user-list">
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Kasturi Trading, Alang, India</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Inspire Group, Alang, India</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Sustainable General Trading, UAE</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Wirana Shipping Company, UAE</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Best Oasis Limited, India</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Multi Sourcing Trading LLC, UAE</li>

                                </ul>
                                <!-- <ul style="list-style-type: none;">
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>SAUDI ARAMCO</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>ADOC</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>PETROFAC</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>SHELL</li>
                                </ul>
                                <ul style="list-style-type: none;">
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>ADPC</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>NPCC</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>SUBSEA7</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>PETRONAS</li>
                                </ul> -->
                            <!-- </div> -->
                    </div>        
                </div>
            </div>
        </div>
   </div>
   <script>
        document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active"); // Add active class when in view
            }
        });
    }, { threshold: 0.1 }); // Trigger when 10% of the element is visible

    // Select all cards to observe
    const cards = document.querySelectorAll(".animate-card");
    cards.forEach((card) => observer.observe(card));
});

    </script>