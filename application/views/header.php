<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/46863e3ec7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@400;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="../assets/styles/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Home</title>
    <style>
        .header-section {
            display: flex;
        flex-direction: column;
        }
        .navbar-1 {
            display: flex;
            background-color: #173957;
            color: white;
            position: absolute;
            justify-content: space-between;
            padding: 13px;
            align-items: top;
            height:100px;
            position:relative;
            margin-top:0px;
            /* justify-content: space-around; */
            /* z-index: 1; */
        }
        /* .nav {
            display: flex; */
            /* margin-left: 100px; */
            /* gap: 60px;
        } */

         .ghm-logo img{
            width: 13%;
         }
         .ghm-logo a{
            /* width: 9%; */
            /* margin: 0px 30px 10px 30px; */
            position: relative;
            top: -15%;
            left: 3%;
         }
        .menu {
            margin: 0;
            width: 100%;
            height: 53px;
            display:flex;
            position: absolute;
            /* margin-top:100px; */
            align-items: center;
            z-index: 2;
            justify-content: center;
            align-items: center;
            /* overflow: visible; */
            background-color: #f4f4f4;
            /* margin-top:-100px ; */
            position: relative;
            /* margin-lrft:-20px; */
            
        }
        body {
            font-family: 'Open Sans', sans-serif;
             font-size: 14px; 
          line-height: 26px; 
         letter-spacing: .02em; 
        }
        .navbar-custom-width {
            max-width: 100%;
            height: 20px;
            align-items: center;
            font-size: 17px;
            font-weight: bolder;
            background-color: #f4f4f4;
            /* margin-left:50px; */
            /* text-align:center; */
            /* position: absolute; */
            margin:auto;
        
        } 
       
        .btn{
            /* color:black; */
            /* font-size: 20px; */
            text-align: center;
            justify-content: center;
        }
        p,h1{
            margin:0;
            padding:0;
        }
        .sty{
            margin-left:20px;
        }
        /* .menu-2{
            background-color:#0052a9;  
            height: 70px;
            width: 25%;
           display: flex;
           font-weight: bolder;
           margin:0;
           align-items: center;
           justify-content: center;
           clip-path: polygon(17% 0, 100% 0, 100% 100%, 0 100%);
           margin-left:-40px;
           } */
   
        /* .menu-1{
            background-color: #f4f4f4;
            height: 70px; 
            width: 80%;
            display: flex;
            font-weight: bolder;
            margin: 0;
            align-items: center;
            justify-content: center;
            clip-path: polygon(0 0, 100% 0, 95% 100%, 0 100%);
            position: relative; 
            z-index: 3  ;

        } */
        /* menu-1 ul{
            background-color: #f4f4f4;
        } */
        /* ul{
            /* border:1px solid white; */
            /* text-align:center; */
            /* justify-content: center; 
        } */
        li{
            /* border-right: 2px solid grey; */
            padding: 0px 10px;           
        }
        .header-icon{
            font-size:30px;
            text-align: center;
            align-items: center;
            margin-right:20px;
            margin-top:20px;
        }
        .head{
            display:flex;
        }
        
        .button{
            text-align: center;
            justify-content: center;
            align-items: center;
            margin-right:100px;
            height:70px;
            padding-top:9px;
            width:auto;
            padding-right: 10px;
            border:none;  
        }
        /* .contact-button{
            transition: 0.3s ease-in-out;
        } */
        /* .contact-button:hover{
            background-color: rgb(79, 174, 212);
            color:white;
        } */
        /* .contact-button a:hover{
            color: white;
        } */


/* .contact-btn {
    list-style-type: none;
    margin: 0;
    padding: 0;
} */


/* .contact-button {
    text-align: center;
    padding-left:90px;
    border-right:none;
    border-top:2px solid white;
    border-bottom:2px solid white;
    border-right:2px solid white;    
} */
/* .btn{
    color:white;
    font-weight: bolder;
    font-size: 19px;
    padding:8px 3px 8px 0px;
    text-align: center; */
    /* border:none; */
