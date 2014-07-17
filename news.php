<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
              <title>My Stocks</title>
        <link type="text/css" rel="stylesheet" href="/stylesheet.css"/>
        <script src="scripts/jquery.js"></script>
        <link rel="stylesheet" href="css/animations.css">
	<script type="text/javascript" src="scripts/fasw.transitions.min.js"></script>

        
        
             <script type="text/javascript">
$(function(){
   loadFunc();
});
            </script>
     <script type="text/javascript">
        function loadFunc(){
            if(localStorage.flag==="set"){

            if (localStorage.one==="true"){
                $(tdone).show('slow');
            }            
                        if (localStorage.two==="true"){
                $(tdtwo).toggle('slow');
            }
                        if (localStorage.three==="true"){
               $(tdthree).toggle('slow');
            }
                        if (localStorage.four==="true"){
               $(tdfour).toggle('slow');
            }
                        if (localStorage.five==="true"){
               $(tdfive).toggle('slow');
            }
                        if (localStorage.six==="true"){
               $(tdsix).toggle('slow');
            }
            $(checkform).toggle('slow');
            $(showbutton).toggle('slow');
            }
        }
            </script>
            
            
            <script type="text/javascript">
                
            function show(){
                $(checkform).toggle('slow');
                $(tdone).hide('slow');
                $(tdtwo).hide('slow');
                $(tdthree).hide('slow');
                $(tdfour).hide('slow');
                $(tdfive).hide('slow');
                $(tdsix).hide('slow');
                $(showbutton).toggle('slow');
                localStorage.clear();
            }
            function myfunction(){
                localStorage.setItem("flag", "set");
                
            var nfone=document.getElementById("nfone").checked;
            var nftwo=document.getElementById("nftwo").checked;
            var nfthree=document.getElementById("nfthree").checked;
            var nffour=document.getElementById("nffour").checked;
            var nffive=document.getElementById("nffive").checked;
            var nfsix=document.getElementById("nfsix").checked;
   
            
            if (nfone===true){
                $(tdone).toggle('slow');
                localStorage.setItem("one", "true");
               
            }  
                        if (nftwo===true){
                $(tdtwo).toggle('slow');
                localStorage.setItem("two", "true");
            }
                        if (nfthree===true){
               $(tdthree).toggle('slow');
               localStorage.setItem("three", "true");
            }
                        if (nffour===true){
               $(tdfour).toggle('slow');
               localStorage.setItem("four", "true");
            }
                        if (nffive===true){
               $(tdfive).toggle('slow');
               localStorage.setItem("five", "true");
            }
                        if (nfsix===true){
               $(tdsix).toggle('slow');
               localStorage.setItem("six", "true");
            }
            $(checkform).toggle('slow');
            $(showbutton).toggle('slow');
            }
            
        </script>

    </head>
    <body class="stretchLeft">
        <header id ="title">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        </header>

    <main>
        <h1 style="padding-left:10%;">News Feeds</h1>
        <div id="checkform" style="padding-left:10%;">   
  <input type="checkbox" id="nfone">Nasdaq Basics<br>
  <input type="checkbox" id="nftwo"> Market Watch Top Stories<br>
  <input type="checkbox" id="nfthree"> Nasdaq Investing Ideas<br>
  <input type="checkbox" id="nffour"> Reuters Wealth News<br>
  <input type="checkbox" id="nffive"> Reuters US Markets News<br>
  <input type="checkbox" id="nfsix"> Reuters Hedge Funds<br>
  
  <button onclick="myfunction();" style="padding-left:5%;">populate news feed</button>
  </div>

        <table style ='width:300px; padding-left: 5%;'>
            <tr>
                <td id="tdone"  style="display:none;"><script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><\/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://articlefeeds.nasdaq.com/nasdaq/categories?category=Basics",rssmikle_frame_width: "300",rssmikle_frame_height: "400",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",rssmikle_item_description_tag: "off",rssmikle_item_description_image_scaling: "off",article_num: "15",rssmikle_item_podcast: "off"};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:300;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a></div></td>
                <td id ="tdtwo"  style="display:none; float:left;"><script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><\/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://feeds.marketwatch.com/marketwatch/topstories/",rssmikle_frame_width: "300",rssmikle_frame_height: "400",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",rssmikle_item_description_tag: "off",rssmikle_item_description_image_scaling: "off",article_num: "15",rssmikle_item_podcast: "off"};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:300;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a></div></td>
                <td id="tdthree"  style="display:none;"><script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><\/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://articlefeeds.nasdaq.com/nasdaq/categories?category=Investing+Ideas",rssmikle_frame_width: "300",rssmikle_frame_height: "400",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",rssmikle_item_description_tag: "off",rssmikle_item_description_image_scaling: "off",article_num: "15",rssmikle_item_podcast: "off"};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:300;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a></div></td>
            </tr>
            <tr>
                <td id='tdfour'  style="display:none;"><script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><\/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://feeds.reuters.com/news/wealth",rssmikle_frame_width: "300",rssmikle_frame_height: "400",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",rssmikle_item_description_tag: "off",rssmikle_item_description_image_scaling: "off",article_num: "15",rssmikle_item_podcast: "off"};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:300;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a></div></td>
                <td id="tdfive"  style="display:none;"><script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><\/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://feeds.reuters.com/news/usmarkets",rssmikle_frame_width: "300",rssmikle_frame_height: "400",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",rssmikle_item_description_tag: "off",rssmikle_item_description_image_scaling: "off",article_num: "15",rssmikle_item_podcast: "off"};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:300;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a></div></td>
                <td id="tdsix"  style="display:none;"><script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><\/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: " 	http://feeds.reuters.com/news/hedgefunds",rssmikle_frame_width: "300",rssmikle_frame_height: "400",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",autoscroll: "on",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "Off",rssmikle_title: "on",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",rssmikle_item_description_tag: "off",rssmikle_item_description_image_scaling: "off",article_num: "15",rssmikle_item_podcast: "off"};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:300;"><a href="http://feed.mikle.com/" target="_blank" style="color:#CCCCCC;">RSS Feed Widget</a></div></td>
            </tr>
        </table>
<button id ="showbutton" onclick="show();" style="display:none; padding-left:5%;">Reset Options</button>

    </main>  
           <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
            </footer>
    
    </body>

</html>