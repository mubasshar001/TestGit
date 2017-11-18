<!DOCTYPE html>
<html>
<head>
    <title>FREYSSINET SAUDI ARABIA</title>
    <!-- begin meta -->
    <meta http-equiv="Content-Type" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8, IE=9, IE=10">
    <meta name="description" content="FREYSSINET SAUDI ARABIA">
    <meta name="keywords" content="FREYSSINET SAUDI ARABIA">
    <meta name="author" content="Ixtendo">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- end meta -->
    <script src="jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="jquery.bxslider.css">
    <link href="main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" media="screen" type="text/css" href="datepicker.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="images/favicon.ico">
    

</head>
<body>
    <div id="main-container">
        <div id="header">

            <div id="main-menu">
                <a href="http://www.fsa.com/" id="logo"></a>
                <ul id="main">
                    <li>
                        <a href="index.html">Home</a>

                    </li>

                    <li>
                        <a href="VisionMission.html">Vision & Mission</a>
                    </li>
                    <li>
                        <a href="Projects.html">Projects</a>
                    </li>
                    <li>
                        <a href="#">Portal</a>
                        <ul>
                            <li><a href="https://portal.office.com" target="_blank">Webmail</a></li>
                            <li><a href="http://otrs.fsa.com.sa:9090/otrs/login.php" target="_blank">FSA IT Help Desk</a></li>
                            <li><a href="http://shareapp.fsa.com.sa/" target="_blank">FSA SharePoint</a></li>
                        </ul>

                    </li>
					<li>
                        <a href="VendorApplication.html">Vendor Application</a>
                    </li>
                    <li>
                        <a href="ContactUs.html">Contact Us</a>

                    </li>

                </ul>

                <div class="col-md-3 h1">
                    <h1>Freyssinet</h1>
                    <h6>S A U D I&nbsp;&nbsp;&nbsp;A R A B I A</h6>
                </div>
            </div>
        </div>
        <div id="mobile-header">
            <a href="http://www.fsa.com.sa/" id="mobile-logo"></a> <a href="" id="menu-switch"></a>
            <div id="mobile-main-menu">
                <!--      <a href="?lang=--><!--" id="mob-lang">--><!--</a>-->
                <a href="" id="close-switch"></a>
                <ul id="main">
                    <li>
                        <a href="index.html">Home</a>

                    </li>

                    <li>
                        <a href="VisionMission.html">Vision & Mission</a>
                    </li>
                    <li>
                        <a href="Projects.html">Projects</a>
                    </li>
                    <li>
                        <a href="#">Portal</a>
                        <ul>
                            <li><a href="https://portal.office.com" target="_blank">Webmail</a></li>
                            <li><a href="http://otrs.fsa.com.sa:9090/otrs/login.php" target="_blank">FSA IT Help Desk</a></li>
                            <li><a href="http://shareapp.fsa.com.sa/" target="_blank">FSA SharePoint</a></li>

                        </ul>

                    </li>
					<li>
                        <a href="VendorApplication.html">Vendor Application</a>
                    </li>
                    <li>
                        <a href="ContactUs.html">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
        <div id="page" class="about-us-page">
            <h1>Vendor Application</h1>

            <div id="inner-content">
                <div id="featured-work">

                    <?php
					

