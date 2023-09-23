
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reference</title>
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

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            display: block;
            font-weight: bold;
            font-size :15px;
            margin-bottom: 5px;
        }

        /* Optional: Style input placeholders */
        input[type="text"]::placeholder,
        input[type="date"]::placeholder {
            color: #999; /* Adjust the color to your preference */
        }
        
    </style>
</head>
<body>
    
    
    <div class="content-container">
        <?php include("header_for_form.php"); ?>
        <?php include("navbar_for_form.php"); ?>


        <form action="">

            <table>
                <tr>
                <th colspan="4" style="text-align: center; font-size:15px;">Part - 3 :  Reference</th>
                </tr>
            </table>
            <br><br>

            <div class="form-group">
                <label for="offence">If accused in a criminal, military, political, or any other case, provide details  </label>
                <div style="width: 30%;">
                <select id="offenceType" name="offenceType">
                    <option value="">-Type-</option>
                    <option value="criminal">Criminal</option>
                    <option value="political">Political</option>
                    <option value="others">Others</option>   
                </select>

                </div>
                
                <input type="text" id="crimeno" name="crimeno" placeholder = "Case/GD No." style=" width: 25%;padding: 5px;border: 1px solid #ccc;border-radius: 5px;font-size: 14px;margin-top: 5px;">
                <input type="date" name="crime_des" id="crime_des" style=" width: 25%;padding: 5px;border: 1px solid #ccc;border-radius: 5px;font-size: 14px;margin-top: 5px;">
            </div>


            <div class="form-group">
                <label for="">Relatives in Job : </label>
                <label for="relativesInGovtJob" style="font-size: 10px;">*If any of the colse relatives i.e. brothers, uncles, father-in-laws are employed in the services of the Govenment Of Bangladesh, the details mentioning the name of the post and the place of work </label>
                <table>
                    <thead>
                        <tr>
                            <th>Name of relative</th>
                            <th>Designation</th>
                            <th>Institution</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="rname1"></td>
                            <td><input type="text" name="rdes1"></td>
                            <td><input type="text" name="rinst1"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="rname2"></td>
                            <td><input type="text" name="rdes2"></td>
                            <td><input type="text" name="rinst2"></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

            <div class="form-group">
                <label for="reference">Reference :</label>
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="pname1"></td>
                            <td><input type="text" name="padd1"></td>
                            
                        </tr>
                        <tr>
                            <td><input type="text" name="pname2"></td>
                            <td><input type="text" name="padd2"></td>
                            
                        </tr>
                        
                    </tbody>
                </table>
            </div>



        </form>


        <?php include("footer.php");?>


    </div>

</body>
</html>