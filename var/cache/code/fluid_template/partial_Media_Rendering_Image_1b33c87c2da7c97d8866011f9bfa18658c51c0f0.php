<?php

class partial_Media_Rendering_Image_1b33c87c2da7c97d8866011f9bfa18658c51c0f0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<picture>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string7 = '{variant.breakpoint as integer}';
$array8 = array (
  0 => '{variant.breakpoint as integer}',
  1 => '{variant.breakpoint as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string7, $array8);
};
$arguments5 = array();
$arguments5['value'] = NULL;
$arguments5['name'] = NULL;
$arguments5['name'] = 'breakpoint';
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string11 = '{variant.width as integer}';
$array12 = array (
  0 => '{variant.width as integer}',
  1 => '{variant.width as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string11, $array12);
};
$arguments9 = array();
$arguments9['value'] = NULL;
$arguments9['name'] = NULL;
$arguments9['name'] = 'width';
$renderChildrenClosure10 = ($arguments9['value'] !== null) ? function() use ($arguments9) { return $arguments9['value']; } : $renderChildrenClosure10;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['value'] = NULL;
$arguments13['name'] = NULL;
$arguments13['name'] = 'height';
$arguments13['value'] = '';
$renderChildrenClosure14 = ($arguments13['value'] !== null) ? function() use ($arguments13) { return $arguments13['value']; } : $renderChildrenClosure14;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output4 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string29 = '{variant.aspectRatio as float}';
$array30 = array (
  0 => '{variant.aspectRatio as float}',
  1 => '{variant.aspectRatio as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string29, $array30);
};
$arguments27 = array();
$arguments27['value'] = NULL;
$arguments27['name'] = NULL;
$arguments27['name'] = 'aspectRatio';
$renderChildrenClosure28 = ($arguments27['value'] !== null) ? function() use ($arguments27) { return $arguments27['value']; } : $renderChildrenClosure28;
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output26 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string33 = '{width / aspectRatio}';
$array34 = array (
  0 => '{width / aspectRatio}',
  1 => '{width / aspectRatio}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string33, $array34);
};
$arguments31 = array();
$arguments31['value'] = NULL;
$arguments31['name'] = NULL;
$arguments31['name'] = 'height';
$renderChildrenClosure32 = ($arguments31['value'] !== null) ? function() use ($arguments31) { return $arguments31['value']; } : $renderChildrenClosure32;
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output26 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string37 = '{height as integer}';
$array38 = array (
  0 => '{height as integer}',
  1 => '{height as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string37, $array38);
};
$arguments35 = array();
$arguments35['value'] = NULL;
$arguments35['name'] = NULL;
$arguments35['name'] = 'height';
$renderChildrenClosure36 = ($arguments35['value'] !== null) ? function() use ($arguments35) { return $arguments35['value']; } : $renderChildrenClosure36;
$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output26 .= '
            ';
return $output26;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('variant.aspectRatio', $array24);

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['then'] = NULL;
$arguments41['else'] = NULL;
$arguments41['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array43 = array();
$array44 = array (
);$array43['0'] = $renderingContext->getVariableProvider()->getByPath('breakpoint', $array44);

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments41['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array43)
					),
					$renderingContext
				);
$output46 = '';

$output46 .= 'media="(min-width: ';
$array47 = array (
);
$output46 .= $renderingContext->getVariableProvider()->getByPath('breakpoint', $array47);

