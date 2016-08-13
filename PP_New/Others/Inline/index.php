<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML5 Inline Content Editing with jQuery, PHP & MYSQL</title>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(function(){
	//acknowledgement message
    var message_status = $("#status");
    $("td[contenteditable=true]").blur(function(){
        var field_userid = $(this).attr("id") ;
        var value = $(this).text() ;
        $.post('ajax.php' , field_userid + "=" + value, function(data){
            if(data != '')
			{
				message_status.show();
				message_status.text(data);
				//hide the message
				setTimeout(function(){message_status.hide()},1000);
			}
        });
    });
	
	
	 jQuery('.s_download').click(function(){
			var semail = jQuery("#itzurkarthi_email").val();
			if(semail == '')
			{
				alert('Enter Email');
				return false;
			}
			var str = "sub_email="+semail
			jQuery.ajax({
				type: "POST",
				url: "download.php",
				data: str,
				cache: false,
				success: function(htmld){
						jQuery('#down_update').html(htmld);
				}
			});
	  });
	
});
</script>
<style>
table.zebra-style {
	font-family:"Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	text-align:left;
	border:1px solid #ccc;
	margin-bottom:25px;
	width:90%
}
table.zebra-style th {
	color: #444;
	font-size: 13px;
	font-weight: normal;
	padding: 10px 8px;
}
table.zebra-style td {
	color: #777;
	padding: 8px;
	font-size:13px;
}
table.zebra-style tr.odd {
	background:#f2f2f2;
}
body {
	background:#fafafa;
}
.container {
	width: 800px;
	border: 1px solid #C4CDE0;
	border-radius: 2px;
	margin: 0 auto;
	height: 1300px;
	background:#fff;
	padding-left:10px;
}
#status { padding:10px; background:#88C4FF; color:#000; font-weight:bold; font-size:12px; margin-bottom:10px; display:none; width:90%; }
</style>
</head>
<body>
<div class="container"><br>
<center>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-5104998679826243";
/* mysite_indivi */
google_ad_slot = "0527018651";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>

  <h1>HTML5 Inline Edit with jQuery Ajax, PHP & MYSQL - W3lessons.info</h1>
  <div id="status"></div>
<table class="table zebra-style">
    <thead>
      <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
      </tr>
    </thead>
    <tbody>
      <tr class="odd">
        <td>1</td>
        <td id="first_name:1" contenteditable="true">Karthikeyan</td>
        <td id="last_name:1" contenteditable="true">K</td>
        <td id="city:1" contenteditable="true">Chennai</td>
      </tr>
      <tr>
        <td>2</td>
        <td id="first_name:2" contenteditable="true">Facebook</td>
        <td id="first_name:2" contenteditable="true">Inc</td>
        <td id="first_name:2" contenteditable="true">California</td>
      </tr>
      <tr class="odd">
        <td>3</td>
        <td id="first_name:3" contenteditable="true">W3lessons</td>
        <td id="first_name:3" contenteditable="true">Blog</td>
        <td id="first_name:3" contenteditable="true">Chennai, India</td>
      </tr>
    </tbody>
 </table>
 <br>
<br>

  <center>
  <script type="text/javascript"><!--
google_ad_client = "ca-pub-5104998679826243";
/* mysite_content */
google_ad_slot = "2545318173";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>
<br>

<div id="fb_download">
  <h4>Download script for subscribed users only!</h4>
  <table>
  <tr>
  <td>Enter your email : </td><td><input type="text" style="width:200px; padding:2px;" name="sub_email" id="itzurkarthi_email" value=""></td><td><input class="s_download" type="button" value="Download"></td>
  </tr>
  </table>
  
  <div id="down_update" style="padding:5px;"> </div>
  
  <h4>New users please subscribe here!</h4>
  <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=nextweb2', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
   <table>
  <tr>
  <td>Enter your email :</td><td><input type="text" style="width:200px; padding:2px;" name="email"/><input type="hidden" value="nextweb2" name="uri"/><input type="hidden" name="loc" value="en_US"/></td><td><input type="submit" class="uibutton" value="Subscribe" /></td>
  </tr>
  <tr>
  <td colspan="3" align="center"><p><a href="http://feeds.feedburner.com/nextweb2"><img src="http://feeds.feedburner.com/~fc/nextweb2?bg=99CCFF&amp;fg=444444&amp;anim=0" height="26" width="88" style="border:0" alt="" /></a></p></td>
  </tr>
  </table>
  </form>
  
  <p><font color="#FF0000">Note</font> : New subscribers email data will be updated every 10 hours</p>
  
  
  </div>

 <br>

<center>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-5104998679826243";
/* mysite_indivi */
google_ad_slot = "0527018651";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</center>

</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=itzurkarthi"></script>
<script type="text/javascript">
  addthis.layers({
    'theme' : 'dark', 
    'follow' : {},  
    'whatsnext' : {},  
    'recommended' : {
      'title': 'Recommended for you:'
    } 
  });
</script>
<!-- AddThis Smart Layers END -->

<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_floating_style addthis_counter_style" style="left:10px;top:150px;">
<a class="addthis_button_facebook_like" fb:like:layout="box_count"></a>
<a class="addthis_button_tweet" tw:count="vertical"></a>
<a class="addthis_button_google_plusone" g:plusone:size="tall"></a>
<a class="addthis_counter"></a>
</div>

    <!-- Start of Woopra Code -->
<script type="text/javascript">
function woopraReady(tracker) {
    tracker.setDomain('w3lessons.info');
    tracker.setIdleTimeout(1800000);
    tracker.track();
    return false;
}
(function() {
    var wsc = document.createElement('script');
    wsc.src = document.location.protocol+'//static.woopra.com/js/woopra.js';
    wsc.type = 'text/javascript';
    wsc.async = true;
    var ssc = document.getElementsByTagName('script')[0];
    ssc.parentNode.insertBefore(wsc, ssc);
})();
</script>
<!-- End of Woopra Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27820211-3', 'w3lessons.info');
  ga('send', 'pageview');
</script>
  <center>
    <a href="http://w3lessons.info">by Karthikeyan K</a>
  </center>
</body>
</html>