<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConverterCsv extends Model
{
    public function extRoute($type) {
        switch ($type) {
            case 'json':
                return new CSVToJsonParser($maxLenght, $separator);
            case 'xml':
                return new CSVToXmlParser($maxLenght, $separator);
            case 'yml':
                return new CSVToXmlParser($maxLenght, $separator);
            case 'csv':
                return new CSVToXmlParser($maxLenght, $separator);

        }
        return $this->belongsTo('App\categories');
    }
}
