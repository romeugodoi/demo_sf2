Ext.define('Siccad.view.AbstractList',{
    extend: 'Ext.grid.Panel',
    alias: 'widget.abstractList',
	modulo: '',
	store: '',
    title: 'Listagem',
    columnLines: true,
    frame: true,
    
    initComponent: function(){
		
        this.tbar = [
            {
                text: 'Incluir novo registro',
                action: 'insert',
                iconCls: 'add',
                itemId: 'insert'
				//hidden: !MyUser.hasPermission('siccad_' + this.modulo.toLowerCase() + '_criar')
            },
            {
                text: 'Editar',
                action: 'edit',
                iconCls: 'edit',
                itemId: 'edit',
                disabled: true
				//hidden: !MyUser.hasPermission('siccad_' + this.modulo.toLowerCase() + '_editar')
            },
            {
                text: 'Excluir',
                action: 'destroy',
                iconCls: 'delete',
                itemId: 'delete',
                disabled: true 
				//hidden: !MyUser.hasPermission('siccad_' + this.modulo.toLowerCase() + '_excluir')
            },
            {
                text: 'Recarregar dados',
                action: 'refresh',
                iconCls: 'refresh',
                itemId: 'refresh'
            }
        ];
        this.store = this.modulo+'s';
        
        this.dockedItems = [{
            xtype: 'pagingtoolbar',
            store: this.store,
            dock: 'bottom',
            displayInfo: true,
            plugins: Ext.create('Ext.ux.ProgressBarPager', {})
        }];
		
        this.callParent();
        this.getSelectionModel().on('selectionchange', this.onSelectChange, this);
    },
        
    onRender: function(){
        this.store.load();
        this.callParent(arguments);
    },
    
    onSelectChange: function(selModel, selections){
        this.down('#delete').setDisabled(selections.length === 0);
        this.down('#edit').setDisabled(selections.length !== 1);
    }   
});
