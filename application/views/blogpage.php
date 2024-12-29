
    
    <link rel="stylesheet" href="../assets/styles/style.css">

    <style>
        /* *{
            margin:0;
            padding:0;
        } */
        .blog_page{
            width:100%;
             height:auto;
            padding:0;
            /* border:1px solid black; */
        }
        @media (min-width: 576px) {
            .blog_page {
                margin-top: 2rem;
                margin-bottom: 2rem;
            }
        }
            @media (min-width: 768px) {
            .blog_page {
                margin-top: 3rem;
                margin-bottom: 3rem;
            }
        }
        .blog_page_conatiner{
            /* border:1px solid red; */
            height:auto;
            width:90%;
            display:flex;
            padding:0px;
            gap:1rem;
            margin:auto;
        }

        @media (min-width: 576px) {
            .blog_page_container{
                margin-top: 2rem;
                margin-bottom: 2rem;
            }
        }
            @media (min-width: 768px) {
            .blog_page_container {
                margin-top: 3rem;
                margin-bottom:3rem;
            }
        }    
        .blog_container{
            width:75%;
            text-align:justify;
            overflow-y: auto;
            padding-right: 10px;
            height:auto
           
        }
        .form-page{
            width: 32%;
            background-color: #1278B9;
            color: #333333;
            position: sticky;
            top: 20px;  
            height: auto;
            padding: 1rem;
            max-height: calc(100vh - 40px); 
            overflow-y: auto;
            
           } 
