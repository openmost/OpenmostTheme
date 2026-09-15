<?php

/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
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

    /**
     * Light and dark palettes of the Openmost design system (openmost.com), every color is a
     * [light, dark] pair so the theme follows the mode each user picks in their personal settings.
     */
    public function configureThemeVariables(Plugin\ThemeStyles $vars)
    {
        // Brand: Openmost blue, lighter in dark mode for contrast
        $brand     = '#426CDA';
        $brandDark = '#7A96E8';

        // Light surfaces
        $lightSurfaceBase    = '#F5F6FA';
        $lightSurfaceRaised  = '#FFFFFF';
        $lightSurfaceOverlay = '#ECEFF8';
        $lightSurfaceGround  = '#DDE2F0';

        // Dark surfaces (Openmost navy scale): deep page, brand dark cards
        $darkSurfaceBase    = '#0A0B1A';
        $darkSurfaceRaised  = '#161830';
        $darkSurfaceOverlay = '#1A1C38';
        $darkSurfaceGround  = '#262840';
        $darkSurfaceHigh    = '#353755';

        // Text
        $lightTextPrimary   = '#1C1F41';
        $lightTextSecondary = '#4A5169';
        $lightTextTertiary  = '#6B7280';
        $lightTextDisabled  = '#9CA3AF';

        $darkTextPrimary   = '#FFFFFF';
        $darkTextSecondary = 'rgba(255, 255, 255, 0.87)';
        $darkTextTertiary  = '#9A9CB7';
        $darkTextDisabled  = '#6F7195';

        // Borders
        $lightBorder       = '#E5E7F0';
        $lightBorderStrong = '#C5CAD8';
        $darkBorder        = '#282A4B';
        $darkBorderStrong  = '#353755';

        // Font: system stack for text, Sora is kept for headings (stylesheets/layout/_typography.less)
        $vars->fontFamilyBase = 'ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif';

        // Brand
        $vars->colorBrand         = [$brand, $brandDark];
        $vars->colorBrandContrast = ['#FFFFFF', '#1B2860'];
        $vars->colorSuccess       = ['#16A34A', '#4ADE80'];

        // Focus
        $vars->colorFocusRing            = [$brand, $brandDark];
        $vars->colorFocusRingAlternative = [$brand, $brandDark];

        // Text
        $vars->colorTextHighContrast   = [$lightTextPrimary, $darkTextPrimary];
        $vars->colorText               = [$lightTextSecondary, $darkTextSecondary];
        $vars->colorTextContrast       = [$lightTextPrimary, $darkTextPrimary];
        $vars->colorTextLight          = [$lightTextTertiary, $darkTextTertiary];
        $vars->colorTextLighter        = [$lightTextTertiary, $darkTextTertiary];
        $vars->colorTextOnDisabled     = [$lightTextDisabled, $darkTextDisabled];
        $vars->colorTextDisabled       = [$lightTextDisabled, $darkTextDisabled];
        $vars->colorTextPlaceholder    = [$lightTextDisabled, $darkTextDisabled];
        $vars->colorTextInvert         = ['#FFFFFF', $darkSurfaceRaised];
        $vars->colorTextInvertContrast = ['#FFFFFF', '#000000'];
        $vars->colorTextInvertLight    = [$lightSurfaceGround, $darkTextTertiary];

        // Links
        $vars->colorLink = [$brand, $brandDark];

        // Charts (Openmost red)
        $vars->colorBaseSeries = '#F84B5C';

        // Headlines
        $vars->colorHeadlineAlternative = [$lightTextSecondary, $darkTextPrimary];

        // Header (top bar)
        $vars->colorHeaderBackground = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorHeaderText       = [$lightTextPrimary, $darkTextPrimary];

        // Menus (deprecated in Matomo 6, no replacement yet)
        $vars->colorMenuContrastText            = [$lightTextSecondary, $darkTextSecondary];
        $vars->colorMenuContrastTextSelected    = [$lightTextPrimary, $darkTextPrimary];
        $vars->colorMenuContrastTextActive      = [$brand, $darkTextPrimary];
        $vars->colorMenuContrastBackground      = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorMenuContrastBackgroundHover = [$lightSurfaceOverlay, $darkSurfaceOverlay];

        // Widgets (deprecated in Matomo 6, no replacement yet)
        $vars->colorWidgetBackground             = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorWidgetBorder                 = [$lightBorder, $darkBorder];
        $vars->colorWidgetExportedBackgroundBase = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorWidgetTitleBackground        = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorWidgetTitleText              = [$lightTextPrimary, $darkTextPrimary];

        // Backgrounds
        $vars->colorBackgroundBase         = [$lightSurfaceBase, $darkSurfaceBase];
        $vars->colorBackgroundTinyContrast = [$lightSurfaceOverlay, $darkSurfaceOverlay];
        $vars->colorBackgroundLowContrast  = [$lightSurfaceGround, $darkSurfaceGround];
        $vars->colorBackgroundContrast     = [$lightSurfaceRaised, $darkSurfaceRaised];
        $vars->colorBackgroundHighContrast = [$lightSurfaceGround, $darkSurfaceHigh];
        $vars->colorBackgroundDisabled     = [$lightSurfaceGround, $darkSurfaceGround];

        // Borders
        $vars->colorBorder            = [$lightBorder, $darkBorder];
        $vars->colorBorderAlternative = [$lightBorder, $darkBorder];
        $vars->colorBorderLight       = [$lightBorderStrong, $darkBorderStrong];

        // Code blocks
        $vars->colorCode           = [$lightTextPrimary, $darkTextPrimary];
        $vars->colorCodeBackground = [$lightSurfaceOverlay, $darkSurfaceOverlay];

        // Shadows
        $vars->colorBoxShadow = ['rgba(28, 31, 65, 0.08)', 'rgba(0, 0, 0, 0.4)'];
        $vars->shadowOverlay  = [
            '0 1px 3px rgba(28, 31, 65, 0.06), 0 4px 24px rgba(28, 31, 65, 0.08)',
            '0 1px 3px rgba(0, 0, 0, 0.4), 0 4px 24px rgba(0, 0, 0, 0.5)',
        ];

        // Illustration filter (invert white pngs/svgs to look right on dark)
        $vars->filterOnIllustration = ['none', 'brightness(89%) invert(100%) hue-rotate(180deg)'];
    }
}
