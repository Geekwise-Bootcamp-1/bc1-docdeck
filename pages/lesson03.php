<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section data-title="Review">
    <article>
        <h1>Review</h1>
        <ol>
            <li>We're at a good milestone and we're ready to sync up our remote repository with our local repository. How do we see what files have been changed?</li>
            <li>If we need to have all the files tracked, what command do we run?</li>
            <li>What if we only want to track a single file. Can we do that? If so, how?</li>
            <li>Staging our work is the next step. How do we do that?</li>
            <li>Finally, how do we put all our files to the repository?</li>
        </ol>
    </article>
</section>
<section data-title="What is HTML?">
    <article>
        <h1>What is HTML?</h1>
        <p>
            HTML (Hypertext Markup Language) is used to define the structure and content of a web page.
        </p>
        <p data-height="550" data-theme-id="23663" data-slug-hash="bZoxRR" data-default-tab="html,result" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/bZoxRR/">BC1 Introduction to HTML</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
        <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
    </article>
</section>
<section data-title="Create Your Index Page">
    <article>
        <h1>Create Your Index Page</h1>
        <p>
            An index page (also referred to as the home page) will <strong>always</strong> be the file the web browser renders first. It is named index.html and resides in the root project folder.
        </p>
        <ol>
            <li>Open our Atom IDE.</li>
            <li>From the File menu item, select open.</li>
            <li>Find your repository folder on the Desktop, highlight the folder and click Open.</li>
            <li>If everything is working right, your repository folder name should be displayed at the top left of Atom.</li>
            <li>Right click the repository folder name, select "new file" and in the popup window at the top, type: <code class="inline">index.html</code> and press Enter.</li>
            <li>At the top of the page on line 1, type:
                <code><pre>
&lt;!doctype html&gt;</pre></code>
            </li>
            <li>On line 2, type:
                <code><pre>
&lt;!doctype html&gt;
&lt;html lang="en"&gt;</pre></code>
                Enter down a couple lines and type:
                <code><pre>
&lt;!doctype html&gt;
&lt;html lang="en"&gt;<br><br>
&lt;/html&gt;</pre></code>
            </li>
            <li>On line 3, type:
                <code><pre>
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
    &lt;head&gt;<br>
    &lt;/head&gt;<br>
&lt;/html&gt;</pre></code>
            </li>
            <li>
                On line 4, between the open and closing &lt;head&gt; tags add:
                <code><pre>
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;title&gt;Bootcamp 1 | HTML &amp; CSS&lt;/title&gt;
    &lt;/head&gt;<br>
&lt;/html&gt;</pre></code>
            </li>
            <li>On line 6, type:
                <code><pre>
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;title&gt;Bootcamp 1 | HTML &amp; CSS&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;<br>

    &lt;/body&gt;
&lt;/html&gt;</pre></code>
            </li>
            <li>
                We're almost done with the bones of the page!! After line 3, enter down creating a new blank line 4 and type:
                <code><pre>
&lt;!doctype html&gt;
&lt;html lang="en"&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;title&gt;Bootcamp 1 | HTML &amp; CSS&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;<br>

    &lt;/body&gt;
&lt;/html&gt;</pre></code>
            </li>
            <li>This is all of the minimum requirements for a webpage. Let's add one more thing before we demo it in the browser. Between the open and closing &lt;body&gt; tags, type the words "Hello World!". Don't forget to save your work and anywhere within the index.html page, right click the mouse and select "Open in Browser".</li>
        </ol>
    </article>
