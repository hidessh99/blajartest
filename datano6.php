 $data = [
            'authId' => $authId3,
            'stage' => 'VALIDATE',
            'callbacks' => [
                [
                    'type' => 'MetadataCallback',
                    'output' => [
                        [
                            'name' => 'data',
                            'value' => [
                                'stage' => 'VALIDATE'
                            ]
                        ]
                    ],
                    '_id' => 7
                ],
                [
                    'type' => 'ConfirmationCallback',
                    'output' => [
                        [
                            'name' => 'prompt',
                            'value' => 'Validate'
                        ],
                        [
                            'name' => 'messageType',
                            'value' => 0
                        ],
                        [
                            'name' => 'options',
                            'value' => [
                                '0 = NO',
                                '1 = YES'
                            ]
                        ],
                        [
                            'name' => 'optionType',
                            'value' => -1
                        ],
                        [
                            'name' => 'defaultOption',
                            'value' => 0
                        ]
                    ],
                    'input' => [
                        [
                            'name' => 'IDToken2',
                            'value' => 1
                        ]
                    ],
                    '_id' => 8
                ],
                [
                    'type' => 'TextOutputCallback',
                    'output' => [
                        [
                            'name' => 'message',
                            'value' => $subid
                        ],
                        [
                            'name' => 'messageType',
                            'value' => '0'
                        ]
                    ],
                    '_id' => 9
                ]
            ]
        ];
