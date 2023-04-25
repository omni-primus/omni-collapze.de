<?php

class partial_Header_SubHeader_e762c412e261b2dbcb16ea0e4fc70901cbac4a24 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output124 = '';

$output124 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
            <h2 class="';
$array128 = array (
);
$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array128)]);

$output127 .= ' ';
$array129 = array (
);
$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array129)]);

$output127 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$array135 = array (
);return $renderingContext->getVariableProvider()->getByPath('subheader', $array135);
};
$arguments130 = array();
$arguments130['value'] = NULL;
$arguments130['keepQuotes'] = false;
$arguments130['encoding'] = 'UTF-8';
$arguments130['doubleEncode'] = true;
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array133['0'] = 'false';

$expression134 = function($context) {return FALSE;};
$arguments130['doubleEncode'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$value132 = ($arguments130['value'] !== NULL ? $arguments130['value'] : $renderChildrenClosure131());

$output127 .= !is_string($value132) && !(is_object($value132) && method_exists($value132, '__toString')) ? $value132 : htmlspecialchars($value132, ($arguments130['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments130['encoding'], $arguments130['doubleEncode']);

$output127 .= '</span>
            </h2>
        ';
return $output127;
};
$arguments125 = array();
$arguments125['value'] = NULL;
$arguments125['value'] = 1;

$output124 .= '';

$output124 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
            <h3 class="';
$array139 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array139)]);

$output138 .= ' ';
$array140 = array (
);
$output138 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array140)]);

$output138 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
$array146 = array (
);return $renderingContext->getVariableProvider()->getByPath('subheader', $array146);
};
$arguments141 = array();
$arguments141['value'] = NULL;
$arguments141['keepQuotes'] = false;
$arguments141['encoding'] = 'UTF-8';
$arguments141['doubleEncode'] = true;
// Rendering Boolean node
// Rendering Array
$array144 = array();
$array144['0'] = 'false';

$expression145 = function($context) {return FALSE;};
$arguments141['doubleEncode'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression145(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array144)
					),
					$renderingContext
				);
$value143 = ($arguments141['value'] !== NULL ? $arguments141['value'] : $renderChildrenClosure142());

$output138 .= !is_string($value143) && !(is_object($value143) && method_exists($value143, '__toString')) ? $value143 : htmlspecialchars($value143, ($arguments141['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments141['encoding'], $arguments141['doubleEncode']);

$output138 .= '</span>
            </h3>
        ';
return $output138;
};
$arguments136 = array();
$arguments136['value'] = NULL;
$arguments136['value'] = 2;

$output124 .= '';

$output124 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
$output149 = '';

$output149 .= '
            <h4 class="';
$array150 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array150)]);

$output149 .= ' ';
$array151 = array (
);
$output149 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array151)]);

$output149 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$array157 = array (
);return $renderingContext->getVariableProvider()->getByPath('subheader', $array157);
};
$arguments152 = array();
$arguments152['value'] = NULL;
$arguments152['keepQuotes'] = false;
$arguments152['encoding'] = 'UTF-8';
$arguments152['doubleEncode'] = true;
// Rendering Boolean node
// Rendering Array
$array155 = array();
$array155['0'] = 'false';

$expression156 = function($context) {return FALSE;};
$arguments152['doubleEncode'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression156(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)
					),
					$renderingContext
				);
$value154 = ($arguments152['value'] !== NULL ? $arguments152['value'] : $renderChildrenClosure153());

$output149 .= !is_string($value154) && !(is_object($value154) && method_exists($value154, '__toString')) ? $value154 : htmlspecialchars($value154, ($arguments152['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments152['encoding'], $arguments152['doubleEncode']);

$output149 .= '</span>
            </h4>
        ';
return $output149;
};
$arguments147 = array();
$arguments147['value'] = NULL;
$arguments147['value'] = 3;

$output124 .= '';

$output124 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
            <h5 class="';
$array161 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array161)]);

$output160 .= ' ';
$array162 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array162)]);

$output160 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$array168 = array (
);return $renderingContext->getVariableProvider()->getByPath('subheader', $array168);
};
$arguments163 = array();
$arguments163['value'] = NULL;
$arguments163['keepQuotes'] = false;
$arguments163['encoding'] = 'UTF-8';
$arguments163['doubleEncode'] = true;
// Rendering Boolean node
// Rendering Array
$array166 = array();
$array166['0'] = 'false';

$expression167 = function($context) {return FALSE;};
$arguments163['doubleEncode'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array166)
					),
					$renderingContext
				);
$value165 = ($arguments163['value'] !== NULL ? $arguments163['value'] : $renderChildrenClosure164());

