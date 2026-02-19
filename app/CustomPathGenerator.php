<?php

namespace App;

use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CustomPathGenerator implements PathGenerator
{
    /**
     * Get the base path for the given media.
     */
    public function getPath(Media $media): string
    {
        return 'uploads/';
    }

    /**
     * Get the path for conversions.
     */
    public function getPathForConversions(Media $media): string
    {
        return 'uploads/conversions/';
    }

    /**
     * Get the path for responsive images.
     */
    public function getPathForResponsiveImages(Media $media): string
    {
        return 'uploads/responsive/';
    }
}

