<?php

class layout_Default_html_a5b25b3e9705fc5a2dddc1de93e9f29fdb8ca6ba extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '

    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['as'] = NULL;
$arguments4['variants'] = NULL;
$arguments4['multiplier'] = NULL;
$arguments4['gutters'] = NULL;
$arguments4['corrections'] = NULL;
$arguments4['aspectRatio'] = NULL;
$arguments4['as'] = 'variants';
$array6 = array (
);$arguments4['variants'] = $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.variants', $array6);

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array9 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.backendlayout.{backendlayout}', $array9);
};
$arguments7 = array();
$arguments7['value'] = NULL;
$arguments7['name'] = NULL;
$arguments7['name'] = 'backendlayoutConfig';
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$array12 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendlayoutConfig.{data.colPos}', $array12);
};
$arguments10 = array();
$arguments10['value'] = NULL;
$arguments10['name'] = NULL;
$arguments10['name'] = 'columnConfig';
$renderChildrenClosure11 = ($arguments10['value'] !== null) ? function() use ($arguments10) { return $arguments10['value']; } : $renderChildrenClosure11;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['as'] = NULL;
$arguments19['variants'] = NULL;
$arguments19['multiplier'] = NULL;
$arguments19['gutters'] = NULL;
$arguments19['corrections'] = NULL;
$arguments19['aspectRatio'] = NULL;
$arguments19['as'] = 'variants';
$array21 = array (
);$arguments19['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array21);
$array22 = array (
);$arguments19['multiplier'] = $renderingContext->getVariableProvider()->getByPath('columnConfig.multiplier', $array22);
$array23 = array (
);$arguments19['gutters'] = $renderingContext->getVariableProvider()->getByPath('columnConfig.gutters', $array23);
$array24 = array (
);$arguments19['corrections'] = $renderingContext->getVariableProvider()->getByPath('columnConfig.corrections', $array24);

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output18 .= '
    ';
return $output18;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array16 = array (
);$array15['0'] = $renderingContext->getVariableProvider()->getByPath('columnConfig', $array16);

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = $renderChildrenClosure14;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output3 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array37 = array (
);return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.container.{context.CType}', $array37);
};
$arguments35 = array();
$arguments35['value'] = NULL;
$arguments35['name'] = NULL;
$arguments35['name'] = 'containerConfig';
$renderChildrenClosure36 = ($arguments35['value'] !== null) ? function() use ($arguments35) { return $arguments35['value']; } : $renderChildrenClosure36;
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output34 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$array40 = array (
);return $renderingContext->getVariableProvider()->getByPath('containerConfig.{data.colPos}', $array40);
};
$arguments38 = array();
$arguments38['value'] = NULL;
$arguments38['name'] = NULL;
$arguments38['name'] = 'containerColumnConfig';
$renderChildrenClosure39 = ($arguments38['value'] !== null) ? function() use ($arguments38) { return $arguments38['value']; } : $renderChildrenClosure39;
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output34 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['as'] = NULL;
$arguments47['variants'] = NULL;
$arguments47['multiplier'] = NULL;
$arguments47['gutters'] = NULL;
$arguments47['corrections'] = NULL;
$arguments47['aspectRatio'] = NULL;
$arguments47['as'] = 'variants';
$array49 = array (
);$arguments47['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array49);
$array50 = array (
);$arguments47['multiplier'] = $renderingContext->getVariableProvider()->getByPath('containerColumnConfig.multiplier', $array50);
$array51 = array (
);$arguments47['gutters'] = $renderingContext->getVariableProvider()->getByPath('containerColumnConfig.gutters', $array51);
$array52 = array (
);$arguments47['corrections'] = $renderingContext->getVariableProvider()->getByPath('containerColumnConfig.corrections', $array52);

$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output46 .= '
            ';
return $output46;
};
$arguments41 = array();
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$arguments41['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['0'] = $renderingContext->getVariableProvider()->getByPath('containerColumnConfig', $array44);

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments41['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)
					),
					$renderingContext
				);
$arguments41['__thenClosure'] = $renderChildrenClosure42;

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output34 .= '
        ';
return $output34;
};
$arguments31 = array();
$arguments31['each'] = NULL;
$arguments31['as'] = NULL;
$arguments31['key'] = NULL;
$arguments31['reverse'] = false;
$arguments31['iteration'] = NULL;
$array33 = array (
);$arguments31['each'] = $renderingContext->getVariableProvider()->getByPath('containerContext', $array33);
$arguments31['as'] = 'context';

