<?php
if (isset($_POST['button'])) {
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email']; 
    $user_message = $_POST['user_message'];
    
    echo "<h4>Percobaan form action</h4>";
    echo "Atas nama $user_name dengan alamat email. $user_email mengirimkan pesan $user_message
    <br><br>";
    
    }
?>

<?php
if (isset($_POST['button'])) {
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($_POST[ 
            "user_name"])){
            echo "Nama kosong";

            }else {
                $user_name = cek_input($_POST["user_name"]);
                    if (!preg_match("/^[a-zA-Z]*$/",$user_name)) {
                        echo "nama harus huruf"; 
                    } else {
                        $user_name = $_POST['user_name']; 
                        $user_email = $_POST['user_email'];
                        $user_message = $_POST['user_message'];
                        
                        echo "<h4>Percobaan Validasi Nama</h4>";
                        echo "Atas nama $user_name dengan alamat email $user_email mengirimkan pesan $user_message";
                    }
                }
    }
}

function cek_input($data) {
    $data = trim($data);
    $data = stripsLashes($data); 
    $data = htmLspecialchars($data);
    return $data;
}
?>