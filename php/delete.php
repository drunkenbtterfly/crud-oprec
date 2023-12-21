<?php
include "../koneksi.php"; // Include your database connection file

if (isset($_GET['hapus'])) {
    $email_to_delete = $_GET['hapus']; // Assuming 'hapus' is the parameter containing the email to be deleted

    // Use prepared statement to prevent SQL injection
    $sql = "DELETE FROM reqruitment WHERE email = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    
    mysqli_stmt_bind_param($stmt, "s", $email_to_delete);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        header("Location: ../index.php?success=successfully deleted");
    } else {
        header("Location: ../index.php?error=unknown error occurred");
    }

    mysqli_stmt_close($stmt);
    mysqli_close($koneksi);
} else {
    header("Location: ../index.php");
}
?>
