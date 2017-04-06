<?php
/**
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @since         0.10.0
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/
$cakeDescription = 'BANK OR WHATEVER';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('settings.css') ?>
        <?= $this->Html->css('font-awesome.min.css') ?>
        <?= $this->Html->css('prettyPhoto.css') ?>
        <?= $this->Html->css('owl.carousel.css') ?>
        <?= $this->Html->css('style.css') ?>
        <?= $this->Html->css('custom.css') ?>
        <?= $this->Html->css('preloader.css') ?>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <body class="header02">
            <div id="loading">
                <div id="loading-center">
                    <div id="loading-center-absolute">
                        <div class="loader">Loading...</div>
                    </div>
                </div>
            </div>
            <?= $this->element('mobilemenu'); ?>
            <div id="page" class="site">
                <?= $this->element('topmenu'); ?>
                <header class="site-header">
                    <?= $this->element('logomenu'); ?>
                    <?= $this->element('mainnav'); ?>
                </header>
                <?= $this->Flash->render() ?>
                <div class="site-content">
                    <?= $this->fetch('slider') ?>
                    <div class="main" style="margin-top:3%;">
                        <div class="container">
                            <div class="row">
                                
                                <?= $this->fetch('basecontent') ?>
                                <?= $this->fetch('content2') ?>
                                <?= $this->fetch('content3') ?>
                                
                                <a class="scrollup"><i class="fa fa-angle-up"></i></a>
                            </div>
                        </div>
                    </div>
                    <?= $this->element('footer'); ?>
                </div>
            </div>
            <?= $this->Html->script('jquery.min.js'); ?>
            <?= $this->Html->script('jquery-migrate.min.js'); ?>
            <?= $this->Html->script('bootstrap.min.js'); ?>
            <?= $this->Html->script('jquery.themepunch.tools.min.js'); ?>
            <?= $this->Html->script('jquery.themepunch.revolution.min.js'); ?>
            <?= $this->Html->script('snap.min.js'); ?>
            <?= $this->Html->script('owl.carousel.min.js'); ?>
            <?= $this->Html->script('jquery.prettyPhoto.js'); ?>
            <?= $this->Html->script('jquery.prettyPhoto.init.min.js'); ?>
            <?= $this->Html->script('jQuery.headroom.min.js'); ?>
            <?= $this->Html->script('headroom.min.js'); ?>
            <?= $this->Html->script('script.js'); ?>
            <?= $this->fetch('js') ?>
        </body>
    </html>