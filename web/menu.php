<?php
/**
 * @author Romeu Godoi <romeu.godoi@gmail.com>
 * @todo
 *	Checar permissões por módulo para montagem dinâmica do menu
 */
$menu = "{ 
            children: [
                    {
                        text:'Geral',
                        expanded: true,
                        children:[
                            {
                                text:'Estado',
                                leaf: true,
                                xtypeClass: 'estadoList'
                            }
                        ]
                    }
                ]
            }";
echo $menu;
