<?php include 'http://ir.broadmac.net/header.php'; ?>
          <script type="text/javascript"> 
            function iFrameHeight() {
              var h = 0;
              if ( !document.all ) {
                h = document.getElementById('blockrandom').contentDocument.height;
                document.getElementById('blockrandom').style.height = h + 60 + 'px';
              } else if( document.all ) {
                h = document.frames('blockrandom').document.body.scrollHeight;
                document.all.blockrandom.style.height = h + 20 + 'px';
              }
            }
          </script> 
          <div class="contentpane"> 
            <iframe id="blockrandom"
              name="iframe"
              src="https://www.google.com/calendar/embed?mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%233366ff&amp;src=emacdaddy%40gmail.com&amp;color=%23A32929&amp;ctz=America%2FNew_York"
              width="600"
              height="550"
              class="wrapper"> 
              This option will not work correctly. Unfortunately, your browser does not support inline frames.
            </iframe> 
          </div>
<?php include 'http://ir.broadmac.net/footer.php'; ?>
