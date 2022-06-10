<?php
    if(isset($_POST['submit']))
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        $data = file_get_contents('../Data/data.json');
        $data_array = json_decode($data, true);

        $data_new = array(
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'mobile' => $mobile
        );

        $data_array[] = $data_new;
        $new_data = json_encode($data_array, JSON_PRETTY_PRINT);

        if(file_put_contents('../Data/data.json', $new_data))
        {
            echo "Data Saved Successfully";
        }
        else
        {
            echo "No Data Saved";
        }
    }
?>