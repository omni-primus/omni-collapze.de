<?php

class partial_Navigation_Main_1e38dec67ac7e109717199a42eb7f41f76636c83 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section MainNavigation
 */
public function section_199fd3cbc502fb014cf96b9d63b613e89d1ba161(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output152 = '';

$output152 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments153 = array();

$output152 .= '';

$output152 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments158 = array();
$arguments158['then'] = NULL;
$arguments158['else'] = NULL;
$arguments158['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array160 = array();
$array161 = array (
);$array160['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array161);

$expression162 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments158['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression162(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array160)
					),
					$renderingContext
				);
$arguments158['then'] = ' active';

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$arguments163['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array166);

$expression167 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments163['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)
					),
					$renderingContext
				);
$arguments163['then'] = ' dropdown dropdown-hover';

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output157 .= '">
                            <a href="';
$array168 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array168)]);

$output157 .= '" id="nav-item-';
$array169 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array169)]);

$output157 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$arguments170['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array173);

$expression174 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments170['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression174(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
$arguments170['then'] = ' dropdown-toggle';

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output157 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments175 = array();
$arguments175['then'] = NULL;
$arguments175['else'] = NULL;
$arguments175['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array178 = array (
);$array177['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array178);

$expression179 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments175['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);
$output180 = '';

$output180 .= ' target="';
$array181 = array (
);
$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array181)]);

$output180 .= '"';
$arguments175['then'] = $output180;

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);

$output157 .= ' title="';
$array182 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array182)]);

$output157 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments183 = array();
$arguments183['then'] = NULL;
$arguments183['else'] = NULL;
$arguments183['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array185 = array();
$array186 = array (
);$array185['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array186);

$expression187 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments183['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);
$arguments183['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output157 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['icon'] = NULL;
$arguments195['height'] = NULL;
$arguments195['width'] = NULL;
$array197 = array (
);$arguments195['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array197);
$array198 = array (
);$arguments195['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array198);
$array199 = array (
);$arguments195['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array199);

$output194 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output194 .= '
                                    </span>
                                ';
return $output194;
};
$arguments188 = array();
$arguments188['then'] = NULL;
$arguments188['else'] = NULL;
$arguments188['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array190 = array();
$array191 = array (
);$array190['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array191);
$array190['1'] = ' && ';
$array192 = array (
);$array190['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array192);

$expression193 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments188['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array190)
					),
					$renderingContext
				);
$arguments188['__thenClosure'] = $renderChildrenClosure189;

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output157 .= '
                                <span class="nav-link-text">';
$array200 = array (
);
$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array200)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments201 = array();
$arguments201['then'] = NULL;
$arguments201['else'] = NULL;
$arguments201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array203 = array();
$array204 = array (
);$array203['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array204);

$expression205 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array203)
					),
					$renderingContext
				);
$arguments201['__thenClosure'] = $renderChildrenClosure202;

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output157 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array212 = array (
);
$output211 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array212)]);

$output211 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments256 = array();

$output255 .= '';

$output255 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
$output260 = '';

$output260 .= '
                                                <li>
                                                    <a href="';
$array261 = array (
);
$output260 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array261)]);

$output260 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments262 = array();
$arguments262['then'] = NULL;
$arguments262['else'] = NULL;
$arguments262['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array264 = array();
$array265 = array (
);$array264['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array265);

$expression266 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments262['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression266(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array264)
					),
					$renderingContext
				);
$arguments262['then'] = ' active';

$output260 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output260 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments267 = array();
$arguments267['then'] = NULL;
$arguments267['else'] = NULL;
$arguments267['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array269 = array();
$array270 = array (
);$array269['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array270);

$expression271 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments267['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression271(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array269)
					),
					$renderingContext
				);
$output272 = '';

$output272 .= ' target="';
$array273 = array (
);
$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array273)]);

$output272 .= '"';
$arguments267['then'] = $output272;

$output260 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output260 .= ' title="';
$array274 = array (
);
$output260 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array274)]);

$output260 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure276 = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['icon'] = NULL;
$arguments282['height'] = NULL;
$arguments282['width'] = NULL;
$array284 = array (
);$arguments282['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array284);
$array285 = array (
);$arguments282['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array285);
$array286 = array (
);$arguments282['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array286);

$output281 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output281 .= '
                                                            </span>
                                                        ';
return $output281;
};
$arguments275 = array();
$arguments275['then'] = NULL;
$arguments275['else'] = NULL;
$arguments275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array277 = array();
$array278 = array (
);$array277['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array278);
$array277['1'] = ' && ';
$array279 = array (
);$array277['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array279);

$expression280 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression280(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array277)
					),
					$renderingContext
				);
$arguments275['__thenClosure'] = $renderChildrenClosure276;

$output260 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext);

$output260 .= '
                                                        <span class="dropdown-text">';
$array287 = array (
);
$output260 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array287)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments288 = array();
$arguments288['then'] = NULL;
$arguments288['else'] = NULL;
$arguments288['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array290 = array();
$array291 = array (
);$array290['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array291);

$expression292 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments288['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression292(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array290)
					),
					$renderingContext
				);
$arguments288['__thenClosure'] = $renderChildrenClosure289;

$output260 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output260 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output260;
};
$arguments258 = array();
$arguments258['if'] = NULL;

$output255 .= '';

$output255 .= '
                                        ';
return $output255;
};
$arguments217 = array();
$arguments217['then'] = NULL;
$arguments217['else'] = NULL;
$arguments217['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array252 = array();
$array253 = array (
);$array252['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array253);

$expression254 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments217['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression254(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
$arguments217['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments217['__elseClosures'][] = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
                                                <li>
                                                    <a href="';
$array220 = array (
);
$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array220)]);

$output219 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments221 = array();
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$arguments221['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array224 = array (
);$array223['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array224);

$expression225 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments221['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);
$arguments221['then'] = ' active';

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output219 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments226 = array();
$arguments226['then'] = NULL;
$arguments226['else'] = NULL;
$arguments226['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array228 = array();
$array229 = array (
);$array228['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array229);

$expression230 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments226['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression230(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array228)
					),
					$renderingContext
				);
$output231 = '';

$output231 .= ' target="';
$array232 = array (
);
$output231 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array232)]);

$output231 .= '"';
$arguments226['then'] = $output231;

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output219 .= ' title="';
$array233 = array (
);
$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array233)]);

$output219 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output240 = '';

