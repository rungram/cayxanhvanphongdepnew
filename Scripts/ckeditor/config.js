
CKEDITOR.editorConfig = function( config )
{
        // Define changes to default configuration here. For example:
    config.language = 'vi';
    
        // config.uiColor = '#AADC6E';
        
        config.toolbar_Full = [
            ['Source','-','Save','NewPage','Preview','-','Templates'],
            ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
            ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
            '/',
            ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
            ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
            ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
            ['BidiLtr', 'BidiRtl' ],
            ['Link','Unlink','Anchor'],
            ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe'],
            '/',
            ['Styles','Format','Font','FontSize'],
            ['TextColor','BGColor'],
            ['Maximize', 'ShowBlocks','-','About']
            ];
        
        config.entities = false;
        //config.entities_latin = false;
        

        /*config.filebrowserBrowseUrl = 'http://localhost:81/testcode/fckeditor/ckfinder/ckfinder.html';
        config.filebrowserImageBrowseUrl = 'http://localhost:81/testcode/fckeditor/ckfinder/ckfinder.html?type=Images';
        config.filebrowserFlashBrowseUrl = 'http://localhost:81/testcode/fckeditor/ckfinder/ckfinder.html?type=Flash';
        config.filebrowserUploadUrl = 'http://localhost:81/testcode/fckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
        config.filebrowserImageUploadUrl = 'http://localhost:81/testcode/fckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
        config.filebrowserFlashUploadUrl = 'http://localhost:81/testcode/fckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';*/
		
		//vantan 2016 - fix hostname
		//alert('========='+_baseUrl1);

        config.filebrowserBrowseUrl = _baseUrl1+'ckfinder/ckfinder.html';
        config.filebrowserImageBrowseUrl = _baseUrl1+'ckfinder/ckfinder.html?type=Images';
        config.filebrowserFlashBrowseUrl = _baseUrl1+'ckfinder/ckfinder.html?type=Flash';
        config.filebrowserUploadUrl = _baseUrl1+'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
        config.filebrowserImageUploadUrl = _baseUrl1+'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
        config.filebrowserFlashUploadUrl = _baseUrl1+'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

};  