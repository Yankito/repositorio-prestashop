<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEugIBADANBgkqhkiG9w0BAQEFAASCBKQwggSgAgEAAoIBAQCjCet/YuOSK3rh'."\n".'zTMr0iHw/iHbAOqeHFh79ndfS2qWzuwAzYtwzhuJ4zpqH+iU2WgOb8B80h/eJad0'."\n".'wHk0xkJJ6muFsYQ/E4P60rkigrHWR66B5MYutG7zsO02PYZp3egPqKXHV76mDDDp'."\n".'gfh7gPoWEaaCKZNBQl1lBrPPDOapojhKTE75sSCtvWKM4R8Hr33h/v0iVq7ugnRO'."\n".'NNHCd15m10OfmI9Tl12jkyJ3yoJq4VKHQvUbwNShZnZ0pGW7Bx4w9/BlTsZePuTA'."\n".'mNeJSbrZCD+uc0grEcCYK+mgNQ1oPm0VI3UPOwSd8dRTMIuXJluo0gA8Q2BKhTA4'."\n".'FFUDThc/AgMBAAECggEATtzLBWS7iGYwu81Knb04fr4meS1Bz3YNlPS8fCNaLRVt'."\n".'EdxawRdpObLofBHwKiPZUfZbSOVI1ecnz3EUj+MAiIl0NgiOXAZgFjDcrWVDiU9G'."\n".'CX20IT5U1tpze4OaI1Zb3Esq2ThHt0D5XdHo9DCIh6lE/fwHRw9HZsktq47lehJ/'."\n".'dwXZ/qMoU7ljDXEB5mVU8YEHRvd5Q1QKOP4uLmnyiZ5AVtD6vblKsBnzF8bK4vzZ'."\n".'GzyctkWJc2YiH2yNzZ1IzTwRVGVeG3vr12LsykFBIUG7tbbQLuNMSIv//obi94hO'."\n".'s/zO7ytp87/iTOqaUGil7S14J+6mXcV7faTwlTM43QKBgQDiJHjIaHhNvkyatXxP'."\n".'mjbEVjLi8J0eStL5D+G7HhSTydXB5G8GKL9irhztUv7g9jUQEnGx+HZQP6G7TneE'."\n".'Tb19uqB4MuM1z8JbQ9GI8ca5Mxdue1qv7bknjFLPNzvHtcgSW1pbzFObktESO83o'."\n".'VcyXe5Ye0KN06Nn4ZWa5W1eXWwKBgQC4kJEXe9MRYG2nNI6owiui9suAoQZJA734'."\n".'/wROQgY2n6oZ3c/fRYiASqZjlJ5zVXaA89tQD0o2ZYLGB89IYZLBg/ZS41esqzw9'."\n".'nWXQJ7BU4hWut5/QJTApeax3DYwGnH+hn3eVmexxyLIMswCnodR2ySdwRSqSHVrK'."\n".'jR2bQE5o7QJ/UwkRUIULp4A4oJYDDzeQ5IbCKJIxHu5aiRlLyWlCJQH3ezplid1s'."\n".'aM+Fz56p9/Bvi3c6SB7zUoQK3rvxJqNk8MWWJoyI4TloJBrC1YXxcg9Qi0DAC9k+'."\n".'I0djILMnQC1/ST5B73MXQAiovAk5khXvCbBXbvktC8B0SMDy9xyTDQKBgCNfyf9X'."\n".'Q0gUVE/02dbsiFKOvMhllH/QEMw1jIy3SNuVVJPqmJnxiM0WAbgaVxhB7BmhI4q/'."\n".'s3ijkiIEgy0bTnZ6pW6Tlk1I8J3amhYAVWKfhopbNW0+g3GfmXekCA+IVUoT92ab'."\n".'/t58GewnLtvyP3eY7E8vYo5ow+sIiwEjnSOtAoGAK9+mEIfAjdehZbvHc50sX7dg'."\n".'vA3WDijDWXT1ZSfWxTHl35ml66bZ17NwKX4kaLgi/l68sr0uoU8pgDbMCYeatu/D'."\n".'ra87MCOSedy/lex8h15YDt9BSorGoSVmjUQyRsOkNpE6ALqHa9lyeAqcsg+utchc'."\n".'AGENH94WWOcrXbyrtaQ='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000a0e28eaf54b1918d183dd489ae30cb11c0afb106d5ee70bb2711a72f3dab008c4d1a8fcb686be03660fe8a764ea80603693a05941993c6519a74ac8c06418376');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);