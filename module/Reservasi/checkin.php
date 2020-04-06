<?php
$id = $_GET['id'];
if ($dataReservasi = $db->prosesCheckin($id) > 0) {
    echo "
    <script>
    document.location.href = 'index.php?page=module/Reservasi/index';
    </script>";
} else {
    echo "<script>
    document.location.href = 'index.php?page=module/Reservasi/index';
    </script>";
}
