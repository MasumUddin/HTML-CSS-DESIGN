<!DOCTYPE html>

<html>
<head>
<title>This is website </title>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>


</head> 


<body>
<div class ="Headersection templete clear">
<div class="logo">
<img src="images/social/tigerit.jpg" alt="Logo"/>
<h2>Website Title</h2>
<p>
Our Website Description
</p>

</div>
<div class="social">
<a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
</div>

</div>
<div class ="navsection templete">
<ul>

<li><a href="index.html">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href="about.html">Privacy</a></li>


<li><a href="about.html">Product</a>

<ul>
<li><a href="#">Product One</a></li>
<li><a href="#">Product Two</a></li>
<li><a href="#">Product Three</a></li>
<li><a href="#">Product Four</a></li>
<li><a href="#">Product Five</a></li>

</ul>
</li>

<li><a href="about.html">DMCA</a></li>
<li><a id="active" href="contact.html">Contact</a>
<ul>
<li><a href="#">Address One</a></li>
<li><a href="#">Address Two</a></li>
<li><a href="#">Address Three</a></li>
<li><a href="#">Address Four</a></li>
<li><a href="#">Address Five</a></li>

</ul>
</li>
<li><a href="item.html">Item</a></li>
<li><a href="counter.html">Counter</a></li>
<li><a href="sorting.html">Sorting</a></li>

</ul>
</div>


<div class ="Contentsection contemplete clear">
<div class ="Maincontent clear">
<form name="contact_form" method="post" action="db_connect.php">
<div class ="about">
<h2>Contact us</h2>
<table>
<tr>
<td>Your First Name:</td>
<td>
<input type="text" name="firstname" placeholder="Enter firstname"/>
</td>
</tr>
<tr>
<td>Your Last Name:</td>
<td>
<input type="text" name="lastname" placeholder="Enter lastname"/>
</td>
</tr>
<tr>
<td>Your Email Address:</td>
<td>
<input type="email" name="email" placeholder="Enter email address"/>
</td>
</tr>
<tr>
<td>Your Message:</td>
<td>
<input type="message" name="message" placeholder="Enter your message"/>

</td>
</tr>

<tr>
<td></td>
<td>
<input type="submit" name="submit" value="submit"/>
</td>
</tr>

</table>

</div>
</form>
  <div class="googlemp">
  <div id="map"></div>
  
  </div>

</div>
<div class ="Sidebar clear">
<div class ="Samesidebar clear">
<h2> Latest Articles </h2>
<ul>

<li><a href="#">Post title one will be go here</a></li>
<li><a href="#">Post title two will be go here </a></li>
<li><a href="#">Post title three will be go here </a></li>
<li><a href="#">Post title four will be go here </a></li>
<li><a href="#">Post title five will be go here </a></li>
<li><a href="#">Post title six will be go here </a></li>

</ul>

<div class ="Samesidebar clear">
<h2> Popular articles </h2>
<div class="Popular clear">
<h3><a href="#">Post title will be go here..</h3></a>
<a href="#"><img src ="images/tree.jpg" alt="post image"/></a>
<p>
some text will be go here. some text will be go here.some text will be go here. some text will be go here.
some text will be go here. some text will be go here. some text will be go here. some text will be go here.
</p>
</div>


<div class="Popular clear">
<h3><a href="#">Post title will be go here..</h3></a>
<a href="#"><img src ="images/tree.jpg" alt="post image"/></a>
<p>
some text will be go here. some text will be go here.some text will be go here. some text will be go here.
some text will be go here. some text will be go here. some text will be go here. some text will be go here.
</p>
</div>


<div class="Popular clear">
<h3><a href="#">Post title will be go here..</h3></a>
<a href="#"><img src ="images/tree.jpg" alt="post image"/></a>
<p>
some text will be go here. some text will be go here.some text will be go here. some text will be go here.
some text will be go here. some text will be go here. some text will be go here. some text will be go here.
</p>
</div>


<div class="Popular clear">
<h3><a href="#">Post title will be go here..</h3></a>
<a href="#"><img src ="images/tree.jpg" alt="post image"/></a>
<p>
some text will be go here. some text will be go here.some text will be go here. some text will be go here.
some text will be go here. some text will be go here. some text will be go here. some text will be go here.
</p>
</div>
</div>


</div>
</div>
<div class ="fottersection templete clear">
<div class ="fottermenu clear">
<ul>

<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>
<li><a href="#">Privacy</a></li>

</ul>
</div>

<p>&copy; Copyright project with live Training.</p>


</div>
<div class="fixedicon clear">
<a href="http://www.facebook.com"><img src="images/social/fb.png" alt="Facebok"/></a>
<a href="http://www.twitter.com"><img src="images/social/tw.png" alt="Twitter"/></a>
<a href="http://www.linkedin.com"><img src="images/social/ln.png" alt="Linkedin"/></a>
<a href="http://www.subscribe.com"><img src="images/social/sub.png "alt="Subscribe"/></a>
<a href="http://www.youtube.com"><img src="images/social/yo.png" alt="Youtube"/></a>

</div>

 

</body>
<script type="text/javascript" src="js/scrolltop.js"></script>
<script src="http://maps.google.com/maps/api/js"></script>
<script src="js/gmaps.js"></script>
<script type="text/javascript">
    var map;
    $(document).ready(function(){
      var map = new GMaps({
        el: '#map',
        lat: 23.7809428,
        lng: 90.2793689,   
		scrollwhell:false
      });

      GMaps.geolocate({
        success: function(position){
          map.setCenter(position.coords.latitude, position.coords.longitude);
        },
        error: function(error){
          alert('Geolocation failed: '+error.message);
        },
        not_supported: function(){
          alert("Your browser does not support geolocation");
        },
        always: function(){
          alert("Done!");
        }
      });
    });
  </script>

</html>