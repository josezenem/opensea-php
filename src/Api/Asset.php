<?php

namespace OwenVoke\OpenSea\Api;

class Asset extends AbstractApi
{
    public function all(array $parameters = []): array
    {
        return $this->get('/assets', $parameters);
    }

    public function show(string $address, string $tokenId, array $parameters = []): array
    {
        $body = $this->get(sprintf('/asset/%s/%s', rawurlencode($address), rawurlencode($tokenId)), $parameters);
        if(!is_array($body))
        {
            $body = json_decode($body, true);
        }
        return $body;
    }
}
