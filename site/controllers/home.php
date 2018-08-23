<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Bitte geben sie eine gültige E-Mail Adresse an.',
        ],
        'name' => [
            'rules' => ['required'],
            'message' => 'Bitte geben sie einen Namen an.',
        ],
        'company' => [
            'rules' => ['required'],
            'message' => 'Bitte geben sie den Namen ihrer Firma an.',
        ],
        'phone' => [
            'rules' => ['required'],
            'message' => 'Bitte geben sie eine Telefonnummer an.',
        ],
        'position' => [
            'rules' => ['required'],
            'message' => 'Bitte beschreiben sie ihr Gesuch mit wenigen Worten.',
        ],
        'privacy' => [
            'rules' => ['required'],
            'message' => 'Bitte bestätigen sie, dass sie mit den Datenschutzbestimmungen einverstanden sind.',
        ]
    ]);

    if (r::is('POST')) {
        $form->emailAction([
            'to' => 'heers@prenzlmedia.de',
            'from' => 'info@prenzlmedia.de',
            'subject' => 'Neue Anfrage',
        ]);
    }

    return compact('form');
};