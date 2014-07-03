
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
              <title>Portfolio Page| Realtime Quotes</title>
        <link type="text/css" rel="stylesheet" href="/stylesheet.css"/>
		
					<SCRIPT language="javascript">
					function addRow(tableID) {

				var si = getStockInfo()

				var txt = '{"stocks":[' +
						  '{"ticker":"F",   "current":"16.68", "pclose":"16.79",  "open":"16.82" },' +
						  '{"ticker":"CAG", "current":"32.48", "pclose":"32.37",  "open":"32.41" },' +
						  '{"ticker":"APPL","current":"647.35","pclose":"644.82", "open":"346.25" }]}';
			  
				var table = document.getElementById(tableID);
				var rowCount = table.rows.length;
				var row = table.insertRow(rowCount);
			  
				myStocksObj = JSON.parse(txt);
				holdTicker = myStocksObj.stocks[rowCount-1].ticker; 
				holdCurrent = myStocksObj.stocks[rowCount-1].result;
				holdClose = myStocksObj.stocks[rowCount-1].pclose;
				holdOpen = myStocksObj.stocks[rowCount-1].open;
	 
				var cell1 = row.insertCell(0);
				var element1 = document.createElement("input");
				element1.type = "checkbox";
				element1.name="chkbox[]";
				cell1.appendChild(element1);
	 
				var cell2 = row.insertCell(1);
				cell2.innerHTML = holdTicker
				
				var cell3 = row.insertCell(2);
				cell3.innerHTML = holdCurrent
				
				var cell4 = row.insertCell(3);
				cell4.innerHTML = holdClose
				
				var cell5 = row.insertCell(4);
				cell5.innerHTML = holdOpen
	 
	 
			}
	 
			function deleteRow(tableID) {
				try {
				var table = document.getElementById(tableID);
				var rowCount = table.rows.length;
	 
				for(var i=0; i<rowCount; i++) {
					var row = table.rows[i];
					var chkbox = row.cells[0].childNodes[0];
					if(null != chkbox && true == chkbox.checked) {
						table.deleteRow(i);
						rowCount--;
						i--;
					} 
				}
				}catch(e) {
					alert(e);
				}
			}</SCRIPT>
		
		
				<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
					<script type="text/javascript">
					$(function(){
					$('#submit').on("click", function(e){
					console.log('Submit');
					e.preventDefault();
					getData();
					});
					});

					var getData = function() {
					console.log('GetData');
					var url = "http://query.yahooapis.com/v1/public/yql";
					var symbol = $("#symbl").val();
					var data = encodeURIComponent("select * from yahoo.finance.quotes where symbol in ('" + symbol + "')");

					$.getJSON(url, 'q=' + data + "&env=http%3A%2F%2Fdatatables.org%2Falltables.env&format=json")
					.done(function (data) {
					$("#NAME").text("Company: " + data.query.results.quote.Name);
					$("#SYMBOL").text("Ticker: " + data.query.results.quote.Symbol);
					$("#PRICE").text("Current Price: " + data.query.results.quote.LastTradePriceOnly);
					$("#CHANGE").text("Change: " + data.query.results.quote.ChangeRealtime);
					$("#PCNTCHANGE").text("Percent Change: " + data.query.results.quote.PercentChange);
					$("#OPEN").text("Opening Price: " + data.query.results.quote.Open);
					$("#PCLOSE").text("Previous Close: " + data.query.results.quote.PreviousClose);
					$("#VOLUME").text("Average Daily Volume: " + data.query.results.quote.Volume);
					$("#BID").text("Current Bid: " + data.query.results.quote.Bid);
					$("#ASK").text("Company: " + data.query.results.quote.Ask);
					$("#DAYSRANGE").text("Company: " + data.query.results.quote.DaysRange);
					$("#YEARRANGE").text("Company: " + data.query.results.quote.YearRange);
					$("#AVGDAYVOL").text("Company: " + data.query.results.quote.AverageDailyVolume);
					$("#MARKETCAP").text("Company: " + data.query.results.quote.MarketCapitalization);
					$("#PE").text("Company: " + data.query.results.quote.PERatio);
					$("#EARNSHARE").text("Company: " + data.query.results.quote.EarningsShare);
					$("#DIVYIELD").text("Company: " + data.query.results.quote.DividendYield);
					
					})
					.fail(function (jqxhr, textStatus, error) {
					var err = textStatus + ", " + error;
					$("#result").text('Request failed: ' + err);
					});
					}
					</script>
					
					
		
    </head>
    <body>
        <header id ="title">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
</header>

<main style="padding-top:5%x;">
<h1 style="padding-left:10%;">Portfolio Page--TEST--</h1>

	<input type="text" size="23" placeholder="Input Stock Symbol here" id="symbl" /><br>
	
	<TABLE id="dataTable" width="800px" border="1">
                    <TR>
                    <TD>Input</TD>
					<TD id='NAME'>Company</TD>
                    <TD id='SYMBOL'>Ticker</TD>
                    <TD id='PRICE'>Current Price</TD>
					<TD id='CHANGE'>$ Change</TD>
					<TD id='PCNTCHANGE'>% Change</TD>
					<TD id='OPEN'>Open</TD>
                    <TD id='PCLOSE'>Prev. Close</TD>
                    <TD id='VOLUME'>Volume</TD>
					<TD><input type= "button" onClick="window.location='DetailChild.html';" value="Details" />
					</TR>
		</TABLE>
		<button type="submit" onClick="getData();">Get Data</button>
		<INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />
		<INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')" />
		

</main>
<footer>
<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
</footer>
</body>

</html>




