<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Megan Laurie Front-end Web Developer</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Portfolio" content="HTML HTML5 CSS CSS3 JavaScript SASS Gulp ReactJS Bootstrap CMS">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="//ajax.googleapis.com" rel="dns-prefetch">
  <link href="assets/css/style.min.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="bootstrap-push-menu.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="assets/components/modernizr/modernizr.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96078574-1"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="assets/js/parallax.js"></script>
  <script src="parallax.min.js"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());

    gtag('config', 'UA-96078574-1');
  </script>
</head>
<body>


      <h1 id="mini-title2">Thank You</h1>
      <h2 id="thankyoumsg">Your message has been successfully sent.</h2>

    <!--Main content of page  -->
    <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "megan@meganlaurie.ca";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    ?>

     <footer class="social-footer">
       <div>
           <ul>
             <li><a href="mailto:megan@meganlaurie.ca" target = "_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
             <li><a href="https://github.com/meglaurie" target = "_blank" ><i class="fa fa-github" aria-hidden="true"></i></a></li>
             <li><a href="https://bitbucket.org/meglaurie" target="_blank"><i class="fa fa-bitbucket" aria-hidden="true"></i></a></li>
             <li><a href="https://www.linkedin.com/in/megan-laurie-4416b9136" target = "_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
             <li><a href="https://twitter.com/Mlaurie_" target = "_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
           </ul>
         </div>
         <p class="CRF"><i class="fa fa-copyright" aria-hidden="true"></i> Copyright Megan Laurie 2017</p>
     </footer>

  </body>
</html>
