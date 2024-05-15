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
        $vars->colorBrand = '#426CDA'; // Buttons + Sort indicator + datatable options
        $vars->colorBrandContrast = '#FFFFFF'; // Buttons text color
        $vars->colorText = '#AEAFBB'; // Cards title + cards title + button controls text
        $vars->colorTextLight = '#AEAFBB'; // Info logo (card i logo tooltip)
        $vars->colorTextLighter = '#FFFFFF'; // Annotation italic date indication color
        $vars->colorTextContrast = '#FFFFFF'; // Table headings text color
        $vars->colorLink = '#426CDA'; // Link colors
        $vars->colorBaseSeries = '#FF0006';
        $vars->colorHeadlineAlternative = '#FFFFFF'; // Page text on body (out of components)
        $vars->colorHeaderBackground = '#1C1F41'; // Header nav background color
        $vars->colorHeaderText = '#FFFFFF'; // Header nav text color
        $vars->colorMenuContrastText = '#AEAFBB'; // Sidebar menu text color
        $vars->colorMenuContrastTextSelected = '#FFFFFF'; // Sidebar menu hover active text color
        $vars->colorMenuContrastTextActive = '#FFFFFF'; // Sidebar menu hover text color
        $vars->colorMenuContrastBackground = '#1C1F41'; // Sidebar menu items background color
        $vars->colorWidgetExportedBackgroundBase = '#FF0005';
        $vars->colorWidgetTitleText = '#ffffff'; // Widget title color
        $vars->colorWidgetTitleBackground = '#1C1F41'; // Widget title background color
        $vars->colorWidgetBackground = '#1C1F41'; // Widget background color
        $vars->colorWidgetBorder = '#1C1F41'; // Widget border color
        $vars->colorBackgroundBase = '#161830'; // Body color
        $vars->colorBackgroundTinyContrast = '#282A4B'; //Table hover color
        $vars->colorBackgroundLowContrast = '#FF0004';
        $vars->colorBackgroundContrast = '#1C1F41'; //Table cell color
        $vars->colorBackgroundHighContrast = '#00FFF0';
        $vars->colorBorder = '#161830'; // Progress bar border
        $vars->colorCode = '#e685b5'; // <code> color
        $vars->colorCodeBackground = 'transparent'; // <code> background color
    }
}
