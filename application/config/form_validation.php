<?php
$config = [
    'add_article_rules' => [
                                [
                                    "field" => "title",
                                    "label" => "Article Title",
                                    "rules" => 'regex_match[/^[a-zA-Z ,.]+$/]',
                                ],
                            [
                                "field" => "body",
                                "label" => "Aricle Body",
                                "rules" => 'regex_match[/^[a-zA-Z ,._]+$/]',
                            ]
                
                    ],
    'admin_login' =>    [
                            [
                                "field" => "username",
                                "label" => "User Name",
                                "rules" => 'required|alpha|trim'
                            ],
                            [
                                "field" => "password",
                                "label" => "Password",
                                "rules" => 'required'
                            ]
                
                    ]

            
];


?>