</section>
<section data-title="What Are All These Tags?">
    <article>
        <h1>What Are All These Tags?</h1>
        <p>
            HTML is a markup language. Each tag (also known as an element) represents a chunk of markup that has a semantic meaning. For instance...
        </p>
        <ul>
            <li>
                <h4>&lt;body&gt;&lt;/body&gt;</h4>
                <p>
                    The words "Hello World!" are just a string of letters pieced together to look like a sentence. But they are within the &lt;body&gt; tags. The web browser will see this and know to render is to the screen because it knows that any markup within the &lt;body&gt;, the user can see.
                </p>
            </li>
            <li>
                <h4>&lt;head&gt;&lt;/head&gt;</h4>
                <p>
                    Alternatively, anything within the &lt;head&gt; is meant only for the browser. Think of all the markup here as the "thoughts" of the browser.
                </p>
            </li>
            <li>
                <h4>&lt;title&gt;&lt;/title&gt;</h4>
                <p>
                    The one exception being the &lt;title&gt; tag. The text between these tags display on the browser tab. Any plain text will be rendered in this space.
                </p>
                <blockquote>
                    Notice that each tag begins with an open angle bracket (&lt;) and finishes with a closing angle bracket (&gt;).
                </blockquote>
                <blockquote>
                    Each of the above three items create a matching pair of tags. The first referred to as an opening tag, the second a closing tag. Again, each tag begins with an open angle bracket (&lt;) and finishes with a closing angle bracket (&gt;).
                </blockquote>
            </li>
            <li>
                <h4>&lt;meta&gt;</h4>
                <p>
                    But wait! You may be saying to yourselves. Surely this must be a typo. Where is the closing &lt;meta&gt; tag? These elements are called empty or void and only have a start tag since they can't have any content. They must not have an end tag in HTML.
                </p>
            </li>
            <li>
                <h4>&lt;!doctype&gt;</h4>
                <p>
                    The &lt;!doctype&gt; declaration must be the very first thing in your HTML document, before the &lt;html&gt; tag. Also, the &lt;!doctype&gt; declaration is not an HTML tag; it is an instruction to the web browser about what version of HTML the page is written in. In older versions of HTML, the doctype used to be written as such:
                </p>
                <code><pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/html4/loose.dtd"&gt;</pre></code>
                <p>
                    However, beginning with HTML5 and beyond, the doctype will only need to be written as:
                </p>
                <code><pre>
&lt;!doctype html&gt;</pre></code>
                <blockquote>
                    Note: The doctype can and often is written with all caps. A few other elements or values can also be written in uppercase as well, but for the majority of your work, you'll want to keep consistent and have your HTML and CSS written in lowercase.
                </blockquote>
            </li>
        </ul>
    </article>
</section>
<section data-title="What is CSS?">
    <article>
        <h1>What is CSS?</h1>
        <p>
            Cascading style sheet (CSS) is a style sheet language used for describing the presentation of a document written in a markup language.
        </p>
        <p data-height="600" data-theme-id="23663" data-slug-hash="PzJxxw" data-default-tab="css,result" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/PzJxxw/">BC1 Introduction to CSS</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
        <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
    </article>
</section>
<section data-title="Let's Style a Couple Things.">
    <article>
        <h1>Let's Style a Couple Things.</h1>
        <p>
            A quick note on CSS. Styling will take an abundance of your time. We're only going to add two styles to elements because we need to build a strong foundation for the markup <strong>first</strong>, then we'll get into styling more.
        </p>
        <ol>
            <li>Find the &lt;body&gt; tag and <strong>WITHIN</strong> the opening element, add a style attribute. The style attribute is then followed by an equals sign and an opening and closing quotation. Between the quotes write <code class="inline">background-color: lightgray;</code><br><br>
                <p data-height="150" data-theme-id="23663" data-slug-hash="EywGEJ" data-default-tab="html,result" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/EywGEJ/">BC1 First CSS</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>
                Now, sorrounding the words "Hello World!", wrap an &lt;h1&gt; tag. Don't forget to add the closing tag at the end!! Finally, <strong>WITHIN</strong> the opening element, add a style attribute, followed by an equals sign and opening and closing quotations. Between the quotes write <code class="inline">color: red;</code><br><br>
                <p data-height="300" data-theme-id="23663" data-slug-hash="mEBajO" data-default-tab="html,result" data-user="mhigley" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/mhigley/pen/mEBajO/">BC1 First CSS pt2</a> by Matthew Higley (<a href="http://codepen.io/mhigley">@mhigley</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
            </li>
            <li>We're done! Save your work and view it in the browser! Pat yourself on the back for a job well done. <i class="fa fa-thumbs-up"></i></li>
        </ol>
    </article>
</section>
<section data-title="Assignment">
    <article>
        <h1>Assignment</h1>
        <ol>
            <li>Create a new document called test.html</li>
            <li>Try to recreate the minimum required markup from memory.</li>
            <li>Search Google for new tags and add at least three new elements to the body of the page.</li>
            <li>Search Google for new inline styles to add to your tags. Add three new styles to your markup.</li>
            <li>Open in Browser and make sure it's all working.</li>
        </ol>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