$output46 .= 'px)"';
$arguments41['then'] = $output46;
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);
};
$arguments39 = array();
$arguments39['value'] = NULL;
$arguments39['name'] = NULL;
$arguments39['name'] = 'mediaQuery';
$renderChildrenClosure40 = ($arguments39['value'] !== null) ? function() use ($arguments39) { return $arguments39['value']; } : $renderChildrenClosure40;
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output20 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments54 = array();
$arguments54['value'] = NULL;
$arguments54['name'] = NULL;
$arguments54['name'] = 'srcset';
$arguments54['value'] = '';
$renderChildrenClosure55 = ($arguments54['value'] !== null) ? function() use ($arguments54) { return $arguments54['value']; } : $renderChildrenClosure55;
$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output53 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string62 = '{sizeConfig.multiplier as float}';
$array63 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string62, $array63);
};
$arguments60 = array();
$arguments60['value'] = NULL;
$arguments60['name'] = NULL;
$arguments60['name'] = 'sizeWidth';
$renderChildrenClosure61 = ($arguments60['value'] !== null) ? function() use ($arguments60) { return $arguments60['value']; } : $renderChildrenClosure61;
$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output59 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string66 = '{sizeWidth * width}';
$array67 = array (
  0 => '{sizeWidth * width}',
  1 => '{sizeWidth * width}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string66, $array67);
};
$arguments64 = array();
$arguments64['value'] = NULL;
$arguments64['name'] = NULL;
$arguments64['name'] = 'sizeWidth';
$renderChildrenClosure65 = ($arguments64['value'] !== null) ? function() use ($arguments64) { return $arguments64['value']; } : $renderChildrenClosure65;
$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output59 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['value'] = NULL;
$arguments68['name'] = NULL;
$arguments68['name'] = 'sizeHeight';
$arguments68['value'] = '';
$renderChildrenClosure69 = ($arguments68['value'] !== null) ? function() use ($arguments68) { return $arguments68['value']; } : $renderChildrenClosure69;
$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output59 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string108 = '{sizeConfig.multiplier as float}';
$array109 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string108, $array109);
};
$arguments106 = array();
$arguments106['value'] = NULL;
$arguments106['name'] = NULL;
$arguments106['name'] = 'sizeHeight';
$renderChildrenClosure107 = ($arguments106['value'] !== null) ? function() use ($arguments106) { return $arguments106['value']; } : $renderChildrenClosure107;
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext)]);

$output105 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string112 = '{sizeHeight * height}';
$array113 = array (
  0 => '{sizeHeight * height}',
  1 => '{sizeHeight * height}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string112, $array113);
};
$arguments110 = array();
$arguments110['value'] = NULL;
$arguments110['name'] = NULL;
$arguments110['name'] = 'sizeHeight';
$renderChildrenClosure111 = ($arguments110['value'] !== null) ? function() use ($arguments110) { return $arguments110['value']; } : $renderChildrenClosure111;
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output105 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['src'] = '';
$arguments116['treatIdAsReference'] = false;
$arguments116['image'] = NULL;
$arguments116['crop'] = NULL;
$arguments116['cropVariant'] = 'default';
$arguments116['fileExtension'] = NULL;
$arguments116['width'] = NULL;
$arguments116['height'] = NULL;
$arguments116['minWidth'] = NULL;
$arguments116['minHeight'] = NULL;
$arguments116['maxWidth'] = NULL;
$arguments116['maxHeight'] = NULL;
$arguments116['absolute'] = false;
$array118 = array (
);$arguments116['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array118);
$array119 = array (
);$arguments116['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name', $array119);
$output120 = '';
$array121 = array (
);
$output120 .= $renderingContext->getVariableProvider()->getByPath('sizeWidth', $array121);

$output120 .= 'c';
$arguments116['width'] = $output120;
$output122 = '';
$array123 = array (
);
$output122 .= $renderingContext->getVariableProvider()->getByPath('sizeHeight', $array123);

$output122 .= 'c';
$arguments116['height'] = $output122;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
};
$arguments114 = array();
$arguments114['value'] = NULL;
$arguments114['name'] = NULL;
$arguments114['name'] = 'sizeUrl';
$renderChildrenClosure115 = ($arguments114['value'] !== null) ? function() use ($arguments114) { return $arguments114['value']; } : $renderChildrenClosure115;
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output105 .= '
                        ';
return $output105;
};
$arguments103 = array();

$output102 .= '';

$output102 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$output126 = '';

$output126 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['src'] = '';
$arguments129['treatIdAsReference'] = false;
$arguments129['image'] = NULL;
$arguments129['crop'] = NULL;
$arguments129['cropVariant'] = 'default';
$arguments129['fileExtension'] = NULL;
$arguments129['width'] = NULL;
$arguments129['height'] = NULL;
$arguments129['minWidth'] = NULL;
$arguments129['minHeight'] = NULL;
$arguments129['maxWidth'] = NULL;
$arguments129['maxHeight'] = NULL;
$arguments129['absolute'] = false;
$array131 = array (
);$arguments129['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array131);
$array132 = array (
);$arguments129['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name', $array132);
$array133 = array (
);$arguments129['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('sizeWidth', $array133);
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);
};
$arguments127 = array();
$arguments127['value'] = NULL;
$arguments127['name'] = NULL;
$arguments127['name'] = 'sizeUrl';
$renderChildrenClosure128 = ($arguments127['value'] !== null) ? function() use ($arguments127) { return $arguments127['value']; } : $renderChildrenClosure128;
$output126 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output126 .= '
                        ';
