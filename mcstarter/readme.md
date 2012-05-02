#Mediachrome Starter

*Notes on use and development*

Mediachrome starter theme built on top of Mediachrome Base Theme.

To implement javascript actions triggered by media queries set in responsive css:

`var size = window.getComputedStyle(document.body,':after').getPropertyValue('content');
if (size == 'widescreen') {
    // go nuts
}`