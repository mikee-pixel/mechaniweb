<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="homepage.css">
	
	
    <title>MechaniWeb</title>
  </head>
  
  
  
  
  <body>
    
	<header>
        <?php include 'header.php';?>
	</header>
	<!---------------NAVIGATION BAR---------------------->
    <div id="backimg_MainText">
        <img id="backgroundMainText" src="images/homepage/backgroundimage.jpg">
        <div id="overlay"></div>
    
        <div   id="container_text">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <p id="main_Text">	WE ARE AN AUTODESK<br>AUTHORIZED ACADEMIC PARTNER</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <p id="text_Content"> We support and guide academic institutions<br> to select the right software tools including hands-on support, which enables them to<br> integrate technology into curriculum.</p>
                 </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <a id="button_MainText" href="aboutus.php"> About  Us</a>
                </div>
            </div>
            
        </div>
    
        
        
    </div>
  
      <!-------WE DELIVER OUTSTANDING DESIGN & COST-COMPETITIVE SOLUTION-------->
        
        
        <div id="section2">
            <h1 id="Secondary_Header"> We Deliver Outstanding Design & Cost-competitive Solutions</h1><br>
            <h2 id="Secondary_Subheading">Autodesk Academic Partner</h2>

            <p id="Secondary_TextContent"> We prepare institutions and students for success.<br>If you prepare students for careers that requires 2D and 3D design skills, Autodesk can deliver a powerful advantage. The fundamentals of design are timeless. Yet in today’s rapidly changing marketplace, the design software used by architects, engineers, product designers, and other professionals undergoes upgrades and enhancements all the time—making it difficult for busy teachers and professors to stay current.</p><br>

             <h2 id="Secondary_Subheading">Mechanical Design/Development</h2>
              <p id="Secondary_TextContent"> We focus on product design and development in all areas of mechanical engineering: utilizing common materials such as plastics and metal (sheet/cast), R&D support such as 2D drafting, 3D rendering, industrial design, thermal/stress analysis, and design for manufacturability.<br> We desire to give you the best. Contact us now!</p>

            <hr style="color:white;">
            
      </div>
      
       <!--------------------------------ADVERTISEMENT---------------------------->  
      <div class="container">
        <div class="row"> 
        <!--------------------------------FUSION 360----------------------------->
            <div class="col-lg-4">
                <div class="container_advertisement"> <!--lagayan nung mga products-->
                    <a href="workshops.php">
                    <img class="advertisement_image" src="images/homepage/fusion360.jpg">
                     <div id="text_Details">
                        <h1>FREE WORKSHOP</h1>

                        <p > MechaniWEB offer a FREE WorkShop on FUSION 360.</p>
                        <p>TOPICS</p>
                            <ul>
                                <li>Fusion 360 (BASIC)</li>
                                <li>Fusion 360 (3D MODELING)</li>
                                <li>Fusion 360 (ASSEMBLE)</li>
                                <li>Fusion 360 (TIPS & TRICKS)</li>
                            </ul>
                        <center>
                            <a id="Botton_Fusion360" href="workshops.php" style="background-color:#72D3DA; padding:5px; text-decoration:none; border-radius:4px;">READ MORE</a>
                        </center>
                    </div>
                    </a> 
                </div>
            </div>  
            
            
            
     <!--------------------------------AUTODESK CERTIFICATION----------------------------->
            
            <div class="col-lg-4">
                <div class="container_advertisement">
                    <a href="autodeskcertification.php">
                        <img class="advertisement_image" src="images/homepage/autodeskCertification.jpg">
                        
                        <div id="text_Details">
  
                        <h1> AUTODESK CERTIFICATION</h1>
                        <p>Now aday's students are more talented in terms of designing especially by using autodesk products. Every year there are many designs that more difficult than the previous design, we are here to make your skill maintain.</p>

                        <center>
                            <a href="AutodeskCertfication.php" style="background-color:#72D3DA; padding:5px; text-decoration:none; border-radius:4px;">READ MORE</a>
                        </center>
                    
                    </div>
                    </a>
                </div>
            </div>  
            
            
            
         <!--------------------------------OUR HOT COURSE----------------------------->
            <div class="col-lg-4">
                <div class="container_advertisement">
                    <a href="hotcourses.php">
                        <img class="advertisement_image" src="images/homepage/ourhotcourses.png">
                        
                                       <div id="text_Details">
                    <h1> OUR HOT COURSE </h1>
					<p> Enroll now at MechaniWEB to learn deeper about Autodesk Software</p>
					
					<div id="Courses_List">
						<ul>
							<li>FUSION 360</li>
							<li>AUTOCAD</li>
							<li>3D's MAX</li>
							<li>MAYA</li>
							<li>REVIT</li>
						</ul>
					</div>
					
					<center>
						<a id="Botton_Enroll" href="ourhotcourses.php" style="background-color:#72D3DA; padding:5px; text-decoration:none; border-radius:4px;">READ MORE</a>
					</center>
                </div> 
                    </a>
                </div>
            
            </div>  
        </div>
      
      
      </div>
      
      
      <!--------------------FOOTER---------------------------->
        <footer>
           <?php include'footer.php' ?>
   
        </footer>
      
      
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  
  
  
</html>