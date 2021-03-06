<?php

function insertText($textPath,$title,$script){
  if (!file_exists($textPath)){
    echo "...no such file....";
  } else {
      $text = file_get_contents($textPath);
      $text=str_replace("%title_replace%",$title, $text);
      $text=str_replace("%js_replace%",$script,$text);
      echo $text;
    };
  };


  insertText("texts/intro_header.txt","Video for Theater/doublelucky","script.js");

 ?>
  <body>
      <main id="homepage" class="flexContainer">
          <article id='designsArt' class='artBox size40 height45vh fade2 clicker'>
            <h2 class="boxTitle">Video for Theater</h2>
            <img loading="eager"src="http://d1ua7ibh28zfpl.cloudfront.net/images/DisconnectedChild.jpg">
          </article>
          <article id='introArt' class='artBox size15 height45vh fade2'>
            <div id='iContainer'>

                <div id="aboutTit" class="i_main clicker">Chris Kondek</div>
                <div id="i2" class='i_sub'>creates</div>
                <div id="designsTit" class="i_main clicker">&lt- Video for Theater</div>
                <div id="i4" class="i_sub">and is a member of</div>
                <div id="doubleluckyTit" class="i_main clicker">-&gt doublelucky productions</div>

            </div>

          </article>
          <article id='doubleluckyArt' class='artBox size25 height45vh fade2 clicker'>
            <h2 class="boxTitle">doublelucky productions</h2>
            <img loading="eager" src="http://d1ua7ibh28zfpl.cloudfront.net/images/HairsPoster_500.jpg">
          </article>
            <div id="spacerBox"></div>

          <article id='upcomingArt' class='artBox size20 fade2'>
            <h3 class="boxTitle">upcomming</h3>
              <section id="upcoming1Art" class="splitBox4 clicker">
                <h3 class="boxTitle tightMarginTop">Garden of Tangled Data</h3>
                <h4 class="upcomingText">
                  <?php
                  insertText("texts/upcoming1.txt","","");
                  ?>
                </h4>
              </section>

              <section id="upcoming2Art" class="splitBox4 clicker">
                <h3 class="boxTitle tightMarginTop">Dantons Tod</h3>
                <h4 class='upcomingText'>
                  <?php
                  insertText("texts/upcoming2.txt","","");
                  ?>
                </h4>
              </section>
              <section id="upcoming3Art" class="splitBox4 clicker">
                <h3 class="boxTitle tightMarginTop">Touch</h3>
                <h4 class='upcomingText'>
                  <?php
                  insertText("texts/upcoming3.txt","","");
                  ?>
                </h4>
              </section>
              <section id="upcoming4Art" class="splitBox4 reveal clicker">
                <h3 class="boxTitle tightMarginTop">Kunstfest Weimar</h3>
                <h4 class='upcomingText'>
                  <?php
                  insertText("texts/upcoming4.txt","","");
                  ?>
                </h4>
              </section>

          </article>

          <article id='dataTheoryArt' class='artBox size20 fade2'>
            <section id="videoNotesArt" class="splitBoxEl clicker">
              <h3 class="boxTitle">Theory of Video</h3>
              <h4 class='whiteText'>
                <?php

                insertText("texts/videoNotes.txt","","");
                ?>
              </h4>
            </section>

            <section id="dataTheaterArt" class="splitBoxEl clicker">
              <h3 class="boxTitle">Data_Theater</h3>
              <h4 class='whiteText'>
                <?php

                insertText("texts/dataTheater.txt","","");
                ?>
              </h4>

            </section>

          </article>
          <article id='videosArt' class='artBox size20 fade2 clicker'>
            <h2 class="boxTitle">some Videos</h2>
          </article>

      </main>
  </body>

</html>
