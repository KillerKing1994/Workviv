<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Righteous">
		<title>WorkVivo</title>
		<!--Bootstrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
		<!--CSS Style-->
		<link rel="stylesheet"  type="text/css" href="./Code/style.css">
		
	<!--https://freebiesupply.com/blog/css-button-hover-effects/ CSS Style for index.html only (button animation)-->
			<style>
.button {
    position: relative;
    background-color: blue;
    border: none;
    text:white;
    font-size: 20px;
    color: #FFFFFF;
    padding: 20px;
    width: 200px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
    }

.button:after {
    content: "";
    background: #e690ee;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
    
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s;
}
</style>
	
</head>
	
	
<body>
	
	<!--Navbar-->
<span
><nav class="navbar navbar-expand-lg navbar-dark bg-blue">
<a class="navbar-brand" href="index.html"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<a class="navbar-image" href="index.html">
			<img src="./Images/logo.png" width= "300" height = "90" alt="logo" style = opacity="1">
		</a>
</span>
		
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html" style = "background-color: yellow; color:blue";>Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./FAQ/FAQ.html">FAQ</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./Knowledgebase/KnowledgeHome.html">KnowledgeBase </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./ticketingsystem/TicketHome.html">Ticketing System</a>
                </li>
            </ul>

        </div>
    </nav> 		 
		 <h1>Customer Support Portal</h1>


		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="nav navbar-nav mr-auto">
	  <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
	  
		
		<li class="nav-item">
			<a class="nav-link" href="./FAQ/FAQ.html">FAQ</a>
			</li>

		
			<li class="nav-item">
			<a class="nav-link" href="./KnowledgeBase/KnowledgeHome.html">Knowledge Base</a>
			</li>
					<li class="nav-item" ">
			<a class=" nav-link" href="./TicketingSystem/TicketHome.html">Create Ticket</a>
			</li>
		</ul>
	</div>

</nav>



<br>

	<!-Content-->
<div class ="container-fluid">


<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="./Images/faq.jpg" alt="Card image cap" width = "270" height = "210">
    <div class="card-body text-center">
      <p class="card-text">
	  Our most frequently asked questions
	  </p>
	   <a href="./FAQ/FAQ.html" class="btn btn-info" role="button">Frequently Asked Questions</a>

    </div>
	
  </div>

  <div class="card">
    <img class="card-img-top" src="./Images/Knowledge-base.jpg" alt="Card image cap" width = "270" height = "210">
    <div class="card-body text-center">
	
	      <p class="card-text">
Find more information about our products here.
	  </p>
 <a href="./KnowledgeBase/KnowledgeHome.html" class="btn btn-info" role="button">Knowledge Base</a>


   </div>
  </div>
  
    <div class="card">
    <img class="card-img-top" src="./Images/ticket.jpg" alt="Card image cap" width = "270" height = "210">
    <div class="card-body text-center">
      <p class="card-text">Contact our helpdesk, or look at previous tickets</p>
	   <a href="./TicketingSystem/TicketHome.html" class="btn btn-info" role="button">Ticketing System</a>

    </div>
  </div>
  
</div>



<br>



			<!--Bootstrap Carousel -->
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 500px; margin: 0 auto; padding-top 50px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./Images/carousel2.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./Images/carousel3.jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
		</div>
		

<!-- Bootstrap Modal/w3schools-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary button" data-toggle="modal" data-target="#exampleModalLong">
 About us
</button>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">The Workvivo Story</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<p>Workvivo was founded in early 2017 in Cork, Ireland by John Goulding and Joe Lennon. John and Joe had worked together previously at CoreHR, a leading global HCM software provider, as CEO and CTO respectively.</p>

<p>From their previous roles, both founders had experience of building great cloud-based software for Enterprise customers leading to hugely successful growth. Both founders also experienced the challenges this growth brings in trying to ensure employee engagement and internal communication is optimised as a company scales. Creating Workvivo was based on a desire of the founders to leverage their experience of building great software to develop a product to meet this challenge. The test for both John and Joe was to build a product they would have loved to have had available to them in their previous senior leadership roles in a growing company.</p>

<p>Designing the Workvivo product was based on a nice recipe for success – the domain knowledge of the founders themselves, lots and lots of research, a passion and ability to design a beautiful and engaging user experience, and the help of some incredible early customers.</p>

<pAfter just over a year researching, building the product, assembling a great team, working with fantastic early customers Workvivo was officially launched on July 9th, 2018. The founders have enjoyed the journey to get to market and have taken great pride and satisfaction in the success of the customers that gave the company an early vote of confidence. A year after forming, Workvivo is already being used to engage employees across the UK, USA, Canada, Ireland, Australia, Singapore and China. 
</p>
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	
      </div>

    </div>
  </div>
</div>



</div>
	  <br><br><br>
<div style="background:#003d99;color:#FFF">
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">


<div style="background:#003d99;color:#FFF">
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

  <div class="container">



  </div>
<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Footer links -->
  <div class="row text-center text-md-left mt-3 pb-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">WorkVivo</h6>
      <p>Workvivo helps companies maximise the emotional connection their people have to the organisation and its 
      goals.</p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
      <p>
       Activity Feed
      </p>
      <p>
        Strategic Alignment
      </p>
      <p>
        Peer Recognition
      </p>
      <p>
        Reporting & Analytics
      </p>
    </div>
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
      <p>
        <a href="#!">Your Account</a>
      </p>
      <p>
        <a href="#!">Become an Affiliate</a>
      </p>
      <p>
        <a href="#!">Shipping Rates</a>
      </p>
      <p>
        <a href="#!">Help</a>
      </p>
    </div>

    <!-- Grid column -->
    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
      <p>
        <i class="fa fa-home mr-3"></i> 
        Douglas T12 PDD2

    </p>
      <p>
        <i class="fa fa-envelope mr-3"></i> hello@workvivo.com</p>
      <p>
        <i class="fa fa-phone mr-3"></i> support@workvivo.com</p>
      <p>
        <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Footer links -->

  <hr>

  <!-- Grid row -->
  <div class="row d-flex align-items-center">

    <!-- Grid column -->
    <div class="col-md-7 col-lg-8">

      <!--Copyright-->
      <p class="text-center text-md-left"> 
      © 2018 Workvivo Limited. All rights reserved. 
      <a href="#">Privacy Policy</a>
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-5 col-lg-4 ml-lg-0">




  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

</footer>
<!-- Footer -->
	</body>




</html>