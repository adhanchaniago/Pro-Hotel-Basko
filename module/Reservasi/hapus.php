<?php
$id = $_GET['id'];
if ($db->dReservasi($id) > 0) {
    echo
        "
        <script>
            document.location.href = 'index.php?page=module/Reservasi/index';
        </script>
        ";
} else {
    echo
        "
        <script>
            document.location.href = 'index.php?page=module/Reservasi/index';
        </script>
        ";
}
