
    <style>
        .footer-container-1{
             height:740px;
             width:100%;
             background-color:#0b3d68 ;
             display:flex;
             align-items: center;
             padding:80px;
             padding-top:20px;
             /* margin-bottom:20px; */
        }
        .footer-container-2{
            background-color:#10151B ;
            padding: 25px 67px;
            color:white;
            font-size: 16px;
            justify-content: space-around;
            justify-content: space-between;
            display:flex;
            align-items: center;
            margin-top:3px;
            margin-bottom:3px;
            
        }
        .footer-columns{
            height:500px;
            width:25%;
            margin-right:20px ;
            color:white;

        }
       
        p{
            padding:0;
            margin:0;
        }
        .sty{
            margin-left:20px;
        }
        .content{
            text-align: justify;
            color:white;
            margin-top:25px;
        }
        a{
            text-decoration: none;
            display: block;
            color:white;
        }
        a:hover{
            color:#1FB5C7;
        }
        .link{
            text-decoration: none;
            display: block;
            color:#1FB5C7;
            line-height: 60px;

        }
        .underline{
            border:1px solid #1FB5C7 ;
            width:50px;
            margin-bottom:20px;
        }
        ul{
            list-style-type: none;
        }
        li{
           padding:0px;
           margin: 0px;
           line-height: 35px;
        }
        .heading-container{
            margin-left:30px;
        }
        .icon-box{
            float:left;
            margin-right:10px;
            font-size:20px;
            color:#1FB5C7;
        }
        .last-coloumn{
            width:40%;
        
        }
        .coloumn-2{
            width:30%;
        }
        .coloumn-3{
            width:20%;
        }
        .text-box{
            margin-left:30px;
            text-align: justify
        }
        .icon-container{
            height:auto;
            align-items:center;

        }
        
         .icon{
            font-size:40px;
            border-radius:50%;
            margin:2px;
         }
         .head-ing{
            font-style:italic;
         }
         .whatsapp-icon {
        position: fixed;
        bottom: 20px; 
        right: 15px;  
        font-size: 28px; 
        background-color: #25D366; 
        color: white; 
        padding: 6px;
        border-radius: 60%;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1000; 
        cursor: pointer;
        transition:0.3s ease;
        animation: zoomEffect 1.5s infinite;
    }
    @keyframes zoomEffect {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}
.email-text p{
    font-size: 15px;
}

.footer-links li{
    border: none;
}

    .whatsapp-icon:hover {
        /* background-color:rgb(49, 64, 176);  */
        background-color: #25D366; 
        color:rgb(39, 39, 40);
        padding: 8px;
        border-radius: 50%;
        font-size: 30px; 
    }       
    

    </style>