$output30 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
    ';
return $output30;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('containerContext', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = $renderChildrenClosure26;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output3 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return 'frame-size-default';
};
$arguments53 = array();
$arguments53['value'] = NULL;
$arguments53['name'] = NULL;
$arguments53['name'] = 'frameSize';
$renderChildrenClosure54 = ($arguments53['value'] !== null) ? function() use ($arguments53) { return $arguments53['value']; } : $renderChildrenClosure54;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= 'frame-';
$array58 = array (
);
$output57 .= $renderingContext->getVariableProvider()->getByPath('data.frame_class', $array58);
return $output57;
};
$arguments55 = array();
$arguments55['value'] = NULL;
$arguments55['name'] = NULL;
$arguments55['name'] = 'frameClass';
$renderChildrenClosure56 = ($arguments55['value'] !== null) ? function() use ($arguments55) { return $arguments55['value']; } : $renderChildrenClosure56;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= 'frame-type-';
$array62 = array (
);
$output61 .= $renderingContext->getVariableProvider()->getByPath('data.CType', $array62);
return $output61;
};
$arguments59 = array();
$arguments59['value'] = NULL;
$arguments59['name'] = NULL;
$arguments59['name'] = 'typeClass';
$renderChildrenClosure60 = ($arguments59['value'] !== null) ? function() use ($arguments59) { return $arguments59['value']; } : $renderChildrenClosure60;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= 'frame-layout-';
$array66 = array (
);
$output65 .= $renderingContext->getVariableProvider()->getByPath('data.frame_layout', $array66);
return $output65;
};
$arguments63 = array();
$arguments63['value'] = NULL;
$arguments63['name'] = NULL;
$arguments63['name'] = 'layoutClass';
$renderChildrenClosure64 = ($arguments63['value'] !== null) ? function() use ($arguments63) { return $arguments63['value']; } : $renderChildrenClosure64;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= 'frame-background-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['0'] = $renderingContext->getVariableProvider()->getByPath('data.background_color_class', $array73);

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression74(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)
					),
					$renderingContext
				);
$arguments70['else'] = 'none';
$array75 = array (
);$arguments70['then'] = $renderingContext->getVariableProvider()->getByPath('data.background_color_class', $array75);

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);
return $output69;
};
$arguments67 = array();
$arguments67['value'] = NULL;
$arguments67['name'] = NULL;
$arguments67['name'] = 'backgroundClass';
$renderChildrenClosure68 = ($arguments67['value'] !== null) ? function() use ($arguments67) { return $arguments67['value']; } : $renderChildrenClosure68;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= 'frame-space-before-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['then'] = NULL;
$arguments79['else'] = NULL;
$arguments79['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array82);

$expression83 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments79['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments79['else'] = 'none';
$array84 = array (
);$arguments79['then'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array84);

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);
return $output78;
};
$arguments76 = array();
$arguments76['value'] = NULL;
$arguments76['name'] = NULL;
$arguments76['name'] = 'spaceBeforeClass';
$renderChildrenClosure77 = ($arguments76['value'] !== null) ? function() use ($arguments76) { return $arguments76['value']; } : $renderChildrenClosure77;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= 'frame-space-after-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$arguments88['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array91);

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments88['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression92(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)
					),
					$renderingContext
				);
$arguments88['else'] = 'none';
$array93 = array (
);$arguments88['then'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array93);

$output87 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);
return $output87;
};
$arguments85 = array();
$arguments85['value'] = NULL;
$arguments85['name'] = NULL;
$arguments85['name'] = 'spaceAfterClass';
$renderChildrenClosure86 = ($arguments85['value'] !== null) ? function() use ($arguments85) { return $arguments85['value']; } : $renderChildrenClosure86;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output3 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['then'] = NULL;
$arguments227['else'] = NULL;
$arguments227['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array229 = array();
$array230 = array (
);$array229['0'] = $renderingContext->getVariableProvider()->getByPath('backgroundImage.0', $array230);

$expression231 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments227['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression231(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array229)
					),
					$renderingContext
				);
$arguments227['then'] = 'frame-has-backgroundimage';
$arguments227['else'] = 'frame-no-backgroundimage';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);
};
$arguments225 = array();
$arguments225['value'] = NULL;
$arguments225['name'] = NULL;
$arguments225['name'] = 'backgroundImageClass';
$renderChildrenClosure226 = ($arguments225['value'] !== null) ? function() use ($arguments225) { return $arguments225['value']; } : $renderChildrenClosure226;
$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext)]);

