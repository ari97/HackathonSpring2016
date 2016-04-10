<!DOCTYPE html>
  <html>
    <head>
      <title>
        <?php
        $title = "About Us";
        echo $title;
        ?>
      </title>
      <link rel="stylesheet" type="text/css" href="About.css" />
    </head>
    
    <body>
      <div id="header">
        <h1>
          <?php
            echo $title;
          ?>
        </h1>
      </div>
      <br />
      <div class="description">
        <h1>
          <?php
            $header = "Marist Forums"; //subject to change
            echo $header;
          ?>
        </h1>
        <div class="body">
          <p> Marist Forums is a simple and innovative way for students, faculty, and staff to submit posts about the issues within certain departments on the campus. Founded by three Marist students (Ariel Camillo, Evan McElheny, and Trevor Pirone) users have the ability to vote up apost if they agree or vote down if they are a huge douchebag.
          Posts with the highest vote counts are more likely to be considered for implementation by the administration to resolve the issues that the community is facing. Moderators are chosen by site adminstrators and they have the ability to flag inappropriate posts,
          so when one is submitting a suggestion be careful not to be too offensive or vulgar!
          </p>
        </div>
      </div>
      <br />
      <div class="description">
        <h1>
          <?php
            $mission = "Marist Mission"; //subject to change
            echo $mission;
          ?>
        </h1>
        <div class="body">
          <p> "Marist is dedicated to helping students develop the intellect, character, and skills  required for enlightened, ethical, and productive lives in the global community of the 21st century."
          <br />
          <br />
          The College fulfills its mission by pursuing three ideals: excellence in education, a sense of community, and a commitment to service. These ideals were handed down to us by the Marist Brothers who founded the College. 
          Now an independent institution governed by a lay board of trustees, Marist continues to embrace the three ideals as an integral part of the College mission. 
          </p>
        </div>
      </div>
      <br />
      <footer>
        <p id="text">2016 Copyright The Three Hackateers</p>
      </footer>
    </body>
  </html>