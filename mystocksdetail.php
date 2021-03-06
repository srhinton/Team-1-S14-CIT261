<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
              <title>My Stocks | Stock Details</title>
        <link type="text/css" rel="stylesheet" href="/stylesheet.css"/>
<script src="https://code.jquery.com/jquery-2.0.2.min.js"></script>
<SCRIPT language="javascript">

var w;

function startWorker() {
    if(typeof(Worker) !== "undefined") {
        if(typeof(w) == "undefined") {
            w = new Worker("demo_workers.js");
        }
        w.onmessage = function(event) {
            sendStockInfo();
        };
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Workers...";
    }
}

var url = "https://query.yahooapis.com/v1/public/yql";


function sendStockInfo() {



var parameters = location.search.substring(1).split("&");

var temp = parameters[0].split("=");
t = unescape(temp[1]);

var data = encodeURIComponent("select * from yahoo.finance.quotes where symbol in ('" + t + "')");
	$.getJSON(url, 'q=' + data + "&env=http%3A%2F%2Fdatatables.org%2Falltables.env&format=json")
		.done(function (data) {


var title = ["Previous Close","Open","Bid","Ask","Day Range","52 wk Range","Volume","Avg Vol (3m)","Market Cap","P/E","EPS","Div & Yield"];
//var stockDetail = JSON.parse(localStorage.getItem(t));

var info = [
/*stockDetail.ticker,
stockDetail.current,
stockDetail.prevclose,
stockDetail.open,
stockDetail.bid,
stockDetail.ask,
stockDetail.dayOpen,
stockDetail.yBegin,
stockDetail.vol,
stockDetail.avgVol,
stockDetail.cap,
stockDetail.pe,
stockDetail.eps,
stockDetail.div,
stockDetail.name*/];
//var info =[] creates an empty Array---then bellow is the Array data
info.push(data.query.results.quote.symbol);
info.push(data.query.results.quote.LastTradePriceOnly);
info.push(data.query.results.quote.PreviousClose);
info.push(data.query.results.quote.Open);
info.push(data.query.results.quote.Bid);
info.push(data.query.results.quote.Ask);
info.push(data.query.results.quote.DaysRange);
info.push(data.query.results.quote.YearRange);
info.push(data.query.results.quote.Volume);
info.push(data.query.results.quote.AverageDailyVolume);
info.push(data.query.results.quote.MarketCapitalization);
info.push(data.query.results.quote.PERatio);
info.push(data.query.results.quote.EarningsShare);
info.push(data.query.results.quote.DividendYield);
info.push(data.query.results.quote.Name);


// get the reference for the body
var body = document.getElementsByTagName("body")[0];

var headTbl = document.createElement("table");
headTbl.width = '360';
var headBody = document.createElement("tbody");
var headRowName = document.createElement("tr");
var headRow = document.createElement("tr");
var headCellName = document.createElement("td");
var headCell = document.createElement("td");
var headCell2 = document.createElement("td");
var headCell3 = document.createElement("td");


var change = info[1]-info[3];
var changeFixed = change.toFixed(2);

// create a table above the chart and load it with the stock quote and change.
var headName = document.createTextNode(info[14]);
var headText = document.createTextNode(info[1]);
var graph = document.createElement('img');

if (changeFixed >= 0) {
var headText2 = document.createTextNode("+" + changeFixed); //Text for positive change
graph.src = "/media/StockUp.jpg";
} else {
var headText2 = document.createTextNode(changeFixed); //Text for negative change
graph.src = "/media/StockDown.jpg";
}	
graph.height = 40;
graph.width = 40;

headCellName.appendChild(headName);
headCell.appendChild(headText);
headCell2.appendChild(headText2);
headCell3.appendChild(graph);
headRowName.appendChild(headCellName);
headRow.appendChild(headCell);
headRow.appendChild(headCell2);
headRow.appendChild(headCell3);
headBody.appendChild(headRowName);
headBody.appendChild(headRow);
headTbl.appendChild(headBody);
$('#headTbl').html(headTbl);

headTbl.setAttribute("border", "0");
headCell.style.fontSize = "48px";
headCell2.style.verticalAlign = "bottom";
if (changeFixed >= 0) {
var cellColor = "green";
} else {
var cellColor = "red";
}
headCell2.style.color = cellColor;
headCell3.style.textAlign = 'right';
headCell3.width = "50%";
// document.getElementById('headTbl').rows[0].cells[0].colSpan = 3

// Get the chart
var ifr = document.createElement('iframe')
var stockTicker = 'http://chart.finance.yahoo.com/z?s=' + info[0] + '&t=12m&z=s'
ifr.src = stockTicker
ifr.height = '205'
ifr.width = '360'
$('#ifr').html(ifr);
 
// creates a <table> element and a <tbody> element
var tbl = document.createElement("table");
tbl.width = '360';
var tblBody = document.createElement("tbody");
 
// creating all cells
for (var i = 0; i < 12; i++) {
// creates a table row
var row = document.createElement("tr");
 
for (var j = 0; j < 2; j++) {
// Create a <td> element and a text node, make the text
// node the contents of the <td>, and put the <td> at
// the end of the table row
var cell = document.createElement("td");
// Select which array to use in populating the cell
if (j === 0) {
var cellText = document.createTextNode(title[i]);
var textRL = "left";
} else {
var cellText = document.createTextNode(info[i+2]);
var textRL = "right";
}
cell.appendChild(cellText);
row.appendChild(cell);
cell.style.textAlign = textRL;
}
 
// add the row to the end of the table body
tblBody.appendChild(row);
}
 
// put the <tbody> in the <table>
tbl.appendChild(tblBody);
// appends <table> into <body>
//body.appendChild(tbl);
$("#RUGBY").html(tbl);
// sets the border attribute of tbl to 2;
tbl.setAttribute("border", "1");
})
.fail(function (jqxhr, textStatus, error) {
			var err = textStatus + ", " + error;
			$("#result").text('Request failed: ' + err);
			});
}
</SCRIPT>
    </head>

            <header id ="title">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        </header>  
    
    <body onload="startWorker()">

      
           
        
<main>
<div id="headTbl"></div>
<div id="ifr"></div>
<div id="RUGBY"></div>
</main>


        
           <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
            </footer>
       

</body>
</html>