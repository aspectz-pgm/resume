<?php

chdir(dirname(__FILE__, 2).'/nodepdf');

// call Node.js by shell
exec('node generate-pdf.js 2>&1', $output, $return_var);

if ($return_var === 0) {
    echo '✅ PDF Exported Successfully!';
} else {
    echo '❌ Error: ' . implode("\n", $output);
}
