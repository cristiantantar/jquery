<html>
<head>
<title>Test Widget page </title>
<style type="text/css" href="jquery-ui-1.8.21.custom.css"></style>
<script type="text/javascript" src="jQuery.1.7.2.js"></script>
<script type="text/javascript" src="jquery-ui-1.8.21.custom.min.js"></script>
<script type="text/javascript">
$.widget( "demo.multi", {
		_init:function(){
		},
		// These options will be used as defaults
		options: { 
			name: 'multi-name',
			id : 'multi-id',
			checkAllTxt : 'Check All',
			uncheckAllTxt: 'Uncheck All',
			minWidth: 0,
			minHeitht:0,
			width:0,
			height:0,
			multiple:true
		},
		// Set up the widget
		_create: function() {
			var op = this.options;
			var ele = this.element;
			//var slOptions = $('div').addClass('multi-ui-div');
			var li = '';
			ele.find('option').each(function(i){
			    //console.log($(this).text());
				li += '<input type="checkbox" calss="multi-ui-check"/>';
				li += '<li calss="multi-ui-option-' + $(this).attr('value') + '">' + $(this).text() + '</li>';
			});
			$('#optionlist').html(li);
		},
		// Use the _setOption method to respond to changes to options
		_setOption: function( key, value ) {
			switch( key ) {
				case "clear":
					console.log('in option set');
					// handle changes to clear option
				break;
			}
			// In jQuery UI 1.8, you have to manually invoke the _setOption method from the base widget
			$.Widget.prototype._setOption.apply( this, arguments );
			// In jQuery UI 1.9 and above, you use the _super method instead
			this._super( "_setOption", key, value );
		},
		// Use the destroy method to clean up any modifications your widget has made to the DOM
		destroy: function() {
			console.log('in destroy method');
			// In jQuery UI 1.8, you must invoke the destroy method from the base widget
			$.Widget.prototype.destroy.call( this );
			// In jQuery UI 1.9 and above, you would define _destroy instead of destroy and not call the base method
		}
	});
$(document).ready(function(){
	$('#test').multi();
});
</script>
</head>
<body>
<h1> Test Widget Page </h1>
<select name="test" id="test">
	<option value=1>Option 1</option>
	<option value=2>Option 2</option>
	<option value=3>Option 3</option>
	<option value=4>Option 4</option>
</select>

<div class="test" id="optionlist"></div>
</body>
</html>