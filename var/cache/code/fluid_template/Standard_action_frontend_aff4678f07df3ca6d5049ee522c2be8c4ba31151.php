<?php

class Standard_action_frontend_aff4678f07df3ca6d5049ee522c2be8c4ba31151 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return $renderingContext->getVariableProvider()->getAll();
};
$arguments1 = array();
$arguments1['title'] = NULL;
$arguments1['maxDepth'] = 8;
$arguments1['plainText'] = false;
$arguments1['ansiColors'] = false;
$arguments1['inline'] = false;
$arguments1['blacklistedClassNames'] = NULL;
$arguments1['blacklistedPropertyNames'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['aria'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['as'] = NULL;
$arguments4['crossorigin'] = NULL;
$arguments4['disabled'] = NULL;
$arguments4['href'] = NULL;
$arguments4['hreflang'] = NULL;
$arguments4['importance'] = NULL;
$arguments4['integrity'] = NULL;
$arguments4['media'] = NULL;
$arguments4['referrerpolicy'] = NULL;
$arguments4['rel'] = NULL;
$arguments4['sizes'] = NULL;
$arguments4['type'] = NULL;
$arguments4['nonce'] = NULL;
$arguments4['identifier'] = NULL;
$arguments4['priority'] = false;
$arguments4['identifier'] = 'content-block-twitch_stream_teaser-be';
$arguments4['href'] = 'CB:twitch_stream_teaser/dist/EditorPreview.css';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['additionalAttributes'] = NULL;
$arguments6['data'] = NULL;
$arguments6['aria'] = NULL;
$arguments6['class'] = NULL;
$arguments6['dir'] = NULL;
$arguments6['id'] = NULL;
$arguments6['lang'] = NULL;
$arguments6['style'] = NULL;
$arguments6['title'] = NULL;
$arguments6['accesskey'] = NULL;
$arguments6['tabindex'] = NULL;
$arguments6['onclick'] = NULL;
$arguments6['as'] = NULL;
$arguments6['crossorigin'] = NULL;
$arguments6['disabled'] = NULL;
$arguments6['href'] = NULL;
$arguments6['hreflang'] = NULL;
$arguments6['importance'] = NULL;
$arguments6['integrity'] = NULL;
$arguments6['media'] = NULL;
$arguments6['referrerpolicy'] = NULL;
$arguments6['rel'] = NULL;
$arguments6['sizes'] = NULL;
$arguments6['type'] = NULL;
$arguments6['nonce'] = NULL;
$arguments6['identifier'] = NULL;
$arguments6['priority'] = false;
$arguments6['identifier'] = 'content-block-twitch_stream_teaser';
$arguments6['href'] = 'CB:twitch_stream_teaser/dist/Frontend.css';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['additionalAttributes'] = NULL;
$arguments8['data'] = NULL;
$arguments8['aria'] = NULL;
$arguments8['class'] = NULL;
$arguments8['dir'] = NULL;
$arguments8['id'] = NULL;
$arguments8['lang'] = NULL;
$arguments8['style'] = NULL;
$arguments8['title'] = NULL;
$arguments8['accesskey'] = NULL;
$arguments8['tabindex'] = NULL;
$arguments8['onclick'] = NULL;
$arguments8['async'] = NULL;
$arguments8['crossorigin'] = NULL;
$arguments8['defer'] = NULL;
$arguments8['integrity'] = NULL;
$arguments8['nomodule'] = NULL;
$arguments8['nonce'] = NULL;
$arguments8['referrerpolicy'] = NULL;
$arguments8['src'] = NULL;
$arguments8['type'] = NULL;
$arguments8['identifier'] = NULL;
$arguments8['priority'] = false;
$arguments8['identifier'] = 'content-block-twitch_stream_teaser';
$arguments8['src'] = 'CB:twitch_stream_teaser/dist/Frontend.js';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '

        <div id="c';
$array10 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array10)]);

$output0 .= '" class="twitch_stream_teaser">
            <div class="twitch_stream_inner">
                <h2 class="twitch_stream_headline"></h2>
                <div class="twitch_stream_include">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array13 = array (
);return $renderingContext->getVariableProvider()->getByPath('twitch.code', $array13);
};
$arguments11 = array();
$arguments11['value'] = NULL;