return $output126;
};
$arguments124 = array();
$arguments124['if'] = NULL;

$output102 .= '';

$output102 .= '
                    ';
return $output102;
};
$arguments70 = array();
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$arguments70['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('height', $array100);

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments70['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments70['__thenClosure'] = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string75 = '{sizeConfig.multiplier as float}';
$array76 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string75, $array76);
};
$arguments73 = array();
$arguments73['value'] = NULL;
$arguments73['name'] = NULL;
$arguments73['name'] = 'sizeHeight';
$renderChildrenClosure74 = ($arguments73['value'] !== null) ? function() use ($arguments73) { return $arguments73['value']; } : $renderChildrenClosure74;
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output72 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string79 = '{sizeHeight * height}';
$array80 = array (
  0 => '{sizeHeight * height}',
  1 => '{sizeHeight * height}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string79, $array80);
};
$arguments77 = array();
$arguments77['value'] = NULL;
$arguments77['name'] = NULL;
$arguments77['name'] = 'sizeHeight';
$renderChildrenClosure78 = ($arguments77['value'] !== null) ? function() use ($arguments77) { return $arguments77['value']; } : $renderChildrenClosure78;
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output72 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['src'] = '';
$arguments83['treatIdAsReference'] = false;
$arguments83['image'] = NULL;
$arguments83['crop'] = NULL;
$arguments83['cropVariant'] = 'default';
$arguments83['fileExtension'] = NULL;
$arguments83['width'] = NULL;
$arguments83['height'] = NULL;
$arguments83['minWidth'] = NULL;
$arguments83['minHeight'] = NULL;
$arguments83['maxWidth'] = NULL;
$arguments83['maxHeight'] = NULL;
$arguments83['absolute'] = false;
$array85 = array (
);$arguments83['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array85);
$array86 = array (
);$arguments83['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name', $array86);
$output87 = '';
$array88 = array (
);
$output87 .= $renderingContext->getVariableProvider()->getByPath('sizeWidth', $array88);

$output87 .= 'c';
$arguments83['width'] = $output87;
$output89 = '';
$array90 = array (
);
$output89 .= $renderingContext->getVariableProvider()->getByPath('sizeHeight', $array90);

$output89 .= 'c';
$arguments83['height'] = $output89;
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);
};
$arguments81 = array();
$arguments81['value'] = NULL;
$arguments81['name'] = NULL;
$arguments81['name'] = 'sizeUrl';
$renderChildrenClosure82 = ($arguments81['value'] !== null) ? function() use ($arguments81) { return $arguments81['value']; } : $renderChildrenClosure82;
$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output72 .= '
                        ';
return $output72;
};
$arguments70['__elseClosures'][] = function() use ($renderingContext, $self) {
$output91 = '';

$output91 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['src'] = '';
$arguments94['treatIdAsReference'] = false;
$arguments94['image'] = NULL;
$arguments94['crop'] = NULL;
$arguments94['cropVariant'] = 'default';
$arguments94['fileExtension'] = NULL;
$arguments94['width'] = NULL;
$arguments94['height'] = NULL;
$arguments94['minWidth'] = NULL;
$arguments94['minHeight'] = NULL;
$arguments94['maxWidth'] = NULL;
$arguments94['maxHeight'] = NULL;
$arguments94['absolute'] = false;
$array96 = array (
);$arguments94['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array96);
$array97 = array (
);$arguments94['cropVariant'] = $renderingContext->getVariableProvider()->getByPath('name', $array97);
$array98 = array (
);$arguments94['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('sizeWidth', $array98);
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);
};
$arguments92 = array();
$arguments92['value'] = NULL;
$arguments92['name'] = NULL;
$arguments92['name'] = 'sizeUrl';
$renderChildrenClosure93 = ($arguments92['value'] !== null) ? function() use ($arguments92) { return $arguments92['value']; } : $renderChildrenClosure93;
$output91 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext)]);

$output91 .= '
                        ';
return $output91;
};

$output59 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output59 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';
$array137 = array (
);
$output136 .= $renderingContext->getVariableProvider()->getByPath('srcset', $array137);
$array138 = array (
);
$output136 .= $renderingContext->getVariableProvider()->getByPath('sizeUrl', $array138);

