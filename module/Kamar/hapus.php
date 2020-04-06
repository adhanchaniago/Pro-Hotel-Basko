<?php
$id = $_GET['id'];
if ($db->dKamar($id) > 0) {
    echo
        "
        <script>
            document.location.href = 'index.php?page=module/Kamar/index';
        </script>
        ";
} else {
    echo
        "
        <script>
            document.location.href = 'index.php?page=module/Kamar/index';
        </script>
        ";
}
