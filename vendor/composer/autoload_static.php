<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f564c5d781bbd86ba3fd12450bf69bd
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WhichBrowser\\' => 13,
            'WP_Statistics\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WhichBrowser\\' => 
        array (
            0 => __DIR__ . '/..' . '/whichbrowser/parser/src',
            1 => __DIR__ . '/..' . '/whichbrowser/parser/tests/src',
        ),
        'WP_Statistics\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WP_Statistics\\Abstracts\\BaseModel' => __DIR__ . '/../..' . '/src/Abstracts/BaseModel.php',
        'WP_Statistics\\Abstracts\\BasePage' => __DIR__ . '/../..' . '/src/Abstracts/BasePage.php',
        'WP_Statistics\\Abstracts\\BaseTabView' => __DIR__ . '/../..' . '/src/Abstracts/BaseTabView.php',
        'WP_Statistics\\Abstracts\\BaseView' => __DIR__ . '/../..' . '/src/Abstracts/BaseView.php',
        'WP_Statistics\\Abstracts\\MultiViewPage' => __DIR__ . '/../..' . '/src/Abstracts/MultiViewPage.php',
        'WP_Statistics\\Async\\BackgroundProcessFactory' => __DIR__ . '/../..' . '/src/Async/BackgroundProcessFactory.php',
        'WP_Statistics\\Async\\CalculatePostWordsCount' => __DIR__ . '/../..' . '/src/Async/CalculatePostWordsCount.php',
        'WP_Statistics\\Async\\GeoIPDatabaseDownloadProcess' => __DIR__ . '/../..' . '/src/Async/GeoIPDatabaseDownloadProcess.php',
        'WP_Statistics\\Async\\IncompleteGeoIpUpdater' => __DIR__ . '/../..' . '/src/Async/IncompleteGeoIpUpdater.php',
        'WP_Statistics\\Components\\AssetNameObfuscator' => __DIR__ . '/../..' . '/src/Components/AssetNameObfuscator.php',
        'WP_Statistics\\Components\\Assets' => __DIR__ . '/../..' . '/src/Components/Assets.php',
        'WP_Statistics\\Components\\DateRange' => __DIR__ . '/../..' . '/src/Components/DateRange.php',
        'WP_Statistics\\Components\\Singleton' => __DIR__ . '/../..' . '/src/Components/Singleton.php',
        'WP_Statistics\\Components\\View' => __DIR__ . '/../..' . '/src/Components/View.php',
        'WP_Statistics\\Dependencies\\Composer\\CaBundle\\CaBundle' => __DIR__ . '/../..' . '/src/Dependencies/Composer/CaBundle/CaBundle.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Database\\Reader' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Database/Reader.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Exception\\AddressNotFoundException' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Exception/AddressNotFoundException.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Exception\\AuthenticationException' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Exception/AuthenticationException.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Exception\\GeoIp2Exception' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Exception/GeoIp2Exception.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Exception\\HttpException' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Exception/HttpException.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Exception\\InvalidRequestException' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Exception/InvalidRequestException.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Exception\\OutOfQueriesException' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Exception/OutOfQueriesException.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Model\\AbstractModel' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Model/AbstractModel.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Model\\AnonymousIp' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Model/AnonymousIp.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Model\\Asn' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Model/Asn.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Model\\City' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Model/City.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Model\\ConnectionType' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Model/ConnectionType.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Model\\Country' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Model/Country.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Model\\Domain' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Model/Domain.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Model\\Enterprise' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Model/Enterprise.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Model\\Insights' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Model/Insights.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Model\\Isp' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Model/Isp.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\ProviderInterface' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/ProviderInterface.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Record\\AbstractPlaceRecord' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Record/AbstractPlaceRecord.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Record\\AbstractRecord' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Record/AbstractRecord.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Record\\City' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Record/City.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Record\\Continent' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Record/Continent.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Record\\Country' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Record/Country.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Record\\Location' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Record/Location.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Record\\MaxMind' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Record/MaxMind.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Record\\Postal' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Record/Postal.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Record\\RepresentedCountry' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Record/RepresentedCountry.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Record\\Subdivision' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Record/Subdivision.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Record\\Traits' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Record/Traits.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\Util' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/Util.php',
        'WP_Statistics\\Dependencies\\GeoIp2\\WebService\\Client' => __DIR__ . '/../..' . '/src/Dependencies/GeoIp2/WebService/Client.php',
        'WP_Statistics\\Dependencies\\IPTools\\IP' => __DIR__ . '/../..' . '/src/Dependencies/IPTools/IP.php',
        'WP_Statistics\\Dependencies\\IPTools\\Network' => __DIR__ . '/../..' . '/src/Dependencies/IPTools/Network.php',
        'WP_Statistics\\Dependencies\\IPTools\\PropertyTrait' => __DIR__ . '/../..' . '/src/Dependencies/IPTools/PropertyTrait.php',
        'WP_Statistics\\Dependencies\\IPTools\\Range' => __DIR__ . '/../..' . '/src/Dependencies/IPTools/Range.php',
        'WP_Statistics\\Dependencies\\Jaybizzle\\CrawlerDetect\\CrawlerDetect' => __DIR__ . '/../..' . '/src/Dependencies/Jaybizzle/CrawlerDetect/CrawlerDetect.php',
        'WP_Statistics\\Dependencies\\Jaybizzle\\CrawlerDetect\\Fixtures\\AbstractProvider' => __DIR__ . '/../..' . '/src/Dependencies/Jaybizzle/CrawlerDetect/Fixtures/AbstractProvider.php',
        'WP_Statistics\\Dependencies\\Jaybizzle\\CrawlerDetect\\Fixtures\\Crawlers' => __DIR__ . '/../..' . '/src/Dependencies/Jaybizzle/CrawlerDetect/Fixtures/Crawlers.php',
        'WP_Statistics\\Dependencies\\Jaybizzle\\CrawlerDetect\\Fixtures\\Exclusions' => __DIR__ . '/../..' . '/src/Dependencies/Jaybizzle/CrawlerDetect/Fixtures/Exclusions.php',
        'WP_Statistics\\Dependencies\\Jaybizzle\\CrawlerDetect\\Fixtures\\Headers' => __DIR__ . '/../..' . '/src/Dependencies/Jaybizzle/CrawlerDetect/Fixtures/Headers.php',
        'WP_Statistics\\Dependencies\\MaxMind\\Db\\Reader' => __DIR__ . '/../..' . '/src/Dependencies/MaxMind/Db/Reader.php',
        'WP_Statistics\\Dependencies\\MaxMind\\Db\\Reader\\Decoder' => __DIR__ . '/../..' . '/src/Dependencies/MaxMind/Db/Reader/Decoder.php',
        'WP_Statistics\\Dependencies\\MaxMind\\Db\\Reader\\InvalidDatabaseException' => __DIR__ . '/../..' . '/src/Dependencies/MaxMind/Db/Reader/InvalidDatabaseException.php',
        'WP_Statistics\\Dependencies\\MaxMind\\Db\\Reader\\Metadata' => __DIR__ . '/../..' . '/src/Dependencies/MaxMind/Db/Reader/Metadata.php',
        'WP_Statistics\\Dependencies\\MaxMind\\Db\\Reader\\Util' => __DIR__ . '/../..' . '/src/Dependencies/MaxMind/Db/Reader/Util.php',
        'WP_Statistics\\Dependencies\\MaxMind\\WebService\\Client' => __DIR__ . '/../..' . '/src/Dependencies/MaxMind/WebService/Client.php',
        'WP_Statistics\\Dependencies\\MaxMind\\WebService\\Http\\CurlRequest' => __DIR__ . '/../..' . '/src/Dependencies/MaxMind/WebService/Http/CurlRequest.php',
        'WP_Statistics\\Dependencies\\MaxMind\\WebService\\Http\\Request' => __DIR__ . '/../..' . '/src/Dependencies/MaxMind/WebService/Http/Request.php',
        'WP_Statistics\\Dependencies\\MaxMind\\WebService\\Http\\RequestFactory' => __DIR__ . '/../..' . '/src/Dependencies/MaxMind/WebService/Http/RequestFactory.php',
        'WP_Statistics\\Dependencies\\Psr\\Cache\\CacheException' => __DIR__ . '/../..' . '/src/Dependencies/Psr/Cache/CacheException.php',
        'WP_Statistics\\Dependencies\\Psr\\Cache\\CacheItemInterface' => __DIR__ . '/../..' . '/src/Dependencies/Psr/Cache/CacheItemInterface.php',
        'WP_Statistics\\Dependencies\\Psr\\Cache\\CacheItemPoolInterface' => __DIR__ . '/../..' . '/src/Dependencies/Psr/Cache/CacheItemPoolInterface.php',
        'WP_Statistics\\Dependencies\\Psr\\Cache\\InvalidArgumentException' => __DIR__ . '/../..' . '/src/Dependencies/Psr/Cache/InvalidArgumentException.php',
        'WP_Statistics\\Exception\\LogException' => __DIR__ . '/../..' . '/src/Exception/LogException.php',
        'WP_Statistics\\Exception\\SystemErrorException' => __DIR__ . '/../..' . '/src/Exception/SystemErrorException.php',
        'WP_Statistics\\Models\\AuthorsModel' => __DIR__ . '/../..' . '/src/Models/AuthorsModel.php',
        'WP_Statistics\\Models\\HistoricalModel' => __DIR__ . '/../..' . '/src/Models/HistoricalModel.php',
        'WP_Statistics\\Models\\OnlineModel' => __DIR__ . '/../..' . '/src/Models/OnlineModel.php',
        'WP_Statistics\\Models\\PostsModel' => __DIR__ . '/../..' . '/src/Models/PostsModel.php',
        'WP_Statistics\\Models\\TaxonomyModel' => __DIR__ . '/../..' . '/src/Models/TaxonomyModel.php',
        'WP_Statistics\\Models\\ViewsModel' => __DIR__ . '/../..' . '/src/Models/ViewsModel.php',
        'WP_Statistics\\Models\\VisitorsModel' => __DIR__ . '/../..' . '/src/Models/VisitorsModel.php',
        'WP_Statistics\\Service\\Admin\\AddOnDecorator' => __DIR__ . '/../..' . '/src/Service/Admin/AddOnDecorator.php',
        'WP_Statistics\\Service\\Admin\\AddOnsFactory' => __DIR__ . '/../..' . '/src/Service/Admin/AddOnsFactory.php',
        'WP_Statistics\\Service\\Admin\\AdminManager' => __DIR__ . '/../..' . '/src/Service/Admin/AdminManager.php',
        'WP_Statistics\\Service\\Admin\\AuthorAnalytics\\AuthorAnalyticsDataProvider' => __DIR__ . '/../..' . '/src/Service/Admin/AuthorAnalytics/AuthorAnalyticsDataProvider.php',
        'WP_Statistics\\Service\\Admin\\AuthorAnalytics\\AuthorAnalyticsManager' => __DIR__ . '/../..' . '/src/Service/Admin/AuthorAnalytics/AuthorAnalyticsManager.php',
        'WP_Statistics\\Service\\Admin\\AuthorAnalytics\\AuthorAnalyticsPage' => __DIR__ . '/../..' . '/src/Service/Admin/AuthorAnalytics/AuthorAnalyticsPage.php',
        'WP_Statistics\\Service\\Admin\\AuthorAnalytics\\Views\\AuthorsView' => __DIR__ . '/../..' . '/src/Service/Admin/AuthorAnalytics/Views/AuthorsView.php',
        'WP_Statistics\\Service\\Admin\\AuthorAnalytics\\Views\\PerformanceView' => __DIR__ . '/../..' . '/src/Service/Admin/AuthorAnalytics/Views/PerformanceView.php',
        'WP_Statistics\\Service\\Admin\\AuthorAnalytics\\Views\\SingleAuthorView' => __DIR__ . '/../..' . '/src/Service/Admin/AuthorAnalytics/Views/SingleAuthorView.php',
        'WP_Statistics\\Service\\Admin\\CategoryAnalytics\\CategoryAnalyticsDataProvider' => __DIR__ . '/../..' . '/src/Service/Admin/CategoryAnalytics/CategoryAnalyticsDataProvider.php',
        'WP_Statistics\\Service\\Admin\\CategoryAnalytics\\CategoryAnalyticsManager' => __DIR__ . '/../..' . '/src/Service/Admin/CategoryAnalytics/CategoryAnalyticsManager.php',
        'WP_Statistics\\Service\\Admin\\CategoryAnalytics\\CategoryAnalyticsPage' => __DIR__ . '/../..' . '/src/Service/Admin/CategoryAnalytics/CategoryAnalyticsPage.php',
        'WP_Statistics\\Service\\Admin\\CategoryAnalytics\\Views\\CategoryReportView' => __DIR__ . '/../..' . '/src/Service/Admin/CategoryAnalytics/Views/CategoryReportView.php',
        'WP_Statistics\\Service\\Admin\\CategoryAnalytics\\Views\\SingleView' => __DIR__ . '/../..' . '/src/Service/Admin/CategoryAnalytics/Views/SingleView.php',
        'WP_Statistics\\Service\\Admin\\CategoryAnalytics\\Views\\TabsView' => __DIR__ . '/../..' . '/src/Service/Admin/CategoryAnalytics/Views/TabsView.php',
        'WP_Statistics\\Service\\Admin\\ContentAnalytics\\ContentAnalyticsDataProvider' => __DIR__ . '/../..' . '/src/Service/Admin/ContentAnalytics/ContentAnalyticsDataProvider.php',
        'WP_Statistics\\Service\\Admin\\ContentAnalytics\\ContentAnalyticsManager' => __DIR__ . '/../..' . '/src/Service/Admin/ContentAnalytics/ContentAnalyticsManager.php',
        'WP_Statistics\\Service\\Admin\\ContentAnalytics\\ContentAnalyticsPage' => __DIR__ . '/../..' . '/src/Service/Admin/ContentAnalytics/ContentAnalyticsPage.php',
        'WP_Statistics\\Service\\Admin\\ContentAnalytics\\Views\\SingleView' => __DIR__ . '/../..' . '/src/Service/Admin/ContentAnalytics/Views/SingleView.php',
        'WP_Statistics\\Service\\Admin\\ContentAnalytics\\Views\\TabsView' => __DIR__ . '/../..' . '/src/Service/Admin/ContentAnalytics/Views/TabsView.php',
        'WP_Statistics\\Service\\Admin\\Devices\\DevicesDataProvider' => __DIR__ . '/../..' . '/src/Service/Admin/Devices/DevicesDataProvider.php',
        'WP_Statistics\\Service\\Admin\\Devices\\DevicesManager' => __DIR__ . '/../..' . '/src/Service/Admin/Devices/DevicesManager.php',
        'WP_Statistics\\Service\\Admin\\Devices\\DevicesPage' => __DIR__ . '/../..' . '/src/Service/Admin/Devices/DevicesPage.php',
        'WP_Statistics\\Service\\Admin\\Devices\\Views\\SingleBrowserView' => __DIR__ . '/../..' . '/src/Service/Admin/Devices/Views/SingleBrowserView.php',
        'WP_Statistics\\Service\\Admin\\Devices\\Views\\TabsView' => __DIR__ . '/../..' . '/src/Service/Admin/Devices/Views/TabsView.php',
        'WP_Statistics\\Service\\Admin\\Geographic\\GeographicDataProvider' => __DIR__ . '/../..' . '/src/Service/Admin/Geographic/GeographicDataProvider.php',
        'WP_Statistics\\Service\\Admin\\Geographic\\GeographicManager' => __DIR__ . '/../..' . '/src/Service/Admin/Geographic/GeographicManager.php',
        'WP_Statistics\\Service\\Admin\\Geographic\\GeographicPage' => __DIR__ . '/../..' . '/src/Service/Admin/Geographic/GeographicPage.php',
        'WP_Statistics\\Service\\Admin\\Geographic\\Views\\SingleCountryView' => __DIR__ . '/../..' . '/src/Service/Admin/Geographic/Views/SingleCountryView.php',
        'WP_Statistics\\Service\\Admin\\Geographic\\Views\\TabsView' => __DIR__ . '/../..' . '/src/Service/Admin/Geographic/Views/TabsView.php',
        'WP_Statistics\\Service\\Admin\\MiniChart\\MiniChartHelper' => __DIR__ . '/../..' . '/src/Service/Admin/MiniChart/MiniChartHelper.php',
        'WP_Statistics\\Service\\Admin\\NoticeHandler\\GeneralNotices' => __DIR__ . '/../..' . '/src/Service/Admin/NoticeHandler/GeneralNotices.php',
        'WP_Statistics\\Service\\Admin\\NoticeHandler\\Notice' => __DIR__ . '/../..' . '/src/Service/Admin/NoticeHandler/Notice.php',
        'WP_Statistics\\Service\\Admin\\PageInsights\\PageInsightsDataProvider' => __DIR__ . '/../..' . '/src/Service/Admin/PageInsights/PageInsightsDataProvider.php',
        'WP_Statistics\\Service\\Admin\\PageInsights\\PageInsightsManager' => __DIR__ . '/../..' . '/src/Service/Admin/PageInsights/PageInsightsManager.php',
        'WP_Statistics\\Service\\Admin\\PageInsights\\PageInsightsPage' => __DIR__ . '/../..' . '/src/Service/Admin/PageInsights/PageInsightsPage.php',
        'WP_Statistics\\Service\\Admin\\PageInsights\\Views\\TabsView' => __DIR__ . '/../..' . '/src/Service/Admin/PageInsights/Views/TabsView.php',
        'WP_Statistics\\Service\\Admin\\Posts\\HitColumnHandler' => __DIR__ . '/../..' . '/src/Service/Admin/Posts/HitColumnHandler.php',
        'WP_Statistics\\Service\\Admin\\Posts\\PostSummaryDataProvider' => __DIR__ . '/../..' . '/src/Service/Admin/Posts/PostSummaryDataProvider.php',
        'WP_Statistics\\Service\\Admin\\Posts\\PostsManager' => __DIR__ . '/../..' . '/src/Service/Admin/Posts/PostsManager.php',
        'WP_Statistics\\Service\\Admin\\Posts\\WordCountService' => __DIR__ . '/../..' . '/src/Service/Admin/Posts/WordCountService.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Audits\\Abstracts\\BaseAudit' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Audits/Abstracts/BaseAudit.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Audits\\Abstracts\\ResolvableAudit' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Audits/Abstracts/ResolvableAudit.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Audits\\AnonymizeIpAddress' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Audits/AnonymizeIpAddress.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Audits\\HashIpAddress' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Audits/HashIpAddress.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Audits\\RecordUserPageVisits' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Audits/RecordUserPageVisits.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Audits\\StoreUserAgentString' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Audits/StoreUserAgentString.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Audits\\StoredUserAgentStringData' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Audits/StoredUserAgentStringData.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Audits\\StoredUserIdData' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Audits/StoredUserIdData.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Audits\\UnhashedIpAddress' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Audits/UnhashedIpAddress.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Faqs\\AbstractFaq' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Faqs/AbstractFaq.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Faqs\\RequireConsent' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Faqs/RequireConsent.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Faqs\\RequireCookieBanner' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Faqs/RequireCookieBanner.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Faqs\\RequireMention' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Faqs/RequireMention.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\Faqs\\TransferData' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/Faqs/TransferData.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\PrivacyAuditController' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/PrivacyAuditController.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\PrivacyAuditDataProvider' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/PrivacyAuditDataProvider.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\PrivacyAuditManager' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/PrivacyAuditManager.php',
        'WP_Statistics\\Service\\Admin\\PrivacyAudit\\PrivacyAuditPage' => __DIR__ . '/../..' . '/src/Service/Admin/PrivacyAudit/PrivacyAuditPage.php',
        'WP_Statistics\\Service\\Admin\\SiteHealthInfo' => __DIR__ . '/../..' . '/src/Service/Admin/SiteHealthInfo.php',
        'WP_Statistics\\Service\\Admin\\VisitorInsights\\Views\\SingleVisitorView' => __DIR__ . '/../..' . '/src/Service/Admin/VisitorInsights/Views/SingleVisitorView.php',
        'WP_Statistics\\Service\\Admin\\VisitorInsights\\Views\\TabsView' => __DIR__ . '/../..' . '/src/Service/Admin/VisitorInsights/Views/TabsView.php',
        'WP_Statistics\\Service\\Admin\\VisitorInsights\\VisitorInsightsDataProvider' => __DIR__ . '/../..' . '/src/Service/Admin/VisitorInsights/VisitorInsightsDataProvider.php',
        'WP_Statistics\\Service\\Admin\\VisitorInsights\\VisitorInsightsManager' => __DIR__ . '/../..' . '/src/Service/Admin/VisitorInsights/VisitorInsightsManager.php',
        'WP_Statistics\\Service\\Admin\\VisitorInsights\\VisitorInsightsPage' => __DIR__ . '/../..' . '/src/Service/Admin/VisitorInsights/VisitorInsightsPage.php',
        'WP_Statistics\\Service\\Admin\\WebsitePerformance\\WebsitePerformanceDataProvider' => __DIR__ . '/../..' . '/src/Service/Admin/WebsitePerformance/WebsitePerformanceDataProvider.php',
        'WP_Statistics\\Service\\Analytics\\AnalyticsController' => __DIR__ . '/../..' . '/src/Service/Analytics/AnalyticsController.php',
        'WP_Statistics\\Service\\Analytics\\AnalyticsManager' => __DIR__ . '/../..' . '/src/Service/Analytics/AnalyticsManager.php',
        'WP_Statistics\\Service\\Analytics\\VisitorProfile' => __DIR__ . '/../..' . '/src/Service/Analytics/VisitorProfile.php',
        'WP_Statistics\\Service\\Integrations\\IntegrationsManager' => __DIR__ . '/../..' . '/src/Service/Integrations/IntegrationsManager.php',
        'WP_Statistics\\Service\\Integrations\\WpConsentApi' => __DIR__ . '/../..' . '/src/Service/Integrations/WpConsentApi.php',
        'WP_Statistics\\Traits\\ObjectCacheTrait' => __DIR__ . '/../..' . '/src/Traits/ObjectCacheTrait.php',
        'WP_Statistics\\Traits\\TransientCacheTrait' => __DIR__ . '/../..' . '/src/Traits/TransientCacheTrait.php',
        'WP_Statistics\\Utils\\Query' => __DIR__ . '/../..' . '/src/Utils/Query.php',
        'WP_Statistics\\Utils\\Request' => __DIR__ . '/../..' . '/src/Utils/Request.php',
        'WP_Statistics\\Utils\\Signature' => __DIR__ . '/../..' . '/src/Utils/Signature.php',
        'WhichBrowser\\Analyser' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser.php',
        'WhichBrowser\\Analyser\\Camouflage' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Camouflage.php',
        'WhichBrowser\\Analyser\\Corrections' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Corrections.php',
        'WhichBrowser\\Analyser\\Derive' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Derive.php',
        'WhichBrowser\\Analyser\\Header' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header.php',
        'WhichBrowser\\Analyser\\Header\\Baidu' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Baidu.php',
        'WhichBrowser\\Analyser\\Header\\BrowserId' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/BrowserId.php',
        'WhichBrowser\\Analyser\\Header\\OperaMini' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/OperaMini.php',
        'WhichBrowser\\Analyser\\Header\\Puffin' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Puffin.php',
        'WhichBrowser\\Analyser\\Header\\UCBrowserNew' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/UCBrowserNew.php',
        'WhichBrowser\\Analyser\\Header\\UCBrowserOld' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/UCBrowserOld.php',
        'WhichBrowser\\Analyser\\Header\\Useragent' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Application' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Application.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Bot' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Bot.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Browser' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Browser.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Appliance' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Appliance.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Cars' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Cars.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Ereader' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Ereader.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Gaming' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Gaming.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Gps' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Gps.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Media' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Media.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Mobile' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Mobile.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Pda' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Pda.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Phone' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Phone.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Printer' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Printer.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Signage' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Signage.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Tablet' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Tablet.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Device\\Television' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Device/Television.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Engine' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Engine.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Os' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Os.php',
        'WhichBrowser\\Analyser\\Header\\Useragent\\Using' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Useragent/Using.php',
        'WhichBrowser\\Analyser\\Header\\Wap' => __DIR__ . '/..' . '/whichbrowser/parser/src/Analyser/Header/Wap.php',
        'WhichBrowser\\Cache' => __DIR__ . '/..' . '/whichbrowser/parser/src/Cache.php',
        'WhichBrowser\\Constants\\BrowserType' => __DIR__ . '/..' . '/whichbrowser/parser/src/Constants/BrowserType.php',
        'WhichBrowser\\Constants\\DeviceSubType' => __DIR__ . '/..' . '/whichbrowser/parser/src/Constants/DeviceSubType.php',
        'WhichBrowser\\Constants\\DeviceType' => __DIR__ . '/..' . '/whichbrowser/parser/src/Constants/DeviceType.php',
        'WhichBrowser\\Constants\\EngineType' => __DIR__ . '/..' . '/whichbrowser/parser/src/Constants/EngineType.php',
        'WhichBrowser\\Constants\\Feature' => __DIR__ . '/..' . '/whichbrowser/parser/src/Constants/Feature.php',
        'WhichBrowser\\Constants\\Flag' => __DIR__ . '/..' . '/whichbrowser/parser/src/Constants/Flag.php',
        'WhichBrowser\\Constants\\Id' => __DIR__ . '/..' . '/whichbrowser/parser/src/Constants/Id.php',
        'WhichBrowser\\Data\\Applications' => __DIR__ . '/..' . '/whichbrowser/parser/src/Data/Applications.php',
        'WhichBrowser\\Data\\BrowserIds' => __DIR__ . '/..' . '/whichbrowser/parser/src/Data/BrowserIds.php',
        'WhichBrowser\\Data\\BuildIds' => __DIR__ . '/..' . '/whichbrowser/parser/src/Data/BuildIds.php',
        'WhichBrowser\\Data\\CFNetwork' => __DIR__ . '/..' . '/whichbrowser/parser/src/Data/CFNetwork.php',
        'WhichBrowser\\Data\\Chrome' => __DIR__ . '/..' . '/whichbrowser/parser/src/Data/Chrome.php',
        'WhichBrowser\\Data\\Darwin' => __DIR__ . '/..' . '/whichbrowser/parser/src/Data/Darwin.php',
        'WhichBrowser\\Data\\DeviceModels' => __DIR__ . '/..' . '/whichbrowser/parser/src/Data/DeviceModels.php',
        'WhichBrowser\\Data\\DeviceProfiles' => __DIR__ . '/..' . '/whichbrowser/parser/src/Data/DeviceProfiles.php',
        'WhichBrowser\\Data\\Manufacturers' => __DIR__ . '/..' . '/whichbrowser/parser/src/Data/Manufacturers.php',
        'WhichBrowser\\Model\\Browser' => __DIR__ . '/..' . '/whichbrowser/parser/src/Model/Browser.php',
        'WhichBrowser\\Model\\Device' => __DIR__ . '/..' . '/whichbrowser/parser/src/Model/Device.php',
        'WhichBrowser\\Model\\Engine' => __DIR__ . '/..' . '/whichbrowser/parser/src/Model/Engine.php',
        'WhichBrowser\\Model\\Family' => __DIR__ . '/..' . '/whichbrowser/parser/src/Model/Family.php',
        'WhichBrowser\\Model\\Main' => __DIR__ . '/..' . '/whichbrowser/parser/src/Model/Main.php',
        'WhichBrowser\\Model\\Os' => __DIR__ . '/..' . '/whichbrowser/parser/src/Model/Os.php',
        'WhichBrowser\\Model\\Primitive\\Base' => __DIR__ . '/..' . '/whichbrowser/parser/src/Model/Primitive/Base.php',
        'WhichBrowser\\Model\\Primitive\\NameVersion' => __DIR__ . '/..' . '/whichbrowser/parser/src/Model/Primitive/NameVersion.php',
        'WhichBrowser\\Model\\Using' => __DIR__ . '/..' . '/whichbrowser/parser/src/Model/Using.php',
        'WhichBrowser\\Model\\Version' => __DIR__ . '/..' . '/whichbrowser/parser/src/Model/Version.php',
        'WhichBrowser\\Parser' => __DIR__ . '/..' . '/whichbrowser/parser/src/Parser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f564c5d781bbd86ba3fd12450bf69bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f564c5d781bbd86ba3fd12450bf69bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5f564c5d781bbd86ba3fd12450bf69bd::$classMap;

        }, null, ClassLoader::class);
    }
}
