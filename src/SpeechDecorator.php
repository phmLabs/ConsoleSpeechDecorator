<?php


namespace phmLabs\ConsoleSpeechDecorator;

use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SpeechDecorator implements OutputInterface
{
    private $output;
    private $synthesizer;

    public function __construct(OutputInterface $output, Synthesizer $synthesizer)
    {
        $this->output = $output;
        $this->synthesizer = $synthesizer;
    }

    public function write($messages, $newline = false, $options = 0)
    {
        $result = $this->output->write($messages, $newline, $options);
        $this->synthesizer->textToSpeech($messages);
        return $result;
    }

    public function writeln($messages, $options = 0)
    {
        $result = $this->output->writeln($messages, $options);
        $this->synthesizer->textToSpeech($messages);
        return $result;
    }

    public function setVerbosity($level)
    {
        return $this->output->setVerbosity($level);
    }

    public function getVerbosity()
    {
        return $this->output->getVerbosity();
    }

    public function setDecorated($decorated)
    {
        return $this->output->setDecorated($decorated);
    }

    public function isDecorated()
    {
        return $this->output->isDecorated();
    }

    public function setFormatter(OutputFormatterInterface $formatter)
    {
        $this->output->setFormatter($formatter);
    }

    public function getFormatter()
    {
        $this->output->getFormatter();
    }
}
