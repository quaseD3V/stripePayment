<?php

namespace action;
session_start();
if (isset($_SESSION['token'])) {
    header('Content-type: audio/wav');
    header("Content-Disposition: attachment; filename=\"" . basename('./criando_download/song/Obzkure - Very Hard.wav') . "\" ");
    header('Content-Length: ' . filesize("./criando_download/song/Obzkure - Very Hard.wav"));
    readfile('./criando_download/song/Obzkure - Very Hard.wav');
    session_destroy();
} else {
    print "but the music, bro!";
}

exit;
