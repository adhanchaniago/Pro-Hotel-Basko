<?php
$id = $_GET['id'];
if ($db->dPengguna($id) > 0) {
    echo
        "
        <script>
            alert('Data telah dihapus');
            document.location.href = 'index.php?page=module/Pengguna/index';
        </script>
        ";
} else {
    echo
        "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'index.php?page=module/Pengguna/index';
        </script>
        ";
}