$output136 .= ' ';
$array139 = array (
);
$output136 .= $renderingContext->getVariableProvider()->getByPath('sizeKey', $array139);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments140 = array();
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('iteration.isLast', $array143);

$expression144 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['else'] = ',';
$arguments140['__thenClosure'] = $renderChildrenClosure141;

$output136 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);
return $output136;
};
$arguments134 = array();
$arguments134['value'] = NULL;
$arguments134['name'] = NULL;
$arguments134['name'] = 'srcset';
$renderChildrenClosure135 = ($arguments134['value'] !== null) ? function() use ($arguments134) { return $arguments134['value']; } : $renderChildrenClosure135;
$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext)]);

$output59 .= '
                ';
return $output59;
};
$arguments56 = array();
$arguments56['each'] = NULL;
$arguments56['as'] = NULL;
$arguments56['key'] = NULL;
$arguments56['reverse'] = false;
$arguments56['iteration'] = NULL;
$array58 = array (
);$arguments56['each'] = $renderingContext->getVariableProvider()->getByPath('variant.sizes', $array58);
$arguments56['key'] = 'sizeKey';
$arguments56['as'] = 'sizeConfig';
$arguments56['iteration'] = 'iteration';

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output53 .= '
            ';
return $output53;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('variant.sizes', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = $renderChildrenClosure49;

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output20 .= '
            <source data-variant="';
$array145 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('name', $array145)]);

$output20 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['then'] = NULL;
$arguments146['else'] = NULL;
$arguments146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array148 = array();
$array149 = array (
);$array148['0'] = $renderingContext->getVariableProvider()->getByPath('sizeHeight', $array149);

$expression150 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression150(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array148)
					),
					$renderingContext
				);
$output151 = '';

$output151 .= 'data-width="';
$array152 = array (
);
$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('width', $array152)]);

$output151 .= '" data-height="';
$array153 = array (
);
$output151 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sizeHeight', $array153)]);

$output151 .= '"';
$arguments146['then'] = $output151;
$output154 = '';

$output154 .= 'data-maxwidth="';
$array155 = array (
);
$output154 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('width', $array155)]);

$output154 .= '"';
$arguments146['else'] = $output154;

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext);

$output20 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
$array158 = array (
);return $renderingContext->getVariableProvider()->getByPath('mediaQuery', $array158);
};
$arguments156 = array();
$arguments156['value'] = NULL;

$output20 .= isset($arguments156['value']) ? $arguments156['value'] : $renderChildrenClosure157();

$output20 .= ' srcset="';
$array159 = array (
);
$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('srcset', $array159)]);

$output20 .= '">
        ';
return $output20;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['0'] = $renderingContext->getVariableProvider()->getByPath('width', $array18);

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = $renderChildrenClosure16;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output4 .= '
    ';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('variants', $array3);
$arguments1['key'] = 'name';
$arguments1['as'] = 'variant';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['value'] = NULL;
$arguments160['name'] = NULL;
$arguments160['name'] = 'defaultWidth';
$array162 = array (
);$arguments160['value'] = $renderingContext->getVariableProvider()->getByPath('variants.default.width', $array162);
$renderChildrenClosure161 = ($arguments160['value'] !== null) ? function() use ($arguments160) { return $arguments160['value']; } : $renderChildrenClosure161;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['value'] = NULL;
$arguments163['name'] = NULL;
$arguments163['name'] = 'defaultAspectRatio';
$array165 = array (
);$arguments163['value'] = $renderingContext->getVariableProvider()->getByPath('variants.default.aspectRatio', $array165);
$renderChildrenClosure164 = ($arguments163['value'] !== null) ? function() use ($arguments163) { return $arguments163['value']; } : $renderChildrenClosure164;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string174 = '{defaultAspectRatio as float}';
$array175 = array (
  0 => '{defaultAspectRatio as float}',
  1 => '{defaultAspectRatio as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string174, $array175);
};
$arguments172 = array();
$arguments172['value'] = NULL;
$arguments172['name'] = NULL;
$arguments172['name'] = 'aspectRatio';
$renderChildrenClosure173 = ($arguments172['value'] !== null) ? function() use ($arguments172) { return $arguments172['value']; } : $renderChildrenClosure173;
$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext)]);

