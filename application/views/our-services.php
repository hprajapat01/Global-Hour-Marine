<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head> -->

    
<style>
.flex-container {
    display: flex;
    flex-direction: column; /* Default to column on smaller devices */
    gap: 20px; /* Add spacing between cards and form */
}

.flex-container .content {
    flex: 1; /* Takes full width on small screens */
}

.flex-container .form_container {
    flex: 1; /* Takes full width on small screens */
}

/* Media query for larger devices */
@media (min-width: 768px) {
    .flex-container {
        flex-direction: row; /* Switch to row layout */
        align-items: flex-start; /* Align items at the top */
    }

    .flex-container .content {
        flex: 2; /* Content takes more space */
    }

    .flex-container .form_container {
        flex: 1; /* Form takes less space */
    }
}


@media (max-width: 768px) {
    .our-services{
        max-width: 100%;
        height: auto;
    }
    .service-image img {
        height: auto; /* Ensures the image scales properly */
        object-fit: cover;
    }
    .card-body {
        padding: 10px; /* Adds padding for better readability */
        display: flex; /* Ensures the content is flexible */
        flex-direction: column; /* Aligns the content vertically */
        justify-content: flex-start;/* Adds space around the content */
    }
    .card-title, .card-text {
        display: block; /* Ensures text is displayed */
        margin-bottom: 10px; /* Adds space between elements */
    }
}

@media (max-width:768px){
    .form_container{
        padding:10px;
    }
}
@media(max-width:576px){
    .form_container{
        padding: 5px;
    }
}

/* .card-body h5,p{
    color: black;
} */

/* .form-heading{
    margin:10px;
    color:white;
}

.custom-input{
    border-radius:0;
    width:90%;
    margin:auto;
} */
.service-text{
    color: black;
}
.card-text a{
    font-size: 18px;
}
.card-text a:hover{
    color: #0056D2;
}
.card-text i{
    display: none;
}
h2{
    color: black;
}
/* Set consistent height for images */
.service-image {
    height: 200px; /* Adjust the height as per your requirement */
    overflow: hidden;
}

/* Ensure images cover the container without distortion */
.service-image img {
    object-fit: cover;
    height: 100%;
    width: 100%;
}

/* Maintain uniform card height */
.service-card {
    display: flex;
    flex-direction: row;
    height: 100%; /* Ensures all cards are of equal height */
}

.service-card:hover .card-text{
    color: white;
}
.service-card:hover .card-title{
    color: white;
}

.card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}
.flex-column h5,p{
    color: black;
}
/* .service-card:hover{
    
} */




/* .send-butn{
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
}   */
/* .form_container{
    width: 30%;
    background-color: #1278B9;
    color: #333333;
    position: sticky;
    top: 20px;  
    height: auto;
    padding: 1rem;
    max-height: calc(100vh - 40px); 
    overflow-y: auto;

} 
.underline_about_us{
    border:2px solid  blue;
    width:70px;
} */





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
    color:white !important;
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