$output224 .= '
            <div id="c';
$array232 = array (
);
$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array232)]);

$output224 .= '" class="frame ';
$array233 = array (
);
$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frameSize', $array233)]);

$output224 .= ' ';
$array234 = array (
);
$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frameClass', $array234)]);

$output224 .= ' ';
$array235 = array (
);
$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typeClass', $array235)]);

$output224 .= ' ';
$array236 = array (
);
$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('layoutClass', $array236)]);

$output224 .= ' ';
$array237 = array (
);
$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundClass', $array237)]);

$output224 .= ' ';
$array238 = array (
);
$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageClass', $array238)]);

$output224 .= ' ';
$array239 = array (
);
$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass', $array239)]);

$output224 .= ' ';
$array240 = array (
);
$output224 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass', $array240)]);

$output224 .= '">
                <div class="frame-group-container">
                    <div class="frame-group-inner">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['section'] = NULL;
$arguments241['partial'] = NULL;
$arguments241['delegate'] = NULL;
$arguments241['renderable'] = NULL;
$arguments241['arguments'] = array (
);
$arguments241['optional'] = false;
$arguments241['default'] = NULL;
$arguments241['contentAs'] = NULL;
$arguments241['debug'] = true;
$arguments241['partial'] = 'Frame/General/BackgroundImage';
$arguments241['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output224 .= '
                        <div class="frame-container frame-container-default">
                            <div class="frame-inner">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
                                    <a id="c';
$array250 = array (
);
$output249 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array250)]);

$output249 .= '"></a>
                                ';
return $output249;
};
$arguments244 = array();
$arguments244['then'] = NULL;
$arguments244['else'] = NULL;
$arguments244['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array246 = array();
$array247 = array (
);$array246['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array247);

$expression248 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments244['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression248(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array246)
					),
					$renderingContext
				);
$arguments244['__thenClosure'] = $renderChildrenClosure245;

$output224 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext);

$output224 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['section'] = NULL;
$arguments256['partial'] = NULL;
$arguments256['delegate'] = NULL;
$arguments256['renderable'] = NULL;
$arguments256['arguments'] = array (
);
$arguments256['optional'] = false;
$arguments256['default'] = NULL;
$arguments256['contentAs'] = NULL;
$arguments256['debug'] = true;
$arguments256['partial'] = 'DropIn/Before/All';
$arguments256['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output255 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output255 .= '
                                ';
return $output255;
};
$arguments251 = array();
$arguments251['section'] = NULL;
$arguments251['partial'] = NULL;
$arguments251['delegate'] = NULL;
$arguments251['renderable'] = NULL;
$arguments251['arguments'] = array (
);
$arguments251['optional'] = false;
$arguments251['default'] = NULL;
$arguments251['contentAs'] = NULL;
$arguments251['debug'] = true;
$arguments251['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array253 = array();
$array253['0'] = 'true';

$expression254 = function($context) {return TRUE;};
$arguments251['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression254(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array253)
					),
					$renderingContext
				);

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output224 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments264 = array();
$arguments264['section'] = NULL;
$arguments264['partial'] = NULL;
$arguments264['delegate'] = NULL;
$arguments264['renderable'] = NULL;
$arguments264['arguments'] = array (
);
$arguments264['optional'] = false;
$arguments264['default'] = NULL;
$arguments264['contentAs'] = NULL;
$arguments264['debug'] = true;
$arguments264['partial'] = 'Header/All';
$arguments264['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output263 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output263 .= '
                                ';
return $output263;
};
$arguments259 = array();
$arguments259['section'] = NULL;
$arguments259['partial'] = NULL;
$arguments259['delegate'] = NULL;
$arguments259['renderable'] = NULL;
$arguments259['arguments'] = array (
);
$arguments259['optional'] = false;
$arguments259['default'] = NULL;
$arguments259['contentAs'] = NULL;
$arguments259['debug'] = true;
$arguments259['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array261 = array();
$array261['0'] = 'true';

$expression262 = function($context) {return TRUE;};
$arguments259['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array261)
					),
					$renderingContext
				);

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output224 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['section'] = NULL;
$arguments267['partial'] = NULL;
$arguments267['delegate'] = NULL;
$arguments267['renderable'] = NULL;
$arguments267['arguments'] = array (
);
$arguments267['optional'] = false;
$arguments267['default'] = NULL;
$arguments267['contentAs'] = NULL;
$arguments267['debug'] = true;
$arguments267['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array269 = array();
$array269['0'] = 'true';

$expression270 = function($context) {return TRUE;};
$arguments267['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression270(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array269)
					),
					$renderingContext
				);

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output224 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
$output275 = '';

