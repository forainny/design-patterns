<?php

spl_autoload_register(function ($className) {
    require $className . '.php';
});

$form = new Form();
$form->addElement(new TextElement('Email:'));
$form->addElement(new InputElement());
$embed = new Form();
$embed->addElement(new TextElement('Password:'));
$embed->addElement(new InputElement());
$form->addElement($embed);

$form->render();