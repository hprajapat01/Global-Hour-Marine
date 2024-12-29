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

    <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <title>Document</title>

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
            width: 30%;
        }
        .offshore-vessel{
            width: 70%;
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
        .user-list span{
            color: #0052A9;
            font-weight: 600;
        }
        .offshore-vessel{
            width: 60%;
            /* border: 1px solid red; */
            margin: 0px 60px ;
        }
        table,tr,td,th{
            border: 1px solid black;
            border-collapse: collapse; 
            text-align: center;          
        }
        .no-scroll{
            overflow: hidden;
        }

        #pop-up-content {
            position: fixed; /* Makes the popup fixed to the viewport */
            top: 50%; /* Center vertically */
            left: 50%; /* Center horizontally */
            transform: translate(-50%, -50%); /* Adjust for the popup's size */
            height: auto; /* Let the height adjust to content */
            max-height: 100%; /* Prevent overflow */
            width: 30%; /* Adjust width */
            max-width: 350px; /* Optional: limit maximum width */
            border: 1px solid black;
            background: white;
            display: none; /* Initially hidden */
            border-radius: 3px;
            overflow-y: auto; /* Allow vertical scrolling */
            z-index: 1000; /* Ensure it appears above other elements */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .querry{
            padding:10px ;
            border-bottom:1px solid black;
            font-size:21px;
        }
        .details{
            padding:10px ;

        }
        textarea{
            background-color: white;
        }
        .form-style{
            width:100%;
            height:40px;
        }
        .send-button{
            background-color:green;
            color:white;
            padding:5px;
            border:none;
            width:70px;
            font-size:20px;
            margin-top:15px;
            
        }
        .send-button:hover{
            background-color:darkgreen;
        }
        #description{
            font-weight:bold;
            padding:10px ;
            font-size:18px;

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
.arrows{
    font-weight: bold;
}
    </style>

   <div class="container-fluid">
    <!-- <div></div> -->
    <div class="row mt-5">
        <div class="row mt-5 px-5">
        <div class="col-12 col-md-6 offshore-list animate-card" data-direction="left">
                <ul style="list-style-type: none;" class="lists link-list">
                    <li><a  class="list-text" href="<?php echo base_url('ghm/offshore_vessels')?>">OFFSHORE VESSEL<span class="arrows">>></span></a></li>
                    <li style="background-color: #1FB5C7;"><a style="color: white;" class="list-text" href="<?php echo base_url('ghm/tanker_vessels')?>">TANKER VESSELS<span class="arrows">>></span></a></li>
                    <li><a  class="list-text" href="<?php echo base_url('ghm/bulk_carriers')?>">BULK CARRIERS<span class="arrows">>></span></a></li>
                    <li><a  class="list-text" href="<?php echo base_url('ghm/vessels_for_sale')?>">VESSELS FOR SALE<span class="arrows">>></span></a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 mt-3 mt-md-0 offshore-vessel animate-card" data-direction="right">
                <div class="offshore-vessel-section mb-5">
                    <h2>TANKER VESSELS</h2>
                    <div class="line"></div>
                    <table style="width: 100%;">
                        <tr>
                            <th>S.No.</th>
                            <th>Scope of job</th>
                            <th>Types of vessel</th>
                            <th>End Client</th>
                            <th>Area of operation</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>AHTS DP1 (SMMAHTS20241371), Built: 2009, Accommodation: 42, Deck Space: 368m2, LOA: 59m2, BP: 65T, BHP: 5000HP, Fuel: 450m3, FW: 400m3</td>
                            <td>2024-09-30</td>
                            <td>UAE</td>
                            <td style="font-size:30px; text-align:center;"><i class="fa-solid fa-file-pen" onclick="togglePopup()"></i></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>AHTS DP1 (SMMAHTS20241371), Built: 2009, Accommodation: 42, Deck Space: 368m2, LOA: 59m2, BP: 65T, BHP: 5000HP, Fuel: 450m3, FW: 400m3</td>
                            <td>2024-09-30</td>
                            <td>UAE</td>
                            <td style="font-size:30px;text-align:center;"><i class="fa-solid fa-file-pen" onclick="togglePopup()"></i></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>AHTS DP1 (SMMAHTS20241371), Built: 2009, Accommodation: 42, Deck Space: 368m2, LOA: 59m2, BP: 65T, BHP: 5000HP, Fuel: 450m3, FW: 400m3</td>
                            <td>2024-09-30</td>
                            <td>UAE</td>
                            <td style="font-size:30px;text-align:center;"><i class="fa-solid fa-file-pen" onclick="togglePopup()"></i></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>AHTS DP1 (SMMAHTS20241371), Built: 2009, Accommodation: 42, Deck Space: 368m2, LOA: 59m2, BP: 65T, BHP: 5000HP, Fuel: 450m3, FW: 400m3</td>
                            <td>2024-09-30</td>
                            <td>UAE</td>
                            <td style="font-size:30px;text-align:center;"><i class="fa-solid fa-file-pen" onclick="togglePopup('AHTS DP1 (SMMAHTS20241371), Built: 2009, Accommodation: 42, Deck Space: 368m2, LOA: 59m2, BP: 65T, BHP: 5000HP, Fuel: 450m3, FW: 400m3')"></i></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>AHTS DP1 (SMMAHTS20241371), Built: 2009, Accommodation: 42, Deck Space: 368m2, LOA: 59m2, BP: 65T, BHP: 5000HP, Fuel: 450m3, FW: 400m3</td>
                            <td>2024-09-30</td>
                            <td>UAE</td>
                            <td style="font-size:30px;text-align:center;"><i class="fa-solid fa-file-pen" onclick="togglePopup()"></i></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>AHTS DP1 (SMMAHTS20241371), Built: 2009, Accommodation: 42, Deck Space: 368m2, LOA: 59m2, BP: 65T, BHP: 5000HP, Fuel: 450m3, FW: 400m3</td>
                            <td>2024-09-30</td>
                            <td>UAE</td>
                            <td style="font-size:30px;text-align:center;"><i class="fa-solid fa-file-pen" onclick="togglePopup()"></i></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>AHTS DP1 (SMMAHTS20241371), Built: 2009, Accommodation: 42, Deck Space: 368m2, LOA: 59m2, BP: 65T, BHP: 5000HP, Fuel: 450m3, FW: 400m3</td>
                            <td>2024-09-30</td>
                            <td>UAE</td>
                            <td style="font-size:30px;text-align:center;"><i class="fa-solid fa-file-pen" onclick="togglePopup()"></i></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>AHTS DP1 (SMMAHTS20241371), Built: 2009, Accommodation: 42, Deck Space: 368m2, LOA: 59m2, BP: 65T, BHP: 5000HP, Fuel: 450m3, FW: 400m3</td>
                            <td>2024-09-30</td>
                            <td>UAE</td>
                            <td style="font-size:30px;text-align:center;"><i class="fa-solid fa-file-pen" onclick="togglePopup()"></i></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>AHTS DP1 (SMMAHTS20241371), Built: 2009, Accommodation: 42, Deck Space: 368m2, LOA: 59m2, BP: 65T, BHP: 5000HP, Fuel: 450m3, FW: 400m3</td>
                            <td>2024-09-30</td>
                            <td>UAE</td>
                            <td style="font-size:30px;text-align:center;"><i class="fa-solid fa-file-pen" onclick="togglePopup()"></i></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
   </div>
   <div class="querry_container" id="querry-popup">
        <div id="pop-up-content">
             <p class="querry">Sent a querry</p>
                <div id="description"></div>
                <form id ="popup-form" action="<?php echo base_url('Ghm/send_email') ?>" method="post">
                    <div class="details">
                        <h5>Your name <span style="color:red">*</span></h5>
                        <input class="form-style" type="text" name="name">
                        <h5>Mobile <span style="color:red">*</span></h5>
                        <input class="form-style" type="text"name="mobile">
                        <h5>E-Mail <span style="color:red">*</span></h5>
                        <input class="form-style" type="email" name="email">
                        <h5>Company <span style="color:red">*</span></h5>
                        <input class="form-style" type="text" name="company">
                        <h5>Enter a Message <span style="color:red">*</span></h5>
                        <!-- <input class="form-style" type="text"> -->
                        <textarea  class="form-style"name="message" row="7" id="" name="message"></textarea>
                        <div style="border-top:1px solid black; margin-bottom:30px;">
                            <button class="send-button" type="submit" name="Send">Send</button>
                        </div>
                    </div>
                </form>

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

<script>
                function togglePopup(description) {
                    const popup = document.getElementById("pop-up-content");
                    const descriptionElement = document.getElementById("description");
                    
                    if (description) {
                        descriptionElement.innerText = description;
                    }
                    const isPopupVisible = popup.style.display === "block";
                    popup.style.display = isPopupVisible ? "none" : "block";
                    document.body.classList.toggle("no-scroll", !isPopupVisible);
                }

                document.addEventListener("DOMContentLoaded", function () {
                    document.getElementById("popup-form").addEventListener("submit", function (event) {
                        alert("Form submitted!"); 
                        togglePopup(); 
                    });
                });
           </script>