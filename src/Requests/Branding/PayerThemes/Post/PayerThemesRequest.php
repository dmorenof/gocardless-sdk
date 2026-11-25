<?php

declare(strict_types=1);

namespace GoCardlessSDK\Requests\Branding\PayerThemes\Post;

final class PayerThemesRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Colour for buttons background (hexcode)
     * Example: "#00A87E"
     */
    public string $button_background_colour;
    /**
     * Colour for content box border (hexcode)
     * Example: "#D7D9DE"
     */
    public string $content_box_border_colour;
    /**
     * Colour for header background (hexcode)
     * Example: "#FFFFFF"
     */
    public string $header_background_colour;
    /**
     * Colour for text links (hexcode)
     * Example: "#3179D9"
     */
    public string $link_text_colour;
    public \GoCardlessSDK\Requests\Branding\PayerThemes\Post\PayerThemes\ThemesLinksRequest $links;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'button_background_colour' => is_string($value) ? $this->button_background_colour = $value : parent::assignMember($name, $value),
            'content_box_border_colour' => is_string($value) ? $this->content_box_border_colour = $value : parent::assignMember($name, $value),
            'header_background_colour' => is_string($value) ? $this->header_background_colour = $value : parent::assignMember($name, $value),
            'link_text_colour' => is_string($value) ? $this->link_text_colour = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
