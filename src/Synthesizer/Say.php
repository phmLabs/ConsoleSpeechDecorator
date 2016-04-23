<?php

namespace phmLabs\ConsoleSpeechDecorator;

class Say implements Synthesizer
{
    private $sayCommand = 'say';

    public function __construct($pathToSayCommand = null)
    {
        if ($pathToSayCommand) {
            $this->sayCommand = $pathToSayCommand;
        }
    }

    public function textToSpeech($message)
    {
        $command = $this->sayCommand . ' "' . strip_tags($message) . '"';
        exec($command);
    }
}