$output240 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments241 = array();
$arguments241['icon'] = NULL;
$arguments241['height'] = NULL;
$arguments241['width'] = NULL;
$array243 = array (
);$arguments241['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array243);
$array244 = array (
);$arguments241['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array244);
$array245 = array (
);$arguments241['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array245);

$output240 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);

$output240 .= '
                                                            </span>
                                                        ';
return $output240;
};
$arguments234 = array();
$arguments234['then'] = NULL;
$arguments234['else'] = NULL;
$arguments234['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array236 = array();
$array237 = array (
);$array236['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array237);
$array236['1'] = ' && ';
$array238 = array (
);$array236['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array238);

$expression239 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments234['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array236)
					),
					$renderingContext
				);
$arguments234['__thenClosure'] = $renderChildrenClosure235;

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output219 .= '
                                                        <span class="dropdown-text">';
$array246 = array (
);
$output219 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array246)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments247 = array();
$arguments247['then'] = NULL;
$arguments247['else'] = NULL;
$arguments247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array249 = array();
$array250 = array (
);$array249['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array250);

$expression251 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression251(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array249)
					),
					$renderingContext
				);
$arguments247['__thenClosure'] = $renderChildrenClosure248;

$output219 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);

$output219 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output219;
};

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
                                    ';
return $output216;
};
$arguments213 = array();
$arguments213['each'] = NULL;
$arguments213['as'] = NULL;
$arguments213['key'] = NULL;
$arguments213['reverse'] = false;
$arguments213['iteration'] = NULL;
$array215 = array (
);$arguments213['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array215);
$arguments213['as'] = 'child';

$output211 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output211 .= '
                                </ul>
                            ';
return $output211;
};
$arguments206 = array();
$arguments206['then'] = NULL;
$arguments206['else'] = NULL;
$arguments206['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array208 = array();
$array209 = array (
);$array208['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array209);

$expression210 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments206['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression210(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array208)
					),
					$renderingContext
				);
$arguments206['__thenClosure'] = $renderChildrenClosure207;

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output157 .= '
                        </li>
                    ';
return $output157;
};
$arguments155 = array();
$arguments155['if'] = NULL;

$output152 .= '';

$output152 .= '
                ';
return $output152;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array150);

$expression151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array149)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments11['__elseClosures'][] = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['then'] = NULL;
$arguments14['else'] = NULL;
$arguments14['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments14['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
$arguments14['then'] = ' active';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array21 = array();
$array22 = array (
);$array21['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array22);

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression23(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)
					),
					$renderingContext
				);
$arguments19['then'] = ' dropdown dropdown-hover';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output13 .= '">
                            <a href="';
$array24 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array24)]);

$output13 .= '" id="nav-item-';
$array25 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array25)]);

$output13 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array29);

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression30(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['then'] = ' dropdown-toggle';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$output36 = '';

$output36 .= ' target="';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array37)]);

$output36 .= '"';
$arguments31['then'] = $output36;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output13 .= ' title="';
$array38 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array38)]);

$output13 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array42);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output13 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['icon'] = NULL;
$arguments51['height'] = NULL;
$arguments51['width'] = NULL;
$array53 = array (
);$arguments51['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array53);
$array54 = array (
);$arguments51['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array54);
$array55 = array (
);$arguments51['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array55);

$output50 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                                    </span>
                                ';
return $output50;
};
$arguments44 = array();
$arguments44['then'] = NULL;
$arguments44['else'] = NULL;
$arguments44['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array47);
$array46['1'] = ' && ';
$array48 = array (
);$array46['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array48);

$expression49 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments44['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments44['__thenClosure'] = $renderChildrenClosure45;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output13 .= '
                                <span class="nav-link-text">';
$array56 = array (
);
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array56)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = array();
$array60 = array (
);$array59['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array60);

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression61(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments57['__thenClosure'] = $renderChildrenClosure58;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output13 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array68 = array (
);
$output67 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array68)]);

$output67 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments112 = array();

$output111 .= '';

$output111 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
                                                <li>
                                                    <a href="';
$array117 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array117)]);

$output116 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$arguments118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array121 = array (
);$array120['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array121);

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments118['then'] = ' active';

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output116 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array126);

$expression127 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$output128 = '';

$output128 .= ' target="';
$array129 = array (
);
$output128 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array129)]);

$output128 .= '"';
$arguments123['then'] = $output128;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output116 .= ' title="';
$array130 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array130)]);

$output116 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['icon'] = NULL;
$arguments138['height'] = NULL;
$arguments138['width'] = NULL;
$array140 = array (
);$arguments138['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array140);
$array141 = array (
);$arguments138['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array141);
$array142 = array (
);$arguments138['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array142);

$output137 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '
                                                            </span>
                                                        ';
return $output137;
};
$arguments131 = array();
$arguments131['then'] = NULL;
$arguments131['else'] = NULL;
$arguments131['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array134 = array (
);$array133['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array134);
$array133['1'] = ' && ';
$array135 = array (
);$array133['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array135);

$expression136 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments131['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);
$arguments131['__thenClosure'] = $renderChildrenClosure132;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output116 .= '
                                                        <span class="dropdown-text">';
$array143 = array (
);
$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array143)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments144 = array();
$arguments144['then'] = NULL;
$arguments144['else'] = NULL;
$arguments144['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array146 = array();
$array147 = array (
);$array146['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array147);

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments144['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression148(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array146)
					),
					$renderingContext
				);
$arguments144['__thenClosure'] = $renderChildrenClosure145;

$output116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output116 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output116;
};
$arguments114 = array();
$arguments114['if'] = NULL;

$output111 .= '';

$output111 .= '
                                        ';
return $output111;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array109);

$expression110 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments73['__elseClosures'][] = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                                                <li>
                                                    <a href="';
$array76 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array76)]);

$output75 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['then'] = NULL;
$arguments77['else'] = NULL;
$arguments77['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array79 = array();
$array80 = array (
);$array79['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array80);

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments77['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)
					),
					$renderingContext
				);
$arguments77['then'] = ' active';

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output75 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array85);

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$output87 = '';

$output87 .= ' target="';
$array88 = array (
);
$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array88)]);

$output87 .= '"';
$arguments82['then'] = $output87;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output75 .= ' title="';
$array89 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array89)]);

$output75 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output96 = '';

