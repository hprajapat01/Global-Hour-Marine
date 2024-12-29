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
            .date {
                background-color: #FBB12F;
                width: 80px; /* Fixed width for the circle */
                height: 80px; /* Fixed height for the circle */
                border-radius: 50%; /* Ensures a perfect circle */
                display: flex; /* Flexbox for centering */
                justify-content: center; /* Horizontally centers content */
                align-items: center; /* Vertically centers content */
                margin: 0px 20px; /* Adds spacing around the circle */
                text-align: center; /* Centers text alignment */
                flex-shrink: 0; /* Prevents resizing due to content */
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Optional styling */
            }
            .date h4 {
                color: white;
                margin: 0; /* Removes default margin */
                /* font-size: 14px; Font size to fit inside the circle */
                line-height: 1.2; /* Handles multi-line text spacing */
            }
            .news{
                /* margin:auto; */
                padding: 0;
                /* width: 100%; */
                max-width: 90%;
                /* border: 1px solid yellow; */
            }
            .date-content{
                /* border: 1px solid red; */
                text-align: justify;
                width: 85%;
            }
            .content h5{
                color: #337AB7;
                font-weight: bold;
            }
            .content p{
                color: black;
            }
            .data-content{
                width: 75%;
            }
            .form_container{
                margin: 0px 25px ;
                /* border: 1px solid black; */
            }
            .form_container{
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
    </head>
    <body>
        <div class="container mt-5 news">
            <h2>NEWS</h2>
            <div class="line"></div>
            <div class="container-fluid d-flex flex-column flex-md-row">
                <div class="date-content animate-card" data-direction="left">
                    <div class="d-flex mb-4">
                        <div class="date mt-5 mb-4">
                            <h4>19 oct 2019</h4>
                        </div>
                        <div class="content">
                            <h5>Tanker Broking & Vessel Demolition Services</h5>
                            <p>Seaspeed Marine is happy to announce that our company has expanded its service portfolio by adding tanker broking services and vessel demolition services. Both segments were started in early 2018 and we have been able to conclude a few deals in short span of time. Hope to continue providing our support and services to our clients.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="date">
                            <h4>30 oct 2015</h4>
                        </div>
                        <div class="content">
                            <!-- <h5>Tanker Broking & Vessel Demolition Services</h5> -->
                            <p>We are humbled to launch our new website of Seaspeed Marine Management LLC. This new website is dynamic, giving a better glimpse into our service portfolio and vessels available. We hope to interact with our customers better.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="date">
                            <h4>20 oct 2015</h4>
                        </div>
                        <div class="content">
                            <!-- <h5>Tanker Broking & Vessel Demolition Services</h5> -->
                            <p>Successfully completed medium term charter of a tug which was deployed for towage of cargo barge in Arabian Gulf. Look forward to close many more.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="date mt-5">
                            <h4>20 sep 2015</h4>
                        </div>
                        <div class="content">
                            <h5>New Management takes over</h5>
                            <p>We are honored and pleased to announce that Seaspeed Marine Management has been taken over by a new team. Mr. Chetan Parulekar is appointed Chief Executive Officer of the company and is supported by operations, technical and commercial teams. We hope to receive blessings of all our well-wishers and stand committed to our best services to our clients.</p>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="d-flex date-content">
                    <div class="date mt-5">
                        <h4>30 oct 2015</h4>
                    </div>
                    <div class="content">
                        <h5>Tanker Broking & Vessel Demolition Services</h5>
                        <p>We are humbled to launch our new website of Seaspeed Marine Management LLC. This new website is dynamic, giving a better glimpse into our service portfolio and vessels available. We hope to interact with our customers better.</p>
                    </div>
                </div> -->
                <div class="form_container order-1 order-md-2 animate-card" data-direction="right">
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