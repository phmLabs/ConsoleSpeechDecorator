<?php

namespace phmLabs\ConsoleSpeechDecorator;

interface Synthesizer
{
    /**
     * This function synthesizes the given message to speech
     *
     * @param string $message
     * @return void
     */
    public function textToSpeech($message);
}