$output160 .= !is_string($value165) && !(is_object($value165) && method_exists($value165, '__toString')) ? $value165 : htmlspecialchars($value165, ($arguments163['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments163['encoding'], $arguments163['doubleEncode']);

$output160 .= '</span>
            </h5>
        ';
return $output160;
};
$arguments158 = array();
$arguments158['value'] = NULL;
$arguments158['value'] = 4;

$output124 .= '';

$output124 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
            <h6 class="';
$array172 = array (
);
$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array172)]);

$output171 .= ' ';
$array173 = array (
);
$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array173)]);

$output171 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
$array179 = array (
);return $renderingContext->getVariableProvider()->getByPath('subheader', $array179);
};
$arguments174 = array();
$arguments174['value'] = NULL;
$arguments174['keepQuotes'] = false;
$arguments174['encoding'] = 'UTF-8';
$arguments174['doubleEncode'] = true;
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array177['0'] = 'false';

$expression178 = function($context) {return FALSE;};
$arguments174['doubleEncode'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression178(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);
$value176 = ($arguments174['value'] !== NULL ? $arguments174['value'] : $renderChildrenClosure175());

$output171 .= !is_string($value176) && !(is_object($value176) && method_exists($value176, '__toString')) ? $value176 : htmlspecialchars($value176, ($arguments174['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments174['encoding'], $arguments174['doubleEncode']);

$output171 .= '</span>
            </h6>
        ';
return $output171;
};
$arguments169 = array();
$arguments169['value'] = NULL;
$arguments169['value'] = 5;

$output124 .= '';

$output124 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
$output182 = '';

$output182 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['section'] = NULL;
$arguments189['partial'] = NULL;
$arguments189['delegate'] = NULL;
$arguments189['renderable'] = NULL;
$arguments189['arguments'] = array (
);
$arguments189['optional'] = false;
$arguments189['default'] = NULL;
$arguments189['contentAs'] = NULL;
$arguments189['debug'] = true;
$arguments189['partial'] = 'Header/SubHeader';
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['subheader'] = $renderingContext->getVariableProvider()->getByPath('subheader', $array192);
$array193 = array (
);$array191['class'] = $renderingContext->getVariableProvider()->getByPath('class', $array193);
$array194 = array (
);$array191['positionClass'] = $renderingContext->getVariableProvider()->getByPath('positionClass', $array194);
$array195 = array (
);$array191['layout'] = $renderingContext->getVariableProvider()->getByPath('default', $array195);
$arguments189['arguments'] = $array191;

$output188 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
            ';
return $output188;
};
$arguments183 = array();
$arguments183['then'] = NULL;
$arguments183['else'] = NULL;
$arguments183['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array185 = array();
$array186 = array (
);$array185['0'] = $renderingContext->getVariableProvider()->getByPath('default', $array186);

$expression187 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments183['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);
$arguments183['__thenClosure'] = $renderChildrenClosure184;

$output182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output182 .= '
        ';
return $output182;
};
$arguments180 = array();

$output124 .= '';

$output124 .= '
    ';
return $output124;
};
$arguments7 = array();
$arguments7['expression'] = NULL;
$array123 = array (
);$arguments7['expression'] = $renderingContext->getVariableProvider()->getByPath('layout', $array123);

$output6 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 1;
}): return call_user_func(function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
            <h2 class="';
$array10 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array10)]);

$output9 .= ' ';
$array11 = array (
);
$output9 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array11)]);

$output9 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$array17 = array (
);return $renderingContext->getVariableProvider()->getByPath('subheader', $array17);
};
$arguments12 = array();
$arguments12['value'] = NULL;
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = 'UTF-8';
$arguments12['doubleEncode'] = true;
// Rendering Boolean node
// Rendering Array
$array15 = array();
$array15['0'] = 'false';

$expression16 = function($context) {return FALSE;};
$arguments12['doubleEncode'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression16(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());

$output9 .= !is_string($value14) && !(is_object($value14) && method_exists($value14, '__toString')) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments12['encoding'], $arguments12['doubleEncode']);

$output9 .= '</span>
            </h2>
        ';
return $output9;
});
case call_user_func(function() use ($renderingContext, $self) {

return 2;
}): return call_user_func(function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
            <h3 class="';
$array30 = array (
);
$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array30)]);

$output29 .= ' ';
$array31 = array (
);
$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array31)]);

$output29 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array37 = array (
);return $renderingContext->getVariableProvider()->getByPath('subheader', $array37);
};
$arguments32 = array();
$arguments32['value'] = NULL;
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = 'UTF-8';
$arguments32['doubleEncode'] = true;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array35['0'] = 'false';

$expression36 = function($context) {return FALSE;};
$arguments32['doubleEncode'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output29 .= !is_string($value34) && !(is_object($value34) && method_exists($value34, '__toString')) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments32['encoding'], $arguments32['doubleEncode']);

$output29 .= '</span>
            </h3>
        ';
