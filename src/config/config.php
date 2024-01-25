<?php
return [
    'prefix' => 'api',
    'page' => 1,
    'limit' => 10,
    'file_accepts' => [
        'jpg',
        'jpeg',
        'png',
        'gif',
        'mp4'
    ],
    'max_file_upload' => 5,
    'max_file_size' => 5, /** in megabytes */
    'save_folder' => 'temp', /** location for saving temporary files */
    'middleware' => ['api']
];
?>