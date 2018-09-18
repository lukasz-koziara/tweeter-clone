<?php
/**
 * Created by PhpStorm.
 * User: Koza
 * Date: 2018-09-13
 * Time: 16:16
 */

namespace App\Service;


use Psr\Log\LoggerInterface;

class Greeting
{
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var string
     */
    private $message;
    public function __construct(LoggerInterface $logger, string $message)
    {
        $this->logger = $logger;
        $this->message= $message;
    }

    public function greet(string $name): string
    {
        $this->logger->info("Greeted $name");
        return "{$this->message} $name";
    }
}