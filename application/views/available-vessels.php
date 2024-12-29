
    <style>
        .available_vessels_page{
            width:100%;
             height:auto;
            padding:0;
            /* border:1px solid black; */
        }
        @media (min-width: 576px) {
            .available_vessels_page {
                margin-top: 2rem;
                margin-bottom: 2rem;
            }
        }
            @media (min-width: 768px) {
            .available_vessels_page {
                margin-top: 3rem;
                margin-bottom: 3rem;
            }
        }
        .available_vessels_conatiner{
            /* border:1px solid red; */
            height:auto;
            width:90%;
            display:flex;
            padding:0px;
            gap:1rem;
            margin:auto;
        }

        @media (min-width: 576px) {
            .available_vessels_container{
                margin-top: 2rem;
                margin-bottom: 2rem;
            }
        }
            @media (min-width: 768px) {
            .available_vessels_container {
                margin-top: 3rem;
                margin-bottom:3rem;
            }
        }    
        .vessels_container{
            width:75%;
            text-align:justify;
            overflow-y: auto;
            padding-right: 10px;
            height:auto;
            /* border:1px solid blue; */
            /* margin:0; */
        }
        .form-page{
            width: 32%;
            background-color: #1278B9;
            color: #333333;
            position: sticky;
            top: 20px;  /* Adjust this value as needed */
            height: auto;
            padding: 1rem;
            max-height: calc(100vh - 40px); /* Allow for sticky behavior without exceeding viewport */
            overflow-y: auto;
            
           } 
.heading_container{
    margin-bottom:35px;
}    
.form-head{
    margin:10px;
    color:white;
    /* border-radius:none; */
}   
.custom-input{
    border-radius:0;
    width:90%;
    margin:auto;
}
.underline_{
    border:2px solid  blue;
    width:70px;
}
.text{
font-size:20px;

}
.img-txt{
    margin:25px 0px;
    height:auto;
    align-items:center;
    margin-bottom:30px;
    /* border:2px solid blue; */
    display:flex;

}
.container-text{
    width:65%;
    /* border:2px solid red; */
    margin:20px 0px 20px 30px ;
}
.container-text a{
    text-decoration: none;
    color: #0056D2;
    margin: 8px 0px;
}
.container-text a:hover{
    color:rgb(2, 59, 139);
}
.send-butn{
            display: inline-flex;
            align-items: center;
            background-color: #0056D2; 
            color: white; 
            font-weight: bold;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
            font-size: 14px;
            gap: 10px;
            margin-left:13px;
            border-radius:0;
  
}
.send-butn span {
            border-right: 3px solid white; 
            padding-right: 10px; 
        }
.send-butn:hover{
    background-color:skyblue;
}        
     
.image-container {
    position: relative;
    overflow: hidden; /* Ensure overlay matches image bounds */
}

.image-wrapper {
    position: relative;
    display: inline-block; /* Ensure image and overlay match size */
}

.image-wrapper img {
    display: block;
    width: 100%; /* Matches container width */
    height: auto; /* Maintains the image's original aspect ratio */
}

.hover-overlay {
    position: absolute;
    bottom: -100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    cursor: pointer;
    background-color: rgba(250, 250, 45, 0.52); /* Light yellow overlay */
    opacity: 0; /* Hidden by default */
    transition: opacity 0.5s ease-in-out;
}

