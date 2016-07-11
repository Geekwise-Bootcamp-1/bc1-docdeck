<?php
    $url = $_SERVER['DOCUMENT_ROOT'];
    include $url.'/inc/head.php';
?>
<section data-title="Review">
    <article>
        <h1>Review</h1>
        <ol>
            <li>Name Three of the four elements that create a network</li>
            <li>What is a static web page?</li>
            <li>What is a dynamic web page?</li>
        </ol>
    </article>
</section>
<!--
        <ul>
            <li>Comments and variables</li>
            <li>Data Types
                <ul>
                    <li>String</li>
                    <li>Number</li>
                    <li>Boolean</li>
                    <li>Object</li>
                    <li>Array</li>
                    <li>Null</li>
                    <li>Undefined</li>
                </ul>
            </li>
            <li>HTML DOM – Document Object Model
                <ul>
                    <li>The HTML DOM is a standard object model and programming interface for html</li>
                    <li>It is structured as a tree of objects</li>
                    <li>The DOM interface allows us to get, add, modify, and delete HTML elements</li>
                </ul>
                <figure>
                    <img src="/img/pic_htmltree.gif" alt="The HTML DOM Tree of Objects">
                    <figcaption>
                        <small>Source: <a href="http://www.w3schools.com/js/js_htmldom.asp" target="_blank">w3schools.com</a></small>
                    </figcaption>
                </figure>
            </li>
        </ul>
    </article>
</section>
-->
<section data-title="What is Github Anyways?">
    <article>
        <h1>What is Github Anyways?</h1>
        <p>
            GitHub is a Git repository hosting service, but it adds many of its own features. While Git is a command line tool, GitHub provides a Web-based graphical interface. It also provides access control and several collaboration features, such as a wikis and basic task management tools for every project.
            <br /><br />
            In english:
        </p>
        <ul>
            <li>
                <h4>Git</h4>
                <ul>
                    <li>Git is a version control system. It manages and stores revisions of projects.</li>
                    <li>Git is primarily used for code, but can be used to manage any other type of file.</li>
                    <li>Think of Git as a filing system for every draft of a document.</li>
                </ul>
            </li>
            <li>
                <h4>Github</h4>
                <ul>
                    <li>Github is a graphical user interface (GUI) for your version control.</li>
                    <li>Each project is stored in repositories accessible to the world as open source.</li>
                    <li>Entire teams can contribute to a single project and every change or contribution is tracked and timestamped.</li>
                    <li>Millions of repositories can be watched, starred, and forked by any other developer.</li>
                    <li>Want to contribute to a project?
                        <ol>
                            <li>Find a project</li>
                            <li>Fork the repository</li>
                            <li>Clone a copy to your own computer</li>
                            <li>Make changes or add functionality that benefits the project</li>
                            <li>Submit a pull request so the original author can see your changes</li>
                            <li>The original author can then merge your changes</li>
                            <li>Feel great about how you contributed to improving the project</li>
                        </ol>
                    </li>
                </ul>
            </li>
        </ul>
    </article>
</section>

<section data-title="So How Do We Use Git?">
    <article>
        <h1>So How Do We Use Git?</h1>
        <p>
            When we set up our systems, we created accounts with Github and created our own repository on their servers. It's time to clone a copy of that repository onto our computer so as we develop our projects on our computers, we can push all of our changes online to always maintain a backup of all our work. Let's walk through the steps together.
        </p>
        <ol>
            <li>Open your Bash Terminal by pressing the Windows button</li>
            <li>Type BASH, highlight the Bash Terminal app and press Enter.
                <figure>
                    <img src="/img/bash-terminal.png" alt="Bash Terminal" />
                    <figcaption>Source: <a href="http://www.softantenna.com/wp/windows/bash-on-ubuntu-on-windows-10/">softantenna.com</a></figcaption>
                </figure>
                <p>
                    The green should be your user and computer name and the yellow is the current path. After the dollar sign ($) is where you type your terminal commands.
                </p>
            </li>
            <li>Type the following command:
                <code><pre>
cd ~/Desktop</pre></code>
                Press Enter. The new path should reflect that your current active directory is the Desktop.
            </li>
            <li>Now type:
                <code><pre>
ls -la</pre></code>
                The Terminal will list out any and all folders and files you have stored on the Desktop of your computer.
            </li>
            <li>Head back to our Github Bootcamp 1 Organization page and click on your repository.</li>
            <li>In the main utility bar, click the green "Clone or download" button. Check that the title of the popup says: "Clone with HTTPS" and click on the copy to clipboard icon.</li>
            <li>Back in the Terminal, type:
                <code><pre>