</style>
<link rel="stylesheet" href="../assets/styles/style.css">

        <div class="container flex-container main-container" style="max-width:90%">
            <div class="contentt animate-card" data-direction="left" style="width:68%">
                <div class="container">
                <h2>OUR SERVICES</h2>
                <div class="line" style="margin-bottom: 7px;"></div>
                <P class="service-text">Our unique team has many years of experience in offshore vessel chartering and management. An in-depth understanding of ship operations and market dynamics helps us serving our customers better.</P>
                <!-- <div><i class="fas fa-arrow-right" style="color: #000;"></i><a href="#" class="service-read">READ MORE</a></div> -->
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card our-services service-card p-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-0 service-image">
                                    <img src="../assets/images/vessal.jpg" class="img-fluid rounded-start" alt="..." style="object-fit: cover; width: 100%;">
                                </div>
                                <div class="col-md-8 p-0">
                                    <div class="card-body d-flex flex-column" style="height: 100%;">
                                        <h5 class="card-title">OFFSHORE VESSEL CHARTERING SERVICES</h5>
                                        <p class="card-text">Our unique team has many years of experience in offshore vessel chartering and management.</p>
                                        <p class="card-text mt-auto">
                                            <i class="fas fa-arrow-right" style="color: #000;"></i> 
                                            <a href="<?php echo base_url('ghm/offshore_vessel');?>" class="service-read">READ MORE...</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="card our-services service-card p-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-0 service-image">
                                    <img src="../assets/images/cargo.jpg" class="img-fluid rounded-start" alt="..." style="object-fit: cover; width: 100%;">
                                </div>
                                <div class="col-md-8 p-0">
                                    <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                        <h5 class="card-title">TANKER CHARTERING & BROKING</h5>
                                        <p class="card-text">We work very closely with owners and charterers, endeavoring to secure the ideal vessel to meet the charterers' requirements.</p>
                                        <p class="card-text mt-auto"><i class="fas fa-arrow-right" style="color: #000;"></i> <a href="<?php echo base_url('ghm/tanker_chartering');?>" class="service-read">READ MORE...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="card our-services service-card p-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-0 service-image">
                                    <img src="../assets/images/6.png" class="img-fluid rounded-start" alt="..." style="object-fit: cover; width: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                        <h5 class="card-title">DRY CARGO CHARTERING & BROKING</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text mt-auto"><i class="fas fa-arrow-right" style="color: #000;"></i> <a href="<?php echo base_url('ghm/dry_cargo');?>" class="service-read">READ MORE...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="card our-services service-card p-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-0 service-image">
                                    <img src="../assets/images/5.png" class="img-fluid rounded-start" alt="..." style="object-fit: cover; width: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                        <h5 class="card-title">MARINE SURVEY & TECHNICAL CONSULTANCY SERVICES</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text mt-auto"><i class="fas fa-arrow-right" style="color: #000;"></i> <a href="<?php echo base_url('ghm/marine_survey');?>" class="service-read">READ MORE...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="card our-services service-card p-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-0 service-image">
                                    <img src="../assets/images/portfolio.png" class="img-fluid rounded-start" alt="..."style="object-fit: cover; width: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                        <h5 class="card-title">VESSEL TACHNICAL MANAGEMENT SERVICES</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text mt-auto"><i class="fas fa-arrow-right" style="color: #000;"></i><a href="<?php echo base_url('ghm/vessel_technical');?>" class="service-read">READ MORE...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="card our-services service-card p-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-0 service-image">
                                    <img src="../assets/images/new1.jpg" class="img-fluid rounded-start" alt="..."style="object-fit: cover; width: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                        <h5 class="card-title">VESSEL S&P AND DEMOLITION SERVICES</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text mt-auto"><i class="fas fa-arrow-right" style="color: #000;"></i><a href="<?php echo base_url('ghm/vessel_sale_purchase');?>" class="service-read">READ MORE...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="form_container">
             <div class="form-heading">
               <h2>QUICK ENQUIRY</h2>
               <div class="underline_about_us"></div>
             </div>
             <div class="form-group">
                <input type="text"  name="name" placeholder="Name "class="form-control mb-2 mb-sm-3 mb-md-4 p-2 custom-input ">
                <input type="text"  name="company" placeholder="Company" class="form-control mb-2 mb-sm-3 mb-md-4 p-2 custom-input ">
                <input type="text"  name="phone_number" placeholder="Mobile Number"class="form-control mb-2 mb-sm-3 mb-md-4 p-2 custom-input ">
                <input type="email"  name="email" placeholder="Email"class="form-control mb-2 mb-sm-3 mb-md-4 p-2 custom-input ">
                <textarea name="msg" id="" row="5" col="5" placeholder="Message"class="form-control mb-2 mb-sm-3 mb-md-4 p-2 custom-input "></textarea>
            </div> -->
            <div class="form-page " style="height:1000px">
                    <div class="form-head">
                        <h2 style="color:white;">QUICK ENQUIRY</h2>
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
        
   