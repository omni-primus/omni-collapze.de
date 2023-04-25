<?php

class partial_Media_Type_902bb69ca6795a4de6b8241f3f2868204063b13e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['value'] = NULL;
$arguments1['name'] = NULL;
$arguments1['name'] = 'isImage';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\File\IsImageViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$array5 = array (
);return $renderingContext->getVariableProvider()->getByPath('file', $array5);
};
$arguments3 = array();
$arguments1['value'] = BK2K\BootstrapPackage\ViewHelpers\File\IsImageViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['value'] = NULL;
$arguments6['name'] = NULL;
$arguments6['name'] = 'isAudio';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\File\IsAudioViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('file', $array10);
};
$arguments8 = array();
$arguments6['value'] = BK2K\BootstrapPackage\ViewHelpers\File\IsAudioViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['value'] = NULL;
$arguments11['name'] = NULL;
$arguments11['name'] = 'isMedia';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\File\IsMediaViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$array15 = array (
);return $renderingContext->getVariableProvider()->getByPath('file', $array15);
};
$arguments13 = array();
$arguments11['value'] = BK2K\BootstrapPackage\ViewHelpers\File\IsMediaViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
$renderChildrenClosure12 = ($arguments11['value'] !== null) ? function() use ($arguments11) { return $arguments11['value']; } : $renderChildrenClosure12;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['section'] = NULL;
$arguments79['partial'] = NULL;
$arguments79['delegate'] = NULL;
$arguments79['renderable'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['optional'] = false;
$arguments79['default'] = NULL;
$arguments79['contentAs'] = NULL;
$arguments79['debug'] = true;
$arguments79['partial'] = 'Media/Type/Image';
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array82);
$array83 = array (
);$array81['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array83);
$array84 = array (
);$array81['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array84);
$array85 = array (
);$array81['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array85);
$arguments79['arguments'] = $array81;

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
    ';
return $output78;
};
$arguments75 = array();
$arguments75['value'] = NULL;
$array77 = array (
);$arguments75['value'] = $renderingContext->getVariableProvider()->getByPath('isImage', $array77);

$output74 .= '';

$output74 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['section'] = NULL;
$arguments90['partial'] = NULL;
$arguments90['delegate'] = NULL;
$arguments90['renderable'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['optional'] = false;
$arguments90['default'] = NULL;
$arguments90['contentAs'] = NULL;
$arguments90['debug'] = true;
$arguments90['partial'] = 'Media/Type/Audio';
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array93);
$array94 = array (
);$array92['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array94);
$array95 = array (
);$array92['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array95);
$arguments90['arguments'] = $array92;

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
    ';
return $output89;
};
$arguments86 = array();
$arguments86['value'] = NULL;
$array88 = array (
);$arguments86['value'] = $renderingContext->getVariableProvider()->getByPath('isAudio', $array88);

$output74 .= '';

$output74 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments100 = array();
$arguments100['section'] = NULL;
$arguments100['partial'] = NULL;
$arguments100['delegate'] = NULL;
$arguments100['renderable'] = NULL;
$arguments100['arguments'] = array (
);
$arguments100['optional'] = false;
$arguments100['default'] = NULL;
$arguments100['contentAs'] = NULL;
$arguments100['debug'] = true;
$arguments100['partial'] = 'Media/Type/Video';
// Rendering Array
$array102 = array();
$array103 = array (
);$array102['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array103);
$array104 = array (
);$array102['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array104);
$array105 = array (
);$array102['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array105);
$arguments100['arguments'] = $array102;

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
    ';
return $output99;
};
$arguments96 = array();
$arguments96['value'] = NULL;
$array98 = array (
);$arguments96['value'] = $renderingContext->getVariableProvider()->getByPath('isMedia', $array98);

$output74 .= '';

$output74 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return '
        <!-- NOT SUPPORTED MEDIA TYPE -->
    ';
};
$arguments106 = array();

$output74 .= '';

$output74 .= '
';
return $output74;
};
$arguments16 = array();
$arguments16['expression'] = NULL;
$arguments16['expression'] = 1;

$output0 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {
$array18 = array (
);
return $renderingContext->getVariableProvider()->getByPath('isImage', $array18);
}): return call_user_func(function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['section'] = NULL;
$arguments20['partial'] = NULL;
$arguments20['delegate'] = NULL;
$arguments20['renderable'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$arguments20['default'] = NULL;
$arguments20['contentAs'] = NULL;
$arguments20['debug'] = true;
$arguments20['partial'] = 'Media/Type/Image';
// Rendering Array
$array22 = array();
$array23 = array (
);$array22['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array23);
$array24 = array (
);$array22['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array24);
$array25 = array (
);$array22['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array25);
$array26 = array (
);$array22['variants'] = $renderingContext->getVariableProvider()->getByPath('variants', $array26);
$arguments20['arguments'] = $array22;

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
    ';
return $output19;
});
case call_user_func(function() use ($renderingContext, $self) {
$array38 = array (
);
return $renderingContext->getVariableProvider()->getByPath('isAudio', $array38);
}): return call_user_func(function() use ($renderingContext, $self) {
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
$arguments40['partial'] = 'Media/Type/Audio';
// Rendering Array
$array42 = array();
$array43 = array (
);$array42['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array43);
$array44 = array (
);$array42['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array44);
$array45 = array (
);$array42['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array45);
$arguments40['arguments'] = $array42;

$output39 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
    ';
return $output39;
});
case call_user_func(function() use ($renderingContext, $self) {
$array56 = array (
);
return $renderingContext->getVariableProvider()->getByPath('isMedia', $array56);
}): return call_user_func(function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['section'] = NULL;
$arguments58['partial'] = NULL;
$arguments58['delegate'] = NULL;
$arguments58['renderable'] = NULL;
$arguments58['arguments'] = array (
);
$arguments58['optional'] = false;
$arguments58['default'] = NULL;
$arguments58['contentAs'] = NULL;
$arguments58['debug'] = true;
$arguments58['partial'] = 'Media/Type/Video';
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array61);
$array62 = array (
);$array60['data'] = $renderingContext->getVariableProvider()->getByPath('data', $array62);
$array63 = array (
);$array60['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array63);
$arguments58['arguments'] = $array60;

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
    ';
return $output57;
});
default: return call_user_func(function() use ($renderingContext, $self) {
return '
        <!-- NOT SUPPORTED MEDIA TYPE -->
    ';
});
}
}, array($arguments16));

$output0 .= '

';

return $output0;
}


}
#