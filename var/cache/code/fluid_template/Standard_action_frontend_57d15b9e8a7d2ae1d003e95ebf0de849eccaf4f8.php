<?php

class Standard_action_frontend_57d15b9e8a7d2ae1d003e95ebf0de849eccaf4f8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
            <div class="twitch_stream_inner frame-container-default frame-container">
                <h2 class="twitch_stream_headline">';
$array8 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array8)]);

$output0 .= '</h2>
                <div class="twitch_stream_include">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$array11 = array (
);return $renderingContext->getVariableProvider()->getByPath('twitch_code', $array11);
};
$arguments9 = array();
$arguments9['value'] = NULL;

$output0 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

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
$output12 = '';

$output12 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['name'] = NULL;
$arguments13['name'] = 'Default';

$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output12 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['aria'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['as'] = NULL;
$arguments18['crossorigin'] = NULL;
$arguments18['disabled'] = NULL;
$arguments18['href'] = NULL;
$arguments18['hreflang'] = NULL;
$arguments18['importance'] = NULL;
$arguments18['integrity'] = NULL;
$arguments18['media'] = NULL;
$arguments18['referrerpolicy'] = NULL;
$arguments18['rel'] = NULL;
$arguments18['sizes'] = NULL;
$arguments18['type'] = NULL;
$arguments18['nonce'] = NULL;
$arguments18['identifier'] = NULL;
$arguments18['priority'] = false;
$arguments18['identifier'] = 'content-block-twitch_stream_teaser-be';
$arguments18['href'] = 'CB:twitch_stream_teaser/dist/EditorPreview.css';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['additionalAttributes'] = NULL;
$arguments20['data'] = NULL;
$arguments20['aria'] = NULL;
$arguments20['class'] = NULL;
$arguments20['dir'] = NULL;
$arguments20['id'] = NULL;
$arguments20['lang'] = NULL;
$arguments20['style'] = NULL;
$arguments20['title'] = NULL;
$arguments20['accesskey'] = NULL;
$arguments20['tabindex'] = NULL;
$arguments20['onclick'] = NULL;
$arguments20['as'] = NULL;
$arguments20['crossorigin'] = NULL;
$arguments20['disabled'] = NULL;
$arguments20['href'] = NULL;
$arguments20['hreflang'] = NULL;
$arguments20['importance'] = NULL;
$arguments20['integrity'] = NULL;
$arguments20['media'] = NULL;
$arguments20['referrerpolicy'] = NULL;
$arguments20['rel'] = NULL;
$arguments20['sizes'] = NULL;
$arguments20['type'] = NULL;
$arguments20['nonce'] = NULL;
$arguments20['identifier'] = NULL;
$arguments20['priority'] = false;
$arguments20['identifier'] = 'content-block-twitch_stream_teaser';
$arguments20['href'] = 'CB:twitch_stream_teaser/dist/Frontend.css';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['aria'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['async'] = NULL;
$arguments22['crossorigin'] = NULL;
$arguments22['defer'] = NULL;
$arguments22['integrity'] = NULL;
$arguments22['nomodule'] = NULL;
$arguments22['nonce'] = NULL;
$arguments22['referrerpolicy'] = NULL;
$arguments22['src'] = NULL;
$arguments22['type'] = NULL;
$arguments22['identifier'] = NULL;
$arguments22['priority'] = false;
$arguments22['identifier'] = 'content-block-twitch_stream_teaser';
$arguments22['src'] = 'CB:twitch_stream_teaser/dist/Frontend.js';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output17 .= '

        <div id="c';
$array24 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array24)]);

$output17 .= '" class="twitch_stream_teaser">
            <div class="twitch_stream_inner frame-container-default frame-container">
                <h2 class="twitch_stream_headline">';
$array25 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array25)]);

$output17 .= '</h2>
                <div class="twitch_stream_include">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$array28 = array (
);return $renderingContext->getVariableProvider()->getByPath('twitch_code', $array28);
};
$arguments26 = array();
$arguments26['value'] = NULL;

$output17 .= isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27();

$output17 .= '
                </div>
            </div>
        </div>

    ';
return $output17;
};
$arguments15 = array();
$arguments15['name'] = NULL;
$arguments15['name'] = 'Main';

$output12 .= NULL;

$output12 .= '

';

return $output12;
}


}
#