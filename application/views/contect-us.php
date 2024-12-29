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
            .contect{
                padding: 0;
                max-width: 90%;
            }
            .contect_form{
                width: 50%;
            }
            table td input{
                width: 100%;
                height: 45px;
                transition: 0.2s ease;
                margin: 5px 0px;
            }
            input:hover{
                box-shadow: 0 0 5px 2px  #1FB5C7;
                /* border: none; */
                border: 1px solid grey;
            }
            textarea{
                width: 100%;
                background-color: white;
                margin: 5px 0px;
            }
            #submit{
                margin: 10px 0px;
                padding: 8px 15px;
                border: none;
                /* border: 1px solid grey; */
                background-color: #0054A9;
                color: white;
                font-weight: bold;
                transition: 0.3s ease-in-out;
            }
            #submit:hover{
                background-color: #1FB5C7;
            }
            #submit i{
                margin: 0px 0px 0px 8px;
            }
            #submit span{
                border-right: 2px solid white;
                padding-right: 8px;
            }
            .text{
                text-align: justify;
            }
            .second-div{
                width: 40%;
                margin: 0px 0px 0px 8%;
                border: 1px solid grey;
            }
            .texts{
                text-align: justify;

            }
            .icons{
                margin: 20px 40px 0px 0px ;
                font-size: 50px;
                color: lightblue;
            }
            .text2 span{
                color: #1FB5C7;
            }
            .tel-icons p{
                padding: 0px;
                margin: 0px;
                font-size: 14px;
            }
            .text3 p{
                margin: 0px;
                font-size: 25px;
                /* color: #1FB5C7; */
            }
            .contect_us_page{
                justify-content: space-between;
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

        <div class="container mt-5 contect">
            <h2>CONTECT US</h2>
            <div class="line"></div>
            <p class="text">A customer is the most important visitor, on our premises. He is not an interruption on our work. He is not an outsider to our business. We are not doing him a favor by serving him. He is doing us a favor by giving us the opportunity to do it. He is not dependent on us. We are dependent on him. He is the purpose of it. He is a part of it. .</p>
            <div class="container-fluid d-flex flex-column flex-md-row mb-5 contect_us_page">
                <div class="contect_form animate-card" data-direction="left">
                    <form action="ghm/email" method="post">
                        <table style="width: 100%;">
                            <tr>
                                <td>
                                    <input type="text" name="name" id="name" placeholder="Name">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="email" id="email" placeholder="Email*">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="company" id="company" placeholder="Company">
                                </td>
                            </tr>
                            <tr>
                            <td>
                                    <input type="tel" name="phone" id="phone" placeholder="Phone Number">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea class="message" name="message" id="message" placeholder="Message"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- reCAPTCHA widget -->
                                    <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" id="submit"><span>SEND MESSAGE</span> <i class="fas fa-arrow-right"></i></button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="second-div px-3 px-md-5 animate-card" data-direction="right">
                    <div class="row align-items-start mb-3">
                        <div class="col-auto mt-4">
                            <span class="icons"><i class="fa-solid fa-location-dot"></i></span>
                        </div>
                        <div class="col">
                            <p><strong>Head Office:</strong> 1104, Mohammed Al Mulla Building (11th Floor), Al Ittihad Road, (near Ansar Mall) PO Box 32658, Sharjah U.A.E</p>
                            <p><strong>Branch Office:</strong> Seaspeed Marine FZE, Unit No. 11, D Block, Phase 2, Fujairah Free Zone, Fujairah, UAE.</p>
                            <p><strong>Branch Office:</strong> 44, 1st Floor, Emirates Tower, Hamdan Bin Mohammed Street, Al Danah, Abu Dhabi</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-start mb-3">
                        <div class="col-auto mt-4">
                            <span class="icons"><i class="fa-brands fa-telegram"></i></span>
                        </div>
                        <div class="col tel-icons">
                            <p><span class="text-primary">offshore@cspeed.ae</span> (For Offshore Inquiries)</p>
                            <p><span class="text-primary">chartering@cspeed.ae</span> (For Tanker Inquiries)</p>
                            <p><span class="text-primary">dry@cspeed.ae</span> (For Dry Bulk Cargo Inquiries)</p>
                            <p><span class="text-primary">survey@cspeed.ae</span> (For Survey Inquiries)</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row align-items-start">
                        <div class="col-auto">
                            <span class="icons"><i class="fa-solid fa-phone"></i></span>
                        </div>
                        <div class="col">
                            <p class="mb-1 text-primary">+97165638938</p>
                            <p class="mb-0 text-primary">+97165638939</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <h2>My Google Map</h2> -->
            <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.20104770526!2d76.82212867492873!3d30.632820090455645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390febc63404b13b%3A0x8db795b7ffaa4451!2sKlizard%20Technology!5e1!3m2!1sen!2sin!4v1734984873359!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
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