</head>
<body>
    <footer>
    <div class="footer-container">
        <div class="footer-container-1">
         <div class="footer-columns">
            <div>
                <h1 style="color:blue">Seaspeed</h1>
                <P class="sty">Marine Management LLC</P>
                 <p class="content">
                    Seaspeed Marine Management was incorporated in 2007 in UAE and have been serving all segments of shipping industry since then. The company is run by a highly committed and professional team where our target...
                 </p>
                 <p><a class="link" href="<?php echo base_url('ghm/about_us');?>">Read More >></a></p>
                 <div class="icon-container">
                 <i class="fa-brands fa-square-facebook icon"></i>
                 <i class="fa-brands fa-square-twitter icon"></i>
                 <i class="fa-brands fa-linkedin icon"></i>
                 </div>
            </div>
         </div>
         
         <div class="footer-columns coloumn-2">
            <div class="heading-container">
            <h3 class="head-ing">Our Services</h3>
            <div class="underline"></div>
            </div>
            <div class="footer-links">
                <ul>
                    <li>
                        <a href="<?php echo base_url('ghm/offshore_vessel');?>">Offshore Vessel Chartering Service</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ghm/tanker_chartering');?>">Tanker Chartering & Broking</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ghm/marine_survey');?>">Marine Survey & Technical Consultancy Services</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ghm/vessel_technical');?>">Vessel Technical Management</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ghm/vessel_sale_purchase');?>">Vessel S&P and Demolition</a>
                    </li>
                </ul>
            </div>
         </div>
         <div class="footer-columns coloumn-3">
            <div class="heading-container">
            <h3 class="head-ing">Quick Links</h3>
            <div class="underline"></div>
            </div>
            <div class="footer-links">
                <ul>
                    <li>
                        <a href="<?php echo base_url('ghm/home');?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ghm/about_us');?>">About Us</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ghm/our_services');?>">Our Services</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ghm/available_vessels');?>">Available Vessels</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ghm/completed_projects');?>">Completed Projects</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ghm/blog');?>">Blog</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ghm/news');?>">News</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('ghm/contect_us');?>">Contact Us</a>
                    </li>
                </ul>
            </div>
         </div>
         <div class="footer-columns last-coloumn ">
            <div class="heading-container">
            <h3 class="head-ing">Contact Us</h3>
            <div class="underline"></div>
            </div>
            <div class="footer-links">
                <ul>
                    <li>
                         <div class="icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="text-box">
                                <p class="color" style="color: white;">
                                    <strong>Head office:</strong>
                                1104, Mohammed Al Mulla Building (11th Floor), Al Ittihad Road, (near Ansar Mall) PO Box 32658, Sharjah U.A.E.
                            </p>
                            </div>
                    </li>
                    <li>
                         <div class="icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="text-box">
                                <p style="color: white;">
                                    <strong>Branch office:</strong>
                                    Seaspeed Marine FZE, Unit No. 11, D Block, Phase 2, Fujairah Free Zone, Fujairah, UAE.
                                    </p>
                            </div>
                    </li>
                    <li>
                         <div class="icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="text-box">
                                <p style="color: white;">
                                    <strong>Branch office:</strong>
                                    44, 1st Floor, Emirates Tower, Hamdan Bin Mohammed Street, Al Danah, Abu Dhabi</p>
                                    </p>
                            </div>
                    </li>
                    <li>
                         <div class="icon-box">
                         <i class="fa-solid fa-phone"></i>
                         </div>
                            <div class="text-box">
                                <p style="color: white;">
                                <strong>+97165638938</strong>
                               </p>
                            </div>
                    </li>
                    <li>
                         <div class="icon-box">
                         <i class="fa-solid fa-envelope"></i>
                         </div>
                            <div class="text-box email-text">
                                <p>
                                <a href="https://mail.google.com/">offshore@cspeed.ae(For Offshore Inquiries)</a>
                                </p>
                            </div>
                    </li>
                    <li>
                         <div class="icon-box">
                         <i class="fa-solid fa-envelope"></i>
                         </div>
                            <div class="text-box email-text">
                                <p>
                                <a href="https://mail.google.com/">offshore@cspeed.ae(For Offshore Inquiries)</a>
                                </p>
                            </div>
                    </li>
                    <li>
                         <div class="icon-box">
                         <i class="fa-solid fa-envelope"></i>
                         </div>
                            <div class="text-box email-text">
                                <p>
                                <a href="https://mail.google.com/">chartering@cspeed.ae(For Tanker Inquiries)</a>
                                </p>
                            </div>
                    </li>
                    <li>
                         <div class="icon-box">
                         <i class="fa-solid fa-envelope"></i>
                         </div>
                            <div class="text-box email-text">
                                <p>
                                <a href="https://mail.google.com/">chartering@cspeed.ae(For Tanker Inquiries)</a>
                                </p>
                            </div>
                    </li>
                    <li>
                         <div class="icon-box">
                         <i class="fa-solid fa-earth-americas"></i>
                         </div>
                            <div class="text-box email-text">
                                <p>
                                <a href="#">www.seaspeedmarine.com</a>
                                </p>
                            </div>
                    </li>
                </ul>
            </div>
         </div>
        </div>
        <div class="footer-container-2 ">
           <div>
            <p>copyright@seaspeedmarine 2024. All rights reserved.</p>
           </div>
           <div >
            <p >created by: WEBEVERON TECHNOLOGIES</p>
           </div>
        </div>
    </div>
    <div class=" whatsapp-icon">
        <a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp icon"></i></a>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>