.heading_container{
    margin-bottom:35px;
}    
.form-head{
    margin:10px;
    color:white;


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
.image-box{
    border:1px solid black;
    height:450px;
    width:100%;
    margin-top:50px;
    margin-bottom:30px;
    /* color:#333333; */
}     
.lists{
      /* text-align:center;
       */
       align-items:center;
       /* line-height: 10px; */
}
.arrow-container{
        color:blue;
        font-size:30px;
        
}
.arrow-container i{
    margin: 10px 0px ;
}
.tex{
    font-size:20px;
    align-items:center;
    margin-top:15px;
    margin-left:10px;
    /* padding:0px; */
    /* line-height:0px; */
    
}
.phara{
    font-size:18px;
}
.undr{
    width:100%;
    border:3px solid black;
    margin-bottom:5px;
    
}
.animate-card {
    opacity: 0;
    transform: translateY(100px); /* Slide in from the right by default */
    transition: all 0.8s ease-in-out;
}

/* Active state (visible and on-screen) */
.animate-card.active {
    opacity: 1;
    transform: translateX(0); /* Reset transform */
}       
    </style>

    <section>
        <div class="container-fluid blog_page">
            <div class="container-fluid blog_page_conatiner">
               <div class=" blog_container">
                    <div class="heading_container">
                        <h2>BLOG</h2>
                        <div class="underline_"></div>
                    </div>
                    <div class="image-box">
                        <img src="../assets/images/blog1.jpg" alt="image"style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <div class="blog-text">
                        <h2>
                        Do you know that a proper bunker survey can save you thousands of dollars?
                        </h2>
                        <p class="phara">First, let’s understand what happens during a bunker survey</p>
                        <p class="phara">In a typical case, a bunker surveyor will board the ship, supervise bunkering operation, take soundings of bunker tanks, carry out bunker calculations and compare his figures with Chief Engineer and bunker barge.</p>
                        <p class="phara">Many a times, they will find that there is a difference between bunker barge supplied and vessel received quantities.</p>
                        <p class="phara">Many a times, they will find that there is a difference between bunker barge supplied and vessel received quantities.</p>
                        <p class="phara">Of course, you know this already, right?</p>
                        <p class="phara">But what most ship owners may not realize is that the expertise of a bunker surveyor lies in how they handle such discrepancies</p>
                        <p class="phara">You see….</p>
                        <p class="phara">Discrepancies may arise from various factors such as incorrect soundings of tank (weather conditions), bunker density, temperature or actual short supplies.</p>
                        <p class="phara">That’s where a good bunker surveyor steps in and identifies the cause of such differences and sorts out such matters in a timely and amicable manne</p>
                        <p class="phara">The other important thing is to maintain complete transparency - keeping all parties, including client and club informed on the shortage of quantity.</p>
                        <p class="phara">We also believe that the role of a bunker surveyor is NOT to negotiate with barge and reach a settlement, but to put facts on the table for all parties to take a call and find a way forward.</p>
                        <p class="phara">Sometimes, a bunker surveyor can discover additional bunker quantity on board which may have not been disclosed to the office due to whatever reasons, especially at the time of on hire and off hire of a vessel.</p>
                        <p class="phara">This can save companies thousands of dollars!</p>  
                        <p class="phara">We know all this because we have conducted many bunker surveys for our clients across all UAE ports. Our expertise lies in conducted transparent and timely surveys such as:</p>                
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Bunker quantity Survey,</p> 
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Audit ans investigation for quality, Didcrepancy or Loss,</p> 
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">221B Bunker Detective Survey,</p> 
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">On hire & off ROB Survey,</p> 
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Bunker Samplinf Survey,</p> 
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">De-bunkering Survey.</p> 
                        </div> 
                    </div>
                    <p class="phara">So next time when you are looking for a bunker surveyor, we invite you to have a quick call with our team to see how we can help you save time and costs.</p>
                    <p class="phara">You can drop us a note on:</p>
                    <p class="phara"> Email: <a href="#">survey@cspeed.ae</a>
                    <div class="undr"></div>
                    <div class="undr"></div>
                    <div class="image-box">
                        <img src="../assets/images/blog2.jpeg" alt="image"style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <h2>Purifier Room Fire Investigation: Our Observations</h2>
                    <p class="phara">A small fire which broke out in purifier room, quickly spread over and engulfed the entire purifier room. The severity of the fire can be guessed from following damages:</p>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Complete purifier room gutted / severely heat and smoke affected, to include all machinery, cabling, starting / monitoring panels, insulation etc,</p>
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">1st deck plating, just above purifier room, got distorted / deformed,</p>
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Valves / piping and wiring of bunker service tanks gutted from overheating,</p>                            
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Several engine room smoke detectors found wasted / melted,</p>                            
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">All engine room spaces and machinery (to include Main and Auxiliary Engines) fouled by the application of</p>
                            <p class="phara">the CO2 extinguishing system and smoke.</p>    
                        </div> 
                    </div>
                    <p class="phara">The vessel was left in-operational due this fire for more than 50 days with partial cargo on board as the incident took place in discharge port.</p>
                    <p class="phara">Now the role of an attending surveyor on behalf of H&M underwriters is crucial to carry out following in such a case:</p>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">A proper and detailed investigation of the root cause of fire and what type of corrective actions and,</p> 
                            <p class="phara">preventive measures were taken,</p>
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Review of the cost of repairs and loss of hire which are big holes in the pocket of both underwrites as well as</p> 
                            <p class="phara">the operators as the vessel is rendered on down time.</p>
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">A proper and detailed investigation of the root cause of fire and what type of corrective actions and,</p> 
                            <p class="phara">preventive measures were taken,</p>
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">The cost of repairs is not the only money spent on repairs but port charges, agency charges, vessel’s running</p>
                            <p class="phara">opex cost etc are all factors which will keep adding to the final bill till the vessel is up and open running </p>
                            <p class="phara">again. So, all the emphasis are put in getting the vessel back on its feet as soon as possible. Every extra day</p>
                            <p class="phara">in port will incur extra loses.</p>
                        </div> 
                    </div>
                    <p class="phara">It is yet another reminder to those who think implementing safety is an expensive affair, let them see the cost of such incidents and the spanner it throws in the works. The total cost ran in excess of USD 2.0 million.</p>
                    <p></p>
                    <p class="phara">Based on above incident, we recommend taking following precautions to avoid purifier room fires:</p>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Several engine room smoke detectors found wasted / melted,</p>                            
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Several engine room smoke detectors found wasted / melted,</p>                            
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Several engine room smoke detectors found wasted / melted,</p>                            
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Several engine room smoke detectors found wasted / melted,</p>                            
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Several engine room smoke detectors found wasted / melted,</p>                            
                        </div> 
                    </div>
                    <div class="lists d-flex">
                        <div class="arrow-container">
                            <i class="fa-solid fa-angles-right"></i>
                        </div> 
                        <div class="tex">
                            <p class="phara">Several engine room smoke detectors found wasted / melted,</p>                            
                        </div> 
                    </div>
                    
                    <p class="phara">Our team of local experts helped in this particular case by assisting our client in identifying good and economical options for workshops, sourcing spares, verify their quotes and other provide logistical support. Ultimate objective is to save the cost, be it for underwriters or vessel operators.</p>
                    <p></p>
                    <p class="phara">In case, you need any help in UAE for such matters, we are just a call away. Please note our contact details as follows:</p>
                    <span><a class="phara" href="#">survey@cspeed.ae</a>Phone: <a class="phara" href="+919878675489">www.seaspeedmarine.com</a> </span>
                    <div class="undr"></div>
                    <div class="undr"></div>
                    <div>
                        <img src="../assets/images/blog3.jpg" alt="image"style=" object-fit:cover;">
                    </div>
                    <p class="phara">First, let’s understand what happens during a bunker survey</p>
                        <p class="phara">In a typical case, a bunker surveyor will board the ship, supervise bunkering operation, take soundings of bunker tanks, carry out bunker calculations and compare his figures with Chief Engineer and bunker barge.</p>
                        <p class="phara">Many a times, they will find that there is a difference between bunker barge supplied and vessel received quantities.</p>
                        <p class="phara">Many a times, they will find that there is a difference between bunker barge supplied and vessel received quantities.</p>
                        <p class="phara">Of course, you know this already, right?</p>
                        <p class="phara">But what most ship owners may not realize is that the expertise of a bunker surveyor lies in how they handle such discrepancies</p>
                        <p class="phara">You see….</p>
                        <p class="phara">Discrepancies may arise from various factors such as incorrect soundings of tank (weather conditions), bunker density, temperature or actual short supplies.</p>
                        <p class="phara">That’s where a good bunker surveyor steps in and identifies the cause of such differences and sorts out such matters in a timely and amicable manne</p>
                        <p class="phara">The other important thing is to maintain complete transparency - keeping all parties, including client and club informed on the shortage of quantity.</p>
                        <p class="phara">We also believe that the role of a bunker surveyor is NOT to negotiate with barge and reach a settlement, but to put facts on the table for all parties to take a call and find a way forward.</p>
                        <p class="phara">Sometimes, a bunker surveyor can discover additional bunker quantity on board which may have not been disclosed to the office due to whatever reasons, especially at the time of on hire and off hire of a vessel.</p>
                        <p class="phara">This can save companies thousands of dollars!</p>  
                        <p class="phara">We know all this because we have conducted many bunker surveys for our clients across all UAE ports. Our expertise lies in conducted transparent and timely surveys such as:</p>                
                   
                </div>

                <div class="form-page">
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
