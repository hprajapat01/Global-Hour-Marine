
    <link rel="stylesheet" href="../assets/styles/style.css">
    <style>
        .cards-body{
            margin: 0px 15px;
        }
        .service-read{
            font-size: 18px;
        }
        .card-text{
            font-size: 15px;
            text-align: justify;
        }
        /* .image-container {
    position: relative;
    
}

.image-container img {
    display: block;
   
}

.hover-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 0, 0.3); 
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.image-container:hover .hover-overlay {
    opacity: 1;
} */


.image-container {
    position: relative;
    overflow: hidden; 
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
.completed-project{
    width: 85%;
}
.main-container{
    max-width: 95%;
}
.animate-card {
    opacity: 0;
    transform: translateX(100px); 
    transition: all 0.8s ease-in-out;
}

.animate-card[data-direction="left"] {
    transform: translateX(-100px); 
}

/* Active state (visible and on-screen) */
.animate-card.active {
    opacity: 1;
    transform: translateX(0); 
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
        <div class="container d-flex flex-column flex-md-row mt-3 main-container">
            <div class="container-fluid completed-project animate-card" data-direction="left">
                <div class="container">
                    <h2>COMPLETED PROJECTS</h2>
                    <div class="line mb-3"></div>
                    <!-- <div class="line" style="margin-bottom: 7px;"></div> -->
                    <P class="service-text">Our Completed Projects</P>
                    <!-- <div><i class="fas fa-arrow-right" style="color: #000;"></i><a href="#" class="service-read">READ MORE</a></div> -->
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="cards our-services  p-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-0 image-container mb-5">
                                    <div class="image-wrapper">
                                        <img src="../assets/images/c1.jpg" class="img-fluid rounded-start" alt="...">
                                        <div class="hover-overlay"></div>
                                    </div>
                                </div>
                                <div class="col-md-8 p-0">
                                    <div class="cards-body d-flex flex-column" style="height: 100%;">
                                        <h5 class="card-title">Offshore Projects</h5>
                                        <p class="card-text">SMM is involved in the chartering of tugs, supply vessels, maintenance vessels, utility vessels, cargo barges, accommodation bargSMM has successfully completed projects for major marine & offshore oil and gas industry, in addition to construction contractors throughout the Middle East and Arabian Gulf countries.</p>
                                        <p class="card-text mb-5">
                                            <!-- <i class="fas fa-arrow-right" style="color: #000;"></i>  -->
                                            <a href="<?php echo base_url('ghm/offshore_projects');?>" class="service-read">READ MORE...</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="cards our-services  p-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-0 image-container mb-5">
                                    <div class="image-wrapper">
                                    <img src="../assets/images/c2.jpg" class="img-fluid rounded-start" alt="..." style="object-fit: cover; width: 100%;">
                                    <div class="hover-overlay"></div>    
                                </div>
                                </div>
                                <div class="col-md-8 p-0">
                                    <div class="cards-body d-flex flex-column justify-content-between" style="height: 100%;">
                                        <h5 class="card-title">Tanker Projects</h5>
                                        <p class="card-text">Our projects include Spot fixtures, Consecutive Voyage contracts, long Time Charters as well as Bareboat Charters. We handle different types of Tanker vessels, including Product tankers in various sizes - from small, Handy, Panamax, Aframax, Suezmax & VLCCs. We provide various types of ships for cargoes such as CPP, DPP, Vegetable Oil, Chemicals, Bitumen, and LPG for charterers at all ports in the Middle East, Africa & the Indian Sub-Continent.</p>
                                        <p class="card-text mb-5"> <a href="<?php echo base_url('ghm/tanker_projects');?>" class="service-read">READ MORE...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="cards our-services  p-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-0 image-container mb-5">
                                    <div class="image-wrapper">
                                    <img src="../assets/images/c3.jpg" class="img-fluid rounded-start" alt="..." style="object-fit: cover; width: 100%;">
                                    <div class="hover-overlay"></div>    
                                </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="cards-body d-flex flex-column justify-content-between" style="height: 100%;">
                                        <h5 class="card-title">Bulk Carrier Projects</h5>
                                        <p class="card-text">Our projects include all sizes of geared and gearless bulk carriers. Our experienced team based in UAE and India acts as a vital link between charterers and shipowners who need to transport the goods required by a growing global population. We are experienced in spot chartering for individual voyages, Contracts of Affreightment (CoAs) on behalf of major commodity and power companies and the time charter of vessels for short- or long-term charter, covering all sizes of vessels.</p>
                                        <p class="card-text mb-5"> <a href="<?php echo base_url('ghm/bulk_carriers');?>" class="service-read">READ MORE...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="cards our-services  p-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-0 image-container mb-5">
                                    <div class="image-wrapper">
                                    <img src="../assets/images/c4.jpg" class="img-fluid rounded-start" alt="..." style="object-fit: cover; width: 100%;">
                                    <div class="hover-overlay"></div>    
                                </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="cards-body d-flex flex-column justify-content-between" style="height: 100%;">
                                        <h5 class="card-title">Consultancy Projects</h5>
                                        <p class="card-text">We cater to the full gambit of marine surveys & audits segment and undertake a wide variety of consultancy projects, surveys, inspections and audits in the main fleet and offshore shipping domain. Inspections are carried out on behalf of shipping companies, cargo underwriters, third parties, etc.</p>
                                        <p class="card-text mb-5 mt-4"> <a href="<?php echo base_url('ghm/consultancy_projects');?>" class="service-read">READ MORE...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="cards our-services p-0 ">
                            <div class="row g-0">
                                <div class="col-md-4 p-0 image-container mb-5">
                                    <div class="image-wrapper">
                                    <img src="../assets/images/c5.jpg" class="img-fluid rounded-start" alt="..."style="object-fit: cover; width: 100%;">
                                    <div class="hover-overlay"></div>    
                                </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="cards-body d-flex flex-column justify-content-between" style="height: 100%;">
                                        <h5 class="card-title">Technical Management</h5>
                                        <p class="card-text">SMM has managed vessels and provide high-class ship management services to the ship owners. We maximize ship safety, quality, and reliability at the most cost-effective operation while further enhancing SMM reputation through integrity, full compliance, and the highest quality and safety records. We have built a formidable reputation in technical ship management services with our excellent track record of over 15 years. Our full spectrum of ship management offerings includes technical management, procurement, bunkering, fleet personnel, new builds and security</p>
                                        <p class="card-text mb-5"><a href="<?php echo base_url('ghm/technical_management');?>" class="service-read">READ MORE...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-12 mb-4">
                        <div class="cards our-services  p-0">
                            <div class="row g-0">
                                <div class="col-md-4 p-0 images">
                                    <img src="../assets/images/new1.jpg" class="img-fluid rounded-start" alt="..."style="object-fit: cover; width: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="cards-body d-flex flex-column justify-content-between" style="height: 100%;">
                                        <h5 class="card-title">VESSEL S&P AND DEMOLITION SERVICES</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text mt-auto"><a href="#" class="service-read">READ MORE...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="card our-services  p-0">
                            <div class="row g-0">

                </div> -->
            </div>
            <div class="form-page animate-card mt-5" data-direction="right">
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
    