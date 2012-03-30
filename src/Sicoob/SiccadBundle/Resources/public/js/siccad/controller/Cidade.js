Ext.require('Siccad.controller.AbstractController');

Ext.define('Siccad.controller.Cidade', {
    extend: 'Siccad.controller.AbstractController',
    stores: ['Cidades'],
	storePrincipal: 'Cidades',
    models: ['Cidade'], 
    editTitle: 'Edição de Cidade',
    insertTitle: 'Cadastro de Cidade',
    modelClass: 'Siccad.model.Cidade',
	editWidget: 'cidadeEdit',
    gridWidget: 'cidadeList',
	
    views: [
        'cidade.List',
        'cidade.Edit' 
    ],
    
    refs: [
		{
			ref:'formEdit', 
			selector:'cidadeEdit'
		},
		{
			ref:'gridList', 
			selector:'cidadeList'
		}
    ],

    init: function() {
        this.control({
            'cidadeList': {
                itemdblclick: this.edit
            },

            'cidadeList button[action=insert]': {
                click: this.insert
            },
            
            'cidadeList button[action=edit]': {
                click: this.edit
            },

            'cidadeList button[action=destroy]': {
                click: this.destroy
            },
            
            'cidadeList button[action=refresh]': {
                click: this.refresh
            },

            'cidadeEdit button[action=save]': {
                click: this.save
            },

            'cidadeEdit #addUF': {
                click: this.insertUf
            }
        });
    },
    
    insertUf: function(btn, evt, opt) {
        this.openWindowForm('estadoEdit', 'Inserindo novo Estado 2');
    },
    
    save: function(button, evt, opt){
        
        var win = button.up('window'),
            form = win.down('form').getForm(),
            id = form.getRecord()? form.getRecord().get('id') : 0,
			store = this.getStore(this.storePrincipal);
		
        if (form.isValid()) {
            var record = form.getRecord(),
                values = form.getValues();
                
            if (record) {
                if(record.data['id']){
                    record.set(values);
                }
            } else {
                record = Ext.create(this.modelClass);
                record.set(values);
				store.add(record);
            }
            
            win.close();
            store.sync();            
        } else {
            Ext.ux.Msg.flash({
                msg: 'Há campos preenchidos incorretamente',
                type: 'error'
            });
        }
    }
});