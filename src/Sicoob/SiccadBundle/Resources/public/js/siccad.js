Ext.Loader.setConfig({
    enabled: true, 
	paths: {
		'Ext': 'ext-4.0.7/src',
		'Siccad': 'siccad'
	}
});

Ext.require([
    'Ext.tree.*',
    'Ext.data.*',
    'Ext.tip.*', 
	'Ext.selection.CheckboxModel', // Sem esta linha dá erro no Firefox 9
	'Ext.Window', 'Ext.layout.container.Fit', 'Ext.fx.target.Sprite'
]);

Ext.application({
    name: 'Siccad',         //app namespace (from Siccad)
    appFolder: 'siccad',
    models: [],
    controllers: ['Viewport', 'Estado', 'Cidade'],
    autoCreateViewport: true,
	paths              : {
		'Ext.ux': 'siccad/ux'
	},
	requires           : ['Ext.ux.Initialization'],
	enableRouter       : true,
	routes: {
		'/'           : 'viewport#index',
		//'validate'    : 'viewport#validate',
		'login'       : 'authentication#index',
		'home'        : 'home#index'
	},
    
    launch: function() {
		Ext.QuickTips.init();
		//Siccad.app = this;

		var hideMask = function () {
			Ext.get('loading').remove();
			Ext.fly('loading-mask').animate({
				opacity : 0,
				remove  : true
			});
		};
		Ext.defer(hideMask, 250);
    }
});