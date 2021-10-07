<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Euonymus</title>
    <link rel="stylesheet" href="css/contact.css">
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
  <div class="contact">
  <form action="action_page.php" name="myForm" onsubmit="return(validate());" method="post">
				    <h3>Contact Us</h3>
				    <label for="fname">First Name</label>
				    <input type="text" name="firstname"  placeholder="Your name.." >
				    <label for="lname">Last Name</label>
				    <input type="text" name="lastname"  placeholder="Your last name..">
				    <label for="email">Email</label>
				    <input type="text" name="email"  placeholder="Your email... ">
                    <label for="gender">Gender: </label>
                    <input type="radio" name="gender" value="Male" > Male
                    <input type="radio" name="gender" value="Female"> Female<br><br>
                    <label for="account">Registered: </label>
                    <input type="checkbox" name="account" id="yes" onclick="disable1()" value="Yes" > Yes
                    <input type="checkbox" name="account" id="no" onclick="disable2()" value="No"> No<br><br>
				    <label for="address">Adress</label>
				    <input type="text"  name="address"  placeholder="Your address... ">
				    <label for="country">Country</label>
				    <select name="country">
						<option value="-1" selected>[choose yours]</option>
						<option value="1">Albania</option>
						<option value="2">Kosovo</option>
						<option value="3">Germany</option>
					</select>
				    <label for="subject">Subject</label>
				    <textarea  name="subject" placeholder="Write something.."></textarea>

				    <input type="submit" value="submit" name="submit">
				  </form>
</div> 
<div class="maps">
  <div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2933.9285549112064!2d21.154875115098644!3d42.66286937916765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee398234689%3A0x1ecdd21bb52cbd0f!2sCity+Stadium!5e0!3m2!1sen!2s!4v1524642546298" width="500" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
  <h4>Address: Rr. Enver Zybmberi, Prishtine Kosove</h4>
   <h4><span>Tel:</span> +38344000000</h4><br><br><br><br><br>
</div>
</div>
</div>
<div class="container">
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
  <div class="copyright">
   <p>Copyright &copy  2018 Domain Name - All Rights Reserved</p>
 </div>
     <div class="template">
    <p>Template by OS Templates</p>
   </div>
</div>
</footer>
<script type="text/javascript">
  function validate()
  {

  if( document.myForm.firstname.value == "" )
  {
  alert( "Ju lutem shkruani emrin e juaj!" );
  document.myForm.firstname.focus() ;
  return false;
  }
  if( document.myForm.lastname.value == "" )
  {
  alert( "Ju lutem shkruani mbiemrin e juaj!" );
  document.myForm.lastname.focus() ;
  return false;
  }
  if( document.myForm.email.value == "" )
  {
  alert( "Ju lutem shkruani emailin!" );
  document.myForm.email.focus() ;
  return false;
  }
  if( document.myForm.address.value == "" )
  {
  alert( "Ju lutem shkruani adresen!" );
  document.myForm.address.focus() ;
  return false;
  }
 
   if( document.myForm.country.value == "-1" )
    {
    alert( "Ju lutem zgjedhni shtetin!" );
    return false;
    }
    if( document.myForm.subject.value == "" )
  {
  alert( "Ju lutem shkruani Komentin!!" );
  document.myForm.subject.focus() ;
  return false;
  }
  return( true );
  }
  </script>
</body>
</html>