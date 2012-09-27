Ext.define('Siccad.store.Estados', {
    extend: 'Siccad.store.AbstractStore',
    model: 'Siccad.model.Estado',
    autoLoad: false,
    remoteSort: true,
    pageSize: 10,
    sorters: [{
        property: 'nome',
        direction: 'ASC'
    }],
    proxy: {
        simpleSortMode: true,
        type: 'rest',
        url: '/app_dev.php/estados',
//        api: {
//            read: '/app_dev.php/estados',
//            create: '/siccad.php/estados/create?json=true',
//            update: '/siccad.php/estados/edit?json=true',
//            destroy: '/siccad.php/estados/delete?json=true'
//        },
//        actionMethods: {
//            read: 'GET',
//            create: 'POST',
//            update: 'PUT',
//            destroy: 'DELETE'
//        },  
        reader: {
            type: 'json',
            root: 'data',
            successProperty: 'success'
        },
        writer: {
            type: 'json',
            writeAllFields: true,
            encode: true,
            root: 'data'
        },
        listeners: {
            exception: function(proxy, response, operation){
                Ext.MessageBox.show({
                    title: 'REMOTE EXCEPTION',
                    msg: operation.getError(),
                    icon: Ext.MessageBox.ERROR,
                    buttons: Ext.Msg.OK
                });
            }
        }
    }
});