.image-wrapper:hover .hover-overlay {
    opacity: 2; /* Show overlay on hover */
    bottom: 0;
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
<link rel="stylesheet" href="../assets/styles/style.css">
<!-- </head>
<body> -->
    <section>
        <div class="container-fluid available_vessels_page">
            <div class="container-fluid available_vessels_conatiner">
                <div class="vessels_container animate-card" data-direction="left">
                    <div class="heading_container">
                        <h2>AVAILABLE VESSELS</h2>
                        <div class="underline_"></div>
                    </div>
                    <div>
                        <p>Our core competence is Offshore & Tanker vessels which we have good relationships with a large number of offshore and Tanker fleet owners in the Middle East, Indian subcontinent and Far East Region.<br>
                        We can source vessels with right specifications matching the exact project requirements in any of the aforementioned regions including East and West African countries.</p>
                    </div>
                    <div class="img-txt">
                        <!-- <div class="image-container" style="width:30%; height:200px; float:left"> 
                            <div class="image-wrapper">
                            <img src="../assets/images/av2.jpg" alt="image"style="width:100%; height:100%; object-fit:cover;">
                        </div>
                        <div class="hover-overlay"></div>
                        </div> -->
                        <div class="col-md-4 p-0 image-container"style="width:30%; height:200px; float:left">
                                    <div class="image-wrapper">
                                        <img src="../assets/images/av1.jpg" class="img-fluid rounded-start" alt="..." style="width:100%; height:100%; object-fit:cover;">
                                        <div class="hover-overlay"></div>
                                    </div>
                                </div>
                        <div class="container-text">
                            <h4>Offshore vessels</h4>
                            <p>SMM is involved in the chartering of tugs, supply vessels, maintenance vessels, utility vessels, cargo barges, accommodation barges, workboats and other specialized offshore vessels. Our relationships with a global database of client owners, built up over a period of time, gives us a real competitive edge.</p>
                             <a href="<?php echo base_url('ghm/offshore_vessels');?>">Available vessels..</a>
                        </div>
                    </div>

                    <div class="img-txt">
                    <div class="col-md-4 p-0 image-container"style="width:30%; height:200px; float:left">
                                    <div class="image-wrapper">
                                        <img src="../assets/images/av2.jpg" class="img-fluid rounded-start" alt="..."style="width:100%; height:100%; object-fit:cover;">
                                        <div class="hover-overlay"></div>
                                    </div>
                                </div>
                        <div class="container-text">
                            <h4>Tanker vessels</h4>
                            <p>We work closely with oil traders in the middle east market and provide the right vessel for their oil cargo movements. We are covering the following markets for DPP, CPP, Bitumen and LPG cargo transportation: Middle East region, South East Asia & Indian Sub-continent region, West African region.</p>
                            <a href="<?php echo base_url('ghm/tanker_vessels');?>">Available vessels..</a>
                        </div>
                    </div>

                    <div class="img-txt">
                    <div class="col-md-4 p-0 image-container"style="width:30%; height:200px; float:left">
                                    <div class="image-wrapper">
                                        <img src="../assets/images/av3.jpg" class="img-fluid rounded-start" alt="..."style="width:100%; height:100%; object-fit:cover;">
                                        <div class="hover-overlay"></div>
                                    </div>
                                </div>
                        <div class="container-text">
                            <h4>Bulk Carriers</h4>
                            <p>We work closely with owners and charterers providing worldwide seaborne transportation solutions in the dry bulk sector and provide the right vessel for their bulk cargo movements by geared and gearless bulk carriers of all sizes. Our established global network allows us to share best practices across our large and varied accessible fleet owners with a convenient choice of geographically spread.</p>
                             <a href="<?php echo base_url('ghm/bulk_carriers');?>">Available vessels..</a>
                        </div>
                    </div>

                    <div class="img-txt">
                    <div class="col-md-4 p-0 image-container"style="width:30%; height:200px; float:left">
                                    <div class="image-wrapper">
                                        <img src="../assets/images/av4.jpg" class="img-fluid rounded-start" alt="..."style="width:100%; height:100%; object-fit:cover;">
                                        <div class="hover-overlay"></div>
                                    </div>
                                </div>
                        <div class="container-text">
                            <h4>Vessels for sale</h4>
                            <p>Our extensive database also includes vessels available for sale. Please contact us with your requirements and we will respond promptly with our recommendations in an easy to understand format. All enquiries are handled in strict confidence.</p>
                             <a href="<?php echo base_url('ghm/vessels_for_sale');?>">Available vessels..</a>
                        </div>
                    </div>
                        
                </div>
                <div class="form-page animate-card" data-direction="right">
                    <div class="form-head">
                        <h2>QUICK ENQUIRY</h2>
                        <div class="underline_"></div>
                    </div>
                    <div class="form-group">
                        <input type="text"  name="name" placeholder="Name "class="form-control mb-2 mb-sm-3 mb-md-4 p-2 custom-input ">
                        <input type="text"  name="company" placeholder="Company" class="form-control mb-2 mb-sm-3 mb-md-4 p-2 custom-input ">
                        <input type="text"  name="phone_number" placeholder="Mobile Number"class="form-control mb-2 mb-sm-3 mb-md-4 p-2 custom-input ">
                        <input type="email"  name="email" placeholder="Email"class="form-control mb-2 mb-sm-3 mb-md-4 p-2 custom-input ">
                        <textarea name="msg" id="" row="5" col="5" placeholder="Message"class="form-control mb-2 mb-sm-3 mb-md-4 p-2 custom-input "></textarea>
                        <button class="send-butn">
                            <span>SEND MESSAGE</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>  
            </div>
        </div>
    </section>
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
