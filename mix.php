<?php
if (!function_exists('mix')) {
    /**
     * Get the path to a versioned Mix file.
     *
     * @param string $path
     * @param string $subDirectory
     * @return string
     *
     * @throws \Exception
     */

    function starts_with($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if ($needle !== '' && substr($haystack, 0, strlen($needle)) === (string) $needle) {
                return true;
            }
        }

        return false;
    }

    function mix($path, $subDirectory = '')
    {
        static $manifest;
        $publicFolder = '/public';
        $rootPath = $_SERVER['DOCUMENT_ROOT'];

        if ($subDirectory && !starts_with($subDirectory, '/')) {
            $subDirectory = "/{$subDirectory}";
        }

        $publicPath = $rootPath . $subDirectory . $publicFolder;
        if (!$manifest) {
            if (!file_exists($manifestPath = ($publicPath . '/mix-manifest.json'))) {
                throw new Exception('The Mix manifest does not exist.');
            }
            $manifest = json_decode(file_get_contents($manifestPath), true);
        }
        if (!starts_with($path, '/')) {
            $path = "/{$path}";
        }

        // $path = $publicFolder . $path;
        if (!array_key_exists($path, $manifest)) {
            throw new Exception(
                "Unable to locate Mix file: {$path}. Please check your " .
                    'webpack.mix.js output paths and try again.'
            );
        }
        return $subDirectory . $publicFolder . $manifest[$path];
    }
}
