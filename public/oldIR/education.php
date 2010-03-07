<?php $current = 3; $title = "education"; include 'header.php'; ?>
          <section style="min-height: 550px;">
            <h1>Education</h1>
            <ul>
              <li>
                <a href="education/infoServices.html" onClick="makerequest('education/infoServices.html', 'targetDiv');return false;">Information Services</a>
              </li>
              <li>
                <a href="education/infoOrganization.html" onClick="makerequest('education/infoOrganization.html', 'targetDiv'); return false;">Information Organization</a>
              </li>
              <li>
                <a href="education/webServices.html" onClick="makerequest('education/webServices.html', 'targetDiv'); return false;">Web Services</a>
              </li>
              <li>
                <a href="education/networking.html" onClick="makerequest('education/networking.html', 'targetDiv'); return false;">Networking</a>
              </li>
            </ul>
            <section id="targetDiv">
            </section>
          </section>
<?php include 'footer.php'; ?>