$output96 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['icon'] = NULL;
$arguments97['height'] = NULL;
$arguments97['width'] = NULL;
$array99 = array (
);$arguments97['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array99);
$array100 = array (
);$arguments97['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array100);
$array101 = array (
);$arguments97['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array101);

$output96 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output96 .= '
                                                            </span>
                                                        ';
return $output96;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array93);
$array92['1'] = ' && ';
$array94 = array (
);$array92['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array94);

$expression95 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression95(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output75 .= '
                                                        <span class="dropdown-text">';
$array102 = array (
);
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array102)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments103 = array();
$arguments103['then'] = NULL;
$arguments103['else'] = NULL;
$arguments103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array105 = array();
$array106 = array (
);$array105['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array106);

$expression107 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array105)
					),
					$renderingContext
				);
$arguments103['__thenClosure'] = $renderChildrenClosure104;

$output75 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output75 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output75;
};

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
                                    ';
return $output72;
};
$arguments69 = array();
$arguments69['each'] = NULL;
$arguments69['as'] = NULL;
$arguments69['key'] = NULL;
$arguments69['reverse'] = false;
$arguments69['iteration'] = NULL;
$array71 = array (
);$arguments69['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array71);
$arguments69['as'] = 'child';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output67 .= '
                                </ul>
                            ';
return $output67;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array64 = array();
$array65 = array (
);$array64['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array65);

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression66(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array64)
					),
					$renderingContext
				);
$arguments62['__thenClosure'] = $renderChildrenClosure63;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output13 .= '
                        </li>
                    ';
return $output13;
};

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            ';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array9);
$arguments7['as'] = 'item';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
        </ul>
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array4);

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
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output293 = '';

$output293 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure295 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= 'bp-page-header navbar navbar-mainnavigation navbar-';
$array297 = array (
);
$output296 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.style', $array297);
return $output296;
};
$arguments294 = array();
$arguments294['value'] = NULL;
$arguments294['name'] = NULL;
$arguments294['name'] = 'headerClass';
$renderChildrenClosure295 = ($arguments294['value'] !== null) ? function() use ($arguments294) { return $arguments294['value']; } : $renderChildrenClosure295;
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments294, $renderChildrenClosure295, $renderingContext)]);

$output293 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output300 = '';
$array301 = array (
);
$output300 .= $renderingContext->getVariableProvider()->getByPath('headerClass', $array301);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['then'] = NULL;
$arguments302['else'] = NULL;
$arguments302['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array304 = array();
$array305 = array (
);$array304['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array305);

$expression306 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments302['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression306(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array304)
					),
					$renderingContext
				);
$arguments302['then'] = ' navbar-has-image';

$output300 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);
return $output300;
};
$arguments298 = array();
$arguments298['value'] = NULL;
$arguments298['name'] = NULL;
$arguments298['name'] = 'headerClass';
$renderChildrenClosure299 = ($arguments298['value'] !== null) ? function() use ($arguments298) { return $arguments298['value']; } : $renderChildrenClosure299;
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext)]);

$output293 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$output309 = '';
$array310 = array (
);
$output309 .= $renderingContext->getVariableProvider()->getByPath('headerClass', $array310);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments311 = array();
$arguments311['then'] = NULL;
$arguments311['else'] = NULL;
$arguments311['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array313 = array();
$array314 = array (
);$array313['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array314);

$expression315 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments311['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression315(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array313)
					),
					$renderingContext
				);
$arguments311['else'] = ' navbar-top';
$output316 = '';

$output316 .= ' navbar-';
$array317 = array (
);
$output316 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array317);

$output316 .= ' navbar-fixed-';
$array318 = array (
);
$output316 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type', $array318);
$arguments311['then'] = $output316;

$output309 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);
return $output309;
};
$arguments307 = array();
$arguments307['value'] = NULL;
$arguments307['name'] = NULL;
$arguments307['name'] = 'headerClass';
$renderChildrenClosure308 = ($arguments307['value'] !== null) ? function() use ($arguments307) { return $arguments307['value']; } : $renderChildrenClosure308;
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext)]);

$output293 .= '
<header id="page-header" class="';
$array319 = array (
);
$output293 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headerClass', $array319)]);

$output293 .= '">
    <div class="container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$output330 = '';

$output330 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure332 = function() use ($renderingContext, $self) {
$output357 = '';

$output357 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$output360 = '';

$output360 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments361 = array();
$arguments361['src'] = '';
$arguments361['treatIdAsReference'] = false;
$arguments361['image'] = NULL;
$arguments361['crop'] = NULL;
$arguments361['cropVariant'] = 'default';
$arguments361['fileExtension'] = NULL;
$arguments361['width'] = NULL;
$arguments361['height'] = NULL;
$arguments361['minWidth'] = NULL;
$arguments361['minHeight'] = NULL;
$arguments361['maxWidth'] = NULL;
$arguments361['maxHeight'] = NULL;
$arguments361['absolute'] = false;
$array363 = array (
);$arguments361['image'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array363);

$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext)]);

$output360 .= '" alt="';
$array364 = array (
);
$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array364)]);

$output360 .= '" height="';
$array365 = array (
);
$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array365)]);

$output360 .= '" width="';
$array366 = array (
);
$output360 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array366)]);

$output360 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure368 = function() use ($renderingContext, $self) {
$output372 = '';

$output372 .= '
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments373 = array();
$arguments373['src'] = '';
$arguments373['treatIdAsReference'] = false;
$arguments373['image'] = NULL;
$arguments373['crop'] = NULL;
$arguments373['cropVariant'] = 'default';
$arguments373['fileExtension'] = NULL;
$arguments373['width'] = NULL;
$arguments373['height'] = NULL;
$arguments373['minWidth'] = NULL;
$arguments373['minHeight'] = NULL;
$arguments373['maxWidth'] = NULL;
$arguments373['maxHeight'] = NULL;
$arguments373['absolute'] = false;
$array375 = array (
);$arguments373['image'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array375);

$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext)]);

$output372 .= '" alt="';
$array376 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array376)]);

$output372 .= '" height="';
$array377 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array377)]);

$output372 .= '" width="';
$array378 = array (
);
$output372 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array378)]);

$output372 .= '">
                    ';
return $output372;
};
$arguments367 = array();
$arguments367['then'] = NULL;
$arguments367['else'] = NULL;
$arguments367['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array369 = array();
$array370 = array (
);$array369['0'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array370);

$expression371 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments367['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression371(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array369)
					),
					$renderingContext
				);
$arguments367['__thenClosure'] = $renderChildrenClosure368;

$output360 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output360 .= '
                ';
return $output360;
};
$arguments358 = array();

$output357 .= '';

$output357 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
$output381 = '';

$output381 .= '
                    <span>';
