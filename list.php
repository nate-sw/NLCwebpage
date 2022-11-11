<!DOCTYPE html>
<html>
    <head>
        <title>NLC</title>
        <style>
            .pageid{
               border: 5px outset black;
               background-color: cadetblue;
               text-align: center; 
            }
        </style>
    </head>
    <body>
        <h1>Nate's locomotive catalogue</h1>
        <img src="images/TXL193557.png" alt="TXL 193557" width="800" height="450"/>
        <div class="pageid">
            <h2>Locomotive List</h2>
            <p>List of all of the locomotives I have photographed</p>
        </div>

        <h3>Add to the index:</h3>

        <form action="./includes/entry.inc.php" method="POST">
            
                <label for="location">Chose a location:</label>
                    <select name="location" id="location" required>
                        <option value="">-</option>
                        <option value="Africa">Africa</option>
                        <option value="Asia">Asia</option>
                        <option value="Europe">Europe</option>
                        <option value="North America">North America</option>
                        <option value="South America">South America</option>
                        <option value="Oceania">Oceania</option>
                     </select>
            <br>

            <p>Train type:</p>
                <input type="radio" id="fr" name="type" value="Freight">
                <label for="type">Freight</label>
            <br>
                <input type="radio" id="ps" name="type" value="Passenger">
                <label for="type">Passenger</label>
            <br><br>
                <label for="rail_operator">Rail Operator (NA only):</label>
                <input type="text" id="rail_operator" name="rail_operator" pattern=".[^0-9]{1,99}" title="Rail Operator">
            <br><br>

                <label for="reporting_mark">Reporting Mark [A-Z] (NA only):</label>
                <input type="text" id="reporting_mark" name="reporting_mark" pattern="[A-Z]{2,4}" title="Reporting Mark">
            <br><br>

                <label for="loco_num">Locomotive number:</label>
                <input type="number" id="loco_num" name="loco_num" min="1" max="9999">
            <br><br>
            
                <label for="loco_builder">Locomotive Builder [A-Z] (NA only):</label>
                <input type="text" id="loco_builder" name="loco_builder" pattern=".{1,99}" title="Locomotive Builder">
            <br><br>
            
                <label for="loco_model">Locomotive Model [A-Z] (NA only):</label>
                <input type="text" id="loco_model" name="loco_model" pattern=".{1,99}" title="Locomotive Model">
            <br><br>
            

                <input type="submit">

        </form>
        <?php
        if(@$_POST['submit']){
            $sql = "SELECT * FROM train_list ORDER BY id DESC LIMIT 1;";
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]."<br>".
                    " -Continent: " . $row["location"]."<br>".
                    " -Train Type: " . $row["type"]."<br>".
                    " -Rail Operator: " . $row["rail_op"]."<br>".
                    " -Reporting Mark: " . $row["reporting_mark"]."<br>".
                    " -Locomotive Number: " . $row["loco_num"]."<br>".
                    " -Locomotive Builder: " . $row["loco_builder"]."<br>".
                    " -Locomotive Model: " . $row["loco_model"]."<br>";
                }
            } 
            else {
                echo "0 results";
            }

        }

        ?>

        <!--The forms created above will later be used to search a table with detailed information regarding where a photo was taken, what train is it,
        who manufactured the locomotive, etc... etc... However, I still have to figure out how to do it.-->

        

    </body>


</html>
