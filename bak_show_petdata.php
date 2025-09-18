<?php
    include 'bak_connection.php';

    $sql = "SELECT * FROM `adopt` ORDER BY `p_id` DESC";
    
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num > 0){
        $output = '<table border="1" cellspacing="0" cellpadding="">
                    <tr style="text-align:center;">
                        <th>P_Id</th>
                        <th>P_Name</th>
                        <th>Category</th>
                        <th>Breed</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Vaccinated</th>
                        <th>Photo</th>
                        <th>Status </th>
                        <th>Delete</th>
                    </tr>';

                    while($row = mysqli_fetch_assoc($result)){
                        $status=$row['status'];
                        if($status=='Accepted'){
                            $output .= "<tr style='text-align:center;'>
                                        <td>{$row["p_id"]}</td>
                                        <td>{$row["p_name"]}</td>
                                        <td>{$row["category"]}</td>
                                        <td>{$row["breed"]}</td>
                                        <td>{$row["age"]}</td>
                                        <td>{$row["gender"]}</td>
                                        <td>{$row["vaccinated"]}</td>
                                        <td><img src='{$row["photo"]}' height='100' width='150' style='border:1px solid white;'></td>
                                        <td style='color:lightgreen';>$status</td>
                                        <td>
                                        <form action='bak_delete_adoptdata.php' method='post'>
                                        <input type='hidden' name='id' value='".$row['p_id']."'>
                                        <button type='submit' class='delete' style='background-color:black;border:0px;'>
                                        <img src='photos/bin2.png' class='bak_img'>
                                        </button>
                                        </form>
                                        </td>
                                    </tr>";
                        }
                        elseif($status=='Declined'){
                            $output .= "<tr style='text-align:center;'>
                                        <td>{$row["p_id"]}</td>
                                        <td>{$row["p_name"]}</td>
                                        <td>{$row["category"]}</td>
                                        <td>{$row["breed"]}</td>
                                        <td>{$row["age"]}</td>
                                        <td>{$row["gender"]}</td>
                                        <td>{$row["vaccinated"]}</td>
                                        <td><img src='{$row["photo"]}' height='100' width='150' style='border:1px solid white;'></td>
                                        <td style='color:red';>$status</td>
                                        <td>
                                        <form action='bak_delete_adoptdata.php' method='post'>
                                        <input type='hidden' name='id' value='".$row['p_id']."'>
                                        <button type='submit' class='delete' style='background-color:black;border:0px;'>
                                        <img src='photos/bin2.png' class='bak_img'>
                                        </button>
                                        </form>
                                        </td>
                                    </tr>";
                        }
                        elseif($status=='Requested'){
                            $output .= "<tr style='text-align:center;'>
                                        <td>{$row["p_id"]}</td>
                                        <td>{$row["p_name"]}</td>
                                        <td>{$row["category"]}</td>
                                        <td>{$row["breed"]}</td>
                                        <td>{$row["age"]}</td>
                                        <td>{$row["gender"]}</td>
                                        <td>{$row["vaccinated"]}</td>
                                        <td><img src='{$row["photo"]}' height='100' width='150' style='border:1px solid white;'></td>
                                        <td style='color:rgb(0,155,255)';>$status</td>
                                        <td>
                                        <form action='bak_delete_adoptdata.php' method='post'>
                                        <input type='hidden' name='id' value='".$row['p_id']."'>
                                        <button type='submit' class='delete' style='background-color:black;border:0px;'>
                                        <img src='photos/bin2.png' class='bak_img'>
                                        </button>
                                        </form>
                                        </td>
                                    </tr>";
                        }
                        elseif($status=='Cancelled'){
                            $output .= "<tr style='text-align:center;opacity:0.7;'>
                                        <td>{$row["p_id"]}</td>
                                        <td>{$row["p_name"]}</td>
                                        <td>{$row["category"]}</td>
                                        <td>{$row["breed"]}</td>
                                        <td>{$row["age"]}</td>
                                        <td>{$row["gender"]}</td>
                                        <td>{$row["vaccinated"]}</td>
                                        <td><img src='{$row["photo"]}' height='100' width='150' style='border:1px solid white;'></td>
                                        <td style='color:orange';>$status</td>
                                        <td>
                                        <form action='bak_delete_adoptdata.php' method='post'>
                                        <input type='hidden' name='id' value='".$row['p_id']."'>
                                        <button type='submit' class='delete' style='background-color:black;border:0px;'>
                                        <img src='photos/bin2.png' class='bak_img'>
                                        </button>
                                        </form>
                                        </td>
                                    </tr>";
                        }
                        else{
                            $output .= "<tr style='text-align:center;'>
                                        <td>{$row["p_id"]}</td>
                                        <td>{$row["p_name"]}</td>
                                        <td>{$row["category"]}</td>
                                        <td>{$row["breed"]}</td>
                                        <td>{$row["age"]}</td>
                                        <td>{$row["gender"]}</td>
                                        <td>{$row["vaccinated"]}</td>
                                        <td><img src='{$row["photo"]}' height='100' width='150' style='border:1px solid white;'></td>
                                        <td>$status</td>
                                        <td>
                                        <form action='bak_delete_adoptdata.php' method='post'>
                                        <input type='hidden' name='id' value='".$row['p_id']."'>
                                        <button type='submit' class='delete' style='background-color:black;border:0px;'>
                                        <img src='photos/bin2.png' class='bak_img'>
                                        </button>
                                        </form>
                                        </td>
                                    </tr>";
                        }                        }
            echo $output;
    }else{
        echo "<h3>No Record Found.</h3>";
    }
    mysqli_close($conn);
?>