$array382 = array (
);
$output381 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array382)]);

$output381 .= '</span>
                ';
return $output381;
};
$arguments379 = array();
$arguments379['if'] = NULL;

$output357 .= '';

$output357 .= '
            ';
return $output357;
};
$arguments331 = array();
$arguments331['then'] = NULL;
$arguments331['else'] = NULL;
$arguments331['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array354 = array();
$array355 = array (
);$array354['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array355);

$expression356 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments331['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression356(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array354)
					),
					$renderingContext
				);
$arguments331['__thenClosure'] = function() use ($renderingContext, $self) {
$output333 = '';

$output333 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['src'] = '';
$arguments334['treatIdAsReference'] = false;
$arguments334['image'] = NULL;
$arguments334['crop'] = NULL;
$arguments334['cropVariant'] = 'default';
$arguments334['fileExtension'] = NULL;
$arguments334['width'] = NULL;
$arguments334['height'] = NULL;
$arguments334['minWidth'] = NULL;
$arguments334['minHeight'] = NULL;
$arguments334['maxWidth'] = NULL;
$arguments334['maxHeight'] = NULL;
$arguments334['absolute'] = false;
$array336 = array (
);$arguments334['image'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array336);

$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext)]);

$output333 .= '" alt="';
$array337 = array (
);
$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array337)]);

$output333 .= '" height="';
$array338 = array (
);
$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array338)]);

$output333 .= '" width="';
$array339 = array (
);
$output333 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array339)]);

$output333 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments346 = array();
$arguments346['src'] = '';
$arguments346['treatIdAsReference'] = false;
$arguments346['image'] = NULL;
$arguments346['crop'] = NULL;
$arguments346['cropVariant'] = 'default';
$arguments346['fileExtension'] = NULL;
$arguments346['width'] = NULL;
$arguments346['height'] = NULL;
$arguments346['minWidth'] = NULL;
$arguments346['minHeight'] = NULL;
$arguments346['maxWidth'] = NULL;
$arguments346['maxHeight'] = NULL;
$arguments346['absolute'] = false;
$array348 = array (
);$arguments346['image'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array348);

$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext)]);

$output345 .= '" alt="';
$array349 = array (
);
$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt', $array349)]);

$output345 .= '" height="';
$array350 = array (
);
$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height', $array350)]);

$output345 .= '" width="';
$array351 = array (
);
$output345 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width', $array351)]);

$output345 .= '">
                    ';
return $output345;
};
$arguments340 = array();
$arguments340['then'] = NULL;
$arguments340['else'] = NULL;
$arguments340['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array342 = array();
$array343 = array (
);$array342['0'] = $renderingContext->getVariableProvider()->getByPath('logo.inverted', $array343);

$expression344 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments340['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression344(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array342)
					),
					$renderingContext
				);
$arguments340['__thenClosure'] = $renderChildrenClosure341;

$output333 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output333 .= '
                ';
return $output333;
};
$arguments331['__elseClosures'][] = function() use ($renderingContext, $self) {
$output352 = '';

$output352 .= '
                    <span>';
$array353 = array (
);
$output352 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle', $array353)]);

$output352 .= '</span>
                ';
return $output352;
};

$output330 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext);

$output330 .= '
        ';
return $output330;
};
$arguments320 = array();
$arguments320['additionalAttributes'] = NULL;
$arguments320['data'] = NULL;
$arguments320['aria'] = NULL;
$arguments320['class'] = NULL;
$arguments320['dir'] = NULL;
$arguments320['id'] = NULL;
$arguments320['lang'] = NULL;
$arguments320['style'] = NULL;
$arguments320['title'] = NULL;
$arguments320['accesskey'] = NULL;
$arguments320['tabindex'] = NULL;
$arguments320['onclick'] = NULL;
$arguments320['target'] = NULL;
$arguments320['rel'] = NULL;
$arguments320['pageUid'] = NULL;
$arguments320['pageType'] = NULL;
$arguments320['noCache'] = NULL;
$arguments320['language'] = NULL;
$arguments320['section'] = NULL;
$arguments320['linkAccessRestrictedPages'] = NULL;
$arguments320['additionalParams'] = NULL;
$arguments320['absolute'] = NULL;
$arguments320['addQueryString'] = NULL;
$arguments320['argumentsToBeExcludedFromQueryString'] = NULL;
$arguments320['addQueryStringMethod'] = NULL;
$array322 = array (
);$arguments320['pageUid'] = $renderingContext->getVariableProvider()->getByPath('rootPage', $array322);
$output323 = '';

$output323 .= 'navbar-brand navbar-brand-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['then'] = NULL;
$arguments324['else'] = NULL;
$arguments324['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['0'] = $renderingContext->getVariableProvider()->getByPath('logo.normal', $array327);

$expression328 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments324['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array326)
					),
					$renderingContext
				);
$arguments324['then'] = 'image';
$arguments324['else'] = 'text';

$output323 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);
$arguments320['class'] = $output323;
$array329 = array (
);$arguments320['title'] = $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle', $array329);

$output293 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments320, $renderChildrenClosure321, $renderingContext);

$output293 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure384 = function() use ($renderingContext, $self) {
$output388 = '';

$output388 .= '
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#mainnavigation" data-bs-target="#mainnavigation" aria-controls="mainnavigation" aria-expanded="false" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure390 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments389 = array();
$arguments389['key'] = NULL;
$arguments389['id'] = NULL;
$arguments389['default'] = NULL;
$arguments389['arguments'] = NULL;
$arguments389['extensionName'] = NULL;
$arguments389['languageKey'] = NULL;
$arguments389['alternativeLanguageKeys'] = NULL;
$arguments389['key'] = 'togglenavigation';
$arguments389['extensionName'] = 'bootstrap_package';

$output388 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext)]);

