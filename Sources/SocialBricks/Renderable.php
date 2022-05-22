<?php

/**
 * Social Bricks
 *
 * @package SocialBricks
 * @author Social Bricks and others (see CONTRIBUTORS.md)
 * @copyright 2022 Social Bricks contributors (full details see LICENSE file)
 * @license 3-clause BSD (see accompanying LICENSE file)
 *
 * @version 2.1.0
 */

namespace SocialBricks;

class Renderable
{
    protected string $template;
    protected array $data = [];

    public function __construct(string $template, ?array $data = [])
    {
        $this->template = $template;
        $this->data = $data;
    }

    public function __set(string $key, mixed $value): void
    {
        $this->data[$key] = $value;
    }

    public function set_many(array $keyvals): void
    {
        $this->data = array_merge($this->data, $keyvals);
    }

    public function render(): string
    {
        global $context;

        if (empty($context['twig']))
            $context['twig'] = load_twig();

        return $context['twig']->load($this->template)->render($this->data);
    }
}