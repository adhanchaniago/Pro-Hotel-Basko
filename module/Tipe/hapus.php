<?php
$id = $_GET['id'];
if ($db->dTipeKamar($id) > 0) {
    echo
        "
        <script>
            document.location.href = 'index.php?page=module/Tipe/index';
        </script>
        ";
} else {
    echo
        "
        <script>
            document.location.href = 'index.php?page=module/Tipe/index';
        </script>
        ";
}
