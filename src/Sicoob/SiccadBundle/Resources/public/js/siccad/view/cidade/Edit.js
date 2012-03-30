Ext.require(['Siccad.view.AbstractForm', 'Siccad.view.AbstractWindow', 'Siccad.view.estado.Combo', 'Ext.form.field.File']);

Ext.define('Siccad.view.cidade.Edit', {
    extend: 'Siccad.view.AbstractWindow',
    alias : 'widget.cidadeEdit',
    title : 'Edição de Cidade',
	width: '350',

    initComponent: function() {
    	
        this.items = [{
            xtype: 'abstractForm', 
            items: [
            	{
					xtype: 'fieldcontainer', 
					fieldLabel: 'Estado',
					layout: 'hbox', 
					
					items: [
						{	
//							xtype: 'estadoCombo'
							xtype: 'combo',
							name : 'estados_id',
							ref: 'estados_id',
							allowBlank: false,
		                    store: 'Estados', 
							displayField:'nome',
							valueField: 'id',
						    typeAhead: false,
						    forceSelection: true,
						    pageSize: 10, 
						    listConfig: {
						    	minWidth: 300,
						    	resizable: true
						    }
						}, 
						{
							xtype: 'button', 
							scale: 'small', 
							iconCls: 'add', 
							itemId: 'addUF', 
							width: 25
						}
					]
            	},
            	{
	                xtype: 'textfield',
	                name : 'nome',
	                ref: 'nome',
	                fieldLabel: 'Nome',
	                allowBlank: false
            	},
            	{
	                xtype: 'filefield',
	                name : 'file',
	                ref: 'file',
	                fieldLabel: 'Arquivo',
	                allowBlank: false, 
	                buttonText: 'Selecione um arquivo...'
            	}
            ]}
        ];

        this.callParent(arguments);
    }
});