$output388 .= '">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav id="mainnavigation" class="collapse navbar-collapse">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments391 = array();
$arguments391['section'] = NULL;
$arguments391['partial'] = NULL;
$arguments391['delegate'] = NULL;
$arguments391['renderable'] = NULL;
$arguments391['arguments'] = array (
);
$arguments391['optional'] = false;
$arguments391['default'] = NULL;
$arguments391['contentAs'] = NULL;
$arguments391['debug'] = true;
$arguments391['partial'] = 'DropIn/Navigation/MainBefore';
$arguments391['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output388 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext);

$output388 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['section'] = NULL;
$arguments394['partial'] = NULL;
$arguments394['delegate'] = NULL;
$arguments394['renderable'] = NULL;
$arguments394['arguments'] = array (
);
$arguments394['optional'] = false;
$arguments394['default'] = NULL;
$arguments394['contentAs'] = NULL;
$arguments394['debug'] = true;
$arguments394['section'] = 'MainNavigation';
// Rendering Array
$array396 = array();
$array397 = array (
);$array396['menu'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array397);
$array398 = array (
);$array396['theme'] = $renderingContext->getVariableProvider()->getByPath('theme', $array398);
$arguments394['arguments'] = $array396;

$output388 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output388 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments399 = array();
$arguments399['section'] = NULL;
$arguments399['partial'] = NULL;
$arguments399['delegate'] = NULL;
$arguments399['renderable'] = NULL;
$arguments399['arguments'] = array (
);
$arguments399['optional'] = false;
$arguments399['default'] = NULL;
$arguments399['contentAs'] = NULL;
$arguments399['debug'] = true;
$arguments399['partial'] = 'DropIn/Navigation/MainAfter';
$arguments399['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output388 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output388 .= '
            </nav>
        ';
return $output388;
};
$arguments383 = array();
$arguments383['then'] = NULL;
$arguments383['else'] = NULL;
$arguments383['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array385 = array();
$array386 = array (
);$array385['0'] = $renderingContext->getVariableProvider()->getByPath('mainnavigation', $array386);

$expression387 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments383['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression387(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array385)
					),
					$renderingContext
				);
$arguments383['__thenClosure'] = $renderChildrenClosure384;

$output293 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments383, $renderChildrenClosure384, $renderingContext);

$output293 .= '
    </div>
</header>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$output404 = '';

$output404 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure406 = function() use ($renderingContext, $self) {
$output410 = '';

$output410 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
$output414 = '';

$output414 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure416 = function() use ($renderingContext, $self) {
$output556 = '';

$output556 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure558 = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments557 = array();

$output556 .= '';

$output556 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
$output561 = '';

$output561 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments562 = array();
$arguments562['then'] = NULL;
$arguments562['else'] = NULL;
$arguments562['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array564 = array();
$array565 = array (
);$array564['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array565);

$expression566 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments562['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression566(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array564)
					),
					$renderingContext
				);
$arguments562['then'] = ' active';

$output561 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure568 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments567 = array();
$arguments567['then'] = NULL;
$arguments567['else'] = NULL;
$arguments567['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array569 = array();
$array570 = array (
);$array569['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array570);

$expression571 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments567['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression571(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array569)
					),
					$renderingContext
				);
$arguments567['then'] = ' dropdown dropdown-hover';

$output561 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments567, $renderChildrenClosure568, $renderingContext);

$output561 .= '">
                            <a href="';
$array572 = array (
);
$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array572)]);

$output561 .= '" id="nav-item-';
$array573 = array (
);
$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array573)]);

$output561 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments574 = array();
$arguments574['then'] = NULL;
$arguments574['else'] = NULL;
$arguments574['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array576 = array();
$array577 = array (
);$array576['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array577);

$expression578 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments574['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression578(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array576)
					),
					$renderingContext
				);
$arguments574['then'] = ' dropdown-toggle';

$output561 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext);

$output561 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure580 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments579 = array();
$arguments579['then'] = NULL;
$arguments579['else'] = NULL;
$arguments579['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array581 = array();
$array582 = array (
);$array581['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array582);

$expression583 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments579['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression583(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array581)
					),
					$renderingContext
				);
$output584 = '';

$output584 .= ' target="';
$array585 = array (
);
$output584 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array585)]);

$output584 .= '"';
$arguments579['then'] = $output584;

$output561 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments579, $renderChildrenClosure580, $renderingContext);

$output561 .= ' title="';
$array586 = array (
);
$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array586)]);

$output561 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments587 = array();
$arguments587['then'] = NULL;
$arguments587['else'] = NULL;
$arguments587['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array589 = array();
$array590 = array (
);$array589['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array590);

$expression591 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments587['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression591(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array589)
					),
					$renderingContext
				);
$arguments587['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output561 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output561 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure593 = function() use ($renderingContext, $self) {
$output598 = '';

$output598 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure600 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments599 = array();
$arguments599['icon'] = NULL;
$arguments599['height'] = NULL;
$arguments599['width'] = NULL;
$array601 = array (
);$arguments599['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array601);
$array602 = array (
);$arguments599['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array602);
$array603 = array (
);$arguments599['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array603);

$output598 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments599, $renderChildrenClosure600, $renderingContext);

$output598 .= '
                                    </span>
                                ';
return $output598;
};
$arguments592 = array();
$arguments592['then'] = NULL;
$arguments592['else'] = NULL;
$arguments592['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array594 = array();
$array595 = array (
);$array594['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array595);
$array594['1'] = ' && ';
$array596 = array (
);$array594['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array596);

$expression597 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments592['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression597(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array594)
					),
					$renderingContext
				);
$arguments592['__thenClosure'] = $renderChildrenClosure593;

$output561 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments592, $renderChildrenClosure593, $renderingContext);

$output561 .= '
                                <span class="nav-link-text">';
$array604 = array (
);
$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array604)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments605 = array();
$arguments605['then'] = NULL;
$arguments605['else'] = NULL;
$arguments605['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array607 = array();
$array608 = array (
);$array607['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array608);

$expression609 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments605['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression609(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array607)
					),
					$renderingContext
				);
$arguments605['__thenClosure'] = $renderChildrenClosure606;

$output561 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments605, $renderChildrenClosure606, $renderingContext);

$output561 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure611 = function() use ($renderingContext, $self) {
$output615 = '';

$output615 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array616 = array (
);
$output615 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array616)]);

$output615 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
$output620 = '';

$output620 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
$output659 = '';

$output659 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments660 = array();

$output659 .= '';

$output659 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure663 = function() use ($renderingContext, $self) {
$output664 = '';

$output664 .= '
                                                <li>
                                                    <a href="';
$array665 = array (
);
$output664 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array665)]);

$output664 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure667 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments666 = array();
$arguments666['then'] = NULL;
$arguments666['else'] = NULL;
$arguments666['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array668 = array();
$array669 = array (
);$array668['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array669);

$expression670 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments666['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression670(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array668)
					),
					$renderingContext
				);
$arguments666['then'] = ' active';

$output664 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments666, $renderChildrenClosure667, $renderingContext);

