<?php
    include 'bak_connection.php';

    $sql = "SELECT * FROM `registration` WHERE `your_role` = 'user'";
    
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num > 0){
        $output = '<table border="1" cellspacing="0" cellpadding="">
                    <tr style="text-align:center;">
                        <th>Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Contact no</th>
                        <th>Gender</th>
                        <th>City</th>
                        <th>Access</th>
                        <th>Permission</th>
                    </tr>';

                    while($row = mysqli_fetch_assoc($result)){
                        if ($row['access'] == 'yes') {
                            $checked = 'checked';
                        } else {
                            $checked = '';
                        }

                        $access=$row['access'];
                        if($access=='yes'){
                            $access_data='<b style="color:lightgreen">'.$access.'</b>';
                        }
                        else{
                            $access_data='<b style="color:red;">'.$access.'</b>';
                        }

                        $output .= "<tr style='text-align:center;'>
                                        <td>{$row["id"]}</td>
                                        <td>{$row["username"]}</td>
                                        <td>{$row["email"]}</td>
                                        <td>{$row["contact_no"]}</td>
                                        <td>{$row["gender"]}</td>
                                        <td>{$row["city"]}</td>
                                        <td>$access_data</td>
                                        <td>
                                            <form action='bak_update_toggle.php' method='post'>
                                                <input type='hidden' name='id' value='".$row["id"]."'>    
                                                <label class='switch'>
                                                    <input type='checkbox' name='toggle' id='toggle' onchange='this.form.submit()' $checked />
                                                    <span class='slider round'></span>
                                                </label>
                                            </form> 
                                        </td>
                                    </tr>";
                    }
            $output .= "</table>";
            echo $output;
    }else{
        echo "<h3>No Record Found.</h3>";
    }
    mysqli_close($conn);
?>