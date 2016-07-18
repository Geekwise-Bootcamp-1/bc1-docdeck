<aside>
    <button type="button" id="asideToggle" class="btn"><i class="fa fa-close"></i><i class="fa fa-bars asideToggle"></i></button>
    <div class="navigation">
        <h2>Today's Topics</h2>
    </div>
    <div>
        <div class="course tip" data-title="bootcamp1" title="bootcamp1">
            <h1>bc1</h1></div>
        <hr>
        <div>
            <?php
                echo ($thisPage === 'lesson01.php')
                    ? '<a class="paginate disabled"><i class="fa fa-caret-left"></i> prev</a>'
                    : '<a class="paginate" href="/lessons/'.$pageArray[$pageKey-1].'"><i class="fa fa-caret-left"></i> prev</a>';

                echo ($thisPage === $lastPage)
                    ? '<a class="paginate disabled">next <i class="fa fa-caret-right"></i></a>'
                    : '<a href="'.$pageArray[$pageKey+1].'" class="paginate">next <i class="fa fa-caret-right"></i></a>';
            ?>
        </div>
    </div>
</aside>
