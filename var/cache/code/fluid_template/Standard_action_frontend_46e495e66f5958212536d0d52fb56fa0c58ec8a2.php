<?php

class Standard_action_frontend_46e495e66f5958212536d0d52fb56fa0c58ec8a2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['aria'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['as'] = NULL;
$arguments1['crossorigin'] = NULL;
$arguments1['disabled'] = NULL;
$arguments1['href'] = NULL;
$arguments1['hreflang'] = NULL;
$arguments1['importance'] = NULL;
$arguments1['integrity'] = NULL;
$arguments1['media'] = NULL;
$arguments1['referrerpolicy'] = NULL;
$arguments1['rel'] = NULL;
$arguments1['sizes'] = NULL;
$arguments1['type'] = NULL;
$arguments1['nonce'] = NULL;
$arguments1['identifier'] = NULL;
$arguments1['priority'] = false;
$arguments1['identifier'] = 'content-block-twitch_stream_teaser-be';
$arguments1['href'] = 'CB:twitch_stream_teaser/dist/EditorPreview.css';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['additionalAttributes'] = NULL;
$arguments3['data'] = NULL;
$arguments3['aria'] = NULL;
$arguments3['class'] = NULL;
$arguments3['dir'] = NULL;
$arguments3['id'] = NULL;
$arguments3['lang'] = NULL;
$arguments3['style'] = NULL;
$arguments3['title'] = NULL;
$arguments3['accesskey'] = NULL;
$arguments3['tabindex'] = NULL;
$arguments3['onclick'] = NULL;
$arguments3['as'] = NULL;
$arguments3['crossorigin'] = NULL;
$arguments3['disabled'] = NULL;
$arguments3['href'] = NULL;
$arguments3['hreflang'] = NULL;
$arguments3['importance'] = NULL;
$arguments3['integrity'] = NULL;
$arguments3['media'] = NULL;
$arguments3['referrerpolicy'] = NULL;
$arguments3['rel'] = NULL;
$arguments3['sizes'] = NULL;
$arguments3['type'] = NULL;
$arguments3['nonce'] = NULL;
$arguments3['identifier'] = NULL;
$arguments3['priority'] = false;
$arguments3['identifier'] = 'content-block-twitch_stream_teaser';
$arguments3['href'] = 'CB:twitch_stream_teaser/dist/Frontend.css';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['additionalAttributes'] = NULL;
$arguments5['data'] = NULL;
$arguments5['aria'] = NULL;
$arguments5['class'] = NULL;
$arguments5['dir'] = NULL;
$arguments5['id'] = NULL;
$arguments5['lang'] = NULL;
$arguments5['style'] = NULL;
$arguments5['title'] = NULL;
$arguments5['accesskey'] = NULL;
$arguments5['tabindex'] = NULL;
$arguments5['onclick'] = NULL;
$arguments5['async'] = NULL;
$arguments5['crossorigin'] = NULL;
$arguments5['defer'] = NULL;
$arguments5['integrity'] = NULL;
$arguments5['nomodule'] = NULL;
$arguments5['nonce'] = NULL;
$arguments5['referrerpolicy'] = NULL;
$arguments5['src'] = NULL;
$arguments5['type'] = NULL;
$arguments5['identifier'] = NULL;
$arguments5['priority'] = false;
$arguments5['identifier'] = 'content-block-twitch_stream_teaser';
$arguments5['src'] = 'CB:twitch_stream_teaser/dist/Frontend.js';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '

        <div id="c';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array7)]);

$output0 .= '" class="twitch_stream_teaser">
            <div class="twitch_stream_inner">
                <h2 class="twitch_stream_headline">';
$array8 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array8)]);

$output0 .= '</h2>
                <div class="twitch_stream_include">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$array11 = array (
);return $renderingContext->getVariableProvider()->getByPath('twitch_code', $array11);
};
$arguments9 = array();
$arguments9['title'] = NULL;
$arguments9['maxDepth'] = 8;
$arguments9['plainText'] = false;
$arguments9['ansiColors'] = false;
$arguments9['inline'] = false;
$arguments9['blacklistedClassNames'] = NULL;
$arguments9['blacklistedPropertyNames'] = NULL;

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$array14 = array (
);return $renderingContext->getVariableProvider()->getByPath('twitch_code', $array14);
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['aria'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['as'] = NULL;
$arguments21['crossorigin'] = NULL;
$arguments21['disabled'] = NULL;
$arguments21['href'] = NULL;
$arguments21['hreflang'] = NULL;
$arguments21['importance'] = NULL;
$arguments21['integrity'] = NULL;
$arguments21['media'] = NULL;
$arguments21['referrerpolicy'] = NULL;
$arguments21['rel'] = NULL;
$arguments21['sizes'] = NULL;
$arguments21['type'] = NULL;
$arguments21['nonce'] = NULL;
$arguments21['identifier'] = NULL;
$arguments21['priority'] = false;
$arguments21['identifier'] = 'content-block-twitch_stream_teaser-be';
$arguments21['href'] = 'CB:twitch_stream_teaser/dist/EditorPreview.css';

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
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
$arguments23['identifier'] = 'content-block-twitch_stream_teaser';
$arguments23['href'] = 'CB:twitch_stream_teaser/dist/Frontend.css';

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output20 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
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
$arguments25['async'] = NULL;
$arguments25['crossorigin'] = NULL;
$arguments25['defer'] = NULL;
$arguments25['integrity'] = NULL;
$arguments25['nomodule'] = NULL;
$arguments25['nonce'] = NULL;
$arguments25['referrerpolicy'] = NULL;
$arguments25['src'] = NULL;
$arguments25['type'] = NULL;
$arguments25['identifier'] = NULL;
$arguments25['priority'] = false;
$arguments25['identifier'] = 'content-block-twitch_stream_teaser';
$arguments25['src'] = 'CB:twitch_stream_teaser/dist/Frontend.js';

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output20 .= '

        <div id="c';
$array27 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array27)]);

$output20 .= '" class="twitch_stream_teaser">
            <div class="twitch_stream_inner">
                <h2 class="twitch_stream_headline">';
$array28 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array28)]);

$output20 .= '</h2>
                <div class="twitch_stream_include">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array31 = array (
);return $renderingContext->getVariableProvider()->getByPath('twitch_code', $array31);
};
$arguments29 = array();
$arguments29['title'] = NULL;
$arguments29['maxDepth'] = 8;
$arguments29['plainText'] = false;
$arguments29['ansiColors'] = false;
$arguments29['inline'] = false;
$arguments29['blacklistedClassNames'] = NULL;
$arguments29['blacklistedPropertyNames'] = NULL;

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output20 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('twitch_code', $array34);
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