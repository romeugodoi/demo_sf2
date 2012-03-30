Ext.define('Siccad.controller.Home', {
	extend: 'Ext.app.Controller',
	views: ['home.Home'],
	init: function() {
		console.log('controller.Home.init()');

	},
	index:function(){
		console.log('controller.Home.index()');
		this.render('home.Home');
	}
});