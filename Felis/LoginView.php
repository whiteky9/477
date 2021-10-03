<?php


namespace Felis;

class LoginView extends View
{
    public function __construct(array &$session, array $get){
        $this->setTitle("Felis Investigations");
        $this->addLink("login.php", "Log in");
        if(isset($get['e'])){
            $this->msg = <<<HTML
<p class="msg">Invalid login credentials</p>
HTML;
        }
    }

    public function presentForm(){
        $html = <<<HTML
<form method="POST" action="post/login.php">
	$this->msg
	<fieldset>
		<legend>Login</legend>
		<p>
			<label for="email">Email</label><br>
			<input type="email" id="email" name="email" placeholder="Email">
		</p>
		<p>
			<label for="password">Password</label><br>
			<input type="password" id="password" name="password" placeholder="Password">
		</p>
		<p>
			<input type="submit" value="Log in"> <a href="">Lost Password</a>
		</p>
		<p><a href="./">Felis Agency Home</a></p>

	</fieldset>
</form>
HTML;

    return $html;
    }

    private $msg = "";
}