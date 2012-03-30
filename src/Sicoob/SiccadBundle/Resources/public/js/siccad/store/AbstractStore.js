Ext.define('Siccad.store.AbstractStore', {
    extend: 'Ext.data.Store',
    model: '',
    autoLoad: false,
    remoteSort: true,
    pageSize: 15, 
    sendParams: true, // Não envia os parametros de limit, start e page
    
    proxy: {
        simpleSortMode: true,
        type: 'ajax',
        api: { 
        	read: Ext.emptyFn,
            create: Ext.emptyFn,
            update: Ext.emptyFn,
            destroy: Ext.emptyFn 
        },
        actionMethods: {
            read: 'POST',
            create: 'POST',
            update: 'POST',
            destroy: 'POST'
        },  
        reader: {
            type: 'json',
            root: 'data',
            successProperty: 'success',
            totalProperty: 'total'
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
                    msg: operation.getError() + response.responseText,
                    icon: Ext.MessageBox.ERROR,
                    buttons: Ext.Msg.OK
                });
            }
        }
    },
    listeners: {
        
        write: function(proxy, operation){
            
            var obj = Ext.decode(operation.response.responseText);
            
            if(obj.success){
                Ext.ux.Msg.flash({
                    msg: obj.message,
                    type: 'success'
                });
            }else{
                Ext.ux.Msg.flash({
                    msg: obj.message,
                    type: 'error'
                });
            }
        }
    }
});
/**
 * Override que irá retirar os parâmetros limit, start e page da requisição do Store se sendParams = false 
 */
Ext.override(Ext.data.Store,{
    load: function(options) {
        var me = this;

        options = options || {};

        if (Ext.isFunction(options)) {
            options = {
                callback: options
            };
        }

        Ext.applyIf(options, {
            groupers: me.groupers.items,
            page: me.currentPage,
            start: (me.currentPage - 1) * me.pageSize,
            limit: me.pageSize,
            addRecords: false
        });
        
        // Verificando se não é para enviar os paramentros
        if(me.sendParams === false){
            // Removendo o limit, start e page
            delete(options['start']);
            delete(options['limit']);
            delete(options['page']);
        }

        return me.callParent([options]);
    } 
});		