$output275 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['section'] = NULL;
$arguments276['partial'] = NULL;
$arguments276['delegate'] = NULL;
$arguments276['renderable'] = NULL;
$arguments276['arguments'] = array (
);
$arguments276['optional'] = false;
$arguments276['default'] = NULL;
$arguments276['contentAs'] = NULL;
$arguments276['debug'] = true;
$arguments276['partial'] = 'Footer/All';
$arguments276['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output275 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output275 .= '
                                ';
return $output275;
};
$arguments271 = array();
$arguments271['section'] = NULL;
$arguments271['partial'] = NULL;
$arguments271['delegate'] = NULL;
$arguments271['renderable'] = NULL;
$arguments271['arguments'] = array (
);
$arguments271['optional'] = false;
$arguments271['default'] = NULL;
$arguments271['contentAs'] = NULL;
$arguments271['debug'] = true;
$arguments271['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array273 = array();
$array273['0'] = 'true';

$expression274 = function($context) {return TRUE;};
$arguments271['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression274(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array273)
					),
					$renderingContext
				);

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);

$output224 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments284 = array();
$arguments284['section'] = NULL;
$arguments284['partial'] = NULL;
$arguments284['delegate'] = NULL;
$arguments284['renderable'] = NULL;
$arguments284['arguments'] = array (
);
$arguments284['optional'] = false;
$arguments284['default'] = NULL;
$arguments284['contentAs'] = NULL;
$arguments284['debug'] = true;
$arguments284['partial'] = 'DropIn/After/All';
$arguments284['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output283 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output283 .= '
                                ';
return $output283;
};
$arguments279 = array();
$arguments279['section'] = NULL;
$arguments279['partial'] = NULL;
$arguments279['delegate'] = NULL;
$arguments279['renderable'] = NULL;
$arguments279['arguments'] = array (
);
$arguments279['optional'] = false;
$arguments279['default'] = NULL;
$arguments279['contentAs'] = NULL;
$arguments279['debug'] = true;
$arguments279['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array281 = array();
$array281['0'] = 'true';

$expression282 = function($context) {return TRUE;};
$arguments279['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression282(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array281)
					),
					$renderingContext
				);

$output224 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output224 .= '
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        ';
return $output224;
};
$arguments222 = array();

$output221 .= '';

$output221 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '

            <a id="c';
$array290 = array (
);
$output289 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array290)]);

$output289 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
                <a id="c';
$array297 = array (
);
$output296 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array297)]);

$output296 .= '"></a>
            ';
