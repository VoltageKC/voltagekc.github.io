<?php
$title = 'Code Standards';
require('header.php'); ?>

  <div class="container-fluid">
    <h1 class="mt-4">Code Standards</h1>
    <hr>
    <h2 class="mt-4">PHP Standards</h2>
    <p>These PHP standards follow WordPress so if you want a more in depth guide <a href="https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/" target="_blank" rel="noreferrer">read more here.</a>
    <h3 class="mt-4">Tabbing</h3>
    <p>Use tabs to indent and not spaces.</p>
    <pre class="bg-dark text-white p-3 mb-3"><code>if ( condition ) {
    action1();
} else {
    default_action();
}</code></pre>
    <p>Multiple tabs will be used to indent levels of code.</p>
    <pre class="bg-dark text-white p-3 mb-3"><code>if ( condition ) {
    if ( condition1 ) {
        action1();
    } else {
        action2();
    }
} else {
    default_action();
}</code></pre>
    <h3 class="mt-4">Braces</h3>
    <p>Use braces for if else statements.</p>
    <pre class="bg-dark text-white p-3 mb-3"><code>if ( condition ) {
    action1();
    action2();
} elseif ( condition2 && condition3 ) {
    action3();
    action4();
} else {
    default_action();
}</code></pre>
    <h3 class="mt-4">Naming</h3>
    <p>Use lowercase letters in variable, action/filter, and function names. Separate words using underscores. Namespace all functions with <code>vc523_</code>.</p>
    <pre class="bg-dark text-white p-3 mb-3"><code>var $some_variable = 'foo';

function vc523_default_action( $some_variable ) {
    return $some_variable;
}

vc523_default_action();</code></pre>
  </div>

<?php include('footer.php'); ?>