<?php
use Kirby\Cms\Page;
    class TextsPage extends Page {
        public function url($options = null): string {
            return kirby()->site()->url() . '/' . $this->slug();
        }
    }