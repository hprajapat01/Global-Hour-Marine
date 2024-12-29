<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/46863e3ec7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

    <title>Home</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<body> -->
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            font-family: 'Alegreya', serif;
            font-size: large;
            /* font-size: 14px; */
        }
        
        .head {
    background-color: rgba(0, 0, 0, 0.6);
    padding: 10px;
    border-radius: 5px;
    text-align: center;
    display: flex; /* For precise alignment */
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
}

        h2{
            font-weight: bold;
        }

        .carousel-caption {
            display: flex;
            align-items: center;
            justify-content: center;
            top: 50%;
        }

        .carousel-item {
            transition: transform 1.5s ease-in-out; 
        }

        .carousel-inner {
            position: relative;
            overflow: hidden;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #000; 
        }

        .carousel-item-next, .carousel-item-prev, .carousel-item.active {
            transform: translateY(0);
        }

        .carousel-item img {
        width: 100%;
        height: 100%; /* Ensure the image fills the height of the carousel */
        object-fit: cover;
        }

        .about{
            width: 30%;
        }
        .some{
            width: 60%;
        }
        .about p, .some p{
            text-align: justify;
        }

        /* Responsive adjustments for smaller screens */
        @media (max-width: 768px) {
            .about {
                width: 80%; 
                margin: 0 20px;
            }

            .carousel-caption h4 {
                font-size: 18px; 
                text-align: center;
            }

            /* Adjust carousel image size for tablets */
            .carousel-item img {
                height: 400px; 
                object-fit: cover;
            }
        }

        @media (max-width: 576px) {
            .about {
                width: 100%; 
            }

            /* Adjust carousel image size for phones */
            .carousel-item img {
                height: 250px;
                object-fit: cover; 
            }
        }
        .line{
            border: 2px solid blue;
            width: 18%;
        }
        .container{
            margin: 50px auto;
        }
        .container .line{
            margin-bottom: 50px;
        }

        /* Additional responsive styling for images */
        .carousel-item img {
            width: 100%;
            height: auto;
        }

        .about, .some {
        padding: 20px;
        /* background-color: #f9f9f9; */
        border-radius: 5px;
        }

    .line {
        border: 2px solid #0054A9;
        width: 50px; /* Adjusted for better visibility */
        margin-bottom: 20px;
    }
    /* Adjusting heading sizes for smaller screens */
    @media (max-width: 768px) {
        .about h2, .some h2 {
            font-size: 22px;
        }
        .about h4, .some h4 {
            font-size: 18px;
        }
        .line {
            width: 50%;
        }
    }
    .heading{
        background-color: #0054A9;
        color: white;
        font-size: 18px;
        padding: 9px;
        display: flex;
        justify-content: space-between; /* Ensures the span is at the end */
        align-items: center;
        /* border-radius: 10px; */
        cursor: pointer;
    }
    .heading:hover{
        background-color: #1FB5C7;
    }
    .heading span{
        margin-left: auto;
    }
    .toggle-content{
        display: none;
        text-align: center;
    }
    .card-title{
        font-weight: bold;
    }

    .read-more{
        text-decoration: none;
        color: white;
        font-weight: bold;  
        background-color: #0054A9;
        padding: 10px 25px;
        border-radius: 5px;
        
    }
    .read-more:hover{
        background-color: #1FB5C7;
        color: white;
    }
    .read-more-services{
        margin: 15px 0px;
        width: 20%;
        height: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .read-more i{
        color: white;
        /* border-left: 1px solid white; */
    }
    .services{
        /* display: flex; */
        background-color: #E3E8EC;
        padding: 30px 0px;
        transition: transform 0.5s ease-in-out;
    }
    .service-text{
        font-size: 15px;
    }
    .service-read{
        text-decoration: none;
        font-weight: bold;
        font-size: 13px;
        padding: 0px 4px;
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .service-read {
        color:#0054A9;
        /* text-decoration: underline; */
    }
    .service-card {
    position: relative;
    border: 1px solid black;
    overflow: hidden; /* Ensures the pseudo-element stays within the card bounds */
    z-index: 1;
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to bottom, #1FB5C7, #1FB5C7);
    transform: scaleY(0); /* Start hidden */
    transform-origin: top; /* Expand from top */
    transition: transform 0.5s ease-in-out; /* Smooth transition */
    z-index: -1; /* Ensure it stays behind the card content */
}

.card-body:hover{
    color: white;
}

.service-card:hover::before {
    transform: scaleY(1); /* Expand to full height */
}


    .service-image{
        clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
        /* border-collapse: collapse; */
    }
    /* .contect-us{
        height: 150px;
        border-top: 5px solid white;
        position: absolute;
    } */
    .leftside{
        /* width: 200px; */
        background-color:#1FB5C7; 
        margin-right: -85px;
        clip-path: polygon(0 0, 100% 0, 94% 100%, 0% 100%);
        padding: 30px 120px;
        /* position: absolute; */
    }
    .leftside h4{
        font-weight: bold;
        color: white;
    }
    .image{
        clip-path: polygon(8% 0, 100% 0, 100% 100%, 0 100%);   
    }
    .contect-btn{
        position: relative;
        top: 40%;
        right: -4%;
        width: 25%;
        height: 50px;
        /* border: 1px solid red; */
        transition: 0.4s ease;
    }
    .contect-btn button{
        border: none;
        background-color: #0054A9;
        padding: 8px ;
        /* width: 100%; */
    }
    .contect-btn a{
        /* width: 100%; */
        /* border: 1px solid  #0054A9; */
        text-decoration: none;
    }
    .contect-btn :hover{
        background-color: #1FB5C7;
        color: white;
    }
    /* .contect-btn a{
        color: white;
        text-decoration: none;
        border: 1px solid #0054A9;
        padding: 2px 5px;
        background-color: #0054A9;
    } */
    .contect-us {
    height: 150px;
    border-top: 5px solid white;
    background-image: linear-gradient(to bottom, #0054A9, #0054A9);
    background-size: 100% 0; /* Start with background hidden */
    background-position: top;
    background-repeat: no-repeat;
    transition: background-size 0.5s ease-in-out;
    /* position: absolute; */
    }
    .contect-us:hover{
        /* background-color: #0054A9; */
        background-size: 100% 100%;
    }
    .contect-btn{
        z-index: 1;
    }
    /* .contect-btn a {
        color: white;
        text-decoration: none;
        border: 1px solid #0054A9;
        padding: 5px 10px; 
        background-color: #0054A9;
        border-radius: 5px; 
        transition: background-color 0.3s;
        z-index: 5;
    }

    .contect-btn a:hover {
        background-color: #003e7e; 
    } */
    /* .available{
        background-color: #F3F5F7;
    } */
    /* .owl-carousel  .item{
        margin: 0px 13px;
        background-image: linear-gradient(to top, #0a0a0a, #0a0a0a);
        background-size: 100% 0;
        background-position: bottom;
        background-repeat: no-repeat;
        transition: background-size 0.5s ease-in-out;
    }
    .owl-carousel  .item:hover{
        background-size: 100% 100%;
    } */
    .owl-carousel .item {
    position: relative;
    overflow: hidden; /* Ensures that the overlay does not exceed the item bounds */
}

.owl-carousel .item img {
    display: block;
    width: 100%;
    height: 300px;
}

.item .owl-carousel {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to top, #0a0a0a, #0a0a0a);
    background-size: 100% 0;
    background-position: bottom;
    background-repeat: no-repeat;
    transition: background-size 0.5s ease-in-out;
}

.item:hover .owl-carousel {
    background-size: 100% 100%;
}

.test{
    height: auto;
    position: relative;
    background: linear-gradient(rgba(8, 28, 52, 0.6), rgba(8, 28, 52, 0.6)), url('../assets/images/new1.jpg');
    background-size: cover; /* Makes the image cover the entire container */
    background-position: center;
    background-repeat: no-repeat;
    padding: 20px; /* Add padding as needed */
    color: white;
}


/* .testimonial-box {
  padding-right: 50px;
}
.testimonial-box .content-box {
  background: #F9FAFB;
  padding: 40px 30px;
}
.testimonial-box .top {
  margin-bottom: 13px;
}
.testimonial-box .top .qoute-box,
.testimonial-box .top .title {
  display: table-cell;
  vertical-align: middle;
}
.testimonial-box .content-box .title h3 {
  font-family: 'Open Sans';
  color: #FBB12F !important;
  font-weight: bold;
  font-size: 18px;
}
.testimonial-box .content-box .qoute-box {
  font-size: 100px;
  color: #F6BA18;
  font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
  vertical-align: bottom;
  line-height: 0;
  position: relative;
  top: 13px;
  padding-right: 20px;
}
.testimonial-box .content p {
  color: #262626;
  margin: 0;
  margin-bottom: 10px;
}
.testimonial-box .content span {
  color: #3BC2CE;
  font-style: italic;
  display: block;
}
.testimonial-box .content img {
  width: 130px;
  height: 130px;
  border-radius: 50%;
  border: 4px solid #FFFFFF;
  margin-top: 20px;
  margin-bottom: -105px;
} */
.testimonials{
    background-color: rgba(8, 28, 52, 0.9);
    /* background: rgba(0, 0, 0, 0.6); */
}
.testimonials .item{
    justify-content: center;
    display: flex;
    align-items: center;
    margin: 80px 20px;
}
.testimonial-box .content-box {
    background: #F9FAFB;
    padding: 40px 30px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.testimonial-box .content-box .title h3 {
    font-family: 'Open Sans', sans-serif;
    color: #FBB12F;
    font-weight: bold;
    font-size: 18px;
}

.testimonial-box .content p {
    color: #262626;
    margin: 0;
    font-size: 14px;
}
.testimonial-cards h3{
    color: yellow;
}
.testimonial-cards p{
    text-align: justify;
}
/* .owl-dot span{
    width: 12px;
    height: 12px;
    border-radius: 50%;
} */
.contect-tbl input{
    height: 45px;
    background: rgba(0, 0, 0, .4);
    margin: 10px 0px;
    border: 1px solid grey;
    transition: 0.2s ease;
}
.contect-tbl input:focus, textarea:focus {
    box-shadow: 0 0 5px 2px rgba(0, 123, 255, 0.5); 
    outline: none; 
}
.contect-tbl input:hover, textarea:hover{
    box-shadow: 0 0 5px 2px  #1FB5C7;
    outline: none;
}
.contect-tbl input::placeholder{
    color: white;
    padding: 7px;
}
.contect-tbl textarea::placeholder{
    color: white;
    padding: 7px;
}
.contect-tbl textarea{
    margin: 10px 0px;
    height: 80px;
    background: rgba(0, 0, 0, .4);
    border: 1px solid grey;
    transition: 0.2s ease;
}
.contect-tbl #submit{
    margin: 10px 0px;
    padding: 8px 15px;
    border: none;
    /* border: 1px solid grey; */
    background-color: #0054A9;
    color: white;
    font-weight: bold;
    transition: 0.3s ease-in-out;
}
.contect-tbl #submit i{
    margin: 0px 0px 0px 8px;
}
.contect-tbl #submit:hover{
    background-color: #1FB5C7;
}
.contect-tbl input, textarea{
    color: white;
    background: rgba(0, 0, 0, .4);
}
.latest .oct-head{
    font-size: 50px;
}
.about a{
    color: #0054A9;
}

/* Initial state (hidden and off-screen) */
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

.carousel-caption .head {
    text-align: center; /* Center align the text */
    margin: 0 auto; /* Center text container horizontally */
    font-size: 1.5rem; /* Adjust font size if needed */
    color: #ffffff; /* Ensure text is visible */
    font-weight: bold; /* Make text stand out */
}

/* .leftside{
    position: absolute;
} */

/* .latest-news{
    background-color: #F3F5F7;
} */
</style>

<!-- </head>
<body> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/new1.jpg" class="d-block w-100" alt="Image" style="height: 500px; object-fit: cover; width: 100%;">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="head">Mutual Respect: We treat our partners and employees with respect.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/images/new3.jpg" class="d-block w-100" alt="Image" style="height: 500px; object-fit: cover; width: 100%;">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="head">Result Oriented: We believe in reaching the goal despite obstacles and setbacks.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/images/p1.jpg" class="d-block w-100" alt="Image" style="height: 500px; object-fit: cover; width: 100%;">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="head">Customer First: Customer satisfaction is our prime motto.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/images/portfolio.png" class="d-block w-100" alt="Image" style="height: 500px; object-fit: cover; width: 100%;">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="head">Exceeding Expectation: We thrive to perform above industry standards and norms.</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/images/p3.jpg" class="d-block w-100" alt="Image" style="height: 500px; object-fit: cover; width: 100%;">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="head">Agility In Our Response: We dynamically respond to the requirement.</h4>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <!-- About Us Section -->
            <div class="col-lg-6 col-md-8 col-sm-10 col-12 about mb-4 animate-card" data-direction="left">
                <h2>ABOUT US</h2>
                <div class="line"></div>
                <p><strong>Seaspeed Marine Management</strong> was incorporated in 2007 in UAE and has been serving all segments of the shipping industry since then. The company is run by a highly committed and professional team with a focus on adding value to clients by helping them efficiently manage shipping projects and create maximum benefits.</p>
                <a style="text-decoration: none; font-weight:bold" href="<?php echo base_url('ghm/about_us');?>">Read More...</a>
            </div>

            <!-- Core Values Section -->
            <div class="col-lg-6 col-md-8 col-sm-10 col-12 some mb-4 animate-card" data-direction="right">
                <h2>SOME OF OUR CORE VALUES</h2>
                <div class="line"></div>
                <div>
                    <h4 class="heading toggle-heading">OUR MISSION<span>+</span></h4>
                    <div class="toggle-content" style="display: flex; align-items: center;">
                        <img src="../assets/images/our-mission.png" alt="Images" style="float:left">
                        <p>To work as a specialized shipping services company, targeting to own and run main fleet as well as offshore vessels at strategic locations, and providing cost-effective, safe, and environmentally friendly operations, valuing all our employees as assets to the company.
                        <div class="read-more-services"><a href="<?php echo base_url('ghm/about_us').'?id=1';?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a></div>
                        </p>
                    </div>
                </div>
                <div>
                    <h4 class="heading toggle-heading" style="clear: both;">OUR VISION<span>+</span></h4>
                    <div class="toggle-content" style="display: flex; align-items: center;">
                        <img src="../assets/images/our-vision.png" alt="Images" style="float:left">
                        <p>To become a company of preferred choice while providing high quality and most cost-effective services to all our maritime partners, exercising complete transparency, high ability level, and fullest commitment as our priority.</p>
                        <div class="read-more-services"><a href="<?php echo base_url('ghm/about_us');?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>
                <div>
                    <h4 class="heading toggle-heading" style="clear: both;">CORE VALUES<span>+</span></h4>
                    <div class="toggle-content" style="display: flex; align-items: center;">
                        <img src="../assets/images/image-1.png" alt="Images" style="float:left">
                        <p>We actually started off as Crew Boat Owners in November 2007, and had three such vessels which we were operating...</p>
                        <div class="read-more-services"><a href="<?php echo base_url('ghm/about_us');?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                    </div>
                <div>
                    <h4 class="heading toggle-heading" style="clear: both;">OUR TEAM<span>+</span></h4>
                    <div class="toggle-content" style="display: flex; align-items: center;">
                        <img src="../assets/images/our-team.png" alt="Images" style="float:left">
                        <p>Our team consists of Main fleet and offshore shipping experts having Master Mariners, Chief Engineers, and members with good commercial acumen on board. The team has vast experience of operating in UAE, Qatar, Kuwait, Iraq, and Saudi Arabia in the Middle East region.</p>
                        <div class="read-more-services"><a href="<?php echo base_url('ghm/about_us');?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid services" style="padding-left: 0; padding-right:0;">
        <div class="container">
            <h2>OUR SERVICES</h2>
            <div class="line" style="margin-bottom: 7px;"></div>
            <P class="service-text">Our unique team has many years of experience in offshore vessel chartering and management. An in-depth understanding of ship operations and market dynamics helps us serving our customers better.</P>
            <div><i class="fas fa-arrow-right" style="color: #000;"></i><a href="<?php echo base_url('ghm/our_services');?>" class="service-read">READ MORE</a></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card service-card p-0 animate-card" data-direction="left" style="max-width: 100%; height:213px;">
                        <div class="row g-0">
                            <div class="col-md-4 p-0 service-image">
                                <img src="../assets/images/vessal.jpg" class="img-fluid rounded-start" alt="..." style="object-fit: cover; width: 100%; height: 200px;">
                            </div>
                            <div class="col-md-8 p-0">
                                <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                    <h5 class="card-title">OFFSHORE VESSEL CHARTERING SERVICES</h5>
                                    <div>
                                    <p class="card-text">Our unique team has many years of experience in offshore vessel chartering and management.</p>
                                    <p class="card-text mt-auto"><i class="fas fa-arrow-right" style="color: #000;"></i> <a href="<?php echo base_url('ghm/offshore_vessels');?>" class="service-read">READ MORE</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card service-card p-0 animate-card" data-direction="right" style="max-width: 100%; height:213px;">
                        <div class="row g-0">
                            <div class="col-md-4 p-0 service-image">
                                <img src="../assets/images/cargo.jpg" class="img-fluid rounded-start" alt="..." style="object-fit: cover; width: 100%; height: 200px;">
                            </div>
                            <div class="col-md-8 p-0">
                                <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                    <h5 class="card-title">TANKER CHARTERING & BROKING</h5>
                                    <p class="card-text">We work very closely with owners and charterers, endeavoring to secure the ideal vessel to meet the charterers' requirements.</p>
                                    <p class="card-text mt-auto"><i class="fas fa-arrow-right" style="color: #000;"></i> <a href="<?php echo base_url('ghm/tenker_chartering');?>" class="service-read">READ MORE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card service-card p-0 animate-card" data-direction="left" style="max-width: 100%; height:213px;">
                        <div class="row g-0">
                            <div class="col-md-4 p-0 service-image">
                                <img src="../assets/images/6.png" class="img-fluid rounded-start" alt="..." style="object-fit: cover; width: 100%; height: 200px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                    <h5 class="card-title">DRY CARGO CHARTERING & BROKING</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text mt-auto"><i class="fas fa-arrow-right" style="color: #000;"></i> <a href="<?php echo base_url('ghm/dry_cargo');?>" class="service-read">READ MORE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card service-card p-0 animate-card" data-direction="right" style="max-width: 100%; height:213px;">
                        <div class="row g-0">
                            <div class="col-md-4 p-0 service-image">
                                <img src="../assets/images/5.png" class="img-fluid rounded-start" alt="..." style="object-fit: cover; width: 100%; height: 200px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                    <h5 class="card-title">MARINE SURVEY & TECHNICAL CONSULTANCY SERVICES</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text mt-auto"><i class="fas fa-arrow-right" style="color: #000;"></i> <a href="<?php echo base_url('ghm/marine_survey');?>" class="service-read">READ MORE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card service-card p-0 animate-card" data-direction="left" style="max-width: 100%; height:213px;">
                        <div class="row g-0">
                            <div class="col-md-4 p-0 service-image">
                                <img src="../assets/images/portfolio.png" class="img-fluid rounded-start" alt="..."style="object-fit: cover; width: 100% !important; height:200px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                    <h5 class="card-title">VESSEL TACHNICAL MANAGEMENT SERVICES</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text mt-auto"><i class="fas fa-arrow-right" style="color: #000;"></i><a href="<?php echo base_url('ghm/vessel_technical');?>" class="service-read">READ MORE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card service-card p-0 animate-card" data-direction="right" style="max-width: 100%; height:213px;">
                        <div class="row g-0">
                            <div class="col-md-4 p-0 service-image">
                                <img src="../assets/images/new1.jpg" class="img-fluid rounded-start" alt="..."style="object-fit: cover; width: 100% !important; height:200px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                    <h5 class="card-title">VESSEL S&P AND DEMOLITION SERVICES</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text mt-auto"><i class="fas fa-arrow-right" style="color: #000;"></i><a href="<?php echo base_url('ghm/vessel_sale_purchase');?>" class="service-read">READ MORE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-flex contect-us p-0">
        <div class="container-fluid leftside">
            <h2>THE PERFECT SOLUTION FOR ALL YOUR BUSINESS NEEDS!</h2>
            <h4><i>Contact us now</i></h4>
        </div>
        <div class="contect-btn">
                <button><a href="<?php echo base_url('ghm/contect_us');?>">CONTACT US  <i class="fas fa-arrow-right"></i></a></button>
            </div>
        <div class="image" style="width: 70%;">
            <img src="../assets/images/6.png" width="100%" height="100%" style="object-fit: cover;" alt="Image">
        </div>
    </div>
    <!-- <hr> -->
        <div class="container-fluid available" style="padding-left: 0; padding-right:0;">
            <div class="container">
                <h2>AVAILABLE VESSEL</h2>
                <div class="line" style="margin-bottom: 7px;"></div>
                <P class="available-text" style="text-align:justify">Our unique team has many years of experience in main fleet & offshore vessel chartering and management. An in-depth understanding of ship operations and market dynamics helps us serving our customers better. As a shipping company, we help our close and direct charterers to get the most suitable vessels to match the exact project requirements than offering generalizes spec vessels.</P>
                <div><i class="fas fa-arrow-right" style="color: #000;"></i><a href="<?php echo base_url('ghm/available_vessels');?>" class="service-read">READ MORE</a></div>
            </div>
        </div>
        <section class="main-section h-charter swip" id="portfolio">
            <div class="container">
                <div class="row m-0 p-0">
                    <div class="col-sm-12">
                        <div class="owl-carousel charter-carousel-2 owl-theme p-0">
                        <div class="item"><a href="#"><img src="../assets/images/portfolio4.png" alt="Image 1" width="40%" height="300px"></a></div>
                        <div class="item"><a href="#"><img src="../assets/images/6.png" alt="Image 2" width="40%" height="300px"></a></div>
                        <div class="item"><a href="#"><img src="../assets/images/profit.png" alt="Image 3" width="40%" height="300px"></a></div>
                        <div class="item"><a href="#"><img src="../assets/images/portfolio2.png" alt="Image 4" width="40%" height="300px"></a></div>
                        <div class="item"><a href="#"><img src="../assets/images/portfolio3.png" alt="Image 5" width="40%" height="300px"></a></div>
                        <div class="item"><a href="#"><img src="../assets/images/portfolio.png" alt="Image 6" width="40%" height="300px"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid test">
                <div class=" container row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10 col-12 testimonials mb-4">
                                <h2>TESTIMONIALS</h2>
                                <div class="line"></div>
                                <div class="container testimonial-cards">
                                    <!-- Owl Carousel -->
                                    <div class="owl-carousel owl-theme">
                                        <!-- Testimonial Item 1 -->
                                    <div class="item">
                                        <div class="content-box">
                                            <div class="title">
                                                <h3>Bunker Surveys</h3>
                                            </div>
                                            <div class="content">
                                                <p>Seaspeed Marine team is highly professional and competent to carry out bunker surveys.</p>
                                            </div>
                                        </div>
                                    </div>
                                                <!-- Testimonial Item 2 -->
                                    <div class="item">
                                        <div class="content-box">
                                            <div class="title">
                                                <h3>Tanker Ship chartering</h3>
                                            </div>
                                            <div class="content">
                                                <p>SMM Chartering team brought value to our tanker voyage charter project.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="content-box">
                                            <div class="title">
                                                <h3>Marine consultancy</h3>
                                            </div>
                                            <div class="content">
                                                <p>We have used Seaspeed surveyors for many of our audits and inspection projects and they always been able to deliver beyond our expectations.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="content-box">
                                            <div class="title">
                                                <h3>Offshore vessels</h3>
                                            </div>
                                            <div class="content">
                                            <p>Seaspeed Marine team is highly professional and competent to carry out bunker surveys.</p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-10 col-12 request mb-4">
                    <h2>REQUEST A QUOTE</h2>
                    <div class="line"></div>
                        <form action="ghm/email" method="post">
                            <table style="width: 100%;" class="contect-tbl">
                                <tr>
                                    <td colspan="2">
                                        <input type="text" name="name" id="name" placeholder="Name" style="width: 100%;">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="text" name="email" id="email" placeholder="Email*" style="width: 100%;">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-right:10px">
                                        <input type="text" name="company" id="company" placeholder="Company" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="tel" name="phone" id="phone" placeholder="Phone Number" style="width: 100%;">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <textarea name="message" id="message" placeholder="Message" style="width: 100%;"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <!-- reCAPTCHA widget -->
                                        <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button type="submit" id="submit">SEND MESSAGE <i class="fas fa-arrow-right"></i></button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid latest-news">
                <div class="container">
                    <h2>LATEST NEWS</h2>
                    <div class="line" style="margin-bottom: 7px;"></div>
                    <p>Learn more about Seaspeed Marine Management LLC through our latest news and press releases.</p>
                    <div><i class="fas fa-arrow-right" style="color: #000;"></i><a href="<?php echo base_url('ghm/news');?>" class="service-read">READ MORE</a></div>
                    <div class="container latest d-flex">
                        <!-- <div class="container"> -->
                            <div class="oct-30" style="width: 50%;">
                                <h4><span class="oct-head">30</span>/oct</h4>
                                <p>We are humbled to launch our new website of Seaspeed Marine Management LLC. This new website is dynamic, giving a better glimpse into our service portfolio and vessels available. We hope to interact with our customers better.</p>
                            <!-- </div> -->
                        </div>
                        <!-- <div class="container"> -->
                            <div class="oct-20" style="width:50%;">
                                <h4><span class="oct-head">20</span>/oct</h4>
                                <p>Successfully completed medium term charter of a tug which was deployed for towage of cargo barge in Arabian Gulf. Look forward to close many more.</p>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="request-qoute has-overlay">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-6">
				<div class="sec-padding has-overlay">
					<div class="sec-title">
						<h2><span>Testimonials</span></h2>
					</div>
					<div class="testimonial-box with-carousel">
						<div class="owl-carousel owl-theme">
							<div class="item">
								<div class="content-box">
									<div class="top">
										
										<div class="title">
											<h3>Bunker Surveys</h3>
										</div>
									</div>						
									<div class="content">							
										<p>Seaspeed Marine team is highly professional and competent to carry out bunker surveys.</p>
										
									</div>
								</div>
							</div>
							<div class="item">
								<div class="content-box">
									<div class="top">
										
										<div class="title">
											<h3>Tanker Ship chartering</h3>
										</div>
									</div>						
									<div class="content">							
										<p>SMM Chartering team brought value to our tanker voyage charter project and their team came across and enthusiastic and knowledgeable. </p>
									
									</div>
								</div>
							</div>
							<div class="item">
								<div class="content-box">
									<div class="top">
										
										<div class="title">
											<h3>Marine consultancy</h3>
										</div>
									</div>						
									<div class="content">							
										<p>We have used Seaspeed surveyors for many of our audits and inspection projects and they always been able to deliver beyond our expectations. </p>
									
									</div>
								</div>
							</div>
							<div class="item">
								<div class="content-box">
									<div class="top">
										
										<div class="title">
											<h3>Offshore vessels</h3>
										</div>
									</div>						
									<div class="content">							
										<p>SMM has been operating offshore vessels for past many years and have good experience and market knowledge to operate complex contracts. I will all the best to them.</p>
								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="sec-padding">
					<div class="sec-title">
						<h2><span>request a quote</span></h2>
					</div>
					<form action="includes/sendemail.php" method="post" class="contact-form">
						<div class="form-grp full">
							<input type="text" name="name" placeholder="Name">
						</div>
						<div class="form-grp full">
							<input type="text" name="email" placeholder="Email*">
						</div>
						<div class="form-grp-box">
							
							<div class="form-grp half">
								<input type="text" name="company" placeholder="Company">
							</div>
							<div class="form-grp half">
								<input type="text" name="phone" placeholder="Phone Number">
							</div>
							
						</div>
						<div class="form-grp">
							<textarea name="message" placeholder="Message"></textarea>
						</div>
							<div class="form-grp">
						    <div class="g-recaptcha" data-sitekey="6LdhAr4eAAAAAKMsMrp_QXGCEkSwfB0WctN-8zrr" data-callback="verifyCaptcha"></div>
              <div id="g-recaptcha-error"></div>
                <input type="text" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha" style="visibility: hidden;height: 5px;">
            <br>
            </div>
						<button type="submit" class="thm-btn">Send Message<i class="fa fa-arrow-circle-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section> -->

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Get all toggle contents and headings
            const allToggleContents = document.querySelectorAll('.toggle-content');
            const allHeadings = document.querySelectorAll('.toggle-heading');

            // Ensure only the first toggle content is displayed on load
            if (allToggleContents.length > 0) {
                allToggleContents.forEach((content, index) => {
                    content.style.display = index === 0 ? 'block' : 'none'; // Show only the first content
                });
            }

            // Add event listeners to all toggle headings for click events
            allHeadings.forEach((heading, index) => {
                heading.addEventListener('click', () => {
                    allToggleContents.forEach((content, contentIndex) => {
                        if (contentIndex !== index) {
                            content.style.display = 'none'; // Hide other contents
                        }
                    });

                    // Toggle the clicked content
                    const content = heading.nextElementSibling;
                    if (content.style.display === 'none' || !content.style.display) {
                        content.style.display = 'block'; // Show the content
                    } else {
                        content.style.display = 'none'; // Hide the content
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(){
        $(".charter-carousel-2").owlCarousel({
            loop: true,        // Enables infinite loop
            margin: 10,        // Adds space between items
            nav: false,
            dots: false,         // Shows navigation arrows
            autoplay: true,    // Enables automatic sliding
            autoplayTimeout: 3000, // Time in ms for each slide
            autoplayHoverPause: true, // Pauses on hover
            responsive: {
                0: {
                    items: 1     // Number of items for small screens
                },
                600: {
                    items: 2     // Number of items for medium screens
                },
                1000: {
                    items: 3     // Number of items for larger screens
                }
            }
        });
        });
    </script>
        <script>
            $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop: true,            // Allow carousel to loop
                margin: 10,            // Space between items
                nav: false,             // Show next/prev buttons
                dots: true,           // Show dots
                items: 1,              // Display one item at a time
                autoplay: true,        // Enable autoplay
                autoplayTimeout: 3000, // Time between slides (in ms)
                autoplayHoverPause: true // Pause autoplay on hover
            });
            });
        </script>
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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
