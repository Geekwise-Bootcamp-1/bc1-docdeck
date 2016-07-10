<aside>
    <div class="paging">
        <h2>Today's Topics</h2>
    </div>
    <div>
        <img src="/img/bc1.svg" alt="Bootcamp 1" width="50" height="auto">
        <hr>
        <div>
            <?php
                echo ($thisPage === 'day01.php')
                    ? '<a class="btn disabled"><i class="fa fa-caret-left"></i> prev</a>'
                    : '<a class="btn" href="/pages/'.$pageArray[$pageKey-1].'"><i class="fa fa-caret-left"></i> prev</a>';

                echo ($thisPage === $lastPage)
                    ? '<a class="btn disabled">next <i class="fa fa-caret-right"></i></a>'
                    : '<a href="'.$pageArray[$pageKey+1].'" class="btn">next <i class="fa fa-caret-right"></i></a>';
            ?>
        </div>
    </div>
</aside>
