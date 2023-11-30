<?php

return [
    'GOOGLE_ADS' => [
        /*'developerToken' => env('developerToken', ''),
        'clientCustomerId' => env('clientCustomerId', ''),*/

        'developerToken' => '8t2uJulKy5ehYPTFzM4byA',
        'clientCustomerId' => '4888767735',
        //'loginCustomerId' => '4888767735',
        /*
         * Optional. Set a friendly application name identifier.
         *
         * 'userAgent' => '',
         */

        /*
         * Optional additional AdWords API settings.
         * endpoint = "https://adwords.google.com/"
         *
         * 'isPartialFailure' => false,
         */

        /*
         * Optional setting for utility usage tracking in the user agent in requests.
         * Defaults to true.
         *
         * 'includeUtilitiesInUserAgent' => true,
         */
    ],

    'DFP' => [
        'networkCode' => '',
        'applicationName' => '',
    ],

    'ADWORDS_REPORTING' => [
        /*
         * Optional reporting settings.
         *
         * 'isSkipReportHeader' => false,
         * 'isSkipColumnHeader' => false,
         * 'isSkipReportSummary' => false,
         * 'isUseRawEnumValues' => false,
         */
    ],

    'OAUTH2' => [
        /*
         * Required OAuth2 credentials. Uncomment and fill in the values for the
         * appropriate flow based on your use case. See the README for guidance:
         * https://github.com/googleads/googleads-php-lib/blob/master/README.md#getting-started
         */

        /*
         * For installed application or web application flow.
         * 'clientId' => '',
         * 'clientSecret' => '',
         * 'refreshToken' => '',
         */
         'clientId' => '1057848049213-gi8vfpn7r22jfi7a3dvlagjopk1fdhvl.apps.googleusercontent.com',
         'clientSecret' => 'oXCV-scDcqZe5WAApgz0jo3K',
         'refreshToken' => '1/x_XjPdd0fztJTvAosIOMuJA4ixoHukT3o7qRy2UfO64',
         /*'clientId' => env('clientId', ''),
         'clientSecret' =>env('clientSecret', ''),
         'refreshToken' => env('refreshToken', ''),*/
        /*
         * For service account flow.
         * 'jsonKeyFilePath' => 'INSERT_ABSOLUTE_PATH_TO_OAUTH2_JSON_KEY_FILE_HERE'
         * 'scopes' => 'https://www.googleapis.com/auth/adwords',
         */
    ],

    'SOAP' => [
        /*
         * Optional SOAP settings. See SoapSettingsBuilder.php for more information.
         * 'compressionLevel' => <COMPRESSION_LEVEL>,
         * 'wsdlCache' => <WSDL_CACHE>,
         */
    ],

    'PROXY' => [
        /*
         * Optional proxy settings to be used by SOAP requests.
         * 'host' => '<HOST>',
         * 'port' => <PORT>,
         * 'user' => '<USER>',
         * 'password' => '<PASSWORD>',
         */
    ],

    'LOGGING' => [
        /*
         * Optional logging settings.
         * 'soapLogFilePath' => 'path/to/your/soap.log',
         * 'soapLogLevel' => 'INFO',
         * 'reportDownloaderLogFilePath' => 'path/to/your/report-downloader.log',
         * 'reportDownloaderLogLevel' => 'INFO',
         * 'batchJobsUtilLogFilePath' => 'path/to/your/bjutil.log',
         * 'batchJobsUtilLogLevel' => 'INFO',
         */
    ],
];
