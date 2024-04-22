<?php 
    require('../include/db_config.php');
    require('../include/essentials.php');
    adminLogin();

    if(isset($_POST['get_bookings']))
    {
        $query="SELECT bo.*,bd.* FROM `booking_order` bo
        INNER JOIN `booking_details` bd ON bo.booking_id=bd.booking_id
        WHERE bo.order_id=0
        ORDER BY bo.booking_id ASC";
        
        $res=mysqli_query($con,$query);
        $i=1;
        $table_data="";

        while($data=mysqli_fetch_assoc($res))
        {
            $date=date("d-m-Y",strtotime($data['date']));
            $checkin=date("d-m-Y",strtotime($data['check_in']));
            $checkout=date("d-m-Y",strtotime($data['check_out']));

            $table_data .="
                <tr>
                    <td>$i</td>
                    <td>
                      <b>Name:</b> $data[user_name]
                      <br>
                      <b>Phone No:</b> $data[phonenum]
                    </td>
                    <td>
                        <b>Room:</b> $data[room_name]
                        <br>
                        <b>Price:</b> ₹$data[price]
                    </td>
                    <td>
                        <b>Check in:</b> $checkin
                        <br>
                        <b>Check out:</b> $checkout
                        <br>
                        <b>Paid:</b> ₹$data[total_pay]
                        <br>
                        <b>Date:</b> $date
                    </td>
                    <td>
                        <button type='button' onclick='assign_room($data[booking_id])' class='btn text-white btn-sm fw-bold custom-bg shadow-none' data-bs-toggle='modal' data-bs-target='#assign-room'>
                        <i class='bi bi-check2-square'></i> Assign Room
                        </button>
                    </td>
                </tr>
            ";
            $i++;
        }
        echo $table_data;
    }

     if(isset($_POST['assign_room']))
    {
        $frm_data=filteration($_POST);

        $query="UPDATE `booking_details` SET room_no=? WHERE booking_id=?";

        $values=[$frm_data['room_no'],$frm_data['booking_id']];
        $res=update($query,$values,'si');
        echo $res;
    }
?>