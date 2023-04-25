<?php

class Standard_action_frontend_14ec4cda3e9d0c0013eb80b40ab5261f853634ce extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['identifier'] = 'content-block-test_content_element-be';
$arguments1['href'] = 'CB:test_content_element/dist/EditorPreview.css';

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
$arguments3['identifier'] = 'content-block-test_content_element';
$arguments3['href'] = 'CB:test_content_element/dist/Frontend.css';

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
$arguments5['identifier'] = 'content-block-test_content_element';
$arguments5['src'] = 'CB:test_content_element/dist/Frontend.js';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '

        <div class="test_content_element frame frame-size-default">
            <div class="container">
                <div class="text-container">
                    <h2>';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array7)]);

$output0 .= '</h2>
                    <p>';
$array8 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldtext', $array8)]);

$output0 .= '</p>
                </div>
                <div class="image-container">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$array11 = array (
);return $renderingContext->getVariableProvider()->getByPath('image.0', $array11);
};
$arguments9 = array();
$arguments9['value'] = NULL;
$arguments9['name'] = NULL;
$arguments9['name'] = 'selectedImage';
$renderChildrenClosure10 = ($arguments9['value'] !== null) ? function() use ($arguments9) { return $arguments9['value']; } : $renderChildrenClosure10;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['aria'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$arguments12['alt'] = NULL;
$arguments12['ismap'] = NULL;
$arguments12['longdesc'] = NULL;
$arguments12['usemap'] = NULL;
$arguments12['loading'] = NULL;
$arguments12['decoding'] = NULL;
$arguments12['src'] = '';
$arguments12['treatIdAsReference'] = false;
$arguments12['image'] = NULL;
$arguments12['crop'] = NULL;
$arguments12['cropVariant'] = 'default';
$arguments12['fileExtension'] = NULL;
$arguments12['width'] = NULL;
$arguments12['height'] = NULL;
$arguments12['minWidth'] = NULL;
$arguments12['minHeight'] = NULL;
$arguments12['maxWidth'] = NULL;
$arguments12['maxHeight'] = NULL;
$arguments12['absolute'] = false;
$arguments12['class'] = 'text-image';
$array14 = array (
);$arguments12['image'] = $renderingContext->getVariableProvider()->getByPath('selectedImage', $array14);

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

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
$arguments21['identifier'] = 'content-block-test_content_element-be';
$arguments21['href'] = 'CB:test_content_element/dist/EditorPreview.css';

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
$arguments23['identifier'] = 'content-block-test_content_element';
$arguments23['href'] = 'CB:test_content_element/dist/Frontend.css';

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
$arguments25['identifier'] = 'content-block-test_content_element';
$arguments25['src'] = 'CB:test_content_element/dist/Frontend.js';

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output20 .= '

        <div class="test_content_element frame frame-size-default">
            <div class="container">
                <div class="text-container">
                    <h2>';
$array27 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array27)]);

$output20 .= '</h2>
                    <p>';
$array28 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fieldtext', $array28)]);

$output20 .= '</p>
                </div>
                <div class="image-container">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$array31 = array (
);return $renderingContext->getVariableProvider()->getByPath('image.0', $array31);
};
$arguments29 = array();
$arguments29['value'] = NULL;
$arguments29['name'] = NULL;
$arguments29['name'] = 'selectedImage';
$renderChildrenClosure30 = ($arguments29['value'] !== null) ? function() use ($arguments29) { return $arguments29['value']; } : $renderChildrenClosure30;
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output20 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['aria'] = NULL;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['title'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['alt'] = NULL;
$arguments32['ismap'] = NULL;
$arguments32['longdesc'] = NULL;
$arguments32['usemap'] = NULL;
$arguments32['loading'] = NULL;
$arguments32['decoding'] = NULL;
$arguments32['src'] = '';
$arguments32['treatIdAsReference'] = false;
$arguments32['image'] = NULL;
$arguments32['crop'] = NULL;
$arguments32['cropVariant'] = 'default';
$arguments32['fileExtension'] = NULL;
$arguments32['width'] = NULL;
$arguments32['height'] = NULL;
$arguments32['minWidth'] = NULL;
$arguments32['minHeight'] = NULL;
$arguments32['maxWidth'] = NULL;
$arguments32['maxHeight'] = NULL;
$arguments32['absolute'] = false;
$arguments32['class'] = 'text-image';
$array34 = array (
);$arguments32['image'] = $renderingContext->getVariableProvider()->getByPath('selectedImage', $array34);

$output20 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

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