
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education and Work History</title>
    <style>
      
        .content-container {
            max-width: 800px;
            margin: 20px auto; 
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 10px;
            color: black;
            text-decoration: none;
            font-weight: bold;
        }

        table {
            width: 98%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th {
            background-color: #0066cc;
            color: white;
            padding: 10px;
            text-align: left;
        }

        td {
            padding: 10px;
            /* border: 1px solid #ccc; */
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 10px;
        }

        
    </style>
</head>
<body>
    
    
    <div class="content-container">
        <?php include("header_for_form.php"); ?>
        <?php include("navbar_for_form.php"); ?>
        <form action="" method="post">

            <table>
                <tr>
                <th colspan="4" style="text-align: center; font-size:15px;">Part - 2 :  Education and Work History</th>
                </tr>

                
                
            </table>
            
            <table id="stayed-place-table">
            <thead>
                <tr>
                    <td><label for="address" style="font-size: 12px;">Places Applicant stayed more than 6 months in the last 5 years :</label></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" placeholder = "Village/Town/Upzilla/District" name="atext1" require></td>
                    <td><input type="date" name="adatefrom1" require></td>
                    <td><input type="date" name="adateto1" require></td>
                </tr>
            </tbody>
            </table>
            <button type="button" id="add-row">Add Row</button>
            <br><br>
            



            
                <table id="education-history-table">
                    <thead>
                        <tr><label for="educationalQualification" style="font-size: 13px;">Educational Qulaification : </label></tr>
                        <tr>
                            <th>Institution Name </th>
                            <th>Registration/Roll No.</th>
                            <th>From</th>
                            <th>To</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="etext1" placeholder="Primary Level"></td>
                            <td><input type="text" name="etext2" ></td>
                            <td><input type="date" name="edate1" ></td>
                            <td><input type="date" name="edate2" ></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="etext3" placeholder="Secondary Level"></td>
                            <td><input type="text" name="etext4"></td>
                            <td><input type="date" name="edate3"></td>
                            <td><input type="date" name="edate4"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="etext5" placeholder="Higher Secondary Level"></td>
                            <td><input type="text" name="etext6"></td>
                            <td><input type="date" name="edate5"></td>
                            <td><input type="date" name="edate6"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="etext7" placeholder="University"></td>
                            <td><input type="text" name="etext8"></td>
                            <td><input type="date" name="edate7"></td>
                            <td><input type="date" name="edate8"></td>
                        </tr>
                    </tbody>
                </table>



                <label for="workplaces" style="font-size: 13px;">Previous Work history :</label>
                <table id="work-history-table">
                    <thead>
                        <tr>
                            <th>Institution/Business Name</th>
                            <th>From</th>
                            <th>To</th>
                            <th>On The Job?</th>
                            <th>Reason for leaving</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody >
                        
                    </tbody>
                </table>
                <button type="button" id="add-work-row">Add Row</button>

            
                
            
        

            <!-- <input type="submit" value="Next" style="position: relative;left:50%;"> -->
            
        </form>
        <?php include("footer.php");?>
    </div>



    <script>
    function addWorkRow() {
        var tbody = document.querySelector('#work-history-table');
        if (tbody.rows.length < 4) { 
            var newRow = tbody.insertRow();
            newRow.innerHTML = `
                <td><input type="text" name="wtext${tbody.rows.length + 1}"></td>
                <td><input type="date" name="wdatefrom${tbody.rows.length + 1}"></td>
                <td><input type="date" name="wdateto${tbody.rows.length + 1}"></td>
                <td>
                    <input type="radio" name="wyesno${tbody.rows.length + 1}" value="Yes">Yes
                    <input type="radio" name="wyesno${tbody.rows.length + 1}" value="No">No
                </td>
                <td><input type="text" name="wreason${tbody.rows.length + 1}"></td>
                <td><button type="button" class="remove-row" onclick="removeRow(this)">Remove</button></td>
            `;
        }
    }
    
    document.getElementById('add-work-row').addEventListener('click', addWorkRow);
    </script>



    <script>
    function addRow() {
        var tbody = document.querySelector('#stayed-place-table tbody');
        if (tbody.rows.length < 4) { 
            var newRow = tbody.insertRow();
            newRow.innerHTML = `
                <td><input type="text" placeholder = "Village/Town/Upzilla/District" name="atext${tbody.rows.length + 1}" ></td>
                <td><input type="date" name="adatefrom${(tbody.rows.length + 1)}"></td>
                <td><input type="date" name="adateto${(tbody.rows.length + 1)}"></td>
                <td><button type="button" class="remove-row" onclick="removeRow(this)">Remove</button></td>
            `;
        }
    }
    function removeRow(button) {
        var row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
    document.getElementById('add-row').addEventListener('click', addRow);
    function checkDateDifference(fromDate, toDate) {
        var from = new Date(fromDate);
        var to = new Date(toDate);

        var diffMonths = (to.getFullYear() - from.getFullYear()) * 12 + (to.getMonth() - from.getMonth());
        
        if (diffMonths < 6) {
            alert("The stay must be at least 6 months.");
        }
    }
    
    document.getElementById('add-row').addEventListener('click', addRow);

// Attach an event listener to the "To" date field for each new row
var tbody = document.querySelector('#stayed-place-table tbody');
tbody.addEventListener('change', function(event) {
    var target = event.target;

    // Check if the changed input is the "To" date field
    if (target.type === 'date' && target.name.startsWith('adateto')) {
        var fromName = 'adatefrom' + target.name.slice(-1); // Find the corresponding "From" date field
        var fromDate = document.getElementsByName(fromName)[0].value;
        
        // Check if both dates are valid
        if (fromDate && target.value) {
            var from = new Date(fromDate);
            var to = new Date(target.value);
            
            // Calculate the difference in months
            var diffMonths = (to.getFullYear() - from.getFullYear()) * 12 + (to.getMonth() - from.getMonth());
            
            if (diffMonths < 6) {
                // Calculate a new "To" date with a minimum difference of 6 months
                to.setMonth(from.getMonth() + 6);
                to.setFullYear(from.getFullYear() + Math.floor(diffMonths / 12)); // Adjust the year
                
                // Format the new "To" date as yyyy-mm-dd
                var newToDate = to.toISOString().slice(0, 10);
                
                // Update the "To" date input with the new value
                target.value = newToDate;
                
                // Show an alert message or take any other desired action
                alert("The stay must be at least 6 months. The 'To' date has been adjusted.");
            }
        }
    }
});

    </script>


   
        
        


</body>
</html>
