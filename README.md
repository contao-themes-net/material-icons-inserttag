# Material Icons Inserttag Bundle

This extension provide one insert tag for creating [Material Icons](https://material.io/tools/icons/?style=baseline "Material Icons") in Contao CMS. 

## Insert Tag

Use the ``mi`` prefix for the insert tag. Replace the name after ``::`` with the material icon name, e.g. check.

    {{mi::check}}

You can change the size of the icon if you insert the classes after the second ``::``. Possible classes are: ``tiny``, ``small``, ``medium`` and ``large``.

    {{mi::check::large}}
    
You can define more classes, e.g. for font and background color. For the color classes you must include the [Materialize Framework](https://materializecss.com "Materialize Framework").  [Here](https://materializecss.com/color.html "Materialize Colors") you can find all materialize colors.

    {{mi::check::large white-text red}}
