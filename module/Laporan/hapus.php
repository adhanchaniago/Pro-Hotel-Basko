<?php
$id = $_GET['id'];
if ($db->dPengguna($id) > 0) {
    echo
        "
        <script>
            document.location.href = 'index.php?page=module/Pengguna/index';
        </script>
        ";
} else {
    echo
        "
        <script>
            document.location.href = 'index.php?page=module/Pengguna/index';
        </script>
        ";
}
