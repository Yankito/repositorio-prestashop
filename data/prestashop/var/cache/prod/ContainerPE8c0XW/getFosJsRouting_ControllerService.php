<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_js_routing.controller' shared service.

return $this->services['fos_js_routing.controller'] = new \FOS\JsRoutingBundle\Controller\Controller(($this->services['fos_js_routing.serializer'] ?? $this->load('getFosJsRouting_SerializerService.php')), ($this->services['fos_js_routing.extractor'] ?? $this->load('getFosJsRouting_ExtractorService.php')), $this->parameters['fos_js_routing.cache_control'], false);
