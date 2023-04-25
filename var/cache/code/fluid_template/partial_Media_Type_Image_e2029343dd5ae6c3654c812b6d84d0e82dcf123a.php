<?php

class partial_Media_Type_Image_e2029343dd5ae6c3654c812b6d84d0e82dcf123a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<figure class="image">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['section'] = NULL;
$arguments95['partial'] = NULL;
$arguments95['delegate'] = NULL;
$arguments95['renderable'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['optional'] = false;
$arguments95['default'] = NULL;
$arguments95['contentAs'] = NULL;
$arguments95['debug'] = true;
$arguments95['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array97 = array();
$array98 = array (
);$array97['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array98);
$array99 = array (
);$array97['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array99);
$array100 = array (
);$array97['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array100);
$array101 = array (
);$array97['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array101);
$arguments95['arguments'] = $array97;

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
            ';
return $output94;
};
$arguments90 = array();
$arguments90['parameter'] = NULL;
$arguments90['target'] = '';
$arguments90['class'] = '';
$arguments90['title'] = '';
$arguments90['language'] = NULL;
$arguments90['additionalParams'] = '';
$arguments90['additionalAttributes'] = array (
);
$arguments90['addQueryString'] = false;
$arguments90['addQueryStringMethod'] = NULL;
$arguments90['addQueryStringExclude'] = '';
$arguments90['absolute'] = false;
$arguments90['parts-as'] = 'typoLinkParts';
$arguments90['textWrap'] = '';
$array92 = array (
);$arguments90['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.properties.link', $array92);
$array93 = array (
);$arguments90['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title', $array93);

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
        ';
return $output89;
};
$arguments87 = array();

$output86 .= '';

$output86 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments154 = array();
$arguments154['section'] = NULL;
$arguments154['partial'] = NULL;
$arguments154['delegate'] = NULL;
$arguments154['renderable'] = NULL;
$arguments154['arguments'] = array (
);
$arguments154['optional'] = false;
$arguments154['default'] = NULL;
$arguments154['contentAs'] = NULL;
$arguments154['debug'] = true;
$arguments154['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array156 = array();
$array157 = array (
);$array156['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array157);
$array158 = array (
);$array156['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array158);
$array159 = array (
);$array156['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array159);
$array160 = array (
);$array156['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array160);
$arguments154['arguments'] = $array156;

$output153 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments154, $renderChildrenClosure155, $renderingContext);

$output153 .= '
                    ';
return $output153;
};
$arguments142 = array();
$arguments142['additionalAttributes'] = NULL;
$arguments142['data'] = NULL;
$arguments142['aria'] = NULL;
$arguments142['class'] = NULL;
$arguments142['dir'] = NULL;
$arguments142['id'] = NULL;
$arguments142['lang'] = NULL;
$arguments142['style'] = NULL;
$arguments142['title'] = NULL;
$arguments142['accesskey'] = NULL;
$arguments142['tabindex'] = NULL;
$arguments142['onclick'] = NULL;
$arguments142['rel'] = NULL;
$arguments142['caption'] = NULL;
$arguments142['image'] = NULL;
$arguments142['crop'] = NULL;
$arguments142['cropVariant'] = 'default';
$arguments142['width'] = NULL;
$arguments142['height'] = NULL;
$arguments142['minWidth'] = NULL;
$arguments142['minHeight'] = NULL;
$arguments142['maxWidth'] = NULL;
$arguments142['maxHeight'] = NULL;
$arguments142['absolute'] = false;
$array144 = array (
);$arguments142['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array144);
$array145 = array (
);$arguments142['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight', $array145);
$array146 = array (
);$arguments142['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth', $array146);
$array147 = array (
);$arguments142['class'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass', $array147);
$output148 = '';
$array149 = array (
);
$output148 .= $renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix', $array149);

$output148 .= '-';
$array150 = array (
);
$output148 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array150);
$arguments142['rel'] = $output148;
$array151 = array (
);$arguments142['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title', $array151);
$array152 = array (
);$arguments142['caption'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description', $array152);

$output141 .= BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '
                ';
return $output141;
};
$arguments139 = array();

$output138 .= '';

$output138 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output163 = '';

$output163 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['section'] = NULL;
$arguments164['partial'] = NULL;
$arguments164['delegate'] = NULL;
$arguments164['renderable'] = NULL;
$arguments164['arguments'] = array (
);
$arguments164['optional'] = false;
$arguments164['default'] = NULL;
$arguments164['contentAs'] = NULL;
$arguments164['debug'] = true;
$arguments164['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array166 = array();
$array167 = array (
);$array166['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array167);
$array168 = array (
);$array166['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array168);
$array169 = array (
);$array166['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array169);
$array170 = array (
);$array166['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array170);
$arguments164['arguments'] = $array166;

$output163 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);

$output163 .= '
                ';
return $output163;
};
$arguments161 = array();
$arguments161['if'] = NULL;

$output138 .= '';

$output138 .= '
            ';
return $output138;
};
$arguments105 = array();
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$arguments105['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array135 = array();
$array136 = array (
);$array135['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom', $array136);

$expression137 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments105['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression137(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);
$arguments105['__thenClosure'] = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['section'] = NULL;
$arguments120['partial'] = NULL;
$arguments120['delegate'] = NULL;
$arguments120['renderable'] = NULL;
$arguments120['arguments'] = array (
);
$arguments120['optional'] = false;
$arguments120['default'] = NULL;
$arguments120['contentAs'] = NULL;
$arguments120['debug'] = true;
$arguments120['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array123);
$array124 = array (
);$array122['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array124);
$array125 = array (
);$array122['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array125);
$array126 = array (
);$array122['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array126);
$arguments120['arguments'] = $array122;

$output119 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output119 .= '
                    ';
return $output119;
};
$arguments108 = array();
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['aria'] = NULL;
$arguments108['class'] = NULL;
$arguments108['dir'] = NULL;
$arguments108['id'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['style'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$arguments108['rel'] = NULL;
$arguments108['caption'] = NULL;
$arguments108['image'] = NULL;
$arguments108['crop'] = NULL;
$arguments108['cropVariant'] = 'default';
$arguments108['width'] = NULL;
$arguments108['height'] = NULL;
$arguments108['minWidth'] = NULL;
$arguments108['minHeight'] = NULL;
$arguments108['maxWidth'] = NULL;
$arguments108['maxHeight'] = NULL;
$arguments108['absolute'] = false;
$array110 = array (
);$arguments108['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array110);
$array111 = array (
);$arguments108['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight', $array111);
$array112 = array (
);$arguments108['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth', $array112);
$array113 = array (
);$arguments108['class'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass', $array113);
$output114 = '';
$array115 = array (
);
$output114 .= $renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix', $array115);

$output114 .= '-';
$array116 = array (
);
$output114 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array116);
$arguments108['rel'] = $output114;
$array117 = array (
);$arguments108['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title', $array117);
$array118 = array (
);$arguments108['caption'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description', $array118);

$output107 .= BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output107 .= '
                ';
return $output107;
};
$arguments105['__elseClosures'][] = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['section'] = NULL;
$arguments128['partial'] = NULL;
$arguments128['delegate'] = NULL;
$arguments128['renderable'] = NULL;
$arguments128['arguments'] = array (
);
$arguments128['optional'] = false;
$arguments128['default'] = NULL;
$arguments128['contentAs'] = NULL;
$arguments128['debug'] = true;
$arguments128['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array131);
$array132 = array (
);$array130['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array132);
$array133 = array (
);$array130['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array133);
$array134 = array (
);$array130['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array134);
$arguments128['arguments'] = $array130;

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '
                ';
return $output127;
};

$output104 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '
        ';
return $output104;
};
$arguments102 = array();
$arguments102['if'] = NULL;

$output86 .= '';

$output86 .= '
    ';
return $output86;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('file.properties.link', $array84);

$expression85 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['section'] = NULL;
$arguments9['partial'] = NULL;
$arguments9['delegate'] = NULL;
$arguments9['renderable'] = NULL;
$arguments9['arguments'] = array (
);
$arguments9['optional'] = false;
$arguments9['default'] = NULL;
$arguments9['contentAs'] = NULL;
$arguments9['debug'] = true;
$arguments9['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array12);
$array13 = array (
);$array11['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array13);
$array14 = array (
);$array11['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array14);
$array15 = array (
);$array11['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array15);
$arguments9['arguments'] = $array11;

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
            ';
return $output8;
};
$arguments4 = array();
$arguments4['parameter'] = NULL;
$arguments4['target'] = '';
$arguments4['class'] = '';
$arguments4['title'] = '';
$arguments4['language'] = NULL;
$arguments4['additionalParams'] = '';
$arguments4['additionalAttributes'] = array (
);
$arguments4['addQueryString'] = false;
$arguments4['addQueryStringMethod'] = NULL;
$arguments4['addQueryStringExclude'] = '';
$arguments4['absolute'] = false;
$arguments4['parts-as'] = 'typoLinkParts';
$arguments4['textWrap'] = '';
$array6 = array (
);$arguments4['parameter'] = $renderingContext->getVariableProvider()->getByPath('file.properties.link', $array6);
$array7 = array (
);$arguments4['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title', $array7);

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['section'] = NULL;
$arguments66['partial'] = NULL;
$arguments66['delegate'] = NULL;
$arguments66['renderable'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['optional'] = false;
$arguments66['default'] = NULL;
$arguments66['contentAs'] = NULL;
$arguments66['debug'] = true;
$arguments66['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array69);
$array70 = array (
);$array68['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array70);
$array71 = array (
);$array68['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array71);
$array72 = array (
);$array68['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array72);
$arguments66['arguments'] = $array68;

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '
                    ';
return $output65;
};
$arguments54 = array();
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['aria'] = NULL;
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$arguments54['rel'] = NULL;
$arguments54['caption'] = NULL;
$arguments54['image'] = NULL;
$arguments54['crop'] = NULL;
$arguments54['cropVariant'] = 'default';
$arguments54['width'] = NULL;
$arguments54['height'] = NULL;
$arguments54['minWidth'] = NULL;
$arguments54['minHeight'] = NULL;
$arguments54['maxWidth'] = NULL;
$arguments54['maxHeight'] = NULL;
$arguments54['absolute'] = false;
$array56 = array (
);$arguments54['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array56);
$array57 = array (
);$arguments54['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight', $array57);
$array58 = array (
);$arguments54['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth', $array58);
$array59 = array (
);$arguments54['class'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass', $array59);
$output60 = '';
$array61 = array (
);
$output60 .= $renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix', $array61);

$output60 .= '-';
$array62 = array (
);
$output60 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array62);
$arguments54['rel'] = $output60;
$array63 = array (
);$arguments54['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title', $array63);
$array64 = array (
);$arguments54['caption'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description', $array64);

$output53 .= BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
                ';
return $output53;
};
$arguments51 = array();

$output50 .= '';

$output50 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments76 = array();
$arguments76['section'] = NULL;
$arguments76['partial'] = NULL;
$arguments76['delegate'] = NULL;
$arguments76['renderable'] = NULL;
$arguments76['arguments'] = array (
);
$arguments76['optional'] = false;
$arguments76['default'] = NULL;
$arguments76['contentAs'] = NULL;
$arguments76['debug'] = true;
$arguments76['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array78 = array();
$array79 = array (
);$array78['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array79);
$array80 = array (
);$array78['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array80);
$array81 = array (
);$array78['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array81);
$array82 = array (
);$array78['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array82);
$arguments76['arguments'] = $array78;

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
                ';
return $output75;
};
$arguments73 = array();
$arguments73['if'] = NULL;

$output50 .= '';

$output50 .= '
            ';
return $output50;
};
$arguments17 = array();
$arguments17['then'] = NULL;
$arguments17['else'] = NULL;
$arguments17['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['0'] = $renderingContext->getVariableProvider()->getByPath('data.image_zoom', $array48);

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments17['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments17['__thenClosure'] = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output31 = '';

$output31 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['section'] = NULL;
$arguments32['partial'] = NULL;
$arguments32['delegate'] = NULL;
$arguments32['renderable'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['optional'] = false;
$arguments32['default'] = NULL;
$arguments32['contentAs'] = NULL;
$arguments32['debug'] = true;
$arguments32['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array35);
$array36 = array (
);$array34['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array36);
$array37 = array (
);$array34['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array37);
$array38 = array (
);$array34['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array38);
$arguments32['arguments'] = $array34;

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
                    ';
return $output31;
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
$arguments20['rel'] = NULL;
$arguments20['caption'] = NULL;
$arguments20['image'] = NULL;
$arguments20['crop'] = NULL;
$arguments20['cropVariant'] = 'default';
$arguments20['width'] = NULL;
$arguments20['height'] = NULL;
$arguments20['minWidth'] = NULL;
$arguments20['minHeight'] = NULL;
$arguments20['maxWidth'] = NULL;
$arguments20['maxHeight'] = NULL;
$arguments20['absolute'] = false;
$array22 = array (
);$arguments20['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array22);
$array23 = array (
);$arguments20['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight', $array23);
$array24 = array (
);$arguments20['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth', $array24);
$array25 = array (
);$arguments20['class'] = $renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass', $array25);
$output26 = '';
$array27 = array (
);
$output26 .= $renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix', $array27);

$output26 .= '-';
$array28 = array (
);
$output26 .= $renderingContext->getVariableProvider()->getByPath('data.uid', $array28);
$arguments20['rel'] = $output26;
$array29 = array (
);$arguments20['title'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title', $array29);
$array30 = array (
);$arguments20['caption'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description', $array30);

$output19 .= BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                ';
return $output19;
};
$arguments17['__elseClosures'][] = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['section'] = NULL;
$arguments40['partial'] = NULL;
$arguments40['delegate'] = NULL;
$arguments40['renderable'] = NULL;
$arguments40['arguments'] = array (
);
$arguments40['optional'] = false;
$arguments40['default'] = NULL;
$arguments40['contentAs'] = NULL;
$arguments40['debug'] = true;
$arguments40['partial'] = 'Media/Rendering/Image';
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array43);
$array44 = array (
);$array42['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array44);
$array45 = array (
);$array42['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array45);
$array46 = array (
);$array42['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array46);
$arguments40['arguments'] = $array42;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
                ';
return $output39;
};

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
        ';
return $output16;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
        <figcaption class="caption">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$array179 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.description', $array179)]);
};
$arguments177 = array();
$arguments177['value'] = NULL;
$renderChildrenClosure178 = ($arguments177['value'] !== null) ? function() use ($arguments177) { return $arguments177['value']; } : $renderChildrenClosure178;
$output176 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '</figcaption>
    ';
return $output176;
};
$arguments171 = array();
$arguments171['then'] = NULL;
$arguments171['else'] = NULL;
$arguments171['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['0'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description', $array174);

$expression175 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments171['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array173)
					),
					$renderingContext
				);
$arguments171['__thenClosure'] = $renderChildrenClosure172;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output0 .= '
</figure>

';

return $output0;
}


}
#