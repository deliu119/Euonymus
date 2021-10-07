<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Euonymus</title>
    <link rel="stylesheet" href="css/slider.css">
</head>
<body>
   <header>
    <div class="top-bar">
        <div class="container"> 
            <div class="first-header">
                <div class="social-icons">
                    <img src="images/linked-in-logo.png" class="linked-in-logo" alt="Linkedin Logo">
                    <img src="images/twitter-logo.png" class="twitter-logo" alt="Twitter Logo">
                    <img src="images/pinterest-logo.png" class="pinterest-logo" alt="Pinterest Logo">
                    <img src="images/google-plus-logo.png" class="google-plus-logo" alt="Google Logo">
                    <img src="images/rss-logo.png" class="rss-logo" alt="Rss Logo">
                </div>
             </div>
                  <div class="right-menu">
                    <ul>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">RSS Feeds</a></li>
                        <li><a href="#">Archived News</a></li>
                    </ul>
                    <div class="plus">
                      <img src="images/plus.png"/>
                    </div>
                </div>
            </div>
        </div>
            <div class="container">
               <div class="logo" onclick="location.href='home.php';" >
                <img src="images/logo.png" alt="Euonymus Logo">
            </div>
             <div class="search">
          <div class="form-group">
              <input type="alfa" class="input-search" placeholder="Search Our Website...">
               <button>SUBMIT</button>
              </div>
          </div>
         </div>
           <div class="navigation">
              <div class="container">
                <nav class="menu">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="#">Style Deomo</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="#">Dropdown</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="slider.php">Slider </a></li>
                    </ul>
                </nav>
            </div>
         </div>
    </header>
	 
    <div class="container">
    <div class="slider">
  <img class="slides" src="images/foto1.jpg"/>
  <img class="slides" src="images/foto2.jpg"/>
  <img class="slides" src="images/foto3.jpg"/>
  <button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094; </button>
  <button class="btn" onclick="plusIndex(1)" id="btn2">&#10095; </button>
  </div>
   <div class="container">
     <div class= "first-part">
          <hr></hr>
          <div class="content5">
            <img src="images/foto.png">
            <h3>What we do</h3>
            <div class="text5">
            <p>Vestapende et donec ut est
            liberos sus et eget  sed eget.
              Quis queta habitur augue magnisl mag.</p>
              <a href="#my_anchor">Read More  >></a>
          </div>
          </div>
           <div class="content6">
            <img src="images/foto.png">
            <h3>What we do</h3>
            <div class="text6">
            <p>Vestapende et donec ut est
            liberos sus et eget  sed eget.
              Quis queta habitur augue magnisl mag.</p>
              <a href="#my_anchor">Read More  >></a>
          </div>
          </div>
      </div>

<footer>
    <div class="top">
      <img src="images/arrow.png" alt="top arrow ">
      <p>TOP</p>
      <hr>
  </div>
  <div class="section">
    <div class="company-details">
      <h3>COMPANY DETAILS</h3>
      <p>Lorem ipsum dolor sit amet, consec 
       tetur adipiscing elit. Nunc no 
       erat. In fringilla massa ut nisi.</p>
       <p>
         Company Name<br>
        Street Name & Number<br>
        Line Two<br>
        Town<br>
        Postcode/Zip<br>
       </p>
       <p>
         Tel: xxxxx xxxxxxxxxx<br>
         Fax: xxxxx xxxxxxxxxx<br>
         Email: contact@mydomain.com<br>
       </p>
    </div>
    <div class="latest-post">
      <h3>LATEST BLOG POSTS</h3>
      <div class="first">
        <img src="images/small.png">
        <div class="txt">
        <p>Nulla facilisi. Ut fringilla. 
           Suspendisse potenti.<br>
          Friday 6th April 2018</p>
        </div>
        <hr>
      </div>
     <div class="second">
        <img src="images/small.png">
        <div class="txt">
        <p>Nulla facilisi. Ut fringilla. 
           Suspendisse potenti.<br>
          Friday 6th April 2018</p>
        </div>
        <hr>
      </div>
         <div class="third">
        <img src="images/small.png">
        <div class="txt">
        <p>Nulla facilisi. Ut fringilla. 
           Suspendisse potenti.<br>
          Friday 6th April 2018</p>
        </div>
        <hr>
      </div>
    </div>
  <div class="links">
    <h3>QUICK LINKS</h3>
    <div class="quick-links">
      <a href="#my_anchor"> >>Lorem ipsum dolor sit </a>
      <hr>
      <a href="#my_anchor"> >>Lorem ipsum dolor sit </a>
      <hr>
      <a href="#my_anchor"> >>Praesent vel sem id </a>
      <hr>
      <a href="#my_anchor"> >>Curabitur hendrerit est </a>
      <hr>
      <a href="#my_anchor"> >>Lorem ipsum dolor sit </a>
      <hr>
      <a href="#my_anchor"> >>Cras id augue nunc </a>
      <hr>
      <a href="#my_anchor"> >>Vivamus mollis enim ut</a>
    </div>
  </div>
</div>
<br>
<hr>
  <div class="copyright">
   <p>Copyright &copy  2018 Domain Name - All Rights Reserved</p>
 </div>
     <div class="template">
    <p>Template by OS Templates</p>
   </div>
      </div>
</footer>
</div>
</body>
<script>
  
  var index = 1;  
  function plusIndex(n){
  index = index + 1;
  showImage(index);
  }
  showImage(1);
  function showImage(n){
  var i;
  var x = document.getElementsByClassName("slides");
  if(n > x.length){ index = 1};
  if(n < 1) {index = x.length};
  for(i=0;i<x.length;i++)
  {
    x[i].style.display = "none";
  }
  x[index -1].style.display = "block";
  }
  autoSlide();
  function autoSlide(){
  var i;
  var x = document.getElementsByClassName("slides");
  for(i=0;i<x.length;i++)
  {
    x[i].style.display = "none";
  }
  if (index > x.length){index = 1}
  x[index -1].style.display = "block";
  index++;
  setTimeout(autoSlide,6000);
  }
  </script>
</html>