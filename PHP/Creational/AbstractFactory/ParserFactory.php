<?php

class ParserFactory
{
    public function createCsvParser(): CsvParser
    {
        return new CsvParser();
    }

    public function createJsonParser(): JsonParser
    {
        return new JsonParser();
    }
}