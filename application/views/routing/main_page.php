<h1>MVC Routing</h1>

<h2>Working example routes</h2>

<p>These are already done and working. Let's track down the code for 
    each one.</p>

<ul>
    <?php foreach ($examples_done as $route): ?>
    <li><a href="<?=$route?>"><?=$route?></a></li>
    <?php endforeach; ?>
</ul>

<h2>In-class demonstration routes</h2>

<p>We'll do these together right now.</p>

<ul>
    <?php foreach ($examples_todo as $route): ?>
    <li><a href="<?=$route?>"><?=$route?></a></li>
    <?php endforeach; ?>
</ul>

<h2>Routing lab</h2>

<p>Now let's apply what you've learned in a <a href="/routing/lab/">short lab</a>.</p>
