<?php


namespace Ling\PhpSpreadSheetTool;


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
 * The PhpSpreadSheetTool class.
 *
 * This uses the PhpSpreadsheet's library under the hood.
 *
 * https://phpspreadsheet.readthedocs.io/en/latest/
 */
class PhpSpreadSheetTool
{

    /**
     * Creates a spreadsheet file using the given rows.
     * Note: the possible file extensions are:
     * - ods
     * - xlsx
     * - xls
     * - html
     * - csv
     * - pdf (if one of Tcpdf, Dompdf, mPDF is installed)
     *
     *
     *
     * Available options are:
     * - columnNames: an array of column names to prepend to the rows.
     *
     *
     *
     * @param string $file
     * @param array $rows
     * @param array $options
     *
     * @throws \Exception
     */
    public static function createFileByRows(string $file, array $rows, array $options = []): void
    {

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $columnNames = $options['columnNames'] ?? [];
        if ($columnNames) {
            array_unshift($rows, $columnNames);
        }


        $c = 1;
        foreach ($rows as $row) {
            $letter = 'A';
            while ($row) {
                $val = array_shift($row);
                $sheet->setCellValue($letter++ . $c, $val);
            }
            $c++;
        }


        $writer = new Xlsx($spreadsheet);
        $writer->save($file);
    }
}