Ext.define('Siccad.view.layout.Appview', {
	extend        : 'Ext.panel.Panel',
	alias         : 'widget.layoutappview',
	layout : 'border',
	id : 'layoutappview',
	items:[
		{
			xtype:'layoutheader'
		},

		//    {xtype:'layoutfooter'},

		{
			xtype:'layoutleft'
		},

		//    {xtype:'layoutright'},

		{
			xtype:'layoutmiddle'
		}
	]
      
});