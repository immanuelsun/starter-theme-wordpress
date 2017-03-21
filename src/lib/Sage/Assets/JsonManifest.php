<?php

namespace Roots\Sage\Assets;

/**
 * Class JsonManifest
 * @package Roots\Sage
 * @author QWp6t
 */
class JsonManifest implements ManifestInterface
{
    /** @var array */
    public $manifest;

    /** @var string */
    public $dist;

    /**
     * JsonManifest constructor
     *
     * @param string $manifestPath Local filesystem path to JSON-encoded manifest
     * @param string $distUri Remote URI to assets root
     */
    public function __construct($manifestPath, $distUri)
    {
        $this->manifest = [];

        $raw = file_exists($manifestPath) ? json_decode(file_get_contents($manifestPath), true) : [];

        // normalize by stripping leading slashes from keys and values
        foreach($raw as $ref => $path) {
            $this->manifest[ltrim($ref, '/')] = ltrim($path, '/');
        }

        $this->dist = $distUri;
    }

    /** @inheritdoc */
    public function get($asset)
    {
        return isset($this->manifest[$asset]) ? $this->manifest[$asset] : $asset;
    }

    /** @inheritdoc */
    public function getUri($asset)
    {
        return "{$this->dist}/{$this->get($asset)}";
    }
}
