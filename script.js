function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    //Search column 5, column count begins at 0 so for example column 6 is referred to as 7 below.
    td_1 = tr[i].getElementsByTagName("td")[6];
    //Search column 6
    td_2 = tr[i].getElementsByTagName("td")[7];
	// COLUMN ADD -- To add more columns to the search just add another line like the above. For example:
    // td_3 = tr[i].getElementsByTagName("td")[5];
	
	// COLUMN ADD -- Then add the following on this next line: || td_3 
    if (td_1 || td_2) {
		// COLUMN ADD -- And finally add this right after the -1 and before the parrentheses below:
		// || td_3.innerHTML.toUpperCase().indexOf(filter) > -1
      if (td_1.innerHTML.toUpperCase().indexOf(filter) > -1 || td_2.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
