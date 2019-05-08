<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/appointment' => [[['_route' => 'appointment_index', '_controller' => 'App\\Controller\\AppointmentController::index'], null, ['GET' => 0], null, true, false, null]],
            '/appointment/new' => [[['_route' => 'appointment_new', '_controller' => 'App\\Controller\\AppointmentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/upload_csv' => [[['_route' => 'upload_csv', '_controller' => 'App\\Controller\\CsvUploadController::uploadFile'], null, null, null, false, false, null]],
            '/customer' => [[['_route' => 'customer_index', '_controller' => 'App\\Controller\\CustomerController::index'], null, ['GET' => 0], null, true, false, null]],
            '/customer/new' => [[['_route' => 'customer_new', '_controller' => 'App\\Controller\\CustomerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/' => [[['_route' => 'whatson_index', '_controller' => 'App\\Controller\\DefaultController::index'], null, ['GET' => 0], null, false, false, null]],
            '/place' => [[['_route' => 'place_index', '_controller' => 'App\\Controller\\PlaceController::index'], null, ['GET' => 0], null, true, false, null]],
            '/place/new' => [[['_route' => 'place_new', '_controller' => 'App\\Controller\\PlaceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
            '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/profile' => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null]],
            '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
            '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
            '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
            '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
            '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
            '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
            '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/appointment/([^/]++)(?'
                        .'|(*:193)'
                        .'|/edit(*:206)'
                        .'|(*:214)'
                    .')'
                    .'|/customer/([^/]++)(?'
                        .'|(*:244)'
                        .'|/edit(*:257)'
                        .'|(*:265)'
                    .')'
                    .'|/place/([^/]++)(?'
                        .'|(*:292)'
                        .'|/edit(*:305)'
                        .'|(*:313)'
                    .')'
                    .'|/re(?'
                        .'|gister/confirm/([^/]++)(*:351)'
                        .'|setting/reset/([^/]++)(*:381)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            193 => [[['_route' => 'appointment_show', '_controller' => 'App\\Controller\\AppointmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            206 => [[['_route' => 'appointment_edit', '_controller' => 'App\\Controller\\AppointmentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            214 => [[['_route' => 'appointment_delete', '_controller' => 'App\\Controller\\AppointmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            244 => [[['_route' => 'customer_show', '_controller' => 'App\\Controller\\CustomerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            257 => [[['_route' => 'customer_edit', '_controller' => 'App\\Controller\\CustomerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            265 => [[['_route' => 'customer_delete', '_controller' => 'App\\Controller\\CustomerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            292 => [[['_route' => 'place_show', '_controller' => 'App\\Controller\\PlaceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            305 => [[['_route' => 'place_edit', '_controller' => 'App\\Controller\\PlaceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            313 => [[['_route' => 'place_delete', '_controller' => 'App\\Controller\\PlaceController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            351 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
            381 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        ];
    }
}
