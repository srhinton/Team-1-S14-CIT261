<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
              <title>My Stocks</title>
        <link type="text/css" rel="stylesheet" href="/stylesheet.css"/>
		
		<SCRIPT language="javascript">

			function sendStockInfo() {

				var parameters = location.search.substring(1).split("&");

				var temp = parameters[0].split("=");
				t = unescape(temp[1]);



				var title = ["Previous Close","Open","Bid","Ask","Day Range","52 wk Range","Volume","Avg Vol (3m)","Market Cap","P/E","EPS","Div & Yield"];
				var stockDetail = JSON.parse(localStorage.getItem(t));
				var info = [
					stockDetail.ticker,
					stockDetail.current,
					stockDetail.prevclose,
					stockDetail.open,
					stockDetail.bid,
					stockDetail.ask,
					stockDetail.dayOpen + " - " + stockDetail.dayClose,
					stockDetail.yBegin + " - " + stockDetail.yEnd,
					stockDetail.vol,
					stockDetail.avgVol,
					stockDetail.cap,
					stockDetail.pe,
					stockDetail.eps,
					stockDetail.div];

				// get the reference for the body
				var body = document.getElementsByTagName("body")[0];

				var headTbl  = document.createElement("table");
				var headBody = document.createElement("tbody");
				var headRow  = document.createElement("tr");
				var headCell = document.createElement("td");
				var headCell2 = document.createElement("td");

				var change = info[1]-info[3];
				var changeFixed = change.toFixed(2);

				// create a table above the chart and load it with the stock quote and change.
				var headText = document.createTextNode(info[1]);
				if (changeFixed >= 0) {
					var headText2 = document.createTextNode("+" + changeFixed);  //Text for positive change
				} else {
					var headText2 = document.createTextNode("-" + changeFixed);  //Text for negative change
				}				
				headCell.appendChild(headText);
				headCell2.appendChild(headText2);
				headRow.appendChild(headCell);
				headRow.appendChild(headCell2);
				headBody.appendChild(headRow);
				headTbl.appendChild(headBody);
				body.appendChild(headTbl);

				headTbl.setAttribute("border", "0");
				headCell.style.fontSize = "48px";
				headCell2.style.verticalAlign = "bottom";
				if (changeFixed >= 0) {
					var cellColor = "green";
				} else {
					var cellColor = "red";
				}
				headCell2.style.color = cellColor;

				// Get the chart
				var ifr = document.createElement('iframe')
				var stockTicker = 'http://chart.finance.yahoo.com/z?s=' + info[0] + '&t=12m&z=s'
				ifr.src = stockTicker
				ifr.height = '205'
				ifr.width = '360'
				document.body.appendChild(ifr)
 
				// creates a <table> element and a <tbody> element
				var tbl     = document.createElement("table");
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
						// Select which arrey to use in populating the cell
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
				body.appendChild(tbl);
				// sets the border attribute of tbl to 2;
				tbl.setAttribute("border", "1");
				
			}
		</SCRIPT>
    </head>

    <body onload="sendStockInfo()">
        <header id ="title">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        </header>

		<main style="padding-top:5%x;"><h1 style="padding-left:10%;"></main>  


        <footer>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
        </footer>

	</body>
</html>
