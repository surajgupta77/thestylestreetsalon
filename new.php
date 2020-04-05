    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Registrations</title>
        <style>
            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
            }

            th,
            td {
                text-align: left;
                padding: 16px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2
            }

			.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;

}
.button:hover {
  background-color: red; /* Green */
  color: white;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\21D0';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
        </style>

    </head>

    <body>


        <h2>Total Bookings</h2>

        <table>
            <tr>
                <th>Name</th>
                <th>Service</th>
				<th>Mobile</th>
				<th>Time</th>
                <th>Date</th>
				<th>Message</th>

            </tr>


            <?php
  $con=mysqli_connect("localhost","root","","order") or die(mysql_error());


                    $sql = "SELECT * FROM register ";
                    $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo    '
                                      <tr>
                                      <td>'.$row["name"].'</td>
                                      <td>'.$row["service"].'</td>

									  <td>'.$row["mobile"].'</td>
									  <td>'.$row["time"].'</td>
									  <td>'.$row["date"].'</td>
                                      <td>'.$row["message"].'</td>
                                      </tr>';
                                }
                        } else {
                            echo "";
                        }



                        ?>


        </table>



    </body>

    </html>
