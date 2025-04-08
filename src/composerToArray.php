<?php


function getComposerFileData()
{
    return
    ["autoload" => ["files" => ["src/Arrays.php"]],
    "config" => ["vendor-dir" => "composer/vendor"]]
    
    Array
    (
        [autoload] => Array
            (
                [files] => Array
                    (
                        [0] => src/Arrays.php
                    )
    
            )
    
        [config] => Array
            (
                [vendor-dir] => /composer/vendor
            )
    
    )
}


// {
//     "autoload": {
//       "files": [
//         "src/Arrays.php"
//       ]
//     },
//     "config": {
//       "vendor-dir": "/composer/vendor"
//     }
//   }