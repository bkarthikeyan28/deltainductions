<?php session_start();?><html>
<head>
</head>
<style>
	body{
		font-family:ubuntu,verdana,sans-serif;
		background-image: url(bg01.jpg);
	}
	h1{
		font-family:"Verdana";
		text-align:center;
	}
	#wrapper{
		text-align:center;
	}
  #container{
    width:auto;
    height: 140px;
    border-bottom: 1px solid #dbdbdb;
  }
	#header{
		width:auto;
		height:38px;
		background-color:rgb(71,145,194);
		box-shadow:0 0 5px rgb(71,145,194);
	}
  #social{
    width:auto;
    height:200px;
    border-bottom: 1px solid #dbdbdb;
  }
	.logo{
		position:absolute;
		left:20px;
		top:30px;
	}
	input.search-box {
		width: 300px;
		border: 1px solid #ddd;
		border-top-left-radius: 1em;
		border-bottom-left-radius: 1em;
		color: #222;
		outline: none
	}
	input {
	padding: 8px;
	margin: 4px 0 20px 0;
	background: #fff;
	width: 220px;
	font-size: 14px;
	color: #555;
	border: 1px #ddd solid;
	-webkit-box-shadow: 0px 0px 4px #aaa;
	-moz-box-shadow: 0px 0px 4px #aaa;
	box-shadow: 0px 0px 4px #aaa;
	-webkit-transition: background 0.3s linear;
	}
#socialtootls {
  position: relative;
}
#sharebutton {
position: absolute;
margin: 0px 0px 0px 250px;
}
.fb_share_count_nub_top {
top: 45px !important;
}
.fb_share_count_top {
line-height: 28px !important;;
font-size: 16px !important;;
}	
</style>
<body>
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '480590642029574', // App ID
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true  // parse XFBML
      });

      // Additional initialization code here
    };
    // Load the SDK Asynchronously
    (function(d){
       var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement('script'); js.id = id; js.async = true;
       js.src = "//connect.facebook.net/en_US/all.js";
       ref.parentNode.insertBefore(js, ref);
     }(document));
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=480590642029574";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
function show(){
	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// cde for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if(xmlhttp.readyState==1)
  		document.getElementById("table").innerHTML="Please Wait While Loading........";
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("table").innerHTML=xmlhttp.responseText;
    }
}
  var str=document.getElementById("object").value;
  xmlhttp.open("GET","test.php?q="+str,true);
  xmlhttp.send();
}
  </script>
<div id="wrapper">
        <h1>Online Price Searcher</h1>

        <div id="container">
            <div id="header">
                <div class="logo"><img src="./shopping1.jpg"></div>
                <ul align="center">
                  <a href="login.php">
                    <li class="login">Login</li>
                  </a>
                </ul>
            </div>
        </div>
</div>

  <div id="social">
    <div id="socialtools">
        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fdeltapricechecker&amp;width=292&amp;height=100&amp;show_faces=true&amp;colorscheme=light&amp;stream=true&amp;show_border=true&amp;header=true&amp;appId=480590642029574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:100px;" allowTransparency="true"></iframe>
    </div>
    
  </div>
    <div id="contain">
        <form>
            <div id="search">
                <input type="text" name="object" id="object"> <input type="button" id="submit" value="submit" onclick="show();">
            </div>
        </form>
        <div id="info">
        <p>Please Enter the Name Of The Product Above and it finds price
        from</p><br>
       <div id="table"></div>
        </div>
    </div>
    <script type="text/javascript" src="https://mylivechat.com/chatinline.aspx?hccid=18163488"></script>
</body>

</html>
