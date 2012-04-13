Ext.define('Siccad.view.layout.Header', {
	extend        : 'Ext.Component',
	alias         : 'widget.layoutheader',
	id: 'header',
	region: 'north',
	html: '<div class="dv-top"><img alt="Logo Siccad" id="tit_geral" src="/bundles/sicoobsiccad/images/tit_topo_siccad.png" border="0" title="Siccad - Sistema de Gestão de Cadastros" /><img alt="Logo Sicoob" id="logo-sicoob" src="/bundles/sicoobsiccad/images/logo_sicoob.png" /></div>',
	height: 90
});