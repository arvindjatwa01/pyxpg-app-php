/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function(config) {
    config.removePlugins = 'easyimage, cloudservices';
    config.filebrowserFlashUploadUrl = 'upload.php?type=Flash';
};