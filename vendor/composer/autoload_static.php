<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d49971e1822c5c5fbcdbcd9b5bd3e20
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'T' => 
        array (
            'TestIoc\\' => 8,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'F' => 
        array (
            'Framework\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'TestIoc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/framework',
        ),
    );

    public static $classMap = array (
        'Framework\\App' => __DIR__ . '/../..' . '/framework/App.php',
        'Framework\\Auth\\Login' => __DIR__ . '/../..' . '/framework/Auth/Login.php',
        'Framework\\Facades\\LoginFacade' => __DIR__ . '/../..' . '/framework/Facades/LoginFacade.php',
        'Framework\\Facades\\RouterFacade' => __DIR__ . '/../..' . '/framework/Facades/RouterFacade.php',
        'Framework\\Factory\\SessionFactory' => __DIR__ . '/../..' . '/framework/Factory/SessionFactory.php',
        'Framework\\Injectables\\Injector' => __DIR__ . '/../..' . '/framework/Injectables/Injector.php',
        'Framework\\Injectables\\LoginComponent' => __DIR__ . '/../..' . '/framework/Injectables/LoginComponent.php',
        'Framework\\Injectables\\RouterComponent' => __DIR__ . '/../..' . '/framework/Injectables/RouterComponent.php',
        'Framework\\Injectables\\WhoopsComponent' => __DIR__ . '/../..' . '/framework/Injectables/WhoopsComponent.php',
        'Framework\\Interfaces\\ComponentInterface' => __DIR__ . '/../..' . '/framework/Interfaces/ComponentInterface.php',
        'Framework\\Interfaces\\RouterRuleInterface' => __DIR__ . '/../..' . '/framework/Interfaces/RouterRuleInterface.php',
        'Framework\\RouterRules\\LoginRule' => __DIR__ . '/../..' . '/framework/RouterRules/LoginRule.php',
        'Framework\\Router\\GateKeeper' => __DIR__ . '/../..' . '/framework/Router/GateKeeper.php',
        'Framework\\Router\\Request' => __DIR__ . '/../..' . '/framework/Router/Request.php',
        'Framework\\Router\\Router' => __DIR__ . '/../..' . '/framework/Router/Router.php',
        'Framework\\Sessions\\Session' => __DIR__ . '/../..' . '/framework/Sessions/Session.php',
        'Framework\\Sessions\\UsernameSession' => __DIR__ . '/../..' . '/framework/Sessions/UsernameSession.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'TestIoc\\App' => __DIR__ . '/../..' . '/src/App.php',
        'TestIoc\\Client' => __DIR__ . '/../..' . '/src/Client.php',
        'TestIoc\\Components\\HouseComponent' => __DIR__ . '/../..' . '/src/Components/HouseComponent.php',
        'TestIoc\\Controllers\\IndexController' => __DIR__ . '/../..' . '/src/Controllers/IndexController.php',
        'TestIoc\\Engines\\Engine' => __DIR__ . '/../..' . '/src/Engines/Engine.php',
        'TestIoc\\Fuel' => __DIR__ . '/../..' . '/src/Fuel.php',
        'TestIoc\\House' => __DIR__ . '/../..' . '/src/House.php',
        'Whoops\\Exception\\ErrorException' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/ErrorException.php',
        'Whoops\\Exception\\Formatter' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Formatter.php',
        'Whoops\\Exception\\Frame' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Frame.php',
        'Whoops\\Exception\\FrameCollection' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/FrameCollection.php',
        'Whoops\\Exception\\Inspector' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Exception/Inspector.php',
        'Whoops\\Handler\\CallbackHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/CallbackHandler.php',
        'Whoops\\Handler\\Handler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/Handler.php',
        'Whoops\\Handler\\HandlerInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/HandlerInterface.php',
        'Whoops\\Handler\\JsonResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/JsonResponseHandler.php',
        'Whoops\\Handler\\PlainTextHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PlainTextHandler.php',
        'Whoops\\Handler\\PrettyPageHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/PrettyPageHandler.php',
        'Whoops\\Handler\\XmlResponseHandler' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Handler/XmlResponseHandler.php',
        'Whoops\\Run' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Run.php',
        'Whoops\\RunInterface' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/RunInterface.php',
        'Whoops\\Util\\HtmlDumperOutput' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/HtmlDumperOutput.php',
        'Whoops\\Util\\Misc' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/Misc.php',
        'Whoops\\Util\\SystemFacade' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/SystemFacade.php',
        'Whoops\\Util\\TemplateHelper' => __DIR__ . '/..' . '/filp/whoops/src/Whoops/Util/TemplateHelper.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d49971e1822c5c5fbcdbcd9b5bd3e20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d49971e1822c5c5fbcdbcd9b5bd3e20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d49971e1822c5c5fbcdbcd9b5bd3e20::$classMap;

        }, null, ClassLoader::class);
    }
}
