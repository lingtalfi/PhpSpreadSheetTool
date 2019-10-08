[Back to the Ling/PhpSpreadSheetTool api](https://github.com/lingtalfi/PhpSpreadSheetTool/blob/master/doc/api/Ling/PhpSpreadSheetTool.md)<br>
[Back to the Ling\PhpSpreadSheetTool\PhpSpreadSheetTool class](https://github.com/lingtalfi/PhpSpreadSheetTool/blob/master/doc/api/Ling/PhpSpreadSheetTool/PhpSpreadSheetTool.md)


PhpSpreadSheetTool::createFileByRows
================



PhpSpreadSheetTool::createFileByRows — Creates a spreadsheet file using the given rows.




Description
================


public static [PhpSpreadSheetTool::createFileByRows](https://github.com/lingtalfi/PhpSpreadSheetTool/blob/master/doc/api/Ling/PhpSpreadSheetTool/PhpSpreadSheetTool/createFileByRows.md)(string $file, array $rows, array $options = []) : void




Creates a spreadsheet file using the given rows.
Note: the possible file extensions are:
- ods
- xlsx
- xls
- html
- csv
- pdf (if one of Tcpdf, Dompdf, mPDF is installed)



Available options are:
- columnNames: an array of column names to prepend to the rows.




Parameters
================


- file

    

- rows

    

- options

    


Return values
================

Returns void.


Exceptions thrown
================

- [Exception](http://php.net/manual/en/class.exception.php).&nbsp;





Examples
================

Example 1: Create a xlsx file
----------------

```php
$f = "/tmp/test.xlsx";
$rows = [
    [
        "Fruit",
        "Number",
    ],
    [
        "Apple",
        "11",
    ],
    [
        "Banana",
        "22",
    ],
];
PhpSpreadSheetTool::createFileByRows($f, $rows);
az();

```

Source Code
===========
See the source code for method [PhpSpreadSheetTool::createFileByRows](https://github.com/lingtalfi/PhpSpreadSheetTool/blob/master/PhpSpreadSheetTool.php#L43-L67)


See Also
================

The [PhpSpreadSheetTool](https://github.com/lingtalfi/PhpSpreadSheetTool/blob/master/doc/api/Ling/PhpSpreadSheetTool/PhpSpreadSheetTool.md) class.



