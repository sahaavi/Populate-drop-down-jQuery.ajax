<?php
if(isset($_POST["division"])){
    // Capture selected country
    $division = $_POST["division"];
     
    // Define country and city array
    $divisionArr = array(
                "Barisal" => array("Barguna","Barisal","Bhola","Jhalokati","Patuakhali","Pirojpur"),
                "Chattogram" => array("Bandarban", "Brahmanbaria", "Chandpur","Chattogram","Cumilla","Cox's Bazar","Feni","Khagrachari","Lakshmipur","Noakhali","Rangamati"),
                "Dhaka" => array("Dhaka","Faridpur", "Gazipur", "Gopalganj","Kishoreganj","Madaripur","Manikganj","Munshiganj","Narayanganj","Narsingdi","Rajbari","Shariatpur","Tangail"),
                "Mymensingh" => array("Jamalpur", "Mymensingh", "Netrakona","Sherpur"),
                "Khulna" => array("Bagerhat", "Chuadanga","Jessore","Jhenaidah","Khulna", "Kushtia","Magura","Meherpur","Narail","Satkhira"),
                "Rajshahi" => array("Bogra","Jaipurhat","Naogaon","Natore","Nawabganj","Pabna","Rajshahi","Sirajganj"),
                "Rangpur" => array("Rangpur","Gaibandha","Kurigram","Nilphamari","Lalmonirhat","Dinajpur","Thakurgaon","Panchagarh"),
                "Sylhet" => array("Habiganj", "Moulvibazar", "Sunamganj","Sylhet")
                );
     
    // Display city dropdown based on country name
    if($division !== '---Select---'){
        foreach($divisionArr[$division] as $value){
            echo  "<option>". $value . "</option>";
        }
    } 
}
?>