/* } */
.nav-item{
    position:relative;
}
.dropdown-menu{
    position:absolute;
}
.navbarDropdown{
    position: absolute;
    z-index: 4;
    border: 1px solid black;
}
.navbarDropdown li:hover{
    color: white;
}
.dropdown-menu  li{
    /* border:1px solid black; */
    padding:6px;
    width:100%;
    background-color: #f4f4f4;
    border-bottom:2px solid white;
    /* color:white; */
}
.dropdown-menu {
    border:none;  
    width:300px;      

}

  .navbar-nav .nav-link:hover {
        color: #0052a9;
            /* color: white; */
            border-radius: 5px;
        }

   .nav-item.dropdown:hover .dropdown-menu {
    display: block; /* Ensures dropdowns show on hover */
    margin-top: 0; /* Prevents flickering */
}    
.dropdown-menu a:hover {
   /* padding:7px; */
    background-color:#428ddc ;
    color:white !important;
    border-bottom:2px solid white;

} 
.dropdown-menu li:hover {
    background: linear-gradient(135deg, #173957, #B0E0E6);
    margin-bottom:1px solid white;

    color:white !important;
    font-weight:bolder !important;
    /* font-size:20p;x; */

}
.arrow{
    /* font-weight:bold; */
    font-size:18px;
    font-weight:bolder;
    margin-right:8px;
    margin-left:-10px;
}

/* ----------------------------------------------------- */
.nav-item .nav-link {
    color: #173957;
    font-weight: bold;
    transition: color 0.3s, background-color 0.3s;
    padding: 5px 15px;
    /* border-radius: 5px; */
      background-color: #f4f4f4;
    /* color: #0052a9; */
}
.nav-item .nav-link:hover{
 /* background-color:lightblue; */
 /* background: linear-gradient(90deg, #1FB5C7, #177E96); */
 /* background: linear-gradient(120deg, #173957, #1E90FF); */
color:white !important;
background: linear-gradient(120deg, #173957,rgb(122, 165, 192));
/* background: linear-gradient(135deg, #173957, #B0E0E6); */
/* background: linear-gradient(135deg, #173957, #B0E0E6); */
/* background: linear-gradient(120deg, #173957, #ADD8E6); */


color:white;



  
}




.dropdown-menu {
    border-radius: 5px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    /* color:white; */
}

.dropdown-menu .dropdown-item:hover {
    /* background-color: #0052a9; */
    background: linear-gradient(135deg, #173957, #B0E0E6);

    /* color: white ; */
    border-radius: 5px;
}

.menu {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Style for the dropdown menu */
.dropdown-menu {
    opacity: 0; /* Initially hidden */
    visibility: hidden; /* Initially hidden */
    transition: opacity 0.3s ease, visibility 0s 0.3s; /* Smooth transition */
    position: absolute;
    background-color:hsla(0, 0.00%, 95.70%, 0.38);
    width: 300px;
    border-radius: 5px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

/* When the dropdown is shown */
.nav-item.dropdown:hover .dropdown-menu {
    opacity: 1; /* Show the dropdown */
    visibility: visible; /* Make it visible */
    transition: opacity 0.3s ease, visibility 1s 1s; /* Smooth transition */
    transition: opacity 0.5s ease-in-out, visibility 0.2s 0.5s;

}
.second{
    width: 60%;
    position: relative;
    top: 10%;
    right: 15%;
    /* border: 1px solid white; */
    /* gap: 10%; */
    justify-content: space-between;
}
.heading-time{
    width: 100%;
    /* border-right: 1px solid white; */
    /* padding: 0px 20px; */
    justify-content: space-between;
    margin: 0px 10px;
}
.heading-call{
    /* border: 1px solid red; */
    width: 60%;
    justify-content: space-between;
}


 </style>
</head>
<body>
    <div class=" container-fluid p-0 header-section">
        <div class="container-fluid p-0 d-flex navbar-1">
            <div class="ghm-logo">
                <!-- <h1 >Seaspeed</h1>
                <P class="sty" style="color: white;">Marine Management LLC</P> -->
                <a href="<?php echo base_url('ghm/home');?>"><img src="../assets/images/ghm1.png" alt="Logo"></a>
                <!-- <h4>Globle</h4>
                <h3>Hour Marine</h3> -->
            </div>
            <div class="d-flex second">
                <div class="d-flex heading-time">
                    <div class="icon mt-4">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div style="text-align: justify;" class="mt-2">
                        <p style="color: white;"><b>MON-Fri :</b> 9:00 AM - 6:00 PM</p>
                        <p style="color: white;"><b>Sat: </b>9:00 AM - 2:00 PM</p>
                        <p style="color: white;">Sunday Closed</p>
                    </div>
                </div>
                <div class="d-flex heading-call">
                    <div class="icon mt-4">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div style="text-align: justify;" class="mt-2">
                        <p style="color: white;"><b>Call Us:</b></p>
                        <H5><i>+97165638938</i></H5>
                    </div>
                </div>
            </div>
            <!-- <div class="nav">
                <div class="head" style="background-color: #173957">
                    <div class="header-icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div class="head-time" style="text-align: justify;">
                        <p style="color: white;"><b>MON-Fri :</b> 9:00 AM - 6:00 PM</p>
                        <p style="color: white;"><b>Sat: </b>9:00 AM - 2:00 PM</p>
                        <p style="color: white;">Sunday Closed</p>
                    </div>
             </div>
             <div class="head" style="background-color: #173957">
                <div class="header-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div style="text-align: justify;">
                    <p style="color: white;"><b>Call Us:</b></p>
                    <H5><i>+971 65638938</i></H5>
                </div>
             </div>

            </div> -->
        </div>
<!-- ---------------------------------------------------------------------- -->
        <div class="menu">
             <!-- <div class="menu-1"> -->
                <!-- <div> -->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom-width">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?php echo base_url('ghm/home');?>"> <i class="fa-solid fa-house"></i> HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('ghm/about_us');?>"> <i class="fa-solid fa-info-circle"></i> ABOUT US</a>
                                </li>
        
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="<?php echo base_url('ghm/our_services');?>" id="navbarDropdown" role="button" aria-expanded="false">
                                    <i class="fa-solid fa-briefcase"></i> OUR SERVICES
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/offshore_vessel');?>"><span class="arrow">></span> Offshore Vessel Chartering</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/tanker_chartering');?>"><span class="arrow">></span> Tanker Chartering & Broking</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/dry_cargo');?>"><span class="arrow">></span> Dry Cargo Chartering & Broking</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/marine_survey');?>"><span class="arrow">></span> Marine & Technical Consultancy</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/vessel_technical');?>"><span class="arrow">></span> Vessel Technical Management</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/vessel_sale_purchase');?>"><span class="arrow">></span> Vessel S&P and Demolition</a></li>
                                    </ul>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="<?php echo base_url('ghm/available_vessels');?>" id="navbarDropdown" role="button" aria-expanded="false">
                                    <i class="fa-solid fa-anchor"></i> AVAILABLE VESSELS
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/offshore_vessels');?>"><span class='arrow'>> </span>Offshore Vessels</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/tanker_vessels');?>"><span class='arrow'>> </span>Tanker Vessels</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/bulk_carriers');?>"><span class='arrow'>> </span>Bulk Carriers</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/vessels_for_sale');?>"><span class='arrow'>> </span>Vessels For Sale</a></li>
                                    </ul>
                                </li>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="<?php echo base_url('ghm/completed_projects');?>" id="navbarDropdown" role="button" aria-expanded="false">
                                    <i class="fa-solid fa-check-circle"></i> COMPLETED PROJECTS
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/offshore_projects');?>"><span class='arrow'>> </span>Offshore Projects</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/tanker_projects');?>"><span class='arrow'>> </span>Tanker Projects</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/bulk_carrier_projects');?>"><span class='arrow'>> </span>Bulk Carrier Projects</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/consultancy_projects');?>"><span class='arrow'>> </span>Consultancy Projects</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url('ghm/technical_management');?>"><span class='arrow'>> </span>Technical Management</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('ghm/blog');?>"> <i class="fa-solid fa-blog"></i> BLOG</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('ghm/news');?>"><i class="fa-solid fa-newspaper"></i> NEWS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('ghm/contect_us');?>"><i class="fa-solid fa-envelope"></i> CONTACT US</a>      
                                </li>
                            </ul>
                           
                        </div>
                        </nav>
           </div>
        </div>
    </div>
    <div>
        
    </div>
    <script>
//         document.addEventListener("DOMContentLoaded", function () {
//     const navLink = document.querySelector(".nav-link");
//     const dropdownMenu = document.getElementById("servicesDropdown");

//     navLink.addEventListener("mouseenter", function () {
//         dropdownMenu.style.display = "block";
//     });

//     navLink.addEventListener("mouseleave", function () {
//         dropdownMenu.style.display = "none";
//     });

//     dropdownMenu.addEventListener("mouseenter", function () {
//         dropdownMenu.style.display = "block";
//     });

//     dropdownMenu.addEventListener("mouseleave", function () {
//         dropdownMenu.style.display = "none";
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
    // Add hover effect to dropdowns
    document.querySelectorAll(".nav-item.dropdown").forEach(function (item) {
        item.addEventListener("mouseenter", function () {
            const dropdownMenu = this.querySelector(".dropdown-menu");
            if (dropdownMenu) dropdownMenu.style.display = "block";
        });

        item.addEventListener("mouseleave", function () {
            const dropdownMenu = this.querySelector(".dropdown-menu");
            if (dropdownMenu) dropdownMenu.style.display = "none";
        });
    });

    // Highlight the active menu
    const currentPage = window.location.href;
    document.querySelectorAll(".nav-link").forEach(function (link) {
        if (link.href === currentPage) {
            link.parentElement.classList.add("active");
        }
    });
});


    </script>