
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Design</title>

    <link rel="stylesheet" type="text/css" href="CSS/mystyle.css">


</head>
<body>

  <header class="header">
    <a href="index.php" class="logo">.Transforming Ideas { Into  Magic }</a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li><a href="blog.php">Blog</a></li>
    </ul>
  </header>


  
<div class="blogposts">
<div class="blogheader">
  <h1>Website Design Quote Request Form</h1>
 <p>Please fill out the form and send it back to me. Once I have receive the completed form, I will review your 
  requirements and provide you with a detailed quote for your website design project.

 <br><br> Thank you for considering my services! I look forward to working with you to create a beautiful 
 and functional website that meets your goals.</p>
 <br><br>
</div>

<form action="websitedesign_form.php" method="post">
<div class="logodesignform"> 

    <h2>Contact Information</h2>

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="company">Company/Organization (if applicable)</label>
    <input type="text" id="company" name="company" placeholder="Your company/organization (if applicable)..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your your email..">

    <label for="phonenumber">Phone Number</label>
    <input type="text" id="phonenumber" name="phonenumber" placeholder="Your phone number..">

    <label for="Website">Website (if applicable)</label>
    <input type="text" id="website" name="website" placeholder="Your website..">

    <label for="method">Preferred Method of Communication</label>
    <select id="method" name="method">
      <option value="email">Email</option>
      <option value="phone">Phone</option>
      <option value="other">Other</option>
    </select>

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <h2>Project Details</h2>  

    <label for="subject">Briefly describe your business/organization and its main products/services.</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <label for="country">Do you currently have a website?</label>
    <select id="country" name="country">
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>
   
    <label for="email">If yes, please provide the current website URL for reference.</label>
    <input type="text" id="email" name="email" placeholder="Your URL..">

    <label for="subject">What is the primary goal of the new website? (e.g., Increase 
      sales, provide information, build a community, etc.)</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <label for="subject">Who is your target audience?</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <label for="subject">Are there any specific colors and branding elements you'd like to be used on the website? (If yes, please specify)</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <label for="subject">Do you have any preferred design styles for the website? (Modern, Minimalistic, Corporate, etc.)</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <label for="subject">Do you have a logo and other brand assets that we need to incorporate into the design?</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>


<h2>Website Features and Functionality</h2>

    <label for="subject">What pages/sections do you envision for the website? (e.g., Home, About Us, Services, Portfolio, Contact, Blog, etc.)</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <label for="subject">Are there any specific features or functionalities you'd like to include? (e.g., E-commerce, Contact forms, Social media integration, etc.)</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    
<h2>Responsive Design:</h2>

<label for="country">Is it important that the website is fully responsive, meaning it works well on desktop, tablet, and mobile devices?</label>
<select id="country" name="country">
  <option value="yes">Yes</option>
  <option value="no">No</option>
</select>

<h2>Timeline</h2>

<label for="fname">Do you have the content (text, images, videos) ready for the website, or will you need assistance with content creation?</label>
<input type="text" id="fname" name="firstname" placeholder="Your timeline..">

<h2>Budget</h2>

<label for="fname">Do you have the content (text, images, videos) ready for the website, or will you need assistance with content creation?</label>
<input type="text" id="fname" name="firstname" placeholder="Your budget..">

<h2>Maintenance and Updates</h2>

<label for="subject">Will you need ongoing website maintenance and updates after the initial design is completed?</label>
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> 


<h2>Additional Comments/Requirements</h2>

<label for="subject">Please provide any additional information or specific requirements you have for the website design.</label>
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> 




<h2>Additional Comments/Requirements</h2>  

<label for="subject">Please provide any additional information or specific requirements you have for the logo design.</label>
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> 


<h2>How did you hear about me?</h2>  

<label for="subject"></label>
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

<input type="submit" value="Submit">

  </form>
</div>
<br>

</div>



<footer>

  <div class="footer">
      <div id="footer1">
         <h1 style="font-size: xx-large;">Transforming Ideas Into Magic</h1>
         <br>
         <br>
         <p>Aled Dzjubanova - DEVELOPER</p>
         <p>To me, design is the fascinating synergy of innovation and craftsmanship. It's the art of translating visions into functional and visually captivating realities. With every line of code, every carefully chosen color palette, and every pixel perfected, I merge technical expertise with creative ingenuity. This fusion allows me to transform abstract ideas, emotions, and concepts into interactive experiences that captivate and engage. Beyond a mere occupation, development is my fervor, enabling me to craft solutions that not only reflect my unique perspective but also resonate deeply with users, fostering meaningful connections in a digital landscape.</p> 
        <br>
            <p>&copy; 2023</p>
         <p>Transforming Ideas Ltd. All rights reserved.</p>
         
     
          
          


      </div>
      <div id="footer2">
  <br>
  <br>
  <br>
          <h3>MY LOCATION</h3>
          <p >1236 Johnson Street, Coquitlam, BC, V3B7E6</p>
          
          <br>
          <h3>LET'S BUILD TOGETHER, CONNECT WITH ME</h3>
          <p>alex@transformingideas.ca</p>
          <p>1.604.339.1612</p>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
          <h3>FOLLOW MY JOURNEY ON SOCIAL MEDIA:</h3>
          <img src="images/facebook.png" width="10%">
          
          <img src="images/instagram.png" width="10%">
          <br>

         
      </div>
     


    </footer>



    
