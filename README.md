# ACF CTA Block

A custom Call-To-Action (CTA) block for WordPress using Advanced Custom Fields (ACF).

## Description

This plugin provides a customizable CTA block for the WordPress Gutenberg editor. The block includes options for text, link, background color, padding, margin, and alignment.

## Installation

1. Download the plugin files and place them in the `wp-content/plugins/acf-cta-block` directory.

2. Navigate to the **Plugins** menu in WordPress and activate the **ACF CTA Block** plugin.

3. Make sure you have the Advanced Custom Fields (ACF) plugin installed and activated.

4. Create the necessary ACF fields:
   - Go to **Custom Fields > Add New**.
   - Create a new field group called "CTA Block".
   - Add the following fields:
     - **CTA Text** (Text)
     - **CTA Link** (URL)
     - **Background Color** (Color Picker)
     - **Padding** (Text)
     - **Margin** (Text)
     - **Alignment** (Select: left, center, right)
   - Set the location rule to show this field group if the block is equal to `cta-block`.

## Usage

1. In the WordPress editor, add a new block.
2. Search for "CTA Block".
3. Add the block to your content.
4. Customize the block by filling in the fields for text, link, background color, padding, margin, and alignment.

## Changelog

### 1.0

- Initial release.

## Credits

Developed by [Your Name].

## License

This plugin is licensed under the GPLv2 or later.
