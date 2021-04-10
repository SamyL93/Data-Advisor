<?php

namespace App\Annotation;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * @Annotation
 * @Target("PROPERTY")
 */
class UploadableField
{
    /**
     * @var string
     */
    private $property;

    /**
     * @var string
     */
    private $filenameProperty;

    /**
     * @var string
     */
    private $path;

    /**
     * UploadableField constructor.
     * @param array $options
     */
    public function __construct(array $options)
    {
        if (empty($options['property'])) {
            throw new \InvalidArgumentException('Attribute `property` is not define in Annotation UploadableField');
        }

        if (empty($options['path'])) {
            throw new \InvalidArgumentException('Attribute `path` is not define in Annotation UploadableField');
        }

        $this->property = $options['property'];
        $this->filenameProperty = isset($options['filenameProperty']) ? $options['filenameProperty'] : null;
        $this->path = $options['path'];
    }

    /**
     * @return string
     */
    public function getProperty(): string
    {
        return $this->property;
    }

    /**
     * @return string
     */
    public function getFilenameProperty(): ?string
    {
        return $this->filenameProperty;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }
}