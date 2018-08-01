<?php

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\UploadedFileInterface;
use Bulldog\HttpFactory\FactoryBuilder;

class UploadedFileFactoryTest extends TestCase
{
    public function testCreateUploadedFile()
    {
        $guzzleFactory = FactoryBuilder::get('guzzle');
        $streamFactory = $guzzleFactory->streamFactory();
        $resource = $streamFactory->createStream('php://temp');

        $uploadedFileFactory = $guzzleFactory->uploadedFileFactory();
        $r = $uploadedFileFactory->createUploadedFile(
            $resource,
            1,
            \UPLOAD_ERR_OK,
            'filename.txt',
            'txt'
        );

        $this->assertInstanceOf(UploadedFileInterface::class, $r);
    }
}