if($_SERVER["REQUEST_METHOD"] === "POST")
{

    $recaptcha_secret = "6LclMCwUAAAAAJd8yLtwAGWRdHbCbzmuSh0MX8PB";
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
    $response = json_decode($response, true);

    if($response["success"] === true){
        if($_POST && isset($_FILES['file']))
{
	
    $from_email = "info@fsa.com.sa "; //from email using site domain.
    $subject = "Vendor Application"; //email subject line
    $sender_email = "leo@fsa.com.sa";//filter_var($_POST["InputContactEmail"], FILTER_SANITIZE_STRING); //capture sender email
    $Comments = filter_var($_POST["s_message"], FILTER_SANITIZE_STRING); //capture message
	$businessName = filter_var($_POST["businessName"], FILTER_SANITIZE_STRING); 
	$InputMainOfficeAddress = filter_var($_POST["InputMainOfficeAddress"], FILTER_SANITIZE_STRING);
	$OfficeAddress = filter_var($_POST["OfficeAddress"], FILTER_SANITIZE_STRING);
	$InputBusinessType = filter_var($_POST["CboBusinessType"], FILTER_SANITIZE_STRING);
	$InputBusinessCategory = filter_var($_POST["InputBusinessCategory"], FILTER_SANITIZE_STRING);
	$InputBusinessYears = filter_var($_POST["InputBusinessYears"], FILTER_SANITIZE_STRING);
	$InputTelephoneNumber = filter_var($_POST["InputTelephoneNumber"], FILTER_SANITIZE_STRING);
	$InputFaxNumber = filter_var($_POST["InputFaxNumber"], FILTER_SANITIZE_STRING);
	$Inputemail = filter_var($_POST["Inputemail"], FILTER_SANITIZE_STRING);
	$InputWebsite = filter_var($_POST["InputWebsite"], FILTER_SANITIZE_STRING);
	$InputContactName = filter_var($_POST["InputContactName"], FILTER_SANITIZE_STRING);
	$InputContactNumber = filter_var($_POST["InputContactNumber"], FILTER_SANITIZE_STRING);
	$InputContactEmail = filter_var($_POST["InputContactEmail"], FILTER_SANITIZE_STRING);
	$recepient_email = $sender_email; //recepient
	//$option= $_POST['option'];
	$displayjson = $_POST['displayjson'];
	$ProductDesc = filter_var($_POST['ProductDesc'], FILTER_SANITIZE_STRING);
	$InputBranchesCitiesList = filter_var($_POST['InputBranchesCitiesList'], FILTER_SANITIZE_STRING); 
	$InputloyalClients = filter_var($_POST['InputloyalClients'], FILTER_SANITIZE_STRING);
	$InputSalesgrowth = filter_var($_POST['CboSalesgrowth'], FILTER_SANITIZE_STRING); 
	$Selection = $_POST['SelectedGroups'];
	
	$sender_message = "<html>
<head>
<title>Vendor Application</title>
<style>
table {
  width: 100%;
  border-style: solid;
border-color: #0000ff #0000ff;
    border-width: 1px;
	border-collapse:collapse;
}

thead th:nth-child(1) {
  width: 5%;
}

thead th:nth-child(2) {
  width: 5%;
}

thead th:nth-child(3) {
  width: 5%;
}

thead th:nth-child(4) {
  width: 5%;
}

th, td {
  padding: 5px;
}</style>
</head>
<body>A message was submitted from the Vendor Application Form.  The following information was provided." . "<br><br><br><table width='100%' border='1'>" ;
	$sender_message .= "<tr><td><b>Business Name:</b></td><td>" . $businessName . "</td></tr>";
	$InputMainOfficeAddress .= "<tr><td><b>Main Office Address:</b></td><td>" . $InputMainOfficeAddress . "</td></tr>";
	$sender_message .= "<tr><td><b>Local Office Address:</b></td><td> " . $OfficeAddress . "</td></tr>";
	$sender_message .= "<tr><td><b>Number of Branches and list of Cities:</b></td><td> " . $InputBranchesCitiesList . "</td></tr>";
	$sender_message .= "<tr><td><b>Business Type:</b></td><td> " . $InputBusinessType . "</td></tr>";
	$sender_message .= "<tr><td><b>Business Category:</b></td><td> " . $displayjson . "</td></tr>";
	$sender_message .= "<tr><td><b>Years in Business:</b></td><td> " . $InputBusinessYears . "</td></tr>";
	$sender_message .= "<tr><td><b>Telephone Number:</b></td><td> " . $InputTelephoneNumber . "</td></tr>";
	$sender_message .= "<tr><td><b>Fax Number:</b></td><td> " . $InputFaxNumber . "</td></tr>";
	$sender_message .= "<tr><td><b>Email:</b></td><td> " . $Inputemail . "</td></tr>";
	$sender_message .= "<tr><td><b>Website:</b></td><td> " . $InputWebsite . "</td></tr>";
	$sender_message .= "<tr><td><b>Contact Name:</b></td><td> " . $InputContactName . "</td></tr>";
	$sender_message .= "<tr><td><b>Contact Number:</b></td><td> " . $InputContactNumber . "</td></tr>";
	$sender_message .= "<tr><td><b>Contact Email:</b></td><td> " . $InputContactEmail . "</td></tr>";	
	$sender_message .= "<tr><td><b>Additional Information:</b></td><td> " . $Comments . "</td></tr>";
	$sender_message .= "<tr><td><b>Name your loyal Clients (at least 3 years straight of retention):</b></td><td> " . $InputloyalClients . "</td></tr>";
	$sender_message .= "<tr><td><b>Sales growth from the last 3 Years:</b></td><td> " . $InputSalesgrowth . "</td></tr>";	
	$sender_message .= "<tr><td><b>PRODUCT DESCRIPTION:</b></td><td> " . $ProductDesc . "</td></tr></table><br><br>";	

	//$sender_message .= "<b>PRODUCT DESCRIPTION:</b> ". "<br><br><br><table width='100%' border='1'>";
	
	//foreach ($option as $key => $value)
//{
	//$sender_message .=  "<tr><td>" . $value . "</td></tr>";
//}

//$sender_message .= "</table></body></html>";



	$sender_message .= "</body></html>";
	
	//php validation
    if(strlen($businessName)<4){
        die('Name is too short or empty');
    }
	if (!filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
	  die('Invalid email');
	}
	
	
	$attachments = $_FILES['file'];
	
	$file_count = count($attachments['name']); //count total files attached
	$boundary = md5("sanwebe.com"); 
	
	
	
	if($file_count > 0)
	{ //if attachment exists
		//header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$sender_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
        //message text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/html; charset=UTF-8\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
        $body .= chunk_split(base64_encode($sender_message)); 
		
		//attachments
		for ($x = 0; $x < $file_count; $x++){		
			if(!empty($attachments['name'][$x])){
				//$AllowedExtensions = ('pdf','doc','docx','gif','jpeg','jpg','png','rtf','txt');
				if($attachments['error'][$x]>0) //exit script and output error if we encounter any
				{
					$mymsg = array( 
					1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini", 
					2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form", 
					3=>"The uploaded file was only partially uploaded", 
					4=>"No file was uploaded", 
					6=>"Missing a temporary folder" ); 
					die($mymsg[$attachments['error'][$x]]); 
				}
				
				//get file info
				$file_name = $attachments['name'][$x];
				$file_size = $attachments['size'][$x];
				$file_type = $attachments['type'][$x];
				//$extension = strtolower($path_parts["extension"]);
				//if(!in_array($extension, $AllowedExtensions)) { die("Extension not allowed"); }
				//read file 
				$handle = fopen($attachments['tmp_name'][$x], "r");
				$content = fread($handle, $file_size);
				fclose($handle);
				$encoded_content = chunk_split(base64_encode($content)); //split into smaller chunks (RFC 2045)
				
				$body .= "--$boundary\r\n";
				$body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
				$body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
				$body .="Content-Transfer-Encoding: base64\r\n";
				$body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
				$body .= $encoded_content; 
			}
		}

	}else{ //send plain email otherwise
       $headers = "From:".$from_email."\r\n".
        "Reply-To: ".$sender_email. "\n" .
        "X-Mailer: PHP/" . phpversion();
        $body = $sender_message;
	}
	
	
	
	
	 $sentMail = @mail($recepient_email, $subject, $body, $headers);
	if($sentMail) //output success or failure messages
	{       
		echo('<div>Thank you for registering, we will get in touch with you shortly.</div>');
	}else{
		die('Could not send mail! Please check your PHP mail configuration.');  
	}
}
    }else{
        echo "You are a robot";
    }

}
					




?>
                        <div class="clearFix"></div>
                    </div>
            </div>


        </div>
        <div id="footer">

            <div id="sub-footer">
                <ul>
                    <li id="copyright">FREYSSINET SAUDI ARABIA 2017. All rights reserved.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- begin JS -->

    <script type="text/javascript" src="jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>
    <script type="text/javascript" src="jquery.quicksand.js"></script>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>


