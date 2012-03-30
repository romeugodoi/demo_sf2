Ext.require(['Siccad.view.AbstractList', 'Ext.ux.grid.FiltersFeature']);

Ext.define('Siccad.view.estado.List', {
	extend: 'Siccad.view.AbstractList', 
	alias: 'widget.estadoList', 
	modulo: 'Estado', 
	title: 'Lista de Estados', 
	selModel: Ext.create('Ext.selection.CheckboxModel'),
	columnLines: true,
    features: [{
        ftype: 'filters',
        // autoReload: false,
        // encode and local configuration options defined previously for easier reuse
        encode: false, // json encode the filter query
        local: true,   // defaults to false (remote filtering)

        // Filters are most naturally placed in the column definition, but can also be
        // added here.
        filters: [
            {
                type: 'boolean',
                dataIndex: 'visible'
            }
        ]
    }],
    columns : [
        Ext.create('Ext.grid.RowNumberer'),
        {header: 'ID',  dataIndex: 'id', filterable: true, filter: {type: 'numeric'}, width: 30},
        {header: 'UF',  dataIndex: 'uf', flex: 1, filter: true},
        {header: 'Nome',  dataIndex: 'nome',  flex: 1, filter: true}
    ],

    initComponent: function(){
        
        
    //     this.columns = [
    //         Ext.create('Ext.grid.RowNumberer'),
    //         {header: 'ID',  dataIndex: 'id'},
    //         {header: 'UF',  dataIndex: 'uf', flex: 1},
    //         {header: 'Nome',  dataIndex: 'nome',  flex: 1, filter: true}
    //     ];
        
        this.callParent();
    }
});