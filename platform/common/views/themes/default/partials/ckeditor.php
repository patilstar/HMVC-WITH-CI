<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @author Deepak Patil <deepak.patil@relesol.com>, 2015
 * @license The MIT License, http://opensource.org/licenses/MIT
 */

echo js('ckeditor/ckeditor.js?t='.CKEditor::timestamp);
echo js('ckeditor/adapters/jquery.js?t='.CKEditor::timestamp);

?>

    <script type="text/javascript">
    //<![CDATA[

        CKEDITOR.timestamp = <?php echo json_encode(CKEditor::timestamp); ?>;

        // Allow i tags to be empty (for Font Awesome).
        CKEDITOR.config.protectedSource.push(/<i[^>]><\/i>/g);
        CKEDITOR.dtd.$removeEmpty['i'] = false;

        // Protect Google AdSense tags.
        CKEDITOR.config.protectedSource.push(/<ins[^>]><\/ins>/g);
        CKEDITOR.dtd.$removeEmpty['ins'] = false;

    //]]>
    </script>
