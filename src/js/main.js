function customAlert(title, text, type) {
    Swal.fire({
        icon: type,
        title: title,
        text: text,
        confirmButtonText: 'FECHAR'
	});
}
jQuery(function($) {
    $( document ).on('submit_success', function(e, data) {
        let element = jQuery(e.target);
        if (element.hasClass('elementor-form')) {
            customAlert('Obrigado!', data.message, 'success');
        }
    });
    $( document ).on('error', function(e, data, test) {
        let element = jQuery(e.target);
		if (element.hasClass('elementor-form')) {
			
			setTimeout(function(){
				let message = element.children('.elementor-message').text();
				customAlert('Erro', message, 'error');
			}, 500);
			
		}
    });
});