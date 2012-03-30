Ext.define('Siccad.model.Estado', {
	extend: 'Ext.data.Model', 
	fields: [
	{
		name: 'id'
	}, 
	{
		name: 'paises_id'
	}, 
	{
		name: 'nome', 
		type: 'string'
	}, 
	{
		name: 'uf', 
        type: 'string'
	}], 
	hasMany: [
        'Cidade',
        { model: 'Siccad.model.Cidade', name: 'Cidades' }
    ]
});