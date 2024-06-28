<!-- Footer -->
<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="span5">
        <h3>Contact Form</h3>
        <div>         
          <form class="form-main" name="ajax-form" id="ajax-form" action="#" method="post">
            <div id="ajaxsuccess">E-mail was successfully sent.</div> 
            <div class="error" id="err-name">Please enter name</div>
            <input name="name" id="name" type="text" value="Name" onfocus="if(this.value == 'Name') this.value='';" onblur="if(this.value == '') this.value='Name';">
            
            <div class="error" id="err-email">Please enter e-mail</div>
		        <div class="error" id="err-emailvld">E-mail is not a valid format</div>
            <input  name="email" id="email" type="text" value="E-mail" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';">

            <div class="error" id="err-message">Please enter message</div>
            <textarea  name="message" id="message" onfocus="if(this.value == 'Message') this.value='';" onblur="if(this.value == '') this.value='Message';">Message</textarea><br>
            <div>
            	<div class="error" id="err-form">There was a problem validating the form please check!</div>
            	<div class="error" id="err-timedout">The connection to the server timed out!</div>
            	<div class="error" id="err-state"></div>
            </div>
            <button id="send" class="btn f-right">Send Message <i class="icon-ok"></i></button>
          </form>
        </div>
        </div>
        <div class="span3 offset3">
          <h3>HEAD OFFICE</h3>
          M # 8 & 9, Mezzanine Floor, Falaknaz Tower<br>
          Opposite Jinnah Terminal Airport<br>
          Main Shahra-e-Faisal, Karachi-75210, Pakistan<br>
          <br>
          <i class="icon-phone"></i>+92-21 34599 315, 34577 808, <br>
		  FAX +92-21 34577 365<br>
          <i class="icon-envelope"></i><a href="info@apec-products.com">info@apec-products.com</a><br>
          <i class="icon-home"></i><a href="#">www.apec-products.com</a>
          
          <div class="row space40"></div>  

          <a href="#" class="social-network sn2 twitter"></a>
          <a href="https://www.facebook.com/" class="social-network sn2 facebook"></a>
          <a href="#" class="social-network sn2 googleplus"></a>
             
        </div>
      </div>
      
      <div class="row space50"></div>
      <div class="row">
        <div class="span6">
          <div class="logo-footer">
            Designed by <a href="https://www.qbsco.com">QbsCo</a>
          </div>                       
        </div>
        <div class="span6 right">
          &copy; 2016. All rights reserved.
        </div>
      </div>

    </div>
  </footer>
  <!-- Footer End -->

  <!-- JavaScripts -->
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> 
  <script type="text/javascript" src="js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/functions.js"></script>
  <script type="text/javascript" defer src="js/jquery.flexslider.js"></script>

</body>
</html>