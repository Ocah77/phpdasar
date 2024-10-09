<?php 
require 'function.php';

$id = $GET["id"];

if( hapus($id) > 0 ) {
    echo "
    <script>
        alert('data berhasil ditambahkan!');
        document.localtion.href = 'index.php';
    </script>
 ";
} else {
    echo "
          <script>
              alert('data gagal ditambahkan!');
              document.localtion.href = 'index.php';
          </script>
   ";   
}




?>