$output171 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string178 = '{defaultWidth / aspectRatio}';
$array179 = array (
  0 => '{defaultWidth / aspectRatio}',
  1 => '{defaultWidth / aspectRatio}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string178, $array179);
};
$arguments176 = array();
$arguments176['value'] = NULL;
$arguments176['name'] = NULL;
$arguments176['name'] = 'defaultHeight';
$renderChildrenClosure177 = ($arguments176['value'] !== null) ? function() use ($arguments176) { return $arguments176['value']; } : $renderChildrenClosure177;
$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext)]);

$output171 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output182 = '';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string183 = '{defaultHeight as integer}';
$array184 = array (
  0 => '{defaultHeight as integer}',
  1 => '{defaultHeight as integer}',
);

$output182 .= \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string183, $array184);

$output182 .= 'c';
return $output182;
};
$arguments180 = array();
$arguments180['value'] = NULL;
$arguments180['name'] = NULL;
$arguments180['name'] = 'defaultHeight';
$renderChildrenClosure181 = ($arguments180['value'] !== null) ? function() use ($arguments180) { return $arguments180['value']; } : $renderChildrenClosure181;
$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext)]);

$output171 .= '
    ';
return $output171;
};
$arguments166 = array();
$arguments166['then'] = NULL;
$arguments166['else'] = NULL;
$arguments166['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array168 = array();
$array169 = array (
);$array168['0'] = $renderingContext->getVariableProvider()->getByPath('defaultAspectRatio', $array169);

$expression170 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments166['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array168)
					),
					$renderingContext
				);
$arguments166['__thenClosure'] = $renderChildrenClosure167;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['value'] = NULL;
$arguments209['name'] = NULL;
$arguments209['name'] = 'src';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$arguments211['src'] = '';
$arguments211['treatIdAsReference'] = false;
$arguments211['image'] = NULL;
$arguments211['crop'] = NULL;
$arguments211['cropVariant'] = 'default';
$arguments211['fileExtension'] = NULL;
$arguments211['width'] = NULL;
$arguments211['height'] = NULL;
$arguments211['minWidth'] = NULL;
$arguments211['minHeight'] = NULL;
$arguments211['maxWidth'] = NULL;
$arguments211['maxHeight'] = NULL;
$arguments211['absolute'] = false;
$array213 = array (
);$arguments211['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array213);
$arguments211['cropVariant'] = 'default';
$array214 = array (
);$arguments211['width'] = $renderingContext->getVariableProvider()->getByPath('defaultWidth', $array214);
$array215 = array (
);$arguments211['height'] = $renderingContext->getVariableProvider()->getByPath('defaultHeight', $array215);
$arguments209['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);
$renderChildrenClosure210 = ($arguments209['value'] !== null) ? function() use ($arguments209) { return $arguments209['value']; } : $renderChildrenClosure210;
$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext)]);

$output208 .= '
        ';
return $output208;
};
$arguments206 = array();

$output205 .= '';

$output205 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['value'] = NULL;
$arguments219['name'] = NULL;
$arguments219['name'] = 'src';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['src'] = '';
$arguments221['treatIdAsReference'] = false;
$arguments221['image'] = NULL;
$arguments221['crop'] = NULL;
$arguments221['cropVariant'] = 'default';
$arguments221['fileExtension'] = NULL;
$arguments221['width'] = NULL;
$arguments221['height'] = NULL;
$arguments221['minWidth'] = NULL;
$arguments221['minHeight'] = NULL;
$arguments221['maxWidth'] = NULL;
$arguments221['maxHeight'] = NULL;
$arguments221['absolute'] = false;
$array223 = array (
);$arguments221['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array223);
$arguments221['cropVariant'] = 'default';
$array224 = array (
);$arguments221['width'] = $renderingContext->getVariableProvider()->getByPath('defaultWidth', $array224);
$arguments219['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);
$renderChildrenClosure220 = ($arguments219['value'] !== null) ? function() use ($arguments219) { return $arguments219['value']; } : $renderChildrenClosure220;
$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext)]);

$output218 .= '
        ';
return $output218;
};
$arguments216 = array();
$arguments216['if'] = NULL;

$output205 .= '';

$output205 .= '
    ';
return $output205;
};
$arguments185 = array();
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$arguments185['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array202 = array();
$array203 = array (
);$array202['0'] = $renderingContext->getVariableProvider()->getByPath('defaultHeight', $array203);

$expression204 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments185['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression204(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array202)
					),
					$renderingContext
				);
