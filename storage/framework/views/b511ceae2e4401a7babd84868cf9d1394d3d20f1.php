<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/"><?php echo app('translator')->get('general.home'); ?></a>
    </li> 
    <?php if(isset($subtitle)): ?>
        <?php if(isset($titleLink)): ?>
            <li class="breadcrumb-item">
                <a href="<?php echo e($titleLink); ?>"><?php echo e($title); ?></a>
            </li>
        <?php else: ?>
            <li class="breadcrumb-item breadcrumb-item-active" aria-current="page"><?php echo e($title); ?></li>
        <?php endif; ?>
        <?php if(isset($childTitle)): ?>
            <li class="breadcrumb-item">
                <a href="<?php echo e($subtitleLink); ?>"><?php echo e($subtitle); ?></a>
            </li>
            <?php if(isset($subChildTitle)): ?>
                <li class="breadcrumb-item">
                    <a href="<?php echo e($childLink); ?>"><?php echo e($childTitle); ?></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($subChildTitle); ?></li>
            <?php else: ?>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($childTitle); ?></li>
            <?php endif; ?>
            <?php else: ?>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($subtitle); ?></li>
            <?php endif; ?>
            <?php else: ?>
                <li class="breadcrumb-item active" aria-current="page"><?php echo e($title); ?></li>                                                          
    <?php endif; ?>
</ol><?php /**PATH C:\Users\jandos\Desktop\OpenServer\domains\go.testkz.ru\resources\views/partials/breadcrumbs.blade.php ENDPATH**/ ?>