return $output296;
};
$arguments291 = array();
$arguments291['then'] = NULL;
$arguments291['else'] = NULL;
$arguments291['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array293 = array();
$array294 = array (
);$array293['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array294);

$expression295 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments291['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression295(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array293)
					),
					$renderingContext
				);
$arguments291['__thenClosure'] = $renderChildrenClosure292;

$output289 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output289 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output303 = '';

$output303 .= '
                <div class="frame-space-before ';
$array304 = array (
);
$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass', $array304)]);

$output303 .= '"></div>
            ';
return $output303;
};
$arguments298 = array();
$arguments298['then'] = NULL;
$arguments298['else'] = NULL;
$arguments298['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array300 = array();
$array301 = array (
);$array300['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array301);

$expression302 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments298['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression302(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array300)
					),
					$renderingContext
				);
$arguments298['__thenClosure'] = $renderChildrenClosure299;

$output289 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output289 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$output309 = '';

$output309 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure311 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments310 = array();
$arguments310['section'] = NULL;
$arguments310['partial'] = NULL;
$arguments310['delegate'] = NULL;
$arguments310['renderable'] = NULL;
$arguments310['arguments'] = array (
);
$arguments310['optional'] = false;
$arguments310['default'] = NULL;
$arguments310['contentAs'] = NULL;
$arguments310['debug'] = true;
$arguments310['partial'] = 'DropIn/Before/All';
$arguments310['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output309 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext);

$output309 .= '
            ';
return $output309;
};
$arguments305 = array();
$arguments305['section'] = NULL;
$arguments305['partial'] = NULL;
$arguments305['delegate'] = NULL;
$arguments305['renderable'] = NULL;
$arguments305['arguments'] = array (
);
$arguments305['optional'] = false;
$arguments305['default'] = NULL;
$arguments305['contentAs'] = NULL;
$arguments305['debug'] = true;
$arguments305['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array307 = array();
$array307['0'] = 'true';

$expression308 = function($context) {return TRUE;};
$arguments305['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression308(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array307)
					),
					$renderingContext
				);

$output289 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output289 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure314 = function() use ($renderingContext, $self) {
$output317 = '';

$output317 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments318 = array();
$arguments318['section'] = NULL;
$arguments318['partial'] = NULL;
$arguments318['delegate'] = NULL;
$arguments318['renderable'] = NULL;
$arguments318['arguments'] = array (
);
$arguments318['optional'] = false;
$arguments318['default'] = NULL;
$arguments318['contentAs'] = NULL;
$arguments318['debug'] = true;
$arguments318['partial'] = 'Header/All';
$arguments318['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output317 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output317 .= '
            ';
return $output317;
};
$arguments313 = array();
$arguments313['section'] = NULL;
$arguments313['partial'] = NULL;
$arguments313['delegate'] = NULL;
$arguments313['renderable'] = NULL;
$arguments313['arguments'] = array (
);
$arguments313['optional'] = false;
$arguments313['default'] = NULL;
$arguments313['contentAs'] = NULL;
$arguments313['debug'] = true;
$arguments313['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array315 = array();
$array315['0'] = 'true';

$expression316 = function($context) {return TRUE;};
$arguments313['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression316(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array315)
					),
					$renderingContext
				);

$output289 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments313, $renderChildrenClosure314, $renderingContext);

$output289 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['section'] = NULL;
$arguments321['partial'] = NULL;
$arguments321['delegate'] = NULL;
$arguments321['renderable'] = NULL;
$arguments321['arguments'] = array (
);
$arguments321['optional'] = false;
$arguments321['default'] = NULL;
$arguments321['contentAs'] = NULL;
$arguments321['debug'] = true;
$arguments321['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array323 = array();
$array323['0'] = 'true';

$expression324 = function($context) {return TRUE;};
$arguments321['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression324(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array323)
					),
					$renderingContext
				);

$output289 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output289 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$output329 = '';

$output329 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments330 = array();
$arguments330['section'] = NULL;
$arguments330['partial'] = NULL;
$arguments330['delegate'] = NULL;
$arguments330['renderable'] = NULL;
$arguments330['arguments'] = array (
);
$arguments330['optional'] = false;
$arguments330['default'] = NULL;
$arguments330['contentAs'] = NULL;
$arguments330['debug'] = true;
$arguments330['partial'] = 'Footer/All';
$arguments330['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);

$output329 .= '
            ';
return $output329;
};
$arguments325 = array();
$arguments325['section'] = NULL;
$arguments325['partial'] = NULL;
$arguments325['delegate'] = NULL;
$arguments325['renderable'] = NULL;
$arguments325['arguments'] = array (
);
$arguments325['optional'] = false;
$arguments325['default'] = NULL;
$arguments325['contentAs'] = NULL;
$arguments325['debug'] = true;
$arguments325['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array327 = array();
$array327['0'] = 'true';

$expression328 = function($context) {return TRUE;};
$arguments325['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array327)
					),
					$renderingContext
				);

$output289 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output289 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$output337 = '';

$output337 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments338 = array();
$arguments338['section'] = NULL;
$arguments338['partial'] = NULL;
$arguments338['delegate'] = NULL;
$arguments338['renderable'] = NULL;
$arguments338['arguments'] = array (
);
$arguments338['optional'] = false;
$arguments338['default'] = NULL;
$arguments338['contentAs'] = NULL;
$arguments338['debug'] = true;
$arguments338['partial'] = 'DropIn/After/All';
$arguments338['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output337 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output337 .= '
            ';
return $output337;
};
$arguments333 = array();
$arguments333['section'] = NULL;
$arguments333['partial'] = NULL;
$arguments333['delegate'] = NULL;
$arguments333['renderable'] = NULL;
$arguments333['arguments'] = array (
);
$arguments333['optional'] = false;
$arguments333['default'] = NULL;
$arguments333['contentAs'] = NULL;
$arguments333['debug'] = true;
$arguments333['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array335 = array();
$array335['0'] = 'true';

$expression336 = function($context) {return TRUE;};
$arguments333['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array335)
					),
					$renderingContext
				);

$output289 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output289 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
$output346 = '';

$output346 .= '
                <div class="frame-space-after ';
$array347 = array (
);
$output346 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass', $array347)]);

$output346 .= '"></div>
            ';
return $output346;
};
$arguments341 = array();
$arguments341['then'] = NULL;
$arguments341['else'] = NULL;
$arguments341['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array343 = array();
$array344 = array (
);$array343['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array344);

$expression345 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments341['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression345(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array343)
					),
					$renderingContext
				);
$arguments341['__thenClosure'] = $renderChildrenClosure342;

$output289 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext);

