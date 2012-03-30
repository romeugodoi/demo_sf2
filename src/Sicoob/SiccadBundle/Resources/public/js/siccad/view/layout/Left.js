Ext.define('Siccad.view.layout.Left', {
	extend        : 'Ext.tree.Panel',
	alias         : 'widget.layoutleft',
	region:'west',
	border: false,
	split: true,
	margins: '0 0 5 5',
	width: 275,
	minWidth: 150,
	maxWidth: 400,
	title: 'Menu',
	rootVisible: false,
	autoScroll: true,
	collapsible: true,
	animate: true,
	useArrows: true,
	itemId: 'treePanelPrincipal',
	dockedItems: [{
		xtype: 'toolbar',
		items: [{
			text: 'Expandir todos',
			iconCls: 'expand', 
			handler: function(){
				this.up('#treePanelPrincipal').expandAll();
			}
		}, {
			text: 'Contrair todos',
			iconCls: 'collapse', 
			handler: function(){
				this.up('#treePanelPrincipal').collapseAll();
			}
		}]
	}],
	listeners: {
		itemclick: function(view, record, item, index, evt, options) {
			if (record.get('leaf')) {

				var abaAberta = this.ownerCt.down('#tabCenter').items.findBy(function( aba ){
					return aba.title === record.get('text');
				});

				if(!abaAberta){
					this.ownerCt.down('#tabCenter').add({
						title: record.get('text') || 'Tela do sistema',
						closable: true,
						layout: 'fit',
						autoDestroy: true,
						items: {
							xtype: record.raw['xtypeClass']
						}
					}).show();
				}else{
					this.ownerCt.down('#tabCenter').setActiveTab(abaAberta);
				}

			}
		}
	},
	store: Ext.create('Ext.data.TreeStore', {
		proxy: {
			type: 'ajax',
			url: 'menu.php',
			noCache : false,
			actionMethods: {
				read: 'POST'
			}
		}
	})
});