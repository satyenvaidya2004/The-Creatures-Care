<?php
    include 'bak_connection.php';

    $sql = "SELECT * FROM `adopt` WHERE `id` = 1";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num >= 1){
        while($row=mysqli_fetch_assoc($result)){
            
            echo'
            <div class="card">
                <img src="'.$row['photo'].'" class="card_img">
                <div class="card_details">
                    <h2>'.$row['p_name'].'</h2>
                    <p>'.$row['category'].'</p>
                    <p>'.$row['age'].' Years Old</p>
                    <div class="linebreak"></div>
                    <form action="more_adopt.php" method="post">
                        <input type="hidden" name="p_id" value="'.$row["p_id"].'">
                        <button>See more details</button>
                    </form>
                </div>
            </div>
            ';
        }
    }
    else {
            echo "No Request Found";
    }            
?>