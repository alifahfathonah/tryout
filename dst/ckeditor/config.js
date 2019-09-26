/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowserUrl='./dst/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl='./dst/ckfinder/ckfinder.html';
	config.filebrowserFlashBrowseUrl = './dst/ckfinder/ckfinder.html';
	config.filebrowserUploadUrl = './dst/ckfinder/core/connector/php/connector.php?command=QuickUpload';
	config.filebrowserImageUploadUrl = './dst/ckfinder/core/connector/php/connector.php?command=QuickUpload';
	config.filebrowserFlashUploadUrl = './dst/ckfinder/core/connector/php/connector.php?command=QuickUpload';


	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		'/',
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];

	config.removeButtons = 'Source,Save,Templates,Cut,Undo,Find,Form,Replace,Copy,Paste,PasteText,PasteFromWord,NewPage,Preview,Print,Redo,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Flash,HorizontalRule,Smiley,Iframe,Link,Unlink,Anchor,About,Language,BidiRtl,BidiLtr';

};
