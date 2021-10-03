<?php

namespace Felis;

/**
 * View class uses by index.html (home page)
 */
class HomeView  extends View {
    /**
     * Constructor
     * Sets the page title and any other settings.
     */
    public function __construct() {
        $this->setTitle("Felis Investigations");

        $this->addLink("login.php", "Log in");
    }

    /**
     * Add content to the header
     * @return string Any additional comment to put in the header
     */
    protected function headerAdditional() {
        return <<<HTML
<p>Welcome to Felis Investigations!</p>
<p>Domestic, divorce, and carousing investigations conducted without publicity. People and cats shadowed
    and investigated by expert inspectors. Katnapped kittons located. Missing cats and witnesses located.
    Accidents, furniture damage, losses by theft, blackmail, and murder investigations.</p>
<p><a href="">Learn more</a></p>
HTML;
    }

    public function addTestimonial($text1, $text2){
        if ($this->testNum % 2 == 0){
            $this->leftBlock .= <<<HTML
    <blockquote>
        <p>$text1</p>
        <cite>$text2</cite>
    </blockquote>
HTML;

        }
        if ($this->testNum % 2 == 1){
            $this->rightBlock .= <<<HTML
    <blockquote>
        <p>$text1</p>
        <cite>$text2</cite>
    </blockquote>
HTML;

        }
        $this->testNum += 1;
    }

    public function testimonials (){
        return <<<HTML
<section class="testimonials">
    <h2>TESTIMONIALS</h2>
    <div class="left">
    <p>$this->leftBlock</p>
    </div>
    <div class="right">
    <p>$this->rightBlock</p>
    </div>
</section>
HTML;
    }
    private $testNum = 0;
    private $leftBlock = "";
    private $rightBlock = "";
}
