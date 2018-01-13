
Symfony Container Public Services
=================================

 ---------------------------------------------------------------------------------------------------------- -------------------------------------------------------------------------------------------- 
  Service ID                                                                                                 Class name                                                                                  
 ---------------------------------------------------------------------------------------------------------- -------------------------------------------------------------------------------------------- 
  AppBundle\Controller\DefaultController                                                                     AppBundle\Controller\DefaultController                                                      
  AppBundle\Controller\UserController                                                                        AppBundle\Controller\UserController                                                         
  Symfony\Bundle\FrameworkBundle\Controller\RedirectController                                               Symfony\Bundle\FrameworkBundle\Controller\RedirectController                                
  Symfony\Bundle\FrameworkBundle\Controller\TemplateController                                               Symfony\Bundle\FrameworkBundle\Controller\TemplateController                                
  abstract.instanceof.AppBundle\Controller\DefaultController                                                 AppBundle\Controller\DefaultController                                                      
  abstract.instanceof.AppBundle\Controller\UserController                                                    AppBundle\Controller\UserController                                                         
  annotation_reader                                                                                          alias for "annotations.cached_reader"                                                       
  assets.context                                                                                             Symfony\Component\Asset\Context\RequestStackContext                                         
  assets.packages                                                                                            Symfony\Component\Asset\Packages                                                            
  assets.path_package                                                                                        Symfony\Component\Asset\PathPackage                                                         
  assets.static_version_strategy                                                                             Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy                               
  assets.url_package                                                                                         Symfony\Component\Asset\UrlPackage                                                          
  cache.adapter.apcu                                                                                         Symfony\Component\Cache\Adapter\ApcuAdapter                                                 
  cache.adapter.doctrine                                                                                     Symfony\Component\Cache\Adapter\DoctrineAdapter                                             
  cache.adapter.filesystem                                                                                   Symfony\Component\Cache\Adapter\FilesystemAdapter                                           
  cache.adapter.memcached                                                                                    Symfony\Component\Cache\Adapter\MemcachedAdapter                                            
  cache.adapter.psr6                                                                                         Symfony\Component\Cache\Adapter\ProxyAdapter                                                
  cache.adapter.redis                                                                                        Symfony\Component\Cache\Adapter\RedisAdapter                                                
  cache.adapter.system                                                                                       Symfony\Component\Cache\Adapter\AdapterInterface                                            
  cache.app                                                                                                  Symfony\Component\Cache\Adapter\TraceableAdapter                                            
  cache.app_clearer                                                                                          alias for "cache.default_clearer"                                                           
  cache.default_clearer                                                                                      Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer                                  
  cache.global_clearer                                                                                       Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer                                  
  cache.system                                                                                               Symfony\Component\Cache\Adapter\TraceableAdapter                                            
  cache.system_clearer                                                                                       Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer                                  
  cache_clearer                                                                                              Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer                                 
  cache_warmer                                                                                               Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate                               
  config_cache_factory                                                                                       Symfony\Component\Config\ResourceCheckerConfigCacheFactory                                  
  console.command.doctrine_bundle_doctrinecachebundle_command_containscommand                                alias for "doctrine_cache.contains_command"                                                 
  console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand                                  alias for "doctrine_cache.delete_command"                                                   
  console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand                                   alias for "doctrine_cache.flush_command"                                                    
  console.command.doctrine_bundle_doctrinecachebundle_command_statscommand                                   alias for "doctrine_cache.stats_command"                                                    
  console.command.sensiolabs_security_command_securitycheckercommand                                         alias for "sensio_distribution.security_checker.command"                                    
  console.command_loader                                                                                     Symfony\Component\Console\CommandLoader\ContainerCommandLoader                              
  data_collector.dump                                                                                        Symfony\Component\HttpKernel\DataCollector\DumpDataCollector                                
  data_collector.form                                                                                        Symfony\Component\Form\Extension\DataCollector\FormDataCollector                            
  data_collector.form.extractor                                                                              Symfony\Component\Form\Extension\DataCollector\FormDataExtractor                            
  data_collector.request                                                                                     Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector                           
  data_collector.router                                                                                      Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector                            
  database_connection                                                                                        alias for "doctrine.dbal.default_connection"                                                
  debug.argument_resolver                                                                                    Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver                           
  debug.controller_resolver                                                                                  Symfony\Component\HttpKernel\Controller\TraceableControllerResolver                         
  debug.debug_handlers_listener                                                                              Symfony\Component\HttpKernel\EventListener\DebugHandlersListener                            
  debug.dump_listener                                                                                        Symfony\Component\HttpKernel\EventListener\DumpListener                                     
  debug.event_dispatcher                                                                                     Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher                                 
  debug.stopwatch                                                                                            Symfony\Component\Stopwatch\Stopwatch                                                       
  deprecated.form.registry                                                                                   stdClass                                                                                    
  deprecated.form.registry.csrf                                                                              stdClass                                                                                    
  doctrine                                                                                                   Doctrine\Bundle\DoctrineBundle\Registry                                                     
  doctrine.cache_clear_metadata_command                                                                      Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand              
  doctrine.cache_clear_query_cache_command                                                                   Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand                 
  doctrine.cache_clear_result_command                                                                        Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand                
  doctrine.cache_collection_region_command                                                                   Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand                
  doctrine.clear_entity_region_command                                                                       Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand               
  doctrine.clear_query_region_command                                                                        Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand                
  doctrine.database_create_command                                                                           Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand                        
  doctrine.database_drop_command                                                                             Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand                          
  doctrine.database_import_command                                                                           Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand                          
  doctrine.dbal.connection                                                                                   Doctrine\DBAL\Connection                                                                    
  doctrine.dbal.connection_factory                                                                           Doctrine\Bundle\DoctrineBundle\ConnectionFactory                                            
  doctrine.dbal.default_connection                                                                           Doctrine\DBAL\Connection                                                                    
  doctrine.ensure_production_settings_command                                                                Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand        
  doctrine.generate_entities_command                                                                         Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand                      
  doctrine.mapping_convert_command                                                                           Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand                  
  doctrine.mapping_import_command                                                                            Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand                         
  doctrine.mapping_info_command                                                                              Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand                            
  doctrine.orm.default_entity_listener_resolver                                                              Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver                 
  doctrine.orm.default_entity_manager                                                                        Doctrine\ORM\EntityManager                                                                  
  doctrine.orm.default_entity_manager.property_info_extractor                                                Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor                                      
  doctrine.orm.default_listeners.attach_entity_listeners                                                     Doctrine\ORM\Tools\AttachEntityListenersListener                                            
  doctrine.orm.default_manager_configurator                                                                  Doctrine\Bundle\DoctrineBundle\ManagerConfigurator                                          
  doctrine.orm.default_metadata_cache                                                                        alias for "doctrine_cache.providers.doctrine.orm.default_metadata_cache"                    
  doctrine.orm.default_query_cache                                                                           alias for "doctrine_cache.providers.doctrine.orm.default_query_cache"                       
  doctrine.orm.default_result_cache                                                                          alias for "doctrine_cache.providers.doctrine.orm.default_result_cache"                      
  doctrine.orm.entity_manager                                                                                alias for "doctrine.orm.default_entity_manager"                                             
  doctrine.orm.entity_manager.abstract                                                                       Doctrine\ORM\EntityManager                                                                  
  doctrine.orm.manager_configurator.abstract                                                                 Doctrine\Bundle\DoctrineBundle\ManagerConfigurator                                          
  doctrine.orm.validator.unique                                                                              Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator                         
  doctrine.orm.validator_initializer                                                                         Symfony\Bridge\Doctrine\Validator\DoctrineInitializer                                       
  doctrine.query_dql_command                                                                                 Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand                          
  doctrine.query_sql_command                                                                                 Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand                          
  doctrine.schema_create_command                                                                             Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand                    
  doctrine.schema_drop_command                                                                               Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand                      
  doctrine.schema_update_command                                                                             Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand                    
  doctrine.schema_validate_command                                                                           Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand                          
  doctrine_cache.abstract.apc                                                                                Doctrine\Common\Cache\ApcCache                                                              
  doctrine_cache.abstract.apcu                                                                               Doctrine\Common\Cache\ApcuCache                                                             
  doctrine_cache.abstract.array                                                                              Doctrine\Common\Cache\ArrayCache                                                            
  doctrine_cache.abstract.chain                                                                              Doctrine\Common\Cache\ChainCache                                                            
  doctrine_cache.abstract.couchbase                                                                          Doctrine\Common\Cache\CouchbaseCache                                                        
  doctrine_cache.abstract.file_system                                                                        Doctrine\Common\Cache\FilesystemCache                                                       
  doctrine_cache.abstract.memcache                                                                           Doctrine\Common\Cache\MemcacheCache                                                         
  doctrine_cache.abstract.memcached                                                                          Doctrine\Common\Cache\MemcachedCache                                                        
  doctrine_cache.abstract.mongodb                                                                            Doctrine\Common\Cache\MongoDBCache                                                          
  doctrine_cache.abstract.php_file                                                                           Doctrine\Common\Cache\PhpFileCache                                                          
  doctrine_cache.abstract.predis                                                                             Doctrine\Common\Cache\PredisCache                                                           
  doctrine_cache.abstract.redis                                                                              Doctrine\Common\Cache\RedisCache                                                            
  doctrine_cache.abstract.riak                                                                               Doctrine\Common\Cache\RiakCache                                                             
  doctrine_cache.abstract.sqlite3                                                                            Doctrine\Common\Cache\SQLite3Cache                                                          
  doctrine_cache.abstract.void                                                                               Doctrine\Common\Cache\VoidCache                                                             
  doctrine_cache.abstract.wincache                                                                           Doctrine\Common\Cache\WinCacheCache                                                         
  doctrine_cache.abstract.xcache                                                                             Doctrine\Common\Cache\XcacheCache                                                           
  doctrine_cache.abstract.zenddata                                                                           Doctrine\Common\Cache\ZendDataCache                                                         
  doctrine_cache.contains_command                                                                            Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand                                 
  doctrine_cache.delete_command                                                                              Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand                                   
  doctrine_cache.flush_command                                                                               Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand                                    
  doctrine_cache.providers.doctrine.orm.default_metadata_cache                                               Doctrine\Common\Cache\ArrayCache                                                            
  doctrine_cache.providers.doctrine.orm.default_query_cache                                                  Doctrine\Common\Cache\ArrayCache                                                            
  doctrine_cache.providers.doctrine.orm.default_result_cache                                                 Doctrine\Common\Cache\ArrayCache                                                            
  doctrine_cache.stats_command                                                                               Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand                                    
  event_dispatcher                                                                                           alias for "debug.event_dispatcher"                                                          
  file_locator                                                                                               Symfony\Component\HttpKernel\Config\FileLocator                                             
  filesystem                                                                                                 Symfony\Component\Filesystem\Filesystem                                                     
  form.factory                                                                                               Symfony\Component\Form\FormFactory                                                          
  form.registry                                                                                              Symfony\Component\Form\FormRegistry                                                         
  form.resolved_type_factory                                                                                 Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy  
  form.type.birthday                                                                                         Symfony\Component\Form\Extension\Core\Type\BirthdayType                                     
  form.type.button                                                                                           Symfony\Component\Form\Extension\Core\Type\ButtonType                                       
  form.type.checkbox                                                                                         Symfony\Component\Form\Extension\Core\Type\CheckboxType                                     
  form.type.choice                                                                                           Symfony\Component\Form\Extension\Core\Type\ChoiceType                                       
  form.type.collection                                                                                       Symfony\Component\Form\Extension\Core\Type\CollectionType                                   
  form.type.country                                                                                          Symfony\Component\Form\Extension\Core\Type\CountryType                                      
  form.type.currency                                                                                         Symfony\Component\Form\Extension\Core\Type\CurrencyType                                     
  form.type.date                                                                                             Symfony\Component\Form\Extension\Core\Type\DateType                                         
  form.type.datetime                                                                                         Symfony\Component\Form\Extension\Core\Type\DateTimeType                                     
  form.type.email                                                                                            Symfony\Component\Form\Extension\Core\Type\EmailType                                        
  form.type.entity                                                                                           Symfony\Bridge\Doctrine\Form\Type\EntityType                                                
  form.type.file                                                                                             Symfony\Component\Form\Extension\Core\Type\FileType                                         
  form.type.form                                                                                             Symfony\Component\Form\Extension\Core\Type\FormType                                         
  form.type.hidden                                                                                           Symfony\Component\Form\Extension\Core\Type\HiddenType                                       
  form.type.integer                                                                                          Symfony\Component\Form\Extension\Core\Type\IntegerType                                      
  form.type.language                                                                                         Symfony\Component\Form\Extension\Core\Type\LanguageType                                     
  form.type.locale                                                                                           Symfony\Component\Form\Extension\Core\Type\LocaleType                                       
  form.type.money                                                                                            Symfony\Component\Form\Extension\Core\Type\MoneyType                                        
  form.type.number                                                                                           Symfony\Component\Form\Extension\Core\Type\NumberType                                       
  form.type.password                                                                                         Symfony\Component\Form\Extension\Core\Type\PasswordType                                     
  form.type.percent                                                                                          Symfony\Component\Form\Extension\Core\Type\PercentType                                      
  form.type.radio                                                                                            Symfony\Component\Form\Extension\Core\Type\RadioType                                        
  form.type.range                                                                                            Symfony\Component\Form\Extension\Core\Type\RangeType                                        
  form.type.repeated                                                                                         Symfony\Component\Form\Extension\Core\Type\RepeatedType                                     
  form.type.reset                                                                                            Symfony\Component\Form\Extension\Core\Type\ResetType                                        
  form.type.search                                                                                           Symfony\Component\Form\Extension\Core\Type\SearchType                                       
  form.type.submit                                                                                           Symfony\Component\Form\Extension\Core\Type\SubmitType                                       
  form.type.text                                                                                             Symfony\Component\Form\Extension\Core\Type\TextType                                         
  form.type.textarea                                                                                         Symfony\Component\Form\Extension\Core\Type\TextareaType                                     
  form.type.time                                                                                             Symfony\Component\Form\Extension\Core\Type\TimeType                                         
  form.type.timezone                                                                                         Symfony\Component\Form\Extension\Core\Type\TimezoneType                                     
  form.type.url                                                                                              Symfony\Component\Form\Extension\Core\Type\UrlType                                          
  form.type_extension.csrf                                                                                   Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension                            
  form.type_extension.form.http_foundation                                                                   Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension        
  form.type_extension.form.validator                                                                         Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension                  
  form.type_extension.repeated.validator                                                                     Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension              
  form.type_extension.submit.validator                                                                       Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension                
  form.type_extension.upload.validator                                                                       Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension                    
  form.type_guesser.doctrine                                                                                 Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser                                         
  form.type_guesser.validator                                                                                Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser                             
  fragment.handler                                                                                           Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler                 
  fragment.renderer.hinclude                                                                                 Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer                              
  fragment.renderer.inline                                                                                   Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer                                
  http_kernel                                                                                                Symfony\Component\HttpKernel\HttpKernel                                                     
  instanceof.Symfony\Bundle\FrameworkBundle\Controller\Controller.0.AppBundle\Controller\DefaultController   AppBundle\Controller\DefaultController                                                      
  instanceof.Symfony\Bundle\FrameworkBundle\Controller\Controller.0.AppBundle\Controller\UserController      AppBundle\Controller\UserController                                                         
  kernel                                                                                                                                                                                                 
  kernel.class_cache.cache_warmer                                                                            Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer                            
  locale_listener                                                                                            Symfony\Component\HttpKernel\EventListener\LocaleListener                                   
  logger                                                                                                     alias for "monolog.logger"                                                                  
  mailer                                                                                                     alias for "swiftmailer.mailer.default"                                                      
  monolog.activation_strategy.not_found                                                                      Symfony\Bridge\Monolog\Handler\FingersCrossed\NotFoundActivationStrategy                    
  monolog.handler.console                                                                                    Symfony\Bridge\Monolog\Handler\ConsoleHandler                                               
  monolog.handler.fingers_crossed.error_level_activation_strategy                                            Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy                                 
  monolog.handler.main                                                                                       Monolog\Handler\StreamHandler                                                               
  monolog.handler.null_internal                                                                              Monolog\Handler\NullHandler                                                                 
  monolog.handler.server_log                                                                                 Symfony\Bridge\Monolog\Handler\ServerLogHandler                                             
  monolog.logger.cache                                                                                       Symfony\Bridge\Monolog\Logger                                                               
  monolog.logger.console                                                                                     Symfony\Bridge\Monolog\Logger                                                               
  monolog.logger.doctrine                                                                                    Symfony\Bridge\Monolog\Logger                                                               
  monolog.logger.event                                                                                       Symfony\Bridge\Monolog\Logger                                                               
  monolog.logger.php                                                                                         Symfony\Bridge\Monolog\Logger                                                               
  monolog.logger.profiler                                                                                    Symfony\Bridge\Monolog\Logger                                                               
  monolog.logger.request                                                                                     Symfony\Bridge\Monolog\Logger                                                               
  monolog.logger.security                                                                                    Symfony\Bridge\Monolog\Logger                                                               
  monolog.logger_prototype                                                                                   Symfony\Bridge\Monolog\Logger                                                               
  profiler                                                                                                   Symfony\Component\HttpKernel\Profiler\Profiler                                              
  profiler_listener                                                                                          Symfony\Component\HttpKernel\EventListener\ProfilerListener                                 
  property_accessor                                                                                          Symfony\Component\PropertyAccess\PropertyAccessor                                           
  request_stack                                                                                              Symfony\Component\HttpFoundation\RequestStack                                               
  response_listener                                                                                          Symfony\Component\HttpKernel\EventListener\ResponseListener                                 
  router                                                                                                     alias for "router.default"                                                                  
  router_listener                                                                                            Symfony\Component\HttpKernel\EventListener\RouterListener                                   
  routing.loader                                                                                             Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader                                     
  security.authentication.guard_handler                                                                      Symfony\Component\Security\Guard\GuardAuthenticatorHandler                                  
  security.authentication_utils                                                                              Symfony\Component\Security\Http\Authentication\AuthenticationUtils                          
  security.authorization_checker                                                                             Symfony\Component\Security\Core\Authorization\AuthorizationChecker                          
  security.csrf.token_manager                                                                                Symfony\Component\Security\Csrf\CsrfTokenManager                                            
  security.encoder_factory                                                                                   alias for "security.encoder_factory.generic"                                                
  security.firewall                                                                                          alias for "debug.security.firewall"                                                         
  security.firewall.context                                                                                  Symfony\Bundle\SecurityBundle\Security\FirewallContext                                      
  security.firewall.map.context.dev                                                                          Symfony\Bundle\SecurityBundle\Security\FirewallContext                                      
  security.firewall.map.context.main                                                                         Symfony\Bundle\SecurityBundle\Security\FirewallContext                                      
  security.password_encoder                                                                                  alias for "security.user_password_encoder.generic"                                          
  security.rememberme.response_listener                                                                      Symfony\Component\Security\Http\RememberMe\ResponseListener                                 
  security.token_storage                                                                                     Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage                   
  security.validator.user_password                                                                           Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator                 
  sensio_distribution.security_checker                                                                       SensioLabs\Security\SecurityChecker                                                         
  sensio_distribution.security_checker.command                                                               SensioLabs\Security\Command\SecurityCheckerCommand                                          
  sensio_framework_extra.converter.manager                                                                   Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager             
  service_container                                                                                          Symfony\Component\DependencyInjection\ContainerInterface                                    
  services_resetter                                                                                          Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter                           
  session                                                                                                    Symfony\Component\HttpFoundation\Session\Session                                            
  session.handler                                                                                            alias for "session.handler.native_file"                                                     
  session.save_listener                                                                                      Symfony\Component\HttpKernel\EventListener\SaveSessionListener                              
  session.storage                                                                                            alias for "session.storage.native"                                                          
  session.storage.filesystem                                                                                 alias for "session.storage.mock_file"                                                       
  session.storage.native                                                                                     Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage                       
  session.storage.php_bridge                                                                                 Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage                    
  session_listener                                                                                           Symfony\Component\HttpKernel\EventListener\SessionListener                                  
  streamed_response_listener                                                                                 Symfony\Component\HttpKernel\EventListener\StreamedResponseListener                         
  swiftmailer.email_sender.listener                                                                          Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener                          
  swiftmailer.mailer                                                                                         alias for "swiftmailer.mailer.default"                                                      
  swiftmailer.mailer.abstract                                                                                Swift_Mailer                                                                                
  swiftmailer.mailer.default                                                                                 Swift_Mailer                                                                                
  swiftmailer.mailer.default.plugin.messagelogger                                                            Swift_Plugins_MessageLogger                                                                 
  swiftmailer.mailer.default.spool                                                                           alias for "swiftmailer.mailer.default.spool.memory"                                         
  swiftmailer.mailer.default.transport                                                                       alias for "swiftmailer.mailer.default.transport.spool"                                      
  swiftmailer.mailer.default.transport.real                                                                  alias for "swiftmailer.mailer.default.transport.smtp"                                       
  swiftmailer.plugin.messagelogger                                                                           alias for "swiftmailer.mailer.default.plugin.messagelogger"                                 
  swiftmailer.plugin.messagelogger.abstract                                                                  Swift_Plugins_MessageLogger                                                                 
  swiftmailer.spool                                                                                          alias for "swiftmailer.mailer.default.spool.memory"                                         
  swiftmailer.transport                                                                                      alias for "swiftmailer.mailer.default.transport.spool"                                      
  swiftmailer.transport.real                                                                                 alias for "swiftmailer.mailer.default.transport.smtp"                                       
  templating.helper.logout_url                                                                               Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper                             
  templating.helper.security                                                                                 Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper                              
  translator                                                                                                 Symfony\Component\Translation\IdentityTranslator                                            
  twig                                                                                                       Twig\Environment                                                                            
  twig.controller.exception                                                                                  Symfony\Bundle\TwigBundle\Controller\ExceptionController                                    
  twig.controller.preview_error                                                                              Symfony\Bundle\TwigBundle\Controller\PreviewErrorController                                 
  twig.exception_listener                                                                                    Symfony\Component\HttpKernel\EventListener\ExceptionListener                                
  twig.form.renderer                                                                                         Symfony\Component\Form\FormRenderer                                                         
  twig.loader                                                                                                alias for "twig.loader.native_filesystem"                                                   
  twig.profile                                                                                               Twig\Profiler\Profile                                                                       
  twig.runtime.httpkernel                                                                                    Symfony\Bridge\Twig\Extension\HttpKernelRuntime                                             
  twig.translation.extractor                                                                                 Symfony\Bridge\Twig\Translation\TwigExtractor                                               
  uri_signer                                                                                                 Symfony\Component\HttpKernel\UriSigner                                                      
  validate_request_listener                                                                                  Symfony\Component\HttpKernel\EventListener\ValidateRequestListener                          
  validator                                                                                                  alias for "debug.validator"                                                                 
  validator.builder                                                                                          Symfony\Component\Validator\ValidatorBuilderInterface                                       
  validator.email                                                                                            Symfony\Component\Validator\Constraints\EmailValidator                                      
  validator.expression                                                                                       Symfony\Component\Validator\Constraints\ExpressionValidator                                 
  var_dumper.cli_dumper                                                                                      Symfony\Component\VarDumper\Dumper\CliDumper                                                
  var_dumper.cloner                                                                                          Symfony\Component\VarDumper\Cloner\VarCloner                                                
  web_profiler.controller.exception                                                                          Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController                             
  web_profiler.controller.profiler                                                                           Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController                              
  web_profiler.controller.router                                                                             Symfony\Bundle\WebProfilerBundle\Controller\RouterController                                
  web_profiler.debug_toolbar                                                                                 Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener                      
 ---------------------------------------------------------------------------------------------------------- -------------------------------------------------------------------------------------------- 

