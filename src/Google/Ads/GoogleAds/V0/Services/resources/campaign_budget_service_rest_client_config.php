<?php

return [
    'interfaces' => [
        'google.ads.googleads.v0.services.CampaignBudgetService' => [
            'GetCampaignBudget' => [
                'method' => 'get',
                'uriTemplate' => '/v0/{resource_name=customers/*/campaignBudgets/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateCampaignBudgets' => [
                'method' => 'post',
                'uriTemplate' => '/v0/customers/{customer_id=*}/campaignBudgets:mutate',
                'body' => '*',
                'placeholders' => [
                    'customer_id' => [
                        'getters' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
