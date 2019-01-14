<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "d431d098e8879f15f2114451b17581c38da5d51dc3"){
                                        if ( file_put_contents ( "/var/www/vhosts/spacegm.com/art.spacegm.com/wp-content/themes/flatsome-child/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/vhosts/spacegm.com/art.spacegm.com/wp-content/plugins/wpide/backups/themes/flatsome-child/header_2018-10-29-09.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><!DOCTYPE html>
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="ie9 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="ie8 <?php flatsome_html_classes(); ?>"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:800" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); /* Body classes is added from inc/helpers-frontend.php */ ?>>
<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>
<div id="wrapper">
<?php do_action('flatsome_before_header'); ?>

<header id="header" class="header <?php flatsome_header_classes();  ?>">
   <div class="header-wrapper">
	<?php
		get_template_part('template-parts/header/header', 'wrapper');
	?>
   </div><!-- header-wrapper-->
</header>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mousewheel.min.js"></script>

<?php do_action('flatsome_after_header'); ?>
<style>

#modalContainer {
    background-color:rgba(25, 23, 23, 0.59);
    position:absolute;
    width:100%;
    height:100% !important;
    top:0px;
    left:0px;
    z-index:10000;
    background-image:url(tp.png); /* required by MSIE to prevent actions on lower z-index elements */
}

#alertBox {
    position: relative !important;
    width: 400px;
    min-height: 191px;
    margin-top: 23%;
    margin-left: 38%;
    padding-bottom: 27px;
    border: 1px solid #666;
    background-color: rgb(236, 241, 249);
    background-repeat: no-repeat;
    background-position: 20px 30px;
}

#modalContainer > #alertBox {
    position:fixed;
}

#alertBox h1 {
    margin: 0;
    background-color: rgba(237,241,250,0.95);
    border-bottom: none;
    /*font-size: 26px;*/
    padding: 23px 0px 40px 5px;
    text-align: center;
    /*font-family: 'Crimson Text', serif;*/
    font-size: 21px !important;
    font-weight: 400 !important;
    font-family: 'Montserrat', sans-serif;
    color: #5b5b5b;
}

#alertBox p {
    font:0.7em verdana,arial;
    height:50px;
    padding-left:5px;
    margin-left:55px;
}

#alertBox #closeBtn {
    line-height: 0;
    background-color: #1c62af !important;
    opacity: 1 !important;
    /*font-size: 16px !important;*/
    color: #cac2c2 !important;
    /*font-weight: bold !important;*/
    display: block;
    position: relative;
    margin: 5px auto;
    padding: 20px;
    border: 0 none;
    width: 100px;
    /*font-family: 'Crimson Text', serif;*/
    text-transform: uppercase;
    text-align: center;
    border-radius: 3px;
    text-decoration: none;
    font-weight: 400 !important;
    font-family: 'Montserrat', sans-serif;
  
}


/* unrelated styles */

#mContainer {
    position:relative;
    width:600px;
    margin:auto;
    padding:5px;
    border-top:2px solid #000;
    border-bottom:2px solid #000;
    font:0.7em verdana,arial;
}

h1,h2 {
    margin:0;
    padding:4px;
    font:bold 1.5em verdana;
   
}

code {
    font-size:1.2em;
    color:#069;
}

#credits {
    position:relative;
    margin:25px auto 0px auto;
    width:350px; 
    font:0.7em verdana;
    border-top:1px solid #000;
    border-bottom:1px solid #000;
    height:90px;
    padding-top:4px;
}

#credits img {
    float:left;
    margin:5px 10px 5px 0px;
    border:1px solid #000000;
    width:80px;
    height:79px;
}

.important {
    background-color:#F5FCC8;
    padding:2px;
}

code span {
    color:green;
}
.page-wrapper {
    padding-top: 0;
    padding-bottom: 0;
}
</style>  

<script>

var ALERT_BUTTON_TEXT = "Ok";

function createCustomAlert() {
    d = document;

    //if(d.getElementById("modalContainer")) return;

    mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
    mObj.id = "modalContainer";
    mObj.style.height = d.documentElement.scrollHeight + "px";

    alertObj = mObj.appendChild(d.createElement("div"));
    alertObj.id = "alertBox";
    //if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
    //alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
    alertObj.style.visiblity="visible";

    h1 = alertObj.appendChild(d.createElement("h1"));
    h1.appendChild(d.createTextNode("Your inquiry has been sent successfully !"));

    msg = alertObj.appendChild(d.createTextNode(""));
    //msg.appendChild(d.createTextNode(txt));
    //msg.innerHTML = "Thank you";

    btn = alertObj.appendChild(d.createElement("a"));
    btn.id = "closeBtn";
    btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
    btn.href = "#";
    btn.focus();
    btn.onclick = function() { removeCustomAlert();return false; }

    alertObj.style.display = "block";

}

function removeCustomAlert() {
    document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
}
</script>

<?php 
		global $wpdb;
        if(isset($_POST['trans_sub'])):

	        $from_name = sanitize_text_field($_POST['trans_name']);
	        $from_phone = sanitize_text_field($_POST['trans_pre']);
            $from_email = sanitize_text_field($_POST['trans_doc']);
            $from_mesg = sanitize_text_field($_POST['trans_num']);
            $from_mesg_doc = sanitize_text_field($_POST['trans_doc_phone']);
            
			         
            $to="wpj@gmicro.us";
			$subject="Dispensing Transfer Prescription";
		    $sendmail="User Details: \n Name of the pharmacy: ". $_POST['trans_name'] ." \n Prescription number: " .$_POST['trans_pre']."\n Pharmacy phone number: ".$_POST['trans_num']."\n Doctor name: ".$_POST['trans_doc']."\n Doctor Phone Number: ".$_POST['trans_doc_phone'];

            if (wp_mail($to, $subject, $sendmail)) {
                echo '<p class="registration successful">Thank you for submitting your requirements. One of our representatives will shortly be in touch with you.</p>';
            } else {
                _e("Server Error: WordPress mail method failed!", 'framework');
            }

        else:
            //_e("Invalid Request !", 'framework');
        endif;
		
?>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<main id="main" class="<?php flatsome_main_classes();  ?>">
