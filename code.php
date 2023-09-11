<?php
$title = 'Committing Code';
require('header.php'); ?>

  <div class="container-fluid">
    <h1 class="mt-4">Committing Code</h1>
    <hr>
    <h2 class="mt-4">Branching</h2>
    <p>Branching is an important tool to prevent missing code and merge conflicts.</p>
    <h3 class="mt-4">Naming</h3>
    <p>We will be using three different naming conventions for branches. First is the master branch which is the same as live. Second is the dev branch which is the same as staging. Third is the feature branch which is for specific features.</p>
    <h4 class="mt-3">Master Branch</h4>
    <p>Checkout the master branch.</p>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git checkout master</code></pre>
    <h4 class="mt-3">Dev Branch</h4>
    <p>Checkout the dev branch.</p>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git checkout dev</code></pre>
    <p>Create the dev branch if there isn't one.</p>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git checkout -b dev</code></pre>
    <h4 class="mt-3">Feature Branch</h4>
    <p>Checkout the feature branch.</p>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git checkout feature/mobile-styling</code></pre>
    <p>Create the feature branch if there isn't one.</p>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git checkout -b feature/mobile-styling</code></pre>
    <h3 class="mt-4">Pulling from Bitbucket</h2>
    <p>When pulling from Bitbucket you can either pull all available branches (recommended) or pull single branches.</p>
    <h4 class="mt-3">All Branches</h4>
    <p>If you haven't already pulled the repository:</p>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git clone https://voltagekc@bitbucket.org/voltagekc/voltage.git
      git fetch
      git checkout dev</code></pre>
    <p>If you already have the repository:</p>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git fetch
      git checkout dev</code></pre>
    <h4 class="mt-3">Individual Branches</h4>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git branch -f feature/mobile-styling origin/feature/mobile-styling 
      git checkout feature/mobile-styling</code></pre>  
    <h3 class="mt-4">Pushing to Bitbucket</h2>
    <p>Pushing to Bitbucket will differ depending on the branch that's going to be pushed. Double check the branch you are on by typing <code>git branch</code></p>
    <h4 class="mt-3">Master Branch</h4>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git checkout master
      git push origin master</code></pre>
    <h4 class="mt-3">Dev Branch</h4>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git checkout dev
      git push origin dev</code></pre>
    <h4 class="mt-3">Feature Branch</h4>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git checkout feature/mobile-styling
      git push origin feature/mobile-styling</code></pre>
    <hr>
    <h2 class="mt-4">Merging Branches</h2>
    <div class="p-3 mb-2 bg-danger text-white">
      <strong>Warning:</strong> Only the code reviewer or project lead should be merging branches.
    </div>
    <p>Before going live all code will need to be merged from dev to master. If this is code that has not gone live previously nothing should be in the master branch. You should never merge code to a feature branch.</p>
    <h4 class="mt-3">Master Branch</h4>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git checkout master
      git merge dev</code></pre>
    <h4 class="mt-3">Dev Branch</h4>
    <pre class="pre-line bg-dark text-white p-3 mb-3"><code>git checkout dev
      git merge feature/mobile-styling</code></pre>
  </div>

<?php include('footer.php'); ?>