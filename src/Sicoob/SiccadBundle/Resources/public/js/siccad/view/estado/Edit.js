Ext.require(['Siccad.view.AbstractForm']);
Ext.require(['Siccad.view.AbstractWindow']);

Ext.define('Siccad.view.estado.Edit', {
    extend: 'Siccad.view.AbstractWindow',
    alias : 'widget.estadoEdit',
    title : 'Edição de Estado',

    initComponent: function() {
    	
        this.items = [{
            xtype: 'abstractForm',
            items: [
            	{
	                xtype: 'textfield',
	                name : 'nome',
	                ref: 'nome',
	                fieldLabel: 'Nome',
	                allowBlank: false
            	},
            	{
	                xtype: 'textfield',
	                name : 'uf',
	                ref: 'uf',
	                fieldLabel: 'UF',
                    width: 50,
                    maxLength: 2, 
	                allowBlank: false
            	}
            ]}
        ];

        this.callParent(arguments);
    }
});