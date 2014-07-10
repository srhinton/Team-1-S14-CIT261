<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
              <title>My Stocks</title>
        <link type="text/css" rel="stylesheet" href="/stylesheet.css"/>
        
        <script type="text/javascript">
            function myfunction(){
            var nfone=document.getElementById("nfone").checked;
            var nftwo=document.getElementById("nftwo").checked;
            var nfthree=document.getElementById("nfthree").checked;
            var nffour=document.getElementById("nffour").checked;
            var nffive=document.getElementById("nffive").checked;
            var nfsix=document.getElementById("nfsix").checked;
            
            if (nfone===true){
                document.getElementById('tdone').style.display="inline";
            }
            else{
                document.getElementById('tdone').style.display="none";
            }
                        if (nftwo===true){
                document.getElementById('tdtwo').style.display="inline";
            }
            else{
                document.getElementById('tdtwo').style.display="none";
            }
                        if (nfthree===true){
                document.getElementById('tdthree').style.display="inline";
            }
            else{
                document.getElementById('tdthree').style.display="none";
            }
                        if (nffour===true){
                document.getElementById('tdfour').style.display="inline";
            }
            else{
                document.getElementById('tdfour').style.display="none";
            }
                        if (nffive===true){
                document.getElementById('tdfive').style.display="inline";
            }
            else{
                document.getElementById('tdfive').style.display="none";
            }
                        if (nfsix===true){
                document.getElementById('tdsix').style.display="inline";
            }
            else{
                document.getElementById('tdsix').style.display="none";
            }
            document.getElementById('checkform').style.display="none";
            }
            
        </script>

    </head>
    <body>
        <header id ="title">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        </header>

    <main style="padding-top:5%;"><h1 style="padding-left:10%;">News Feeds</h1>
        <div id="checkform">   
  <input type="checkbox" id="nfone">Nasdaq Basics<br>
  <input type="checkbox" id="nftwo"> Market Watch Top Stories<br>
  <input type="checkbox" id="nfthree"> Nasdaq Investing Ideas<br>
  <input type="checkbox" id="nffour"> Reuters Wealth News<br>
  <input type="checkbox" id="nffive"> Reuters US Markets News<br>
  <input type="checkbox" id="nfsix"> Reuters Hedge Funds<br>
  
  <button onclick="myfunction();">populate news feed</button>
  </div>

        <table style ='width:300px'>
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

    </main>  
           <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
            </footer>
    
    </body>

</html>