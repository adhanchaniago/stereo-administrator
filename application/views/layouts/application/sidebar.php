<?php

$sidebar = [
  [
    "type" => "header",
    "text" => "Manage User",
  ],
  [
    "type" => "collapse",
    "text" => "Super Admin",
    "icon" => "fa-user-shield",
    "item" => [
      [
        "text" => "Add Super Admin",
        "link" => "/superadmin/new",
      ],
      [
        "text" => "List Super Admin",
        "link" => "/superadmin",
      ],
    ],
  ],
  [
    "type" => "collapse",
    "text" => "User",
    "icon" => "fa-user",
    "item" => [
      [
        "text" => "Add User",
        "link" => "/user/new",
      ],
      [
        "text" => "List User",
        "link" => "/user",
      ],
    ],
  ],
  [
    "type" => "divider",
  ],
  [
    "type" => "header",
    "text" => "Manage Data",
  ],
  [
    "type" => "collapse",
    "text" => "Division",
    "icon" => "fa-columns",
    "item" => [
      [
        "text" => "Add Division",
        "link" => "/division/new",
      ],
      [
        "text" => "List Division",
        "link" => "/division",
      ],
    ],
  ],
  [
    "type" => "collapse",
    "text" => "Departement",
    "icon" => "fa-sitemap",
    "item" => [
      [
        "text" => "Add Departement",
        "link" => "/departement/new",
      ],
      [
        "text" => "List Departement",
        "link" => "/departement",
      ],
    ],
  ],
  [
    "type" => "divider",
  ],
  [
    "type" => "header",
    "text" => "Manage Quiz",
  ],
  [
    "type" => "collapse",
    "text" => "Quiz",
    "icon" => "fa-question-circle",
    "item" => [
      [
        "text" => "Add Quiz",
        "link" => "/quiz/new",
      ],
      [
        "text" => "List Quiz",
        "link" => "/quiz",
      ],
    ],
  ],
];