$output0 .= isset($arguments11['value']) ? $arguments11['value'] : $renderChildrenClosure12();

$output0 .= '
                </div>
            </div>
        </div>

    ';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output14 = '';

$output14 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['name'] = NULL;
$arguments15['name'] = 'Default';

$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output14 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return $renderingContext->getVariableProvider()->getAll();
};
$arguments20 = array();
$arguments20['title'] = NULL;
$arguments20['maxDepth'] = 8;
$arguments20['plainText'] = false;
$arguments20['ansiColors'] = false;
$arguments20['inline'] = false;
$arguments20['blacklistedClassNames'] = NULL;
$arguments20['blacklistedPropertyNames'] = NULL;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['aria'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['as'] = NULL;
$arguments23['crossorigin'] = NULL;
$arguments23['disabled'] = NULL;
$arguments23['href'] = NULL;
$arguments23['hreflang'] = NULL;
$arguments23['importance'] = NULL;
$arguments23['integrity'] = NULL;
$arguments23['media'] = NULL;
$arguments23['referrerpolicy'] = NULL;
$arguments23['rel'] = NULL;
$arguments23['sizes'] = NULL;
$arguments23['type'] = NULL;
$arguments23['nonce'] = NULL;
$arguments23['identifier'] = NULL;
$arguments23['priority'] = false;
$arguments23['identifier'] = 'content-block-twitch_stream_teaser-be';
$arguments23['href'] = 'CB:twitch_stream_teaser/dist/EditorPreview.css';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output19 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['aria'] = NULL;
$arguments25['class'] = NULL;
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$arguments25['as'] = NULL;
$arguments25['crossorigin'] = NULL;
$arguments25['disabled'] = NULL;
$arguments25['href'] = NULL;
$arguments25['hreflang'] = NULL;
$arguments25['importance'] = NULL;
$arguments25['integrity'] = NULL;
$arguments25['media'] = NULL;
$arguments25['referrerpolicy'] = NULL;
$arguments25['rel'] = NULL;
$arguments25['sizes'] = NULL;
$arguments25['type'] = NULL;
$arguments25['nonce'] = NULL;
$arguments25['identifier'] = NULL;
$arguments25['priority'] = false;
$arguments25['identifier'] = 'content-block-twitch_stream_teaser';
$arguments25['href'] = 'CB:twitch_stream_teaser/dist/Frontend.css';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output19 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['additionalAttributes'] = NULL;
$arguments27['data'] = NULL;
$arguments27['aria'] = NULL;
$arguments27['class'] = NULL;
$arguments27['dir'] = NULL;
$arguments27['id'] = NULL;
$arguments27['lang'] = NULL;
$arguments27['style'] = NULL;
$arguments27['title'] = NULL;
$arguments27['accesskey'] = NULL;
$arguments27['tabindex'] = NULL;
$arguments27['onclick'] = NULL;
$arguments27['async'] = NULL;
$arguments27['crossorigin'] = NULL;
$arguments27['defer'] = NULL;
$arguments27['integrity'] = NULL;
$arguments27['nomodule'] = NULL;
$arguments27['nonce'] = NULL;
$arguments27['referrerpolicy'] = NULL;
$arguments27['src'] = NULL;
$arguments27['type'] = NULL;
$arguments27['identifier'] = NULL;
$arguments27['priority'] = false;
$arguments27['identifier'] = 'content-block-twitch_stream_teaser';
$arguments27['src'] = 'CB:twitch_stream_teaser/dist/Frontend.js';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output19 .= '

        <div id="c';
$array29 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array29)]);

$output19 .= '" class="twitch_stream_teaser">
            <div class="twitch_stream_inner">
                <h2 class="twitch_stream_headline"></h2>
                <div class="twitch_stream_include">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$array32 = array (
);return $renderingContext->getVariableProvider()->getByPath('twitch.code', $array32);
};
$arguments30 = array();
$arguments30['value'] = NULL;

$output19 .= isset($arguments30['value']) ? $arguments30['value'] : $renderChildrenClosure31();

$output19 .= '
                </div>
            </div>
        </div>

    ';
return $output19;
};
$arguments17 = array();
$arguments17['name'] = NULL;
$arguments17['name'] = 'Main';

$output14 .= NULL;

$output14 .= '

';

return $output14;
}


}
#