$arguments185['__thenClosure'] = function() use ($renderingContext, $self) {
$output187 = '';

$output187 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['value'] = NULL;
$arguments188['name'] = NULL;
$arguments188['name'] = 'src';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['src'] = '';
$arguments190['treatIdAsReference'] = false;
$arguments190['image'] = NULL;
$arguments190['crop'] = NULL;
$arguments190['cropVariant'] = 'default';
$arguments190['fileExtension'] = NULL;
$arguments190['width'] = NULL;
$arguments190['height'] = NULL;
$arguments190['minWidth'] = NULL;
$arguments190['minHeight'] = NULL;
$arguments190['maxWidth'] = NULL;
$arguments190['maxHeight'] = NULL;
$arguments190['absolute'] = false;
$array192 = array (
);$arguments190['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array192);
$arguments190['cropVariant'] = 'default';
$array193 = array (
);$arguments190['width'] = $renderingContext->getVariableProvider()->getByPath('defaultWidth', $array193);
$array194 = array (
);$arguments190['height'] = $renderingContext->getVariableProvider()->getByPath('defaultHeight', $array194);
$arguments188['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);
$renderChildrenClosure189 = ($arguments188['value'] !== null) ? function() use ($arguments188) { return $arguments188['value']; } : $renderChildrenClosure189;
$output187 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext)]);

$output187 .= '
        ';
return $output187;
};
$arguments185['__elseClosures'][] = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['value'] = NULL;
$arguments196['name'] = NULL;
$arguments196['name'] = 'src';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments198 = array();
$arguments198['src'] = '';
$arguments198['treatIdAsReference'] = false;
$arguments198['image'] = NULL;
$arguments198['crop'] = NULL;
$arguments198['cropVariant'] = 'default';
$arguments198['fileExtension'] = NULL;
$arguments198['width'] = NULL;
$arguments198['height'] = NULL;
$arguments198['minWidth'] = NULL;
$arguments198['minHeight'] = NULL;
$arguments198['maxWidth'] = NULL;
$arguments198['maxHeight'] = NULL;
$arguments198['absolute'] = false;
$array200 = array (
);$arguments198['image'] = $renderingContext->getVariableProvider()->getByPath('file', $array200);
$arguments198['cropVariant'] = 'default';
$array201 = array (
);$arguments198['width'] = $renderingContext->getVariableProvider()->getByPath('defaultWidth', $array201);
$arguments196['value'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext);
$renderChildrenClosure197 = ($arguments196['value'] !== null) ? function() use ($arguments196) { return $arguments196['value']; } : $renderChildrenClosure197;
$output195 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext)]);

$output195 .= '
        ';
return $output195;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['value'] = NULL;
$arguments225['name'] = NULL;
$arguments225['name'] = 'finalWidth';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageInfoViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments227 = array();
$arguments227['src'] = NULL;
$arguments227['property'] = NULL;
$array229 = array (
);$arguments227['src'] = $renderingContext->getVariableProvider()->getByPath('src', $array229);
$arguments227['property'] = 'width';
$arguments225['value'] = BK2K\BootstrapPackage\ViewHelpers\Data\ImageInfoViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);
$renderChildrenClosure226 = ($arguments225['value'] !== null) ? function() use ($arguments225) { return $arguments225['value']; } : $renderChildrenClosure226;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['value'] = NULL;
$arguments230['name'] = NULL;
$arguments230['name'] = 'finalHeight';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageInfoViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['src'] = NULL;
$arguments232['property'] = NULL;
$array234 = array (
);$arguments232['src'] = $renderingContext->getVariableProvider()->getByPath('src', $array234);
$arguments232['property'] = 'height';
$arguments230['value'] = BK2K\BootstrapPackage\ViewHelpers\Data\ImageInfoViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);
$renderChildrenClosure231 = ($arguments230['value'] !== null) ? function() use ($arguments230) { return $arguments230['value']; } : $renderChildrenClosure231;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext)]);

$output0 .= '
    <img loading="lazy" src="';
$array235 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('src', $array235)]);

$output0 .= '" width="';
$array236 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('finalWidth', $array236)]);

$output0 .= '" height="';
$array237 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('finalHeight', $array237)]);

$output0 .= '" intrinsicsize="';
$array238 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('finalWidth', $array238)]);

$output0 .= 'x';
$array239 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('finalHeight', $array239)]);

$output0 .= '" title="';
$array240 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.title', $array240)]);

$output0 .= '" alt="';
$array241 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.alternative', $array241)]);

$output0 .= '">
</picture>

';

return $output0;
}


}
#