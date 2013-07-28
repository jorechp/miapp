<?php
$main = new JamVertPanel();
$topbar = new JamHorzPanel();
$bottombar = new JamHorzPanel();
$bodybar = new JamHorzPanel();
$panel1 = new JamVertPanel();
$panel2 = new JamVertPanel();
$panel3 = new JamVertPanel();

// basic layout

$main->add($topbar);
$main->add($bodybar);
$main->add($bottombar);

$bodybar->add($panel1);
$bodybar->add($panel2);
$bodybar->add($panel3);

// stylish

$main->setAutoMargin();
$main->setWidth('90%');

$topbar->setWidth('auto');
$topbar->addHtmlOption('style','background-color: darkred; color: white;');
$topbar->setBorderNone();
$topbar->addChildHtmlOptions(array(
    'style'=>'margin-right: 20px;padding: 3px;border: none;'));
$topbar->add("item 1");
$topbar->add("item 2");
$topbar->add("item 3");
$topbar->add("item 4");

$bodybar->addHtmlOption('style','background-color: #fec;');
$bodybar->setWidth('auto');

$panel1->addHtmlOption('style','background-color: #eee');
$panel1->setWidth('150px');
$panel1->setHeight('200px');
$panel1->add("panel 1 text content");

$panel2->setWidth('auto');
$panel2->add('content for panel 2');
$panel2->setHeight('200px');

$panel3->setWidth('auto');
$panel3->add('content for panel 3');
$panel3->setHeight('200px');

$bottombar->add('this is the bottom bar, you can insert more panels here');
$bottombar->addHtmlOption('style','background-color: #eee;');

$main->render();