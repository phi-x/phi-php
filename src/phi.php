<?php

use Phi\Backtrace;
use Phi\FtpClient;
use Phi\FtpDotenv;
use Phi\FtpServer;
use Phi\Map;

if (! function_exists('phi_backtrace')) {
    function phi_backtrace(int $flags = Backtrace::DEFAULT_FLAGS, int $reset = Backtrace::DEFAULT_RESET, int $limit = Backtrace::DEFAULT_LIMIT): Backtrace
    {
        return new Backtrace($flags, ++$reset, $limit === 0 ? $limit : ++$limit);
    }
}

if (! function_exists('phi_map')) {
    function phi_map(string $key_type, string $value_type): Map
    {
        return new Map($key_type, $value_type);
    }
}

function parse_cmd(int $argc, array $argv): array
{
    if ($argc !== count($argv)) {
        exit_error('Wrong arguments count');
    }

    if ($argc < 1) {
        exit_error('No argument given');
    }

    return ['name' => array_shift($argv), 'args' => $argv];
}

function cmd_route(string $name, ?callable $action = null): ?callable
{
    static $routes;
    if (isset($action)) {
        return $routes[$name] = $action;
    }

    $name = realpath($name);
    $name = substr($name, strlen(getcwd()));
    $name = trim($name, DIRECTORY_SEPARATOR);

    if ($routes) {
        foreach ($routes as $pattern => $action) {
            if (preg_match("/^$pattern$/", $name, $matches)) {
                return $action;
            }
        }
    }

    return null;
}

function execute_cmd(string $name, array $args): mixed
{
    if ($process = cmd_route($name)) {
        return $process(...$args);
    }
    exit_error("Command $name not found");
}

function exit_error(string $message, mixed ...$args): void
{
    echo_error($message, ...$args);
    exit(1);
}

function echo_error(string $message, mixed ...$args): void
{
    send(STDOUT, $message, ...$args);
}

function send($stream, $message, mixed ...$args): void
{
    $message .= PHP_EOL;

    if (empty($args)) {
        fwrite($stream, $message);
    } else {
        fprintf($stream, $message, ...$args);
    }
}

if (! function_exists('ftp_client')) {
    function ftp_client(FtpServer $server, string $username, string $password): FtpClient
    {
        return new FtpClient($server, $username, $password);
    }
}

if (! function_exists('ftp_server')) {
    function ftp_server(string $host, int $port = 21, int $timeout = 90, bool $secure = false): FtpServer
    {
        return new FtpServer($host, $port, $timeout, $secure);
    }
}

if (! \function_exists('env')) {
    function env(?string $key = null, mixed $default = null): mixed
    {
        static $env;
        if (! isset($env)) {
            $env = new FtpDotenv;
        }

        return isset($key) ? $env->get($key, $default) : $env;
    }
}

if (! \function_exists('ftp_env')) {
    function ftp_env(?string $key = null, mixed $default = null): mixed
    {
        static $env;
        if (! isset($env)) {
            $env = new FtpDotenv;
        }

        return isset($key) ? $env->get($key, $default) : $env;
    }
}
