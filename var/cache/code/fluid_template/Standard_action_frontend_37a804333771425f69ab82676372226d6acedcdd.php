<?php

class Standard_action_frontend_37a804333771425f69ab82676372226d6acedcdd extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
                <h2 class="twitch_stream_headline">';
$array11 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array11)]);

$output0 .= '</h2>
                <div class="twitch_stream_include">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$array14 = array (
);return $renderingContext->getVariableProvider()->getByPath('twitch.code', $array14);
};
$arguments12 = array();
$arguments12['value'] = NULL;

$output0 .= isset($arguments12['value']) ? $arguments12['value'] : $renderChildrenClosure13();

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
$output15 = '';

$output15 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['name'] = NULL;
$arguments16['name'] = 'Default';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output15 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return $renderingContext->getVariableProvider()->getAll();
};
$arguments21 = array();
$arguments21['title'] = NULL;
$arguments21['maxDepth'] = 8;
$arguments21['plainText'] = false;
$arguments21['ansiColors'] = false;
$arguments21['inline'] = false;
$arguments21['blacklistedClassNames'] = NULL;
$arguments21['blacklistedPropertyNames'] = NULL;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['additionalAttributes'] = NULL;
$arguments24['data'] = NULL;
$arguments24['aria'] = NULL;
$arguments24['class'] = NULL;
$arguments24['dir'] = NULL;
$arguments24['id'] = NULL;
$arguments24['lang'] = NULL;
$arguments24['style'] = NULL;
$arguments24['title'] = NULL;
$arguments24['accesskey'] = NULL;
$arguments24['tabindex'] = NULL;
$arguments24['onclick'] = NULL;
$arguments24['as'] = NULL;
$arguments24['crossorigin'] = NULL;
$arguments24['disabled'] = NULL;
$arguments24['href'] = NULL;
$arguments24['hreflang'] = NULL;
$arguments24['importance'] = NULL;
$arguments24['integrity'] = NULL;
$arguments24['media'] = NULL;
$arguments24['referrerpolicy'] = NULL;
$arguments24['rel'] = NULL;
$arguments24['sizes'] = NULL;
$arguments24['type'] = NULL;
$arguments24['nonce'] = NULL;
$arguments24['identifier'] = NULL;
$arguments24['priority'] = false;
$arguments24['identifier'] = 'content-block-twitch_stream_teaser-be';
$arguments24['href'] = 'CB:twitch_stream_teaser/dist/EditorPreview.css';

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output20 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['aria'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['as'] = NULL;
$arguments26['crossorigin'] = NULL;
$arguments26['disabled'] = NULL;
$arguments26['href'] = NULL;
$arguments26['hreflang'] = NULL;
$arguments26['importance'] = NULL;
$arguments26['integrity'] = NULL;
$arguments26['media'] = NULL;
$arguments26['referrerpolicy'] = NULL;
$arguments26['rel'] = NULL;
$arguments26['sizes'] = NULL;
$arguments26['type'] = NULL;
$arguments26['nonce'] = NULL;
$arguments26['identifier'] = NULL;
$arguments26['priority'] = false;
$arguments26['identifier'] = 'content-block-twitch_stream_teaser';
$arguments26['href'] = 'CB:twitch_stream_teaser/dist/Frontend.css';

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output20 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['aria'] = NULL;
$arguments28['class'] = NULL;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['async'] = NULL;
$arguments28['crossorigin'] = NULL;
$arguments28['defer'] = NULL;
$arguments28['integrity'] = NULL;
$arguments28['nomodule'] = NULL;
$arguments28['nonce'] = NULL;
$arguments28['referrerpolicy'] = NULL;
$arguments28['src'] = NULL;
$arguments28['type'] = NULL;
$arguments28['identifier'] = NULL;
$arguments28['priority'] = false;
$arguments28['identifier'] = 'content-block-twitch_stream_teaser';
$arguments28['src'] = 'CB:twitch_stream_teaser/dist/Frontend.js';

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output20 .= '

        <div id="c';
$array30 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array30)]);

$output20 .= '" class="twitch_stream_teaser">
            <div class="twitch_stream_inner">
                <h2 class="twitch_stream_headline">';
$array31 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array31)]);

$output20 .= '</h2>
                <div class="twitch_stream_include">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('twitch.code', $array34);
};
$arguments32 = array();
$arguments32['value'] = NULL;

$output20 .= isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();

$output20 .= '
                </div>
            </div>
        </div>

    ';
return $output20;
};
$arguments18 = array();
$arguments18['name'] = NULL;
$arguments18['name'] = 'Main';

$output15 .= NULL;

$output15 .= '

';

return $output15;
}


}
#