$output289 .= '

        ';
return $output289;
};
$arguments287 = array();
$arguments287['if'] = NULL;

$output221 .= '';

$output221 .= '
    ';
return $output221;
};
$arguments94 = array();
$arguments94['then'] = NULL;
$arguments94['else'] = NULL;
$arguments94['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array218 = array();
$array219 = array (
);$array218['0'] = $renderingContext->getVariableProvider()->getByPath('data.frame_class', $array219);
$array218['1'] = ' != none';

$expression220 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != "none");};
$arguments94['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression220(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array218)
					),
					$renderingContext
				);
$arguments94['__thenClosure'] = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['0'] = $renderingContext->getVariableProvider()->getByPath('backgroundImage.0', $array102);

$expression103 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);
$arguments99['then'] = 'frame-has-backgroundimage';
$arguments99['else'] = 'frame-no-backgroundimage';
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);
};
$arguments97 = array();
$arguments97['value'] = NULL;
$arguments97['name'] = NULL;
$arguments97['name'] = 'backgroundImageClass';
$renderChildrenClosure98 = ($arguments97['value'] !== null) ? function() use ($arguments97) { return $arguments97['value']; } : $renderChildrenClosure98;
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output96 .= '
            <div id="c';
$array104 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array104)]);

$output96 .= '" class="frame ';
$array105 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frameSize', $array105)]);

$output96 .= ' ';
$array106 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frameClass', $array106)]);

$output96 .= ' ';
$array107 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typeClass', $array107)]);

$output96 .= ' ';
$array108 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('layoutClass', $array108)]);

$output96 .= ' ';
$array109 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundClass', $array109)]);

$output96 .= ' ';
$array110 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageClass', $array110)]);

$output96 .= ' ';
$array111 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass', $array111)]);

$output96 .= ' ';
$array112 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass', $array112)]);

$output96 .= '">
                <div class="frame-group-container">
                    <div class="frame-group-inner">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['section'] = NULL;
$arguments113['partial'] = NULL;
$arguments113['delegate'] = NULL;
$arguments113['renderable'] = NULL;
$arguments113['arguments'] = array (
);
$arguments113['optional'] = false;
$arguments113['default'] = NULL;
$arguments113['contentAs'] = NULL;
$arguments113['debug'] = true;
$arguments113['partial'] = 'Frame/General/BackgroundImage';
$arguments113['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output96 .= '
                        <div class="frame-container frame-container-default">
                            <div class="frame-inner">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                                    <a id="c';
$array122 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array122)]);

$output121 .= '"></a>
                                ';
return $output121;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['__thenClosure'] = $renderChildrenClosure117;

