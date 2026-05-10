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
        // Brand (Openmost blue) — shared across light & dark
        $brand          = '#426CDA';
        $brandLight     = '#6B8FE4';
        $brandLighter   = '#8AA8EB';
        $brandDark      = '#2851B8';

        // Light surfaces
        $lightSurfaceBase    = '#F5F6FB';
        $lightSurfaceRaised  = '#FFFFFF';
        $lightSurfaceOverlay = '#ECEFF8';
        $lightSurfaceGround  = '#DDE2F0';

        // Dark surfaces (Openmost navy scale)
        $darkSurfaceBase     = '#161830';
        $darkSurfaceRaised   = '#1C1F41';
        $darkSurfaceOverlay  = '#282A4B';
        $darkSurfaceGround   = '#0E102A';

        // Light text scale
        $lightTextPrimary   = '#1C1F41';
        $lightTextSecondary = '#4A5169';
        $lightTextTertiary  = '#6B7280';
        $lightTextDisabled  = '#9CA3AF';

        // Dark text scale
        $darkTextPrimary    = '#FFFFFF';
        $darkTextSecondary  = '#AEAFBB';
        $darkTextTertiary   = 'rgba(255, 255, 255, 0.65)';
        $darkTextDisabled   = 'rgba(255, 255, 255, 0.40)';

        // Borders
        $lightBorder        = '#E5E7F0';
        $lightBorderStrong  = '#C5CAD8';
        $darkBorder         = '#1C1F41';
        $darkBorderStrong   = '#2D3155';

        // Font
        $vars->fontFamilyBase = 'Sora, sans-serif';

        // Brand
        $vars->colorBrand         = [$brand, $brand];
        $vars->colorBrandContrast = ['#FFFFFF', '#FFFFFF'];

        // Focus
        $vars->colorFocusRing            = [$brand, $brandLighter];
        $vars->colorFocusRingAlternative = [$brand, $brandLighter];

        // Text
        $vars->colorTextHighContrast   = [$lightTextPrimary, $darkTextPrimary];
        $vars->colorText               = [$lightTextSecondary, $darkTextSecondary];
        $vars->colorTextContrast       = [$lightTextPrimary, $darkTextPrimary];
        $vars->colorTextLight          = [$lightTextTertiary, $darkTextSecondary];
        $vars->colorTextLighter        = [$lightTextTertiary, $darkTextPrimary];
        $vars->colorTextOnDisabled     = [$lightTextDisabled, $darkTextDisabled];
        $vars->colorTextDisabled       = [$lightTextDisabled, $darkTextDisabled];
        $vars->colorTextInvert         = ['#FFFFFF', $darkSurfaceRaised];
        $vars->colorTextInvertContrast = ['#FFFFFF', '#000000'];
        $vars->colorTextInvertLight    = [$lightSurfaceGround, $darkTextSecondary];

        // Links
        $vars->colorLink = [$brand, $brandLighter];

        // Charts (openmost.io danger red)
        $vars->colorBaseSeries = '#DC3545';

        // Headlines
        $vars->colorHeadlineAlternative = [$lightTextSecondary, $darkTextPrimary];

        // Header (top bar)
        $vars->colorHeaderBackground = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorHeaderText       = [$lightTextPrimary, $darkTextPrimary];

        // Menus (sidebar)
        $vars->colorMenuContrastText            = [$lightTextSecondary, $darkTextSecondary];
        $vars->colorMenuContrastTextSelected    = [$lightTextPrimary, $darkTextPrimary];
        $vars->colorMenuContrastTextActive      = [$brand, $darkTextPrimary];
        $vars->colorMenuContrastBackground      = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorMenuContrastBackgroundHover = [$lightSurfaceOverlay, $darkSurfaceOverlay];

        // Widgets
        $vars->colorWidgetBackground             = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorWidgetBorder                 = [$lightBorder, $darkSurfaceRaised];
        $vars->colorWidgetExportedBackgroundBase = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorWidgetTitleBackground        = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorWidgetTitleText              = [$lightTextPrimary, $darkTextPrimary];

        // Backgrounds
        $vars->colorBackgroundBase         = [$lightSurfaceBase, $darkSurfaceBase];
        $vars->colorBackgroundTinyContrast = [$lightSurfaceOverlay, $darkSurfaceOverlay];
        $vars->colorBackgroundLowContrast  = [$lightSurfaceGround, $darkSurfaceOverlay];
        $vars->colorBackgroundContrast     = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorBackgroundHighContrast = [$lightSurfaceGround, $darkSurfaceGround];
        $vars->colorBackgroundDisabled     = [$lightSurfaceGround, $darkSurfaceOverlay];

        // Borders
        $vars->colorBorder      = [$lightBorder, $darkSurfaceBase];
        $vars->colorBorderLight = [$lightBorderStrong, $darkBorderStrong];

        // Code blocks
        $vars->colorCode           = [$lightTextPrimary, $darkTextPrimary];
        $vars->colorCodeBackground = [$lightSurfaceOverlay, $darkSurfaceOverlay];

        // Box shadow
        $vars->colorBoxShadow = ['rgba(28, 31, 65, 0.08)', 'rgba(0, 0, 0, 0.4)'];

        // Illustration filter (invert white pngs/svgs to look right on dark)
        $vars->filterOnIllustration = ['none', 'brightness(89%) invert(100%) hue-rotate(180deg)'];
    }
}
