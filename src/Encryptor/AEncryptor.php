<?php


namespace Finbricks\Sdk\Encryptor;

abstract class AEncryptor
{
    /**
     * Generate string separated by | .
     * @param array $data key-value array or pre sorted array. When array is associated (key=>value) this function will sort array and create a string.
     * @return string generated string
     */
    public static function makeStringForSign(array $data): string
    {
        ksort($data);
        // Create string for sign
        $dataString = "";
        foreach ($data as $key => $value) {
            // If value is not NULL or empty add it to string
            if ($value === null) {
                continue;
            }

            $dataString .= $value . "|";
        }
        // Delete last | from string
        return substr($dataString, 0, strlen($dataString) - 1);
    }

    abstract public function encryptQuery(array $data): string;
}