return $output29;
});
case call_user_func(function() use ($renderingContext, $self) {

return 3;
}): return call_user_func(function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
            <h4 class="';
$array50 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array50)]);

$output49 .= ' ';
$array51 = array (
);
$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array51)]);

$output49 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array57 = array (
);return $renderingContext->getVariableProvider()->getByPath('subheader', $array57);
};
$arguments52 = array();
$arguments52['value'] = NULL;
$arguments52['keepQuotes'] = false;
$arguments52['encoding'] = 'UTF-8';
$arguments52['doubleEncode'] = true;
// Rendering Boolean node
// Rendering Array
$array55 = array();
$array55['0'] = 'false';

$expression56 = function($context) {return FALSE;};
$arguments52['doubleEncode'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array55)
					),
					$renderingContext
				);
$value54 = ($arguments52['value'] !== NULL ? $arguments52['value'] : $renderChildrenClosure53());

$output49 .= !is_string($value54) && !(is_object($value54) && method_exists($value54, '__toString')) ? $value54 : htmlspecialchars($value54, ($arguments52['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments52['encoding'], $arguments52['doubleEncode']);

$output49 .= '</span>
            </h4>
        ';
return $output49;
});
case call_user_func(function() use ($renderingContext, $self) {

return 4;
}): return call_user_func(function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
            <h5 class="';
$array70 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array70)]);

$output69 .= ' ';
$array71 = array (
);
$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array71)]);

$output69 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$array77 = array (
);return $renderingContext->getVariableProvider()->getByPath('subheader', $array77);
};
$arguments72 = array();
$arguments72['value'] = NULL;
$arguments72['keepQuotes'] = false;
$arguments72['encoding'] = 'UTF-8';
$arguments72['doubleEncode'] = true;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array75['0'] = 'false';

$expression76 = function($context) {return FALSE;};
$arguments72['doubleEncode'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression76(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$value74 = ($arguments72['value'] !== NULL ? $arguments72['value'] : $renderChildrenClosure73());

$output69 .= !is_string($value74) && !(is_object($value74) && method_exists($value74, '__toString')) ? $value74 : htmlspecialchars($value74, ($arguments72['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments72['encoding'], $arguments72['doubleEncode']);

$output69 .= '</span>
            </h5>
        ';
return $output69;
});
case call_user_func(function() use ($renderingContext, $self) {

return 5;
}): return call_user_func(function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
            <h6 class="';
$array90 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class', $array90)]);

$output89 .= ' ';
$array91 = array (
);
$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass', $array91)]);

$output89 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$array97 = array (
);return $renderingContext->getVariableProvider()->getByPath('subheader', $array97);
};
$arguments92 = array();
$arguments92['value'] = NULL;
$arguments92['keepQuotes'] = false;
$arguments92['encoding'] = 'UTF-8';
$arguments92['doubleEncode'] = true;
// Rendering Boolean node
// Rendering Array
$array95 = array();
$array95['0'] = 'false';

$expression96 = function($context) {return FALSE;};
$arguments92['doubleEncode'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)
					),
					$renderingContext
				);
$value94 = ($arguments92['value'] !== NULL ? $arguments92['value'] : $renderChildrenClosure93());

$output89 .= !is_string($value94) && !(is_object($value94) && method_exists($value94, '__toString')) ? $value94 : htmlspecialchars($value94, ($arguments92['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments92['encoding'], $arguments92['doubleEncode']);

$output89 .= '</span>
            </h6>
        ';
return $output89;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['section'] = NULL;
$arguments116['partial'] = NULL;
$arguments116['delegate'] = NULL;
$arguments116['renderable'] = NULL;
$arguments116['arguments'] = array (
);
$arguments116['optional'] = false;
$arguments116['default'] = NULL;
$arguments116['contentAs'] = NULL;
$arguments116['debug'] = true;
$arguments116['partial'] = 'Header/SubHeader';
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['subheader'] = $renderingContext->getVariableProvider()->getByPath('subheader', $array119);
$array120 = array (
);$array118['class'] = $renderingContext->getVariableProvider()->getByPath('class', $array120);
$array121 = array (
);$array118['positionClass'] = $renderingContext->getVariableProvider()->getByPath('positionClass', $array121);
$array122 = array (
);$array118['layout'] = $renderingContext->getVariableProvider()->getByPath('default', $array122);
$arguments116['arguments'] = $array118;

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
            ';
return $output115;
};
$arguments110 = array();
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array112 = array();
$array113 = array (
);$array112['0'] = $renderingContext->getVariableProvider()->getByPath('default', $array113);

$expression114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array112)
					),
					$renderingContext
				);
$arguments110['__thenClosure'] = $renderChildrenClosure111;

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
        ';
return $output109;
});
}
}, array($arguments7));

$output6 .= '
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('subheader', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#