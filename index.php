<head>

<title>PHP MSSQL Table Searcher</title>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>


</head>
<body align="center">
<h1>PHP MSSQL Table Searcher</h1>
<p>This Example searches Columns 5 and 6 (See script.js for adjustment):</p>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search...">

<?php
// Connect to your Microsoft SQL Server
$conn = mssql_connect("IP","USER","PASSWORD");
// Select the table and DB
$sql = "SELECT * FROM [TABLE_NAME].[dbo].[DATABASE_NAME]";
$result = mssql_query($sql);

if (mssql_num_rows($result) > 0) {
	// Name your columns 
	// Adjust your columns you'd like below and their names
    echo "<table id='myTable'><tr class='header'><th style='width:7%;'>COLUMN 1</th><th style='width:8%;'>COLUMN 2</th><th style='width:18%;'>COLUMN 3</th><th style='width:12%;'>COLUMN 4</th><th style='width:7%;'>COLUMN 5</th><th style='width:25%;'>COLUMN 6</th></tr>";
    while ( $row = mssql_fetch_array($result) ) {
		// Populate the columns
		// Adjust the column names below to match the ones you put in above
		// The Column 6 value is an example of combining two columns from the MSSQL DB's Table into one Column on the web page 
        echo "<tr><td>" . $row["COLUMN 1"] . "</td><td>" . $row["COLUMN 2"] . "</td><td>" . $row["COLUMN 3"] . "</td><td>" . $row["COLUMN 4"] . "</td><td>" . $row["COLUMN 5"] . "</td><td>" . $row["COLUMN 6-1"] . "&nbsp;" . $row["COLUMN 6-2"] . "</td></tr>";
    }
    echo "</table></body>";
} else {
    echo "0 results";
}

?>

