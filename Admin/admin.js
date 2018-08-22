$(window).on('load', function() {
	$('#trumbowyg-demo').trumbowyg({
		resetCss: true,
		btnsDef: {
                    // Customizables dropdowns
                    image: {
                        dropdown: ['insertImage', 'base64', 'noEmbed'],
                        ico: 'insertImage'
                    }
                },
	    btns: [
        ['viewHTML'],
        ['undo', 'redo'], // Only supported in Blink browsers
        ['formatting'],
        ['strong', 'em', 'del'],
        ['superscript', 'subscript'],
        ['link'],
        ['image'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen']
    ]
	});
});
