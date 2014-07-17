<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Portfolio Page| Realtime Quotes</title>
<link type="text/css" rel="stylesheet" href="/stylesheet.css"/>
<script src="https://code.jquery.com/jquery-2.0.2.min.js"></script>
<script type="text/javascript">
$(function(tableID){
		$('#submit').on("click", function(e){
			console.log('Submit');
			e.preventDefault();
			getData(tableID);
			});
		});
var getData = function(tableID, sym, store) {
	console.log('GetData');
	var url = "https://query.yahooapis.com/v1/public/yql";
	if (sym == '') {
		var symbol = $("#symbl").val();
		var type = "new";
	} else {
		var symbol = sym;
		var type = "load";
	}
	var data = encodeURIComponent("select * from yahoo.finance.quotes where symbol in ('" + symbol + "')");
	$.getJSON(url, 'q=' + data + "&env=http%3A%2F%2Fdatatables.org%2Falltables.env&format=json")
		.done(function (data) {
				//This is where all the .text.data.query information was.					
				var table = document.getElementById(tableID);
				var rowCount = table.rows.length;
				var row = table.insertRow(rowCount);
				var cell1 = row.insertCell(0);
				var element1 = document.createElement("input");
				element1.type = "checkbox";
				element1.name="chkbox[]";
				cell1.appendChild(element1);
				var cell2 = row.insertCell(1);
				cell2.innerHTML = data.query.results.quote.Name;
				var cell3 = row.insertCell(2);
				cell3.innerHTML = data.query.results.quote.Symbol;
				var cell4 = row.insertCell(3);
				cell4.innerHTML = data.query.results.quote.LastTradePriceOnly;
				var cell5 = row.insertCell(4);
				cell5.innerHTML = data.query.results.quote.ChangeRealtime;
				var cell6 = row.insertCell(5);
				cell6.innerHTML = data.query.results.quote.PercentChange;
				var cell7 = row.insertCell(6);
				cell7.innerHTML = data.query.results.quote.Open;
				var cell8 = row.insertCell(7);
				cell8.innerHTML = data.query.results.quote.PreviousClose;
				var cell9 = row.insertCell(8);
				cell9.innerHTML = data.query.results.quote.Volume;
				var cell10 = row.insertCell(9);
				var element2 = document.createElement("input");
				element2.type = "button";
				element2.name = "dbutton[]";
				element2.value = "Details";
				var holdTicker = data.query.results.quote.Symbol;
				var goDetail = 'MyStocksDetail.php?id=' + holdTicker;
				element2.onclick = function goToDetails() {
					var myDetailURL = goDetail;
					window.location.href = myDetailURL;
				}
				cell10.appendChild(element2);
				if(store != "store"){
					localStorage.setItem(holdTicker,holdTicker);
				}
		})
	.fail(function (jqxhr, textStatus, error) {
			var err = textStatus + ", " + error;
			$("#result").text('Request failed: ' + err);
			});
}
function deleteRow(tableID) {
	try {
		var table = document.getElementById(tableID);
		var rowCount = table.rows.length;
		for(var i=0; i<rowCount; i++) {
			var row = table.rows[i];
			var chkbox = row.cells[0].childNodes[0];
			var delTicker = row.cells[2].innerHTML;
			if(null != chkbox && true == chkbox.checked) {
				table.deleteRow(i);
				rowCount--;
				i--;
				localStorage.removeItem(delTicker);
			} 
		}
	}catch(e) {
		alert(e);
	}
}
function loadTbl(tblID) {
	/*				var stockCount = localStorage.getItem("count");
					if (stockCount == null) {
					stockCount = 0;
					} 
	var stockSym = JSON.parse(localStorage.getItem('stocks'));
	if (typeof(stockSym.stocks)!="undefined"){
		console.log(stockSym.stocks.length);*/
		for	(index = 0; index < localStorage.length; ++index) {
			if (localStorage.getItem(localStorage.key(index))==localStorage.key(index))
			{getData(tblID, localStorage.getItem(localStorage.key(index)),'store');}
		}
	//}
}
</script>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
<main>
<h1 style="padding-left:10%;">Portfolio Page</h1>
<div class="mainbody">
<TABLE id="dataTable" border="1">
<TR>
<TD>Select Row</TD>
<TD>Company Name</TD>
<TD>Company Symbol</TD>
<TD>Current Price</TD>
<TD>Dollar Change</TD>
<TD>Percent Change</TD>
<TD>Today's Open</TD>
<TD>Previous Close</TD>
<TD>Today's Volume</TD>
<TD>Stock Details</TD>
</TR>
</TABLE>
<script>loadTbl('dataTable')</script>
<input type="text" placeholder="Input Stock Symbol here" id="symbl">
<button type="submit" onClick="getData('dataTable', '')">Get Data & Add Row</button>
<INPUT type="button" value="Delete Row(s)" onclick="deleteRow('dataTable')">
</div>	
</main>
<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</body>
</html>




