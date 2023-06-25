# Auto Layout wp-list-tables

WordPress plugin that updates the `fixed` CSS class used for admin list table layouts in a way that prevents a noticeable layout shift.

## Features

- Automatically works, no Settings screen to administer.
- Allows tables with the class `wp-list-table` to expand to intrinsic widths.
- Visible layout shift avoided by using `admin_head` hook to make update before DOM is rended.

## Potential To-Do List

- Add screenshots to README.md.
- Test with a bunch of other plugins to check for conflicts.
- Add unit tests.
- Submit to <https://wordpress.org/plugins/>
