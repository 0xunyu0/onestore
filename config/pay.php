<?php

return [
    'alipay' => [
        'app_id'         => '2016092400586583',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApliCm+WHrcEshLZ54fw2DRbCrmrGbv1CrfZ63K6qq5Cynd/6+pOINVP7FtCNeRM9dC9HYINb2HW93YiN0okOV8MfQbKmO8lWvF1trnHpdo+5FkHxoq0973U9UBNTqAMRSmdhB7nIcQxLZiAy+Mwb9EXvOxf1YCxn88duRNLoOoLyni968s7clBFGBQyjIB8GzB6u4X1eqPiLsRKvtF4BKuoV9ExTZhmwBc1vJ8f9IIaQCfHZjhfSH6J9wfWOj86ZWUwNA/GbddgW92uQjICgXkeZIvo/T2ji/9rJQspGUDundW3LtNDuXJCYb/0aUNKXjiHpRkNZqo4CB8vc+aqC3wIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEArjHS52Hh4UHC2SQJcG06aaxy4d4p+iQ/cUEXWc+tlV0uPGKR6QqvD7s+g/Hpp69HZFOAqRh/yg2DyCIdFeJkzQX6vJMtGlXRrnaXBIIb+rCRxjLRkcNajxcWgwXKGbqSay5CfYxkc4KGA2yj84L35djj0+OpD6rrrqjibkN892umgm+M8Nbqw+CWeDlxfCVTXCpZsw05tprK7f55pnalDU0gKXIi2gZeTmA3+v2izxgeeY7/l/4nYN4p/ovcKZ64K+m0LIJszqCsRxKRTpkX8fjeIgxdgxC4q29szZeK3Y3M4mgn0aja0QSoWqhbxKYj8W8nZBLhkttmQoZtgumQrwIDAQABAoIBAHUo/7Aujo1B/LqtWUfrv2D54t713QfoP19+JyV54EdYv9NPfNHgJLSQ/NAj8kKdSog4/Y099B1DD8KY5zUj6yZWgjk5SBmxZPFRw+r9U7I99h33air+2LbrEXIYf8DkUrySBZiJx7pFLLu6417SVMecJEgMlFX8YL49yuXcsH18JmSjjAhFfnKbAbRMBnuZjRyv5bRW1n+wmbHTSWl8295Zk5j+7jbCaUmJcaIrIS09XNd01jA/hecEI9GEfPV+5vvqVJulQAKhC0cmle1GAlxD0HYBobzmYD44pqrqui1NIPi+t5R7BqRLaDIz8vlYstSTKJ+AhIjJBHqmxLrZV/ECgYEA4nP8gM3hBJsAueB5xDhSL9+JHuh0pRvJQk72U71HvxE5olzZpv62dReEqwFBxTtetd1TxHj83MhXTlD0rkgoqJ8L304dWjn2HrZO02SEqdb4hOuca98g+oK4TOvLZp07FlNlvNdwyaidAVg098pWO+bE4ngaL4EqJCtCTfdbvscCgYEAxOxLWnMKZXEb0bOTRCWSbKtBIGBYhxfFkUW1a8qERTIe2gdg7+6o8wwP1ML5UjlA9JEMKUGHK73sNFLmkwLfvd2BX/VyVWxBa+uHbAyRDhWTbnPggWcGK+kXjSPXRkdawVmkz/qax9yzVhA4V5IZhYXsU1I3VnqkIZBGaMWCVtkCgYAgwbZcy2spR2KrgJUclSkOU796ARYebA6I0PNA2bhvIwa7PcMeLOontecy9VOWPChPFlzvprCtHy3B3mQGcdmvypHlE1+blZbMioKMgZXPG5GHaK2PzQ7wLciLF/CsP0I00It+7YsbIJDViPTggxxGPfNs7wKarIxz/u3waT+UMQKBgHH27oUiHtomY5sw+gFuXRdW5RH/sDw+nbA9T4laYsJJB2HW81roHA7M5DyVugTD7bucVhVqPvgpqhF+CML73tDa6IzIV6roQ9RZMr5tZ2VnRzOdDEjXftLayy57l5KsqPFNF/zlY75XE9KzAGhtvSdxIhv2cOAzidmCzbzE0XHBAoGADVp5Qr8TDP2SLY6Ox8Zk+/g7kAYSD2Du04Xc24im36g4d+XqUb5wGqxEFUhV1nQ1nJNulLeQWf61U06fqPnoz3QjbPEtRKkqyBz1xlGNTnaxaNsAmSQcl5mObRlxPIGYpsypJkn+pyCGg3yysf3ikkdONFAFPbl5CKHdKf0GcI0=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];