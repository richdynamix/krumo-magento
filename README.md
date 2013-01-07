Krumo for Magento
=========

Creating a more productive development environment

[Krumo] is simply the best PHP5 debugging tool around. To put it simply, [Krumo] is a replacement for print_r() and var_dump(). By definition Krumo is a debugging tool, which displays structured information about any **PHP** variable.

A lot of developers use print_r() and var_dump() in the means of debugging tools. Although they were intended to present human readble information about a variable, we can all agree that in general they are not. Krumo is an alternative: it does the same job, but it presents the information beautified using CSS and HTML.

Except the collapsible HTML tree built around the structure of the dumped PHP variable, and  improved by the CSS looks, Krumo offers additional useful features.

Install
-

To install the module simply download or clone the repo. Once downloaded copy the contents (app and var) folders to your project root merging with your existing magento installation.

Config
-

Open ./var/krumo/krumo.ini and edit the two settings there.

    [skin] selected = "orange"
    [css] url = "http://www.example.com/krumo/"

Comments are supplied within the file.

Usage Examples
-

Here's a basic **PHP** example, which will return a report on the array variable passed as argument to it:

    krumo(array('a1'=> 'A1', 3, 'red'));

You can dump simultaneously more then one variable - here's another PHP example:

    krumo($_SERVER, $_ENV);

You probably saw from the PHP examples above that some of the nodes are expandable, so if you want to inspect the nested information, click on them and they will expand; if you do not need that information shown simply click again on it to collapse it. Here's a PHP example to test this:

    $x1->x2->x3->x4->x5->x6->x7->x8->x9 = 'X10';
    krumo($x1);

The krumo() is the only standalone PHP function from the package, and this is because basic dumps about variables (like print_r() or var_dump()) are the most common tasks such functionality is used for. The rest of the functionality can be called using static calls to the Krumo class. Here are several more **PHP** examples:

    // print a debug backtrace
    krumo::backtrace();
    
    // print all the included(or required) files
    krumo::includes();
    
    // print all the included functions
    krumo::functions();
    
    // print all the declared classes
    krumo::classes();
    
    // print all the defined constants
    krumo::defines();


For all the available features, check [Krumo] docs. A full PHPDocumenter API documentation exists both in this package and here, at the project's website: go and check the [documentation] section. 

To see a **PHP** demonstration of most features, [click here].

Another handy feature is that you can enable and disable [Krumo] no the fly.

    // disable Krumo
    krumo::disable(); 
    
    // Krumo is disabled, nothing is printed
    krumo::includes();
    
    // enable Krumo
    krumo::enable();
    
    // Krumo is enable, printing is OK
    krumo::classes();

This proves to be very useful when your **PHP** code gets swamped with [Krumo] calls dumping debuging information, and instead of removing each of those dumps one by one, you can just disable them.

Authors
-

* [Krumo] was developed by the people over at [kaloyan.info]
* Magento Module was developed by Steven Richardson - https://twitter.com/troongizmo

  [krumo]: http://krumo.sourceforge.net/
  [kaloyan.info]: http://kaloyan.info/krumo/
  [documentation]: http://kaloyan.info/krumo/index.php#docs
  [click here]: http://kaloyan.info/krumo/demo/index.php
