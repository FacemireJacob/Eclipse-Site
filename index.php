<!DOCTYPE HTML>

<HTML>

<link rel="stylesheet" type="text/css" href="CSS/index.css">

<head>
    <title>Eclipse East Landing Page</title>

<!--Top Section Above Nav Bar-->
<div id = "banner" style="background-image: url('images/promo/groupPhotoCut.jpeg');
background-size: cover; 
height: 480px;
padding:50px;  
margin-top: -10px;
margin-left: -200px;
margin-right:-10px;">
</div>

</head>

<!--Navigation-->
<div id="nav">
    <a href="index.php">Home</a>
    <a href="travel.html">Travel</a>
    <a href="games.html">Games</a>
</div>

<!--Intro Text Container-->

<body>
  <div id = "container">
  <div class = "box" style = "width = auto">
        <h1>Baltimore's premier Rhythm gaming convention is back! With more space, more machines, and more fun then last time! Registration information coming soon...</h1>
    </div>
  </div>


<!--Countdown Container-->

  <div id = "container">
  <div class = "box" style = "width = auto">
        <iframe width = "100%" src = "countdown.html" frameborder="0" scrolling = "no"></iframe>
    </div>
  </div>

  <br>
  
  <!--Container For Stats, and Embedded Video-->
   <div id = "container">
  
    <div class = "box">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/8auAuGVfwkI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    </div>
  
  <!--Container for attendee count, eventually set up Start GG API call to get attendance-->

    <div class = "box">
    <h2>Current Attendance: 0!<br>With over a dozen Unique Arcade Rhythm Games!<br>3000+ Sqft. of Space!<br>Presented by the Arrow Eclipse Staff</h2>
    <img src = "images/logos/ArrowEclipse.png" style = "max-width:20%">
    </div>
  </div>
  
  <h2>Links to our Social Media</h2>
  
  <!--Container for Social Media Image link-->
  <div id = "container">
  
    <div class = "box" style="width: 20%;">
    <a href="https://discord.gg/9gJzdUR8" style="background-color: rgba(0,0,0,0);"><img src="images/logos/discord.png" style="height: fit-content; max-height: 100px"></a>
    </div>
  
    <div class = "box" style="width: 20%;">
      <a href="https://www.facebook.com/events/907521239830595" style="background-color: rgba(0,0,0,0);"><img src="images/logos/fb.png" style="height: fit-content; max-height: 100px"></a>
    </div>
  
    <div class = "box" style="width: 20%;">
      <a href="https://www.start.gg/tournament/eclipse-east-2021/details" style="background-color: rgba(0,0,0,0);"><img src="images/logos/start.png"style="height: fit-content; max-height: 100px"></a>
    </div>
  
    <div class = "box" style="width: 20%;">
      <a href="https://twitter.com/ArrowEclipse" style="background-color: rgba(0,0,0,0);"><img src="images/logos/tw.png" style="height: fit-content; max-height: 100px"></a>
    </div>

</div>

</div>

<!--Line Breaks for Spacing-->
<br><BR><BR><BR>

<!--Container For Image Carousel-->

    <div id = "container">
      <div id = "box" style = "width:60%;">
        <div class="carousel-container">
            <div class="carouselImage">
                <img src="images/carousel/20211212_141343.jpg" style="width:100%">
            </div>
            <div class="carouselImage">
                <img src="images/carousel/2C140FE7-A153-4DB2-86AF-E81DE61435BA.jpg" style="width:100%">
            </div>
            <div class="carouselImage">
                <img src="images/carousel/winnersPump.jpg" style="width:100%">
            </div>
            <div class="carouselImage">
                <img src="images/carousel/received_4516408628394494.jpg" style="width:100%">
            </div>
        </div>
        <!--Line break to make a gap for the indicators-->
        <br>
        <!--Section for block indicators, also work with JS to allow carousel to function-->
        <div id = "indicators">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
      </div>

      <div id = "box" style = "width: 20%; align-items: center; justify-content: center; margin-left:20px">
        <h2 style = "margin-top: 50%">Come Join the Fun!</h2>
        <h2>Located in the heart of Downtown Baltimore, we provide a wide variety of sights and attraction to see inbetween all of your rhtyhm and arcade gaming sessions, with multiple arcades including the newly
          built Towson Round One a short drive away, theres something for everybody!
      </h2>
      </div>
    </div>

<script>

  //JS for Image Carousel

    let counter = 0;
    Carousel();

    function Carousel() 
    {
        //define var for looping
        let i;

        //Sets vars equal to the element of the HTML it is modifying
        let slides = document.getElementsByClassName("carouselImage");
        let dots = document.getElementsByClassName("dot");

        //hides images not actively being shown
        for (i = 0; i < slides.length; i++) 
            {
            slides[i].style.display = "none";  
            }
        //iterates image to be displayed
        counter++;

        //This if statement cycles the carousel back to the beginning when it ends
        if (counter > slides.length) 
            {
                //Reset counter var to 1
                counter = 1
            }    


        
        slides[counter-1].style.display = "block";  
        dots[counter-1].className += " active";

        //call Script every 3 seconds
        setTimeout(Carousel, 4000);
    }
