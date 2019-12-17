<?php
//pageファイルで投稿を掲示可能にする
function get_current_link() {
 return (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}