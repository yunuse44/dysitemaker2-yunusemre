<?php

function list_files($dir) {
    echo ' <div id="yazılar" class="penac">
            <div><img src="srs/folder.png" style="margin-left: 10px; float:left;"></img>
                <span>yazıları  listele</span><b >x</b></div>';
    if (is_dir($dir)) {
        if ($handle = opendir($dir)) {
            while (($file = readdir($handle)) !== false) {
                if ($file != "." && $file != ".." && $file != "Thumbs.db"/* Bazı sinir bozucu windows dosyaları. */) {
                    echo '<a target="_blank" href="' . $dir . $file . '">' . $file . '</a><b id="pduzenle">düzenle</b><b id="psil">sil</b> <br>' . "\n";
                }
            }
            closedir($handle);
        }
    }
echo "</div>";}

// Listelenecek olan klasörün yolunu gönderelim.
?>

