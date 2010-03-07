<?php $current = 10; $title = "contact"; include 'header.php'; ?>
          <section>
            <h1>Contact Me</h1>
            <div id="picture">
              <p>
                <img src="images/Evan.jpg" alt="Evan Machnic" width="200" height="300" />
              </p>
            </div>
            <p>
              Here are the many different ways to get a hold of me:
            </p>
            <ul>
              <li>
                Home Phone - 850.339.3504
              </li>
              <li>
                Cell Phone - 850.980.5302
              </li>
              <li>
                Primary Email - <a href="mailto:emachnic@gmail.com">emachnic@gmail.com</a>
              </li>
              <li>
                Alternate Email - <a href="mailto:emachnic@broadmac.net">emachnic@broadmac.net</a>
              </li>
              <li>
                <a href="http://www.linkedin.com/in/evanmachnic">LinkedIn</a>
              </li>
              <li>
                <a href="http://www.facebook.com/emachnic">Facebook</a>
              </li>
              <li>
                <a href="http://twitter.com/emachnic">Twitter</a>
              </li>
              <li>
                <a href="/calendar/">View My Calendar</a>
              </li>
            </ul>
          </section>
          <section>
            <!-- Website Contact Form Generator -->
            <!-- http://www.tele-pro.co.uk/scripts/contact_form/ -->
            <!-- This script is free to use as long as you  -->
            <!-- retain the credit link  -->
            <form method="POST" action="contact/contact.php">
              <p>Fields marked (*) are required</p>
              <p>Email From:* <br />
              <input type="text" name="EmailFrom"></p>
              <p>Subject: <br />
              <input type="text" name="Subject"></p>
              <p>Name:<br />
              <input type="text" name="Name"></p>
              <p>Body:<br />
              <textarea name="Body" style="width: 300px; height: 350px;"></textarea></p>
              <p><input type="submit" name="submit" value="Submit"></p>
            </form>
            <!-- Contact Form credit link -->
            <p>
              Created by <a target="_blank" href="http://www.tele-pro.co.uk/scripts/contact_form/">Contact 
              Form Generator</a>
            </p>
          </section>
<?php include 'footer.php'; ?>