$output96 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output96 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
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
$arguments128['partial'] = 'DropIn/Before/All';
$arguments128['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output127 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '
                                ';
return $output127;
};
$arguments123 = array();
$arguments123['section'] = NULL;
$arguments123['partial'] = NULL;
$arguments123['delegate'] = NULL;
$arguments123['renderable'] = NULL;
$arguments123['arguments'] = array (
);
$arguments123['optional'] = false;
$arguments123['default'] = NULL;
$arguments123['contentAs'] = NULL;
$arguments123['debug'] = true;
$arguments123['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array125['0'] = 'true';

$expression126 = function($context) {return TRUE;};
$arguments123['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output96 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['section'] = NULL;
$arguments136['partial'] = NULL;
$arguments136['delegate'] = NULL;
$arguments136['renderable'] = NULL;
$arguments136['arguments'] = array (
);
$arguments136['optional'] = false;
$arguments136['default'] = NULL;
$arguments136['contentAs'] = NULL;
$arguments136['debug'] = true;
$arguments136['partial'] = 'Header/All';
$arguments136['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output135 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
                                ';
return $output135;
};
$arguments131 = array();
$arguments131['section'] = NULL;
$arguments131['partial'] = NULL;
$arguments131['delegate'] = NULL;
$arguments131['renderable'] = NULL;
$arguments131['arguments'] = array (
);
$arguments131['optional'] = false;
$arguments131['default'] = NULL;
$arguments131['contentAs'] = NULL;
$arguments131['debug'] = true;
$arguments131['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array133['0'] = 'true';

$expression134 = function($context) {return TRUE;};
$arguments131['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output96 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['section'] = NULL;
$arguments139['partial'] = NULL;
$arguments139['delegate'] = NULL;
$arguments139['renderable'] = NULL;
$arguments139['arguments'] = array (
);
$arguments139['optional'] = false;
$arguments139['default'] = NULL;
$arguments139['contentAs'] = NULL;
$arguments139['debug'] = true;
$arguments139['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array141['0'] = 'true';

$expression142 = function($context) {return TRUE;};
$arguments139['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression142(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output96 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['section'] = NULL;
$arguments148['partial'] = NULL;
$arguments148['delegate'] = NULL;
$arguments148['renderable'] = NULL;
$arguments148['arguments'] = array (
);
$arguments148['optional'] = false;
$arguments148['default'] = NULL;
$arguments148['contentAs'] = NULL;
$arguments148['debug'] = true;
$arguments148['partial'] = 'Footer/All';
$arguments148['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
                                ';
return $output147;
};
$arguments143 = array();
$arguments143['section'] = NULL;
$arguments143['partial'] = NULL;
$arguments143['delegate'] = NULL;
$arguments143['renderable'] = NULL;
$arguments143['arguments'] = array (
);
$arguments143['optional'] = false;
$arguments143['default'] = NULL;
$arguments143['contentAs'] = NULL;
$arguments143['debug'] = true;
$arguments143['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array145 = array();
$array145['0'] = 'true';

$expression146 = function($context) {return TRUE;};
$arguments143['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output96 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['section'] = NULL;
$arguments156['partial'] = NULL;
$arguments156['delegate'] = NULL;
$arguments156['renderable'] = NULL;
$arguments156['arguments'] = array (
);
$arguments156['optional'] = false;
$arguments156['default'] = NULL;
$arguments156['contentAs'] = NULL;
$arguments156['debug'] = true;
$arguments156['partial'] = 'DropIn/After/All';
$arguments156['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
                                ';
return $output155;
};
$arguments151 = array();
$arguments151['section'] = NULL;
$arguments151['partial'] = NULL;
$arguments151['delegate'] = NULL;
$arguments151['renderable'] = NULL;
$arguments151['arguments'] = array (
);
$arguments151['optional'] = false;
$arguments151['default'] = NULL;
$arguments151['contentAs'] = NULL;
$arguments151['debug'] = true;
$arguments151['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array153 = array();
$array153['0'] = 'true';

$expression154 = function($context) {return TRUE;};
$arguments151['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)
					),
					$renderingContext
				);

$output96 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output96 .= '
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        ';
return $output96;
};
$arguments94['__elseClosures'][] = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '

            <a id="c';
$array160 = array (
);
$output159 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array160)]);

$output159 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
                <a id="c';
$array167 = array (
);
$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array167)]);

$output166 .= '"></a>
            ';
return $output166;
};
$arguments161 = array();
$arguments161['then'] = NULL;
$arguments161['else'] = NULL;
$arguments161['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array163 = array();
$array164 = array (
);$array163['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array164);

$expression165 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments161['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression165(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)
					),
					$renderingContext
				);
$arguments161['__thenClosure'] = $renderChildrenClosure162;

$output159 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output159 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
                <div class="frame-space-before ';
$array174 = array (
);
$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass', $array174)]);

$output173 .= '"></div>
            ';
return $output173;
};
$arguments168 = array();
$arguments168['then'] = NULL;
$arguments168['else'] = NULL;
$arguments168['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array170 = array();
$array171 = array (
);$array170['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array171);

$expression172 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments168['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression172(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array170)
					),
					$renderingContext
				);
$arguments168['__thenClosure'] = $renderChildrenClosure169;

$output159 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output159 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['section'] = NULL;
$arguments180['partial'] = NULL;
$arguments180['delegate'] = NULL;
$arguments180['renderable'] = NULL;
$arguments180['arguments'] = array (
);
$arguments180['optional'] = false;
$arguments180['default'] = NULL;
$arguments180['contentAs'] = NULL;
$arguments180['debug'] = true;
$arguments180['partial'] = 'DropIn/Before/All';
$arguments180['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '
            ';
return $output179;
};
$arguments175 = array();
$arguments175['section'] = NULL;
$arguments175['partial'] = NULL;
$arguments175['delegate'] = NULL;
$arguments175['renderable'] = NULL;
$arguments175['arguments'] = array (
);
$arguments175['optional'] = false;
$arguments175['default'] = NULL;
$arguments175['contentAs'] = NULL;
$arguments175['debug'] = true;
$arguments175['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array177['0'] = 'true';

$expression178 = function($context) {return TRUE;};
$arguments175['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression178(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);

$output159 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output159 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['section'] = NULL;
$arguments188['partial'] = NULL;
$arguments188['delegate'] = NULL;
$arguments188['renderable'] = NULL;
$arguments188['arguments'] = array (
);
$arguments188['optional'] = false;
$arguments188['default'] = NULL;
$arguments188['contentAs'] = NULL;
$arguments188['debug'] = true;
$arguments188['partial'] = 'Header/All';
$arguments188['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output187 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
            ';
return $output187;
};
$arguments183 = array();
$arguments183['section'] = NULL;
$arguments183['partial'] = NULL;
$arguments183['delegate'] = NULL;
$arguments183['renderable'] = NULL;
$arguments183['arguments'] = array (
);
$arguments183['optional'] = false;
$arguments183['default'] = NULL;
$arguments183['contentAs'] = NULL;
$arguments183['debug'] = true;
$arguments183['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array185 = array();
$array185['0'] = 'true';

$expression186 = function($context) {return TRUE;};
$arguments183['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression186(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);

$output159 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output159 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['section'] = NULL;
$arguments191['partial'] = NULL;
$arguments191['delegate'] = NULL;
$arguments191['renderable'] = NULL;
$arguments191['arguments'] = array (
);
$arguments191['optional'] = false;
$arguments191['default'] = NULL;
$arguments191['contentAs'] = NULL;
$arguments191['debug'] = true;
$arguments191['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array193 = array();
$array193['0'] = 'true';

$expression194 = function($context) {return TRUE;};
$arguments191['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression194(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array193)
					),
					$renderingContext
				);

$output159 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output159 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['section'] = NULL;
$arguments200['partial'] = NULL;
$arguments200['delegate'] = NULL;
$arguments200['renderable'] = NULL;
$arguments200['arguments'] = array (
);
$arguments200['optional'] = false;
$arguments200['default'] = NULL;
$arguments200['contentAs'] = NULL;
$arguments200['debug'] = true;
$arguments200['partial'] = 'Footer/All';
$arguments200['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output199 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext);

$output199 .= '
            ';
return $output199;
};
$arguments195 = array();
$arguments195['section'] = NULL;
$arguments195['partial'] = NULL;
$arguments195['delegate'] = NULL;
$arguments195['renderable'] = NULL;
$arguments195['arguments'] = array (
);
$arguments195['optional'] = false;
$arguments195['default'] = NULL;
$arguments195['contentAs'] = NULL;
$arguments195['debug'] = true;
$arguments195['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array197 = array();
$array197['0'] = 'true';

$expression198 = function($context) {return TRUE;};
$arguments195['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array197)
					),
					$renderingContext
				);

$output159 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output159 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['section'] = NULL;
$arguments208['partial'] = NULL;
$arguments208['delegate'] = NULL;
$arguments208['renderable'] = NULL;
$arguments208['arguments'] = array (
);
$arguments208['optional'] = false;
$arguments208['default'] = NULL;
$arguments208['contentAs'] = NULL;
$arguments208['debug'] = true;
$arguments208['partial'] = 'DropIn/After/All';
$arguments208['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output207 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
            ';
return $output207;
};
$arguments203 = array();
$arguments203['section'] = NULL;
$arguments203['partial'] = NULL;
$arguments203['delegate'] = NULL;
$arguments203['renderable'] = NULL;
$arguments203['arguments'] = array (
);
$arguments203['optional'] = false;
$arguments203['default'] = NULL;
$arguments203['contentAs'] = NULL;
$arguments203['debug'] = true;
$arguments203['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array205 = array();
$array205['0'] = 'true';

$expression206 = function($context) {return TRUE;};
$arguments203['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array205)
					),
					$renderingContext
				);

$output159 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output159 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                <div class="frame-space-after ';
$array217 = array (
);
$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass', $array217)]);

$output216 .= '"></div>
            ';
return $output216;
};
$arguments211 = array();
$arguments211['then'] = NULL;
$arguments211['else'] = NULL;
$arguments211['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array214);

$expression215 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments211['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
$arguments211['__thenClosure'] = $renderChildrenClosure212;

$output159 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output159 .= '

        ';
return $output159;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = array();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#