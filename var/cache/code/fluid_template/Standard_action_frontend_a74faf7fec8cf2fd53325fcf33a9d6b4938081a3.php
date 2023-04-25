<?php

class Standard_action_frontend_a74faf7fec8cf2fd53325fcf33a9d6b4938081a3 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['identifier'] = 'content-block-news_teaser-be';
$arguments1['href'] = 'CB:news_teaser/dist/EditorPreview.css';

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
$arguments3['identifier'] = 'content-block-news_teaser';
$arguments3['href'] = 'CB:news_teaser/dist/Frontend.css';

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
$arguments5['identifier'] = 'content-block-news_teaser';
$arguments5['src'] = 'CB:news_teaser/dist/Frontend.js';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '

        <div id="c';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array7)]);

$output0 .= '" class="news_teaser">
            <div class="news_teaser_inner">
                <div class="news_teaser_image_container">
                    <a href="';
$array8 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array8)]);

$output0 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['additionalAttributes'] = NULL;
$arguments9['data'] = NULL;
$arguments9['aria'] = NULL;
$arguments9['class'] = NULL;
$arguments9['dir'] = NULL;
$arguments9['id'] = NULL;
$arguments9['lang'] = NULL;
$arguments9['style'] = NULL;
$arguments9['title'] = NULL;
$arguments9['accesskey'] = NULL;
$arguments9['tabindex'] = NULL;
$arguments9['onclick'] = NULL;
$arguments9['alt'] = NULL;
$arguments9['ismap'] = NULL;
$arguments9['longdesc'] = NULL;
$arguments9['usemap'] = NULL;
$arguments9['loading'] = NULL;
$arguments9['decoding'] = NULL;
$arguments9['src'] = '';
$arguments9['treatIdAsReference'] = false;
$arguments9['image'] = NULL;
$arguments9['crop'] = NULL;
$arguments9['cropVariant'] = 'default';
$arguments9['fileExtension'] = NULL;
$arguments9['width'] = NULL;
$arguments9['height'] = NULL;
$arguments9['minWidth'] = NULL;
$arguments9['minHeight'] = NULL;
$arguments9['maxWidth'] = NULL;
$arguments9['maxHeight'] = NULL;
$arguments9['absolute'] = false;
$array11 = array (
);$arguments9['image'] = $renderingContext->getVariableProvider()->getByPath('news_image', $array11);
$arguments9['class'] = 'news_teaser_image';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output0 .= '
                    </a>
                </div>
                <div class="news_teaser_text_container">
                    <a href="';
$array12 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array12)]);

$output0 .= '"><h2>';
$array13 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array13)]);

$output0 .= '</h2></a>
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
$arguments20['identifier'] = 'content-block-news_teaser-be';
$arguments20['href'] = 'CB:news_teaser/dist/EditorPreview.css';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper
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
$arguments22['as'] = NULL;
$arguments22['crossorigin'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['href'] = NULL;
$arguments22['hreflang'] = NULL;
$arguments22['importance'] = NULL;
$arguments22['integrity'] = NULL;
$arguments22['media'] = NULL;
$arguments22['referrerpolicy'] = NULL;
$arguments22['rel'] = NULL;
$arguments22['sizes'] = NULL;
$arguments22['type'] = NULL;
$arguments22['nonce'] = NULL;
$arguments22['identifier'] = NULL;
$arguments22['priority'] = false;
$arguments22['identifier'] = 'content-block-news_teaser';
$arguments22['href'] = 'CB:news_teaser/dist/Frontend.css';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\CssViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output19 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
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
$arguments24['async'] = NULL;
$arguments24['crossorigin'] = NULL;
$arguments24['defer'] = NULL;
$arguments24['integrity'] = NULL;
$arguments24['nomodule'] = NULL;
$arguments24['nonce'] = NULL;
$arguments24['referrerpolicy'] = NULL;
$arguments24['src'] = NULL;
$arguments24['type'] = NULL;
$arguments24['identifier'] = NULL;
$arguments24['priority'] = false;
$arguments24['identifier'] = 'content-block-news_teaser';
$arguments24['src'] = 'CB:news_teaser/dist/Frontend.js';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output19 .= '

        <div id="c';
$array26 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array26)]);

$output19 .= '" class="news_teaser">
            <div class="news_teaser_inner">
                <div class="news_teaser_image_container">
                    <a href="';
$array27 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array27)]);

$output19 .= '">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
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
$arguments28['alt'] = NULL;
$arguments28['ismap'] = NULL;
$arguments28['longdesc'] = NULL;
$arguments28['usemap'] = NULL;
$arguments28['loading'] = NULL;
$arguments28['decoding'] = NULL;
$arguments28['src'] = '';
$arguments28['treatIdAsReference'] = false;
$arguments28['image'] = NULL;
$arguments28['crop'] = NULL;
$arguments28['cropVariant'] = 'default';
$arguments28['fileExtension'] = NULL;
$arguments28['width'] = NULL;
$arguments28['height'] = NULL;
$arguments28['minWidth'] = NULL;
$arguments28['minHeight'] = NULL;
$arguments28['maxWidth'] = NULL;
$arguments28['maxHeight'] = NULL;
$arguments28['absolute'] = false;
$array30 = array (
);$arguments28['image'] = $renderingContext->getVariableProvider()->getByPath('news_image', $array30);
$arguments28['class'] = 'news_teaser_image';

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output19 .= '
                    </a>
                </div>
                <div class="news_teaser_text_container">
                    <a href="';
$array31 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('url', $array31)]);

$output19 .= '"><h2>';
$array32 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.header', $array32)]);

$output19 .= '</h2></a>
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