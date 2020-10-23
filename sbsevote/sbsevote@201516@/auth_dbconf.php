<?php
$servername = "172.16.0.38";
$username = "sbsevote";
$password = "sbsevote@2015";
$dbname = "sbsevote";

                      // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                
								

?>

