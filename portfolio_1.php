<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
              <title>My Stocks</title>
        <link type="text/css" rel="stylesheet" href="/stylesheet.css"/>

		<SCRIPT language="javascript">

			function getStockInfo() {
			var tick;
			var info = prompt("Enter a Stock Ticker","S");

			if (info != null) {;
			}
			}

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
				holdCurrent = myStocksObj.stocks[rowCount-1].current;
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
			}
		</SCRIPT>

    </head>
    <body>
        <header id ="title">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        </header>

    <main style="padding-top:5%x;"><h1 style="padding-left:10%;">My Portfolio</h1>
    
    </main>  
           <footer>
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
            </footer>


		 
		<TABLE id="dataTable" width="350px" border="1">
                    <TR>
                    <TD><INPUT</TD>
                    <TD>Ticker</TD>
                    <TD>Current</TD>
                    <TD>Prev. Close</TD>
                    <TD>Open</TD>
                    </TR>
		</TABLE>
    
      		<INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />
		<INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')" />
    </body>

</html>