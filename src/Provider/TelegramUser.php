<?php

namespace Andreiyaruk\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class TelegramUser implements ResourceOwnerInterface
{
    /**
     * @var array
     */
    protected $response;

    /**
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->response = $response;
    }

    public function getId()
    {
        return $this->response['id'];
    }

    public function getName()
    {
        return $this->response['username'];
    }
	
	public function getEmail()
    {
        return null;
    }

    /**
     * Get user data as an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return $this->response;
    }

    private function getResponseValue($key)
    {
        return $this->response[$key] ?? null;
    }
}
