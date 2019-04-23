<?php

echo sqr_qrcode(
vcard,
array(
'n' => 'get_field('url');,
'org' => .get_field('company');,
'url' => .get_field('url');,
'email' => .get_field('email');),
1,
false,
array(
'fill' => '#00ff00',
'size' => 500,
'background' => '#eeeeee'
));

?>
