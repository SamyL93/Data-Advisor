<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\String\ByteString;

class UploadHandler
{
    /**
     * @var \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    private $accessor;

    /**
     * UploadHandler constructor.
     */
    public function __construct()
    {
        $this->accessor = PropertyAccess::createPropertyAccessor();
    }

    /**
     * @param $entity
     * @param $property
     * @param $annotation
     */
    public function uploadFile($entity, $property, $annotation)
    {
        $file = $this->accessor->getValue($entity, $property);
        if ($file instanceof UploadedFile) {
            $this->removeOldFile($entity, $annotation);

            //Rename file name with a String random
            $filename = ByteString::fromRandom(32) . '.' . $this->extentsionFile($file->getMimeType());

            //Upload File
            $path = $annotation->getPath();

            $file->move($path, $filename);

            // Save in database filename
            $this->accessor->setValue($entity, $annotation->getProperty(), $path . DIRECTORY_SEPARATOR . $filename);
            if ($annotation->getFilenameProperty()) {
                $this->accessor->setValue($entity, $annotation->getFilenameProperty(), $file->getClientOriginalName());
            }
        }
    }

    /**
     * @param $entity
     * @param $property
     * @param $annotation
     */
    public function setFileFromFilename($entity, $property, $annotation)
    {
        $file = $this->getFileFromProperty($entity, $annotation);
        $this->accessor->setValue($entity, $property, $file);
    }

    /**
     * @param $entity
     * @param $annotation
     */
    public function removeOldFile($entity, $annotation)
    {
        $file = $this->getFileFromProperty($entity, $annotation);
        if ($file !== null) {
            @unlink($file->getRealPath());
        }
    }

    /**
     * @param $entity
     * @param $property
     */
    public function removeFile($entity, $property)
    {
        $file = $this->accessor->getValue($entity, $property);
        if ($file instanceof File) {
            @unlink($file->getRealPath());
        }
    }

    /**
     * @param $entity
     * @param $annotation
     * @return File|null
     */
    private function getFileFromProperty($entity, $annotation)
    {
        $filename = $this->accessor->getValue($entity, $annotation->getProperty());

        if (empty($filename)) {
            return null;
        } else {
            return new File($filename, false);
        }
    }

    /**
     * @param string $filename
     * @return string
     */
    public function extentsionFile(string $filename): string
    {
        $pos = stripos($filename, DIRECTORY_SEPARATOR);

        return substr($filename, $pos + 1, strlen($filename));
    }
}