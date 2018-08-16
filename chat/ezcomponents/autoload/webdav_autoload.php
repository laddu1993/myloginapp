<?php
/**
 * Autoloader definition for the Webdav component.
 *
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version 1.1.4
 * @filesource
 * @package Webdav
 */

return array(
    'ezcWebdavException'                                => 'Webdav/exceptions/exception.php',
    'ezcWebdavBadRequestException'                      => 'Webdav/exceptions/bad_request.php',
    'ezcWebdavBrokenBaseUriException'                   => 'Webdav/exceptions/broken_base_uri.php',
    'ezcWebdavBrokenRequestUriException'                => 'Webdav/exceptions/broken_request_uri.php',
    'ezcWebdavFileBackendBrokenStorageException'        => 'Webdav/exceptions/broken_storage_exception.php',
    'ezcWebdavHeadersNotValidatedException'             => 'Webdav/exceptions/headers_not_validated.php',
    'ezcWebdavInconsistencyException'                   => 'Webdav/exceptions/inconsistency.php',
    'ezcWebdavInvalidCallbackException'                 => 'Webdav/exceptions/invalid_callback.php',
    'ezcWebdavInvalidHeaderException'                   => 'Webdav/exceptions/invalid_header.php',
    'ezcWebdavInvalidHookException'                     => 'Webdav/exceptions/invalid_hook.php',
    'ezcWebdavInvalidRequestBodyException'              => 'Webdav/exceptions/invalid_request_body.php',
    'ezcWebdavInvalidRequestMethodException'            => 'Webdav/exceptions/invalid_request_method.php',
    'ezcWebdavInvalidXmlException'                      => 'Webdav/exceptions/invalid_xml.php',
    'ezcWebdavLockAccessDeniedException'                => 'Webdav/plugins/lock/exceptions/access_denied.php',
    'ezcWebdavLockAdministrationException'              => 'Webdav/plugins/lock/exceptions/administration.php',
    'ezcWebdavMissingHeaderException'                   => 'Webdav/exceptions/missing_header.php',
    'ezcWebdavMissingServerVariableException'           => 'Webdav/exceptions/misssing_server_variable.php',
    'ezcWebdavMissingTransportConfigurationException'   => 'Webdav/exceptions/missing_transport_configuration.php',
    'ezcWebdavNotTransportHandlerException'             => 'Webdav/exceptions/no_transport_handler.php',
    'ezcWebdavPluginPreconditionFailedException'        => 'Webdav/exceptions/plugin_precondition_failed.php',
    'ezcWebdavRequestNotSupportedException'             => 'Webdav/exceptions/request_not_supported.php',
    'ezcWebdavUnknownHeaderException'                   => 'Webdav/exceptions/unknown_header.php',
    'ezcWebdavInfrastructureBase'                       => 'Webdav/interfaces/infrastructure_base.php',
    'ezcWebdavAnonymousAuthenticator'                   => 'Webdav/interfaces/anonymous_authenticator.php',
    'ezcWebdavProperty'                                 => 'Webdav/interfaces/property.php',
    'ezcWebdavBackend'                                  => 'Webdav/interfaces/backend.php',
    'ezcWebdavBackendChange'                            => 'Webdav/interfaces/backend/change.php',
    'ezcWebdavBackendMakeCollection'                    => 'Webdav/interfaces/backend/make_collection.php',
    'ezcWebdavBackendPut'                               => 'Webdav/interfaces/backend/put.php',
    'ezcWebdavBasicAuthenticator'                       => 'Webdav/interfaces/basic_authenticator.php',
    'ezcWebdavLiveProperty'                             => 'Webdav/interfaces/property_live.php',
    'ezcWebdavLockRequestResponseHandler'               => 'Webdav/plugins/lock/interfaces/handler.php',
    'ezcWebdavPropertyStorage'                          => 'Webdav/interfaces/property_storage.php',
    'ezcWebdavResponse'                                 => 'Webdav/interfaces/response.php',
    'ezcWebdavAuth'                                     => 'Webdav/structs/auth.php',
    'ezcWebdavAuthorizer'                               => 'Webdav/interfaces/authorizer.php',
    'ezcWebdavBasicPropertyStorage'                     => 'Webdav/property_storages/basic.php',
    'ezcWebdavCopyResponse'                             => 'Webdav/responses/copy.php',
    'ezcWebdavDigestAuthenticator'                      => 'Webdav/interfaces/digest_authenticator.php',
    'ezcWebdavDisplayInformation'                       => 'Webdav/structs/display_information.php',
    'ezcWebdavLockBackend'                              => 'Webdav/plugins/lock/interfaces/lock_backend.php',
    'ezcWebdavLockCheckObserver'                        => 'Webdav/plugins/lock/interfaces/check_observer.php',
    'ezcWebdavLockCopyRequestResponseHandler'           => 'Webdav/plugins/lock/handlers/copy.php',
    'ezcWebdavLockIfHeaderList'                         => 'Webdav/plugins/lock/interfaces/if_header_list.php',
    'ezcWebdavLockMakeCollectionRequestResponseHandler' => 'Webdav/plugins/lock/handlers/mkcol.php',
    'ezcWebdavPathFactory'                              => 'Webdav/interfaces/path_factory.php',
    'ezcWebdavPluginConfiguration'                      => 'Webdav/plugin_configuration.php',
    'ezcWebdavPropFindResponse'                         => 'Webdav/responses/propfind.php',
    'ezcWebdavPropertyHandler'                          => 'Webdav/transports/property_handler.php',
    'ezcWebdavRequest'                                  => 'Webdav/interfaces/request.php',
    'ezcWebdavSimpleBackend'                            => 'Webdav/backends/simple.php',
    'ezcWebdavSupportedLockPropertyLockentry'           => 'Webdav/plugins/lock/properties/supportedlock_lockentry.php',
    'ezcWebdavTransport'                                => 'Webdav/transport.php',
    'ezcWebdavAnonymousAuth'                            => 'Webdav/structs/anonymous_auth.php',
    'ezcWebdavAutomaticPathFactory'                     => 'Webdav/path_factories/automatic.php',
    'ezcWebdavBasicAuth'                                => 'Webdav/structs/basic_auth.php',
    'ezcWebdavBasicPathFactory'                         => 'Webdav/path_factories/basic.php',
    'ezcWebdavCollection'                               => 'Webdav/structs/collection.php',
    'ezcWebdavCopyRequest'                              => 'Webdav/requests/copy.php',
    'ezcWebdavCreationDateProperty'                     => 'Webdav/properties/creationdate.php',
    'ezcWebdavDateTime'                                 => 'Webdav/tools/date_time.php',
    'ezcWebdavDeadProperty'                             => 'Webdav/properties/dead.php',
    'ezcWebdavDeleteRequest'                            => 'Webdav/requests/delete.php',
    'ezcWebdavDeleteResponse'                           => 'Webdav/responses/delete.php',
    'ezcWebdavDigestAuth'                               => 'Webdav/structs/digest_auth.php',
    'ezcWebdavDigestAuthenticatorBase'                  => 'Webdav/auth/digest_base.php',
    'ezcWebdavDisplayNameProperty'                      => 'Webdav/properties/displayname.php',
    'ezcWebdavEmptyDisplayInformation'                  => 'Webdav/structs/display_information_empty.php',
    'ezcWebdavErrorResponse'                            => 'Webdav/responses/error.php',
    'ezcWebdavFileBackend'                              => 'Webdav/backends/file.php',
    'ezcWebdavFileBackendOptions'                       => 'Webdav/options/backend_file_options.php',
    'ezcWebdavFlaggedPropertyStorage'                   => 'Webdav/property_storages/flagged.php',
    'ezcWebdavGetCollectionResponse'                    => 'Webdav/responses/get_collection.php',
    'ezcWebdavGetContentLanguageProperty'               => 'Webdav/properties/getcontentlanguage.php',
    'ezcWebdavGetContentLengthProperty'                 => 'Webdav/properties/getcontentlength.php',
    'ezcWebdavGetContentTypeProperty'                   => 'Webdav/properties/getcontenttype.php',
    'ezcWebdavGetEtagProperty'                          => 'Webdav/properties/getetag.php',
    'ezcWebdavGetLastModifiedProperty'                  => 'Webdav/properties/getlastmodified.php',
    'ezcWebdavGetRequest'                               => 'Webdav/requests/get.php',
    'ezcWebdavGetResourceResponse'                      => 'Webdav/responses/get_resource.php',
    'ezcWebdavHeadRequest'                              => 'Webdav/requests/head.php',
    'ezcWebdavHeadResponse'                             => 'Webdav/responses/head.php',
    'ezcWebdavHeaderHandler'                            => 'Webdav/transports/header_handler.php',
    'ezcWebdavKonquerorCompatibleTransport'             => 'Webdav/transports/konqueror.php',
    'ezcWebdavLockAdministrator'                        => 'Webdav/plugins/lock/administrator.php',
    'ezcWebdavLockAuthorizer'                           => 'Webdav/plugins/lock/interfaces/lock_authorizer.php',
    'ezcWebdavLockCheckInfo'                            => 'Webdav/plugins/lock/structs/lock_check_info.php',
    'ezcWebdavLockCheckPathCollector'                   => 'Webdav/plugins/lock/check_observers/path_collector.php',
    'ezcWebdavLockCheckPropertyCollector'               => 'Webdav/plugins/lock/check_observers/property_collector.php',
    'ezcWebdavLockDeleteRequestResponseHandler'         => 'Webdav/plugins/lock/handlers/delete.php',
    'ezcWebdavLockDiscoveryProperty'                    => 'Webdav/plugins/lock/properties/lockdiscovery.php',
    'ezcWebdavLockDiscoveryPropertyActiveLock'          => 'Webdav/plugins/lock/properties/lockdiscovery_activelock.php',
    'ezcWebdavLockHeaderHandler'                        => 'Webdav/plugins/lock/header_handler.php',
    'ezcWebdavLockIfHeaderCondition'                    => 'Webdav/plugins/lock/header/if_header_condition.php',
    'ezcWebdavLockIfHeaderListItem'                     => 'Webdav/plugins/lock/header/if_header_list_item.php',
    'ezcWebdavLockIfHeaderNoTagList'                    => 'Webdav/plugins/lock/header/if_header_no_tag_list.php',
    'ezcWebdavLockIfHeaderTaggedList'                   => 'Webdav/plugins/lock/header/if_header_tagged_list.php',
    'ezcWebdavLockLockRequestGenerator'                 => 'Webdav/plugins/lock/check_observers/lock.php',
    'ezcWebdavLockLockRequestResponseHandler'           => 'Webdav/plugins/lock/handlers/lock.php',
    'ezcWebdavLockMoveRequestResponseHandler'           => 'Webdav/plugins/lock/handlers/move.php',
    'ezcWebdavLockMultipleCheckObserver'                => 'Webdav/plugins/lock/check_observers/multiple.php',
    'ezcWebdavLockOptionsRequestResponseHandler'        => 'Webdav/plugins/lock/handlers/options.php',
    'ezcWebdavLockPlugin'                               => 'Webdav/plugins/lock/main.php',
    'ezcWebdavLockPluginConfiguration'                  => 'Webdav/plugins/lock/config.php',
    'ezcWebdavLockPluginOptions'                        => 'Webdav/plugins/lock/options.php',
    'ezcWebdavLockPropFindRequestResponseHandler'       => 'Webdav/plugins/lock/handlers/propfind.php',
    'ezcWebdavLockPropPatchRequestResponseHandler'      => 'Webdav/plugins/lock/handlers/proppatch.php',
    'ezcWebdavLockPropertyHandler'                      => 'Webdav/plugins/lock/property_handler.php',
    'ezcWebdavLockPurger'                               => 'Webdav/plugins/lock/administration/purger.php',
    'ezcWebdavLockPutRequestResponseHandler'            => 'Webdav/plugins/lock/handlers/put.php',
    'ezcWebdavLockRefreshRequestGenerator'              => 'Webdav/plugins/lock/check_observers/lock_refresh.php',
    'ezcWebdavLockRequest'                              => 'Webdav/plugins/lock/requests/lock.php',
    'ezcWebdavLockResponse'                             => 'Webdav/plugins/lock/responses/lock.php',
    'ezcWebdavLockTools'                                => 'Webdav/plugins/lock/tools.php',
    'ezcWebdavLockTransport'                            => 'Webdav/plugins/lock/transport.php',
    'ezcWebdavLockUnlockRequestResponseHandler'         => 'Webdav/plugins/lock/handlers/unlock.php',
    'ezcWebdavMakeCollectionRequest'                    => 'Webdav/requests/mkcol.php',
    'ezcWebdavMakeCollectionResponse'                   => 'Webdav/responses/mkcol.php',
    'ezcWebdavMemoryBackend'                            => 'Webdav/backends/memory.php',
    'ezcWebdavMemoryBackendOptions'                     => 'Webdav/options/backend_memory_options.php',
    'ezcWebdavMicrosoftCompatibleTransport'             => 'Webdav/transports/microsoft.php',
    'ezcWebdavMoveRequest'                              => 'Webdav/requests/move.php',
    'ezcWebdavMoveResponse'                             => 'Webdav/responses/move.php',
    'ezcWebdavMultistatusResponse'                      => 'Webdav/responses/multistatus.php',
    'ezcWebdavNamespaceRegistry'                        => 'Webdav/namespace_registry.php',
    'ezcWebdavNautilusCompatibleTransport'              => 'Webdav/transports/nautilus.php',
    'ezcWebdavNautilusPropertyHandler'                  => 'Webdav/transports/property_handlers/nautilus.php',
    'ezcWebdavOptionsRequest'                           => 'Webdav/requests/options.php',
    'ezcWebdavOptionsResponse'                          => 'Webdav/responses/options.php',
    'ezcWebdavOutputResult'                             => 'Webdav/structs/output_result.php',
    'ezcWebdavPluginParameters'                         => 'Webdav/plugin_parameters.php',
    'ezcWebdavPluginRegistry'                           => 'Webdav/plugin_registry.php',
    'ezcWebdavPotentialUriContent'                      => 'Webdav/structs/potential_uri_content.php',
    'ezcWebdavPropFindRequest'                          => 'Webdav/requests/propfind.php',
    'ezcWebdavPropPatchRequest'                         => 'Webdav/requests/proppatch.php',
    'ezcWebdavPropPatchResponse'                        => 'Webdav/responses/proppatch.php',
    'ezcWebdavPropStatResponse'                         => 'Webdav/responses/propstat.php',
    'ezcWebdavPutRequest'                               => 'Webdav/requests/put.php',
    'ezcWebdavPutResponse'                              => 'Webdav/responses/put.php',
    'ezcWebdavRequestLockInfoContent'                   => 'Webdav/plugins/lock/requests/content/lock_info.php',
    'ezcWebdavRequestPropertyBehaviourContent'          => 'Webdav/requests/content/property_behaviour.php',
    'ezcWebdavResource'                                 => 'Webdav/structs/resource.php',
    'ezcWebdavResourceTypeProperty'                     => 'Webdav/properties/resourcetype.php',
    'ezcWebdavServer'                                   => 'Webdav/server.php',
    'ezcWebdavServerConfiguration'                      => 'Webdav/server_configuration.php',
    'ezcWebdavServerConfigurationManager'               => 'Webdav/server_configuration_manager.php',
    'ezcWebdavServerOptions'                            => 'Webdav/options/server.php',
    'ezcWebdavSourceProperty'                           => 'Webdav/properties/source.php',
    'ezcWebdavSourcePropertyLink'                       => 'Webdav/properties/source_link.php',
    'ezcWebdavStringDisplayInformation'                 => 'Webdav/structs/display_information_string.php',
    'ezcWebdavSupportedLockProperty'                    => 'Webdav/plugins/lock/properties/supportedlock.php',
    'ezcWebdavUnlockRequest'                            => 'Webdav/plugins/lock/requests/unlock.php',
    'ezcWebdavUnlockResponse'                           => 'Webdav/plugins/lock/responses/unlock.php',
    'ezcWebdavXmlDisplayInformation'                    => 'Webdav/structs/display_information_xml.php',
    'ezcWebdavXmlTool'                                  => 'Webdav/tools/xml.php',
);
?>
