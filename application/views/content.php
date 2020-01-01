<body>
<class div = "container" >

<main class="site-main">
    
<?php foreach ($posts as $item) : ?>
        <article class="post">
            <span class="post-avatar<?= $item['sticky'] ? ' bg-green' : '' ; ?>">
                <img src="<?= base_url('public/images');?>/avatar.jpg">
            </span>
            <span class="post-content<?= $item['sticky'] ? ' bg-green' : '' ; ?>">
                <p><?= $item['post']; ?></p>
                <div>
                    <?php if ($item['status'] == 'private') : ?>
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    <?php else: ?>
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    <?php endif; ?>
                    <span class="date"><?= date('d/m/Y H:i:s', strtotime($item['timestamp'])); ?></span>
                    <span class="icons"><?php $post_id = $item['post_id']; ?>                    
                        <a href="<?= base_url("form/update/$post_id"); ?>
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        <i class="fa fa-flag-o" aria-hidden="true"></i>
                    </span>
                </div>
            </span>
        </article>
    <?php endforeach; ?>

        <article class="post">
            <span class="post-avatar bg-green">
                <img src="public/images/avatar.jpg">
            </span>
            <span class="post-content bg-green ">
                <p>อันอ้อยตาลหวานลิ้นแล้วสิ้นซาก  แต่ลมปากหวานหูไม่รู้หาย<br>
                    ถึงเจ็บอื่นหมื่นแสนไม่แคลนคลาย เจ็บเจียนตายก็เพราะเหน็บให้เจ็บใจ</p>
                <div>
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <span class="date">2017/11/07 10:05 PM</span>
                    <span class="icons">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        <i class="fa fa-flag" aria-hidden="true"></i>
                    </span>
                </div>
            </span>
        </article>

        <article class="post">
            <span class="post-avatar">
                <img src="public/images/avatar.jpg" width="50" height="50">
            </span>
            <span class="post-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> <img src="http://wachira.ece.engr.tu.ac.th/cn342/images/coffee.jpg"></p>
                <div>
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    <span class="date">2017/11/07 9:37 PM</span>
                    <span class="icons">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        <i class="fa fa-flag-o" aria-hidden="true"></i>
                    </span>
                <div>
            </span>
        </article>

        <article class="post">
            <span class="post-avatar">
                <img src="public/images/avatar.jpg" width="50" height="50">
            </span>
            <span class="post-content">
                <p>Integer vestibulum vehicula aliquet. Donec bibendum et ligula a dapibus. Donec efficitur volutpat massa at tempor.
                    Ut at urna aliquam lectus feugiat pellentesque sed imperdiet eros. Sed in dolor ornare, rhoncus odio nec, pretium enim.
                    Duis vitae turpis efficitur, condimentum enim sit amet, placerat magna. </p>
                <div>
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <span class="date">2017/11/07 9:37 PM</span>
                    <span class="icons">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        <i class="fa fa-flag-o" aria-hidden="true"></i>
                    </span>
                <div>
            </span>
        </article>

        <article class="post">
            <span class="post-avatar">
                <img src="public/images/avatar.jpg" width="50" height="50">
            </span>
            <span class="post-content">
                <p>คนเราต้องเจอความลำบากบ้าง<br>
                    เพราะความลำบากจะทำให้ได้สติ<br>
                    ลำบากจะทำให้เกิดปัญญา<br>
                    ความลำบากจะทำให้เราเห็นคุณค่าของสิ่งที่เราเคยมี</p>
                <div>
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    <span class="date">2017/11/07 9:37 PM</span>
                    <span class="icons">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        <i class="fa fa-flag-o" aria-hidden="true"></i>
                    </span>
                <div>
            </span>
        </article>

        <article class="post">
            <span class="post-avatar">
                <img src="public/images/avatar.jpg" width="50" height="50">
            </span>
            <span class="post-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum massa velit, id iaculis sem gravida pharetra.
                    Sed egestas sagittis diam sit amet sollicitudin. Phasellus tincidunt sagittis nunc, in pellentesque mi bibendum ut.</p>
                <div>
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    <span class="date">2017/11/07 9:37 PM</span>
                    <span class="icons">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        <i class="fa fa-flag-o" aria-hidden="true"></i>
                    </span>
                <div>
            </span>
        </article>

        <div class="pagination">
            <a href="#">Older »</a>
        </div>

    </main>
</div>
</body>