<?php
$data['title'] = 'brad big company';
$data['who'] = 'brad';

$query = http_build_query($data);
echo $query;