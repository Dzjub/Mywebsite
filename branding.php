
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branding</title>

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
  <h1>Branding/Full Visual Identity Design Quote Request Form</h1>
 <p>Please fill out the form and send it back to me. Once I have received the completed form, I will 
  review your requirements and provide you with a detailed quote for your branding/full visual identity design project.

 <br><br> Thank you for considering my services! I am excited to help you create a strong and impactful brand identity.</p>
 <br><br>
</div>

<form action="branding_form.php" method="post">
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

    <label for="country">Do you currently have a logo and brand materials? </label>
    <select id="country" name="country">
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>

    <p>If yes, please provide the current logo and any existing brand materials for reference.</p>


    <div class="chosefile">
      <div class="fileselect">
        <h3>Upload Files</h3>
        <div class="drop_box">
          <header>
            <h4>Select File here</h4>
          </header>
          <p>Files Supported: PDF, TEXT, DOC , DOCX, JPEG,</p>
          <input type="file" hidden accept=".doc,.docx,.pdf" id="fileID" style="display:none;">
          <button class="btn">Choose File</button>
        </div>
    
      </div>
    </div>


    <label for="subject">What is the primary message you want your brand to convey?</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <label for="subject">Who is your target audience?</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <label for="subject">Are there any specific colors, typography, or design elements you'd like to be used in the branding? (If yes, please specify)</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <label for="subject">Do you have any preferred design styles for the brand identity? (Elegant, Modern, Vintage, etc.)</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <label for="subject">Do you have any specific brand guidelines that need to be followed or any existing materials that need to be updated?</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

<h2>Brand Collateral</h2>

    <label for="subject">What specific items do you need as part of the full visual identity? (e.g., Logo, Business Cards, Letterhead, Brochures, Packaging, Social media assets, etc.)</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <label for="subject">Are there any additional items not mentioned above that you'd like to include?</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <h2>Competitor Analysis</h2>

    <label for="subject">Are there any competitors in your industry whose branding you admire or want to differentiate from? (Please provide examples if available)</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <h2>Unique Selling Points (USPs)</h2>

    <label for="subject">What are the unique qualities or features that set your brand apart from competitors?</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

<h2>Timeline</h2>

<label for="fname">Do you have a specific deadline for the completion of the full visual identity design?</label>
<input type="text" id="fname" name="firstname" placeholder="Your timeline..">

<h2>Maintenance and Updates</h2>

<label for="subject">Will you need ongoing brand design maintenance and updates after the initial design is completed?</label>
<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

<h2>Budget</h2>

<label for="fname">Do you have a budget range in mind for this branding project?</label>
<input type="text" id="fname" name="firstname" placeholder="Your budget..">

<h2>Additional Comments/Requirements</h2>  

<label for="subject">Please provide any additional information or specific requirements you have for the branding/full visual identity design.</label>
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



    
