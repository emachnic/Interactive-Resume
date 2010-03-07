<?php $current = 1; $title = "home"; include 'header.php'; ?>
          <!--[if lt IE 8]>
          <h3 class="alert">
            This site will not view in Internet Explorer older than version 8. Please 
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">upgrade</a> your browser or download a
            different one.
          </h3>
          <!-->
          <section>
            <h1>Welcome!</h1>
            <div id="picture">
              <p>
                <img src="images/Evan_1.jpg" alt="Evan Machnic" width="200" height="300" />
              </p>
            </div>
            <p>
              My name is Evan Machnic and I am an Information Technology major at <a href="http://www.fsu.edu">
              Florida State University</a>. I am pursuing a Bachelor of Science and am specializing in Health 
              Information Technology and Web Programming. This site is an Interactive Resume, designed to 
              showcase my skills and talents. If you are unable to view this site correctly, please upgrade your browser.
              Internet Explorer is supported with the new <a href="http://code.google.com/chrome/chromeframe/">Google Chrome Frame</a> plugin
              so please install it to get full functionality. Feel free to look around my site to view my <a href="resume.php">
              resume</a>, learn more about me, and see some of the projects which I have finished and am currently 
              pursuing. There are many ways to stay connected with me including: 
              <a href="http://www.linkedin.com/in/evanmachnic">LinkedIn</a>, 
              <a href="http://www.facebook.com/emachnic">Facebook</a>, and 
              <a href="http://twitter.com/emachnic">Twitter</a>.  You can also check out my schedule and if you 
              want to set up a meeting with me, click on the <a href="http://tungle.me/emachnic">Tungle.Me</a> 
              link at the top.  Thank you for getting to know me and have a great day!
            </p>
          </section>
          <br />
          <section>
            <h1>Work Examples</h1>
            <h2>XAMPP Tutorial</h2>
            <aside>
              This video is embedded using the HTML5 &lt;video&gt; tag.  To find out more about it, just view the source.
            </aside>
            <!-- "Video for Everybody" v0.2 by Kroc Camen <camendesign.com>
              ======================================================================================================== -->
            <!-- first try native HTML5 video playback -->
            <video width="480" height="295" controls="controls" poster="images/xampp-logo-trio.jpg">
              <source src="videos/xamppTutorial.ogv" type="video/ogg" /><!-- Firefox 3.5 native OGG video -->
              <source src="videos/xamppTutorial.mp4" type="video/mp4" /><!-- Safari / iPhone video -->
              <!-- fallback to Flash -->
              <object width="480" height="295" type="application/x-shockwave-flash"
              data="http://www.youtube.com/v/-S5JUC0iEVw&amp;hl=en&amp;fs=1&amp;color1=0x3a3a3a&amp;color2=0x999999">
                <param name="movie" value="http://www.youtube.com/v/-S5JUC0iEVw&amp;hl=en&amp;fs=1&amp;color1=0x3a3a3a&amp;color2=0x999999" />
                <!-- fallback message -->
                <!-- you *must* offer a download link as they may be able to play the file locally -->
                <p>
                  <strong>No video playback capabilities detected.</strong>
                  Why not try to download the file instead?<br />
                  <a href="xamppTutorial.mp4">MPEG4 / H.264 &lquot;.mp4&rquot;? (Windows / Mac)</a> |
                  <a href="xamppTutorial.ogv">Ogg Theora &amp; Vorbis &lquot;.ogv&rquot;? (Linux)</a>
                </p>
                <p>
                  To play the video here in the webpage, please do one of the following:
                </p>
                <ul>
                  <li>Upgrade to <a href="http://getfirefox.com">Firefox v3.5</a>,
                  or <a href="http://apple.com/safari">Safari v4</a></li>
                  <li>Install <a href="http://get.adobe.com/flashplayer/">Adobe Flash Player</a></li>
                  <li>Install <a href="http://apple.com/quicktime/download/">Apple QuickTime</a></li>
                </ul>
              </object><!--<![endif]-->
            </video>
          </section>
<?php include 'footer.php'; ?>
