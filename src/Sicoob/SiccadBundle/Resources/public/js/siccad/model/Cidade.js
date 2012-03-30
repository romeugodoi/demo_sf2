Ext.define('Siccad.model.Cidade', {
	extend: 'Ext.data.Model', 
	fields: [
		{
			name: 'id'
		}, 
		{
			name: 'estados_id'
		}, 
		{
			name: 'nome', 
			type: 'string'
		}
	],
	associations: [
		{ 
			type: 'belongsTo',  
			model: 'Siccad.model.Estado', 
			primaryKey: 'id', 
			foreignKey: 'estados_id', 
			//autoLoad: true, 
			name: 'Estados'
		}
	]
});