<?php namespace Ske\Lex;

/**
 * The grammar class
 * 
 * @package ske/lex
 * @author SIGUI Kessé Emmanuel
 * @license MIT
 */
class Grammar
{
    /**
     * Create a new grammar
     *
     * @param string $rule The grammar rule
     */
    public function __construct(string $rule)
    {
        $this->setRule($rule);
    }

    /**
     * @var string The grammar rule
     */
    protected string $rule;

    /**
     * Set the grammar rule
     *
     * @param string $rule The grammar rule
     * @return self
     */
    public function setRule(string $rule): self
    {
        $this->rule = $this->parse_rule($rule);
        return $this;
    }

    /**
     * Get the grammar rule
     * 
     * @return string The grammar rule
     */
    public function getRule(): string
    {
        $rule = $this->format_rule($this->rule);
        return $rule;
    }

    /**
     * Parse the rule to array
     * 
     * @param string $rule The rule to parse
     * @return array The parsed rule
     */
    protected function parse_rule(string $rule): array
    {
        $parsed_rule = [];

        //Parsing code...
    
        return $parsed_rule;
    }

    /**
     * Format the rule to string
     * 
     * @param array $rule The rule to format
     * @return string The formated rule
     */
    protected function format_rule(array $rule): string
    {
        $rule_formated = '';

        //Formatting code...

        return $rule_formated;
    }

    /**
     * Parse the code
     * 
     * @param string $code The code to parse
     * @return array
     */
    public function parse(string $code): array
    {
    }
}