$output664 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure672 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments671 = array();
$arguments671['then'] = NULL;
$arguments671['else'] = NULL;
$arguments671['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array673 = array();
$array674 = array (
);$array673['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array674);

$expression675 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments671['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression675(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array673)
					),
					$renderingContext
				);
$output676 = '';

$output676 .= ' target="';
$array677 = array (
);
$output676 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array677)]);

$output676 .= '"';
$arguments671['then'] = $output676;

$output664 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments671, $renderChildrenClosure672, $renderingContext);

$output664 .= ' title="';
$array678 = array (
);
$output664 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array678)]);

$output664 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure680 = function() use ($renderingContext, $self) {
$output685 = '';

$output685 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure687 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments686 = array();
$arguments686['icon'] = NULL;
$arguments686['height'] = NULL;
$arguments686['width'] = NULL;
$array688 = array (
);$arguments686['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array688);
$array689 = array (
);$arguments686['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array689);
$array690 = array (
);$arguments686['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array690);

$output685 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments686, $renderChildrenClosure687, $renderingContext);

$output685 .= '
                                                            </span>
                                                        ';
return $output685;
};
$arguments679 = array();
$arguments679['then'] = NULL;
$arguments679['else'] = NULL;
$arguments679['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array681 = array();
$array682 = array (
);$array681['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array682);
$array681['1'] = ' && ';
$array683 = array (
);$array681['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array683);

$expression684 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments679['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression684(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array681)
					),
					$renderingContext
				);
$arguments679['__thenClosure'] = $renderChildrenClosure680;

$output664 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments679, $renderChildrenClosure680, $renderingContext);

$output664 .= '
                                                        <span class="dropdown-text">';
$array691 = array (
);
$output664 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array691)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments692 = array();
$arguments692['then'] = NULL;
$arguments692['else'] = NULL;
$arguments692['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array694 = array();
$array695 = array (
);$array694['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array695);

$expression696 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments692['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression696(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array694)
					),
					$renderingContext
				);
$arguments692['__thenClosure'] = $renderChildrenClosure693;

$output664 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext);

$output664 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output664;
};
$arguments662 = array();
$arguments662['if'] = NULL;

$output659 .= '';

$output659 .= '
                                        ';
return $output659;
};
$arguments621 = array();
$arguments621['then'] = NULL;
$arguments621['else'] = NULL;
$arguments621['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array656 = array();
$array657 = array (
);$array656['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array657);

$expression658 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments621['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression658(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array656)
					),
					$renderingContext
				);
$arguments621['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments621['__elseClosures'][] = function() use ($renderingContext, $self) {
$output623 = '';

$output623 .= '
                                                <li>
                                                    <a href="';
$array624 = array (
);
$output623 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array624)]);

$output623 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments625 = array();
$arguments625['then'] = NULL;
$arguments625['else'] = NULL;
$arguments625['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array627 = array();
$array628 = array (
);$array627['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array628);

$expression629 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments625['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression629(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array627)
					),
					$renderingContext
				);
$arguments625['then'] = ' active';

$output623 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments625, $renderChildrenClosure626, $renderingContext);

$output623 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure631 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments630 = array();
$arguments630['then'] = NULL;
$arguments630['else'] = NULL;
$arguments630['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array632 = array();
$array633 = array (
);$array632['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array633);

$expression634 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments630['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression634(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array632)
					),
					$renderingContext
				);
$output635 = '';

$output635 .= ' target="';
$array636 = array (
);
$output635 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array636)]);

$output635 .= '"';
$arguments630['then'] = $output635;

$output623 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments630, $renderChildrenClosure631, $renderingContext);

$output623 .= ' title="';
$array637 = array (
);
$output623 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array637)]);

$output623 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure639 = function() use ($renderingContext, $self) {
$output644 = '';

$output644 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure646 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments645 = array();
$arguments645['icon'] = NULL;
$arguments645['height'] = NULL;
$arguments645['width'] = NULL;
$array647 = array (
);$arguments645['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array647);
$array648 = array (
);$arguments645['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array648);
$array649 = array (
);$arguments645['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array649);

$output644 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments645, $renderChildrenClosure646, $renderingContext);

$output644 .= '
                                                            </span>
                                                        ';
return $output644;
};
$arguments638 = array();
$arguments638['then'] = NULL;
$arguments638['else'] = NULL;
$arguments638['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array640 = array();
$array641 = array (
);$array640['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array641);
$array640['1'] = ' && ';
$array642 = array (
);$array640['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array642);

$expression643 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments638['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression643(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array640)
					),
					$renderingContext
				);
$arguments638['__thenClosure'] = $renderChildrenClosure639;

$output623 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments638, $renderChildrenClosure639, $renderingContext);

$output623 .= '
                                                        <span class="dropdown-text">';
$array650 = array (
);
$output623 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array650)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments651 = array();
$arguments651['then'] = NULL;
$arguments651['else'] = NULL;
$arguments651['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array653 = array();
$array654 = array (
);$array653['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array654);

$expression655 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments651['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression655(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array653)
					),
					$renderingContext
				);
$arguments651['__thenClosure'] = $renderChildrenClosure652;

$output623 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments651, $renderChildrenClosure652, $renderingContext);

$output623 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output623;
};

$output620 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments621, $renderChildrenClosure622, $renderingContext);

$output620 .= '
                                    ';
return $output620;
};
$arguments617 = array();
$arguments617['each'] = NULL;
$arguments617['as'] = NULL;
$arguments617['key'] = NULL;
$arguments617['reverse'] = false;
$arguments617['iteration'] = NULL;
$array619 = array (
);$arguments617['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array619);
$arguments617['as'] = 'child';

$output615 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext);

$output615 .= '
                                </ul>
                            ';
return $output615;
};
$arguments610 = array();
$arguments610['then'] = NULL;
$arguments610['else'] = NULL;
$arguments610['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array612 = array();
$array613 = array (
);$array612['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array613);

$expression614 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments610['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression614(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array612)
					),
					$renderingContext
				);
$arguments610['__thenClosure'] = $renderChildrenClosure611;

$output561 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments610, $renderChildrenClosure611, $renderingContext);

$output561 .= '
                        </li>
                    ';
return $output561;
};
$arguments559 = array();
$arguments559['if'] = NULL;

$output556 .= '';

$output556 .= '
                ';
