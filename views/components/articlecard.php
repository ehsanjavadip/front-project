<article class="card" dir="rtl">
        <img class="card-img-top" src = '<?php echo $row['picturename']; ?>' draggable="false" width="400px" />
        <div class="card-body">
            <p class="articlecode" dir="rtl">کد مقاله :<font color="green"><?php echo $row['articlecode']; ?></font></p>
            <h3 class="card-title">
                <a href="?code=<?php echo $row['articlecode']; ?>">
                <?php echo $row['name']; ?>
                </a>
            </h3>
            <p class="category" style="color:tomato;"><?php echo $row['category']; ?></p>
            <h5 class="articlesubject"><?php echo $row['subject']; ?></h5>

               <a href="?code=<?php echo $row['articlecode']; ?>"><button type="button" class="seemore">مشاهده مقاله</button></a>
        </div>
</article>