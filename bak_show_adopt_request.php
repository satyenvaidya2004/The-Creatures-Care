<?php
    include 'bak_connection.php';

    $id=$_SESSION['id'];

        $sql = "SELECT * FROM `adopt` WHERE `Status` != 'Cancelled' AND `id` = $id ORDER BY `p_id` DESC";
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
                elseif($status=='Declined'){
                    $status_data='<b style="color:red;">'.$status.'</b>';
                }
                else{
                    $status_data='<b style="color:rgb(0,155,255);">'.$status.'</b>';
                }
                
                echo'
                    <div class="card">
                        <table>
                            <tr>
                                <td><h3>Adopt_Id :- '.$row['p_id'].'</h3></td>
                                <td>
                                    <form action="bak_delete_adoptrequest.php" method="post">
                                        <input type="hidden" name="p_id" value="'.$row["p_id"].'""> 
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
                                    <td>'.$row['p_name'].'</td>
                                </tr>
                                <tr>
                                    <td>Category :- </td>
                                    <td>'.$row['category'].'</td>
                                </tr>
                                <tr>
                                    <td>Breed :- </td>
                                    <td>'.$row['breed'].'</td>
                                </tr>
                                <tr>
                                    <td>Age :- </td>
                                    <td>'.$row['age'].'</td>
                                </tr>
                                <tr>
                                    <td>Gender :- </td>
                                    <td>'.$row['gender'].'</td>
                                </tr>
                                <tr>
                                    <td>Vaccinated :- </td>
                                    <td>'.$row['vaccinated'].'</td>
                                </tr>
                                <tr>
                                    <td>Status :- </td>
                                    <td>'.$status_data.'</td>
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