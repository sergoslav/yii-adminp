<?php
$this->widget(
    'bootstrap.widgets.TbNavbar', array(
                                       'brand' => false,
                                       'type'  => 'inverse',
                                       'items' => array(
                                           array(
                                               'class' => 'bootstrap.widgets.TbMenu',
                                               'items' => array(
                                                   array('label' => 'Dashboard', 'url' => '#', 'active' => true),
                                                   '---',
                                                   array('label' => 'Test1', 'url' => '#'),
                                                   array('label' => 'Test2', 'items' => array(
                                                       array('label' => 'Item1', 'url' => '#')
                                                   )),
                                               )
                                           ),
//                                       ),

//        '<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'System', 'url'=>'#', 'items'=>array(
                    array('label'=>'Configurations', 'url'=>$this->createUrl('/yiiadmin/default/logout')),
                    '---',
                    array('label'=>'Separated link', 'url'=>'#'),
                )),

                array('label'=>'My Account', 'url'=>'#', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                    '---',
                    array('label'=>'Separated link', 'url'=>'#'),
                )),

            ),
        ),
    ),
    )
);

