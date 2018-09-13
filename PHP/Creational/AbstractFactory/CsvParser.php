<?php

class CsvParser implements Parser
{
    public function parse(string $input): array
    {
        $parsedLines = [];
        foreach (explode(PHP_EOL, $input) as $line) {
            $parsedLines[] = str_getcsv($line);
        }

        return $parsedLines;
    }
}