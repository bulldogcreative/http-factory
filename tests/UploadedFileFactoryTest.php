<?php

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\UploadedFileInterface;
use Bulldog\HttpFactory\Factories\Guzzle\StreamFactory;
use Bulldog\HttpFactory\Factories\Guzzle\UploadedFileFactory;

class UploadedFileFactoryTest extends TestCase
{
    public function testCreateUploadedFile()
    {
        $streamFactory = new StreamFactory();
        $resource = $streamFactory->createStream('php://temp');

        $uploadedFileFactory = new UploadedFileFactory();
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
