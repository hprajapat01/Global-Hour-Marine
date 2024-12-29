<?php
        $id=$this->input->get('id');
?>
<link rel="stylesheet" href="../assets/styles/style.css">
    <style>
     
  @media (min-width: 576px) {
    .about_us_page {
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
}
    @media (min-width: 768px) {
    .about_us_page {
        margin-top: 3rem;
        margin-bottom: 3rem;
    }
}
    .about_us_page{
            width:100%;
            height:1000px;
            padding:0px;
          }
    .about_us_container{
        height:auto;
        width:90%;
        display:flex;
        padding:0px;
        gap:1rem;

    } 
    .about_container::-webkit-scrollbar {
    display: none; 
}

    @media (min-width: 576px) {
    .about_us_container{
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
}
    @media (min-width: 768px) {
    .about_us_container {
        margin-top: 3rem;
        margin-bottom:3rem;
    }
}    
.about_container{
    width:75%;
    text-align:justify;
    overflow-y: auto; 
    padding-right: 10px;
    height:none;

} 
.form_container{
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
    margin-left:5px;
}
.list-container{
    display:flex;
    gap:1rem;
    margin:0px;
    padding:0px;
    line-height:2px;
    align-items:center;
    text-align:center;

   
}
.left_icon{
    font-size:28px;
    /* border-radius:50%; */
   /* margin:2px; */
   color:#0052A9;
   
   
}
.text{
font-size:22px;
margin-top:10px;
}
.heading_container{
    margin-bottom:35px;
}    
.form-heading{
    margin:10px;
    color:white;
}
.custom-input{
    border-radius:0;
    width:90%;
    margin:auto;
}
.parent_div{
   background: linear-gradient(135deg, #173957,rgb(54, 172, 188)); 
    padding:2px 20px;
display:flex;
height:40px;
justify-content:space-between;
text-align:center;
font-size:24px;
color:white;
margin:1px;
cursor:pointer;
    /* transition: 0.5s ease-in-out; */

}

.text-container{
    justify-content:center;
    text-align:justify;

}
.youtube_video_container{
    height:500px;
    margin:0px 0px;
    padding:0px;
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
.child-div {
    transform: translateY(100%); /* Initially positioned below */
    opacity: 0; /* Fully transparent */
    transition: transform 0.5s ease-out, opacity 0.5s ease-out; /* Smooth transition */
    overflow: hidden; /* Prevent content overflow */
    max-height: 0; /* Collapsed height */
    
}

.child-div.open {
    transform: translateY(0); /* Move to original position */
    opacity: 1; /* Fully visible */
    max-height: 1000px; 
    margin-top:50px;
    margin-bottom:50px;

}


</style>

<section >
    <div class="container-fluid about_us_page" style="margin-bottom: 11%;">
        <div class="container-fluid about_us_container">
            <div class=" about_container ">
                <div class="heading_container">
                    <h2>ABOUT US</h2>
                    <div class="underline_about_us"></div>
                </div>
                <div>
                    <p><b>Seaspeed Marine Management</b><?php echo "&nbsp"; ?>was incorporated in 2007 in UAE and have been serving all segments of shipping industry since then. The company is run by a highly committed and professional team where our target is to add value to our clients by helping them in efficiently managing shipping projects and creating maximum benefits for them.
                    <br>We aim to deliver vessels which match with the exact requirements of projects and support our clients throughout the project execution.</p>
                    <p>We believe in complete:</p>
                </div>
                <div class="list-container">
                         <span class="left_icon"><i class="fa-solid fa-angles-right"></i></span><p class="text"><b>Transparency</b></p> 
                </div>
                <div class="list-container">
                    <span class="left_icon"><i class="fa-solid fa-angles-right"></i></span><p class="text"><b>Commitment</b></p> 
                </div>
                <div class="list-container">
                    <span class="left_icon"><i class="fa-solid fa-angles-right"></i></span><p class="text"><b>Professional expertise</b></p>  
                </div>
                <div class="second-part mt-3">
                    <div class="heading_container">
                        <h2>SOME OF OUR CORE VALUES</h2>
                        <div class="underline_about_us"></div>
                    </div>
                    <div class="parent_div" id="firstDiv" >
                        <div>OUR MISSION</div> 
                        <div>+</div>
                    </div>
                    <div  id="secondDiv" class="child-div">
                        <div class="image-container" style="width:30%; height:200px; float:left" > 
                            <img src="../assets/image/image-2.jpeg" alt="image">
                        </div>
                        <div class="conatiner-text">
                            <p><i><b>"To work as a specialized shipping services company, targeting to own and run main fleet as well as offshore vessels at strategic locations, and providing cost-effective, safe and environmental friendly operations, valuing all our employees as the assets to the company."</b></i><?php echo "&nbsp"; ?><br>We always strive to put our clients before us and their satisfaction and interest are of prime importance to us. We consider ourselves a small yet dedicated team with professional attitude and outlook.</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="parent_div" id="thirdDiv" >
                        <div>OUR VISSION</div> 
                        <div>+</div>
                    </div>
                    <div  id="fourthDiv" class="child-div" >
                        <div class="image-container" style="width:30%; height:200px; float:left" > 
                            <img src="../assets/image/image1.jpeg" alt="image">
                        </div>
                        <div class="text-conatiner">
                            <p><i><b>"To work as a specialized shipping services company, targeting to own and run main fleet as well as offshore vessels at strategic locations, and providing cost-effective, safe and environmental friendly operations, valuing all our employees as the assets to the company."</b></i><?php echo "&nbsp"; ?><br>We always strive to put our clients before us and their satisfaction and interest are of prime importance to us. We consider ourselves a small yet dedicated team with professional attitude and outlook.</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="parent_div" id="fifthDiv" >
                        <div>CORE VALUES</div> 
                        <div>+</div>
                    </div>
                    <div  id="sixthDiv" class="child-div"  >
                        <div class="image-container" style="width:30%; height:200px; float:left;margin-bottom:55px; "> 
                            <img src="../assets/image/image-4.jpeg" alt="image">
                        </div>
                        <div class="text-conatiner">
                            <p><i><b>"To work as a specialized shipping services company, targeting to own and run main fleet as well as offshore vessels at strategic locations, and providing cost-effective, safe and environmental friendly operations, valuing all our employees as the assets to the company."</b></i><?php echo "&nbsp"; ?><br>We always strive to put our clients before us and their satisfaction and interest are of prime importance to us. We consider ourselves a small yet dedicated team with professional attitude and outlook.</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="parent_div" id="seventhDiv">
                        <div>OUR TEAM</div> 
                        <div>+</div>
                    </div>
                    <div  id="eighthDiv" class="child-div"  >
                        <div class="image-container" style="width:30%; height:200px; float:left" > 
                            <img src="../assets/image/image-3.jpeg" alt="image">
                        </div>
                        <div class="text-conatiner">
                            <p><i><b>"To work as a specialized shipping services company, targeting to own and run main fleet as well as offshore vessels at strategic locations, and providing cost-effective, safe and environmental friendly operations, valuing all our employees as the assets to the company."</b></i><?php echo "&nbsp"; ?><br>We always strive to put our clients before us and their satisfaction and interest are of prime importance to us. We consider ourselves a small yet dedicated team with professional attitude and outlook.</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="container youtube_video_container mt-3">
                    <div class="heading_container">
                        <h2>CORPORATE VIDEO</h2>
                        <div class="underline_about_us"></div>
                    </div>
                    <div class=" container video_container p-0 ">
                        <div class="embed-responsive embed-responsive-16by9 " style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                            <iframe 
                                class="embed-responsive-item" 
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" 
                                src="https://www.youtube.com/embed/YOUR_VIDEO_ID" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" form_container">
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
                <button class="send-butn">
                            <span>SEND MESSAGE</span>
                            <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>
<script>
   function toggleVisibility(parentId, childId) {
    const parentDiv = document.getElementById(parentId);
    const childDiv = document.getElementById(childId);

    parentDiv.addEventListener('click', function () {
        const allChildDivs = document.querySelectorAll('.child-div');
        allChildDivs.forEach(div => {
            if (div !== childDiv) {
                div.classList.remove('open'); // Close other child divs
            }
        });

        childDiv.classList.toggle('open'); // Toggle the current child div
    });
}

toggleVisibility('firstDiv', 'secondDiv');
toggleVisibility('thirdDiv', 'fourthDiv');
toggleVisibility('fifthDiv', 'sixthDiv');
toggleVisibility('seventhDiv', 'eighthDiv');

</script>
