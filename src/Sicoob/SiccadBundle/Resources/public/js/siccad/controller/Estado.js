Ext.require('Siccad.controller.AbstractController');

Ext.define('Siccad.controller.Estado', {
	extend: 'Siccad.controller.AbstractController',
    stores: ['Estados'],
	storePrincipal: 'Estados',
    models: ['Estado'], 
    editTitle: 'Edição de Estado',
    insertTitle: 'Cadastro de Estado',
    modelClass: 'Siccad.model.Estado',
	editWidget: 'estadoEdit',
    gridWidget: 'estadoList',
    
    views: [
		'estado.List',
		'estado.Edit'
    ],
    
    refs: [
		{
			ref: 'formEdit', 
			selector: 'estadoEdit'
		},
		{
			ref: 'gridList', 
			selector: 'estadoList'
		}
    ],

    init: function() {
        this.control({
            'estadoList': {
                itemdblclick: this.edit
            },

            'estadoList button[action=insert]': {
                click: this.insert
            },
            
            'estadoList button[action=edit]': {
                click: this.edit
            },

            'estadoList button[action=destroy]': {
                click: this.destroy
            },
            
            'estadoList button[action=refresh]': {
                click: this.refresh
            },

            'estadoEdit button[action=save]': {
                click: this.save
            }
        });
        
        this.getEstadosStore().addListener('write', this.onStoreWrited, this);
    },
    
    onStoreWrited: function () {
	    /**
	     * Bloco criado para atualizar combos instanciados que utilizam 
	     * este Store. - Padrão de itemId dos combos nome_do_model + Combo. Ex: 'pessoaCombo'
	     * 
	     * @todo Aplicar melhorias, com Observable ou events.
	     */
	    var combo = Ext.ComponentQuery.query('combo[itemId=estadoCombo]')[0];
	    
	    if (combo !== undefined) {
	    	var rec = this.getStore('Estados').last(); console.dir(rec);
	    	
	    	if (combo.store.findRecord('id', rec.id) === null) {
	    		combo.store.add(rec);
	    		combo.setValue(rec.data.id);
	    	}
	    }
	    /**************************************************************/    	
    }
});
