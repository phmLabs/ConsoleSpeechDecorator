<?php

namespace phmLabs\ConsoleSpeechDecorator;

class Say implements Synthesizer
{
    public function textToSpeech($message)
    {
        $command = 'say "' . strip_tags($message) . '"';
        exec($command);
    }
}
