
<link rel="stylesheet" href="../assets/styles/style.css">
<style>
.no-scroll {
    overflow: hidden; /* Disable scrolling on body */
}
        .offshore_vessels{
            height:auto;
            width:100%;
            position:absolute;
            
             /* border:1px solid black; */
        }
        .offshore_vessels_conatiner{
            height:auto;
            width:90%;
             display:flex;
             justify-content:space-between;
              gap:30px;

        }
        .list_container{
            /* height:auto; */
            /* border:2px solid pink; */
            width:28%;
        }
        .table_container{
            /* height:auto; */
            /* border:2px solid blue; */
            width:65%;
        }
        .list-style{
            background-color:#EFEFEF;
            padding:0;
            margin:0px 0px 0px -32px ;
            height:50px;
            display:flex;
            justify-content:space-between;
            color:black;
            border-bottom:5px solid white;
            align-items: center;
            
        }
        .text{
            font-size:20px;
            color:black;
        }
        .list-style a {
            text-decoration: none; /* Removes underline from links */
            color: black; /* Ensures link text is white */
        }
        .list-style:hover {
            background-color: #1FB5C7; /* Changes background to blue on hover */
            color: white; /* Ensures text color changes to white */
        }
        .list-style:hover a {
            color: white; /* Changes link text to white on hover */
        }
        .underline{
            width:10%;
            height:4px;
            background-color:blue;
        }
        .table-data{
            margin-top:50px;
            width:100%;
        }
        table tr th, table tr td  {
                border:1px solid black;            
        }
        table{
            width:100%;
            
        }
        table tr{
            height:20px;
            text-align:left;  
        }
        td ,th{
        padding:10px;
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
        /* #offshore{
           background-color: #1FB5C7
        } */
        .lists li{
            border: none;
        }
        .offshore-list{
            width: 30%;
        }
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
            /* font-weight: 500; */
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
        .arrows{
        margin-left: auto; /* Ensures the arrow stays on the right */
        font-weight: bold;
        }

        textarea{
            background-color: white;
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
    <div class="container-fluid offshore_vessels mt-5">
         <div class="container-fluid offshore_vessels_conatiner">
            <div class="col-12 col-md-6 offshore-list animate-card" data-direction="left">
                <ul style="list-style-type: none;" class="lists link-list">
                    <li style="background-color: #1FB5C7;"><a  class="list-text" href="<?php echo base_url('ghm/offshore_vessels')?>">OFFSHORE VESSEL<span class="arrows">>></span></a></li>
                    <li><a  class="list-text" href="<?php echo base_url('ghm/tanker_vessels')?>">TANKER VESSELS<span class="arrows">>></span></a></li>
                    <li><a  class="list-text" href="<?php echo base_url('ghm/bulk_carriers')?>">BULK CARRIERS<span class="arrows">>></span></a></li>
                    <li><a  class="list-text" href="<?php echo base_url('ghm/vessels_for_sale')?>">VESSELS FOR SALE<span class="arrows">>></span></a></li>
                </ul>
            </div>
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
        
            <div class="table_container animate-card" data-direction="right">
                <h2>OFFSHORE VESSELS AVAILABLE FOR CHARTER</h2>
                <div class="underline"></div>
                <div class="table-data">
                    <table>
                        <tr>
                            <th>S.NO.</th>
                            <th>Description</th>
                            <th>Date Of Availability</th>
                            <th>Area Of Availability</th>
                            <th>Request a Quote</th>
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