<?php
    include 'bak_connection.php';

    $contact=$_SESSION['contact_no'];

        $sql = "SELECT * FROM `rescue` WHERE `Status` != 'Cancelled' AND `contact_no` = $contact ORDER BY `r_id` DESC";
        $result=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($result);
        if($num >= 1){
            while($row=mysqli_fetch_assoc($result)){
                $status=$row['status'];
                if($status=='Accepted'){
                    $status_data='<b style="color:lightgreen">'.$status.'</b>';
                }
                elseif($status=='Pending...'){
                    $status_data=$status;
                }
                else{
                    $status_data='<b style="color:red;">'.$status.'</b>';
                }
                
                echo'
                    <div class="card">
                        <table>
                            <tr>
                                <td><h3>R_Id :- '.$row['r_id'].'</h3></td>
                                <td>
                                    <form action="bak_delete_rescuerequest.php" method="post">
                                        <input type="hidden" name="r_id" value="'.$row["r_id"].'""> 
                                        <button type="submit" class="delete" style="background-color:black;border:0px;">   
                                            <img src="photos/bin1.png" align="top" height="40" width="40" class="bin_img"><br> 
                                        </button>
                                    </form> 
                                </td>
                            </tr>
                        </table>
                        <img src="'.$row['photo'].'" align="right" class="card_img">
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>Name :- </td>
                                    <td>'.$row['name'].'</td>
                                </tr>
                                <tr>
                                    <td>Contact No:- </td>
                                    <td>'.$row['contact_no'].'</td>
                                </tr>
                                <tr>
                                    <td>Animal :- </td>
                                    <td>'.$row['animal'].'</td>
                                </tr>
                                <tr>
                                    <td>Current Situation :- </td>
                                    <td>'.$row['current_situation'].'</td>
                                </tr>
                                <tr>
                                <td>Status :- </td>
                                <td>'.$status_data.'</td>
                                </tr>
                                <tr>
                                    <td>Rescue Address :- </td>
                                    <td>'.$row['exact_location'].'</td>
                                </tr>
                                <tr>
                                    <td>Date/Time :- </td>
                                    <td>'.$row['date/time'].'</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                ';
            }
        }
        else {
                echo "No Request Found";
        }           
?>