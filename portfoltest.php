
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
              <title>Portfolio Page| Realtime Quotes</title>
        <link type="text/css" rel="stylesheet" href="/stylesheet.css"/>
		
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
        
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>


<main>
<h1 style="padding-left:10%;">Portfolio Page--TEST--</h1>

	<div class="mainbody"><input type="text" placeholder="Input Stock Symbol here" id="symbl" /><br>
	
	<TABLE id="dataTable" border="1">
                    <TR>
                    <TD></TD>
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
		</TABLE><br>
		<button type="submit" onClick="getData();">Get Data</button>
		<INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />
		<INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')" />
	</div>	

</main>

<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>

</body>

</html>




