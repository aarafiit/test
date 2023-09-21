
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Page</title>
    <style>
        
        /* Hello */
        .content-container {
            max-width: 800px;
            margin: 20px auto; /* Center the container horizontally and add space at the top */
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
        <form action="#" method="post">
        <table>
                <tr>
                    <th colspan="4">Part - 1 :  Personal Information</th>
                    
                </tr>
                <tr>
                    <td><label for="first-name">Applicant Name:</label></td>
                    <td><input type="text" id="first-name" name="first-name" required></td>
                    <td><label for="last-name">Father's Name:</label></td>
                    <td><input type="text" id="last-name" name="last-name" required></td>
                </tr>
                <tr>
                    <td><label for="first-name">Date of Birth: </label></td>
                    <td><input type="date" id="day" name="day" placeholder="Day" required>
                    </td>
                    <td><label for="last-name">Mother's name : </label></td>
                    <td><input type="text" id="last-name" name="last-name" required></td>
                </tr>
                <tr>
                    <td><label for="email">Gender:</label></td>
                    <td><input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label></td>

                    <td><label for="email">Marital Status:</label></td>
                    <td><input type="radio" id="married" name="maraige" value="married">
                    <label for="male">Married</label>
                    <input type="radio" id="unmarried" name="maraige" value="unmarried">
                    <label for="female">Unmarried</label>
                    </td>

                </tr>
                <tr>

                    <td><label for="phone">Nationality : </label></td>
                    <td><select id="nationality" name="nationality">
                    <option value="Bangladeshi">Bangladeshi</option>
                    <option value="Others">Others</option>
                    
                    </select></td>


                    <td><label for="phone">Freedom Fighter status : </label></td>
                    <td><select id="freedom-fighter-status" name="freedom-fighter-status">
                    <option value="">-Select One-</option>
                    <option value="yes">Child of Freedom fighter</option>
                    <option value="yes">Grand child of Freedom fighter</option>
                    <option value="no">None</option>
                    </select></td>

                </tr>
                <tr>
                    <td><label for="address">Disability:</label> </td>
                    <td>
                    <input type="radio" id="none" name="disability" value="none">
                    <label for="none">None</label>
                    <input type="radio" id="physical" name="disability" value="physical">
                    <label for="physical">Physical</label>
                    <input type="radio" id="visual" name="disability" value="visual">
                    <label for="visual">Visual</label>
                    <input type="radio" id="others" name="disability" value="others">
                    <label for="others">Others</label></td>
                    
                </tr>
            </table>

            
        </form>
    </div>
</body>
</html>
