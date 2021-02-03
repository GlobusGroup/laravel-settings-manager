<?php

return [
  "route" => "/admin/settings",
  "middleware" => ['web','Admin'],
  "view" => [
    "extends" => "master"
  ],
  "available_settings" => [
    [
      'key' => 'example_setting',
      'label' => 'Example Setting',
      'help' => 'An example setting',
      'type' => 'string'
    ],
    [
      'key' => 'example_colour',
      'label' => 'Example Colour Setting',
      'help' => 'An example setting showing use of colour type',
      'type' => 'colour'
    ],
    [
      'key' => 'example_bool',
      'label' => 'Example Boolean Setting',
      'help' => 'An example setting showing use of bool type',
      'type' => 'bool'
    ],
    [
      'key' => 'example_int',
      'label' => 'Example Integer Setting',
      'help' => 'An example setting showing use of int type',
      'type' => 'int'
    ],
    [
      'key' => 'example_text',
      'label' => 'Example Long Text Setting',
      'help' => 'An example setting showing use of text type',
      'type' => 'text'
    ]
  ]
];