Ext.define('Siccad.view.estado.Combo', {
    extend: 'Ext.form.field.ComboBox',
    alias: 'widget.estadoCombo',
    itemId: 'estadoCombo',
    name : 'estados_id',
    fieldLabel: 'UF',
    store: 'Estados',
    displayField: 'uf',
    valueField: 'id',
    queryMode: 'local',
    typeAhead: true,
    forceSelection: true,
    initComponent: function() {
    	this.store = Ext.ComponentQuery.query('combo[itemId=estadoComboEnderer]')[0].store;
        this.callParent(arguments);
    }
});
