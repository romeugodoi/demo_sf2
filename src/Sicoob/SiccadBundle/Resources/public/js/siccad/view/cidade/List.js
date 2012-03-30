Ext.require(['Siccad.view.AbstractList', 'Siccad.view.estado.ComboRenderer']);

Ext.define('Siccad.view.cidade.List', {
	extend: 'Siccad.view.AbstractList', 
	alias: 'widget.cidadeList', 
	modulo: 'Cidade', 
	title: 'Lista de Cidades', 
	//selModel: {mode: 'MULTI'},
	selModel: Ext.create('Ext.selection.CheckboxModel'),
	columnLines: true,

    initComponent: function(){
        
        this.columns = [
            Ext.create('Ext.grid.RowNumberer'),
            { header: 'ID', dataIndex: 'id' },
            { 
            	header: 'UF',  
            	dataIndex: 'estados_id', 
            	flex: 1, 
            	renderer: Ext.util.Format.comboRenderer(Ext.create('Siccad.view.estado.ComboRenderer'))
            },
            { header: 'Nome', dataIndex: 'nome', flex: 1 }
        ];
        
        this.dockedItems = [{
            xtype: 'pagingtoolbar',
            store: 'Cidades',
            dock: 'bottom',
            displayInfo: true
        }];
        
        this.callParent();
    }
});