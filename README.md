Drawing Tool
============

You're given the task of writing a simple console version of a drawing program. At this time, the  functionality of the program is quite limited but this might change in the future. In a nutshell, the  program should work as follows:

1.  Create a new canvas
2. Start drawing on the canvas by issuing various commands
3. Quit    At the moment, the program should support the following commands:

## To Run Commands

> - **...Project Folder\bin>C w h** Should create a new canvas of width w and height h.
- **...Project Folder\bin>L x1 y1 x2 y2** Should create a new line from (x1,y1) to (x2,y2). Currently only horizontal  or vertical lines are supported. Horizontal and vertical lines will be drawn  using the 'x' character.
-  **...Project Folder\bin>R x1 y1 x2 y2** Should create a new rectangle, whose upper left corner is (x1,y1) and  lower right corner is (x2,y2). Horizontal and vertical lines will be drawn  using the 'x' character.
- **...Project Folder\bin>B x y c** Should fill the entire area connected to (x,y) with "colour" c. The behaviour  of this is the same as that of the "bucket fill" tool in paint programs.
- **...Project Folder\bin>Q** Should quit the program.

## To Run Tests

All tests were make via PHPUnit

> ...Project Folder>phpunit

### Install dependencies

> ...Project Folder>composer install

### Generating autoload file

> ...Project Folder>composer dump-autoload

### List of dependencies

* phpunit/phpunit >= 4.4.5
* My Awesome classes ;)
