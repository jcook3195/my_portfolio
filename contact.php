<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="assets/stylesheets/layout.css">
    <link rel="stylesheet" href="assets/stylesheets/typography.css">
    <link rel="stylesheet" href="assets/stylesheets/misc.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400"/>
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16" />
</head>

<body>

<!-- Navigation -->

    <header class="jumbotron">

        <nav class="jumbotron gird nav">

            <div class="col-left">

                <h1><a href="http://jordanscook.com">Jordan Cook</a></h1>

            </div>

            <div class="col-right">

                <ul>

                    <li><a href="http://jordanscook.com">Home</a></li>
                    <li><a href="http://jordanscook.com/projects.html">My Work</a></li>
                    <li><a href="http://jordanscook.com/contact.php">Need a Website?</a></li>

                </ul>

            </div>

        </nav>

    </header>

<!-- Introduction -->

    <section class="jumbotron">

        <div class="content">
            <h3 class="header" id="contact-content">Fill out this form and I will get back in touch with you as soon as possible.</h3>
        </div>

    </section>

<!-- Contact Form -->

    <div id="contact">

        <?php 
        $action=$_REQUEST['action']; 
            if ($action=="")    /* display the contact form */ 
        { 
        ?> 
        <form  action="" method="POST" enctype="multipart/form-data"> 
                <input type="hidden" name="action" value="submit"> 
    
                <input name="name" type="text" placeholder="*Your Name" value="" size="30"/>
                <br>
                <input name="email" type="text" placeholder="*Email Address" value="" size="30"/>
                <br> 
                <textarea name="message" placeholder="*Let me know about yourself and how I can help you." rows="7" cols="30"></textarea>
                <br> 
                <input type="submit" value="Let's Go!" class="form-btn"> 
            </form> 
        <?php 
        }  
            else                /* send the submitted data */ 
        { 
        $name=$_REQUEST['name']; 
        $email=$_REQUEST['email']; 
        $message=$_REQUEST['message']; 
        if (($name=="")||($email=="")||($message=="")) 
            { 
            echo "All fields are required, please fill <a href=\"\">the form</a> again.";
            } 
        else{        
            $from="From: $name<$email>\r\nReturn-path: $email"; 
            $subject="Message sent using your contact form"; 
            mail("jordan@jordanscook.com", $subject, $message, $from);
            echo '
    <section class="jumbotron">

        <div class="content">
            <h3 class="header">Thank you for your interest, I will respond to you with an email ASAP! 
            <br>
            <br>
            Can&#8217;t wait to talk!</h3>
        </div>

    </section>'; 
        }  
        }   
        ?>

    </div> 

<!-- Footer -->

    <footer class="footer grid jumbo-neg">

        <section class="col-2-3 col-left font-2 nav-footer">

            <ul>
                <li><a href="http://jordanscook.com">Home</a></li>
                <li><a href="http://jordanscook.com/projects.html">My Work</a></li>
                <li><a href="http://jordanscook.com/contact.php">Need a Website?</a></li>
            </ul>

            <p>&copy; Jordan Cook Website Design and Development <span class="version">V1.1</span></p>

        </section>

        <section class="col-1-3 col-right">

            <a href="https://www.facebook.com/jordan.cook.9041"><img src="assets/images/icons/facebook.png" alt="Facebook Icon"></a>
            <a href="https://twitter.com/jordancookdev"><img src="assets/images/icons/twitter.png" alt="Twitter Icon"></a>
            <a href="https://www.linkedin.com/in/jordan-cook-643225112?trk=hp-identity-name"><img src="assets/images/icons/linkedin.png" alt="Linkedin Icon"></a>
            <a href="https://github.com/jcook3195"><img src="assets/images/icons/github.png" alt="GitHub Icon"></a>

        </section>

        <section class="col-1-3 col-right font-2 address">
            <p>87 Persimmon Way
                <br>
            Sparta, GA 31087
                <br>
            jordan@jordanscook.com</p>
        </section>

    </footer>

</body>

</html>