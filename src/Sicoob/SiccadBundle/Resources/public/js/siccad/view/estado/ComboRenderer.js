Ext.define('Siccad.view.estado.ComboRenderer', {
    extend: 'Ext.form.field.ComboBox',
    alias: 'widget.estadoComboRenderer',
    itemId: 'estadoComboEnderer',
    name : 'estados_id',
    ref: 'estados_id',
    fieldLabel: 'UF',
    store: 'Estados',
    displayField: 'uf',
    valueField: 'id',
    queryMode: 'local',
    typeAhead: true,
    forceSelection: true,
    initComponent: function() {
        this.callParent(arguments);
        this.store = Ext.create('Siccad.store.Estados', {sendParams: false});
        this.store.load();
    }
});