return $output556;
};
$arguments415 = array();
$arguments415['then'] = NULL;
$arguments415['else'] = NULL;
$arguments415['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array553 = array();
$array554 = array (
);$array553['0'] = $renderingContext->getVariableProvider()->getByPath('item.spacer', $array554);

$expression555 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments415['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression555(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array553)
					),
					$renderingContext
				);
$arguments415['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
};
$arguments415['__elseClosures'][] = function() use ($renderingContext, $self) {
$output417 = '';

$output417 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments418 = array();
$arguments418['then'] = NULL;
$arguments418['else'] = NULL;
$arguments418['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array420 = array();
$array421 = array (
);$array420['0'] = $renderingContext->getVariableProvider()->getByPath('item.active', $array421);

$expression422 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments418['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression422(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array420)
					),
					$renderingContext
				);
$arguments418['then'] = ' active';

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure424 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments423 = array();
$arguments423['then'] = NULL;
$arguments423['else'] = NULL;
$arguments423['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array425 = array();
$array426 = array (
);$array425['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array426);

$expression427 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments423['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression427(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array425)
					),
					$renderingContext
				);
$arguments423['then'] = ' dropdown dropdown-hover';

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments423, $renderChildrenClosure424, $renderingContext);

$output417 .= '">
                            <a href="';
$array428 = array (
);
$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link', $array428)]);

$output417 .= '" id="nav-item-';
$array429 = array (
);
$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array429)]);

$output417 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['then'] = NULL;
$arguments430['else'] = NULL;
$arguments430['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array432 = array();
$array433 = array (
);$array432['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array433);

$expression434 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments430['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression434(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array432)
					),
					$renderingContext
				);
$arguments430['then'] = ' dropdown-toggle';

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$output417 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments435 = array();
$arguments435['then'] = NULL;
$arguments435['else'] = NULL;
$arguments435['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array437 = array();
$array438 = array (
);$array437['0'] = $renderingContext->getVariableProvider()->getByPath('item.target', $array438);

$expression439 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments435['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression439(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array437)
					),
					$renderingContext
				);
$output440 = '';

$output440 .= ' target="';
$array441 = array (
);
$output440 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target', $array441)]);

$output440 .= '"';
$arguments435['then'] = $output440;

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments435, $renderChildrenClosure436, $renderingContext);

$output417 .= ' title="';
$array442 = array (
);
$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array442)]);

$output417 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments443 = array();
$arguments443['then'] = NULL;
$arguments443['else'] = NULL;
$arguments443['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array445 = array();
$array446 = array (
);$array445['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array446);

$expression447 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments443['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression447(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array445)
					),
					$renderingContext
				);
$arguments443['then'] = ' aria-haspopup="true" aria-expanded="false"';

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output417 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
$output454 = '';

$output454 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments455 = array();
$arguments455['icon'] = NULL;
$arguments455['height'] = NULL;
$arguments455['width'] = NULL;
$array457 = array (
);$arguments455['icon'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array457);
$array458 = array (
);$arguments455['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width', $array458);
$array459 = array (
);$arguments455['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height', $array459);

$output454 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext);

$output454 .= '
                                    </span>
                                ';
return $output454;
};
$arguments448 = array();
$arguments448['then'] = NULL;
$arguments448['else'] = NULL;
$arguments448['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array450 = array();
$array451 = array (
);$array450['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable', $array451);
$array450['1'] = ' && ';
$array452 = array (
);$array450['2'] = $renderingContext->getVariableProvider()->getByPath('item.icon', $array452);

$expression453 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments448['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression453(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array450)
					),
					$renderingContext
				);
$arguments448['__thenClosure'] = $renderChildrenClosure449;

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext);

$output417 .= '
                                <span class="nav-link-text">';
$array460 = array (
);
$output417 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title', $array460)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments461 = array();
$arguments461['then'] = NULL;
$arguments461['else'] = NULL;
$arguments461['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array463 = array();
$array464 = array (
);$array463['0'] = $renderingContext->getVariableProvider()->getByPath('item.current', $array464);

$expression465 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments461['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression465(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array463)
					),
					$renderingContext
				);
$arguments461['__thenClosure'] = $renderChildrenClosure462;

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext);

$output417 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
$output471 = '';

$output471 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';
$array472 = array (
);
$output471 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid', $array472)]);

$output471 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
$output476 = '';

$output476 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure478 = function() use ($renderingContext, $self) {
$output515 = '';

$output515 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments516 = array();

$output515 .= '';

$output515 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure519 = function() use ($renderingContext, $self) {
$output520 = '';

$output520 .= '
                                                <li>
                                                    <a href="';
$array521 = array (
);
$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array521)]);

$output520 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments522 = array();
$arguments522['then'] = NULL;
$arguments522['else'] = NULL;
$arguments522['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array524 = array();
$array525 = array (
);$array524['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array525);

$expression526 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments522['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression526(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array524)
					),
					$renderingContext
				);
$arguments522['then'] = ' active';

$output520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext);

$output520 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure528 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments527 = array();
$arguments527['then'] = NULL;
$arguments527['else'] = NULL;
$arguments527['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array529 = array();
$array530 = array (
);$array529['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array530);

$expression531 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments527['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression531(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array529)
					),
					$renderingContext
				);
$output532 = '';

$output532 .= ' target="';
$array533 = array (
);
$output532 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array533)]);

$output532 .= '"';
$arguments527['then'] = $output532;

$output520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments527, $renderChildrenClosure528, $renderingContext);

$output520 .= ' title="';
$array534 = array (
);
$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array534)]);

$output520 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure536 = function() use ($renderingContext, $self) {
$output541 = '';

$output541 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure543 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments542 = array();
$arguments542['icon'] = NULL;
$arguments542['height'] = NULL;
$arguments542['width'] = NULL;
$array544 = array (
);$arguments542['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array544);
$array545 = array (
);$arguments542['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array545);
$array546 = array (
);$arguments542['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array546);

$output541 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments542, $renderChildrenClosure543, $renderingContext);

$output541 .= '
                                                            </span>
                                                        ';
return $output541;
};
$arguments535 = array();
$arguments535['then'] = NULL;
$arguments535['else'] = NULL;
$arguments535['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array537 = array();
$array538 = array (
);$array537['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array538);
$array537['1'] = ' && ';
$array539 = array (
);$array537['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array539);

$expression540 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments535['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression540(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array537)
					),
					$renderingContext
				);
$arguments535['__thenClosure'] = $renderChildrenClosure536;

$output520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments535, $renderChildrenClosure536, $renderingContext);

$output520 .= '
                                                        <span class="dropdown-text">';
$array547 = array (
);
$output520 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array547)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure549 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments548 = array();
$arguments548['then'] = NULL;
$arguments548['else'] = NULL;
$arguments548['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array550 = array();
$array551 = array (
);$array550['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array551);

$expression552 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments548['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression552(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array550)
					),
					$renderingContext
				);
$arguments548['__thenClosure'] = $renderChildrenClosure549;

$output520 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments548, $renderChildrenClosure549, $renderingContext);

$output520 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output520;
};
$arguments518 = array();
$arguments518['if'] = NULL;

$output515 .= '';

$output515 .= '
                                        ';
return $output515;
};
$arguments477 = array();
$arguments477['then'] = NULL;
$arguments477['else'] = NULL;
$arguments477['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array512 = array();
$array513 = array (
);$array512['0'] = $renderingContext->getVariableProvider()->getByPath('child.spacer', $array513);

$expression514 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments477['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression514(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array512)
					),
					$renderingContext
				);
