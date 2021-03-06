<?php

namespace NineCells\Iamport;

class Cache implements CacheInterface
{
    private $expiresAt = null;
    private $accessToken = null;

    public function getAccessToken()
    {
        $now = time();
        if ($now < $this->expiresAt && !empty($this->accessToken)) {
            return $this->accessToken;
        }
        $this->expiresAt = null;
        $this->accessToken = null;

        return null;
    }

    public function rememberAccessToken($accessToken, $expiresAt)
    {
        $this->accessToken = $accessToken;
        $this->expiresAt = $expiresAt;
    }
}
