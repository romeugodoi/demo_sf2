Ext.define('Siccad.store.Cidades', {
    extend: 'Ext.data.Store',
    model: 'Siccad.model.Cidade',
    autoLoad: false,
    remoteSort: false,
    pageSize: 15,
    proxy: {
        simpleSortMode: true,
        type: 'ajax',
        api: {
            read: '../siccad.php/cidades/fetchAll?json=true',
            create: '../siccad.php/cidades/create?json=true',
            update: '../siccad.php/cidades/edit?json=true',
            destroy: '../siccad.php/cidades/delete?json=true'
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
            successProperty: 'success'
        },
        writer: {
            type: 'json',
            writeAllFields: true,
            encode: true,
            root: 'data'
        },
        extraParams: { 
            start : '0',   
            limit : this.pageSize,  
            sort : 'nome',    
            dir : 'ASC', 
            total:'total' 
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