$arguments477['__thenClosure'] = function() use ($renderingContext, $self) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
};
$arguments477['__elseClosures'][] = function() use ($renderingContext, $self) {
$output479 = '';

$output479 .= '
                                                <li>
                                                    <a href="';
$array480 = array (
);
$output479 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link', $array480)]);

$output479 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure482 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments481 = array();
$arguments481['then'] = NULL;
$arguments481['else'] = NULL;
$arguments481['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array483 = array();
$array484 = array (
);$array483['0'] = $renderingContext->getVariableProvider()->getByPath('child.active', $array484);

$expression485 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments481['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression485(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array483)
					),
					$renderingContext
				);
$arguments481['then'] = ' active';

$output479 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments481, $renderChildrenClosure482, $renderingContext);

$output479 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure487 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments486 = array();
$arguments486['then'] = NULL;
$arguments486['else'] = NULL;
$arguments486['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array488 = array();
$array489 = array (
);$array488['0'] = $renderingContext->getVariableProvider()->getByPath('child.target', $array489);

$expression490 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments486['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression490(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array488)
					),
					$renderingContext
				);
$output491 = '';

$output491 .= ' target="';
$array492 = array (
);
$output491 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target', $array492)]);

$output491 .= '"';
$arguments486['then'] = $output491;

$output479 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments486, $renderChildrenClosure487, $renderingContext);

$output479 .= ' title="';
$array493 = array (
);
$output479 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array493)]);

$output479 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
$output500 = '';

$output500 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments501 = array();
$arguments501['icon'] = NULL;
$arguments501['height'] = NULL;
$arguments501['width'] = NULL;
$array503 = array (
);$arguments501['icon'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array503);
$array504 = array (
);$arguments501['width'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width', $array504);
$array505 = array (
);$arguments501['height'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height', $array505);

$output500 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments501, $renderChildrenClosure502, $renderingContext);

$output500 .= '
                                                            </span>
                                                        ';
return $output500;
};
$arguments494 = array();
$arguments494['then'] = NULL;
$arguments494['else'] = NULL;
$arguments494['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array496 = array();
$array497 = array (
);$array496['0'] = $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable', $array497);
$array496['1'] = ' && ';
$array498 = array (
);$array496['2'] = $renderingContext->getVariableProvider()->getByPath('child.icon', $array498);

$expression499 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments494['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression499(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array496)
					),
					$renderingContext
				);
$arguments494['__thenClosure'] = $renderChildrenClosure495;

$output479 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext);

$output479 .= '
                                                        <span class="dropdown-text">';
$array506 = array (
);
$output479 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title', $array506)]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure508 = function() use ($renderingContext, $self) {
return ' <span class="visually-hidden">(current)</span>';
};
$arguments507 = array();
$arguments507['then'] = NULL;
$arguments507['else'] = NULL;
$arguments507['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array509 = array();
$array510 = array (
);$array509['0'] = $renderingContext->getVariableProvider()->getByPath('child.current', $array510);

$expression511 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments507['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression511(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array509)
					),
					$renderingContext
				);
$arguments507['__thenClosure'] = $renderChildrenClosure508;

$output479 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments507, $renderChildrenClosure508, $renderingContext);

$output479 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output479;
};

$output476 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments477, $renderChildrenClosure478, $renderingContext);

$output476 .= '
                                    ';
return $output476;
};
$arguments473 = array();
$arguments473['each'] = NULL;
$arguments473['as'] = NULL;
$arguments473['key'] = NULL;
$arguments473['reverse'] = false;
$arguments473['iteration'] = NULL;
$array475 = array (
);$arguments473['each'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array475);
$arguments473['as'] = 'child';

$output471 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext);

$output471 .= '
                                </ul>
                            ';
return $output471;
};
$arguments466 = array();
$arguments466['then'] = NULL;
$arguments466['else'] = NULL;
$arguments466['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array468 = array();
$array469 = array (
);$array468['0'] = $renderingContext->getVariableProvider()->getByPath('item.children', $array469);

$expression470 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments466['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression470(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array468)
					),
					$renderingContext
				);
$arguments466['__thenClosure'] = $renderChildrenClosure467;

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output417 .= '
                        </li>
                    ';
return $output417;
};

$output414 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments415, $renderChildrenClosure416, $renderingContext);

$output414 .= '
            ';
return $output414;
};
$arguments411 = array();
$arguments411['each'] = NULL;
$arguments411['as'] = NULL;
$arguments411['key'] = NULL;
$arguments411['reverse'] = false;
$arguments411['iteration'] = NULL;
$array413 = array (
);$arguments411['each'] = $renderingContext->getVariableProvider()->getByPath('menu', $array413);
$arguments411['as'] = 'item';

$output410 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext);

$output410 .= '
        </ul>
    ';
return $output410;
};
$arguments405 = array();
$arguments405['then'] = NULL;
$arguments405['else'] = NULL;
$arguments405['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array407 = array();
$array408 = array (
);$array407['0'] = $renderingContext->getVariableProvider()->getByPath('menu', $array408);

$expression409 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments405['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression409(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array407)
					),
					$renderingContext
				);
$arguments405['__thenClosure'] = $renderChildrenClosure406;

$output404 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments405, $renderChildrenClosure406, $renderingContext);

$output404 .= '
';
return $output404;
};
$arguments402 = array();
$arguments402['name'] = NULL;
$arguments402['name'] = 'MainNavigation';

$output293 .= NULL;

$output293 .= '

';

return $output293;
}


}
#