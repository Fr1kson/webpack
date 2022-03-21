<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Webpack Boilerplate Starter Template</title>
    <meta name="description" content="Simple starter webpack 5 project template boilerplate supporting SASS/PostCSS, Babel ES7, browser syncing, code linting. Easy project setup having multiple features and developer friendly tools.">
    <meta name="keywords" content="webpack, webpack-configuration, template, boilerplate, setup, html, css, sass, javascript">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Plamen Nikolov, WeAreAthlon">
    <link rel="stylesheet" href="/dist/css/app.css">
    <script src="/dist/js/app.js"></script>
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
  </head>
  <body>
    <header>
      <h1>PHP INDEX.PHP 5 Template Boilerplate</h1>
      <small>Maintained by <a href="https://www.weareathlon.com/" target="_blank" rel="noopener">WeAreAthlon</a>. Source code availalbe on <a href="https://github.com/WeAreAthlon/frontend-webpack-boilerplate/" target="_blank"><img src="images/content/github.png" alt="GitHub logo"> GitHub</a>.</small>
      <div class="badges">
        <a href="https://github.com/WeAreAthlon/frontend-webpack-boilerplate/" target="_blank" rel="noopener"><img src="https://img.shields.io/maintenance/yes/2022?logo=github" alt="Maintenance"></a>
        <a href="https://webpack.js.org" target="_blank" rel="noopener"><img src="https://img.shields.io/badge/webpack-v5.69.1-green?logo=webpack" alt="Current Webpack Version"></a>
        <a href="https://app.travis-ci.com/github/WeAreAthlon/frontend-webpack-boilerplate" target="_blank" rel="noopener"><img src="https://app.travis-ci.com/WeAreAthlon/frontend-webpack-boilerplate.svg?branch=master" alt="Build Status"></a>
        <a href="https://snyk.io/advisor/npm-package/@weareathlon/frontend-webpack-boilerplate" target="_blank" rel="noopener"><img src="https://snyk.io/advisor/npm-package/@weareathlon/frontend-webpack-boilerplate/badge.svg" alt="Snyk.io package health badge"></a>
        <br>
        <a href="https://github.com/WeAreAthlon/frontend-webpack-boilerplate/issues" target="_blank" rel="noopener"><img src="https://img.shields.io/github/issues-raw/WeAreAthlon/frontend-webpack-boilerplate" alt="GitHub Issues"></a>
        <a href="https://snyk.io/test/github/WeAreAthlon/frontend-webpack-boilerplate?targetFile=package.json" target="_blank" rel="noopener"><img src="https://snyk.io/test/github/WeAreAthlon/frontend-webpack-boilerplate/badge.svg?targetFile=package.json" alt="Known Vulnerabilities"></a>
        <a href="https://www.npmjs.com/package/@weareathlon/frontend-webpack-boilerplate" target="_blank" rel="noopener"><img src="https://img.shields.io/npm/dm/@weareathlon/frontend-webpack-boilerplate" alt="npm"></a>
        <a href="https://github.com/WeAreAthlon/frontend-webpack-boilerplate/blob/master/LICENSE" target="_blank" rel="noopener"><img src="https://img.shields.io/github/license/WeAreAthlon/frontend-webpack-boilerplate" alt="GitHub License"></a>
      </div>
      <a href="https://github.com/WeAreAthlon/frontend-webpack-boilerplate" class="github-corner" title="View source on GitHub" aria-label="View source on GitHub">
        <svg width="80" height="80" viewBox="0 0 250 250" style="fill:#151513; color:#fff; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true">
          <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
          <path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
          <path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path>
        </svg>
      </a>
    </header>
    <main>
      <img src="/dist/images/content/header.png" alt="Webpack 5 Template Boilerplate">
      <h1>Demo page illustrating building of SASS, PostCSS, JavaScript, Fonts, Background Images and Inline Images.</h1>
      <img src="images/content/logoa.svg" alt="Logo of Athlon" class="logo"> 
      <h2 id="table-of-contents">Table of Contents</h2>
      <ul>
        <li><a href="#features">Features</a></li>
        <li><a href="#requirements">Requirements</a></li>
        <li>
          <a href="#setup">Setup</a>
          <ul>
            <li><a href="#installation">Installation</a></li>
            <li><a href="#define-package-metadata">Define Package Metadata</a></li>
          </ul>
        </li>
        <li>
          <a href="#configuration">Configuration</a>
          <ul>
            <li><a href="#environment-configuration">Environment Configuration</a></li>
            <li><a href="#additional-webpack-configuration">Additional webpack configuration</a></li>
          </ul>
        </li>
        <li>
          <a href="#development">Development</a>
          <ul>
            <li><a href="#assets-source">Assets Source</a></li>
            <li>
              <a href="#build-assets">Build Assets</a>
              <ul>
                <li><a href="#one-time-build-assets-for-development">One time build assets for development</a></li>
                <li><a href="#build-assets-and-enable-source-files-watcher">Build assets and enable source files watcher</a></li>
                <li><a href="#start-a-development-server---reloading-automatically-after-each-file-change">Start a development server - reloading automatically after each file change.</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          <a href="#production">Production</a>
          <ul>
            <li><a href="#build-assets-1">Build Assets</a></li>
            <li><a href="#get-built-assets">Get Built Assets</a></li>
          </ul>
        </li>
        <li>
          <a href="#run-code-style-linters">Run Code Style Linters</a>
          <ul>
            <li><a href="#sass">SASS</a></li>
            <li><a href="#javascript">JavaScript</a></li>
          </ul>
        </li>
        <li>
          <a href="#additional-tools">Additional Tools</a>
          <ul>
            <li><a href="#run-assets-bundle-analyzer">Run Assets Bundle Analyzer</a></li>
            <li><a href="#continuous-integration">Continuous Integration</a></li>
          </ul>
        </li>
      </ul>
      <h2 id="features">Features</h2>
      <ul>
        <li>
          <strong>Simple setup</strong> instructions
          <ul>
            <li>Start development of a project right away with <strong>simple</strong>, <strong>configured</strong>, <strong>linter enabled</strong>, <strong>browser synced</strong> asset files.</li>
          </ul>
        </li>
        <li>
          Configuration per <strong>environment</strong>
          <ul>
            <li><code>development</code> - <a href="https://webpack.js.org/configuration/devtool/"><code>sourcemaps</code></a>, <a href="https://webpack.js.org/configuration/dev-server/"><code>browser synced developmentment server</code></a></li>
            <li><code>production</code> - <a href="https://webpack.js.org/plugins/terser-webpack-plugin/"><code>minification</code></a>, <a href="https://webpack.js.org/configuration/devtool/"><code>sourcemaps</code></a></li>
          </ul>
        </li>
        <li>Configurable <strong>browsers versions support</strong>. It uses <a href="https://github.com/browserslist/browserslist#full-list"><code>browserslist</code></a> - just specify the browsers you want to support in the <code>package.json</code> file for <code>browserslist</code>:</li>
      </ul>
      <pre><code class="lang-js"><span class="hljs-string">"browserslist"</span>: [
          <span class="hljs-string">"last 2 versions"</span>,
          <span class="hljs-string">"&gt; 5%"</span>
      ]
      </code></pre>
      <ul>
        <li>
          The built CSS / JavaScript files will respect the <strong>configured supported browser versions</strong> using the following tools:
          <ul>
            <li><a href="https://github.com/postcss/autoprefixer"><code>autoprefixer</code></a> - automatically adds vendor prefixes to CSS rules</li>
            <li><a href="https://babeljs.io/docs/en/babel-preset-env"><code>babel-preset-env</code></a> - smart preset that allows you to use the latest JavaScript without needing to micromanage which syntax transforms (<em>and optionally, browser polyfills</em>) are needed by your target environment(s).</li>
          </ul>
        </li>
        <li>
          Demo project files to be used as a reference and <strong>example demo</strong> building of:
          <ul>
            <li><em>JavaScript</em></li>
            <li><em>SASS / PostCSS</em></li>
            <li><em>HTML</em> templates</li>
            <li><em>Images</em> (<em>CSS backgrounds and image tags</em>)</li>
            <li><em>Fonts</em></li>
          </ul>
        </li>
        <li>
          Support for <strong>assets optimization</strong> for production environment with ability to configure:
          <ul>
            <li><strong>Code Minification</strong> of <em>JavaScript</em> and <em>CSS</em> processed files.</li>
            <li><strong>Optimize Assets Loading</strong> - inline and embed <strong>images</strong> / <strong>fonts</strong> files having file size below a <em>configurable</em> threshold value.</li>
            <li><strong>Images Optimisation</strong> - optimize <code>jpeg</code>, <code>jpg</code>, <code>png</code>, <code>gif</code>, <code>svg</code> filesize and loading type via <a href="https://github.com/imagemin/imagemin"><code>imagemin</code></a>. Plugin and Loader for webpack to optimize (<em>compress</em>) all images using <code>imagemin</code>. Do not worry about size of images, now they are always optimized/compressed.</li>
          </ul>
        </li>
        <li>
          Support for <strong>source code syntax style and formatting linters</strong> that analyze source code to flag any programming errors, bugs, stylistic errors or suspicious constructs:
          <ul>
            <li><strong>SASS/PostCSS syntax cheker</strong> - you can change or add additional rules in <code>.sasslintrc</code> file. Configuration options can be found on <a href="https://github.com/sasstools/sass-lint/blob/master/lib/config/sass-lint.yml"><code>sass-lint</code></a> documentation.</li>
            <li><strong>JavaScript syntax checker</strong> - following the <code>airbnb</code> style, you can review and configure the rules in <code>.eslintrc</code> file. Configuration options can be found on <a href="https://eslint.org/docs/user-guide/configuring"><code>eslint</code></a> documentation.</li>
          </ul>
        </li>
        <li>Latest <a href="https://github.com/webpack/webpack">Webpack 5</a> - <em>JavaScript</em> module bundler.</li>
        <li>Latest <a href="https://github.com/sass/sass">SASS/PostCSS</a> compiler based on Dart <code>sass</code>.</li>
        <li>Latest <a href="https://github.com/babel/babel">Babel 7</a> (<code>@babel/core</code>) - JavaScript compiler - <em>Use next generation JavaScript, today.</em></li>
        <li>
          Integration with <a href="https://travis-ci.com/">Travis CI</a>
          <ul>
            <li><a href="https://weareathlon.github.io/frontend-webpack-boilerplate/">Demo deployment available to GitHub pages</a></li>
          </ul>
        </li>
        <li>Configured and ready to use <strong>Webpack Dev Server</strong> plugin for faster local development - <a href="https://webpack.js.org/configuration/dev-server/"><code>webpack-dev-server</code></a></li>
        <li>Integration with <a href="https://www.npmjs.com/package/webpack-bundle-analyzer">Webpack Bundle Analyzer</a> - <em>Visualize size of webpack output files with an interactive zoomable treemap.</em></li>
      </ul>
      <h2 id="requirements">Requirements</h2>
      <ul>
        <li><code>node</code> : <code>^12 || &gt;=14</code></li>
        <li><code>npm</code></li>
      </ul>
      <h1 id="setup">Setup</h1>
      <h2 id="installation">Installation</h2>
      <ol>
        <li>Choose and download the latest template release from <a href="https://github.com/WeAreAthlon/frontend-webpack-boilerplate/releases">List of Releases</a>.</li>
        <li>Extract the release archive to a new directory, rename it to your project name and browse the directory.</li>
        <li>Install all dependencies using <code>npm</code> <em>clean install</em> command. </li>
      </ol>
      <pre><code class="lang-sh">$ <span class="hljs-built_in">npm</span> ci</code></pre>
      <blockquote>
        <p>More on the clean install npm command can be read here <a href="https://docs.npmjs.com/cli/ci.html"><code>npm ci</code></a></p>
        <p>You can still use <code>npm install</code> in cases the <code>npm ci</code> raises system error due to specific platform incompatibilities.</p>
      </blockquote>
      <h2 id="define-package-metadata">Define Package Metadata</h2>
      <ul>
        <li>
          Amend <code>package.json</code> file and optionally specify:
          <ul>
            <li><code>name</code> - Name of your project. A name can be optionally prefixed by a scope, e.g. <code>@myorg/mypackage</code>.</li>
            <li><code>version</code> - Specify and maintain a version number indicator for your project code.</li>
            <li><code>author</code> - Your organisation or just yourself. You can also specify <a href="https://docs.npmjs.com/files/package.json#people-fields-author-contributors"><code>contributors</code></a>.</li>
            <li><code>description</code> - Short description of your project.</li>
            <li><code>keywords</code> - Put keywords in it. It’s an array of strings.</li>
            <li><code>repository</code> - Specify the place where your code lives.</li>
            <li><code>license</code> - Announce your code license, figure out the license from <a href="https://choosealicense.com">Choose an Open Source License</a> .</li>
            <li><code>browserslist</code> - Specify the supported browsers versions - you can refer to <a href="https://github.com/browserslist/browserslist#full-list">full list</a> of availalbe options.</li>
          </ul>
        </li>
      </ul>
      <h1 id="configuration">Configuration</h1>
      <h2 id="environment-configuration">Environment Configuration</h2>
      <ul>
        <li>
          Edit the <a href="configuration/environment.js"><code>configuration/environment.js</code></a> if you want to specify:
          <ul>
            <li><strong><code>server</code></strong>: configure development server, specify <code>host</code>, <code>port</code>. Refer to the full development server configuration options for <a href="https://webpack.js.org/configuration/dev-server/"><code>webpack-dev-server</code></a>.</li>
            <li>
              <strong><code>limits</code></strong>: configure file size thresholds for assets optimizations.
              <ul>
                <li>Image/Font files size in bytes. Below this value the image file will be served as Data URL (<em>inline base64</em>).</li>
              </ul>
            </li>
            <li><strong><code>paths</code></strong>: <code>src</code> or <code>dist</code> directories names and file system location.</li>
          </ul>
        </li>
      </ul>
      <h2 id="additional-webpack-configuration">Additional <code>webpack</code> configuration</h2>
      <p>You can additionally configure <code>webpack</code> for specific environment:</p>
      <ul>
        <li><code>development</code> - <a href="configuration/webpack.dev.config.js"><code>configuration/webpack.dev.config.js</code></a></li>
        <li>
          <code>production</code> - <a href="configuration/webpack.prod.config.js"><code>configuration/webpack.prod.config.js</code></a>
          <ul>
            <li>
              Note that if you prefer to build and deploy <a href="https://webpack.js.org/configuration/devtool/#production"><code>sourcemap</code></a> files:
              <blockquote>
                <p>You should configure your server to disallow access to the Source Map file for normal users!</p>
              </blockquote>
            </li>
          </ul>
        </li>
      </ul>
      <h1 id="development">Development</h1>
      <h2 id="assets-source">Assets Source</h2>
      <ul>
        <li><strong>SASS/PostCSS</strong> files are located under <code>src/scss/</code></li>
        <li><strong>JavaScript</strong> files with support of latest ECMAScript <em>ES6 / ECMAScript 2016(ES7)/ etc</em> files are located under <code>src/js/</code></li>
        <li><strong>Image</strong> files are located under <code>src/images/</code></li>
        <li><strong>Font</strong> files are located under <code>src/fonts/</code></li>
        <li>
          <strong>HTML</strong> files are located under <code>src/</code>
          <ul>
            <li>It will <strong>automatically</strong> build <strong>all HTML files</strong> placed under <code>src/</code> directory, no need to manually configure each template anymore!</li>
          </ul>
        </li>
      </ul>
      <h2 id="build-assets">Build Assets</h2>
      <h3 id="one-time-build-assets-for-development">One time build assets for development</h3>
      <pre><code class="lang-sh">$ npm <span class="hljs-keyword">run</span><span class="bash"> build</span>
      </code></pre>
      <h3 id="build-assets-and-enable-source-files-watcher">Build assets and enable source files watcher</h3>
      <pre><code class="lang-sh">$ npm <span class="hljs-keyword">run</span><span class="bash"> watch</span>
      </code></pre>
      <p>This command is suitable if you develop with external web server.</p>
      <blockquote>
        <p><strong>Note:</strong> File watching does not work with <em>NFS</em> (<em>Windows</em>) and virtual machines under <em>VirtualBox</em>. Extend the configuration in such cases by:</p>
      </blockquote>
      <pre><code class="lang-js">module.exports = {
        <span class="hljs-comment">//...</span>
      <span class="hljs-symbol">  watchOptions:</span> {
      <span class="hljs-symbol">    poll:</span> <span class="hljs-number">1000</span> <span class="hljs-comment">// Check for changes every second</span>
        }
      };
      </code></pre>
      <h3 id="start-a-development-server-reloading-automatically-after-each-file-change-">Start a development server - reloading automatically after each file change.</h3>
      <pre><code class="lang-sh">$ npm <span class="hljs-keyword">run</span><span class="bash"> dev</span>
      </code></pre>
      <h1 id="production">Production</h1>
      <h2 id="build-assets-1">Assets Building</h2>
      <p>Optimize assets for production by:</p>
      <pre><code class="lang-sh">$ npm <span class="hljs-keyword">run</span><span class="bash"> production</span>
      </code></pre>
      <h2 id="get-built-assets">Get Built Assets</h2>
      <ul>
        <li><em>CSS</em> files are located under <code>/dist/css/</code></li>
        <li><em>JavaScript</em> files with support of <em>ES6 / ECMAScript 2016(ES7)</em> files are located under <code>/dist/js/</code></li>
        <li>
          <em>Images</em> are located under <code>/dist/images/</code>
          <ul>
            <li>Images part of the <em>design</em> (<em>usually referenced in the CSS</em>) are located under <code>/dist/images/design/</code></li>
            <li>Images part of the <em>content</em> (<em>usually referenced via <code>&lt;img&gt;</code> tags</em>) are located under <code>/dist/images/content/</code></li>
          </ul>
        </li>
        <li><em>Fonts</em> are located under <code>/dist/fonts/</code></li>
        <li><em>HTML</em> files are located under <code>/dist/</code></li>
      </ul>
      <h1 id="run-code-style-linters">Run Code Style Linters</h1>
      <h2 id="sass">SASS</h2>
      <pre><code class="lang-sh">$ npm <span class="hljs-keyword">run</span><span class="bash"> lint:sass</span></code></pre>
      <h2 id="javascript">JavaScript</h2>
      <pre><code class="lang-sh">$ npm <span class="hljs-keyword">run</span><span class="bash"> lint:js</span></code></pre>
      <h1 id="additional-tools">Additional Tools</h1>
      <h2 id="run-assets-bundle-analyzer">Run Assets Bundle Analyzer</h2>
      <pre><code class="lang-sh">$ npm <span class="hljs-keyword">run</span><span class="bash"> stats</span></code></pre>
      <blockquote>
        <p>This will open the visualisaion on the default configuraiton URL <code>localhost:8888</code>, you can change this URL or port following the <a href="https://github.com/webpack-contrib/webpack-bundle-analyzer#options-for-cli">package</a> documentation.</p>
      </blockquote>
      <h2 id="continuous-integration">Continuous Integration</h2>
      <p>This boilerplate template contains integration with <a href="https://travis-ci.org/">Travis CI</a>. The build system runs all linting scripts and deploys production optimized pages to <em>GitHub</em> pages upon push to the <code>master</code> branch. However, note that this deployment flow only works for <em>Project Pages</em>, as User and Organization pages <a href="https://help.github.com/articles/user-organization-and-project-pages/">only support the master branch flow</a>.</p>
      <p>For more information on how to set up alternative deployment processes, check out the <a href="https://docs.travis-ci.com/user/deployment">Travis CI documentation on deployment</a>. The service can deploy to dozens of cloud providers, including Heroku, AWS, and Firebase.</p>
    </main>
    <footer>
      <address>Documentation avaialable on the official <a href="https://github.com/WeAreAthlon/frontend-webpack-boilerplate/" target="_blank" rel="noopener">GitHub Repository</a>.</address>
      <address>Maintained by <a href="https://www.weareathlon.com/" target="_blank" rel="noopener">WeAreAthlon</a>.</address>
    </footer>
  </body>
</html>