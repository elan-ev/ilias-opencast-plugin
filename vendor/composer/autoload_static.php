<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20975cba620fc47d8c392214bb856b0a
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'O' => 
        array (
            'OpencastApi\\Rest\\' => 17,
            'OpencastApi\\Mock\\' => 17,
            'OpencastApi\\' => 12,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'OpencastApi\\Rest\\' => 
        array (
            0 => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest',
        ),
        'OpencastApi\\Mock\\' => 
        array (
            0 => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Mock',
        ),
        'OpencastApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ILIAS\\UI\\Implementation\\Component\\Input\\Field\\ChunkedFile' => __DIR__ . '/../..' . '/src/UI/Form/ChunkedFile.php',
        'ILIAS\\UI\\Implementation\\Component\\Input\\Field\\ChunkedFileRenderer' => __DIR__ . '/../..' . '/src/UI/Form/ChunkedFileRenderer.php',
        'OpencastApi\\Mock\\OcMockHanlder' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Mock/OcMockHanlder.php',
        'OpencastApi\\Opencast' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Opencast.php',
        'OpencastApi\\Rest\\OcAgentsApi' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcAgentsApi.php',
        'OpencastApi\\Rest\\OcBaseApi' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcBaseApi.php',
        'OpencastApi\\Rest\\OcCaptureAdmin' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcCaptureAdmin.php',
        'OpencastApi\\Rest\\OcEventAdminNg' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcEventAdminNg.php',
        'OpencastApi\\Rest\\OcEventsApi' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcEventsApi.php',
        'OpencastApi\\Rest\\OcGroupsApi' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcGroupsApi.php',
        'OpencastApi\\Rest\\OcIngest' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcIngest.php',
        'OpencastApi\\Rest\\OcListProvidersApi' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcListProvidersApi.php',
        'OpencastApi\\Rest\\OcRecordings' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcRecordings.php',
        'OpencastApi\\Rest\\OcRest' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcRest.php',
        'OpencastApi\\Rest\\OcRestClient' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcRestClient.php',
        'OpencastApi\\Rest\\OcSearch' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcSearch.php',
        'OpencastApi\\Rest\\OcSecurityApi' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcSecurityApi.php',
        'OpencastApi\\Rest\\OcSeries' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcSeries.php',
        'OpencastApi\\Rest\\OcSeriesApi' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcSeriesApi.php',
        'OpencastApi\\Rest\\OcServices' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcServices.php',
        'OpencastApi\\Rest\\OcStatisticsApi' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcStatisticsApi.php',
        'OpencastApi\\Rest\\OcSysinfo' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcSysinfo.php',
        'OpencastApi\\Rest\\OcWorkflow' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcWorkflow.php',
        'OpencastApi\\Rest\\OcWorkflowsApi' => __DIR__ . '/..' . '/elan-ev/opencast-api/src/OpencastApi/Rest/OcWorkflowsApi.php',
        'WaitOverlay' => __DIR__ . '/../..' . '/src/UI/WaitOverlay.php',
        'ilObjOpenCast' => __DIR__ . '/../..' . '/classes/class.ilObjOpenCast.php',
        'ilObjOpenCastAccess' => __DIR__ . '/../..' . '/classes/class.ilObjOpenCastAccess.php',
        'ilObjOpenCastGUI' => __DIR__ . '/../..' . '/classes/class.ilObjOpenCastGUI.php',
        'ilObjOpenCastListGUI' => __DIR__ . '/../..' . '/classes/class.ilObjOpenCastListGUI.php',
        'ilOpenCastConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilOpenCastConfigGUI.php',
        'ilOpenCastPlugin' => __DIR__ . '/../..' . '/classes/class.ilOpenCastPlugin.php',
        'srag\\Plugins\\OpenCast\\UI\\Component\\Input\\Field\\AbstractCtrlAwareChunkedUploadHandler' => __DIR__ . '/../..' . '/src/UI/Form/AbstractCtrlAwareChunkedUploadHandler.php',
        'srag\\Plugins\\OpenCast\\UI\\Component\\Input\\Field\\Loader' => __DIR__ . '/../..' . '/src/UI/Form/Loader.php',
        'srag\\Plugins\\Opencast\\API\\API' => __DIR__ . '/../..' . '/src/API/API.php',
        'srag\\Plugins\\Opencast\\API\\Config' => __DIR__ . '/../..' . '/src/API/Config.php',
        'srag\\Plugins\\Opencast\\API\\DecorateProxy' => __DIR__ . '/../..' . '/src/API/DecorateProxy.php',
        'srag\\Plugins\\Opencast\\API\\Handlers' => __DIR__ . '/../..' . '/src/API/Handlers.php',
        'srag\\Plugins\\Opencast\\API\\OpencastAPI' => __DIR__ . '/../..' . '/src/API/OpencastAPI.php',
        'srag\\Plugins\\Opencast\\Chat\\GUI\\ChatGUI' => __DIR__ . '/../..' . '/src/Chat/GUI/ChatGUI.php',
        'srag\\Plugins\\Opencast\\Chat\\GUI\\ChatHistoryGUI' => __DIR__ . '/../..' . '/src/Chat/GUI/ChatHistoryGUI.php',
        'srag\\Plugins\\Opencast\\Chat\\Model\\ChatroomAR' => __DIR__ . '/../..' . '/src/Chat/Model/ChatroomAR.php',
        'srag\\Plugins\\Opencast\\Chat\\Model\\ConfigAR' => __DIR__ . '/../..' . '/src/Chat/Model/ConfigAR.php',
        'srag\\Plugins\\Opencast\\Chat\\Model\\EventAR' => __DIR__ . '/../..' . '/src/Chat/Model/EventAR.php',
        'srag\\Plugins\\Opencast\\Chat\\Model\\MessageAR' => __DIR__ . '/../..' . '/src/Chat/Model/MessageAR.php',
        'srag\\Plugins\\Opencast\\Chat\\Model\\Token' => __DIR__ . '/../..' . '/src/Chat/Model/Token.php',
        'srag\\Plugins\\Opencast\\Chat\\Model\\TokenAR' => __DIR__ . '/../..' . '/src/Chat/Model/TokenAR.php',
        'srag\\Plugins\\Opencast\\Container\\Container' => __DIR__ . '/../..' . '/src/Container/Container.php',
        'srag\\Plugins\\Opencast\\Container\\Init' => __DIR__ . '/../..' . '/src/Container/Init.php',
        'srag\\Plugins\\Opencast\\DI\\OpencastDIC' => __DIR__ . '/../..' . '/src/DI/OpencastDIC.php',
        'srag\\Plugins\\Opencast\\LegacyHelpers\\TableGUI' => __DIR__ . '/../..' . '/src/LegacyHelpers/TableGUI.php',
        'srag\\Plugins\\Opencast\\LegacyHelpers\\TableGUIConstants' => __DIR__ . '/../..' . '/src/LegacyHelpers/TableGUIConstants.php',
        'srag\\Plugins\\Opencast\\LegacyHelpers\\TranslatorTrait' => __DIR__ . '/../..' . '/src/LegacyHelpers/TranslatorTrait.php',
        'srag\\Plugins\\Opencast\\LegacyHelpers\\UploadSize' => __DIR__ . '/../..' . '/src/LegacyHelpers/UploadSize.php',
        'srag\\Plugins\\Opencast\\Model\\ACL\\ACL' => __DIR__ . '/../..' . '/src/Model/ACL/ACL.php',
        'srag\\Plugins\\Opencast\\Model\\ACL\\ACLEntry' => __DIR__ . '/../..' . '/src/Model/ACL/ACLEntry.php',
        'srag\\Plugins\\Opencast\\Model\\ACL\\ACLParser' => __DIR__ . '/../..' . '/src/Model/ACL/ACLParser.php',
        'srag\\Plugins\\Opencast\\Model\\ACL\\ACLUtils' => __DIR__ . '/../..' . '/src/Model/ACL/ACLUtils.php',
        'srag\\Plugins\\Opencast\\Model\\API\\APIObject' => __DIR__ . '/../..' . '/src/Model/API/APIObject.php',
        'srag\\Plugins\\Opencast\\Model\\Agent\\Agent' => __DIR__ . '/../..' . '/src/Model/Agent/Agent.php',
        'srag\\Plugins\\Opencast\\Model\\Agent\\AgentApiRepository' => __DIR__ . '/../..' . '/src/Model/Agent/AgentApiRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Agent\\AgentParser' => __DIR__ . '/../..' . '/src/Model/Agent/AgentParser.php',
        'srag\\Plugins\\Opencast\\Model\\Agent\\AgentRepository' => __DIR__ . '/../..' . '/src/Model/Agent/AgentRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Adaptor\\APCu' => __DIR__ . '/../..' . '/src/Model/Cache/Adaptor/APCu.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Adaptor\\Adaptor' => __DIR__ . '/../..' . '/src/Model/Cache/Adaptor/Adaptor.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Adaptor\\BaseAdaptor' => __DIR__ . '/../..' . '/src/Model/Cache/Adaptor/BaseAdaptor.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Adaptor\\Database' => __DIR__ . '/../..' . '/src/Model/Cache/Adaptor/Database.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Adaptor\\Factory' => __DIR__ . '/../..' . '/src/Model/Cache/Adaptor/Factory.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Adaptor\\PHPStatic' => __DIR__ . '/../..' . '/src/Model/Cache/Adaptor/PHPStatic.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Cacheable' => __DIR__ . '/../..' . '/src/Model/Cache/Cacheable.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Config' => __DIR__ . '/../..' . '/src/Model/Cache/Config.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Container\\ActiveContainer' => __DIR__ . '/../..' . '/src/Model/Cache/Container/ActiveContainer.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Container\\BaseRequest' => __DIR__ . '/../..' . '/src/Model/Cache/Container/BaseRequest.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Container\\Container' => __DIR__ . '/../..' . '/src/Model/Cache/Container/Container.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Container\\Request' => __DIR__ . '/../..' . '/src/Model/Cache/Container/Request.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Container\\VoidContainer' => __DIR__ . '/../..' . '/src/Model/Cache/Container/VoidContainer.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Nodes\\Node' => __DIR__ . '/../..' . '/src/Model/Cache/Nodes/Node.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Nodes\\NodeRepository' => __DIR__ . '/../..' . '/src/Model/Cache/Nodes/NodeRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Nodes\\NullNodeRepository' => __DIR__ . '/../..' . '/src/Model/Cache/Nodes/NullNodeRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Cache\\Services' => __DIR__ . '/../..' . '/src/Model/Cache/Services.php',
        'srag\\Plugins\\Opencast\\Model\\Config\\PluginConfig' => __DIR__ . '/../..' . '/src/Model/Config/PluginConfig.php',
        'srag\\Plugins\\Opencast\\Model\\DTO\\DownloadDto' => __DIR__ . '/../..' . '/src/Model/DTO/DownloadDto.php',
        'srag\\Plugins\\Opencast\\Model\\Event\\Event' => __DIR__ . '/../..' . '/src/Model/Event/Event.php',
        'srag\\Plugins\\Opencast\\Model\\Event\\EventAPIRepository' => __DIR__ . '/../..' . '/src/Model/Event/EventAPIRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Event\\EventAdditionsAR' => __DIR__ . '/../..' . '/src/Model/Event/EventAdditionsAR.php',
        'srag\\Plugins\\Opencast\\Model\\Event\\EventParser' => __DIR__ . '/../..' . '/src/Model/Event/EventParser.php',
        'srag\\Plugins\\Opencast\\Model\\Event\\EventRepository' => __DIR__ . '/../..' . '/src/Model/Event/EventRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Event\\Request\\DeleteEventRequest' => __DIR__ . '/../..' . '/src/Model/Event/Request/DeleteEventRequest.php',
        'srag\\Plugins\\Opencast\\Model\\Event\\Request\\ScheduleEventRequest' => __DIR__ . '/../..' . '/src/Model/Event/Request/ScheduleEventRequest.php',
        'srag\\Plugins\\Opencast\\Model\\Event\\Request\\ScheduleEventRequestPayload' => __DIR__ . '/../..' . '/src/Model/Event/Request/ScheduleEventRequestPayload.php',
        'srag\\Plugins\\Opencast\\Model\\Event\\Request\\UpdateEventRequest' => __DIR__ . '/../..' . '/src/Model/Event/Request/UpdateEventRequest.php',
        'srag\\Plugins\\Opencast\\Model\\Event\\Request\\UpdateEventRequestPayload' => __DIR__ . '/../..' . '/src/Model/Event/Request/UpdateEventRequestPayload.php',
        'srag\\Plugins\\Opencast\\Model\\Event\\Request\\UploadEventRequest' => __DIR__ . '/../..' . '/src/Model/Event/Request/UploadEventRequest.php',
        'srag\\Plugins\\Opencast\\Model\\Event\\Request\\UploadEventRequestPayload' => __DIR__ . '/../..' . '/src/Model/Event/Request/UploadEventRequestPayload.php',
        'srag\\Plugins\\Opencast\\Model\\Group\\Group' => __DIR__ . '/../..' . '/src/Model/Group/Group.php',
        'srag\\Plugins\\Opencast\\Model\\ListProvider\\ListProvider' => __DIR__ . '/../..' . '/src/Model/ListProvider/ListProvider.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Config\\Event\\MDFieldConfigEventAR' => __DIR__ . '/../..' . '/src/Model/Metadata/Config/Event/MDFieldConfigEventAR.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Config\\Event\\MDFieldConfigEventRepository' => __DIR__ . '/../..' . '/src/Model/Metadata/Config/Event/MDFieldConfigEventRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Config\\MDFieldConfigAR' => __DIR__ . '/../..' . '/src/Model/Metadata/Config/MDFieldConfigAR.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Config\\MDFieldConfigRepository' => __DIR__ . '/../..' . '/src/Model/Metadata/Config/MDFieldConfigRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Config\\Series\\MDFieldConfigSeriesAR' => __DIR__ . '/../..' . '/src/Model/Metadata/Config/Series/MDFieldConfigSeriesAR.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Config\\Series\\MDFieldConfigSeriesRepository' => __DIR__ . '/../..' . '/src/Model/Metadata/Config/Series/MDFieldConfigSeriesRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Definition\\MDCatalogue' => __DIR__ . '/../..' . '/src/Model/Metadata/Definition/MDCatalogue.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Definition\\MDCatalogueFactory' => __DIR__ . '/../..' . '/src/Model/Metadata/Definition/MDCatalogueFactory.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Definition\\MDDataType' => __DIR__ . '/../..' . '/src/Model/Metadata/Definition/MDDataType.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Definition\\MDFieldDefinition' => __DIR__ . '/../..' . '/src/Model/Metadata/Definition/MDFieldDefinition.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Helper\\MDParser' => __DIR__ . '/../..' . '/src/Model/Metadata/Helper/MDParser.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Helper\\MDPrefiller' => __DIR__ . '/../..' . '/src/Model/Metadata/Helper/MDPrefiller.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\Metadata' => __DIR__ . '/../..' . '/src/Model/Metadata/Metadata.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\MetadataFactory' => __DIR__ . '/../..' . '/src/Model/Metadata/MetadataFactory.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\MetadataField' => __DIR__ . '/../..' . '/src/Model/Metadata/MetadataField.php',
        'srag\\Plugins\\Opencast\\Model\\Metadata\\MetadataService' => __DIR__ . '/../..' . '/src/Model/Metadata/MetadataService.php',
        'srag\\Plugins\\Opencast\\Model\\Object\\ObjectSettings' => __DIR__ . '/../..' . '/src/Model/Object/ObjectSettings.php',
        'srag\\Plugins\\Opencast\\Model\\Object\\ObjectSettingsParser' => __DIR__ . '/../..' . '/src/Model/Object/ObjectSettingsParser.php',
        'srag\\Plugins\\Opencast\\Model\\PerVideoPermission\\PermissionGrant' => __DIR__ . '/../..' . '/src/Model/PerVideoPermission/PermissionGrant.php',
        'srag\\Plugins\\Opencast\\Model\\PerVideoPermission\\PermissionGroup' => __DIR__ . '/../..' . '/src/Model/PerVideoPermission/PermissionGroup.php',
        'srag\\Plugins\\Opencast\\Model\\PerVideoPermission\\PermissionGroupParticipant' => __DIR__ . '/../..' . '/src/Model/PerVideoPermission/PermissionGroupParticipant.php',
        'srag\\Plugins\\Opencast\\Model\\PermissionTemplate\\PermissionTemplate' => __DIR__ . '/../..' . '/src/Model/PermissionTemplate/PermissionTemplate.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Attachment' => __DIR__ . '/../..' . '/src/Model/Publication/Attachment.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Config\\PublicationSubUsage' => __DIR__ . '/../..' . '/src/Model/Publication/Config/PublicationSubUsage.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Config\\PublicationSubUsageRepository' => __DIR__ . '/../..' . '/src/Model/Publication/Config/PublicationSubUsageRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Config\\PublicationUsage' => __DIR__ . '/../..' . '/src/Model/Publication/Config/PublicationUsage.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Config\\PublicationUsageDefault' => __DIR__ . '/../..' . '/src/Model/Publication/Config/PublicationUsageDefault.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Config\\PublicationUsageGroup' => __DIR__ . '/../..' . '/src/Model/Publication/Config/PublicationUsageGroup.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Config\\PublicationUsageGroupRepository' => __DIR__ . '/../..' . '/src/Model/Publication/Config/PublicationUsageGroupRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Config\\PublicationUsageRepository' => __DIR__ . '/../..' . '/src/Model/Publication/Config/PublicationUsageRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Media' => __DIR__ . '/../..' . '/src/Model/Publication/Media.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\Publication' => __DIR__ . '/../..' . '/src/Model/Publication/Publication.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\PublicationAPIRepository' => __DIR__ . '/../..' . '/src/Model/Publication/PublicationAPIRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\PublicationMetadata' => __DIR__ . '/../..' . '/src/Model/Publication/PublicationMetadata.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\PublicationRepository' => __DIR__ . '/../..' . '/src/Model/Publication/PublicationRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Publication\\PublicationSelector' => __DIR__ . '/../..' . '/src/Model/Publication/PublicationSelector.php',
        'srag\\Plugins\\Opencast\\Model\\Report\\Report' => __DIR__ . '/../..' . '/src/Model/Report/Report.php',
        'srag\\Plugins\\Opencast\\Model\\Scheduling\\RRule' => __DIR__ . '/../..' . '/src/Model/Scheduling/RRule.php',
        'srag\\Plugins\\Opencast\\Model\\Scheduling\\Scheduling' => __DIR__ . '/../..' . '/src/Model/Scheduling/Scheduling.php',
        'srag\\Plugins\\Opencast\\Model\\Scheduling\\SchedulingParser' => __DIR__ . '/../..' . '/src/Model/Scheduling/SchedulingParser.php',
        'srag\\Plugins\\Opencast\\Model\\Series\\Request\\CreateSeriesRequest' => __DIR__ . '/../..' . '/src/Model/Series/Request/CreateSeriesRequest.php',
        'srag\\Plugins\\Opencast\\Model\\Series\\Request\\CreateSeriesRequestPayload' => __DIR__ . '/../..' . '/src/Model/Series/Request/CreateSeriesRequestPayload.php',
        'srag\\Plugins\\Opencast\\Model\\Series\\Request\\SanitizeSeriesMetadata' => __DIR__ . '/../..' . '/src/Model/Series/Request/SanitizeSeriesMetadata.php',
        'srag\\Plugins\\Opencast\\Model\\Series\\Request\\UpdateSeriesACLRequest' => __DIR__ . '/../..' . '/src/Model/Series/Request/UpdateSeriesACLRequest.php',
        'srag\\Plugins\\Opencast\\Model\\Series\\Request\\UpdateSeriesACLRequestPayload' => __DIR__ . '/../..' . '/src/Model/Series/Request/UpdateSeriesACLRequestPayload.php',
        'srag\\Plugins\\Opencast\\Model\\Series\\Request\\UpdateSeriesMetadataRequest' => __DIR__ . '/../..' . '/src/Model/Series/Request/UpdateSeriesMetadataRequest.php',
        'srag\\Plugins\\Opencast\\Model\\Series\\Request\\UpdateSeriesMetadataRequestPayload' => __DIR__ . '/../..' . '/src/Model/Series/Request/UpdateSeriesMetadataRequestPayload.php',
        'srag\\Plugins\\Opencast\\Model\\Series\\Series' => __DIR__ . '/../..' . '/src/Model/Series/Series.php',
        'srag\\Plugins\\Opencast\\Model\\Series\\SeriesAPIRepository' => __DIR__ . '/../..' . '/src/Model/Series/SeriesAPIRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Series\\SeriesParser' => __DIR__ . '/../..' . '/src/Model/Series/SeriesParser.php',
        'srag\\Plugins\\Opencast\\Model\\Series\\SeriesRepository' => __DIR__ . '/../..' . '/src/Model/Series/SeriesRepository.php',
        'srag\\Plugins\\Opencast\\Model\\TermsOfUse\\AcceptedToU' => __DIR__ . '/../..' . '/src/Model/TermsOfUse/AcceptedToU.php',
        'srag\\Plugins\\Opencast\\Model\\TermsOfUse\\ToUManager' => __DIR__ . '/../..' . '/src/Model/TermsOfUse/ToUManager.php',
        'srag\\Plugins\\Opencast\\Model\\UserSettings\\UserSetting' => __DIR__ . '/../..' . '/src/Model/UserSettings/UserSetting.php',
        'srag\\Plugins\\Opencast\\Model\\UserSettings\\UserSettingsRepository' => __DIR__ . '/../..' . '/src/Model/UserSettings/UserSettingsRepository.php',
        'srag\\Plugins\\Opencast\\Model\\User\\xoctUser' => __DIR__ . '/../..' . '/src/Model/User/xoctUser.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowInstance\\WorkflowInstance' => __DIR__ . '/../..' . '/src/Model/WorkflowInstance/WorkflowInstance.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowInstance\\WorkflowInstanceCollection' => __DIR__ . '/../..' . '/src/Model/WorkflowInstance/WorkflowInstanceCollection.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowInstance\\WorkflowOperation' => __DIR__ . '/../..' . '/src/Model/WorkflowInstance/WorkflowOperation.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowParameter\\Config\\WorkflowParameter' => __DIR__ . '/../..' . '/src/Model/WorkflowParameter/Config/WorkflowParameter.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowParameter\\Config\\WorkflowParameterRepository' => __DIR__ . '/../..' . '/src/Model/WorkflowParameter/Config/WorkflowParameterRepository.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowParameter\\Processing' => __DIR__ . '/../..' . '/src/Model/WorkflowParameter/Processing.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowParameter\\Series\\SeriesWorkflowParameter' => __DIR__ . '/../..' . '/src/Model/WorkflowParameter/Series/SeriesWorkflowParameter.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowParameter\\Series\\SeriesWorkflowParameterRepository' => __DIR__ . '/../..' . '/src/Model/WorkflowParameter/Series/SeriesWorkflowParameterRepository.php',
        'srag\\Plugins\\Opencast\\Model\\WorkflowParameter\\WorkflowParameterParser' => __DIR__ . '/../..' . '/src/Model/WorkflowParameter/WorkflowParameterParser.php',
        'srag\\Plugins\\Opencast\\Model\\Workflow\\WorkflowAR' => __DIR__ . '/../..' . '/src/Model/Workflow/WorkflowAR.php',
        'srag\\Plugins\\Opencast\\Model\\Workflow\\WorkflowDBRepository' => __DIR__ . '/../..' . '/src/Model/Workflow/WorkflowDBRepository.php',
        'srag\\Plugins\\Opencast\\Model\\Workflow\\WorkflowRepository' => __DIR__ . '/../..' . '/src/Model/Workflow/WorkflowRepository.php',
        'srag\\Plugins\\Opencast\\Traits\\Singleton' => __DIR__ . '/../..' . '/src/Traits/Singleton.php',
        'srag\\Plugins\\Opencast\\UI\\EventFormBuilder' => __DIR__ . '/../..' . '/src/UI/EventFormBuilder.php',
        'srag\\Plugins\\Opencast\\UI\\EventTableBuilder' => __DIR__ . '/../..' . '/src/UI/EventTableBuilder.php',
        'srag\\Plugins\\Opencast\\UI\\LegacyFormWrapper' => __DIR__ . '/../..' . '/src/UI/LegacyFormWrapper.php',
        'srag\\Plugins\\Opencast\\UI\\Metadata\\Config\\MDConfigTable' => __DIR__ . '/../..' . '/src/UI/Metadata/Config/MDConfigTable.php',
        'srag\\Plugins\\Opencast\\UI\\Metadata\\MDFormItemBuilder' => __DIR__ . '/../..' . '/src/UI/Metadata/MDFormItemBuilder.php',
        'srag\\Plugins\\Opencast\\UI\\Modal\\EventModals' => __DIR__ . '/../..' . '/src/UI/Modal/EventModals.php',
        'srag\\Plugins\\Opencast\\UI\\ObjectSettings\\ObjectSettingsFormItemBuilder' => __DIR__ . '/../..' . '/src/UI/ObjectSettings/ObjectSettingsFormItemBuilder.php',
        'srag\\Plugins\\Opencast\\UI\\PaellaConfig\\PaellaConfigFormBuilder' => __DIR__ . '/../..' . '/src/UI/PaellaConfig/PaellaConfigFormBuilder.php',
        'srag\\Plugins\\Opencast\\UI\\Scheduling\\SchedulingFormItemBuilder' => __DIR__ . '/../..' . '/src/UI/Scheduling/SchedulingFormItemBuilder.php',
        'srag\\Plugins\\Opencast\\UI\\SeriesFormBuilder' => __DIR__ . '/../..' . '/src/UI/SeriesFormBuilder.php',
        'srag\\Plugins\\Opencast\\Util\\FileTransfer\\OpencastIngestService' => __DIR__ . '/../..' . '/src/Util/FileTransfer/OpencastIngestService.php',
        'srag\\Plugins\\Opencast\\Util\\FileTransfer\\PaellaConfigStorageService' => __DIR__ . '/../..' . '/src/Util/FileTransfer/PaellaConfigStorageService.php',
        'srag\\Plugins\\Opencast\\Util\\FileTransfer\\UploadStorageService' => __DIR__ . '/../..' . '/src/Util/FileTransfer/UploadStorageService.php',
        'srag\\Plugins\\Opencast\\Util\\Locale\\LocaleTrait' => __DIR__ . '/../..' . '/src/Util/Locale/LocaleTraits.php',
        'srag\\Plugins\\Opencast\\Util\\MimeType' => __DIR__ . '/../..' . '/src/Util/MimeType.php',
        'srag\\Plugins\\Opencast\\Util\\OutputResponse' => __DIR__ . '/../..' . '/src/Util/OutputResponse.php',
        'srag\\Plugins\\Opencast\\Util\\Player\\LivePlayerDataBuilder' => __DIR__ . '/../..' . '/src/Util/Player/LivePlayerDataBuilder.php',
        'srag\\Plugins\\Opencast\\Util\\Player\\PaellaConfigService' => __DIR__ . '/../..' . '/src/Util/Player/PaellaConfigService.php',
        'srag\\Plugins\\Opencast\\Util\\Player\\PaellaConfigServiceFactory' => __DIR__ . '/../..' . '/src/Util/Player/PaellaConfigServiceFactory.php',
        'srag\\Plugins\\Opencast\\Util\\Player\\PlayerDataBuilder' => __DIR__ . '/../..' . '/src/Util/Player/PlayerDataBuilder.php',
        'srag\\Plugins\\Opencast\\Util\\Player\\PlayerDataBuilderFactory' => __DIR__ . '/../..' . '/src/Util/Player/PlayerDataBuilderFactory.php',
        'srag\\Plugins\\Opencast\\Util\\Player\\SelfGeneratedURLPlayerDataBuilder' => __DIR__ . '/../..' . '/src/Util/Player/SelfGeneratedURLPlayerDataBuilder.php',
        'srag\\Plugins\\Opencast\\Util\\Player\\StandardPlayerDataBuilder' => __DIR__ . '/../..' . '/src/Util/Player/StandardPlayerDataBuilder.php',
        'srag\\Plugins\\Opencast\\Util\\Transformator\\ACLtoXML' => __DIR__ . '/../..' . '/src/Util/Transformator/ACLtoXML.php',
        'srag\\Plugins\\Opencast\\Util\\Transformator\\MetadataToXML' => __DIR__ . '/../..' . '/src/Util/Transformator/MetadataToXML.php',
        'srag\\Plugins\\Opencast\\Util\\UpdateCheck' => __DIR__ . '/../..' . '/src/Util/UpdateCheck.php',
        'xoct' => __DIR__ . '/../..' . '/classes/class.xoct.php',
        'xoctBase' => __DIR__ . '/../..' . '/classes/Request/class.xoctBase.php',
        'xoctChangeOwnerGUI' => __DIR__ . '/../..' . '/classes/Owner/class.xoctChangeOwnerGUI.php',
        'xoctConfExportGUI' => __DIR__ . '/../..' . '/classes/Conf/Export/class.xoctConfExportGUI.php',
        'xoctConfFormGUI' => __DIR__ . '/../..' . '/classes/Conf/class.xoctConfFormGUI.php',
        'xoctConfGUI' => __DIR__ . '/../..' . '/classes/Conf/class.xoctConfGUI.php',
        'xoctCurl' => __DIR__ . '/../..' . '/classes/Request/class.xoctCurl.php',
        'xoctCurlError' => __DIR__ . '/../..' . '/classes/Request/class.xoctCurlError.php',
        'xoctCurlSettings' => __DIR__ . '/../..' . '/classes/Request/class.xoctCurlSettings.php',
        'xoctEventAPI' => __DIR__ . '/../..' . '/classes/Service/class.xoctEventAPI.php',
        'xoctEventGUI' => __DIR__ . '/../..' . '/classes/Event/class.xoctEventGUI.php',
        'xoctEventMetadataConfigGUI' => __DIR__ . '/../..' . '/classes/Conf/Metadata/class.xoctEventMetadataConfigGUI.php',
        'xoctEventRenderer' => __DIR__ . '/../..' . '/classes/Event/class.xoctEventRenderer.php',
        'xoctEventTableGUI' => __DIR__ . '/../..' . '/classes/Event/class.xoctEventTableGUI.php',
        'xoctEventTileGUI' => __DIR__ . '/../..' . '/classes/Event/class.xoctEventTileGUI.php',
        'xoctException' => __DIR__ . '/../..' . '/classes/class.xoctException.php',
        'xoctFileUploadHandlerGUI' => __DIR__ . '/../..' . '/classes/Event/class.xoctFileUploadHandlerGUI.php',
        'xoctGUI' => __DIR__ . '/../..' . '/classes/class.xoctGUI.php',
        'xoctGrantPermissionGUI' => __DIR__ . '/../..' . '/classes/Invitations/class.xoctGrantPermissionGUI.php',
        'xoctInternalAPI' => __DIR__ . '/../..' . '/classes/Service/class.xoctInternalAPI.php',
        'xoctInternalApiException' => __DIR__ . '/../..' . '/classes/Service/class.xoctInternalApiException.php',
        'xoctLog' => __DIR__ . '/../..' . '/classes/class.xoctLog.php',
        'xoctMainGUI' => __DIR__ . '/../..' . '/classes/class.xoctMainGUI.php',
        'xoctMetadataConfigGUI' => __DIR__ . '/../..' . '/classes/Conf/Metadata/class.xoctMetadataConfigGUI.php',
        'xoctMetadataConfigRouterGUI' => __DIR__ . '/../..' . '/classes/Conf/Metadata/class.xoctMetadataConfigRouterGUI.php',
        'xoctPermissionGroupGUI' => __DIR__ . '/../..' . '/classes/IVTGroup/class.xoctPermissionGroupGUI.php',
        'xoctPermissionGroupParticipantGUI' => __DIR__ . '/../..' . '/classes/IVTGroup/class.xoctPermissionGroupParticipantGUI.php',
        'xoctPermissionTemplateFormGUI' => __DIR__ . '/../..' . '/classes/Conf/PermissionTemplates/class.xoctPermissionTemplateFormGUI.php',
        'xoctPermissionTemplateGUI' => __DIR__ . '/../..' . '/classes/Conf/PermissionTemplates/class.xoctPermissionTemplateGUI.php',
        'xoctPermissionTemplateTableGUI' => __DIR__ . '/../..' . '/classes/Conf/PermissionTemplates/class.xoctPermissionTemplateTableGUI.php',
        'xoctPlayerGUI' => __DIR__ . '/../..' . '/classes/Player/class.xoctPlayerGUI.php',
        'xoctPublicationGroupFormGUI' => __DIR__ . '/../..' . '/classes/Conf/PublicationUsage/class.xoctPublicationGroupFormGUI.php',
        'xoctPublicationGroupTableGUI' => __DIR__ . '/../..' . '/classes/Conf/PublicationUsage/class.xoctPublicationGroupTableGUI.php',
        'xoctPublicationSubUsageFormGUI' => __DIR__ . '/../..' . '/classes/Conf/PublicationUsage/class.xoctPublicationSubUsageFormGUI.php',
        'xoctPublicationSubUsageTableGUI' => __DIR__ . '/../..' . '/classes/Conf/PublicationUsage/class.xoctPublicationSubUsageTableGUI.php',
        'xoctPublicationUsageFormGUI' => __DIR__ . '/../..' . '/classes/Conf/PublicationUsage/class.xoctPublicationUsageFormGUI.php',
        'xoctPublicationUsageGUI' => __DIR__ . '/../..' . '/classes/Conf/PublicationUsage/class.xoctPublicationUsageGUI.php',
        'xoctPublicationUsageTableGUI' => __DIR__ . '/../..' . '/classes/Conf/PublicationUsage/class.xoctPublicationUsageTableGUI.php',
        'xoctReportOverviewGUI' => __DIR__ . '/../..' . '/classes/Conf/Reports/class.xoctReportOverviewGUI.php',
        'xoctReportOverviewTableGUI' => __DIR__ . '/../..' . '/classes/Conf/Reports/class.xoctReportOverviewTableGUI.php',
        'xoctReportingModalGUI' => __DIR__ . '/../..' . '/classes/Event/class.xoctReportingModalGUI.php',
        'xoctRequest' => __DIR__ . '/../..' . '/classes/Request/class.xoctRequest.php',
        'xoctRequestSettings' => __DIR__ . '/../..' . '/classes/Request/class.xoctRequestSettings.php',
        'xoctSecureLink' => __DIR__ . '/../..' . '/classes/class.xoctSecureLink.php',
        'xoctSeriesAPI' => __DIR__ . '/../..' . '/classes/Service/class.xoctSeriesAPI.php',
        'xoctSeriesGUI' => __DIR__ . '/../..' . '/classes/Series/class.xoctSeriesGUI.php',
        'xoctSeriesMetadataConfigGUI' => __DIR__ . '/../..' . '/classes/Conf/Metadata/class.xoctSeriesMetadataConfigGUI.php',
        'xoctSeriesWorkflowParameterTableGUI' => __DIR__ . '/../..' . '/classes/Series/WorkflowParameters/class.xoctSeriesWorkflowParameterTableGUI.php',
        'xoctUploadFile' => __DIR__ . '/../..' . '/classes/Request/class.xoctUploadFile.php',
        'xoctVideoPortalSettingsFormGUI' => __DIR__ . '/../..' . '/classes/Conf/PermissionTemplates/class.xoctVideoPortalSettingsFormGUI.php',
        'xoctWorkflowGUI' => __DIR__ . '/../..' . '/classes/Conf/Workflows/class.xoctWorkflowGUI.php',
        'xoctWorkflowParameterFormGUI' => __DIR__ . '/../..' . '/classes/Conf/WorkflowParameters/class.xoctWorkflowParameterFormGUI.php',
        'xoctWorkflowParameterGUI' => __DIR__ . '/../..' . '/classes/Conf/WorkflowParameters/class.xoctWorkflowParameterGUI.php',
        'xoctWorkflowParameterTableGUI' => __DIR__ . '/../..' . '/classes/Conf/WorkflowParameters/class.xoctWorkflowParameterTableGUI.php',
        'xoctWorkflowParametersFormGUI' => __DIR__ . '/../..' . '/classes/Conf/WorkflowParameters/class.xoctWorkflowParametersFormGUI.php',
        'xoctWorkflowTableGUI' => __DIR__ . '/../..' . '/classes/Conf/Workflows/class.xoctWorkflowTableGUI.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit20975cba620fc47d8c392214bb856b0a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20975cba620fc47d8c392214bb856b0a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit20975cba620fc47d8c392214bb856b0a::$classMap;

        }, null, ClassLoader::class);
    }
}
