Ext.define('Siccad.view.AbstractForm',{
    extend: 'Ext.form.Panel',
    alias: 'widget.abstractForm',
    padding: '5 5 0 5',
    bodyPadding: 10,
    border: false,
    style: 'background-color:#fff',
	quickType: false, 
	ancestral: 'teste',		
    fieldDefaults:{
        anchor: '100%',
        labelAlign: 'left',
        //labelWidth: 150,
        allowBlank: false,
        combineErrors: false,
        msgTarget: 'side'
    },
    defaultType: 'textfield', 
	
	config: {
		quickType: false, 
		ancestral: 'teste'		
	}
});