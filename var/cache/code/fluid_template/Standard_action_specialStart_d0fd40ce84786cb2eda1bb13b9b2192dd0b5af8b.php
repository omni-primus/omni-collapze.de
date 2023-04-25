<?php

class Standard_action_specialStart_d0fd40ce84786cb2eda1bb13b9b2192dd0b5af8b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Border
 */
public function section_5d10d3f42121c3aa0d7923d1f05cccf56ef176e5(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['data'] = NULL;
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array4);
$array3['colPos'] = 3;
$array5 = array (
);$array3['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide', $array5);
$arguments1['data'] = $array3;
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output6 = '';

$output6 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['data'] = NULL;
$arguments7['typoscriptObjectPath'] = NULL;
$arguments7['currentValueKey'] = NULL;
$arguments7['table'] = '';
$arguments7['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array10);
$array9['colPos'] = 8;
$array11 = array (
);$array9['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide', $array11);
$arguments7['data'] = $array9;
$renderChildrenClosure8 = ($arguments7['data'] !== null) ? function() use ($arguments7) { return $arguments7['data']; } : $renderChildrenClosure8;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '

    <div class="section section-default">
        <div class="container">
            <div class="section-row">
                <div class="section-column section-column-third">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['data'] = NULL;
$arguments12['typoscriptObjectPath'] = NULL;
$arguments12['currentValueKey'] = NULL;
$arguments12['table'] = '';
$arguments12['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array14 = array();
$array15 = array (
);$array14['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array15);
$array14['colPos'] = 20;
$array16 = array (
);$array14['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.20.slide', $array16);
$arguments12['data'] = $array14;
$renderChildrenClosure13 = ($arguments12['data'] !== null) ? function() use ($arguments12) { return $arguments12['data']; } : $renderChildrenClosure13;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output6 .= '
                </div>
                <div class="section-column section-column-third">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['data'] = NULL;
$arguments17['typoscriptObjectPath'] = NULL;
$arguments17['currentValueKey'] = NULL;
$arguments17['table'] = '';
$arguments17['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array19 = array();
$array20 = array (
);$array19['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array20);
$array19['colPos'] = 21;
$array21 = array (
);$array19['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.21.slide', $array21);
$arguments17['data'] = $array19;
$renderChildrenClosure18 = ($arguments17['data'] !== null) ? function() use ($arguments17) { return $arguments17['data']; } : $renderChildrenClosure18;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output6 .= '
                </div>
                <div class="section-column section-column-third">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['data'] = NULL;
$arguments22['typoscriptObjectPath'] = NULL;
$arguments22['currentValueKey'] = NULL;
$arguments22['table'] = '';
$arguments22['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array25);
$array24['colPos'] = 22;
$array26 = array (
);$array24['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.22.slide', $array26);
$arguments22['data'] = $array24;
$renderChildrenClosure23 = ($arguments22['data'] !== null) ? function() use ($arguments22) { return $arguments22['data']; } : $renderChildrenClosure23;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output6 .= '
                </div>
            </div>
        </div>
    </div>
    <div class="section section-light">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['data'] = NULL;
$arguments27['typoscriptObjectPath'] = NULL;
$arguments27['currentValueKey'] = NULL;
$arguments27['table'] = '';
$arguments27['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array29 = array();
$array30 = array (
);$array29['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array30);
$array29['colPos'] = 0;
$array31 = array (
);$array29['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide', $array31);
$arguments27['data'] = $array29;
$renderChildrenClosure28 = ($arguments27['data'] !== null) ? function() use ($arguments27) { return $arguments27['data']; } : $renderChildrenClosure28;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output6 .= '
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['data'] = NULL;
$arguments32['typoscriptObjectPath'] = NULL;
$arguments32['currentValueKey'] = NULL;
$arguments32['table'] = '';
$arguments32['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array35);
$array34['colPos'] = 9;
$array36 = array (
);$array34['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide', $array36);
$arguments32['data'] = $array34;
$renderChildrenClosure33 = ($arguments32['data'] !== null) ? function() use ($arguments32) { return $arguments32['data']; } : $renderChildrenClosure33;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output6 .= '

';

return $output6;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output37 = '';

$output37 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['section'] = NULL;
$arguments38['partial'] = NULL;
$arguments38['delegate'] = NULL;
$arguments38['renderable'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['optional'] = false;
$arguments38['default'] = NULL;
$arguments38['contentAs'] = NULL;
$arguments38['debug'] = true;
$arguments38['partial'] = 'Structure/FooterContent';
$arguments38['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '

';

return $output37;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output41 = '';

$output41 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();
$arguments42['name'] = NULL;
$arguments42['name'] = 'Default';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output41 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['data'] = NULL;
$arguments47['typoscriptObjectPath'] = NULL;
$arguments47['currentValueKey'] = NULL;
$arguments47['table'] = '';
$arguments47['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array50);
$array49['colPos'] = 3;
$array51 = array (
);$array49['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide', $array51);
$arguments47['data'] = $array49;
$renderChildrenClosure48 = ($arguments47['data'] !== null) ? function() use ($arguments47) { return $arguments47['data']; } : $renderChildrenClosure48;
$output46 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '

';
return $output46;
};
$arguments44 = array();
$arguments44['name'] = NULL;
$arguments44['name'] = 'Border';

$output41 .= NULL;

$output41 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['data'] = NULL;
$arguments55['typoscriptObjectPath'] = NULL;
$arguments55['currentValueKey'] = NULL;
$arguments55['table'] = '';
$arguments55['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array58);
$array57['colPos'] = 8;
$array59 = array (
);$array57['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide', $array59);
$arguments55['data'] = $array57;
$renderChildrenClosure56 = ($arguments55['data'] !== null) ? function() use ($arguments55) { return $arguments55['data']; } : $renderChildrenClosure56;
$output54 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '

    <div class="section section-default">
        <div class="container">
            <div class="section-row">
                <div class="section-column section-column-third">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['data'] = NULL;
$arguments60['typoscriptObjectPath'] = NULL;
$arguments60['currentValueKey'] = NULL;
$arguments60['table'] = '';
$arguments60['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array63);
$array62['colPos'] = 20;
$array64 = array (
);$array62['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.20.slide', $array64);
$arguments60['data'] = $array62;
$renderChildrenClosure61 = ($arguments60['data'] !== null) ? function() use ($arguments60) { return $arguments60['data']; } : $renderChildrenClosure61;
$output54 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output54 .= '
                </div>
                <div class="section-column section-column-third">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['data'] = NULL;
$arguments65['typoscriptObjectPath'] = NULL;
$arguments65['currentValueKey'] = NULL;
$arguments65['table'] = '';
$arguments65['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array67 = array();
$array68 = array (
);$array67['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array68);
$array67['colPos'] = 21;
$array69 = array (
);$array67['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.21.slide', $array69);
$arguments65['data'] = $array67;
$renderChildrenClosure66 = ($arguments65['data'] !== null) ? function() use ($arguments65) { return $arguments65['data']; } : $renderChildrenClosure66;
$output54 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output54 .= '
                </div>
                <div class="section-column section-column-third">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['data'] = NULL;
$arguments70['typoscriptObjectPath'] = NULL;
$arguments70['currentValueKey'] = NULL;
$arguments70['table'] = '';
$arguments70['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array72 = array();
$array73 = array (
);$array72['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array73);
$array72['colPos'] = 22;
$array74 = array (
);$array72['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.22.slide', $array74);
$arguments70['data'] = $array72;
$renderChildrenClosure71 = ($arguments70['data'] !== null) ? function() use ($arguments70) { return $arguments70['data']; } : $renderChildrenClosure71;
$output54 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output54 .= '
                </div>
            </div>
        </div>
    </div>
    <div class="section section-light">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['data'] = NULL;
$arguments75['typoscriptObjectPath'] = NULL;
$arguments75['currentValueKey'] = NULL;
$arguments75['table'] = '';
$arguments75['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array77 = array();
$array78 = array (
);$array77['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array78);
$array77['colPos'] = 0;
$array79 = array (
);$array77['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide', $array79);
$arguments75['data'] = $array77;
$renderChildrenClosure76 = ($arguments75['data'] !== null) ? function() use ($arguments75) { return $arguments75['data']; } : $renderChildrenClosure76;
$output54 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output54 .= '
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['data'] = NULL;
$arguments80['typoscriptObjectPath'] = NULL;
$arguments80['currentValueKey'] = NULL;
$arguments80['table'] = '';
$arguments80['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['pageUid'] = $renderingContext->getVariableProvider()->getByPath('data.uid', $array83);
$array82['colPos'] = 9;
$array84 = array (
);$array82['slide'] = $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide', $array84);
$arguments80['data'] = $array82;
$renderChildrenClosure81 = ($arguments80['data'] !== null) ? function() use ($arguments80) { return $arguments80['data']; } : $renderChildrenClosure81;
$output54 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output54 .= '

';
return $output54;
};
$arguments52 = array();
$arguments52['name'] = NULL;
$arguments52['name'] = 'Main';

$output41 .= NULL;

$output41 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['section'] = NULL;
$arguments88['partial'] = NULL;
$arguments88['delegate'] = NULL;
$arguments88['renderable'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['optional'] = false;
$arguments88['default'] = NULL;
$arguments88['contentAs'] = NULL;
$arguments88['debug'] = true;
$arguments88['partial'] = 'Structure/FooterContent';
$arguments88['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '

';
return $output87;
};
$arguments85 = array();
$arguments85['name'] = NULL;
$arguments85['name'] = 'Footer';

$output41 .= NULL;

$output41 .= '

';

return $output41;
}


}
#