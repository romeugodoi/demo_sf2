Ext.define('Ext.ux.MyUser', {
	nome: '',
	email: '',
	_permissions: {},
	
	constructor: function(options) {
		Ext.apply(this, options || {});
	},
	
	hasPermission: function(key) {
		return key in this._permissions;
	}
});