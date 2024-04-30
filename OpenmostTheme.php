<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\OpenmostTheme;

use Piwik\Plugin;

class OpenmostTheme extends Plugin
{
    public function registerEvents()
    {
        return [
            'Theme.configureThemeVariables' => 'configureThemeVariables',
        ];
    }

    public function configureThemeVariables(Plugin\ThemeStyles $vars)
    {
        $vars->fontFamilyBase = 'Sora, sans-serif';
        $vars->colorBrand = '#fff'; // Sort indicator and datatable options
        $vars->colorBrandContrast = '#ffffff';
        $vars->colorText = '#AEAFBB';
        #$vars->colorTextLight = '#FF0000';
        #$vars->colorTextLighter = '#FF0000';
        #$vars->colorTextContrast = '#FF0000';
        #$vars->colorLink = '#FF0000';
        #$vars->colorBaseSeries = '#FF0000';
        #$vars->colorHeadlineAlternative = '#FF0000';
        $vars->colorHeaderBackground = '#1C1F41';
        #$vars->colorHeaderText = '#FF0000';
        $vars->colorMenuContrastText = '#AEAFBB';
        $vars->colorMenuContrastTextSelected = '#ffffff';
        $vars->colorMenuContrastTextActive = '#ffffff';
        $vars->colorMenuContrastBackground = '#1C1F41';
        #$vars->colorWidgetExportedBackgroundBase = '';
        $vars->colorWidgetTitleText = '#ffffff';
        $vars->colorWidgetTitleBackground = '#1C1F41';
        $vars->colorWidgetBackground = '#1C1F41';
        $vars->colorWidgetBorder = '#1C1F41';
        $vars->colorBackgroundBase = '#161830'; #161830';
        $vars->colorBackgroundTinyContrast = '#FF0000';
        $vars->colorBackgroundLowContrast = '#00FF00';
        $vars->colorBackgroundContrast = '#1C1F41'; //Table cell color
        $vars->colorBackgroundHighContrast = '#0000FF';
        #$vars->colorBorder = '#FF0000';
        #$vars->colorCode = '#FF0000';
        $vars->colorCodeBackground = '#FF0000';

    }
}
