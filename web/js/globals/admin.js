NJSCORE.extend('adminDialogs',function(){
	var openLbWrapper='<div>';
	var closeLbWrapper='</div>';
	var openHeaderWrapper='<div id="colorbox-header">';
	var closeHeaderWrapper='</div>';
	var openBodyWrapper='<div id="colorbox-body">';
	var closeBodyWrapper='</div>';
	var openFormWrapper='<form id="dialog" action="javascript:;">';
	var closeFormWrapper='</form>';
	this.getHeader = function(text) {
			return openHeaderWrapper +
			text +
			closeHeaderWrapper;	
	}
	this.getInput = function(label) {
			return '<div class="form-section">' +
			'<div class="form-section-title">' +
			label +
			'</div>' +
			'<div class="form-section-input-text"><input id="dialogvalue" name="value" type="text" value="" autocomplete="off" /></div>' +
			'</div>';	
	}
	this.getButton = function(text) {
			return '<div class="form-section" style="text-align:right"><button type="button" id="promptsubmit" name="submit" class="button white">' +
			text +
			'</button></div>';	
	}
	this.alert = function(headerText, bodyText, onClose){
		NJSCORE.LightBox.htmlLoad(
			openLbWrapper +
			this.getHeader(headerText) +
			openBodyWrapper +
			'<div class="form-section form-section-title" style="min-width:250px;">' +
			bodyText +
			'</div>' +
			closeBodyWrapper +
			closeLbWrapper,
			null,
			null,
			onClose);		
	}
	this.prompt = function(headerText,inputLabel, buttonText, onClose, onSubmit){
		NJSCORE.LightBox.htmlLoad(
			openLbWrapper +
			this.getHeader(headerText) +
			openBodyWrapper +
			openFormWrapper +
			this.getInput(inputLabel) +
			this.getButton(buttonText) +
			closeFormWrapper +
			closeBodyWrapper +
			closeLbWrapper,
			null,
			function() {$('#promptsubmit').click(
					function() {
						var retval = $('#dialogvalue').val();
						NJSCORE.LightBox.close();
						onSubmit(retval);
					}	
				);},
			onClose);		
	}
});