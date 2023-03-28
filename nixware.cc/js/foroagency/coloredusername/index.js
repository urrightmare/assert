function usernameColorTagList() {
	$('body').on('DOMSubtreeModified', function () {
        $('.autoCompleteList li').each(function() {
        	var color = $(this).find( '.ColorUsernameAutoCompleteList' ).attr( 'data-color' ) ;
            $(this).attr('style', 'cursor: pointer; color: ' + color );
        });
	});
}

$(document).ready(function() {
	usernameColorTagList();
});