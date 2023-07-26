<?php
// config/routes.php
use App\Controller\UserController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;


return function (RoutingConfigurator $routes): void {
    $routes->add('app_user','/webApp')
        // the controller value has the format [controller_class, method_name]
        ->controller([UserController::class, 'index']);

    $routes->add('users_list','/users')
    // the controller value has the format [controller_class, method_name]
    ->controller([UserController::class, 'list']);


    $routes->add('addnewuser','/add')
    ->controller([UserController::class, 'show'])
    ->methods(['GET'])
    ;

    $routes->add('insertuser','/adduser')
    ->controller([UserController::class, 'insert'])
    ->methods(['POST'])
    ;

    $routes->add('edituser','/edit/{id}')
    ->controller([UserController::class, 'edit'])
    ->methods(['GET'])
    ;

    $routes->add('updateuser','/updateuser/{id}')
    ->controller([UserController::class, 'store'])
    ->methods(['POST'])
    ;
    // the controller value has the format [controller_class, method_name]
   
    
};



