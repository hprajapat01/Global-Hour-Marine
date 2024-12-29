<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/our-services.css">
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
            height: auto
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
                font-size: 18px;
                border: none;
            }
        }
        .user-list li{
                font-weight: 600;
                font-size: 20px;
                border: none;
        }
        .user-list span{
            color: #0052A9;
            font-size: 20px;
            font-weight: bolder;
        }
        .lists li{
            border: none;
        }
        .arrow{
            font-weight: bold;
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
        <div class="row mt-5 px-5">
            <div class="col-12 col-md-6 offshore-list animate-card" data-direction="left">
                <ul style="list-style-type: none;" class="lists link-list">
                    <li><a  class="list-text" href="<?php echo base_url('ghm/offshore_vessel');?>">OFFSHORE VESSEL CHARTERING SERVICES<span class="arrow">>></span></a></li>
                    <li style="background-color: #1FB5C7;"><a style="color: white;" class="list-text" href="<?php echo base_url('ghm/tanker_chartering');?>">TANKER CHARTERING & BROKING<span class="arrow">>></span></a></li>
                    <li><a  class="list-text" href="<?php echo base_url('ghm/dry_cargo');?>">DRY CARGO CHARTERING & BROKING<span class="arrow">>></span></a></li>
                    <li><a style="line-height: 18px;" class="list-text" href="<?php echo base_url('ghm/marine_survey');?>">MARINE SURVEY & TECHNICAL CONSULTANCY SERVICES<span class="arrow">>></span></a></li>
                    <li><a  class="list-text" href="<?php echo base_url('ghm/vessel_technical');?>">VESSEL TECHNICAL MANAGEMENT<span class="arrow">>></span></a></li>
                    <li><a  class="list-text" href="<?php echo base_url('ghm/vessel_sale_purchase');?>">VESSEL S&P AND DEMOLITION<span class="arrow">>></span></a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0 offshore-vessel -list animate-card" data-direction="right">
                <div class="offshore-vessel-section">
                    <!-- <div> -->
                        <img src="../assets/images/2.jpg" alt="">
                    <!-- </div> -->
                    <div class="offshore-vessel-text">
                        <h2>Tanker Chartering & Broking</h2>
                            <div class="line"></div>
                            <p>We work very closely with owners and charterers, endeavoring to secure the ideal vessel to meet the charterers' requirements. This includes Term charter on time charter and bareboat basis of various types of tanker vessels. We are driven by a "customer-first" philosophy, which has earned us a reputation of reliability & dedicated service. Our scale and size, along with our independence, means we can offer the kind of scope that our clients need to make their businesses more successful. To meet our clients ever changing requirements, we combine market-leading research with global reach and market expertise to provide outstanding service and 24 hour coverage across the globe. Our target markets are as follows:</p>

                            <ul style="list-style-type: none;" class="user-list">
                                <li><span><i class="fa-solid fa-angles-right"></i></span> Middle East region</li>
                                <li><span><i class="fa-solid fa-angles-right"></i></span> South East Asia & Indian Sub-continent region</li>
                                <li><span><i class="fa-solid fa-angles-right"></i></span> West African region</li>
                            </ul>
                            <p>Some of our key clients are as follows:</p>
                            <div class="user-list d-flex mb-5">
                                <ul style="list-style-type: none;">
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> ECB International</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> BW Tankers</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Aurora Shipping, UAE</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> OBN Energy, UAE</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Gobel Marine, Nigeria</li>
                                </ul>
                                <ul style="list-style-type: none;">
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Hafnia Management</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Strait Tankers</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Strait Tankers</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> Energy extended, UAE</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span> R3 Shipping and Trading, UAE</li>
                                </ul>
                            </div>
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
                            <!-- <p class="ship-icon">We have built strong relationships with end users namely:</p> -->
                            <!-- <div class="user-list d-flex mb-5">
                                <ul style="list-style-type: none;">
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>TOTAL</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>BAM</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>SAIPEM</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>MOGC</li>
                                </ul>
                                <ul style="list-style-type: none;">
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>ADNOC</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>ONGC</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>NMDC</li>
                                    <li><span><i class="fa-solid fa-angles-right"></i></span>SNOC</li>
                                </ul>
                                <ul style="list-style-type: none;">
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
                                </ul>
                            </div> -->
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