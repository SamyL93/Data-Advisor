<?php


namespace App\Annotation;

use Doctrine\Common\Annotations\Reader;

class UploadAnnotationReader
{
    /**
     * @var Reader
     */
    private $reader;

    public function __construct(Reader $reader)
    {
        $this->reader = $reader;
    }

    /**
     * @param $entity
     * @return bool
     * @throws \ReflectionException
     */
    public function isUploadable($entity): bool
    {
        $reflexion = new \ReflectionClass(get_class($entity));
        return $this->reader->getClassAnnotation($reflexion, Uploadable::class) !== null;
    }

    /**
     * @param $entity
     * @return array
     * @throws \ReflectionException
     */
    public function getUploadableFields($entity): array
    {
        $reflection = new \ReflectionClass(get_class($entity));
        $properties = [];
        foreach($reflection->getProperties() as $property) {
            $annotation = $this->reader->getPropertyAnnotation($property, UploadableField::class);
            if ($annotation !== null) {
                $properties[$property->getName()] = $annotation;
            }
        }

        return $properties;
    }
}