git clone [ins key]</pre></code>
            Press Enter. When you press the insert key, a URL will appear that is an absolute path to <strong>your personal</strong> repository.
            e.g.: <code><pre>
git clone https://github.com/Geekwise-Bootcamp-1/rbtstudio.git</pre></code>
                <blockquote>
                    Your URL is going to be different than what is demoed here in the documentation.<br>
                    Do <strong>NOT</strong> type:
                    <code><pre>
git clone [ins key]</pre></code>
                    Do <strong>NOT</strong> type:
                    <code><pre>
git clone https://github.com/Geekwise-Bootcamp-1/rbtstudio.git</pre></code>
                </blockquote>
            </li>
            <li>Let's now change directory to be within the new repository cloned to your desktop. Type:
                <code><pre>
cd [your repository]</pre></code>
                Press Enter.
                <blockquote>
                    Again... what you type is going to be different than what is demoed here in the documentation.<br>
                    Do <strong>NOT</strong> type:
                    <code><pre>
cd [your repository]</pre></code>
                </blockquote>
            </li>
            <li>
                Your current path should read something similar to:
                <code><pre>
$ ~/Desktop/[your repository]</pre></code>
            </li>
        </ol>
    </article>
</section>



<section data-title="General Terminal Commands">
    <article>
        <h1>General Terminal Commands</h1>
        <p>
            The following list of commands that have a wide use case. Aquaint yourself as much as possible to become a more valuable developer.
        </p>
        <ul>
            <li>
                <h4>cd</h4>
                Change directory
                <code><pre>
cd</pre></code>
            </li>
            <li>
                <h4>ls</h4>
                List information about file(s). Short listing.
                <code><pre>
ls</pre></code>
                <blockquote>
                    Options to append:
                    <code><pre>
ls -l</pre></code>
                    Long listing.
                    <code><pre>
ls -a</pre></code>
                    Listing including hidden files.
                    <code><pre>
ls -la</pre></code>
                    Long listing and including hidden files.
                </blockquote>
            </li>
            <li>
                <h4>mkdir</h4>
                Create a new directory
                <code><pre>
mkdir [directory name]</pre></code>
            </li>
            <li>
                <h4>touch</h4>
                Create a new file
                <code><pre>
touch [file name]</pre></code>
            </li>
        </ul>
    </article>
</section>
<section data-title="Git Specific Commands">
    <article>
        <h1>Git specific commands</h1>
        <p>
            The following commands are specific to making changes and communicating with Github and your remote repository.
        </p>
        <ul>
            <li>
                <h4>git status</h4>
                <code><pre>
git status</pre></code>
                Displays all files that have been modified. Red are untracked files, green are tracked files.
            </li>
            <li>
                <h4>git add</h4>
                <code><pre>
git add .</pre></code>
                Add all current changes to the next commit.
            </li>
            <li>
                <h4>git commit</h4>
                <code><pre>
git commit -m "[your commit message]"</pre></code>
                <strong>Stages all of the files into a "waiting room" preped for deployment to the repository. However every</strong> commit needs a message! Be descriptive. The more detailed your message, the easier it will be to find a version you can revert back to when you accidentally delete everything. <i class="fa fa-frown-o"></i>
            </li>
            <li>
                <h4>git push</h4>
                <code><pre>
git push</pre></code>
                Push all committed changes to your repository.
            </li>
        </ul>
    </article>
</section>
<section data-title="Assignment">
    <article>
        <h1>Assignment</h1>
        <ol>
            <li>Practice navigating the folder structure of your computer.</li>
            <li>Are there specific navigational options that would make moving back-and-forth between folders easier?</li>
            <li>Create new folders and files.</li>
            <li>Can you add multiple folders or files in a single command line?</li>
            <li>Are we able to move files or folders?</li>
            <li>What about duplicating a file?</li>
            <li>How can we remove files and folders?
                <blockquote>
                    <h2 style="color: red;">WARNING!</h2>
                    <p>
                        Improperly using the remove command can have devistating consequences if you're careless. Utilizing the command line does <strong>NOT</strong> ask "Are you sure?" before running the command. You can unintentionally delete important files required by the system to function properly. If you have any hesitation, wait until it can be demoed and discussed in class. Do <strong>NOT</strong> blindly experiment with commands you're uncertain of.
                    </p>
                </blockquote>
            </li>
        </ol>
    </article>
</section>
<?php include $url.'/inc/footer.php'; ?>
