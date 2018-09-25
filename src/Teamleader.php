<?php

namespace Nascom\TeamleaderApiClient;

use Nascom\TeamleaderApiClient\Http\ApiClient\ApiClientInterface;
use Nascom\TeamleaderApiClient\Repository\ContactRepository;
use Nascom\TeamleaderApiClient\Repository\UserRepository;
use Nascom\TeamleaderApiClient\Serializer\SerializerFactory;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class Teamleader
 *
 * @package Nascom\TeamleaderApiClient
 */
class Teamleader
{
    /**
     * @var ApiClientInterface
     */
    private $apiClient;

    /**
     * @var SerializerInterface&NormalizerInterface
     */
    private $serializer;

    /**
     * Teamleader constructor.
     *
     * @param ApiClientInterface $apiClient
     * @param SerializerInterface&NormalizerInterface $serializer
     */
    public function __construct(
        ApiClientInterface $apiClient,
        SerializerInterface $serializer
    ) {
        $this->apiClient = $apiClient;
        $this->serializer = $serializer;
    }

    /**
     * @param ApiClientInterface $apiClient
     * @return Teamleader
     */
    public static function withDefaultSerializer(ApiClientInterface $apiClient)
    {
        return new static($apiClient, SerializerFactory::create());
    }

    /**
     * @return UserRepository
     */
    public function users()
    {
        return new UserRepository($this->apiClient, $this->serializer);
    }

    /**
     * @return ContactRepository
     */
    public function contacts()
    {
        return new ContactRepository($this->apiClient, $this->serializer);
    }
}