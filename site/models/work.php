<?php
use Kirby\Cms\Page;
    class WorkPage extends Page {
        public function url($options = null): string {
            return kirby()->site()->url() . '/home/works/' . $this->slug();
        }
    }