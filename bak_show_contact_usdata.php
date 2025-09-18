<?php
    include 'bak_connection.php';

    $sql = "SELECT * FROM `contact_us` ORDER BY `cu_id` DESC";
    
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num >= 1){
        $output = '<table border="1" cellspacing="0" cellpadding="">
                        <tr style="text-align:center;">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact no</th>
                            <th>Comments</th>
                            <th>Delete</th>
                        </tr>';

                    while($row = mysqli_fetch_assoc($result)){
                            $output .= "<tr style='text-align:center;'>
                            <td>{$row["cu_id"]}</td>
                            <td>{$row["cu_name"]}</td>
                            <td>{$row["cu_email"]}</td>
                            <td>{$row["cu_contact_no"]}</td>
                            <td>{$row["cu_comment"]}</td>
                            <td>
                                <form action='bak_delete_contact_usdata.php' method='post'>
                                    <input type='hidden' name='id' value='".$row['cu_id']."'>
                                    <button type='submit' class='delete' style='background-color:black;border:0px;'>
                                        <img src='photos/bin2.png' class='bak_img'>
                                    </button>
                                </form>
                            </td>
                        </tr>";                         
                    }
            $output .= "</table>";
            echo $output;
    }else{        echo "<h3>No Record Found.</h3>";
    }
    mysqli_close($conn);
?>
