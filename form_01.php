
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persoonal Information</title>
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
        <form action="form_02.php" method="post">
        <table>
                <tr>
                    <th colspan="4">Part - 1 :  Personal Information</th>
                    
                </tr>
                <tr>
                    <td><label for="first-name">Applicant Name:</label></td>
                    <td><input type="text" id="first-name" name="first-name" class="name-input" required></td>
                    <td><label for="fatherName">Father's Name:</label></td>
                    <td><input type="text" id="fatherName" name="father-name" class="name-input" required></td>
                </tr>
                <tr>
                    <td><label for="dateOfBirth">Date of Birth:</label></td>
                    <td><input type="date" id="dob" name="dob" required>
                    </td>
                    <td><label for="motherName">Mother's name: </label></td>
                    <td><input type="text" id="motherName" name="mother-name" class="name-input" required></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender:</label></td>
                    <td><input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other">
                    <label for="other">Other</label></td>

                    <td><label for="maritalStatus">Marital Status:</label></td>
                    <td><input type="radio" id="married" name="marriage" value="Married">
                    <label for="married">Married</label>
                    <input type="radio" id="unmarried" name="marriage" value="Single">
                    <label for="unmarried">Single</label>
                    </td>

                </tr>
                <tr>

                    <td><label for="nationality">Nationality : </label></td>
                    <td><select id="nationality" name="nationality">
                    <option value="Bangladeshi">Bangladeshi</option>
                    <option value="Others">Others</option>
                    
                    </select></td>


                    <td><label for="ffs">Freedom Fighter status:</label></td>
                    <td><select id="freedom-fighter-status" name="freedom-fighter-status">
                    <option value="">-Select One-</option>
                    <option value="Child">Child of Freedom fighter</option>
                    <option value="Grand Child">Grand child of Freedom fighter</option>
                    <option value="None">None</option>
                    </select></td>

                </tr>
                <tr>
                    <td><label for="disability">Disability:</label> </td>
                    <td>
                    <input type="radio" id="none" name="disability" value="none">
                    <label for="none">None</label>
                    <input type="radio" id="physical" name="disability" value="Physical">
                    <label for="physical">Physical</label>
                    <input type="radio" id="visual" name="disability" value="Visual">
                    <label for="visual">Visual</label>
                    <input type="radio" id="others" name="disability" value="Others">
                    <label for="others">Others</label></td>

                    <td><label for="phoneNumber">Phone Number:</label></td>
                    <td><input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required></td>
                    
                </tr>
                <tr>
                    <td><label for="NID">NID card No:</td>
                    <td><input type="text"></td>
                </tr>

                <tr>
                    <td>                 
                            <tr>
                            <th colspan="2">Permanent Address : </th>
                            </tr>
                            <tr>
                                <td>Village/Town</td>
                                <td><textarea id="permanent-address" name="permanent-address" rows="2" cols="25"></textarea></td>

                            </tr>
                            <tr>
                            <td>District:</td>
                            <td>
                                <select id="district" name="district">
                                    <option value="">-Select District-</option>
                                </select>
                            </td>
                        </tr>
                            <tr>
                            <td>Upzilla:</td>
                            <td>
                                <select id="upzilla" name="upzilla">
                                    <option value="">-Select Upzilla-</option>
                                    
                                </select>
                            </td>
                        </tr>
                        
 
                    </td>     
                <!-- </tr>

                <tr> -->
                    <td>                 
                            <tr>
                            <th colspan="2">Present Address : </th>
                            </tr>
                            <tr>
                                <td>Village/Town</td>
                                <td><textarea id="present-address" name="present-address" rows="2" cols="25"></textarea></td>

                            </tr>
                            <tr>
                            <td>District:</td>
                            <td>
                                <select id="present-district" name="present-district">
                                    <option value="">-Select District-</option>
                                   
                                </select>
                            </td>
                        </tr>
                            <tr>
                            <td>Upzilla:</td>
                            <td>
                                <select id="present-upzilla" name="present-upzilla">
                                    <option value="">-Select Upzilla-</option>
                                    
                                </select>
                            </td>
                        </tr>
                        
 
                    </td> 
    
                </tr>
                





                

            </table>

            <input type="submit" value="Next" style="position: relative;left:50%;">
            
        </form>

        <?php include("footer.php");?>
    </div>




    <script>
    const nameInputs = document.querySelectorAll('.name-input');
    nameInputs.forEach(function(nameInput) {
        nameInput.addEventListener('input', function (event) {
            const inputValue = event.target.value;
            const containsNonAlphabetic = /[^a-zA-Z\s]/.test(inputValue);
            if (containsNonAlphabetic) {
                event.target.value = inputValue.replace(/[^a-zA-Z\s]/g, ''); 
            }
        });
    });
    </script>


    <script>
        
        const districtOptions = [
    "Bagerhat",
    "Bandarban",
    "Barguna",
    "Barishal",
    "Bhola",
    "Bogura",
    "Brahmanbaria",
    "Chandpur",
    "Chattogram (Chittagong)",
    "Chuadanga",
    "Comilla",
    "Cox's Bazar",
    "Dhaka",
    "Dinajpur",
    "Faridpur",
    "Feni",
    "Gaibandha",
    "Gazipur",
    "Gopalganj",
    "Habiganj",
    "Jamalpur",
    "Jashore (Jessore)",
    "Jhalokati",
    "Jhenaidah",
    "Joypurhat",
    "Khagrachari",
    "Khulna",
    "Kishoreganj",
    "Kushtia",
    "Lakshmipur",
    "Lalmonirhat",
    "Madaripur",
    "Magura",
    "Manikganj",
    "Meherpur",
    "Moulvibazar",
    "Munshiganj",
    "Mymensingh",
    "Naogaon",
    "Narail",
    "Narayanganj",
    "Narsingdi",
    "Natore",
    "Netrokona",
    "Nilphamari",
    "Noakhali",
    "Pabna",
    "Panchagarh",
    "Patuakhali",
    "Pirojpur",
    "Rajbari",
    "Rajshahi",
    "Rangamati",
    "Rangpur",
    "Satkhira",
    "Shariatpur",
    "Sherpur",
    "Sirajganj",
    "Sunamganj",
    "Sylhet",
    "Tangail",
    "Thakurgaon",
    "Narail",
    "Narsingdi"
];

        function populateDropdown(elementId, options) {
            const dropdown = document.getElementById(elementId);

            options.forEach((option) => {
                const optionElement = document.createElement("option");
                optionElement.value = option;
                optionElement.textContent = option;
                dropdown.appendChild(optionElement);
            });
        }
        populateDropdown("district", districtOptions);

        const upzillaOptions = {
        "Noakhali": ["Chatkhil", "Sonaimuri", "Sodor"],
        "District 2": ["Upzilla 2A", "Upzilla 2B", "Upzilla 2C"],
    };


    const presentdistrictOptions = districtOptions;

        function populateDropdownPresent(elementId, options) {
            const dropdown = document.getElementById(elementId);

            options.forEach((option) => {
                const optionElement = document.createElement("option");
                optionElement.value = option;
                optionElement.textContent = option;
                dropdown.appendChild(optionElement);
            });
        }
        populateDropdown("present-district", presentdistrictOptions);

        const upzillaOptionsPresent = {
        "Noakhali": ["Chatkhil", "Sonaimuri", "Sodor"],
        "District 2": ["Upzilla 2A", "Upzilla 2B", "Upzilla 2C"],
    };

    


        function updateUpzillaDropdown() {
            const districtDropdown = document.getElementById("district");
            const upzillaDropdown = document.getElementById("upzilla");
            const selectedDistrict = districtDropdown.value;
            upzillaDropdown.innerHTML = '<option value="">-Select Upzilla-</option>';
            if (selectedDistrict && upzillaOptions[selectedDistrict]) {
                upzillaOptions[selectedDistrict].forEach((upzilla) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = upzilla;
                    optionElement.textContent = upzilla;
                    upzillaDropdown.appendChild(optionElement);
                });
            }
        }
        document.getElementById("district").addEventListener("change", updateUpzillaDropdown);
        updateUpzillaDropdown();



        function updatePresentUpzillaDropdown() {
            const districtDropdown = document.getElementById("present-district");
            const upzillaDropdown = document.getElementById("present-upzilla");
            const selectedDistrict = districtDropdown.value;
            upzillaDropdown.innerHTML = '<option value="">-Select Upzilla-</option>';
            if (selectedDistrict && upzillaOptionsPresent[selectedDistrict]) {
                upzillaOptions[selectedDistrict].forEach((upzilla) => {
                    const optionElement = document.createElement("option");
                    optionElement.value = upzilla;
                    optionElement.textContent = upzilla;
                    upzillaDropdown.appendChild(optionElement);
                });
            }
        }
        document.getElementById("present-district").addEventListener("change", updatePresentUpzillaDropdown);
        updatePresentUpzillaDropdown();
    </script>


</body>
</html>
