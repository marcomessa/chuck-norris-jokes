<?php

namespace MarcoMessa\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
        'Chuck Norris is the reason why Waldo is hiding.',
        'Chuck Norris can set ants on fire with a magnifying glass. At night.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