</script>

<!--Container For Staff-->

<div id = "rule">Meet The Staff</div>

<div id = "container">

  <div class="box" style="width: 40%; padding: 10px;">
    <figure>
      <img src="images/Staff/SneezleOne.jpg" style="height: fit-content">
      <figcaption>Shawn "Sneezle" Harriot, Event Organizer</figcaption>
    </figure>
  </div>

  <div class="box" style="width: 40%; padding: 10px;">
    <figure>
      <img src="images/Staff/GODDISHOne.jpg"  style="height: fit-content">
      <figcaption>Jacob "GODDISH" Facemire, EO and head TO</figcaption>
    </figure>
  </div>

  <div class="box" style="width: 40%; padding: 10px;">
    <figure>
      <img src="images/Staff/TreyTwo.jpg"  style="height: fit-content">
      <figcaption>Andrew "Trey" Lissik, Event Organizer</figcaption>
    </figure>
  </div>


  <div class="box" style="width: 40%; padding: 10px;">
    <figure>
      <img src="images/Staff/AndrewOne.jpeg"  style="height: fit-content">
      <figcaption>Andrew "Hydra" Firth, Event Organizer</figcaption>
    </figure>
  </div>

</div>

<!--Container for Event Policies-->

<div id = "container", style = "flex-direction: column; align-items: center;">

  <div class = "box">
  <h1>General Behavior</h1>
  </div>

  <div class = "box">
  <h2>All Attendees are expected to abide by the RGC Code of Conduct. A full version can be found here, and a summary is provided below</h2>
  </div>

  <div class = "box">
  <p>All attendees, competing or spectating, are expected to abide by this Code of Conduct.
    No exceptions! The Keystone Code identifies four fundamental values as guides for positive
      and fulfilling engagement in gaming spaces, even while players compete with one another. 
      These four values shape our understanding of how people can harmonize themselves and interact
      with one another to foster positive communities where players from all walks of life can feel welcome. 
      Compassion: treat others as you would be treated; consider the perspectives of others. 
      You value the diverse perspectives, backgrounds, and opinions of others, even when different from your own. 
      You appreciate that all viewpoints come from the life experiences of fellow human beings. You understand that 
      online interactions impact real people in real ways, both offline and online. Integrity: be honest, be committed, play fair. 
      You behave honorably and honestly. You take responsibility for your words and actions. While playing games, you honor the rules
        and spirit of honest competition. Respect: respect all other humans, teammates and competitors alike. You respect everyone regardless 
        of their background, identity, physical appearance, or beliefs. Even in competitive gaming where “trash-talk” is common, you are a good sport and respect 
        opponents as fellow human beings, keeping the banter to the game, not ever making it personal. Courage: be courageous in competition and in standing up for 
        what is right. You have the courage to moderate your own behavior, speak out against harassment, and report violations by others. You do not tolerate harassment 
        or hate speech of any kind, even when you are not directly involved. For reference, “harassment” includes, but is not limited to: Hate speech, offensive behavior, 
        or verbal abuse related to sex, gender identity and expression, sexual orientation, race, ethnicity, disability, physical appearance, body size, age, religion, or 
        skill level. Stalking or intimidation (physically or online). Spamming, raiding, hijacking, or inciting disruption of streams or social media. Posting or threatening 
        to post other people’s personally identifying information (“doxxing”). Unwelcome sexual attention (including unwelcome sexualized comments, jokes, and sexual advances). 
        Advocating for, or encouraging, any of the above behavior. We do not tolerate harassment or hate speech in any form. Anyone violating these rules in our related communities 
        and spaces will be dealt with according to the articles below, at the discretion of tournament organizers and staff - and that may include being banned from online channels 
        and/or removed from events present and future. If you observe harassment against someone, say something! Our TOs are chosen in part for their upstanding presence in the community,
        and one of their responsibilities is to ensure a safe environment for their competitors. We will also have a channel by which you can report harassment anonymously. In addition,
          you are required to observe the venue’s policies. For example, at Round1, this includes: Shirts and shoes are required at all times. No clothing with profanity and/or objectionable
          artwork. No alcohol on the game floor. Overly intoxicated individuals will be denied admission or asked to leave. Do not vandalize, damage, or willfully misuse arcade or mall
            property.
  </p>
  </div>
  
</div>

</body>

<script>

//JS for Sticky Navigation Bar

    window.onscroll = function() {myFunction()};
    
    //Create a JS Var containing the navbar
    var navbar = document.getElementById("nav");
    //Uses an Offset value to determine whether or not you need to 'stick' the bar
    var sticky = navbar.offsetTop;
    
    function myFunction() {
    //If the scroll bar goes below apply sticking property
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
    </script>
    

</HTML>