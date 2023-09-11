<?php
$title = 'Testing';
require('header.php'); ?>

  <div class="container-fluid">
    <h1 class="mt-4">Testing</h1>
    <hr>
    <h2>WordPress Testing</h2>
    <p><a href="https://wordpress.org/plugins/query-monitor/" target="_blank" rel="noreferrer">Query Monitor</a> is a WordPress plugin that helps debug code and find all kinds of cool things inside your theme.</p>
    <h3>Check For Errors</h3>
    <p>Make sure there are no blatant errors showing up on Query Monitor. If there are debug them even if it's only showing as a warning.</p>
    <h3>Check the Load Time</h3>
    <p>Is the load time more than 1 second? Maybe your query is too slow and can be optimized. Try paginating results or querying specific terms before filtering them.</p>
    <hr>
    <h2>Basic Design QA</h2>
    <p>You aren't expected to comb over every design detail but here are some basics to look for before a designer does their QA.</p>
    <h3>Section Text Alignment</h3>
    <p>Does each section align up?</p>
    <h3>Section Spacing</h3>
    <p>Is there a bunch of empty space between sections?</p>
    <h3>Fonts</h3>
    <p>Do the fonts load properly and match the mockup?</p>
    <h3>Other Questions</h3>
    <p>Are you ever in doubt about the design? Check with the Art Director or Project Manager for direction.</p>
    <hr>
    <h2>Cross Browser Testing</h2>
    <p>One of the most important parts of the QA process is cross browser testing. Each operating system and browser should have as close to the same experience as possible.</p>
    <h3>LambdaTest</h3>
    <p><a href="https://lambdatest.com" target="_blank" rel="noreferrer">LambdaTest</a> is the crossbrowser testing tool that we use.</p>
    <p>Operating systems we test:</p>
    <ul>
        <li>Android (10+)</li>
        <li>iOS (13+)</li>
        <li>MacOS (10.15+)</li>
        <li>Windows (8+)</li>
    </ul>
    <p>Browsers we test:</p>
    <ul>
        <li>Chrome (Latest Version)</li>
        <li>Safari (Latest Version)</li>
        <li>Firefox (Latest Version)</li>
        <li>Edge (Latest Version)</li>
    </ul>
    <p>Screen sizes we test:</p>
    <ul>
        <li>360x640 (Mobile)</li>
        <li>375x812 (Mobile)</li>
        <li>768x1024 (Tablet)</li>
        <li>1024x768 (Tablet)</li>
        <li>1366x768 (Laptop)</li>
        <li>1440x900 (Laptop)</li>
        <li>1680x1050 (Desktop)</li>
        <li>1920x1080 (Desktop)</li>
    </ul>
    <hr>
    <h2>Page Speed</h2>
    <p>Testing page speed is usually the very last piece to QA but it's helpful to test throughout development. We use <a href="https://developers.google.com/web/tools/lighthouse" target="_blank" rel="noreferrer">Lighthouse</a> which is built in to the Chrome browser. It is recommend to run this test in an incognito window.</p>
  </div>

<?php include('footer.php'); ?>